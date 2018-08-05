<?php

namespace App\Http\Controllers\Landing;

use App\Recycler;
use App\Zone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecyclerController extends Controller
{
    public function index()
    {
        return view('Landing.recyclers');
    }
    public function profile(){
        $recycler=Recycler::where('user_id',auth()->user()->id)->first();
        $zone=Zone::all();

        return view('landing.recyclerprofile',['recycler'=>$recycler])->withZones($zone);

    }


}
