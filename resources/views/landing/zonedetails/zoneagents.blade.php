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
                            <h3><center>ZONE AGENTS</center></h3>

                            <table class="table">
                                <thead>
                                <tr class="alert-danger">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                                </thead>
                                @foreach($agents as $agent)
                                    <tr>
                                        <td>{{$agent->user->name}}</td>
                                        <td>{{$agent->user->email}}</td>
                                        <td>{{$agent->phone}}</td>
                                    </tr>
                                @endforeach
                            </table>

                    </div>

            </div>
        </div>
        </div>
    </div>

</div>

@endsection
