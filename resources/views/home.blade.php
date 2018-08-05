@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('adminnav')
        </div>
        <div class="col-md-9">
            <div class="row">
           @include('dash')
            </div>
            <div class="row">

                    @include('payment')
            </div>
        </div>
    </div>
</div>
@endsection
