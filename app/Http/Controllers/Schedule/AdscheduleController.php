<?php

namespace App\Http\Controllers\Schedule;

use App\Agent;
use App\AgentsCollecting;
use App\Http\Controllers\Controller;
use App\User;
use App\WasteProducersSchedule;
use App\Zone;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdscheduleController extends Controller
{
    public function wasteproducersschedule(){
        $zone=Zone::all();
        $agent=Agent::with('user')->get();

        Return view('adschedules.wasteproducersschedule')
            ->withZones($zone)
            ->withAgents($agent);
    }

    public function saveschedule( Request $request ){
         $wasteproducersschedule= new WasteProducersSchedule();
         $wasteproducersschedule->date= Carbon::today();
         $wasteproducersschedule->day=$request->input('day');
         $wasteproducersschedule->stime=$request->input('stime');
         $wasteproducersschedule->ftime=$request->input('ftime');
         $wasteproducersschedule->zone_id=$request->input('zone_id');
         $wasteproducersschedule->save();

         if($wasteproducersschedule){
             $agents = $request->agents;
             foreach ($agents as $k=>$agent){
                 AgentsCollecting::create([
                     'schedule_id' => $wasteproducersschedule->id,
                     'agent_id' => $agent
                 ]);

             }
         }

         return redirect()->back()->withStatus('schedule succefully added');
     }

    public function wasteproducersschedulelist(){
//         if( $schedule=WasteProducersSchedule::where('zone_id',auth()->user()->resident->zone_id)->get())
//         {
//             return view('adschedules.wasteproducersschedulelists')->withSchedules($schedule);
//         }else{
//             $schedule=WasteProducersSchedule::where('zone_id' ,auth()->user()->company->zone_id)->get();
//             return view('adschedules.wasteproducersschedulelists')->withSchedules($schedule);
//         }
        $schedules = WasteProducersSchedule::with('zone')->get();
        return view('adschedules.wasteproducersschedulelists')->withSchedules($schedules);
    }
}
