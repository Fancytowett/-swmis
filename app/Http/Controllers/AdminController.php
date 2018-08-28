<?php

namespace App\Http\Controllers;

use App\Companywaste;
use App\Residentwaste;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function residentwastes(){
        $residentwaste=Residentwaste::latest()->get();
        return view('residentwaste')->withResidentwastes($residentwaste);

    }
    public  function companywastes(){
        $companywaste=Companywaste::with('zone')->latest()->get();
        return view('companywastes')->withCompanywastes($companywaste);
    }
}
