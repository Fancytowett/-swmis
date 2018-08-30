<div class="row">
    <div class="col-md-12">
        <div class="panelG panel-default">
            <div class="panel-heading">
               <div class="pull-righdt">
                   <a href="{{url('/zones/add')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add Zone</a>
                   <a href="{{url('/zoneadmin')}}" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Add ZoneAdmin</a>
                   <a href="{{url('/agents/add')}}" class="btn btn-warning btn-xs"><i class="fa fa-plus"></i> Add Agent</a>
               </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>{{\App\Zone::all()->count()}}</h2>
                                <span><a href="{{url('/zonelists')}}">Zones</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>{{\App\Zoneadmin::all()->count()}}</h2>
                                <span><a href="{{url('/zoneadminlist')}}">Zoneadmins</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>{{\App\Resident::all()->count()}}</h2>
                                <span><a href="{{url('/residentlist')}}">Residents</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>{{\App\Company::all()->count()}}</h2>
                                <span><a href="{{url('/companylist')}}">Companies</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>{{\App\Agent::all()->count()}}</h2>
                                <span><a href="{{url('/agentlist')}}">Agents</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>{{\App\Companywaste::all()->sum('quantity')}}KG</h2>
                                <span style="color: #33B5E5">Total Businesses/Companies wastes</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>{{\App\Residentwaste::all()->sum('quantity')}}KG</h2>
                                <span style="color: #33B5E5">Residents/Homestead wastes</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>{{\App\PaymentConfirmation::all()->sum('trans_amount')}}ksh</h2>
                                <span style="color: #33B5E5">Total waste Payments</span>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>