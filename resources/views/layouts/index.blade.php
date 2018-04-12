<?php
/**
 * Created by PhpStorm.
 * User: benson
 * Date: 4/12/18
 * Time: 11:20 AM
 */
 ?>
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Startkit, Responsive, Business Template, Bootstrap 4,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/logo3.png" type="image/x-icon" />
    <title>KobaCapital - Microfinance Bank</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="demo/demo.css">

    <!-- COLORS | CURRENTLY USED DIFFERENTLY TO SWITCH FOR DEMO. IN ORIGINAL FILE ALL COLORS AVAILABLE IN COLORS FOLDER -->
    <link rel="stylesheet" href="assets/css/colors/default.css" title="default">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
<section id="header-top">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-6 text-md-left text-center mb-lg-0 mb-1">
                <ul class="header-social d-inline-block">
                    <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                    <li><a href="#"><i class="icofont icofont-social-tumblr"></i></a></li>
                    <li><a href="#"><i class="icofont icofont-social-dribbble"></i></a></li>
                </ul>
                <div class="address d-inline-block"><i class="icofont icofont-social-google-map mr-2"></i>Vision Plaza, Mombasa Road</div>
            </div>
            <div class="col-lg-6 col-md-6 text-center text-md-right">
                <div class="email d-inline-block">
                    <a href="@"><i class="fa fa-envelope-o mr-2"></i>Quick Email</a>
                </div>
                <div class="phone d-inline-block">
                    <i class="fa fa-phone mr-2"></i>Tel +254-733 425585
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Header Top
============================= -->

<!-- Start: Search
============================= -->

<div id="search">
    <a href="#" id="close-btn">
        <i class="fa fa-times"></i>
    </a>
    <div>
        <input placeholder="type here" id="searchbox" type="search" />
        <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
    </div>
</div>

<!-- End: Search
============================= -->



<!-- Start: Header
============================= -->
<header id="header">

    <!-- Navigation Starts -->
    <div class="navbar-area sticky-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="logo main">
                        <a href="index.html"><img class="responsive" src="assets/img/logo3.png" alt="KobaCapital"></a>
                    </div>
                </div>

                <!-- Nav -->
                <div class="col-lg-6 d-none d-lg-block">
                    <nav class="text-right main-menu">
                        <ul>
                            <li class="active">
                                <a href="/">Home</a>
                            </li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/products">Products</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Nav End -->
            </div>
        </div>

        <!-- Start Mobile Menu -->
        <div class="mobile-menu-area d-lg-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav class="mobile-menu-active">
                                <ul>
                                    <li class="active">
                                        <a href="/">Home</a>
                                    </li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/products">Products</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mobile Menu -->
    </div>
    <!-- Navigation End -->

    <!-- Header Slider -->
    <div class="row">
        <div class="col-md-12">
            <div class="header-slider">
                <div class="header-single-slider">
                    <figure>
                        <img src="assets/img/homepage/slider/slider01.jpg" alt="">
                        <figcaption>
                            <div class="content">
                                <div class="container inner-content text-left">
                                    <h1>Quick Loans</h1>
                                    <p>Get a loan within 24 hrs...</p>
                                    <a href="service.html" class="boxed-btn">More <i class="icofont icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="header-single-slider">
                    <figure>
                        <img src="assets/img/homepage/slider/slider02.jpg" alt="">
                        <figcaption>
                            <div class="content">
                                <div class="container inner-content text-center">
                                    <h1>Favourable Payment Plan</h1>
                                    <p>Flexible payment...pay within 2 Months</p>
                                    <a href="service.html" class="boxed-btn">More<i class="icofont icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End: Header
============================= -->

<!-- Start: Features List
============================= -->
<section id="features-list">
    <div class="container">
        <div class="row text-lg-left text-md-center">
            <div class="col-md-4 mb-lg-0 mb-3">
                <div class="features-list-item wow fadeInUp" data-wow-delay="0.1s">
                    <span class="icon"><i class="icofont icofont-triangle"></i></span>
                    <h4>Emergency loan</h4>
                    <p class="small">Short term loan without collateral</p>
                    <a href="service.html" class="view-more">View more</a>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-3">
                <div class="features-list-item wow fadeInUp" data-wow-delay="0.2s">
                    <span class="icon"><i class="icofont icofont-brand-airtel"></i></span>
                    <h4>Salary Loan</h4>
                    <p class="small">Loan upto Ksh. 100 000 with a for salaried clients</p>
                    <a href="service.html" class="view-more">View more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="features-list-item wow fadeInUp" data-wow-delay="0.3s">
                    <span class="icon"><i class="icofont icofont-brand-teliasonera"></i></span>
                    <h4>Business Loans</h4>
                    <p class="small">Loan for business clients</p>
                    <a href="service.html" class="view-more">View more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Features List
============================= -->

<!-- Start: Call Out
============================= -->
<section id="call-out">
    <div class="container">
        <div class="row call-out">
            <div class="col-lg-9 col-md-7 col-12 text-md-left text-center mb-md-0 mb-4">
                <h3>Need a loan?</h3>
                <p>Don't look further</p>
            </div>
            <div class="col-lg-3 col-md-5 col-12 text-md-right text-center">
                <a href="#" class="boxed-btn">Apply now</a>
            </div>
        </div>
    </div>
</section>
<!-- End: Call Out
============================= -->




<!-- Start: Pricing
============================= -->
<section id="pricing" class="section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <div class="section-header">
                    <h2>Our Products</h2>
                    <p>Loan Categories that we offer</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-0 mb-4">
                <div class="pricing-tale wow fadeInUp" data-wow-delay="0.1s">
                    <div class="prcing-head">
                        <h3>Emergency Loan</h3></div>
                    <div class="price"><span>upto</span>KES 30000</div>
                    <div class="features">
                        <ul>
                            <li><i class="icofont icofont-tick-mark"></i>Minimum - KES 10000</li>
                            <li><i class="icofont icofont-tick-mark"></i>1 Month tenor</li>
                            <li><i class="icofont icofont-tick-mark"></i>no collateral</li>
                            <li><i class="icofont icofont-tick-mark"></i>short-term for emergency</li>


                        </ul>
                        <br>
                        <br>
                        <div class="select-button text-center">
                            <a href="" class="le-btn boxed-btn"></i>Apply now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-0 mb-4">
                <div class="pricing-tale wow fadeInUp" data-wow-delay="0.2s">
                    <div class="prcing-head">
                        <h3>Salary Loan</h3></div>
                    <div class="price"><span>upto</span>KES 10000</div>
                    <div class="features">
                        <ul>
                            <li><i class="icofont icofont-tick-mark"></i>Minimum - KES 30000</li>
                            <li><i class="icofont icofont-tick-mark"></i>2 month tenor</li>
                            <li><i class="icofont icofont-tick-mark"></i>collateral - motorvehicle, equipment and machines</li>
                            <li><i class="icofont icofont-tick-mark"></i>ideal for regular salaried individuals</li>
                            <li></li>

                        </ul>
                        <br>
                        <div class="select-button text-center">
                            <a href="" class="le-btn boxed-btn">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="pricing-tale wow fadeInUp" data-wow-delay="0.3s">
                    <div class="prcing-head">
                        <h3>Business Loan</h3></div>
                    <div class="price"><span>upto</span>KES 200000</div>
                    <div class="features">
                        <ul>
                            <li><i class="icofont icofont-tick-mark"></i>Minimum - KES 50000</li>
                            <li><i class="icofont icofont-tick-mark"></i>2 Months repayment period</li>
                            <li><i class="icofont icofont-tick-mark"></i>collateral - motorvehicle, equipment and machines e.tc</li>
                            <li><i class="icofont icofont-tick-mark"></i>availbale for clients who have been in operation for over 12 months</li>
                        </ul>
                        <div class="select-button text-center">
                            <a href="" class="le-btn boxed-btn">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Pricing
============================= -->

<!-- Start: Testimonial
============================= -->
<section id="testimonial" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <div class="section-header">
                    <h2>Testimonial</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.1s">What our Clients say about us</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-carousel text-center">
                    <div class="single-testimonial">
                        <div class="img-rounded"><img src="assets/img/homepage/testimonial/testimonial.png" alt=""></div>
                        <h4>Naiomi Watson</h4>
                        <p>Handy loans with flexible repayment period</p>
                    </div>
                    <div class="single-testimonial">
                        <div class="img-rounded"><img src="assets/img/homepage/testimonial/testimonial.png" alt=""></div>
                        <h4>John Doe</h4>
                        <p>Easy to get a loan without following many steps</p>
                    </div>
                    <div class="single-testimonial">
                        <div class="img-rounded"><img src="assets/img/homepage/testimonial/testimonial.png" alt=""></div>
                        <h4>T Kinui</h4>
                        <p>Best and trustworthy partner for growing your SMEs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Testimonial
============================= -->

<!-- Start: Subscribe
============================= -->
<section id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 text-lg-left text-center mb-lg-0 mb-3">
                <i class="icofont icofont-email"></i>
                <h3>Subscribe now for news</h3>
                <p>We provide you all of update</p>
            </div>
            <div class="col-lg-7 col-md-12 text-center">
                <form id="subscribe-form" action="#" method="POST">
                    <input type="email" name="email" id="subscribe-mail" placeholder="Input your email here" required>
                    <input type="submit" class="subscribe-btn boxed-btn mt-xl-0 mt-lg-3 mt-3" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End: Subscribe
============================= -->






<!-- Start: Footer Sidebar
============================= -->


<!-- End: Footer Sidebar
============================= -->

<!-- Start: Footer Copyright
============================= -->

<section id="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <p>©2018 Koba Capital - All Rights Reserved</p>
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
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.shuffle.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>

<!-- Smooth Scroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>

<!-- Map Script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqoWGSQYygV-G1P5tVrj-dM2rVHR5wOGY"></script>
<script src="assets/js/map-script.js"></script>

<!-- Custom Script -->
<script src="assets/js/custom.js"></script>

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
