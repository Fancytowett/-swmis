@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('adminnav')
            </div>
            <div class="col-md-9">
                <div class="col-md-9-offset-1" >
                    <div class="panel panel-info">
                        <div class="heading">
                            <h3>Schedules</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Zone</th>
                                    <th>Date</th>
                                    <th>Day</th>
                                    <th>Start time</th>
                                    <th>Finish time</th>
                                    <th>Agents</th>
                                </tr>
                                </thead>
                                <tr>
                                    @foreach($schedules as$schedule)

                                    <td>{{$schedule->zone->name}}</td>
                                    <td>{{$schedule->date}}</td>
                                    <td>{{$schedule->day}}</td>
                                    <td>{{$sxhedule->stime}}</td>
                                    <td>{{$schedule->ftime}}</td>
                                    <td>{{$schedule->agents}}</td>
                                    @endforeach

                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection