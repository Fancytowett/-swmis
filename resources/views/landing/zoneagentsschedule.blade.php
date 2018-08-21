@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.zoneadminnav')
            </div>
            <div class="col-md-9">

                @include('schedule.agentschedule')
            </div>
        </div>
    </div>

    @endsection