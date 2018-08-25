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

                        <h4> <Center>ZONE COMPANIES <br></Center></h4>
                    </div>

                        <table class="table table-striped table-hover " id="datatable">
                            <thead>
                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                                <tr>
                                    <td>{{$company ->user->name}}</td>
                                    <td>{{$company ->user->email}}</td>
                                    <td>{{$company ->phone}}</td>
                                </tr>
                            @endforeach
                            </tbody>
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