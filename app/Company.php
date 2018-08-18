<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded=[];
    public function user(){
        return $this->hasOne(User::class,'id','user_id');

    }

    public function zone(){
        return $this->belongsTo('App\Zone');
    }

    public function getWasteTypeNameAttribute(){
        switch ($this->waste_type){
            case 1:
                 return "Recyclable";
            case 2:
                return "Disposable";
        }
    }

    public function getPeriodNameAttribute(){
        switch ($this->period){
            case 1:
                return "Daily";
            case 2:
                return "weekly";
            case 3:
                return"monthly";
            case 4:
                return "Yearly";

        }
    }
}
