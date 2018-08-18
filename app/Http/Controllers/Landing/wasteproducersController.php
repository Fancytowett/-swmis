<?php

namespace App\Http\Controllers\Landing;

use App\company;
use App\Resident;
use App\Zone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class wasteproducersController extends Controller
{
    public function index(){
        return view('Landing.wasteproducers');
    }
    public  function  wasteproducersschedule(){
        return view('landing.wasteproducersschedule');
    }

    public  function zonecompanies(){
        $company=company::all();
            $zone=Zone::all();
        return view('landing.zonedetails.zonecompanies')->withZones($zone)->withCompanies($company);
    }

    public function  zoneresidents(){
        $resident=Resident::all();
        $zone=Zone::all();
        return view('landing.zonedetails.zoneresidents')->withResidents($resident)->withZones($zone);
    }
    public function wasteproducerprofile(){
        $zone=Zone::all();
        if($resident=Resident::where('user_id',auth()->user()->id)->first())
        {
            return view('landing.wasteproducerresidentprofile',['resident'=>$resident])->withZones($zone);
        }
        else
        {
            $company=company::where('user_id',auth()->user()->id)->first();
            return view('landing.wasteproducerscompanyprofile',['company'=>$company])->withZones($zone);
        }
    }
    public  function  residentgetprofile(Resident $resident){
        $resident->load('user');
        return response()->json($resident);
    }
    public  function residentupdateprofile(Resident $resident,Request $request){
        $resident->update(array_except($request->resident,'user'));
        $resident->user->update($request->resident['user']);
        return response()->json(['success'=>true]);
    }
    public function getcompanyprofile(Company $company){
        $company->load('user');
        return response()->json($company);
    }
    public function updateprofile(Company $company ,Request $request){
        $company->update(array_except($request->company,'user'));
        $company->user->update($request->company['user']);
        return response()->json(['success'=>true]);
    }
}
