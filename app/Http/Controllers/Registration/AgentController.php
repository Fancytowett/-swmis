<?php

namespace App\Http\Controllers\Registration;

use App\Agent;
use App\Http\Controllers\Controller;
use App\Mail\SendUserPassword;
use App\User;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AgentController extends Controller
{
    public function regagent(){
        $agents=Agent::all();
        $zones=Zone::all();
        return view('registration.agents')->withAgents($agents)->withZones($zones);
    }

    public function saveagent(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email'=>'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone'=>'required|min:10|max:10',
            'zone_id'=>'required'

        ]);

        $user=new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        $user->user_type=1;
        $user->save();

        $agent = new Agent();
        $agent->user_id=$user->id;
        $agent->phone = $request->input('phone');
        $agent->zone_id=$request->input('zone_id');


        $agent->save();

        //Code to send email.
        Mail::to($request->email)->send(new SendUserPassword($request));

        Session::flash("Registered successfully. Password sent via email.");

        return redirect()->back();
    }
    public  function  destroy($id){
        $agent=agent::find($id);
        User::find($agent->user_id)->delete();
          $agent->delete();
        return redirect()->back()->withStatus('agent deleted');

    }
}
