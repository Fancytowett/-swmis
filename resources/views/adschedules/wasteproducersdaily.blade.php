<div class="panel panel-info">
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

            @if($schedules->count() == 0)
                <td colspan="6 text-center">No Data available</td>
            @endif

            @foreach($schedules as$schedule)
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


                        <ol>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
