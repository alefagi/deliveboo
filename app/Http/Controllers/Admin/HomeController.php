<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\User;
use App\Models\Dish;
use Carbon\Carbon;
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

        $orders = [];
        $totals = [];


        $orders_all = Order::with('dishes')->get()->toArray();
        // $dishes_user = Dish::with('user')->where('user_id', Auth::id())->get()->toArray();
        // dd($dishes_user);
        // dd($orders_all[101]['dishes'][0]);
        foreach ($orders_all as $order) {
            $dishes = $order['dishes'];
            if ($dishes && $order['dishes'][0]['user_id'] == Auth::id()) {
                // dd($order['dishes'][0]['user_id']);
                $orders[] = $order;
            }
        };
        

        foreach ($orders as $order) {
            $date = Carbon::parse($order['date']);
            if (array_key_exists($date->year, $totals)) {
                if (array_key_exists($date->month, $totals[$date->year])) {
                    $totals[$date->year][$date->month]['total'] += $order['total'];
                }
                // $total[$date->year]['total'] += $order['total'];
            } else {
                $total[$date->year][$date->month]['total'] = $order['total'];
                $totals[$date->year] = $total[$date->year];
            }
        }

        $totals_year = [];
        for ($i = 1; $i <= 12; $i++) {
            if (array_key_exists($i, $totals[2021])) {
                $month = $totals[2021][$i];
                if ($month['total']) {
                    $totals_year[] = $month['total'];
                }
            } else {

                $totals_year[] = 0;
            }
        }
        
        return view('admin.home', compact('totals', 'totals_year'));
    }
}
