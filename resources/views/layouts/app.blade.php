<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
    <style>
        .adminnav  .panel{
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
        .adminnav .panel  li{
            list-style: none;



        }

        .adminnav .panel  li a{
            display: block;
            padding: 10px;
            color:white;
            text-transform: uppercase;
            text-decoration: none;

        }
        .adminnav .panel  li:hover a {
            background:navy ;
            color:white;
        }
        .adminnav h4{
            color:white;
            text-align: center;
        }
        .adminnav .panel li:hover {
            background:lavender;
            color: white;
        }
        .adminnav .li{
            color:white;
            padding: 10px;
        }
        .adminnav .panel .li:hover {
            color:white;
            background:navy;
        }
        .adminnav .collapse li a{
            background:lavender;
            color:blue;


        }
        .adminnav .collapse li:hover a{
            background: #B6B6B6;

            color:#3097D1;
        }

    </style>

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
        .zoneadminnav .panel-body  li{
            list-style: none;
            padding: 10px;
        }

        .zoneadminnav .panel-body  li a{
             color:white;
            text-transform: uppercase;
            text-decoration: none;

        }
        .zoneadminnav .panel-body  li:hover  {
            background:navy ;
            color:white;
        }
        .zoneadminnav .panel-heading h4{
            color:white;
            text-transform: uppercase;
            text-align: center;
            font-family: "Times New Roman";
        }

        #app .container,#app .container-fluid {
            top: 70px;
            position: relative;
        }
        .navbar-default {
            background: #1a85c7 !important;
        }
        .navbar-brand,.nav li a {
            color: #FFF !important;
            font-weight: bold;
            font-size: larger;
        }
        .custom-nav .list-group-item {
            border: none !important;
        }
        .custom-nav .list-group-item:hover {
            background-color: rgba(26, 133, 199, 0.36);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div id="app" class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{--<script src="https://code.jquery.com/jquery-3.2.1.js"></script>--}}
    @yield('after-scripts')
    @yield('javascripts')
</body>
</html>
