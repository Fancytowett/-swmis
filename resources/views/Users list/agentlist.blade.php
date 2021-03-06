@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection
@section('content')
    <div class="container-fluid" id="agentlist">
        <div class="row">
            <div class="col-md-3">
                @include('adminnav')
            </div>


            <div class="col-md-9">


                <div class="row">
                    <div class="col-md-12">
                        <a href="{{url('/agents/add')}}"><button class="btn btn-primary btn-xs"style="float:right;"><b style="color:white;">ADD ZONE</b></button></a>
                        <a href="{{url('/home')}}"><button class="btn btn-primary btn-xs"style="float:left;"><span class="glyphicon-arrow-left">BACK</span></button></a>
                    </div>

                </div>

                <div class="panel panel-info">
                <div class="panel-heading">
                    <center><h4>AGENTS LIST</h4></center>
                </div>
                <div class="panel-body">

                <table class="table table-hover" id="datatable">
                    <thead>
                    <tr>
                        <th>USER ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>ZONE</th>
                        <th>VIEW</th>
                        <th>DELETE</th>

                    </tr>
                    </thead>
                    @foreach($agents as $agent)
                    <tr>
                        <td>{{$agent->id}}</td>
                        <td>{{$agent->user->name}}</td>
                        <td>{{$agent->user->email}}</td>
                        <td>{{$agent->phone}}</td>
                        <td>{{$agent->zone->name}}</td>
                        <td>
                            <button class="btn btn-info btn-xs" data-target="#view{{$agent->id}}" data-toggle="modal">View</button>
                            <div class="modal modal-danger fade" id="view{{$agent->id}}" style="margin-top: 200px;margin-left: 700px;margin-right: 250px;">
                                <div class="modal-dialog-content" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title text-left " id="myModalLabel"style="text-align: center;font-weight: bold;">DETAILS</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-hover" id="datatable">
                                                <tr>
                                                    <th>USER ID</th>
                                                    <td>{{$agent->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>NAME</th>
                                                    <td>{{$agent->user->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>EMAIL</th>
                                                    <td>{{$agent->user->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>PHONE</th>
                                                    <td>{{$agent->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <th>ZONE</th>
                                                    <td>{{$agent->zone->name}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                        <td>
                            <a  onclick="deleteModal({{$agent->id}})"  class=" btn btn-danger btn-xs" style="float: right;size: auto;">Delete</a>
                        </td>
                    </tr>
                   @endforeach
                </table>
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
                <button onclick="deleteAgent()"  class="btn btn-warning">Yes,Delete</button>
            </div>
        </div>
       </div>
      </div>
    </div>
    </div>
    @endsection
@section('after-scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        function deleteModal(id){
            window.agentlist.deleteModal(id);
        }
        function deleteAgent(){
            window.agentlist.deleteAgent();
        }

        window.agentlist = new Vue({
            el:'#agentlist',
            data:{
                delete_id:0
            },
            created:function(){
                console.log("Created vue js");
            },
            methods:{
                deleteModal:function(id){
                    $('#delete').modal('show');
                    this.delete_id = id;
                },
                deleteAgent:function(){
                    window.location.href = "agent/delete/"+this.delete_id;
                }
            }
        })
        $(document).ready( function () {
            $('#datatable').DataTable();

        });
    </script>
@endsection
