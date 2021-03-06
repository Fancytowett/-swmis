@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.agentadminnav')
            </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                       <h3>Resident Waste</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{url('agentresidentwastesave')}}" method="POST">
                            {!! csrf_field() !!}
                            {{--<div class="form-group">--}}
                                {{--<select class="form-control" name="zone_id">--}}
                                    {{--@foreach($zones as $zone)--}}
                                        {{--<option value="{{$zone->id}}">{{$zone->name}}</option>--}}
                                    {{--@endforeach--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Day">Day</label>
                                <select name="day" class="form-control" required>

                                    <option value="1">Sunday</option>
                                    <option value="2">Monday</option>
                                    <option value="3">Tuesday</option>
                                    <option value="4">Wednesday</option>
                                    <option value="5">Thursday</option>
                                    <option value="6">Friday</option>
                                    <option value="7">Saturday</option>
                                </select>
                            </div>
                             <div class="form-group">
                                <label for="name">Resident  Name</label>
                                <select name="resident_id" class="form-control" required>
                                    @foreach($residents as $resident)
                                    <option value="{{$resident->id}}">{{$resident->user->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Quantity of waste">Quantity of waste</label>
                                <input type="text" name="quantity" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary " value="SEND">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection