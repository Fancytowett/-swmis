<?php

namespace App\Http\Controllers\Schedule;

use App\Company;
use App\Http\Controllers\Controller;
use App\Resident;
use App\WasteProducersSchedule;
use App\Zoneadmin;
use Illuminate\Http\Request;

class WasteproducersscheduleController extends Controller
{
    public function zonewasteproducersschedule(){
        $user=auth()->user();
        $zoneadmin=Zoneadmin::where('user_id',$user->id)->first();
        $schedules=WasteProducersSchedule::where('zone_id',$zoneadmin->zone_id)->get();

        return view('landing.wasteproducersschedule')->withSchedules($schedules);
    }
    public  function wasteproducersscheduleview(){
        $user=auth()->user();
        if( $resident=Resident::where('user_id',$user->id)->first())
        {
        $schedules=WasteProducersSchedule::where('zone_id',$resident->zone_id)->get();
            return view('landing.wasteproducersscheduleview')->withSchedules($schedules);
        }
        else{
            $company=Company::where('user_id',$user->id)->first();
            $schedules=WasteProducersSchedule::where('zone_id',$company->zone_id)->get();

            return view('landing.wasteproducersscheduleview')->withSchedules($schedules);

        }


    }
}
