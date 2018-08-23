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
                              <th>Recycler Name</th>
                              <th>Email</th>
                              <th>Waste Type</th>
                              <th>Quantity</th>
                              <th>Status</th>
                          </tr>
                          </thead>
                          <tr>
                              @foreach($requests as $request)
                                  <td>{{$request->user->name}}</td>
                                  <td>{{$request->user->email}}</td>
                                  <td>{{$request->waste_type_name}}</td>
                                  <td>{{$request->status}}</td>
                                  @endforeach

                          </tr>
                      </table>
                  </div>
              </div>
            </div>
        </div>
    </div>
@endsection
