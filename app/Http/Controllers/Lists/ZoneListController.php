<?php

namespace App\Http\Controllers\Lists;

use App\Zone;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ZoneListController extends Controller
{
    public function index(){
        $zones = Zone::all();
        return view('zonelist.zonelist')->withZones($zones);
    }

    public function search(Request $request){
       $zones=Zone::all();
       $searchData=$request->searchData;
       $data=Zone::where('name','like','%'.$searchData.'%')->get();
       return view('zonelist.zonelist',['data'=>$data,'id'=>$searchData])->withZones($zones);
    }

}
