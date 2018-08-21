<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WasteProducersSchedule extends Model
{
    protected $table = 'wasteproducersschedules';

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

    public function zone()
    {
        return $this->hasOne(Zone::class,'id','zone_id');
    }

    public function agents()
    {
        return $this->hasMany(AgentsCollecting::class, 'schedule_id', 'id');
    }
}