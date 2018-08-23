@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.wasteproducersnav')
            </div>
            <div class="col-md-9">
                @include('schedule.wasteproducersschedule');

            </div>
        </div>
    </div>
@endsection