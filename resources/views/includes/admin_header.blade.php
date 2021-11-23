<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
<script.js>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | TravelMazi</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('public/admin/favicon.ico') }}favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('public/admin/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('public/admin/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('public/admin/plugins/animate-css/animate.css') }}" rel="stylesheet" />

   <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{asset('public/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="{{asset('public/admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />

    <!-- Bootstrap Spinner Css -->
    <link href="{{asset('public/admin/plugins/jquery-spinner/css/bootstrap-spinner.css')}}" rel="stylesheet">

     <!-- Bootstrap Tagsinput Css -->
    <link href="{{ asset('public/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet">

     <!-- Bootstrap Select Css -->
    <link href="{{asset('public/admin/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="{{asset('public/admin/plugins/nouislider/nouislider.min.css')}}" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="{{ asset('public/admin/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" />

     <!-- JQuery DataTable Css -->
    <link href="{{ asset('public/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="{{ asset('public/admin/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

       <!-- Light Gallery Plugin Css -->
    <link href="{{ asset('public/admin/plugins/light-gallery/css/lightgallery.css') }}" rel="stylesheet">

    
    <!-- Wait Me Css -->
    <link href="{{ asset('public/admin/plugins/waitme/waitMe.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet">
    <!-- font awesome icons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('public/admin/css/themes/all-themes.css') }}" rel="stylesheet" />
    <style type="text/css">

        .dropdown-menu.pull-right {
            right: 25px !important;
            left: auto;
        }
    </style>
    
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{url('admin')}}"><img src="{{asset('public/admin/images/mazi_new.png ')}}" width="100" height="60" alt="logo" /></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <!-- <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li> -->
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                  <!--   <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                   <!--  <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- #END# Tasks -->
                    <!-- <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                   
                    @if(empty(Auth::user()->image))
                        <img src="{{asset('public/admin/images/user-lg.jpg')}}" width="48" height="48" />
                    @else
                        <img src="{{asset('public/admin_image/')}}/{{Auth::user()->image}}" width="48" height="48"/>
                    @endif
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo Auth::user()->name; ?></div>
                    <div class="email"><?php echo ucfirst(Auth::user()->type);?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right sidedropdown">
                            <li><a href="{{url('admin/profile')}}"><i class="material-icons">person</i>Profile</a></li> 
                            
                            <li role="separator" class="divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <i class="material-icons">input</i>{{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <?php $segment = Request::segment(2); ?>  
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                     <li class="<?php if($segment ==''){echo 'active';}?>">
                        <a href="{{url('/admin')}}">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?php if($segment =='blogs'){echo 'active';}?>">
                        <a href="{{url('admin/blogs')}}">
                            <i class="material-icons">note</i>
                            <span>Blogs</span>
                        </a>
                    </li>
                    <li class="<?php if($segment =='about'){echo 'active';}?>">
                        <a href="{{url('admin/about')}}">
                            <i class="material-icons">apps</i>
                            <span>About</span>
                        </a>
                    </li>

                    <li class="<?php if($segment =='cities'){echo 'active';}?>">
                        <a href="{{url('admin/cities')}}">
                            <i class="material-icons">location_city</i>
                            <span>City</span>
                        </a>
                    </li>

                    <li class="<?php if($segment =='offers' || $segment =='offers/create'){echo 'active';}?>">
                        <a href="{{url('admin/offers')}}">
                            <i class="material-icons">store</i>
                            <span>Offers</span>
                        </a>
                    </li>

                    <li class="<?php if($segment =='coupons' || $segment =='coupons/create'){echo 'active';}?>">
                        <a href="{{url('admin/coupons')}}">
                            <i class="material-icons">store</i>
                            <span>Coupons</span>
                        </a>
                    </li>


                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">book</i>
                            <span>Visa</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="<?php if($segment =='visa' || $segment =='visa/create'){echo 'active';}?>">
                                <a href="{{url('admin/visa')}}">All Visa</a>
                            </li>
                            <li class="<?php if($segment =='visa_type' || $segment =='visa_type/create'){echo 'active';}?>">
                                <a href="{{url('admin/visa_type')}}">Visa Type</a>
                            </li>
                            
                        </ul>
                    </li>


                    <li class="<?php if($segment =='gallery'){echo 'active';}?>">
                        <a href="{{url('admin/gallery')}}">
                            <i class="material-icons">image</i>
                            <span>Gallery</span>
                        </a>
                    </li>
                    <li class="<?php if($segment =='flights'){echo 'active';}?>">
                        <a href="{{url('admin/flights')}}">
                            <i class="material-icons">airplanemode_active</i>
                            <span>Flights Name</span>
                        </a>
                    </li>
                    
                    <li class="<?php if($segment =='flight-booking'){echo 'active';}?>">
                        <a href="{{url('admin/flight-booking')}}">
                            <i class="material-icons">airplanemode_active</i>
                            <span>Flight Bookings</span>
                        </a>
                    </li>
                    <li class="<?php if($segment =='airlines'){echo 'active';}?>">
                        <a href="{{url('admin/airlines')}}">
                            <i class="material-icons">airplanemode_active</i>
                            <span>Airlines</span>
                        </a>
                    </li>

                    <li class="<?php if($segment =='flight_class' || $segment =='flight_class/create'){echo 'active';}?>">
                        <a href="{{url('admin/flight_class')}}">
                            <i class="material-icons">airplanemode_active</i>
                            <span>Flight Class</span>
                        </a>
                    </li>
                     <li class="<?php if($segment =='airports'){echo 'active';}?>">
                        <a href="{{url('admin/airports')}}">
                            <i class="material-icons">airplanemode_active</i>
                            <span>Airports</span>
                        </a>
                    </li>

                    <li class="<?php if($segment =='support'){echo 'active';}?>">
                        <a href="{{url('admin/support')}}">
                            <i class="material-icons">widgets</i>
                            <span>Support</span>
                        </a>
                    </li>

                    <li class="<?php if($segment =='footer'){echo 'active';}?>">
                        <a href="{{url('admin/footer')}}">
                            <i class="material-icons">widgets</i>
                            <span>Footer</span>
                        </a>
                    </li>
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 - 2020 <a href="javascript:void(0);">MakeMyTrip</a>.
                </div>
                <div class="version">
                    
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>