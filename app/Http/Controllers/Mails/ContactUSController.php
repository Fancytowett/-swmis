<?php

namespace App\Http\Controllers\Mails;

use App\Contact_us;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Mail;

class ContactUSController extends Controller
{
    public function contactUS()
    {
        return view('welcome');
    }
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
        Contact_us::create($request->all());

        Mail::send('email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('email');
                $message->to('fancytowett@gmail.com', 'Admin')->subject('swims Feedback');
            });

        return back()->with('success', 'Thanks for contacting us!');
    }

}
