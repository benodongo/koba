<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Koba Capital</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/puse-icons-feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/vendors/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <!-- partial:assets/partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-success">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="../../index.html"><img src="assets/images/logo.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="assets/images/logo-mini.svg" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-profile" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/faces/face1.jpg" alt="image">
                        <span class="d-none d-lg-inline">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached mr-2 text-success"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-logout mr-2 text-primary"></i>
                            Signout
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-settings d-none d-lg-block">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-backburger"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:assets/partials/_settings-panel.html -->

        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="events py-4 border-bottom px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                        <p class="text-gray mb-0">build a js based app</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="assets/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="assets/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="assets/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="assets/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="assets/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="assets/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->
        <!-- partial:assets/partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link d-flex">
                        <div class="profile-name">
                            <p class="name">
                                {{ Auth::user()->name }}
                            </p>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Main</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/index.html">
                        <i class="icon-layout menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../pages/widgets.html">
                        <i class="icon-server menu-icon"></i>
                        <span class="menu-title">My Loans</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                        <i class="icon-box menu-icon"></i>
                        <span class="menu-title">Loan History</span>

                    </a>
                </li>


            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Loan Application</h4>
                                <form id="example-form" method="post" action="/applicants/step1">
                                    {{ csrf_field() }}
                                    <div>
                                        <h3>Applicant Particulars</h3>
                                        <section>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">First Name</label>
                                                        <input type="text" value="{{{ $applicant->fname or '' }}}" class="form-control" id="taskTitle"  name="fname">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Middle Name</label>
                                                        <input type="text" value="{{{ $applicant->mname or '' }}}" class="form-control" id="taskTitle"  name="mname">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Last Name</label>
                                                        <input type="text" value="{{{ $applicant->lname or '' }}}" class="form-control" id="taskTitle"  name="lname">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label for="description">Nationality</label>
                                                        <select class="form-control" name="nationality">
                                                            <option {{{ (isset($applicant->nationality) && $applicant->nationality == 'Kenya') ? "selected=\"selected\"" : "" }}}>Kenya</option>
                                                            <option {{{ (isset($applicant->nationality) && $applicant->nationality == 'Uganda') ? "selected=\"selected\"" : "" }}}>Uganda</option>
                                                            <option {{{ (isset($applicant->nationality) && $applicant->nationality == 'Tanzania') ? "selected=\"selected\"" : "" }}}>Tanzania</option>
                                                            <option {{{ (isset($applicant->nationality) && $applicant->nationality == 'Rwanda') ? "selected=\"selected\"" : "" }}}>Rwanda</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Date of Birth</label>
                                                        <input type="text" value="{{{ $applicant->dob or '' }}}" class="form-control" id="taskTitle"  name="dob" placeholder="yy -mm -dd">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">National ID</label>
                                                        <input type="text" value="{{{ $applicant->national_id or '' }}}" class="form-control" id="taskTitle"  name="national_id">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">KRA Pin</label>
                                                        <input type="text" value="{{{ $applicant->kra_pin or '' }}}" class="form-control" id="taskTitle"  name="kra_pin">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Gender</label><br>
                                                        <label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
                                                        <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Marital Status</label><br>
                                                        <label class="radio-inline"><input type="radio" name="marital_status" value="single">Single</label>
                                                        <label class="radio-inline"><input type="radio" name="marital_status" value="married">Married</label>
                                                        <label class="radio-inline"><input type="radio" name="marital_status" value="divorced">Divorced</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label for="description">Level Of Education</label>
                                                        <select class="form-control" name="education">
                                                            <option {{{ (isset($applicant->education) && $applicant->education == 'Primary') ? "selected=\"selected\"" : "" }}}>Primary</option>
                                                            <option {{{ (isset($applicant->education) && $applicant->education == 'Secondary') ? "selected=\"selected\"" : "" }}}>Secondary</option>
                                                            <option {{{ (isset($applicant->education) && $applicant->education == 'Tertiary') ? "selected=\"selected\"" : "" }}}>Tertiary</option>
                                                            <option {{{ (isset($applicant->education) && $applicant->education == 'University') ? "selected=\"selected\"" : "" }}}>University</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">No of Children</label>
                                                        <input type="number" value="{{{ $applicant->children or '' }}}" class="form-control" id="taskTitle"  name="children" >
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Dependants</label>
                                                        <input type="number" value="{{{ $applicant->dependants or '' }}}" class="form-control" id="taskTitle"  name="dependants">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="form-group">
                                                        <label for="description">Next of KIn</label>
                                                        <input type="text" value="{{{ $applicant->next_kin or '' }}}" class="form-control" id="taskTitle"  name="next_kin" >

                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">relationship</label>
                                                        <input type="text" value="{{{ $applicant->kin_relationship or '' }}}" class="form-control" id="taskTitle"  name="kin_relationship" >
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">National ID</label>
                                                        <input type="number" value="{{{ $applicant->kin_id or '' }}}" class="form-control" id="taskTitle"  name="kin_id">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">Tel</label>
                                                        <input type="number" value="{{{ $applicant->kin_tel or '' }}}" class="form-control" id="taskTitle"  name="kin_tel">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">County</label>
                                                        <input type="text" value="{{{ $applicant->county or '' }}}" class="form-control" id="taskTitle"  name="county">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">location</label>
                                                        <input type="text" value="{{{ $applicant->location or '' }}}" class="form-control" id="taskTitle"  name="location" >
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">Road/Street</label>
                                                        <input type="text" value="{{{ $applicant->road_street or '' }}}" class="form-control" id="taskTitle"  name="road_street">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">House no</label>
                                                        <input type="number" value="{{{ $applicant->house_no or '' }}}" class="form-control" id="taskTitle"  name="house_no">
                                                    </div>

                                                </div>
                                            </div>

                                        </section>

                                        <h3>Business</h3>
                                        <section>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">Name of Entity</label>
                                                        <input type="text" value="{{{ $applicant->name_of_entity or '' }}}" class="form-control" id="taskTitle"  name="name_of_entity">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">Year of Registration</label>
                                                        <input type="text" value="{{{ $applicant->year_of_reg or '' }}}" class="form-control" id="taskTitle"  name="year_of_reg">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">Registration Number</label>
                                                        <input type="text" value="{{{ $applicant->reg_no or '' }}}" class="form-control" id="taskTitle"  name="reg_no">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">Licence Number</label>
                                                        <input type="text" value="{{{ $applicant->licence_no or '' }}}" class="form-control" id="taskTitle"  name="licence_no">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label for="title">Name of Business</label>
                                                        <input type="text" value="{{{ $applicant->name_of_bs or '' }}}" class="form-control" id="taskTitle"  name="name_of_bs" placeholder="">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">PIN</label>
                                                        <input type="text" value="{{{ $applicant->pin or '' }}}" class="form-control" id="taskTitle"  name="pin" placeholder="">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Business Address</label>
                                                        <input type="text" value="{{{ $applicant->bs_address or '' }}}" class="form-control" id="taskTitle"  name="bs_address">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Business Tel:</label>
                                                        <input type="text" value="{{{ $applicant->bs_tel or '' }}}" class="form-control" id="taskTitle"  name="bs_tel">
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="title">Business Description</label><br>
                                                        <textarea type="text"  class="form-control" id="taskDescription" name="bs_description">{{{ $product->bs_description or '' }}}</textarea>
                                                    </div>

                                                </div>

                                            </div>

                                        </section>
                                        <h3>Employment</h3>
                                        <section>


                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">Employer</label>
                                                        <input type="text" value="{{{ $applicant->employer or '' }}}" class="form-control" id="taskTitle"  name="employer">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">Staff Number</label>
                                                        <input type="number" value="{{{ $applicant->staff_no or '' }}}" class="form-control" id="taskTitle"  name="staff_no">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <input type="text" value="{{{ $applicant->title or '' }}}" class="form-control" id="taskTitle"  name="title">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">Department</label>
                                                        <input type="text" value="{{{ $applicant->department or '' }}}" class="form-control" id="taskTitle"  name="department">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label for="title">Branch</label>
                                                        <input type="text" value="{{{ $applicant->branch or '' }}}" class="form-control" id="taskTitle"  name="branch" placeholder="">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">No of Employees</label>
                                                        <input type="text" value="{{{ $applicant->no_of_employees or '' }}}" class="form-control" id="taskTitle"  name="no_of_employees" placeholder="">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Employment terms</label>
                                                        <input type="text" value="{{{ $applicant->employement_terms or '' }}}" class="form-control" id="taskTitle"  name="employement_terms">
                                                    </div>

                                                </div>
                                            </div>

                                        </section>
                                        <h3>Guarantors</h3>
                                        <section>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">First Name</label>
                                                        <input type="text" value="{{{ $applicant->fname or '' }}}" class="form-control" id="taskTitle"  name="g_fname">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Middle Name</label>
                                                        <input type="text" value="{{{ $applicant->mname or '' }}}" class="form-control" id="taskTitle"  name="g_mname">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Last Name</label>
                                                        <input type="text" value="{{{ $applicant->lname or '' }}}" class="form-control" id="taskTitle"  name="g_lname">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label for="description">Nationality</label>
                                                        <select class="form-control" name="g_nationality">
                                                            <option {{{ (isset($applicant->nationality) && $applicant->nationality == 'Kenya') ? "selected=\"selected\"" : "" }}}>Kenya</option>
                                                            <option {{{ (isset($applicant->nationality) && $applicant->nationality == 'Uganda') ? "selected=\"selected\"" : "" }}}>Uganda</option>
                                                            <option {{{ (isset($applicant->nationality) && $applicant->nationality == 'Tanzania') ? "selected=\"selected\"" : "" }}}>Tanzania</option>
                                                            <option {{{ (isset($applicant->nationality) && $applicant->nationality == 'Rwanda') ? "selected=\"selected\"" : "" }}}>Rwanda</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Date of Birth</label>
                                                        <input type="text" value="{{{ $applicant->dob or '' }}}" class="form-control" id="taskTitle"  name="g_dob" placeholder="yy -mm -dd">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">National ID</label>
                                                        <input type="text" value="{{{ $applicant->national_id or '' }}}" class="form-control" id="taskTitle"  name="g_national_id">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">KRA Pin</label>
                                                        <input type="text" value="{{{ $applicant->kra_pin or '' }}}" class="form-control" id="taskTitle"  name="g_kra_pin">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Gender</label><br>
                                                        <label class="radio-inline"><input type="radio" name="g_gender" value="male">Male</label>
                                                        <label class="radio-inline"><input type="radio" name="g_gender" value="female">Female</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">Marital Status</label><br>
                                                        <label class="radio-inline"><input type="radio" name="g_marital_status" value="single">Single</label>
                                                        <label class="radio-inline"><input type="radio" name="g_marital_status" value="married">Married</label>
                                                        <label class="radio-inline"><input type="radio" name="g_marital_status" value="divorced">Divorced</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label for="description">Level Of Education</label>
                                                        <select class="form-control" name="g_education">
                                                            <option {{{ (isset($applicant->education) && $applicant->education == 'Primary') ? "selected=\"selected\"" : "" }}}>Primary</option>
                                                            <option {{{ (isset($applicant->education) && $applicant->education == 'Secondary') ? "selected=\"selected\"" : "" }}}>Secondary</option>
                                                            <option {{{ (isset($applicant->education) && $applicant->education == 'Tertiary') ? "selected=\"selected\"" : "" }}}>Tertiary</option>
                                                            <option {{{ (isset($applicant->education) && $applicant->education == 'University') ? "selected=\"selected\"" : "" }}}>University</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">occupation</label>
                                                        <input type="number" value="{{{ $applicant->occupation or '' }}}" class="form-control" id="taskTitle"  name="g_occupation" >
                                                    </div>

                                                </div>
                                                <div class="col-md-4">


                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">



                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">relationship</label>
                                                        <input type="text" value="{{{ $applicant->relationship or '' }}}" class="form-control" id="taskTitle"  name="g_relationship" >
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">Email</label>
                                                        <input type="number" value="{{{ $applicant->email or '' }}}" class="form-control" id="taskTitle"  name="g_email">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">Tel</label>
                                                        <input type="number" value="{{{ $applicant->tel or '' }}}" class="form-control" id="taskTitle"  name="g_tel">
                                                    </div>

                                                </div>
                                            </div>
                                            <h5>PHYSICAL ADDRESS</h5>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">County</label>
                                                        <input type="text" value="{{{ $applicant->county or '' }}}" class="form-control" id="taskTitle"  name="g_county">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">location</label>
                                                        <input type="text" value="{{{ $applicant->location or '' }}}" class="form-control" id="taskTitle"  name="g_location" >
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="title">Road/Street</label>
                                                        <input type="text" value="{{{ $applicant->road_street or '' }}}" class="form-control" id="taskTitle"  name="g_road_street">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">


                                                </div>
                                            </div>

                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="assets/js/wizard.js"></script>
<!-- End custom js for this page-->
</body>

</html>