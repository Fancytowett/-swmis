@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('adminnav')
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Schedules</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-striped">
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
                                @if($schedules->count() == 0)
                                    <td colspan="6 text-center">No Data available</td>
                                    @endif

                                @foreach($schedules as$schedule)
                                    <td>{{$schedule->zone->name}}</td>
                                    <td>{{$schedule->date}}</td>
                                    <td>{{$schedule->day}}</td>
                                    <td>{{$schedule->stime}}</td>
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
    @endsection