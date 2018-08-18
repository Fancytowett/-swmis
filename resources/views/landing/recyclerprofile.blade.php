@extends('layouts.app')
@section('content')
    <div class="container-fluid" id="recycler-profile">
        <div class="row">
            <div class="col-md-3">
                @include('landing.recyclernav')
            </div>
            <div class=" col-md-9">
                <div class="col-md-6 col-md-offset-2">
                    <div class="panel panel-info" style="margin-top: 70px;">
                        <div class="panel-heading">
                            <h3 style="color: #3097D1;">  <center>PROFILE </center></h3>
                        </div>
                        <div class="panel-body">

                            <table class="table">


                                <tr>
                                    <td>Name</td>
                                    <td>{{$recycler->user->name}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$recycler->user->email}}</td>
                                </tr>

                                <tr>
                                    <td>Phone Number:</td>
                                    <td> {{$recycler->phone}}</td>
                                </tr>
                                {{--<tr>--}}
                                    {{--<td>Zone Allocated:</td>--}}
                                    {{--<td>{{$recycler->zone->name}}</td>--}}
                                {{--</tr>--}}
                                <tr>
                                    <td></td>
                                    <td>

                                        <button class="btn btn-info" @click="editRecycler()" style="float:bottom">EDIT PROFILE</button>
                                    </td>

                                </tr>

                            </table>
                        </div>
                        <div class="modal fade" id="edit" style="margin-top: 200px;margin-left: 700px;margin-right: 300px;margin-bottom: 50px;">
                            <div class="modal-dialog-content" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title text-left  " id="myModalLabel" style="text-align: center;color: #3097D1 ">UPDATE PROFILE</h4>
                                    </div>

                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="Name" style="color:#3097D1">Name:</label>
                                                <input type="text" class="form-control" v-model="recycler.user.name" name="name" id="name" placeholder="Enter name">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone " style="color:#3097D1">Phone:</label>
                                                <input type="text" v-model="recycler.phone" class="form-control" name="phone" id="phone" placeholder="Enter phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="Email " style="color:#3097D1">Email:</label>
                                                <input type="email" v-model="recycler.user.email" class="form-control" name="email" id="email" placeholder="Enter email">
                                            </div></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-dismiss="modal">No,Cancel</button>
                                            <button type="submit"  @click="updateRecycler" class="btn btn-primary">Update</button>
                                        </div>

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
        window.recyclerprofile = new Vue({
            el:'#recycler-profile',
            data:{
                recycler:{
                    user:{}
                }
            },
            methods:{
                editRecycler:function(){
                    axios.get('{{route('recycler.profile.get', $recycler)}}')
                        .then(res=>{
                            this.recycler = res.data;
                            $('#edit').modal('show');
                        })
                        .catch(err=>{
                            alert('An error occured.Try again!');
                        });
                },
                updateRecycler:function(){
                    axios.post('{{route('recycler.profile.update',$recycler)}}', {recycler:this.recycler})
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
