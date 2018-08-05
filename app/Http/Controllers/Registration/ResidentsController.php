<?php

namespace App\Http\Controllers\Registration;


use App\Http\Controllers\Controller;
use App\Recycler;
use App\Resident;
use App\User;
use App\Zone;
use Illuminate\Http\Request;

class ResidentsController extends Controller
{
    public function residentreg(){
        $zones=Zone::all();
        return view('registration.residents')->withZones($zones);
    }


    public function store(Request $request){
        $user= new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        $user->user_type=3;
        $user->save();



        $resident = new Resident();
        $resident->user_id = $user->id;
        $resident->phone=$request->input('phone');
        $resident->zone_id=$request->input('zone_id');
        $resident->waste_type=$request->input('waste_type');
        $resident->period=$request->input('period');
        $resident->save();

        return redirect()->back()->withStatus('Registered succesfully');

    }
    public  function destroy($id){
        $resident=Resident::find($id);
        User::find($resident->user_id)->delete();
        $resident->delete();
        return redirect()->back();
    }
}
