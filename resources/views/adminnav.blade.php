

<div class="adminnav">
    <div class="panel" >
        <div class="body" >
             <a href="{{url('/home')}}">  <h4  style="font-size: 40px;">Dashboard</h4></a>
                <li class="li"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    ZONES
                </li>
                <div class="collapse" id="collapseExample" style="background-color:#010133 ;">
                    <li><a href="{{url('/zones/add')}} ">ADD</a></li>
                    <li ><a href="{{url('zonelists')}}">Zone List</a></li>
                </div>
                <li class="li "  data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">
                    ZONEADMIN
                </li>
                <div class="collapse" id="collapse2">
                    <li><a href="{{url('/zoneadmin')}}" >ADD</a></li>
                    <li><a href="{{url('/zoneadminlist')}}" >Zone Admins List</a></li>
                </div>
                <li class="li"  data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseExample">
                    AGENTS
                </li>
                <div class="collapse" id="collapse3">
                         <li><a href="{{url('/agents/add')}}" > ADD</a></li>
                        <li><a href="{{url('/agentlist')}}" > Agents</a></li>
                </div>
                <li class="li"  data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseExample">
                    WASTE PRODUCERS
                </li>
                <div class="collapse" id="collapse4">
                    <li><a href="{{url('/residentlist')}}">Residents</a></li>
                    <li><a href="{{url('/companylist')}}">Companies</a></li>
                </div>
                    <li><a href="{{url('/recyclerlist')}}" >Recyclers</a></li>
                    <li><a href="{{url('#')}}" >Amount of waste</a></li>
                    <li><a href="{{url('/payments')}}" >Payments</a></li>
                    <li><a href="{{url('#')}}" >Users</a></li>
                <li class="li"  data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseExample">
                    SCHEDULES
                </li>
                <div class="collapse" id="collapse5">
                        <li><a href="{{url('/wasteproducersschedule')}}">Waste Collection Schedule</a></li>
                        <li><a href="{{url('/recyclerschedule')}}">Recyclers</a></li>
                </div>
        </div>
    </div>
</div>
