@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.wasteproducersnav')
            </div>
            <div class="col-md-9">
                <div class="well well-sm" style="background: #3097D1;margin-top: 60px;">

                    <h4 style="color:white;text-align: left;"><span class=" glyphicon-time">Dashboard</span> <b></b></h4>
                </div>
                    <div class="col-md-5">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 style="text-align: center;font-weight: bold;"><span class="glyphicon glyphicon-phone">CONTACT US</span></h4>
                            </div>
                            <div class="panel-body">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone No:</label>
                                        <input type="phone" name="phone" class="form-control" placeholder="Enter your phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" class="form-control" placeholder="enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message:</label>
                                        <textarea  class="form-control" name="message " ></textarea>
                                    </div>
                                    <center>
                                        <input type="submit" class="btn btn-primary" name="submit" value="SEND">
                                    </center>

                                </form>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
    </div>
    @endsection