@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                    @include('landing.agentadminnav')
            </div>
            <div class="col-md-9">
                <div class="panelf panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align: center">STATISTICS</h3>

                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2>{{\App\Resident::all()->count()}}</h2>
                                        <span><a href="{{url('/agentresidents')}}">Residents</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2>{{\App\Company::all()->count()}}</h2>
                                        <span><a href="{{url('/agentcompanies')}}">Companies</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
{{--                                        <h2><span>{{\App\Residentwaste::all()->sum('quantity')}}Kg </span></h2>--}}
                                        <p style="color: #33B5E5 ">Resident Waste</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2><span>{{\App\Companywaste::all()->sum('quantity')}} KG </span></h2>
                                        <p style="color: #33B5E5 ">Company  Waste</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
        </div>
    </div>

    @endsection