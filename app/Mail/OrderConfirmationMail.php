<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Models\Order;
use App\User;


class OrderConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $cart = json_decode($_COOKIE['cart'], true);
        $order = json_decode($_COOKIE['order'], true);
        

        $user = User::findOrFail($cart[0]['dish']['user_id']);

        return $this->view('mails.order_confirmation', compact('cart', 'order', 'user'));
    }
}
