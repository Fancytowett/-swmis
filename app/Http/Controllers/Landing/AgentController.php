<?php

namespace App\Http\Controllers\Landing;


use App\Agent;
use App\Company;
use App\Companywaste;
use App\Resident;
use App\Residentwaste;
use App\User;
use App\Zone;
use App\Zoneadmin;


use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

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
             $user=auth()->user();
             $agent=Agent::where('user_id',$user->id)->first();
             $zone=Zone::all();
            $resident=Resident::all();

            return view('landing.agentresidentswasterecords')->withResidents($resident)->withAgents($agent)->withZones($zone);
     }

    public function agentcompanywasterecord(){
        $user=auth()->user();
        $agent=Agent::where('user_id',$user->id)->first();
        $zones=Zone::all();
        $companies=Company::all();
        return view('landing.agentcompanywasterecords',compact('zones','companies','agent'));
    }

    public  function agentresidentwastesave(Request $request){
        $user= new user();
        $residentwastes = new Residentwaste();
        $residentwastes->zone_id= auth()->user()->agent->zone->id;
        $residentwastes->agent_id = auth()->user()->agent->id;
        $residentwastes->date=Carbon::today();
        $residentwastes->day = $request->input('day');
        $residentwastes->resident_id = $request->input('resident_id');
        $residentwastes->quantity = $request->input('quantity');
        $residentwastes->save();
        Session::flash("Record sent successfully!");
        return redirect()->back()->withStatus('Record sent successfully!');
    }

    public function agentcompanywastesave( Request $request){
//        $user= new user();
        $companywastes= new Companywaste();
        $companywastes->zone_id=auth()->user()->agent->zone->id;
        $companywastes->agent_id=auth()->user()->agent->id;
        $companywastes->date=Carbon::today();
        $companywastes->day=$request->input('day');
        $companywastes->company_id=$request->input('company_id');
        $companywastes->quantity=$request->input('quantity');
        $companywastes->save();

        return redirect()->back()->withStatus('Record sent successfully!');

    }

}
