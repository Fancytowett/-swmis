<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residentwaste extends Model
{
    public function user(){
        return $this->hasOne(User::class,'resident_id','id');
    }

    public function agent(){
        return $this->hasOne(Agent::class,'agent_id','id');
    }
    public function  zone(){
        return $this->hasOne(Zone::class,'zone_id','id');
    }
}
