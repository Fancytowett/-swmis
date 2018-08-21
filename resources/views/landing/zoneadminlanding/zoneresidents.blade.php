@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.zoneadminnav')
            </div>
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 style="text-align: center;font-weight: bold"> RESIDENTS</h4>
                    </div>


                    <div class="panel-body">
                        <table class="table table-hover table-striped" id="datatable">
                            <thead >
                            <tr >
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($residents as $resident)
                                <tr>
                                    <td>{{$resident->user->name}}</td>
                                    <td>{{$resident->phone}}</td>
                                    <td>{{$resident->user->email}}</td>
                                    <td>
                                        <a  class="btn btn-info"  data-target="#view" data-toggle="modal">View</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="modal fade" id="view" style="margin-top: 50px;margin-left: 450px;margin-right: 400px;;">
                        <div class="modal-dialog-content" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title text-left " id="myModalLabel" style="text-align: center;color: #3097D1 ">Resident    Details</h4>
                                </div>

                                <div class="modal-body">
                                    <table class="table table-striped">
                                        <tr>
                                            <td>Name:</td>
                                            <td>{{$resident->user->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone No:</td>
                                            <td>{{$resident->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>{{$resident->user->email}}</td>
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


            </div>
        </div>

    </div>
    @endsection
@section('javascripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();

        });
    </script>
@endsection