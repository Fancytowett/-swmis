@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('adminnav')
            </div>
            <div class="col-md-9">
               @include('adschedules.wasteproducersdaily')
           </div>
        </div>
    </div>
    @endsection