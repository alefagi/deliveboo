<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Dish;




class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guest.orders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($cart)
    {   
        $auxArray = json_decode($cart);
        $cart = [];
        foreach($auxArray as $item) {
            array_push($cart, (object)["dish" => Dish::findOrFail($item->dishId), "quantity" => $item->quantity]);
        };
        $total = 0;
        foreach($cart as $item){
            $total += $item->dish->price * $item->quantity;
        };
        $order = new Order();

        setcookie('cart', json_encode($cart), time()+3600);
        return view('guest.orders.create',compact('order','cart','total'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = json_decode($_COOKIE['cart'], true);
        

        // dd($cart);

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|numeric',
        ]);

        $total = 0;
        foreach($cart as $item){
            $total += $item['dish']['price'] * $item['quantity']; 
        };

        $data = $request->all();


        $order = new Order();
        $order->fill($data);
        $order->total = $total;
        $order->status = 0;
        $order->save();

        return redirect()->route('buy.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}