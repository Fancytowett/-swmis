<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $guarded =[];
    public function user(){
        return $this->belongsTo(User::class,'id','user_id');
    }

    public function zoneadmins(){
        return $this->hasOne(User::class,'id','admin_id');
    }

    public function company(){
        return $this->hasMany('App\company');
    }
//    public  function recycler(){
//        return $this->hasMany(Recycler::class,'id','zone_id');
//    }
}
