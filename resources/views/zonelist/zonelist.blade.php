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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Zone List</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table" id="datatable">
                            <thead>
                            <tr class="alert-danger">
                                <th>ID</th>
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
                                        <a class="btn btn-danger" onclick="deleteModal({{$zone->id}})">|Delete|</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="edit">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
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
            <div class="modal fade" id="delete">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-left " id="myModalLabel">Delete Confirmation</h4>
                        </div>
                        <div class="modal-body">
                            <p class="text-left">
                                Are you sure to delete this?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">No,Cancel</button>
                            <button class="btn btn-warning">Yes,Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('after-scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $('#edit').on('show.bs.modal',function(event){
            var button=(event.$relatedTarget)
            var name=button.data('name')
            var zone_id=button.data('zone_id')
            var modal=$(this)
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #zone_id').val(zone_id);
        });
        function deleteModal(id){
            window.zonelist.deleteModal(id);
        }
        window.zonelist = new Vue({
            el:'#zonelist',
            data:{
                delete_id:0
            },
            created:function(){
            },
            methods:{
                deleteModal:function(id){
                    console.log("Created vue js");
                    console.log("Created vue js");
                    $('#delete').modal('show');
                   this.delete_id = id;
                },
                deleteZone:function(){
                    window.location.href = "zones/delete/"+this.delete_id;
                }
            }
        });

        $(document).ready( function () {
            $('#datatable').DataTable();
        });
    </script>
    @endsection