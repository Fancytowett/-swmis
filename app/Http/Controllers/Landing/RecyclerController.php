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
    public  function getprofile(Recycler $recycler){
         $recycler->load('user');
         return response()->json($recycler);

    }
    public function  updateprofile( Recycler $recycler, Request $request){
        $recycler->update(array_except($request->recycler,'user'));
        $recycler->user->update($request->recycler['user']);
        return response()->json(['success'=>true]);


    }


}
