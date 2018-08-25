@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.agentadminnav')
            </div>
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align: center">AGENTS</h3>
                    </div>
                        <div class="panel-body">
                            <table class="table table-hover" id="datatable">
                                <thead>
                                <tr>
                                    <th>USER ID</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>PHONE</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($residents as $resident)
                                    <tr>
                                        <td>{{$resident->id}}</td>
                                        <td>{{$resident->user->name}}</td>
                                        <td>{{$resident->user->email}}</td>
                                        <td>{{$resident->phone}}</td>
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
@section('after-scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#datatable').DataTable();

        });
    </script>
    @endsection