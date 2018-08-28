<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $guarded=[];
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function zone()
    {
        return $this->hasOne(Zone::class,'id','zone_id');
    }

    public function getPeriodNameAttribute()
    {
        switch($this->period){
            case 1:
                return "Daily";
                break;
            case 2:
                return "Weekly";
            case 3:
                return "Monthly";
            case 4:
                return "Yearly";
        }
    }

    public function getWasteTypeNameAttribute()
    {
        switch ($this->waste_type) {
            case 1:
                return "Metallic waste";
            case 2:
                return "Plastics";
            case 3:
                return "electronic waste";
            case 4:
                return "other general recyclable waste";
            case 5:
                return"disposable";


        }
    }
}
