<?php

namespace App\Http\Controllers;

use App\PaymentConfirmation;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function outputPayment(){
        $payment=PaymentConfirmation::all();
        return view('payments.paymentrecords')->withPayments($payment);
    }

}
