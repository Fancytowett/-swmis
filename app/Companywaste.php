<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companywaste extends Model
{
    public function user(){
        return $this->hasOne(Company::class,'company_id','id');
    }
    public function agent(){
        return $this->hasOne(Agent::class,'agent_id','id');
    }
}
