@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection
@section('content')
    <div class="container-fluid" id="companylist">
        <div class="row">
            <div class="col-md-3">
                @include('adminnav')
            </div>


            <div class="col-md-9 ">

                <div class="row">
                    <div class="col-md-12">
                        <a href="{{url('/home')}}"><button class="btn btn-primary"style="float:left;"><span class="glyphicon-arrow-left">BACK</span></button></a>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <center><h4>COMPANIES LIST</h4></center>
                    </div>

                    <table class="table table-hover" id="datatable">
                    <thead>
                    <tr>
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
                    @foreach($companies as $company)
                    <tr>
                        <td>{{$company->id}}</td>
                        <td>{{$company->user->name}}</td>
                        <td>{{$company->user->email}}</td>
                        <td>{{$company->phone}}</td>
                        <td>{{$company->zone->name}}</td>
{{--                        <td>{{$company->zone->name}}</td>--}}
                        <td>{{$company->waste_type_name}}</td>
                        <td>{{$company->period_name}}</td>
                        <td>
                            <button class="btn btn-info" data-target="#view{{$company->id}}" data-toggle="modal">View</button>
                            <div class="modal modal-danger fade" id="view{{$company->id}}" style="margin-top: 100px;margin-left: 700px;margin-right: 250px;">
                                <div class="modal-dialog-content" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title text-left " id="myModalLabel "style="text-align:center;font-weight: bold;">Details</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <tr>
                                                    <td>USER ID</td>
                                                    <td>{{$company->id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>NAME:</td>
                                                    <td>{{$company->user->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>EMAIL:</td>
                                                    <td>{{$company->user->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td>PHONE:</td>
                                                    <td>{{$company->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td>ZONE NAME:</td>
                                                    <td>{{$company->zone->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>WASTE TYPE</td>
                                                    <td>{{$company->waste_type_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>PERIOD</td>
                                                    <td>{{$company->period_name}}</td>
                                                </tr>
                                            </table>

                                        </div>
                                        <div class="modal-footer">
                                            <button  class="btn btn-success" data-dismiss="modal">Cancel</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                        <td> <a onclick="deleteModal({{$company->id}})" class=" btn btn-danger" >Delete</a></td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
        <div class="modal modal-danger fade" id="delete" style="margin-top: 200px;margin-left: 700px;margin-right: 250px;">
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
                        <button onclick="deleteCompany()"  class="btn btn-warning">Yes,Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('after-scripts')
    <script>
        function deleteModal(id){
            window.companylist.deleteModal(id);
        }
        function deleteCompany(){
            window.companylist.deleteCompany();
        }
        window.companylist = new Vue({
            el:'#companylist',
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
                deleteCompany:function(){
                    window.location.href = "company/delete/"+this.delete_id;
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