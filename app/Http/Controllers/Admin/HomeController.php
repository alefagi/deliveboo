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

        $months = ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'];

        $orders_all = Order::with('dishes')->get()->toArray();

        foreach ($orders_all as $order) {
            $dishes = $order['dishes'];
            if ($dishes && $order['dishes'][0]['user_id'] == Auth::id()) {
                $orders[] = $order;
            }
        };


        if (!empty($orders)) {
            foreach ($orders as $order) {
                $date = Carbon::parse($order['date']);
                if (array_key_exists($date->year, $totals)) {
                    if (array_key_exists($date->month, $totals[$date->year])) {
                        $totals[$date->year][$date->month]['total'] += $order['total'];

                        if (array_key_exists($date->day, $totals[$date->year][$date->month])) {

                            $totals[$date->year][$date->month][$date->day] += $order['total'];
                        } else {

                            $totals[$date->year][$date->month][$date->day] = $order['total'];
                        }
                    };
                } else {
                    $totals[$date->year][$date->month]['total'] = $order['total'];
                    $totals[$date->year][$date->month][$date->day] = $order['total'];
                }

                if (!array_key_exists($date->year, $years)) {
                    if (!in_array($date->year, $years)) {
                        $years[] = $date->year;
                    }
                }
            }

            $current_year = Carbon::now()->year;
            $current_month = Carbon::now()->month;
        } else {
            $totals = [];
        }


        $user = User::where('id', Auth::id())->get();

        return view('admin.home', compact('totals', 'years', 'months', 'current_year', 'current_month','user'));
    }
}
