@extends('layouts.app')
@section('content')
    <div class="container-fluid" id="company-profile">
        <div class="row">
            <div class="col-md-3">
                @include('landing.wasteproducersnav')
            </div>
            <div class="col-md-9">
                <div class="well well-sm" style="background: #3097D1;margin-top: 60px;">

                    <h4 style="color:white;text-align: left;"><span class=" glyphicon-time">Dashboard</span> <b></b></h4>
                </div>
                <div class="col-md-6 col-md-offset-3">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 style="text-align: center;font-weight: bold;"><span class="glyphicon glyphicon-phone">PROFILE</span></h4>
                    </div>
                    <div class="panel-body">

                        <table class="table table-hover">

                            <tr>
                                <td>NAME:</td>
                                <td>{{$company->user->name}}</td>
                            </tr>
                            <tr>
                                <td>EMAIL</td>
                                <td>{{$company->user->email}}</td>
                            </tr>
                            <tr>
                                <td>PHONE</td>
                                <td>{{$company->phone}}</td>
                            </tr>
                            <tr>
                                <td>ZONE</td>
                                <td>{{$company->zone->name}}</td>


                            </tr>
                            <tr>
                                <th>TYPE OF WASTE</th>
                                <td>{{$company->waste_type_name}}</td>
                            </tr>
                            <tr>
                                <th>PERIOD</th>
                                <td>{{$company->period_name}}</td>
                            </tr>


                            <tr>
                                <td></td><br>
                                <td>
                                    <button class="btn btn-info" @click="editCompany()">UPDATE</button>
                                </td>

                            </tr>

                        </table>
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
                                            <input type="text" v-model="company.user.name" class="form-control" name="name" id="name" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone " style="color:#3097D1">Phone:</label>
                                            <input type="text" v-model="company.phone" class="form-control" name="phone" id="phone" placeholder="Enter phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="Email " style="color:#3097D1">Email:</label>
                                            <input type="email" v-model="company.user.email" class="form-control" name="email" id="email" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="Type of  waste" style="color:#3097D1">Type of waste:</label>
                                            <select class="form-control" v-model="company.waste_type" name="waste_type">
                                                <option value="1">Disposable</option>
                                                <option value="2">Recyclable</option>
                                            </select>
                                        </div>
                                        {{--<div class="form-group">--}}
                                            {{--<label for="Name" style="color:#3097D1">Zone Name:</label>--}}
                                            {{--<select class="form-control" name="zone_id">--}}
                                                {{--@foreach($zones as $zone)--}}
                                                    {{--<option value="{{$zone->id}}">{{$zone->name}}</option>--}}
                                                {{--@endforeach--}}

                                            {{--</select>--}}
                                        {{--</div>--}}

                                        <div class="form-group">
                                            <label for="period" style="color:#3097D1">Period:</label>
                                            <select class="form-control" v-model="company.period_name" name="period">
                                                <option value="1">Daily</option>
                                                <option value="2">Weekly</option>
                                                <option value="3">Monthly</option>
                                                <option value="4">Yearly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">No,Cancel</button>
                                        <button type="submit" @click="updateCompany"  class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>



            </div>
        </div>
    </div>
@endsection
@section('after-scripts')
    <script>
        let nn = "";
        window.companyProfile = new Vue({
            el:'#company-profile',
            data:{
                company:{
                    user:{}
                }
            },
            methods:{
                editCompany:function(){
                    axios.get('{{route('company.profile.get', $company)}}')
                        .then(res=>{
                            this.company = res.data;
                            $('#edit').modal('show');
                        })
                        .catch(err=>{
                            alert('An error occured.Try again!');
                        });
                },
                updateCompany:function(){
                    axios.post('{{route('company.profile.update',$company)}}', {company:this.company})
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