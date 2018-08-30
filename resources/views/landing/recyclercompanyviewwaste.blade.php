@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.recyclernav')
            </div>
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3>Company  waste available</h3>
                        <a href="{{url('/recyclerrequestwaste')}}" class="btn btn-primary btn-xs">Request for Waste</a>

                    </div>
                    <div class="panel-body">
                        <table class="table table-responsive table-hover table-striped" id="datatable">
                            <thead>
                            <tr>
                                <th>Zone</th>
                                <th>Agent Collected</th>
                                <th>Date</th>
                                <th>Day</th>
                                <th>Time</th>
                                <th>Company picked from</th>
                                <th>Quantity</th>
                            </tr>


                            </thead>
                            <tbody>
                            @foreach( $companywastes as $companywaste)
                                <tr>
                                    <td>{{$companywaste->zone->id}}</td>
                                    <td>{{$companywaste->agent_id}}</td>
                                    <td>{{$companywaste->date}}</td>
                                    <td>{{$companywaste->day_name}}</td>
                                    <td>{{$companywaste->created_at}}</td>
                                    <td>{{$companywaste->company_id}}</td>
                                    <td>{{$companywaste->quantity}}</td>
                                </tr>
                            @endforeach
                            </tbody>
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