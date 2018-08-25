<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recycler extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public  function zone(){
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
    public function getStatusNameAttribute(){
        switch ($this->status) {
            case 0:
                return "Granted";

            case 1:
                return "New request";

        }
        }

}
