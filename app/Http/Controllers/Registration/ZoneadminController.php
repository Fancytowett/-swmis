<?php

namespace App\Http\Controllers\Registration;
use App\Agent;
use App\Http\Controllers\Controller;
use App\User;
use App\Zone;
use App\zoneadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ZoneadminController extends Controller
{
    public function regzoneadmin()
    {
        $zones=Zone::all();
        $agents=Agent::all();
        return view('Registration.zoneadmin')->withZones($zones)->withAgents($agents);
    }

    public function store( Request $request){
        $user= new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        $user->user_type=2;
        $user->save();


         $zoneadmin= new zoneadmin();
         $zoneadmin->user_id= $user->id;
         $zoneadmin->zone_id=$request->input('zone_id');
         $zoneadmin->phone=$request->input('phone');

         $zoneadmin->save();
     return redirect()->back()->withStatus('successfully saved');

    }
    public function destroy($id)
    {

        $zadmin = zoneadmin::find($id);
        User::find($zadmin->user_id)->delete();
        $zadmin->delete();
        return redirect()->back()->withStatus('record deleted');

    }
    public function  update(Request $request ,$id){

        $zoneadmin = zoneadmin::find($id);
        User::find($zoneadmin->user_id);
        $zoneadmin->update($request->all());
        return redirect()->back();
    }
}
