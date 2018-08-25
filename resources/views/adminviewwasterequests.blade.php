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
                          </tr>
                          </thead>

                              @foreach($requests as $request)
                              <tr>
                                  <td>{{$request->id}}</td>
                                  <td>{{$request->email}}</td>
                                  <td>{{$request->waste_type}}</td>
                                  <td>{{$request->quantity}}</td>
                                  <td>{{$request->status}}</td>

                              </tr>
                                  @endforeach


                      </table>
                  </div>
              </div>
            </div>
        </div>
    </div>
@endsection
