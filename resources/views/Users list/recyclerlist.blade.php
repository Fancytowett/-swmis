@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection
@section('content')
    <div class="container-fluid" id="recyclerlist">
        <div class="row">
            <div class="col-md-3">
                @include('adminnav')
            </div>
            <div class="col-md-9 ">
                <div class="row">
                      <div class="col-md-12">
                      <a href="{{url('/home')}}"><button class="btn btn-primary btn-xs"style="float:left;"><span class="glyphicon-arrow-left">BACK</span></button></a>
                  </div>
                  </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <center><h4>RECYCLERS LIST</h4></center>
                    </div>

                    <table class="table table-hover" id="datatable">
                    <thead>
                    <tr>
                        <th>USER ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>ACTION</th>
                        <th>ACTION</th>

                    </tr>
                    </thead>
                        <tbody>
                    @foreach($recyclers as $recycler)
                    <tr>

                    <td>{{$recycler->id}}</td>
                    <td>{{$recycler->user->name}}</td>
                    <td>{{$recycler->user->email}}</td>
                    <td>{{$recycler->phone}}</td>
                        <td>
                            <button class=" btn btn-info btn-xs" data-target="#view{{$recycler->id}}" data-toggle="modal">View</button>
                            <div class="modal modal-danger fade" id="view{{$recycler->id}}" style="margin-top: 200px;margin-left: 700px;margin-right: 250px;">
                                <div class="modal-dialog-content" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title text-left " id="myModalLabel" style="font-weight:bold;text-align: center">Details</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <tr>
                                                    <td>USER ID:</td>
                                                    <td>{{$recycler->id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>NAME:</td>
                                                    <td>{{$recycler->user->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>EMAIL:</td>
                                                    <td>{{$recycler->user->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td>PHONE</td>
                                                    <td>{{$recycler->phone}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success " data-dismiss="modal">Cancel</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    <td>
                        <a  onclick="deleteModal({{$recycler->id}})"  class=" btn btn-danger btn-xs" >Delete</a>
                    </td>
                    </tr>
                    @endforeach
                        </tbody>

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
                        <button onclick="deleteRecycler()" class="btn btn-warning ">Yes,Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('after-scripts')
    <script>
        function deleteModal(id){
            window.recyclerlist.deleteModal(id);
        }
        function deleteRecycler(){
            window.recyclerlist.deleteRecycler();
        }
        window.recyclerlist = new Vue({
            el:'#recyclerlist',
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
                deleteRecycler:function(){
                    window.location.href = "recycler/delete/"+this.delete_id;
                }
            }
        })
    </script>
@endsection
@section('javascripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();

        });
    </script>
@endsection