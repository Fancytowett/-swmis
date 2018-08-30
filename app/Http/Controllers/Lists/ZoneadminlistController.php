<?php

namespace App\Http\Controllers\Lists;

use App\Zone;
use App\Zoneadmin;
use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;

class ZoneadminlistController extends Controller
{
    public function index(){
        $zoneadmin= Zoneadmin::with('user')->get();
        $zone=Zone::all();
        Return view('Users list.zoneadminlist',['zoneadmins'=>$zoneadmin])->withZones($zone);
    }
}
