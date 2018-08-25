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
                <th style="font-size:17px;">Agents</th>
            </tr>
            </thead>
            @foreach($schedules as $schedule)
                <tr>
                    <td>{{$schedule->zone->name}}</td>
                    <td>{{$schedule->date}}</td>
                    <td>{{$schedule->day}}</td>
                    <td>{{$schedule->stime}}</td>
                    <td>{{$schedule->ftime}}</td>
                    <td>
                        @if($schedule->agents)
                            <ol>
                                @foreach($schedule->agents as $agent)
                                    <li>{{$agent->agent->user->name}}</li>
                                @endforeach
                            </ol>
                        @else

                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
