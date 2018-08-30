@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.recyclernav')

            </div>
            <div class="col-md-9">

                <div class="panel panel-info">
                    <div class="panel-heading ">
                        <h3 style="text-align: center">OVERVIEW</h3>

                    </div>
                    <div class="panel-body">
                        <div class="col-md-4">
                        <div class="well "style="height:150px;background-color: lavender;color:#33B5E5;opacity: 0.8">

                           <center><h4 style="padding-top: 30px;font-weight: bolder;padding-bottom: 50px;">{{\App\Resident::all()->count()+\App\Company::all()->count()}}  <br>WASTE PRODUCERS</h4></center>
                        </div>

                        </div>
                        <div class="col-md-4">
                            <div class="well" style="height:150px;background-color: lavender;color:#33B5E5;opacity: 0.8">

                                <center><h4 style="padding-top: 30px;font-weight: bolder;padding-bottom: 50px;">{{\App\Companywaste::all()->sum()+\App\Residentwaste::all()->sum('quantity')}} KG<br>AMOUNT OF WASTE</h4></center>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="well" style="height:150px;background-color: lavender;color:#33B5E5;opacity: 0.8">

                                <center><h4 style="padding-top: 30px;font-weight: bolder;padding-bottom: 50px;"><a href="{{url('/recyclerviewwaste')}}">RECYCLABLE WASTE</a> </h4></center>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection