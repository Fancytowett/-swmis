<?php

namespace App\Http\Controllers\Landing;

use App\agent;
use App\company;
use App\Resident;
use App\Residentwaste;
use App\Wastes;
use App\Zone;
use App\zoneadmin;
use Carbon\Carbon;
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

    /**
     * @return mixed
     */
    public function zonewastereport(){
        $zone=Zone::all();
        return view('landing.zonewastereport')->withZones($zone);

    }
    public function zonewastereportsave(Request $request){
        $wastereport= new wastes();
        $wastereport->date= Carbon::today();
        $wastereport->day=$request->input('day');
        $wastereport->waste_type=$request->input('waste_type');
        $wastereport->zone_id=$request->input('zone_id');
        $wastereport->quantity=$request->input('quantity');
        $wastereport->save();
        return redirect()->back();


    }
    public function zonewastereportlist()
    {
        $waste=Wastes::all();
    return view('landing.zonewastereportlist')->withWastes($waste);
    }
    public function agentresidentrecordedwaste()
    {
        $user = auth()->user();
        $zone = zoneadmin::where('user_id',$user->id)->first();
        $residentwaste=Residentwaste::with('zone')->where('zone_id',$zone->id)->get();

        return view('landing.agentresidentrecordedwaste')->withWastes($residentwaste);
    }


}
