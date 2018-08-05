@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.zoneadminnav')
            </div>
            <div class="col-md-9">
                <div class="well well-sm" style="background: #3097D1;margin-top: 70px;">

                    <h4 style="color:white;text-align: left;"><span class=" glyphicon-time">Dashboard</span> <b></b></h4>
                </div>


                    <div class="panel panel-info">
                    <div class="panel-heading">

                        <h4> <Center>ZONE COMPANIES <br></Center></h4>

                                <table class="table">
                                    <thead>
                                    <tr class="alert-danger">
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Phone</td>
                                    </tr>
                                    @foreach($companies as $company)
                                        <tr>
                                            <td>{{$company ->user->name}}</td>
                                            <td>{{$company ->user->email}}</td>
                                            <td>{{$company ->phone}}</td>
                                        </tr>
                                    @endforeach
                                    </thead>
                                </table>


                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection