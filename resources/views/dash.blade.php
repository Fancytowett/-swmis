
<style type="text/css">
    .panels .col-md-4 .panel:hover{

        color:blue;
        background: lavender;

    }
</style>

<div class="row" xmlns="http://www.w3.org/1999/html">

           {{-- <script>
                $("#menu-toggle").click(function(e){
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
            </script>--}}
    <div class="well well-sm " style="background: #3097D1;margin-top: 50px;">
        <h4 style="color:white;text-align: left;"><span class=" glyphicon-time">Dashboard</span> <b></b></h4>
    </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif


    </div>
      <div class="row">
          @include('adding')
       <br>
      </div>


    <div class="row">
        <div class="panels">

            <div class="col-md-4 ">
               <div class="panel panel-default" style="height: 250px;width:300px;background-color:#3097D1; ">
                   <a href="{{url('/zonelists')}}"><h3 style="padding-bottom:100px;padding-top: 100px;padding-left:100px ;padding-right: 100px;color:white;font-family: Times New Roman;" >   {{\App\Zone::all()->count()}}  <br>  ZONES</h3></a>
                <h3 style="padding-bottom:100px;padding-top: 100px;padding-left:100px ;padding-right: 100px;color:white;font-family: Times New Roman;" >{{\App\Zone::all()->count()}}ZONES</h3>
               </div>
            </div>
        <div class="col-md-4">
            <div class="panel panel-default" style="height: 250px;width:300px;background-color:#3097D1; ">
                <a href="{{url('/zoneadminlist')}}"><h3 style="padding-bottom:100px;padding-top: 100px;padding-left:100px ;padding-right: 120px;color:white;font-family: Times New Roman;" >  {{\App\Zoneadmin::all()->count()}}  ZONEADMINS</h3></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default" style="height: 250px;width:300px;background-color:#3097D1; ">
                <a href="{{url('agentlist')}}"><h3 style="padding-bottom:100px;padding-top: 100px;padding-left:100px ;padding-right: 100px;color:white;font-family: Times New Roman;"  >  {{\App\Agent::all()->count()}}  AGENTS</h3></a>
            </div>
        </div>

            </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel-panel-default" style="height: 250px;width:300px;background-color:#3097D1; ">
                <a href="{{url('residentlist')}}"><h3 style="padding-bottom:100px;padding-top: 100px;padding-left:100px ;padding-right: 100px;color:white;font-family: Times New Roman;" >  {{\App\Resident::all()->count()}}  RESIDENTS</h3></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel-panel-default" style="height: 250px;width:300px;background-color:#3097D1; ">
              <a href="{{url('/companylist')}}" > <h3 style="padding-bottom:100px;padding-top: 100px;padding-left:100px ;padding-right: 100px;color:white;font-family: Times New Roman;" >  {{\App\Company::all()->count()}}  COMPANIES</h3></a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel-panel-default" style="height: 250px;width:300px;background-color:#3097D1; ">

                <a href="{{url('recyclerlist')}}"><h3 style="padding-bottom:100px;padding-top: 100px;padding-left:100px ;padding-right: 100px;color:white;font-family: Times New Roman;" > {{\App\Recycler::all()->count()}}  RECYCLERS</h3></a>
            </div>
        <br><br>
        </div>

        </div>
    </div>

