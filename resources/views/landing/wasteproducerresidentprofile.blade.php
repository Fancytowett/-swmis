@extends('layouts.app')
@section('content')
    <div class="container-fluid" id="resident-profile">
        <div class="row">
            <div class="col-md-3">
                @include('landing.wasteproducersnav')
            </div>
            <div class="col-md-9">

                <div class="col-md-7  col-md-offset-3">


                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4 style="text-align: center;font-weight: bold;"><span class="glyphicon glyphicon-phone">PROFILE</span></h4>
                        </div>
                        <div class="panel-body">

                            <table class="table table-hover">
                                <tr>
                                    <td>NAME:</td>
                                    <td>{{$resident->user->name}}</td>
                                </tr>
                                <tr>
                                    <td>EMAIL</td>
                                    <td>{{$resident->user->email}}</td>
                                </tr>
                                <tr>
                                    <td>PHONE</td>
                                    <td>{{$resident->phone}}</td>
                                </tr>
                                <tr>
                                    <td>ZONE</td>
                                    <td>{{$resident->zone->name}}</td>


                                </tr>
                                <tr>
                                    <td>TYPE OF WASTE</td>
                                    <td>{{$resident->waste_type_name}}</td>
                                </tr>
                                <tr>
                                    <td>PERIOD</td>
                                    <td>{{$resident->period_name}}</td>
                                </tr>


                                <tr>
                                    <td></td><br>
                                    <td> <button class="btn btn-info" @click="editResident()">UPDATE</button></td>

                                </tr>
                            </table>

                            </div>
                        </div>
                    </div>
               </div>
           </div>
        <div class="modal fade" id="edit" style="margin-left: 700px;margin-right: 300px;margin-top: 20px;">
            <div class="modal-dialog-content" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-left  " id="myModalLabel" style="text-align: center;color: #3097D1 ">UPDATE PROFILE</h4>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Name" style="color:#3097D1">Name:</label>
                            <input type="text" v-model="resident.user.name" class="form-control" name="name" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="phone " style="color:#3097D1">Phone:</label>
                            <input type="text" v-model="resident.phone" class="form-control"   maxlength="10"   name="phone" id="phone" placeholder="Enter phone">
                        </div>
                        <div class="form-group">
                            <label for="Email " style="color:#3097D1">Email:</label>
                            <input type="email" v-model="resident.user.email" class="form-control" name="email" id="email" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="Type of  waste" style="color:#3097D1">Type of waste:</label>
                            <select  v-model="resident.waste_type" class="form-control" name="waste_type">
                                <option value="1">Disposable</option>
                                <option value="2">Recyclable</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="period" v-model="resident.period" style="color:#3097D1">Period:</label>
                            <select class="form-control" name="period">
                                <option value="1">Daily</option>
                                <option value="2">Weekly</option>
                                <option value="3">Monthly</option>
                                <option value="4">Yearly</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">No,Cancel</button>
                        <button  @click="updateResident" class="btn btn-primary">Update</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
@section('after-scripts')
    <script>
        let nn = "";
        window.residentprofile = new Vue({
            el:'#resident-profile',
            data:{
                resident:{
                    user:{}
                }
            },
            methods:{
                editResident:function(){
                    axios.get('{{route('resident.profile.get', $resident)}}')
                        .then(res=>{
                            this.resident = res.data;
                            $('#edit').modal('show');
                        })
                        .catch(err=>{
                            alert('An error occured.Try again!');
                        });
                },
                updateResident:function(){
                    axios.post('{{route('resident.profile.update',$resident)}}', {resident:this.resident})
                        .then(res=>{
                            $('#edit').modal('hide');
                            window.location.reload();
                        })
                        .catch(err=>{
                            alert('An error occured.Try again!');
                        });
                }
            }
        });
    </script>
@endsection
