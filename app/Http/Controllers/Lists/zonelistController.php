<?php

namespace App\Http\Controllers\Lists;

use App\Zone;
use  App\Http\Controllers\controller;
use Illuminate\Http\Request;


class zonelistController extends Controller
{
    public function index(){
        $zones=Zone::all();
        return view('zonelist.Zonelist')->withZones($zones);
    }



}
