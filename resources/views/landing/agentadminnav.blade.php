

<style>
    .agentnav .panel{
        background-color: #010133;
        height: 100%; /* 100% Full-height */
        width:23%;
        position: fixed; /* Stay in place */
        z-index: 1; /* Stay on top */
        top: 0; /* Stay at the top */
        left: 0;



        padding-top: 60px; /* Place content 60px from the top */

    }
  .agentnav .panel  li{
        list-style: none;


    }

    .agentnav .panel  li a{
        display: block;
        padding: 10px;
        color:white;
        text-transform: uppercase;
        text-decoration: none;

    }
   .agentnav .panel  li:hover a {
        background:navy ;
        color:white;
    }
   .agentnav .panel-heading h4{
        color:white;
        text-align: center;
    }
    .panel-heading a:hover{
        color: white;
    }

</style>
<div class="agentnav">
<div class="panel " >
    <div class="panel-heading">
          <h4> <span class="glyphicon glyphicon-dashboard"><a href="{{url('/agentslanding')}}">AGENTS HOME</a></span> </h4>
    </div>
    <div class="body">


        <li >  <a href="{{url('/agentprofile')}}">Profile</a></li>
        <li> <a href="{{url('/agentsschedule')}}"> View schedule</a></li>

    </div>
</div>
</div>