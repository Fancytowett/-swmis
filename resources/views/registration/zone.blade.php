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
                @include('adding')
                     <br>
                 </div>


                    <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row">
                            <div class="col-md-12">

                                <a href="{{url('/zonelists')}}"><button class="btn btn-success"style="float:left;"><span class="glyphicon-arrow-left">BACK</span></button></a>
                            </div>
                        </div>
                <div class="panel panel-primary">
                    <div class="panel-heading"  style="family:Times New Roman;color:white;"><center><b><h1>Zone Details</h1></b></center></div>
                       <div class="panel-body">
                           <form role="form" form method="post" action="{{url('/zones/save')}}">
                               {!! csrf_field() !!}
                                <div class="form-group">
                                <label for="Name" style="color:#3097D1">Name:</label>
                                <input type="text" class="form-control" name="zone_name" id="name" placeholder="Enter Zone name" required>
                            </div>



                            <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Register" name="submit">
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