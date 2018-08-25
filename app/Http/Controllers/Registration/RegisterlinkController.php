<?php

namespace App\Http\Controllers\Registration;
use App\Http\Controllers\Controller;
use App\Zone;
use Illuminate\Http\Request;

class RegisterlinkController extends Controller
{
    public function registerlink()
    {
        $zone=Zone::all();
        return view('registration.registration')->withZones($zone);
    }
}
