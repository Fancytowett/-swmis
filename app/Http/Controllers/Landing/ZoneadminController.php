<?php

namespace App\Http\Controllers\Landing;

use App\agent;
use App\company;
use App\Resident;
use App\zoneadmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ZoneadminController extends Controller
{
    public function index(){

        $user=auth()->user();
        $zone=zoneadmin::where('user_id',$user->id)->first();
        $companies=Company::with('user')->where('zone_id',$zone->zone_id)->get();

        return view('landing.zoneadmin',['companies'=>$companies,'zone'=>$zone]);
}
public function  zoneadminprofile(){
    $zoneadmin=zoneadmin::where('user_id',auth()->user()->id)->first();

        return view('landing.zoneadminprofile',['zoneadmin'=>$zoneadmin]);

}
public function zoneagents(){
        $agent=agent::all();
        return view('landing.zonedetails.zoneagents')->withAgents($agent);
}



public function zoneagentsschedule()
  {
        return view('landing.zoneagentsschedule');
  }
public function zonecompanies(){
        return view('landing.zonedetails.zonecompanies');
  }
public function zonepayments(){
        return view('landing.zonepayments');

  }
    public function listzoneagents()
    {

        $user = auth()->user();
        $zone = zoneadmin::where('user_id',$user->id)->first();
        $agents = agent::with('user')->where('zone_id',$zone->zone_id)->get();
        return view('landing.zoneadminlanding.zoneagents',['agents'=>$agents]);
    }
    public  function listzoneresidents(){
        $user=auth()->user();
        $zone=zoneadmin::where('user_id',$user->id)->first();
        $residents=Resident::with('user')->where('zone_id', $zone->zone_id)->get();
        return view('landing.zoneadminlanding.zoneresidents',['residents'=>$residents]);
    }
    public  function listzonecompanies(){
        $user=auth()->user();
        $zone=zoneadmin::where('user_id',$user->id)->first();
        $companies=company::with('user')->where('zone_id',$zone->zone_id)->get();
        return view('landing.zoneadminlanding.zonecompanies',['companies'=>$companies]);
    }
    public  function  getprofile(Zoneadmin $zoneadmin){

        $zoneadmin->load('user');
        return response()->json($zoneadmin);
    }
    public  function updateprofile(Zoneadmin $zoneadmin,Request $request){
        $zoneadmin->update(array_except($request->zoneadmin,'user'));
        $zoneadmin->user->update($request->zoneadmin['user']);
        return response()->json(['success'=>true]);
    }


}
