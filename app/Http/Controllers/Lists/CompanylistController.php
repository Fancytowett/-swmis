<?php

namespace App\Http\Controllers\Lists;

use App\company;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
class CompanylistController extends Controller
{
    public function index(){
        $list=company::with('user')->get();
        return view('Users list.companylist',['companies'=>$list]);
    }
}
