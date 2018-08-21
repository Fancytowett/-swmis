<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact_us extends Model
{
    public $table="contact_uses";
    public $fillable=['name','email','message'];
}
