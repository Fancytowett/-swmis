@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.zoneadminnav')
            </div>
            <div class="col-md-9">
                <div class="well well-sm" style="background: #3097D1;">

                    <h4 style="color:white;text-align: left;"><span class=" glyphicon-time">Dashboard</span> <b></b></h4>
                </div>

                        @include('schedule.wastecollectionschedule')

            </div>
            </div>
        </div>

    </div>
    @endsection