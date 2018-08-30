<?php

namespace App\Http\Controllers\lists;

use App\Recycler;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecyclerlistController extends Controller
{
    public function index(){
        $list=Recycler::with('user')->get();
        return view('Users list.recyclerlist',['recyclers'=>$list ]);

    }
}
