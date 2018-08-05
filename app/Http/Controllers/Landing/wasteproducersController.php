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
}
