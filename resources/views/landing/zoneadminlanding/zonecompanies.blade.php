@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.zoneadminnav')
            </div>
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 style="text-align: center;font-weight: bold">ZONE COMPANIES</h4>

                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-striped">
                            <thead class="alert-danger">
                            <tr >
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                                <tr>
                                    <td>{{$company->user->name}}</td>
                                    <td>{{$company->phone}}</td>
                                    <td>{{$company->user->email}}</td>
                                    <td>
                                        <a class="btn btn-info" data-target="#view" data-toggle="modal">view</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="modal fade" id="view" style="margin-top: 150px;margin-left: 450px;margin-right: 400px;margin-bottom: 50px;">
                        <div class="modal-dialog-content" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title text-left " id="myModalLabel" style="text-align: center;color: #3097D1 ">Company Details</h4>
                                </div>

                                    <div class="modal-body">
                                        <table class="table table-dark">
                                            <tr>
                                                <td>Name:</td>
                                                <td>{{$company->user->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone No:</td>
                                                <td>{{$company->phone}}</td>
                                            </tr>
                                            <tr>
                                                <td>Email:</td>
                                                <td>{{$company->user->email}}</td>
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
@endsection
<script>
$('#edit').on('show.bs.modal',function(event){
var button=(event.$relatedTarget)
var name=button.data('name')
var zone_id=button.data('zone_id')
var modal=$(this)
modal.find('.modal-body #name').val(name);
modal.find('.modal-body #zone_id').val(zone_id);

})
</script>