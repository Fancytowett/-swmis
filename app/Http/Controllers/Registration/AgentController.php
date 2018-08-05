<?php

namespace App\Http\Controllers\Registration;

use App\Agent;
use App\Http\Controllers\Controller;
use App\User;
use App\Zone;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function regagent(){
        $agents=Agent::all();
        $zones=Zone::all();
        return view('registration.agents')->withAgents($agents)->withZones($zones);
    }

    public function saveagent(Request $request){
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

        return redirect()->back()->withStatus(' Registered successfully');
    }
    public  function  destroy($id){
        $agent=agent::find($id);
        User::find($agent->user_id)->delete();
          $agent->delete();
        return redirect()->back()->withStatus('agent deleted');

    }
}
