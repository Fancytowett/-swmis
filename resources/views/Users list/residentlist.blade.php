@extends('layouts.app')
@section('content')
    <div class="container-fluid" id="residentlist">
        <div class="row">
            <div class="col-md-3">
                @include('adminnav')
            </div>

            <div class="col-md-9">
                <div class="row">
                <div class="well well-lg" style="background: lavender;margin-top: 50px;">
                    <h4 style="color:#3097D1;text-align: left;"><span class=" glyphicon-time">Dashboard</span> <b></b></h4>
                </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{url('/home')}}"><button class="btn btn-primary"style="float:left;"><span class="glyphicon-arrow-left">BACK</span></button></a>
                        </div>
                    </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <center><h4>RESIDENTS LIST</h4></h4></center>
                    </div>
                <table class="table table-hover">
                <thead>
                    <tr class="alert-danger">
                        <th>USER ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>ZONE</th>
                        <th>WASTE TYPE</th>
                        <th>PERIOD</th>
                        <th>VIEW</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                    <tbody>
                    @foreach($residents as $resident)
                        <tr>
                            <td>{{$resident->id}}</td>
                            <td>{{$resident->user->name}}</td>
                            <td>{{$resident->user->email}}</td>
                            <td>{{$resident->phone}}</td>
                            <td>{{$resident->zone->name}}</td>
                            <td>{{$resident->waste_type_name}}</td>
                            <td>{{$resident->period_name}}</td>
                            <td> <button class="btn btn-info" data-toggle="modal" data-target="#view" >View</button></td>
                            <td> <a  class=" btn btn-info" @click="deleteModal({{$resident->id}})" style="float: right;size: auto;">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
        <div class="modal modal-danger fade" id="delete" style="margin-top: 250px;margin-left: 700px;margin-right: 250px;">
            <div class="modal-dialog-content" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-left " id="myModalLabel">Delete Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-left">
                            Are you sure to delete this?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">No,Cancel</button>
                        <button @click="deleteResident"  class="btn btn-warning">Yes,Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-danger fade" id="view" style="margin-top: 100px;margin-left: 700px;margin-right: 250px;">
            <div class="modal-dialog-content" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-left " id="myModalLabel" style="text-align: center;font-weight: bold;">Details</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-hover">
                            <tr>
                                <td>USER ID:</td>
                                <td>{{$resident->id}}</td>
                            </tr>
                            <tr>
                                <td>NAME:</td>
                                <td>{{$resident->user->name}}</td>
                            </tr>
                            <tr>
                                <td>EMAIL:</td>
                                <td>{{$resident->user->email}}</td>
                            </tr>
                            <tr>
                                <td>PHONE NO:</td>
                                <td>{{$resident->phone}}</td>
                            </tr>
                            <tr>
                                <td>ZONE:</td>
                                <td>{{$resident->zone->name}}</td>
                            </tr>
                            <tr>
                                <td>WASTE TYPE:</td>
                                <td>{{$resident->waste_type_name}}</td>
                            </tr>
                            <tr>
                                <td>PERIOD:</td>
                                <td>{{$resident->period_name}}</td>

                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('after-scripts')
    <script>
        window.residentlist = new Vue({
            el:'#residentlist',
            data:{
                delete_id:0
            },
            created:function(){
                console.log("Created vue js");
            },
            methods:{
                deleteModal:function(user_id){
                    console.log("fsdkfjsdkfj");
                    $('#delete').modal('show');
                    this.delete_id = user_id;
                },
                deleteResident:function(){
                    window.location.href = "resident/delete/"+this.delete_id;
                }
            }
        })
    </script>
@endsection