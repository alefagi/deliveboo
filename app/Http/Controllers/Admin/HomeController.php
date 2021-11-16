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
        $years = [];

        $orders_all = Order::with('dishes')->get()->toArray();

        foreach ($orders_all as $order) {
            $dishes = $order['dishes'];
            if ($dishes && $order['dishes'][0]['user_id'] == Auth::id()) {
                // dd($order['dishes'][0]['user_id']);
                $orders[] = $order;
            }
        };
        // dd($orders);

        foreach ($orders as $order) {
            $date = Carbon::parse($order['date']);
            if (array_key_exists($date->year, $totals)) {
                if (array_key_exists($date->month, $totals[$date->year])) {
                    $totals[$date->year][$date->month]['total'] += $order['total'];
                };
                // $total[$date->year]['total'] += $order['total'];
            } else {
                $total[$date->year][$date->month]['total'] = $order['total'];
                $totals[$date->year] = $total[$date->year];
            }
            if (!array_key_exists($date->year, $years)) {
                if (!in_array($date->year, $years)) {
                    $years[] = $date->year;
                }
            }
        }


        $totals_current_year = [];
        for ($i = 1; $i <= 12; $i++) {
            if (array_key_exists($i, $totals[Carbon::now()->year])) {
                $month = $totals[2021][$i];
                if ($month['total']) {
                    $totals_current_year[] = $month['total'];
                }
            } else {

                $totals_current_year[] = 0;
            }
        }
        // dd($totals);
        return view('admin.home', compact('totals', 'totals_current_year', 'years'));
    }
}
