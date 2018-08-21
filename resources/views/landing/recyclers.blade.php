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
                        <div class="well "style="height:150px;background-color: #990100;color:white;opacity: 0.8">

                           <center><h4 style="padding-top: 30px;padding-bottom: 50px;">{{\App\Resident::all()->count()+\App\Company::all()->count()}}  <br>WASTE PRODUCERS</h4></center>
                        </div>

                        </div>
                        <div class="col-md-4">
                            <div class="well" style="height:150px;background-color:#3265CE;color:white;opacity: 0.8">

                                <center><h4 style="padding-top: 30px;padding-bottom: 50px;">AMOUNT OF WASTE</h4></center>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="well" style="height:150px;background-color: #009901;color:white;opacity: 0.8">

                                <center><h4 style="padding-top: 30px;padding-bottom: 50px;">RECYCLABLE WASTE</h4></center>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection