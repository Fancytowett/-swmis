<?php

namespace App\Http\Controllers\Lists;

use App\Resident;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;


class ResidentlistController extends Controller
{
    public function index(){
        $list = Resident::with('user')->get();
        return view('Users list.residentlist', ['residents'=>$list]);
    }
}
