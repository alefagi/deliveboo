<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Dish;
use Braintree;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmationMail;
use App\User;




class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment($total)
    {
        $gateway = new Braintree\Gateway ([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

        $token = $gateway->ClientToken()->generate();
        return view('guest.orders.payment', compact('token', 'total'));
    }

    public function store(Request $request, $total) {
        $gateway = new Braintree\Gateway ([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

        $amount = $total;
        $nonce = $request->payment_method_nonce;

        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            $data = $cart = json_decode($_COOKIE['data'], true);
            $cart = json_decode($_COOKIE['cart'], true);

            $order = new Order();
            $order->fill($data);
            $order->total = $total;
            $order->status = 0;
            $order->save();
            
            foreach($cart as $item) {
                $order->dishes()->attach($item['dish']['id'], ['quantity' => $item['quantity']]);
            }

            $transaction = $result->transaction;

            $user = User::findOrFail($cart[0]['dish']['user_id']);
            $restaurantEmail = $user->email;

            $emails = [$order->email, $restaurantEmail];

            foreach($emails as $email) {
                Mail::to($email)->send(new OrderConfirmationMail());
            }
            
            return view('guest.orders.confirmation');
        } else {
            $errorString = "An error occured with the payment we're sorry";

            foreach($result->errors->deepAll() as $error) {
                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
            }

            $_SESSION["errors"] = $errorString;
            return view('guest.home', compact('errorString'));
        }
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
        $totalQuantity = 0;
        foreach($cart as $item){
            $total += $item->dish->price * $item->quantity;
            $totalQuantity += $item->quantity;
        };
        $order = new Order();
        $total = number_format($total, 2);

        setcookie('cart', json_encode($cart), time()+3600);

        return view('guest.orders.create', compact('order','cart','total','totalQuantity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function redirect(Request $request)
    {
        $cart = json_decode($_COOKIE['cart'], true);

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
        setcookie('data', json_encode($data), time()+3600);
        setcookie('total', json_encode($total), time()+3600);

        return redirect()->route('buy.payment', ['total' => $total]);
    }
}
