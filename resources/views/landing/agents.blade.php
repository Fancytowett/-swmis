@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                    @include('landing.agentadminnav')
            </div>
            <div class="col-md-9">
                <div class="panelf panel-default">
                    <div class="panel-heading">

                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2>{{\App\Resident::all()->count()}}</h2>
                                        <span><a href="{{url('/residentlist')}}">Residents</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2>{{\App\Company::all()->count()}}</h2>
                                        <span><a href="{{url('/companylist')}}">Companies</a></span>
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