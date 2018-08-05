<?php

namespace App\Http\Controllers\Lists;

use App\Zone;
use App\zoneadmin;
use Illuminate\Http\Request;
use  App\Http\Controllers\controller;

class ZoneadminlistController extends Controller
{
    public function index(){
        $list= zoneadmin::with('user')->get();
        $zone=Zone::all();
        Return view('Users list.zoneadminlist',['zoneadmins'=>$list])->withZones($zone);
    }
}
