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
                        <h3>Resident  waste available</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-responsive table-hover table-striped" id="datatable">
                            <thead>
                            <tr>
                                <th>Zone</th>
                                <th>Agent ID Collected</th>
                                <th>Date</th>
                                <th>Day</th>
                                <th>Time</th>
                                <th>Resident  ID picked from</th>
                                <th>Email</th>
                                <th>Quantity</th>
                            </tr>


                            </thead>
                            <tbody>
                            @foreach( $residentwastes as $residentwaste)
                                <tr>
                                    <td>{{$residentwaste->zone->name}}</td>
                                    <td>{{$residentwaste->agent_id}}</td>
                                    <td>{{$residentwaste->date}}</td>
                                    <td>{{$residentwaste->day_name}}</td>
                                    <td>{{$residentwaste->created_at}}</td>
                                    <td>{{$residentwaste->resident_id}}</td>
                                    <td>{{$residentwaste->user->email}}</td>
                                    <td>{{$residentwaste->quantity}}</td>

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