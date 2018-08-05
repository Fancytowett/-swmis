@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include("adminnav")
            </div>
            <div class="col-md-9">

                <div class="well well-sm" style="background: #3097D1;margin-top: 50px;">

                    <h4 style="color:white;text-align: left;"><span class=" glyphicon-time">Dashboard</span> <b></b></h4>
                </div>
                <div class="row">

                    <div class="col-md-6 col-md-offset-3">
                        <div class="row">
                            <div class="col-md-12">

                                <a href="{{url('/agentlist')}}"><button class="btn btn-success"style="float:left;"><span class="glyphicon-arrow-left">BACK</span></button></a>
                            </div>
                        </div>
                <div class="panel panel-primary">
                    <div class="panel-heading" style="family:Times New Roman;color:white;">
                        <center><b><h1>Agent Details</h1></b></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{url('/agents/save')}}">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="Name" style="color:#3097D1">Name:</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="phone " style="color:#3097D1">Phone:</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone">
                            </div>
                            <div class="form-group">
                                <label for="Email " style="color:#3097D1">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group" style="color:#3097D1">
                              <label for="zone name">Zone Allocated:</label>
                               <select class ="form-control" name="zone_id">
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
                            <div class="center">
                                <input type="submit" class="btn btn-primary" name="submit" value="Save Agent">
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