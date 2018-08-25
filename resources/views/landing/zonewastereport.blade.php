@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class ="col-md-3">
                @include('landing.zoneadminnav')
            </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align: center">Zones waste Available Report</h3>
                    </div>
                    <div class="panel-body">
                        <form  role="form" action="{{url('/zonewastereport/save')}}" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" name="date" placeholder="select date">
                            </div>
                            <div class="form-group">
                                <label for="day">Day</label>
                                <select name="day" class="form-control">
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
                                <label for="Zone">Zone</label>
                                <select class ="form-control" name="zone_id">
                                    @foreach($zones as $zone)
                                        <option value="{{$zone->id}}">{{$zone->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="waste_type">Waste Type</label>
                                <select name="waste_type" class="form-control">
                                    <option value="1">metallic waste</option>
                                    <option value="2">Plastics</option>
                                    <option value="3">electronic-waste</option>
                                    <option value="4">other general recyclable waste</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Quantity">Quantity</label>
                                <input type="text" class="form-control" name="quantity" placeholder="Enter available quantity">
                            </div>
                            <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary pull-center" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection