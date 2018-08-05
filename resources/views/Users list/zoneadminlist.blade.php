@extends('layouts.app')
@section('content')
    <div class="container-fluid" id="zoneadminlist">
        <div class="row">
            <div class="col-md-3">
                @include('adminnav')
            </div>

            <div class="col-md-9">
                <div class="well well-lg" style="background: lavender;margin-top: 50px;">

                    <h4 style="color:#3097D1;text-align: left;"><span class=" glyphicon-time">Dashboard</span> <b></b></h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{url('/zoneadmin')}}"><button class="btn btn-primary"style="float:right;"><b style="color:white;">ADD ZONE</b></button></a>
                        <a href="{{url('/home')}}"><button class="btn btn-primary"style="float:left;"><span class="glyphicon-arrow-left">BACK</span></button></a>
                    </div>

                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <center><h4>ZONEADMINS LIST</h4></center>
                    </div>

                    <table class="table table-hover">
                        <thead>
                        <tr class="alert-danger">
                          <th>USER ID</th>
                           <th>NAME</th>
                           <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>ZONE</th>
                            <th>VIEW</th>

                            <th>DELETE</th>
                        </tr>
                        </thead>
                        @foreach($zoneadmins as $zoneadmin)
                        <tr>

                            <td>{{$zoneadmin->id}}</td>
                            <td>{{$zoneadmin->user->name}}</td>
                            <td>{{$zoneadmin->user->email}}</td>
                            <td>{{$zoneadmin->phone}}</td>

                            <td>{{$zoneadmin->zone->name}}</td>
                            <td>
                                <button class="btn btn-info" data-target="#view" data-toggle="modal">View</button>
                            </td>


                            <td>
                                <a @click="deleteModal({{$zoneadmin->id}})" class=" btn btn-danger" >Delete</a>

                            </td>

                        </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade" id="delete" style="margin-top: 250px;margin-left: 700px;margin-right: 250px;">
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
                        <button @click="deleteZoneadmin"  class="btn btn-warning">Yes,Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="view" style="margin-top: 250px;margin-left: 700px;margin-right: 250px;">
            <div class="modal-dialog-content" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-left " id="myModalLabe" style="text-align: center;font-weight: bold;">Details</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-hover">
                            <tr>
                                <td>NAME:</td>
                                <td>{{$zoneadmin->id}}</td>
                            </tr>
                            <tr>
                                <td>NAME:</td>
                                <td>{{$zoneadmin->user->name}}</td>
                            </tr>
                            <tr>
                                <td>EMAIL:</td>
                                <td>{{$zoneadmin->user->email}}</td>
                            </tr>
                            <tr>
                                <td>PHONE NO:</td>
                                <td>{{$zoneadmin->phone}}</td>
                            </tr>
                            <tr>
                                <td>ZONE ALLOCATED:</td>

                                <td>{{$zoneadmin->zone->name}}</td>

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
        window.zoneadminlist = new Vue({
            el:'#zoneadminlist',
            data:{
                delete_id:0
            },
            created:function(){
                console.log("Created vue js");
            },
            methods:{
                deleteModal:function(id){
                    console.log("fsdkfjsdkfj");
                    $('#delete').modal('show');
                    this.delete_id = id;
                },
                deleteZoneadmin:function(){
                    window.location.href = "zoneadmin/delete/"+this.delete_id;
                }
            }
        })
    </script>

@endsection