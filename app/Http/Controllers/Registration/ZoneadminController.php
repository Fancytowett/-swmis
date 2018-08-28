<?php

namespace App\Http\Controllers\Registration;
use App\Agent;
use App\Http\Controllers\Controller;
use App\Mail\SendUserPassword;
use App\User;
use App\Zone;
use App\Zoneadmin;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ZoneadminController extends Controller
{
    public function regzoneadmin()
    {
        $zones=Zone::all();
        $agents=Agent::all();
        return view('registration.zoneadmin')->withZones($zones)->withAgents($agents);
    }

    public function store( Request $request){

        $this->validate($request, [
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'phone' => 'min:10|numeric'
        ]);

        $user= new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        $user->user_type=2;
        $user->save();


         $zoneadmin= new Zoneadmin();
         $zoneadmin->user_id= $user->id;
         $zoneadmin->zone_id=$request->input('zone_id');
         $zoneadmin->phone=$request->input('phone');
         $zoneadmin->save();

        Mail::to($request->email)->send(new SendUserPassword($request));

        session()->flash('status',"Registered successfully. Password sent via email.");

     return redirect()->back();
    }
    public function destroy($id)
    {
        $zadmin = Zoneadmin::find($id);
        User::find($zadmin->user_id)->delete();
        $zadmin->delete();
        return redirect()->back()->withStatus('record deleted');

    }
//    public function  update(Request $request ,$id){
//
//        $zoneadmin = Zoneadmin::find($id);
//        User::find($zoneadmin->user_id);
//        $zoneadmin->update($request->all());
//        return redirect()->back();
//    }
}
