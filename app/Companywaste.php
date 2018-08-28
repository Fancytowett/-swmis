<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companywaste extends Model
{
    public function user(){
        return $this->hasOne(Company::class,'id','company_id');
    }
    public function agent(){
        return $this->hasOne(Agent::class,'id','agent_id');
    }
}
