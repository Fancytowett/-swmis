@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include("adminnav")
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="well well-sm" style="background: #3097D1;margin-top: 50px;">

                        <h4 style="color:white;text-align: left;"><span class=" glyphicon-time">Dashboard</span> <b></b></h4>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="row">
                    <div class="col-md-12">

                        <a href="{{url('/zoneadminlist')}}"><button class="btn btn-success"style="float:left;"><span class="glyphicon-arrow-left">BACK</span></button></a>
                    </div>
                    </div>

                    <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center> <h1 style="color:white;">Zone admin</h1><b></b> </center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{url('/zoneadmin/save')}}">
                            {!! csrf_field() !!}

                                <div class="form-group">
                                    <label for="" style="color:#3097D1">Zone Admin Name:</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>

                                </div>
                                <div class="form-group">
                                    <label for="Email"style="color:#3097D1">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                                </div>

                                <div class="form-group">
                                    <label for="Phone"style="color:#3097D1">Phone:</label>
                                    <input type="phone" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" required>
                                </div>

                                <div class="form-group">
                                    <label for="Zone name" style="color:#3097D1">Zone name:</label>
                                    <select class="form-control" name="zone_id" id="zone_name" >
                                        @foreach($zones as $zone)
                                            <option value="{{$zone->id}}">{{$zone->name}}</option>
                                            @endforeach
                                    </select>
                              </div>

                            <div class="form-group">
                                <label for="password"style="color:#3097D1">Password:</label>
                                <input type="password" class="form-control" name="password" id="email" placeholder="Enter your password" required>
                            </div>
                            <div class="form-group">
                                <label for="cpassword"style="color:#3097D1"> Confirm Password:</label>
                                <input type="password" class="form-control" name="cpassword" id="email" placeholder="Confirm your password" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Register" class="btn btn-primary">


                            </div>


                        </form>

                    </div>

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    @endsection