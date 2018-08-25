<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentConfirmation extends Model
{
//    use SoftDeletes;

    protected $guarded = [];

    public function user(){
      return $this->hasOne(User::class,'id','user_id');
    }


}
