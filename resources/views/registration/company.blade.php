@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <div class="panel panel-default" style="panel-border:#3097D1;">
                    <div class="panel-heading">
                        <h1 style="font-family:Times New Roman;color:#3097D1;"><center> COMPANY DETAILS</center></h1>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{url('/company/save')}}">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="Company_Name" style="color:#3097D1"> Company Name:</label>
                                <input type="text" class="form-control" name="name" id="cname" placeholder="Enter Company name" required>
                            </div>

                            <div class="form-group">
                                <label for="Company_Email"style="color:#3097D1"> Company Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Company email" required>
                            </div>

                            <div class="form-group">
                                <label for="Company_Phone"style="color:#3097D1"> Company Phone No:</label>
                                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Enter Company phone number" required>
                            </div>

                            <div class="form-group">
                                <label for="Name" style="color:#3097D1">Zone Name:</label>
                                <select class="form-control" name="zone_id">
                                    @foreach($zones as $zone)
                                        <option value="{{$zone->id}}">{{$zone->name}}</option>
                                        @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Type of  waste" style="color:#3097D1">Type of waste:</label>
                                <select class="form-control" name="waste_type">
                                    <option value="1">Disposable</option>
                                    <option value="2">Recyclable</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="period" style="color:#3097D1">Period:</label>
                                <select class="form-control" name="period">
                                    <option value="1">Daily</option>
                                    <option value="2">Weekly</option>
                                    <option value="3">Monthly</option>
                                    <option value="4">Yearly</option>
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