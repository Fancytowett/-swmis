<?php

namespace App\Http\Controllers\Registration;

use App\Company;
use App\Zone;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $zones=Zone::all();

        return view('registration.company')->withZones($zones);
    }

    public function store(Request $request){

        $this->validate($request, [
                'email' => 'required|unique:users',
                'password' => 'required|confirmed',
                'phone' => 'min:10|numeric'
            ]);

        $user = new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        $user->user_type=3;
        $user->save();

        $company= new Company();
        $company->user_id=$user->id;
        $company->zone_id=$request->input('zone_id');
        $company->phone=$request->input('phone');
        $company->waste_type=$request->input('waste_type');
        $company->period=$request->input('period');
        $company->save();

        auth()->login($user);

        return redirect('/wasteproducerslanding')->withStatus('succesfully registered');


    }
    public function destroy($id){
     $company=Company::find($id);
        User::find($company->user_id)->delete();
       $company->delete();
        return redirect()->back();
    }
}
