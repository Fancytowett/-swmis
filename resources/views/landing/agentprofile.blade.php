@extends('layouts.app')

@section('content')
    <div class="container-fluid" id="agent-profile">
        <div class="row">
           <div class="col-md-3">
               @include('landing.agentadminnav')
           </div>
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-info" style="margin-top: 70px;">
                    <div class="panel-heading">
                      <h3 style="color: #3097D1;text-align: center;">PROFILE</h3>
                </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <td>Name</td>
                                <td>{{$agent->user->name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{$agent->user->email}}</td>
                            </tr>

                            <tr>
                                <td>Phone Number:</td>
                               <td> {{$agent->phone}}</td>
                            </tr>
                            <tr>
                            <td>Zone Allocated:</td>
                            <td>{{$agent->zone->name}}</td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <button class="btn btn-info" @click="editAgent()">EDIT PROFILE</button>
                                </td>
                            </tr>

                        </table>
                    </div>
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
                                        <input v-model="agent.user.name" type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone " style="color:#3097D1">Phone:</label>
                                        <input v-model="agent.phone" type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="Email " style="color:#3097D1">Email:</label>
                                        <input v-model="agent.user.email" type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">No,Cancel</button>
                                    <button type="submit" @click="updateAgent"  class="btn btn-primary">Update</button>
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
      window.agentProfile = new Vue({
          el:'#agent-profile',
          data:{
              agent:{
                  user:{}
              }
          },
          methods:{
              editAgent:function(){
                  axios.get('{{route('agent.profile.get', $agent)}}')
                      .then(res=>{
                          this.agent = res.data;
                          $('#edit').modal('show');
                      })
                      .catch(err=>{
                          alert('An error occured.Try again!');
                      });
              },
              updateAgent:function(){
                  axios.post('{{route('agent.profile.update',$agent)}}', {agent:this.agent})
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