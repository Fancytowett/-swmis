<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Zoneadmin extends Model
{
    protected $guarded = [];
    public function user(){
        return $this->hasOne( User::class,'id','user_id');
    }
    public function zone(){
        return $this->hasOne(Zone::class,'id','zone_id');
}
//public  function wasteProducersSchedule(){
//        return $this->hasOne(WasteProducersSchedule::class,'id','zone_id');
//}
}