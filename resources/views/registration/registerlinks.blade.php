@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#3097D1;margin-top: 50px;">
                        <center> <h1 style="color:white">  Register As: </h1><b></b> </center>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">

                            <a href="{{url('resident')}}" class="list-group-item">
                                <h4 class="list-group-item-heading" style="color:#3097D1;"><center><span class="glyphicon glyphicon-user">Resident</span> </center></h4>
                            </a>
                            <a href="{{url('company')}}" class="list-group-item">
                                <h4 class="list-group-item-heading" style="color:#3097D1;"><center><span class="glyphicon glyphicon-home">Company</span></center></h4>
                            </a>
                            <a href="{{url('recycler')}}" class="list-group-item">
                                <h4 class="list-group-item-heading" style="color:#3097D1;"><center><span class="glyphicon glyphicon-circle-arrow-left">Recycler</span></center></h4>
                            </a>





                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection