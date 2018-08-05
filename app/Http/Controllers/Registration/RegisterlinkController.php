<?php

namespace App\Http\Controllers\Registration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterlinkController extends Controller
{
    public function registerlink()
    {
        return view('registration.registerlinks');
    }
}
