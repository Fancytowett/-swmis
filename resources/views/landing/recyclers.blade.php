@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.recyclernav')

            </div>
            <div class="col-md-9">
                <div class="well well-sm" style="background: #3097D1;margin-top: 50px">

                    <h4 style="color:white;text-align: left;"><span class=" glyphicon-time">Dashboard</span> <b></b></h4>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading ">
                        <h3 style="text-align: center">OVERVIEW</h3>

                    </div>
                    <div class="panel-body">
                        <div class="col-md-4">
                        <div class="well "style="height:150px;">

                           <center><h4 style="padding-top: 30px;padding-bottom: 50px;">WASTE PRODUCERS</h4></center>
                        </div>

                        </div>
                        <div class="col-md-4">
                            <div class="well" style="height:150px;">

                                <center><h4 style="padding-top: 30px;padding-bottom: 50px;">AMOUNT OF WASTE</h4></center>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="well" style="height:150px;">

                                <center><h4 style="padding-top: 30px;padding-bottom: 50px;">RECYCLABLE WASTE</h4></center>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection