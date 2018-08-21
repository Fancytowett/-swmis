<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentsCollecting extends Model
{
    protected $guarded = [];
    protected $table = 'agentscollectings';

    public function agent()
    {
        return $this->hasOne(Agent::class,'id','agent_id');
    }
}
