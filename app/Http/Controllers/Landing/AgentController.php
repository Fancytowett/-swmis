<?php

namespace App\Http\Controllers\Landing;


use App\Agent;
use App\Company;
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
    public function agentresidents(){
        $user=auth()->user();
        $zone=Agent::where('user_id',$user->id)->first();
        $resident=Resident::with('user')->where('zone_id', $zone->zone_id)->get();
        return view('landing.agentresidents')->withResidents($resident);
}

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function agentcompanies(){
    $user=auth()->user();
    $zone=Agent::where('user_id',$user->id)->first();
    $company=Company::with('user')->where('zone_id',$zone->zone_id)->get();
        return view('landing.agentcompanies')->withCompanies($company);
}
 public function agentresidentwasterecord(){
        $resident=Resident::all();

        return view('landing.agentresidentswasterecords')->withResidents($resident);
 }
    public function agentcompanywasterecord(){
        $company=Company::all();
        return view('landing.agentcompanywasterecords')->withCompanies($company);
    }
    }
