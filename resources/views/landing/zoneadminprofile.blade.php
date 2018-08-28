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

                      </div>
                        <div class="modal fade" id="edit" style="margin-top: 100px;margin-left: 700px;margin-right: 300px;margin-bottom: 50px;">
                            <div class="modal-dialog-content" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title text-left  " id="myModalLabel" style="text-align: center;color: #3097D1 ">UPDATE PROFILE</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="Name" style="color:#3097D1">Name:</label>
                                            <input type="text" v-model="zoneadmin.user.name"  class="form-control" name="name" id="name" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone " style="color:#3097D1">Phone:</label>
                                            <input type="tel" maxlength="10"  v-model="zoneadmin.phone" class="form-control" name="phone" id="phone" placeholder="Enter phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="Email " style="color:#3097D1">Email:</label>
                                            <input  type="email"  v-model="zoneadmin.user.email" class="form-control" name="email" id="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">No,Cancel</button>
                                        <button type="submit" @click="updateZoneadmin"  class="btn btn-primary">Update</button>
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
