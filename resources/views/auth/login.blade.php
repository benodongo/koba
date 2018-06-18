<?php
/**
 * Created by PhpStorm.
 * User: benson
 * Date: 4/12/18
 * Time: 11:34 AM
 */
?>
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Startkit, Responsive, Business Template, Bootstrap 4,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <title>KobaCapital - Contact- us</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="demo/demo.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- COLORS | CURRENTLY USED DIFFERENTLY TO SWITCH FOR DEMO. IN ORIGINAL FILE ALL COLORS AVAILABLE IN COLORS FOLDER -->
    <link rel="stylesheet" href="assets/css/colors/default.css" title="default">
    <link rel="alternate stylesheet" href="assets/css/colors/default1.css" title="default1">
    <link rel="alternate stylesheet" href="assets/css/colors/default2.css" title="default2">
    <link rel="alternate stylesheet" href="assets/css/colors/default3.css" title="default3">
    <link rel="alternate stylesheet" href="assets/css/colors/default4.css" title="default4">
    <link rel="alternate stylesheet" href="assets/css/colors/default5.css" title="default5">
    <link rel="alternate stylesheet" href="assets/css/colors/default6.css" title="default6">
    <link rel="alternate stylesheet" href="assets/css/colors/default7.css" title="default7">
    <link rel="alternate stylesheet" href="assets/css/colors/default8.css" title="default8">
    <link rel="alternate stylesheet" href="assets/css/colors/default9.css" title="default9">
    <link rel="alternate stylesheet" href="assets/css/colors/default10.css" title="default10">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="gray-bg">

<!-- Start: Preloader
============================= -->

<!--
  <div class="preloader">
      <div class="loader"></div>
  </div>
-->

<!-- End: Preloader
============================= -->

<!-- Start: Header Top
============================= -->
<section id="header-top" style="margin-bottom: 10%">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-6 text-md-left text-center mb-lg-0 mb-1">
                <ul class="header-social d-inline-block">
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/products">Products</a></li>
                        <li class="active"><a href="/contact">Contact</a></li>
                    </ul>
                </ul>
                <div class="address d-inline-block"><i class="icofont icofont-social-google-map mr-2"></i>Vision Plaza, Mombasa Road</div>
            </div>
            <div class="col-lg-6 col-md-6 text-center text-md-right">
                <li><a href="{{ route('register') }}">REGISTER</a></li>
            </div>
        </div>
    </div>
</section>
<!-- End: Header Top
============================= -->




<!-- Start: Contact Us
============================= -->
<section id="contact-area" style="background: url(/assets/img/breadcumb-bg.jpg) no-repeat center / cover;">
    <div class="contact-box">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="get-in-touch">
                    <h3 style="margin: auto; text-align: center">SIGN IN</h3>
                    <p style="text-align: center"> Sign in First to Apply</p>
                    <form action="{{ route('login') }}" method="POST"  class="form-group">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End: Contact Us
============================= -->

<!-- Start: Footer Sidebar

<!-- End: Footer Sidebar
============================= -->

<!-- Start: Footer Copyright
============================= -->

<section id="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <p>©2018 Koba Capital - All Rights Reserved </p>
                    <a href="#" class="scrollup"><i class="fa fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End: Footer Copyright
============================= -->


<!-- Scripts -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/jquery.shuffle.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/wow.min.js"></script>

<!-- Smooth Scroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>

<!-- Map Script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqoWGSQYygV-G1P5tVrj-dM2rVHR5wOGY"></script>
<script src="assets/js/map-script.js"></script>

<!-- Custom Script -->
<script src="assets/js/custom.js"></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- =========================================================
     STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
============================================================== -->
<script type="text/javascript" src="demo/styleswitcher.js"></script>
<script type="text/javascript" src="demo/demo.js"></script>
<div class="demo-style-switch" id="switch-style">
    <a id="toggle-switcher" class="switch-button icon_tools"><i class="fa fa-cog"></i></a>
    <div class="switched-options">
        <ul class="styles">
            <li><a href="#" onclick="setActiveStyleSheet('default'); return false;" title="Default">
                    <div class="default">
                    </div>
                </a></li>

            <li><a href="#" onclick="setActiveStyleSheet('default1'); return false;" title="Default1">
                    <div class="default1">
                    </div>
                </a></li>

            <li><a href="#" onclick="setActiveStyleSheet('default2'); return false;" title="Default2">
                    <div class="default2">
                    </div>
                </a></li>

            <li><a href="#" onclick="setActiveStyleSheet('default3'); return false;" title="Default3">
                    <div class="default3">
                    </div>
                </a></li>

            <li><a href="#" onclick="setActiveStyleSheet('default4'); return false;" title="Default4">
                    <div class="default4">
                    </div>
                </a></li>

            <li><a href="#" onclick="setActiveStyleSheet('default5'); return false;" title="Default5">
                    <div class="default5">
                    </div>
                </a></li>

            <li><a href="#" onclick="setActiveStyleSheet('default6'); return false;" title="Default6">
                    <div class="default6">
                    </div>
                </a></li>

            <li><a href="#" onclick="setActiveStyleSheet('default7'); return false;" title="Default7">
                    <div class="default7">
                    </div>
                </a></li>

            <li><a href="#" onclick="setActiveStyleSheet('default8'); return false;" title="Default8">
                    <div class="default8">
                    </div>
                </a></li>

            <li><a href="#" onclick="setActiveStyleSheet('default9'); return false;" title="Default9">
                    <div class="default9">
                    </div>
                </a></li>

            <li><a href="#" onclick="setActiveStyleSheet('default10'); return false;" title="Default10">
                    <div class="default10">
                    </div>
                </a></li>

        </ul>
    </div>
</div>

</body>

</html>





{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
