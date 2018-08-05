<?php

namespace App\Http\Controllers\Landing;


use App\agent;
use App\Resident;
use App\Zone;
use App\zoneadmin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    public  function index(){
        $agent=agent::where('user_id',auth()->user()->id)->first();
        $zoneadmin=zoneadmin::where('zone_id',$agent->zone_id)->get();



        return view('Landing.agents',['zoneadmins'=>$zoneadmin]);
    }
    public function schedule(){
        return view('Landing.scheduleview');

}
    public function profile(){
        $agent=agent::where('user_id',auth()->user()->id)->first();
        $zone=Zone::all();
        return view('Landing.agentprofile', ['agent'=>$agent])->withZones($zone);

    }

    public  function  agentsschedule(){
        return view('landing.agentsschedule');

    }



}
