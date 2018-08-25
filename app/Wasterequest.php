<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wasterequest extends Model
{
    public function recycler(){
        return $this->hasOne(Recycler::class,'id','recycler_id');
    }

    public function getTypeNameAttribute()
    {
        switch($this->waste_type){
            case 2:
                return "Electronics Waste";
                break;
        }
    }
}
