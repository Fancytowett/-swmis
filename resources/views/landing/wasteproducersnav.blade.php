<style>
    .wasteproducersnav  .panel{
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
    .wasteproducersnav .panel  li{
        list-style: none;



    }

    .wasteproducersnav .panel  li a{
        display: block;
        padding: 10px;
        color:white;
        text-transform: uppercase;
        text-decoration: none;

    }
    .wasteproducersnav .panel  li:hover a {
        background:navy ;
        color:white;
    }
    .wasteproducersnav .panel h4{
        color:white;
        text-align: center;
    }



</style>
<div class="wasteproducersnav">
    <div class="panel">
        <div class="panel-heading">
             <h4>HOME</h4>
        </div>
        <li><a href="{{url('/wasteproducerprofile')}}">PROFILE </a></li>
        <li> <a href="" >INVOICE STATUS </a></li>
        <li> <a href="">SCHEDULE </a></li>
        <li><a href="" >NOTIFICATIONS </a></li>
    </div>
</div>
