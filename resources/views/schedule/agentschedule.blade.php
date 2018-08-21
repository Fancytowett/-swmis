@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.agentadminnav')
            </div>
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <center><h3>Waste collection Schedule</h3></center>
                    </div>
                    <div class="panel-body">
                        <table class=" table table-hover table-striped">
                            <thead>
                            <tr >
                                <th style="font-size:17px;"> Zone</th>
                                <th style="font-size:17px;">Date</th>
                                <th style="font-size:17px;">Day</th>
                                <th style="font-size:17px;">Start time</th>
                                <th style="font-size:17px;">Finish time</th>
                                <th>Agents picking</th>
                            </tr>
                            </thead>
                            @foreach($schedules as $schedule)
                                <tr>
                                    <td>{{$schedule->zone->name}}</td>
                                    <td>{{$schedule->date}}</td>
                                    <td>{{$schedule->day}}</td>
                                    <td>{{$schedule->stime}}</td>
                                    <td>{{$schedule->ftime}}</td>
                                    <td>{{$schedule->agents}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

