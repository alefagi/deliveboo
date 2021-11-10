<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Dish;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRestaurants()
    {
        $users = User::with('cuisines', 'dishes')->get();
        return response()->json($users);
    }

    public function getDishes($id)
    {
        $dishes = Dish::with('user','tags')->where('user_id', $id)->get();
        return response()->json($dishes);
    }
}
