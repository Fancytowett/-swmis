<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wasterequest extends Model
{
    public  function recycler(){
        return $this->hasOne(Recycler::class,'id','recycler_id');
    }
}
