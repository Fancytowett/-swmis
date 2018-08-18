<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- Styles -->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
        <!-- Plugin CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{asset('css/css/creative.css')}}" rel="stylesheet" type="text/css">

        <style>
            html, body {
                background-color:#fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position:fixed;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;

            }


        </style>
    </head>
    <body id="page-top">

        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links " >--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Login</a>--}}
                        {{--<a href="{{ route('register') }}">Register</a>--}}
                        {{--<a href="#"></a>--}}
                        {{--<a href="#about">About us</a>--}}
                        {{--<a href="#services">Services</a>--}}
                        {{--<a href="#contact"> Contact</a>--}}
                        {{--<a href="#help">Help</a>--}}
                    {{--@endauth--}}
                {{--</div>--}}
         {{--/   @endif--}}
                <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                    <div class="container">
                        <a class="navbar-brand js-scroll-trigger" href="#page-top">Swims</a>
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            @if (Route::has('login'))
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    @auth
                                    <li class="nav-item">
                                        <a  class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a>
                                    </li>
                                    @else
                                    <li class="nav-item">
                                       <a class="nav-link js-scroll-trigger"  href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger"  href="{{ route('register') }}">Register</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#help">help</a>
                                    </li>
                                @endauth
                            </ul>
                                @endif
                        </div>
                    </div>
                </nav>


                <header class="masthead text-center text-white d-flex" >
                    <div class="container my-auto" style="background-image: url('../images/header.jpg')">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <h1 style="color: black" class="text-uppercase">
                                    <strong >Get best waste collection services and get recyclabe waste</strong>
                                </h1>
                                <hr>
                            </div>
                            <div class="col-lg-8 mx-auto">
                                <p class="text-faded mb-5"> Keep your sorrounding clean</p>
                                <a class="btn btn-info btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                            </div>
                        </div>

                </header>
                <header class="masthead text-center text-white d-flex">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <h1 class="text-uppercase">
                                    <strong></strong>
                                </h1>
                                <hr>
                            </div>
                            <div class="col-lg-8 mx-auto">
                                <p class="text-faded mb-5"> Get best waste collection services and get recyclabe waste</p>
                                <a class="btn btn-info btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                            </div>
                        </div>
                    </div>
                </header>
                <section class="bg-info" id="about" style="height:400px;padding-top: 50px;padding-bottom: 50px;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8 mx-auto text-center">
                                <h2 class="section-heading text-white">We've got what you need!</h2>
                                <hr class="light my-4">
                                <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="services">
                    <div class="container-fluid" style="height: 200px;padding-top: 100px;">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading">At Your Service</h2>
                                <hr class="my-4">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="service-box mt-5 mx-auto">
                                    <i class="fa fa-4x fa-diamond text-info mb-3 sr-icons"></i>
                                    <h3 class="mb-3">Have your waste collected and disposed</h3>
                                    <p class="text-muted mb-0">Connect with us to have your waste collected</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="service-box mt-5 mx-auto">
                                    <i class="fa fa-4x fa-paper-plane text-info mb-3 sr-icons"></i>
                                    <h3 class="mb-3">Get variety of  Recyclable waste</h3>
                                    <p class="text-muted mb-0">Buy waste for recycling</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="service-box mt-5 mx-auto">
                                    <i class="fa fa-4x fa-newspaper-o text-info mb-3 sr-icons"></i>
                                    <h3 class="mb-3"> Current Updates</h3>
                                    <p class="text-muted mb-0">Get Updates on Solid waste management.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="service-box mt-5 mx-auto">
                                    <i class="fa fa-4x fa-heart text-info mb-3 sr-icons"></i>
                                    <h3 class="mb-3">Trends</h3>
                                    <p class="text-muted mb-0">What is trending</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto text-center">
                                <h2 class="section-heading">Let's Get In Touch!</h2>
                                <hr class="my-4">
                                <p class="mb-5">CONTACT US</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="card ">
                                    <div class="card-heading bg-info">
                                        <h4 style="padding: 20px">CONTACT FORM</h4>
                                    </div>
                                    <div class="card-body">

                                        <form action="" method="post" class="form-dark">
                                            <div class="form-group">
                                                <label for="First name">First Name:</label>
                                                <input type="text" name="fname" class="form-control" placeholder="enter your first name">
                                            </div>
                                            <div class="form-group">
                                                <label for="Last  name">Last Name:</label>
                                                <input type="text" name="lname" class="form-control" placeholder="enter your last name">
                                            </div>
                                            <div class="form-group">
                                                <label for="Email">Email:</label>
                                                <input type="email" name="email" class="form-control" placeholder="enter your email">
                                            </div>
                                            <div class="form-group">
                                                <label for="Message">Message</label>
                                               <textarea class="form-control" name=Message >

                                               </textarea>
                                            </div>
                                            <div class="form-group">
                                               <input type="submit" value="submit" name="submit" class="btn btn-info">
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-dark" id="about" style="height:200px;padding-top:50px;padding-bottom:50px;margin-top: 20px">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8 mx-auto text-center">
                                <p>links</p>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </div>
    </body>
</html>
