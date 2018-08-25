@extends('layouts.app')

@section('content')
    <div class="container-fluid" id="zoneadmin-profile">
        <div class="row">
            <div class="col-md-3">
             @include('landing.zoneadminnav')
            </div>
                <div class="col-md-7 col-md-offset-1">
                    <div class="panel panel-info">
                         <div class="panel-heading">
                            <h3 style="font-family: Times New Roman;text-align: center;"> MY PROFILE</h3>
                          </div>

                                <div class="panel-body">
                                      <table class="table table-hover ">
                                            <tr>
                                                <td>Name:</td>
                                                <td>{{$zoneadmin->user->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Email:</td>
                                                <td>{{$zoneadmin->user->email}}</td>
                                            </tr>
                                            <tr>
                                              <td>Phone:</td>
                                               <td>{{$zoneadmin->phone}}</td>
                                            </tr>
                                            <tr>
                                                <td>Zone Assigned:</td>
                                                <td>{{$zoneadmin->zone->name}}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td> <button class="btn btn-info" @click="editZoneadmin()">Update</button></td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="modal modal-danger fade" id="edit">
                                <div class="modal-dialog-content" role="document">
                                    <div class="modal-content">
                                    </div>
                                </div>
                            </div>
                       </div>
                </div>

@endsection

@section('after-scripts')
    <script>
        window.zoneadminProfile = new Vue({
            el:'#zoneadmin-profile',
            data:{
                zoneadmin:{
                    user:{}
                }
            },
            methods:{
                editZoneadmin:function(){
                    axios.get('{{route('zoneadmin.profile.get', $zoneadmin)}}')
                        .then(res=>{
                            this.zoneadmin = res.data;
                            $('#edit').modal('show');
                        })
                        .catch(err=>{
                            alert( 'An error occured.Try again!');
                        });
                },
                updateZoneadmin:function(){
                    axios.post('{{route('zoneadmin.profile.update',$zoneadmin)}}', {zoneadmin:this.zoneadmin})
                        .then(res=>{
                            $('#edit').modal('hide');
                            window.location.reload();
                        })
                        .catch(err=>{
                            alert(' An error occured.Try again!');
                        });
                }
           }
        });
    </script>
@endsection
