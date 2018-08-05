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
                            <h3 style="font-family: Times New Roman"><Center> MY PROFILE</Center></h3>
                        </div>

                        <div class="panel-body">
                    <div class="col-md-6 col-md-offset-3">
                        <table class="table">

                            <tr>
                                <td>Name:</td>
                                <td>{{$zoneadmin->user->name}}</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>{{$zoneadmin->user->email}}</td>
                            </tr>
                           <tr>
                              <td>Phone:</td>
                               <td>{{$zoneadmin->phone}}</td>
                           </tr>
                            <tr>
                                <td>Zone Assigned:</td>
                                <td>{{$zoneadmin->zone->name}}</td>
                            </tr>

                        </table>
                    </div>
                    </div>
                    </div>
                    </div>
                <div class="modal modal-danger fade" id="edit" style="margin-top: 250px;margin-left: 700px;margin-right: 250px;">
                    <div class="modal-dialog-content" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title text-left " id="myModalLabel">Delete Confirmation</h4>
                            </div>
                            <div class="modal-body">
                                <form>
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



                                    </form>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">No,Cancel</button>
                                <button type="submit" @click="updateZoneadmin"  class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    @endsection