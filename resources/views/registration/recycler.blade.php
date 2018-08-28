@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default" style="panel-border:#3097D1;">
                    <div class="panel-heading">
                        <h1 style="font-family:Times New Roman;color:#3097D1;"><center>  RECYCLER DETAILS</center></h1>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{url('/recycler/save')}}">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="Name" style="color:#3097D1">Name:</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                            </div>

                            <div class="form-group">
                                <label for="Email"style="color:#3097D1">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="Phone"style="color:#3097D1"> Phone No:</label>
                                <input type="tel" class="form-control" name="phone" id="phone"   maxlength="10"  minlength="10" placeholder="Enter Company phone number" required>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label for="Name" style="color:#3097D1">Zone Name:</label>--}}
                                {{--<select class="form-control" name="Zone_name">--}}

                                    {{--@foreach($zones as $zone)--}}
                                        {{--<option value="{{$zone->id}}"> {{$zone->name}}</option>--}}
                                       {{--@endforeach--}}
                                {{--</select>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <label for="Type of  waste" style="color:#3097D1">Type of waste:</label>
                                <select name="waste_type" class="form-control">
                                    <option value="1">metallic waste</option>
                                    <option value="2">Plastics</option>
                                    <option value="3">electronic-waste</option>
                                    <option value="4">other general recyclable waste</option>
                                    <option value="5">disposable waste</option>
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

                            <input type="submit" class="btn btn-primary" value="Register" name="submit">

                        </form>


                    </div>


                </div>

            </div>

        </div>

    </div>
    @endsection






