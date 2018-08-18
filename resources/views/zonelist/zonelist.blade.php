@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    @endsection
@section('content')
    <div class="container-fluid" id="zonelist">
        <div class="row">
            <div class="col-md-3 ">
                @include('adminnav')

            </div>
            <div class="col-md-9">
                <div class="well well-sm" style="background: #3097D1;margin-top: 60px">

                    <h4 style="color:white;text-align: left;"><span class=" glyphicon-time">Dashboard</span> <b></b></h4>
                    {{--<div class="row">--}}
                    {{--<div class="col-md-9"></div>--}}
{{--.                    <div class="col-md-3">--}}
                    {{--<form action="{{url('search ')}}" method="get">--}}
                        {{--<input type="text"  class="form-control" name="searchData"/>--}}
                        {{--<i class="fa fa-search"></i>--}}
                    {{--</form>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>ZONES LIST</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table " id="datatable">
                            <thead>
                            <tr class="alert-danger">

                                <th> ID</th>
                                <th>NAME</th>
                                <th>NO. OF RESIDENTS</th>
                                <th>NO. OF COMPANIES</th>
                                <th>WASTE QUANTITY</th>
                                <th>EDIT RECORD</th>
                                <th>DELETE RECORD</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($zones as $zone)
                                <tr>
                                    <td>{{$zone->id}}</td>
                                    <td>{{$zone->name}}</td>
                                    <td>{{\App\Resident::where('zone_id',$zone->id)->count()}}</td>
                                    <td>{{\App\Company::where('zone_id',$zone->id)->count()}}</td>
                                    <td>Amount of waste</td>
                                    <td>
                                        <button class= "btn btn-info" data-target="#edit" data-toggle="modal"> |Edit|</button >
                                    </td >
                                    <td>
                                        <a class="btn btn-danger" @click="deleteModal({{$zone->id}})">|Delete|</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="edit" style="margin-top: 250px;margin-left: 500px;margin-right: 400px;margin-bottom: 50px;">
            <div class="modal-dialog-content" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-left " id="myModalLabel" style="text-align: center;color: #3097D1 ">Update Zone Name</h4>
                    </div>
                    <form action="{{url('/zones/update')}}" method="post">
                        {{csrf_field()}}
                        {{method_field('patch')}}
                        <div class="modal-body">
                            <input type="hidden" name="zone_id" id="zone_id" value="{{$zone->id}}">
                            <input type="text" class="form-control" name="name" id="name" value="{{$zone->name}}" placeholder="Enter Zone name" >
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">No,Cancel</button>
                            <button type="submit"  class="btn btn-warning">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal modal-danger fade" id="delete" style="margin-top: 250px;margin-left: 700px;margin-right: 250px;">
            <div class="modal-dialog-content" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-left " id="myModalLabel">Delete Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-left">
                            Are you sure to delete this?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">No,Cancel</button>
                        <button @click="deleteZone"  class="btn btn-warning">Yes,Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('after-scripts')
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
    <script>
        window.zonelist = new Vue({
            el:'#zonelist',
            data:{
                delete_id:0
            },
            created:function(){
                console.log("Created vue js");
            },
            methods:{
                deleteModal:function(id){
                    console.log("fsdkfjsdkfj");
                   $('#delete').modal('show');
                   this.delete_id = id;
                },
                deleteZone:function(){
                    window.location.href = "zones/delete/"+this.delete_id;
                }
            }
        })
    </script>

    @endsection
@section('javascripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#datatable').DataTable();
        
    });
</script>
@endsection