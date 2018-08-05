<?php

namespace App\Http\Controllers\Registration;
use App\Agent;
use App\Http\Controllers\Controller;

use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZoneController extends Controller
{
    public  function regzone(){
        $agents = Agent::all();
        $zones=Zone::all();
        return view('registration.zone')->withAgents($agents)->withZones($zones);
    }
    public function create( Request $request){

       $zone = new Zone();

       $zone->name=$request->input('zone_name');
       $zone->save();

        return redirect()->back()->withStatus('Saved Successfully!');
    }
    public function destroy($id){
        zone::destroy($id);
        return redirect()->back()->withStatus('record deleted');

    }
//    public function delete(){
//        $zones=Zone::all();
//        return view('zonelist.zonelist')->withZones($zones);
//    }
    public  function update(Request $request){
       $zone=Zone::findOrFail($request->zone_id);
       $zone->update($request->only('name') );



       return back();

//        return view('zonelist.zonelist',compact('zones'));
//return redirect()->back();

    }
}

