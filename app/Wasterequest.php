<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wasterequest extends Model
{
    public function recycler()
    {
        return $this->hasOne(Recycler::class, 'id', 'recycler_id');
    }

    public function getTypeNameAttribute()
    {
        switch ($this->waste_type) {
            case 1:
                return "Metallic waste";
            case 2:
                return "Plastics";
            case 3:
                return "electronic waste";
            case 4:
                return "other general recyclable waste";
            case 5:
                return"disposable";


        }
    }
}
