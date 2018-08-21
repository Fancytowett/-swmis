<?php

namespace App\Http\Controllers\Schedule;

use App\Http\Controllers\Controller;
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
}
