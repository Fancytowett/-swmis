<?php

namespace App\Http\Controllers\Schedule;

use App\Agent;
use App\Http\Controllers\Controller;
use App\WasteProducersSchedule;
use Illuminate\Http\Request;

class AgentScheduleController extends Controller
{
    public  function  agentsschedule(){
//        $agent=Agent::)->f;
        $schedules = WasteProducersSchedule::where('zone_id',auth()->user()->agent->zone_id)->get();

        return view('schedule.agentschedule')->withSchedules($schedules);

    }
}
