<?php

namespace App\Http\Controllers\Landing;


use App\Agent;
use App\Resident;
use App\Zone;
use App\Zoneadmin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    public  function index(){
        $agent=Agent::where('user_id',auth()->user()->id)->first();
        $zoneadmin=Zoneadmin::with('user')->where('zone_id',$agent->zone_id)->get()->first();

        return view('landing.agents',['zoneadmins'=>$zoneadmin]);
    }
    public function schedule(){
        return view('landing.scheduleview');

}
    public function profile(){
        $agent=Agent::where('user_id',auth()->user()->id)->first();
        $zone=Zone::all();
        return view('landing.agentprofile', ['agent'=>$agent])->withZones($zone);

    }

    public  function  agentsschedule(){
        return view('landing.agentsschedule');

    }

    public function getProfile(Agent $agent)
    {
        $agent->load('user');
        return response()->json($agent);
    }

    public function updateProfile(Agent $agent, Request $request)
    {
        $agent->update(array_except($request->agent,'user'));
        $agent->user->update($request->agent['user']);
        return response()->json(['success'=>true]);
    }

}
