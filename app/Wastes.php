<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wastes extends Model
{
    public function zone(){
        return $this->hasOne(Zone::class,'id','zone_id');
    }
    public function getWasteTypeNameAttribute(){
    switch ($this->waste_type){
        case 1:
            return "Metallic waste";
        case 2:
            return "Plastics";
        case 3:
            return "electronic waste";
        case 4:
            return"other general recyclable waste";

    }
        }
    public function getDayNameAttribute(){
        switch ($this->day){
            case 1:
                return "Sunday";
            case 2:
                return "Monday";
            case 3:
                return"Tuesday";
            case 4:
                return "Wednesday";
            case 5:
                return "Thursday";
            case 6:
                return "Friday";
            case 7:
                return "Saturday";

        }
    }
}
