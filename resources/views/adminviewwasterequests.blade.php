@extends('layouts.app')

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
                  </div>
                  <div class="panel-body">
                      <table class="table table-responsive table-striped table-hover">
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
                                      <a href="{{route('send.invoice', $_request)}}" class="btn btn-success">Send Invoice</a>
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
