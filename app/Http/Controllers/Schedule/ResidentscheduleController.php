<?php

namespace App\Http\Controllers\Schedule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResidentscheduleController extends Controller
{
    public function scheduleview(){

        return view('schedule.residentschedule');
    }
}
