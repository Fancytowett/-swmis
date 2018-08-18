<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Dashboard</h4>
    </div>
    <div class="panel-body">
        <ul class="list-group custom-nav">
            <li class="list-group-item">
                <a href="{{url('/home')}}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="list-group-item"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Zones
                <div class="collapse" id="collapseExample">
                   <ul class="">
                       <li><a href="{{url('/zones/add')}} ">Add</a></li>
                       <li><a href="{{url('zonelists')}}">Zone List</a></li>
                   </ul>
                </div>
            </li>

            <li class="list-group-item"  data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">
                Zone Admins
                <div class="collapse" id="collapse2">
                    <ul class="">
                        <li><a href="{{url('/zoneadmin')}}" >Add </a></li>
                        <li><a href="{{url('/zoneadminlist')}}" >Zone Admins List</a></li>
                    </ul>
                </div>
            </li>

            <li class="list-group-item"  data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseExample">
                Agents
                <div class="collapse" id="collapse3">
                    <ul>
                        <li><a href="{{url('/agents/add')}}" > Add</a></li>
                        <li><a href="{{url('/agentlist')}}" > Agents</a></li>
                    </ul>
                </div>
            </li>

            <li class="list-group-item"  data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseExample">
                Waste Producers
                <div class="collapse" id="collapse4">
                    <ul>
                        <li><a href="{{url('/residentlist')}}">Residents</a></li>
                        <li><a href="{{url('/companylist')}}">Companies</a></li>
                    </ul>
                </div>
            </li>

            <li class="list-group-item"><a href="{{url('/recyclerlist')}}" >Recyclers</a></li>
            <li class="list-group-item"><a href="{{url('#')}}" >Amount of waste</a></li>
            <li class="list-group-item"><a href="{{url('/payments')}}" >Payments</a></li>
            <li class="list-group-item"><a href="{{url('#')}}" >Users</a></li>
            <li class="list-group-item"  data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseExample">
                Schedules
                <div class="collapse" id="collapse5">
                    <ul>
                        <li><a href="{{url('/wasteproducersschedule')}}">Add </a></li>
                        <li><a href="{{url('/wasteproducersschedulelist')}}">Waste Collection Schedule</a></li>
                        <li><a href="{{url('/recyclerschedule')}}">Recyclers</a></li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>