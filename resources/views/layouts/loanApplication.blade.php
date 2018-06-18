<?php
/**
 * Created by PhpStorm.
 * User: benson
 * Date: 4/17/18
 * Time: 11:47 AM
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




<!-- MultiStep Form -->
<section id="multiform" class="section-padding-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12" style="height: 100%">
                <form id="msform" class="form-group">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Personal Details</li>
                        <li>Business Details</li>
                        <li>Guarantor's Details</li>
                        <li>Employment Details</li>
                        <li>Security / Collateral</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset >
                        <h2 class="fs-title">Applicant Particulars</h2>
                        <h3 class="fs-subtitle">Tell us something more about you</h3>
                       <div class="row">
                           <div class="col-md-4">
                               <div class="form-horizontal">
                                   <div class="form-group">
                                       <input type="text" name="name" placeholder="Full Names"/>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-horizontal">
                                   <div class="form-group">
                                       <input type="text" name="nationality" placeholder="Nationality"/>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-horizontal">
                                   <div class="form-group">
                                       <input type="date" name="dob" placeholder="Date of birth"/>
                                   </div>
                               </div>
                           </div>
                       </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <input type="text" name="id" placeholder="National ID/Passport No.">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <input type="text" name="pin" placeholder="KRA PIN">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select  id="sel1">
                                        <option>SELECT GENDER</option>
                                        <option>FEMALE</option>
                                        <option>MALE</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select  id="sel1">
                                        <option>MARITAL STATUS</option>
                                        <option>SINGLE</option>
                                        <option>MARRIED</option>
                                        <option>DIVORCED</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <select  id="sel1">
                                            <option>LEVEL OF EDUCATION</option>
                                            <option>PRIMARY</option>
                                            <option>SECONDARY</option>
                                            <option>DIPLOMA</option>
                                            <option>GRADUATE</option>
                                            <option>POST GRADUATE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <input type="number" name="children" placeholder="No. of Children">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-horizontal">
                                   <div class="form-group">
                                       <input type="number" name="dependants" placeholder="Other Dependants">
                                   </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="next-kin" placeholder="Next of Kin">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="kin-relationship" placeholder="Relationship    ">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <input type="number" name="kin_id" placeholder="Kin ID/Paaport No.">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="tel" name="tel" placeholder="Tel. No.">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name="kin-email" placeholder="Kin Email">
                                </div>
                            </div>

                        </div>
                        <h5>PERMANENT ADDRESS</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <input type="number" name="postal" placeholder="Postal Address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="number" name="code" placeholder="Code">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="city" placeholder="City/Town">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <input type="tel" name="p_tel" placeholder="Tel.">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="tel" name="alternative_tel" placeholder="Alternative Tel:">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name="p_email" placeholder="Email">
                                </div>
                            </div>

                        </div>
                        <h5>PHYSICAL ADDRESS</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <input type="text" name="county" placeholder="county">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="locaton" placeholder="Location">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="street" placeholder="Road/Street">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <input type="text" name="plot" placeholder="Building/Plot">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="house_no" placeholder="House No.">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select  id="sel1">
                                        <option>OWNED</option>
                                        <option>RENTED</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Business Details</h2>
                        <h3 class="fs-subtitle">*********</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="name_of_entity" placeholder="Name of Entity">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="year_of_reg" placeholder="Year of Reg">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="reg_no" placeholder="Reg .No:">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="licence" placeholder="Licence No:">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="name_of_bs" placeholder="Name of Business">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="pin" placeholder="PIN">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="no_of_employees" placeholder="No of Employees">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="postal" placeholder="Postal Address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="tel" placeholder="Tel">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="mobile" placeholder="Mobile">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="bs_desc" placeholder="Business Desription (Brief)"/>
                                </div>
                            </div>
                        </div>
                        <h5>LOAN DETAILS</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="amount_in_words" placeholder="Amount Applied for (in words)"/>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <input type="number" name="amount" placeholder="Ksh.">
                                </div>
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" name="Loan_amount" placeholder="Loan Amount">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" name="interest_rate" placeholder="Interest Rate">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" name="interest_amount" placeholder="Interest Amount">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" name="total" placeholder="TOTAL">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="Loan_periold" placeholder="Loan Period">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="mode">
                                        <option>Mode of Disbursement</option>
                                        <option>M -Pesa</option>
                                        <option>EFT</option>
                                        <option>Cheque</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="loan_product" placeholder="Loan Product">

                                </div>
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Guarantor's Particulars</h2>
                        <h3 class="fs-subtitle"></h3>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="g_sname" placeholder="Surname">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="g_othernames" placeholder="Other Names">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="g_id" placeholder="National/Passport No">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="g_pin" placeholder="KRA PIN">
                                </div>
                            </div>

                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Employment Details</h2>
                        <h3 class="fs-subtitle"></h3>
                        <input type="text" name="twitter" placeholder="Twitter"/>
                        <input type="text" name="facebook" placeholder="Facebook"/>
                        <input type="text" name="gplus" placeholder="Google Plus"/>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Security / Collateral</h2>
                        <h3 class="fs-subtitle">Fill in your credentials</h3>
                        <input type="text" name="email" placeholder="Email"/>
                        <input type="password" name="pass" placeholder="Password"/>
                        <input type="password" name="cpass" placeholder="Confirm Password"/>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="submit" name="submit" class="submit action-button" value="Submit"/>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- /.MultiStep Form -->
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


<!-- Custom Script -->
<script src="assets/js/custom.js"></script>
<!-- scripts for form!-->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="assets/js/msform.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>

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
