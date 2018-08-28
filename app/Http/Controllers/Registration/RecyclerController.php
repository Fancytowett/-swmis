<?php

namespace App\Http\Controllers\Registration;
use App\Http\Controllers\Controller;
use App\Recycler;
use App\User;
use App\Zone;
use Illuminate\Http\Request;

class RecyclerController extends Controller
{
    public function regrecycler(){
        $zones=Zone::all();
        return view('registration.recycler')->withZones($zones);

    }
     public function store(Request $request){

         $this->validate($request, [
             'email' => 'required|unique:users',
             'password' => 'required|confirmed',
             'phone' => 'min:10|numeric'
         ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->user_type=4;
        $user->save();

        $recycler= new Recycler();
        $recycler->phone=$request->input('phone');
        $recycler->user_id=$user->id;
        $recycler->waste_type=$request->input('waste_type');
        $recycler->save();


         auth()->login($user);

        return redirect('/recyclerlanding')->withStatus('Registered successfully');


     }

     public  function destroy($id){
        $recycler=Recycler::find($id);
        User::find($recycler->user_id)->delete();
        $recycler->delete();
        return redirect()->back();
     }
}
