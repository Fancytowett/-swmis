<style>
    .recyclernav  .panel{
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
    .recyclernav .panel  li{
        list-style: none;



    }

    .recyclernav .panel  li a{
        display: block;
        padding: 10px;
        color:white;
        text-transform: uppercase;
        text-decoration: none;

    }
    .recyclernav .panel  li:hover a {
        background:navy ;
        color:white;
    }
    .recyclernav h4{
        color:white;
        text-align: center;
    }
    .recyclernav .panel li:hover {
        color: white;
        background:lavender;
    }




</style>

<div class="recyclernav">
    <div class="panel">
        <div class="panel-heading">
        <h4>RECYCLER HOME </h4>
        </div>
        <div class="body">

            <li><a href="{{url('/recyclerprofile')}}" >PROFILE </a></li>
            <li> <a href="" >INVOICE STATUS </a></li>
            <li> <a href="">SCHEDULE </a></li>
            <li><a href="" >NOTIFICATIONS </a></li>
        </div>

    </div>
</div>