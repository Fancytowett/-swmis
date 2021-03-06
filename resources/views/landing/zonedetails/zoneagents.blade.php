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
                            <h3><center>ZONE AGENTS</center></h3>
                        </div>

                            <table class="table table-striped table-hover " id="datatable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                                </thead>
                                @foreach($agents as $agent)
                                    <tr>
                                        <td>{{$agent->user->name}}</td>
                                        <td>{{$agent->user->email}}</td>
                                        <td>{{$agent->phone}}</td>
                                    </tr>
                                @endforeach
                            </table>

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
