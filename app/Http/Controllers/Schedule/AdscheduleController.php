<?php

namespace App\Http\Controllers\Schedule;

use App\Agent;
use App\agentsCollecting;
use App\Http\Controllers\Controller;
use App\User;
use App\wasteProducersSchedule;
use App\Zone;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdscheduleController extends Controller
{
    public function wasteproducersschedule(){
        $zone=Zone::all();
        $agent=Agent::with('user')->get();
        Return view('Adschedules.Wasteproducersschedule')->withZones($zone)->withAgents($agent);
    }
 public function saveschedule( Request $request ){
//     var_dump($request->all());
         $wasteproducersschedule= new WasteProducersSchedule();
         $wasteproducersschedule->date= Carbon::today();
         $wasteproducersschedule->day=$request->input('day');
         $wasteproducersschedule->stime=$request->input('stime');
         $wasteproducersschedule->ftime=$request->input('ftime');
         $wasteproducersschedule->zone_id=$request->input('zone_id');
         $wasteproducersschedule->save();
//     var_dump($request->agents);
     if($wasteproducersschedule){
         $agents = $request->agents;
         foreach ($agents as $k=>$agent){
             AgentsCollecting::create([
                 'schedule_id' => $wasteproducersschedule->id,
                 'agent_id' => $agent
             ]);
         }
     }
     return redirect()->back();
 }
 public function wasteproducersschedulelist(){

       if( $schedule=WasteProducersSchedule::where('zone_id',auth()->user()->resident->zone_id)->get())
     {
         return view('Adschedules.wasteproducersschedulelists')->withSchedules($schedule);
     }
       else{
          $schedule=WasteProducersSchedule::where('zone_id' ,auth()->user()->company->zone_id)->get();
         return view('Adschedules.wasteproducersschedulelists')->withSchedules($schedule);

     }
 }
 //Waster producter...
      
//    WasteProducersSchedule::where(['zone_id'=>auth()->user()->resident->zone_id])->get();
//    WasteProducersSchedule::where(['zone_id'=>auth()->user()->company->zone_id])->get();

}
