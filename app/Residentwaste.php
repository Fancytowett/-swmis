<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residentwaste extends Model
{
    public function user(){

        return $this->hasOne(User::class,'id','resident_id');
    }

    public function agent(){

        return $this->hasOne(Agent::class,'id','agent_id');
    }
    public function  zone(){

        return $this->hasOne(Zone::class,'id','zone_id');
    }
    public function getDayNameAttribute()
    {
        switch($this->day){
            case 1:
                return "Sunday";
            case 2:
                return "Monday";
            case 3:
                return"Tuesday";
            case 4:
                return"Wednesday";
            case 5:
                return"Thursday";
            case 6:
                return"Friday";
            case 7:
                return"Saturday";
        }
    }

}
