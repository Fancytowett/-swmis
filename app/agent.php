<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agent extends Model
{
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
     public function zone(){
        return  $this->hasOne(Zone::class,'id','zone_id');
     }
}
