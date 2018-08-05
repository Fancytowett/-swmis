@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                    @include('landing.agentadminnav')
            </div>


            <div class="col-md-9">
                <div class="row">

                <div class="well well-sm" style="background: #3097D1;margin-top: 50px;margin-left: 0;margin-right: 0;">

                    <h4 style="color:white;text-align: left;"><span class=" glyphicon-time">Dashboard</span> <b></b></h4>
                </div>
                </div>


                    <div class="row" >
                        <div class="col-md-6">

                        <div class=" panel-info" style="width: 350px;height: 350px; " >
                            <div class="panel-heading">
                            <h4 style="font-size: 25px;margin-top: 50px;"><center>ZONEADMIN DETAILS:</center></h4>

                            <table class="table " style="margin-top:50px;margin-left: 10px;margin-bottom: 100px;margin-right: 50px;">


                                <tr >
                                    <td  >Name:</td>
                                    <td>{{$zoneadmins->user->name}}</td>

                                </tr>
                                <tr >
                                    <td >Email:</td>
                                    <td>{{$zoneadmins->user->email}}</td>

                                </tr>

                                <tr >
                                    <td>Phone no.:</td>
                                    <td>{{$zoneadmins->phone}}</td>
                                </tr>

                            </table>

                            </div>
                        </div>
                        </div>

                    <div class="col-md-6">
                     <div class="row">
                         <div class="panel-info">
                             <div class="panel-heading"  style="width: 350px;height: 100px;">
                                 <h4 style="margin-top: 20px;margin-bottom:40px;"><center>WASTE PRODUCERS</center></h4>


                             </div>
                         </div>
                         <br>

                      <div class="panel panel-info" style="width: 350px;height: 350px;"  >
                        <div class="panel-heading">
                            <h4 style="font-size: 25px;margin-top: 150px;margin-bottom: 150px;"><center>AMOUNT OF WASTE:</center></h4>


                        </div>
                        </div>
                        </div><br>

                    </div>

                </div>





                <div class="row">
                     <br>




                     @include('payment');
                    </div>

            </div>
        </div>
    </div>
    @endsection