@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.zoneadminnav')
            </div>
            <div class="col-md-9">
                <div class="well well-sm" style="background: #3097D1;">

                    <h4 style="color:white;text-align: left;"><span class=" glyphicon-time">Dashboard</span> <b></b></h4>
                </div>

                <div class="panel-info" style="width: 1000px;">
                    <div class="panel-heading"style="">
                        <center><h2>Zone Details</h2></center>
                    </div>
                    <div class="panel-body">

                    <div class="row">
                        <div class="col-md-4-offset-1">
                            <div class="panel panel-danger" style="width:350px;height:350px;float: right;margin-right: 100px;margin-left: 100px;margin-top: 50px">
                                <div class="panel-heading">
                                    <h3> <Center>No .of Agents <br></Center>
                                    </h3>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4-offset-1" >
                            <div class="panel panel-success"style="width:350px;height:350px;margin-right: 100px;margin-left: 100px;margin-top: 50px;">
                                <div class="panel-heading">
                                    <h3> <Center>No of residents</Center>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-6-offset-1" >
                                <div class="panel panel-info" style="width:350px;height:350px;float: right;margin-right: 100px;margin-left: 100px;margin-top: 50px">
                                    <div class="panel-heading">
                                        <div class="body">
                                        <h3> <Center>No of.Companies <br></Center>
                                        </h3>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6-offset-1">
                                <div class="panel panel-danger"style="width:350px;height:350px;margin-right: 100px;margin-left: 100px;margin-top: 50px;">
                                    <div class="panel-heading">
                                        <h3> <Center>Quantity of waste
                                            </Center>
                                        </h3>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>

@endsection