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
                                        <span><a href="{{url('/cagentompanies')}}">Companies</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2><span>Amount of Waste</span></h2>
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