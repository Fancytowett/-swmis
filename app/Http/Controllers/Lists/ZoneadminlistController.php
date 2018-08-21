<?php

namespace App\Http\Controllers\Lists;

use App\Zone;
use App\zoneadmin;
use Illuminate\Http\Request;
use  App\Http\Controllers\controller;

class ZoneadminlistController extends Controller
{
    public function index(){
        $zoneadmin= zoneadmin::with('user')->get();
        $zone=Zone::all();
        Return view('Users list.zoneadminlist',['zoneadmins'=>$zoneadmin])->withZones($zone);
    }
}
