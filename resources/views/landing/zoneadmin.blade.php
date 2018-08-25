@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.zoneadminnav')
            </div>
            <div class="col-md-9">

                <div class="bpanel panel-default">
                    <div class="panel-heading ">
                        <h3 style="text-align: center;color: #33B5E5">OVERVIEW</h3>

                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="well" style="height:150px;background-color:lavender;color:white;opacity: 0.8">

                                    <center> <a href="{{url('/zoneagents')}}"><h4 style="padding-top: 30px;padding-bottom: 50px;">{{\App\Agent::where('zone_id',$zone->zone_id)->count()}} <br> AGENTS</h4></a></center>
                                </div>

                            </div>
                        <div class="col-md-4">
                            <div class="well "style="height:150px;background-color:lavender;color:white;opacity: 0.8">

                                <center><a href="{{url('zoneresidents')}}" ><h4 style="padding-top: 30px;padding-bottom: 50px;">{{\App\Resident::where('zone_id',$zone->zone_id)->count()}}  <br>RESIDENTS</h4></a></center>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="well" style="height:150px;background-color: lavender;color:white;">

                                <center><a href="{{url('/zonecompanies')}}"><h4 style="padding-top: 30px;padding-bottom: 50px;">{{\App\Company::where('zone_id',$zone->zone_id)->count()}}<br>COMPANIES</h4></a></center>

                       </div>

                        </div>
                    </div>
                </div>
                    <div class="row">

                        <div class="col-md-6  col-md-offset-3">
                            <div class="well" >

                                <center><h4 style="padding-top: 30px;padding-bottom: 50px;background: lavender">AMOUNT OF WASTE</h4></center>
                            </div>

                        </div>

                    </div>
                </div>




            </div>

                </div>
                </div>





@endsection