<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $id = Auth::user()->id;
        // $dishes = Dish::where('user_id', Auth::id())->get();
        // $orders = Order::with('dishes')->where('user_id', $id)->get();
        // dd($orders);
        return view('admin.home');
    }
}
