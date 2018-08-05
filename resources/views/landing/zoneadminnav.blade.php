<style>
    .zoneadminnav  .panel{
        background-color: #010133;
        height: 100%; /* 100% Full-height */
        width:23%;
        position: fixed; /* Stay in place */
        z-index: 1; /* Stay on top */
        top: 0; /* Stay at the top */
        left: 0;
        font-family:sans-serif;

        box-shadow: 0 2px 100px;



        padding-top: 60px; /* Place content 60px from the top */

    }
    .zoneadminnav .panel  li{
        list-style: none;



    }

    .zoneadminnav .panel  li a{
        display: block;
        padding: 10px;
        color:white;
        text-transform: uppercase;
        text-decoration: none;

    }
    .zoneadminnav .panel  li:hover a {
        background:navy ;
        color:white;
    }
    .zoneadminnav .panel-heading h4{
        color:white;
        text-transform: uppercase;
        text-align: center;
        font-family: "Times New Roman";
    }
</style>
<div class="zoneadminnav">
<div class="panel ">
 <div class="panel-heading">
     <h4>Zone Admin</h4>
 </div>
<div class="body">

    <li><a href="{{url('/zoneadminprofile')}}"> My Profile</a></li>

    <li> <a href="{{url('/zonesagentslist')}}">Zone Agents</a></li>
    <li> <a href="{{url('/zonesresidentslist')}}">Zone Residents</a></li>
    <li><a href="{{url('/zonescompanieslist')}}">Zone Companies</a></li>
    <li><a href="{{url('/zoneagentsschedule')}}"> Agents Schedule</a></li>
    <li><a href="{{url('zonewasteproducersschedule')}}">Waste producers schedule</a></li>
    <li><a href="{{url('/zonepayments')}}">Zone Payments</a></li>

</div>
</div>
</div>