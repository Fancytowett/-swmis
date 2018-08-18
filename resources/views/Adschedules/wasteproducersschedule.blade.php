@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-3">
                @include('adminnav')
            </div>
            <div class="col-md-9">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                       <h4 style="text-align: center;"> Schedule</h4>
                    </div>
                        <div class="panel-body">
                            <form  method="post" action="{{url('/wasteproducersschedule/save')}}">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="zone">Zone</label>
                                    <select name="zone_id" class="form-control">
                                        @foreach($zones as $zone)
                                        <option value="{{$zone->id}}">{{$zone->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Date">Date</label>
                                    <input type="date" name="date" class="form-control" placeholder="Date">
                                </div>
                                <label for="Day">Day</label>
                                <select name="day" class="form-control">
                                    <option value="1">Sunday</option>
                                    <option value="2">Monday</option>
                                    <option value="3">Tuesday</option>
                                    <option value="4">Wednesday</option>
                                    <option value="5">Thursday</option>
                                    <option value="6">Friday</option>
                                    <option value="7">Saturday</option>
                                </select>

                                <div class="form-group">
                                    <label for=" Start Time">Start Time</label>
                                    <input type="time" name="stime" class="form-control" placeholder="Start Time" required>
                                </div>
                                <div class="form-group">
                                    <label for="Finishing Time">Finishing Time</label>
                                    <input type="time" name="ftime" class="form-control" placeholder="Finishing time" required>
                                </div>

                                <div class="form-group">
                                    <label for="Agents">Agents</label>
                                    <select id="agents" class="form-control" name="agents[]" multiple="multiple">
                                        @foreach($agents as $agent)
                                        <option value="{{$agent->id}}">{{$agent->user->name}}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-info" value="SAVE">
                            </form>

                        </div>

                    </div>
            </div>

            </div>
            </div>
        </div>



@endsection
@section('javascripts')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#agents').select2();
    });
    </script>
@endsection