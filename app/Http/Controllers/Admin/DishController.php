<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Tag;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::where('user_id', Auth::id())->get();
        
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dish = new Dish();
        $tags = Tag::all();

        return view('admin.dishes.create', compact('dish', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:dishes|min:1',
            'description' => 'nullable|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required|numeric|min:0.01|max:999999.99',
            'visible' => 'required|boolean',
        ]);

        $data = $request->all();

        $dish = new Dish();
        $data['user_id'] = Auth::id();
        
        if(array_key_exists('cover', $data)) {
            $img_path = Storage::put('uploads', $data['cover']);
            $data['cover'] = $img_path;
        }
        else $data['cover'] = 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg';

        $dish->fill($data);
        $dish->save();

        if(array_key_exists('tags', $data)) $dish->tags()->attach($data['tags']);

        return redirect()->route('admin.dishes.show', compact('dish'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $tags = Tag::all();
        $tagsId = $dish->tags->pluck('id')->toArray();


        return view('admin.dishes.edit', compact('dish', 'tags', 'tagsId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $request->validate([
            'name' => ['required', 'string', Rule::unique('dishes')->ignore($dish->id),'min:1'],
            'description' => 'nullable|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required|numeric|min:0.01|max:999999.99',
            'visible' => 'required|boolean',
        ]);

        $data = $request->all();
        if(!array_key_exists('tags', $data)) $dish->tags()->detach();
        else $dish->tags()->sync($data['tags']);

        if(array_key_exists('cover', $data)) {
            $img_path = Storage::put('uploads', $data['cover']);
            $data['cover'] = $img_path;
        }

        $dish->update($data);

        return redirect()->route('admin.dishes.show', $dish->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();

        return redirect()->route('admin.dishes.index')->with('alert-message', 'Dish deleted')->with('alert-type', 'success');
    }
}