<?php

namespace App\Http\Controllers\Lists;

use App\Agent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentlistController extends Controller
{
    public  function index(){
        $list=Agent::with('user')->get();
        return view('Users list.agentlist',['agents'=>$list]);
    }
}
