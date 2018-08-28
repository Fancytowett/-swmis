<?php

namespace App\Http\Controllers\Landing;

use App\Companywaste;
use App\Recycler;
use App\Residentwaste;
use App\User;

use App\Wasterequest;
use App\Wastes;
use App\Zone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class RecyclerController extends Controller
{

    public function index()
    {
        return view('landing.recyclers');
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

    /**
     * @return mixed
     */
    public function recyclerviewwaste(){
        $waste=Wastes::all();
        return view('landing.recyclerviewwaste')->withWastes($waste);
    }

    public function recylerwasterequestsave(Request $request){
        $requestwaste= new Wasterequest();
        $requestwaste->recycler_id=auth()->user()->recycler->id;
        $requestwaste->email=$request->input('email');
        $requestwaste->waste_type=$request->input('waste_type');
        $requestwaste->quantity=$request->input('quantity');
        $requestwaste->status=0;
        $requestwaste->save();
        Session::flash('status',"Request sent successfully! Please wait for confirmation");
        return redirect()->back();


    }
    public function recyclerrequestwaste(){
        $user= auth()->user();
        $recycler=Recycler::where('user_id',$user->id)->first();
        return view('landing.requestwaste' ,['recycler'=>$recycler]);

    }
     public function recyclernots()
     {
         return view('landing.recyclersnots');
     }
      public  function companywastes(){
        $companywaste=Companywaste::all();
        return view('landing.recyclercompanyviewwaste')->withCompanywastes($companywaste);
      }
      public function residentwastes(){
        $residentwaste=Residentwaste::all();
        return view('landing.recyclerresidentviewwaste')->withResidentwastes($residentwaste);
      }

}
