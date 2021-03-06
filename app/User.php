<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function resident()
    {
        return $this->hasOne(Resident::class,'user_id','id');
    }
    public function agent()
    {
        return $this->hasOne(Agent::class,'user_id','id');
    }

    public function recycler()
    {
        return $this->hasOne(Recycler::class,"user_id",'id');
    }

}
