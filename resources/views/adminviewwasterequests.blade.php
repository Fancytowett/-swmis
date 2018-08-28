@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('adminnav')
            </div>
            <div class="col-md-9">
              <div class="panel panel-info">
                  <div class="panel-heading">
                      <h3>Waste Requests</h3>
                      <a href="{{route('print.wrequests')}}" class="btn-primary btn btn-xs"><i class="fa fa-print"></i> print</a>

                  </div>
                  <div class="panel-body">
                      <table class="table table-responsive table-striped table-hover" id="datatable">
                          <thead>
                          <tr>
                              <th>User ID</th>
                              <th>Email</th>
                              <th>Waste Type</th>
                              <th>Quantity</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                          </thead>

                              @foreach($requests as $_request)
                              <tr>
                                  <td>{{$_request->id}}</td>
                                  <td>{{$_request->email}}</td>
                                  <td>{{$_request->waste_type}}</td>
                                  <td>{{$_request->quantity}}</td>
                                  <td>{{$_request->status}}</td>
                                  <td>
                                      <a href="{{route('send.invoice', $_request)}}" class="btn btn-success btn-xs">Send Invoice</a>
                                      <a href="{{route('send.not-available', $_request)}}" class="btn btn-danger btn-xs">Notify not available.</a>
                                  </td>
                              </tr>
                              @endforeach
                      </table>
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