<?php

namespace App\Http\Controllers;

use App\Mail\SendContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactUsController extends Controller
{
    public function send(Request $request)
    {
        Mail::to("fancytowett@gmail.com")->send(new SendContactForm($request));
        Session::flash("Your request has been received.");
        return redirect()->back();
    }
}
