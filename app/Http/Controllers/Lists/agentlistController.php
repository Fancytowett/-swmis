<?php

namespace App\Http\Controllers\Lists;

use App\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;

class agentlistController extends Controller
{
    public  function index(){
        $list=Agent::with('user')->get();
        return view('Users list.agentlist',['agents'=>$list]);
    }
}
