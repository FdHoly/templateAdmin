<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ThemeMakker">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>:: BigBucket :: Contact List</title>
    <link rel="stylesheet" href="../assets/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendor/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/css/main.css" type="text/css">
</head>

<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/brand/icon_black.svg" width="48" height="48" alt="ArrOw">
            </div>
            <p>Please wait...</p>
        </div>
    </div>

    <nav class="navbar custom-navbar navbar-expand-lg py-2">
        <div class="container-fluid px-0">
            <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-align-left"></i></a>
            <a href="index.html" class="navbar-brand"><img src="../assets/images/brand/icon.svg" alt="BigBucket" />
                <strong>Big</strong> Bucket</a>
            <div id="navbar_main">
                <ul class="navbar-nav mr-auto hidden-xs">
                    <li class="nav-item page-header">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Contact List</li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item hidden-xs">
                        <form class="form-inline main_search">
                            <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search..."
                                aria-label="Search">
                        </form>
                    </li>
                    <li class="nav-item"><a class="nav-link nav-link-icon" href="javascript:void(0);"><i
                                class="fa fa-cogs"></i></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_2"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="fa fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl py-0">
                            <div class="py-3 px-3">
                                <h5 class="heading h6 mb-0">Notifications <span
                                        class="badge badge-pill badge-primary text-uppercase float-right">3</span></h5>
                            </div>
                            <div class="list-group">
                                <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                    <div class="list-group-img"><span class="avatar bg-purple">JD</span></div>
                                    <div class="list-group-content">
                                        <div class="list-group-heading">Johnyy Depp <small>10:05 PM</small></div>
                                        <p class="text-sm">Lorem ipsum dolor consectetur adipiscing eiusmod tempor</p>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                    <div class="list-group-img"><span class="avatar bg-pink">TC</span></div>
                                    <div class="list-group-content">
                                        <div class="list-group-heading">Tom Cruise <small>10:05 PM</small></div>
                                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur eiusmod tempor</p>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                    <div class="list-group-img"><span class="avatar bg-blue">WS</span></div>
                                    <div class="list-group-content">
                                        <div class="list-group-heading">Will Smith <small>10:05 PM</small></div>
                                        <p class="text-sm">Lorem sit amet consectetur adipiscing eiusmod tempor</p>
                                    </div>
                                </a>
                            </div>
                            <div class="py-3 text-center">
                                <a href="javascript:void(0);" class="link link-sm link--style-3">View all
                                    notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_3"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="fa fa-user"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <h6 class="dropdown-header">User menu</h6>
                            <a class="dropdown-item" href="javascript:void(0);"><i
                                    class="fa fa-user text-primary"></i>My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0);"><span
                                    class="float-right badge badge-success">$50K</span><i
                                    class="fa fa-briefcase text-primary"></i>My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0);"><span
                                    class="float-right badge badge-warning">4</span><i
                                    class="fa fa-envelope text-primary"></i>Inbox</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i
                                    class="fa fa-cog text-primary"></i>Settings</a>
                            <div class="dropdown-divider" role="presentation"></div>
                            <a class="dropdown-item" href="javascript:void(0);"><i
                                    class="fa fa-sign-out text-primary"></i>Sign
                                out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main_content" id="main-content">

        @include('include.sidebar')

        <div class="right_sidebar">
            <div class="setting_div">
                <a href="javascript:void(0);" class="rightbar_btn"><i class="fa fa-cog fa-spin"></i></a>
            </div>
            <ul class="nav nav-pills nav-fill flex-column flex-sm-row mx-3 my-3" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="Settings-tab" data-toggle="tab" href="#Settings"
                        role="tab" aria-controls="Settings" aria-selected="true">Settings</a></li>
                <li class="nav-item"><a class="nav-link" id="Contact-tab" data-toggle="tab" href="#Contact" role="tab"
                        aria-controls="Contact" aria-selected="false">Contact</a></li>
            </ul>
            <hr>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="Settings" role="tabpanel" aria-labelledby="Settings-tab">
                    <div class="sidebar-scroll">
                        <div class="sidebar-widget px-3">
                            <h5>Theme Setting</h5>
                            <ul class="choose-skin list-unstyled">
                                <li data-theme="black">
                                    <div class="black"></div>
                                </li>
                                <li data-theme="azure">
                                    <div class="azure"></div>
                                </li>
                                <li data-theme="indigo" class="active">
                                    <div class="indigo"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li data-theme="blush">
                                    <div class="blush"></div>
                                </li>
                            </ul>
                            <ul class="setting-list list-unstyled mt-3">
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Dark Sidebar</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" class="switch-dark">
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Mini Sidebar</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" class="switch-sidebar">
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                            </ul>
                            <hr>
                        </div>
                        <div class="sidebar-widget px-3">
                            <h5>Language Setting</h5>
                            <select class="selectpicker" title="Select language">
                                <option>English</option>
                                <option>Spanish</option>
                                <option>Chinese</option>
                                <option>Hindi</option>
                                <option>Arabic</option>
                            </select>
                            <hr>
                        </div>
                        <div class="sidebar-widget px-3">
                            <h5>General Setting</h5>
                            <ul class="setting-list list-unstyled mt-3">
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Report Panel Usage</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" checked>
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Email Redirect</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" checked>
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Notifications</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox">
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Location Permission</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" checked>
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                            </ul>
                            <hr>
                        </div>
                        <div class="sidebar-widget px-3">
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase">New Project</h4>
                                <h4 class="progress-percentage text-uppercase">$950</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase"> Admin</h4>
                                <h4 class="progress-percentage text-uppercase">$10k</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="78"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase">Balance</h4>
                                <h4 class="progress-percentage text-uppercase">$50k</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase">Storage</h4>
                                <h4 class="progress-percentage text-uppercase">35GB</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-red" role="progressbar" aria-valuenow="89"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-block btn-animated btn-animated-x">
                                <span class="btn-inner--visible">Upgrade Now</span>
                                <span class="btn-inner--hidden"><i class="fas fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Contact" role="tabpanel" aria-labelledby="Contact-tab">
                    <div class="sidebar-widget px-3">
                        <ul class="list-unstyled contact-list">
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Vincent Porter <span class="d-block">London UK</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar2.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Mike Thomas <span class="d-block">London UK</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar3.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Aiden Chavaz</h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar4.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Vincent Porter <span class="d-block">Miami USA</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar5.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Mike Thomas <span class="d-block">Neyyork USA</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar6.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Aiden Chavaz</h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar7.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Mike Thomas <span class="d-block">New Delhi IND</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar8.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Aiden Chavaz</h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="page">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="javascript:void(0);">Contact</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Application</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);">Calendar</a>
                                <a class="dropdown-item" href="javascript:void(0);">TaskBoard</a>
                                <a class="dropdown-item" href="javascript:void(0);">Chat App</a>
                                <a class="dropdown-item" href="javascript:void(0);">Contacts</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);">Timeline</a>
                                <a class="dropdown-item" href="javascript:void(0);">Invoices</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Stater page</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);">Pricing</a>
                                <a class="dropdown-item" href="javascript:void(0);">Search</a>
                                <a class="dropdown-item" href="javascript:void(0);">Testimonials</a>
                                <a class="dropdown-item" href="javascript:void(0);">Map</a>
                                <a class="dropdown-item" href="javascript:void(0);">Icon</a>
                                <a class="dropdown-item" href="javascript:void(0);">Carousel</a>
                                <a class="dropdown-item" href="javascript:void(0);">Gallery</a>
                                <a class="dropdown-item" href="javascript:void(0);">Lookup</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <button type="button" class="btn btn-primary">Add</button>
                        <a href="https://themeforest.net/user/wrraptheme/portfolio" title="Portfolio"
                            class="btn btn-success ml-2">Portfolio</a>
                    </form>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 c_table">
                                <thead>
                                    <tr>
                                        <th class="w60">#</th>
                                        <th>User</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th class="text-center">Favorite</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="../assets/images/xs/avatar1.jpg" class="avatar w30" alt="">
                                            <span class="ml-2">John Smith</span>
                                        </td>
                                        <td>
                                            <span class="phone">+1 264-625-2583</span>
                                        </td>
                                        <td>
                                            <span class="email"><a href="javascript:void(0);"
                                                    title="">johnsmith@gmail.com</a></span>
                                        </td>
                                        <td class="text-center"><i class="fa fa-star"></i></td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="../assets/images/xs/avatar3.jpg" class="avatar w30" alt="">
                                            <span class="ml-2">Hossein Shams</span>
                                        </td>
                                        <td>
                                            <span class="phone">+1 264-625-5689</span>
                                        </td>
                                        <td>
                                            <span class="email"><a href="javascript:void(0);"
                                                    title="">hosseinshams@gmail.com</a></span>
                                        </td>
                                        <td class="text-center"><i class="fa fa-star text-warning"></i></td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="../assets/images/xs/avatar4.jpg" class="avatar w30" alt="">
                                            <span class="ml-2">Maryam Amiri</span>
                                        </td>
                                        <td>
                                            <span class="phone">+1 264-625-9513</span>
                                        </td>
                                        <td>
                                            <span class="email"><a href="javascript:void(0);"
                                                    title="">maryamamiri@gmail.com</a></span>
                                        </td>
                                        <td class="text-center"><i class="fa fa-star"></i></td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="../assets/images/xs/avatar6.jpg" class="avatar w30" alt="">
                                            <span class="ml-2">Tim Hank</span>
                                        </td>
                                        <td>
                                            <span class="phone">+1 264-625-1212</span>
                                        </td>
                                        <td>
                                            <span class="email"><a href="javascript:void(0);"
                                                    title="">timhank@gmail.com</a></span>
                                        </td>
                                        <td class="text-center"><i class="fa fa-star text-warning"></i></td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="../assets/images/xs/avatar7.jpg" class="avatar w30" alt="">
                                            <span class="ml-2">Fidel Tonn</span>
                                        </td>
                                        <td>
                                            <span class="phone">+1 264-625-2323</span>
                                        </td>
                                        <td>
                                            <span class="email"><a href="javascript:void(0);"
                                                    title="">fideltonn@gmail.com</a></span>
                                        </td>
                                        <td class="text-center"><i class="fa fa-star"></i></td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="../assets/images/xs/avatar8.jpg" class="avatar w30" alt="">
                                            <span class="ml-2">Gary Camara</span>
                                        </td>
                                        <td>
                                            <span class="phone">+1 264-625-1005</span>
                                        </td>
                                        <td>
                                            <span class="email"><a href="javascript:void(0);"
                                                    title="">garycamara@gmail.com</a></span>
                                        </td>
                                        <td class="text-center"><i class="fa fa-star"></i></td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="../assets/images/xs/avatar9.jpg" class="avatar w30" alt="">
                                            <span class="ml-2">Frank Camly</span>
                                        </td>
                                        <td>
                                            <span class="phone">+1 264-625-9999</span>
                                        </td>
                                        <td>
                                            <span class="email"><a href="javascript:void(0);"
                                                    title="">frankcamly@gmail.com</a></span>
                                        </td>
                                        <td class="text-center"><i class="fa fa-star"></i></td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                <label class="custom-control-label" for="customCheck8">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="../assets/images/xs/avatar10.jpg" class="avatar w30" alt="">
                                            <span class="ml-2">Tim Hank</span>
                                        </td>
                                        <td>
                                            <span class="phone">+1 264-625-1212</span>
                                        </td>
                                        <td>
                                            <span class="email"><a href="javascript:void(0);"
                                                    title="">timhank@gmail.com</a></span>
                                        </td>
                                        <td class="text-center"><i class="fa fa-star"></i></td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <script src="../assets/bundles/vendorscripts.bundle.js"></script>

    <!-- Theme JS -->
    <script src="../assets/js/theme.js"></script>
</body>

</html>
