<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Travelmazi.in</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('public/web/images/favicon.png')}}">


    <!--- fafa icons--->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <!-- font links -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.3/multiple-select.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.3/multiple-select.js">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{asset('public/web/css/bootstrap.min.css')}} ">
     <link rel="stylesheet" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css"/>
    <link rel="stylesheet" href="{{asset('public/web/css/bootstrap-select.min.css')}} ">
    <link rel="stylesheet" href="{{asset('public/web/css/line-awesome.css')}} ">
    <link rel="stylesheet" href="{{asset('public/web/css/owl.carousel.min.css')}} ">
    <link rel="stylesheet" href="{{asset('public/web/css/owl.theme.default.min.css')}} ">
    <link rel="stylesheet" href="{{asset('public/web/css/jquery.fancybox.min.css')}} ">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('public/web/css/animate.min.css')}} ">
    <link rel="stylesheet" href="{{asset('public/web/css/animated-headline.css')}} ">
  <!--   <link rel="stylesheet" href="{{asset('public/web/css/jquery-ui.css')}} "> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>

     

    <link rel="stylesheet" href="{{asset('public/web/css/jquery.filer.css')}} ">
    <link rel="stylesheet" href="{{asset('public/web/css/flag-icon.min.css')}} ">
    <link rel="stylesheet" href="{{asset('public/web/css/new-style.css')}} ">
    <link rel="stylesheet" href="{{asset('public/web/css/style.css')}} ">
    <link rel="stylesheet" href="{{asset('public/web/css/custom.css')}} ">
    <link rel="stylesheet" href="{{asset('public/web/css/ancillary.css')}} ">

    <link rel="stylesheet" href="{{asset('public/web/css/daterangepicker.css')}}">
</head>
<style type="text/css">
    h4.modal-title {
    margin-left: 165px !important;
}
span.error {
    color: #ff0000 !important;
}
.modal {
    overflow:auto !important;
}
.modal-header.justify-content-center {
    background: #ff9933 !important;
}
img.success_logo {
    margin-left: 180px;
}
p.success_msg {
    margin-top: 20px;
    font-weight: bold;
}
</style>

<body>
<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!-- ================================
            START HEADER AREA
================================= -->
<div class="banner_img">
<header class="header-area">
    @if(Request::path() == '/')
        @if (Request::path() == 'flight_list' || Request::segment(1) == 'seat_map' || Request::path() == 'visa_search' || Request::segment(1) == 'traveller' || Request::path() == 'round_trip' || Request::path() == 'visa_detail' || Request::segment(1) == 'roundflight_book_now' || Request::path() == 'visa_proceed' || Request::path() == 'uploadVisaMain')
            <div class="header-menu-wrapper main-header-box"  style="background-color:#000000 !important;">
        @else
            <div class="header-menu-wrapper main-header-box">
        @endif
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12 header-box">
                    <div class="menu-wrapper menu-box">
                        <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{asset('public/web/img/mazi.png')}} " alt="logo" class="img-fluid"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div><!-- end menu-toggler -->
                        </div><!-- end logo -->
                        <div class="main-menu-content pages_list">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{url('offer')}}">Offer</a>
                                       
                                    </li>
                                    <li>
                                        <a href="{{url('about')}}">About</a>
                                        
                                    </li>
                                    <li>
                                        <a href="{{url('contact')}}">Contact</a>
                                       
                                    </li>
                                    <?php if(Auth::check()) : ?>
                                    <li>
                                        <a href="{{route('bookings')}}">My Bookings</a>
                                    </li>
                                    <?php endif; ?>
									<li class="nav-item support">
										<a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>24x7  Support</a>
									</li>
									<li class="nav-item sign">
									   <!-- <a href="">
                                            <i class="fa fa-user log-hom" aria-hidden="true"></i>Login or Sign Up
                                        </a> -->

                                        @if (Auth::check()) 
                                            <a href="{{ URL::to('logout') }}" class="btn white-bt" ><i class="fa fa-user log-hom" aria-hidden="true"></i>Logout</a>
                                            
                                        @else

                                        <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn white-bt" data-toggle="modal" data-target="#LoginSignUp"><i class="fa fa-user log-hom" aria-hidden="true"></i>Login or Sign Up</button>
                                        @endif

                                        <!-- Trigger the modal with a button -->
                                        
                                    </li>
                                   
                                </ul>
                            </nav>
                        </div><!-- end main-menu-content -->
                        
                        </div><!-- end nav-btn -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    @else
        <div class="section-tab text-center flight_1 home-tab-div visible-title">
            <ul class="nav nav-tabs myTab" id="myTab" role="tablist" style="width: 100% !important;">
                <li class="nav-item mazi-logo inner_header_tabs">
                    <a href="{{ url('/')}}">
                        <img src="{{asset('public/web/img/mazi.png')}}" alt="flight" class="img-fluid">
                    </a>
                </li>
                <li class="nav-item up-items inner_header">
                    <a class="nav-link active" id="flight-tab"  href="{{ url('/')}}"  aria-controls="flight" aria-selected="true">
                        <img src="{{asset('public/web/img/flighta.png')}}" alt="flight" class="img-fluid">
                        <p>Flight</p>
                    </a>
                </li>
                <li class="nav-item up-items inner_header">
                    <a class="nav-link" id="hotel-tab"  href="{{ url('/')}}"  aria-controls="hotel" aria-selected="false">
                        <img src="{{asset('public/web/img/boolhotel.png')}}" alt="flight" class="img-fluid">
                        <p>Hotel</p>
                    </a>
                </li>
               <!--  <li class="nav-item up-items inner_header">
                    <a class="nav-link" id="package-tab" href="{{ url('/')}}"  aria-controls="package" aria-selected="false">
                        <img src="{{asset('public/web/img/holidaya.png')}}" alt="flight" class="img-fluid">
                        <p>Holiday</p>
                    </a>
                </li> -->
                <li class="nav-item up-items inner_header">
                    <a class="nav-link" id="tour-tab"  href="{{ url('/')}}"  aria-controls="tour" aria-selected="false">
                        <img src="{{asset('public/web/img/caba.png')}}" alt="flight" class="img-fluid">
                        <p>Cabs</p>
                    </a>
                </li>
                <!-- <li class="nav-item up-items inner_header">
                    <a class="nav-link" id="car-tab"  href="{{ url('/')}}"  aria-controls="car" aria-selected="true">
                        <img src="{{asset('public/web/img/passporta.png')}}" alt="flight" class="img-fluid">
                        <p>Passport</p>
                    </a>
                </li> -->
                <li class="nav-item up-items inner_header">
                    <a class="nav-link" id="cruise-tab" href="{{ url('/')}}"  aria-controls="cruise" aria-selected="false">
                        <img src="{{asset('public/web/img/visaa.png')}}" alt="flight" class="img-fluid">
                        <p>Visa</p>
                    </a>
                </li>
                <li class="nav-item up-items inner_header">
                    <a class="nav-link more-link" id="tour-tab" href="{{ url('/')}}" aria-controls="tour" aria-selected="false">
                        <img src="{{asset('public/web/img/more-imga.png')}}" alt="flight" class="img-fluid">
                    </a>
                    <ul class="dropdown drop-more">
                        <a class="btn  dropdown-toggle drop-button more_tab_btn" data-toggle="dropdown">
                            More
                        </a>
                        <div class="dropdown-menu drop-more-menu visible-title">
                            <a class="dropdown-item" href="{{route('bookings')}}">My Bookings</a>
                            <a class="dropdown-item" href="#">Activitees &amp; Tours</a>
                            <a class="dropdown-item" href="#">Trip Ideas...</a>
                            <a class="dropdown-item" href="#">Giftcards</a>
                            <a class="dropdown-item" href="#">My Biz</a>
                            <a class="dropdown-item" href="#">International Flights</a>
                            <a class="dropdown-item" href="#">International hotels</a>
                            <a class="dropdown-item" href="#">Deals</a>
                            <!-- <a class="dropdown-item" href="#">Blog</a> -->
                        </div>
                    </ul>
                </li>
                <li class="nav-item support-new inner_header_tabs">
                    <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>24x7  Support</a>
                </li>
                <li class="nav-item sign-new inner_header_tabs">
                    <!-- Trigger the modal with a button -->
                    @if (Auth::check()) 
                                            <a href="{{ URL::to('logout') }}" class="btn white-bt" ><i class="fa fa-user log-hom" aria-hidden="true"></i>Logout</a>
                    <!-- <a href="" data-toggle="modal" data-target="#LoginSignUp"><i class="fa fa-user log-hom" aria-hidden="true"></i>Login or Sign Up</a> -->
                                            
                                        @else

                                        <!-- Trigger the modal with a button -->
                    <a href="" data-toggle="modal" data-target="#LoginSignUp"><i class="fa fa-user log-hom" aria-hidden="true"></i>Login or Sign Up</a>
                                        <!-- <button type="button" class="btn white-bt" data-toggle="modal" data-target="#LoginSignUp"><i class="fa fa-user log-hom" aria-hidden="true"></i>Login or Sign Up</button> -->
                                        @endif
                </li> 
            </ul>
        </div>
    @endif
</header>

<div class="modal fade" id="LoginSignUp" role="dialog" aria-modal="true" style="padding-right: 17px;">
    <div class="modal-dialog modal-md mod-area-box">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login/Signup</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <span class="error error_msg"></span>

            <div class="modal-body">
                <form method="post" action="#" autocomplete="off">
                    <div class="pop_log">
                        <img src="{{asset('public/web/img/mazi.png')}}" alt="logo" class="img-fluid">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Email</label> 
                                <input type="text" class="form-control loginemail" id="formGroupExampleInput" placeholder="Enter Email" required="" autocomplete="off">
                                <span class="error loginemail_error"></span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Password</label>
                                <input type="password" class="form-control loginpassword" id="password-field" placeholder="********" required="" autocomplete="off">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <span class="error loginpassword_error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn com-payment-box travelLogin">Login</button>
                        <p>Not a member <a href="#" class="signupModel">signup now</a></p>
                        <a href="{{url('login/google')}}" class="btn com-payment-box googleLogin">Login With Google</a>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>


<div class="modal fade" id="SignUp" role="dialog" aria-modal="true" style="padding-right: 17px;">
    <div class="modal-dialog modal-md mod-area-box">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login/Signup</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <form method="post" action="#" autocomplete="off">
                    <div class="pop_log">
                        <img src="{{asset('public/web/img/mazi.png')}}" alt="logo" class="img-fluid">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Username</label> 
                                <input type="text" name="username" class="form-control username" id="formGroupExampleInput" placeholder="Enter Username" required="" autocomplete="off">
                                <span class="error username_error"></span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="formGroupExampleInput">First Name</label>
                                <input type="text" name="first_name" class="form-control first_name" id="formGroupExampleInput" placeholder="Enter First Name" required="" autocomplete="off">
                                <span class="error first_name_error"></span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Last Number</label>
                                <input type="text" name="last_name" class="form-control last_name" id="formGroupExampleInput" placeholder="Enter Last Name" required="" autocomplete="off">
                                <span class="error last_name_error"></span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Email</label>
                                <input type="text" name="email" class="form-control email" id="formGroupExampleInput" placeholder="Enter Email address" required="" autocomplete="off">
                                <span class="error email_error"></span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Password</label>
                                <input type="password" name="password" class="form-control password" id="password-field" placeholder="********" required="" autocomplete="off">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <span class="error pswd_error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn com-payment-box signup_btn">SignUp</button>
                        <!-- <p>Not a member <a href="#">signup now</a></p> -->
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<div id="successModel" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="icon-box">
                    <img src="{{asset('public/web/images/right.png')}}" class="success_logo" width="100" height="100">
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4>Great!</h4> 
                <p class="success_msg">Your account has been created successfully.</p>
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="email_verification" role="dialog" aria-modal="true" style="padding-right: 17px;">
    <div class="modal-dialog modal-md mod-area-box">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Verification</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <span class="error error_msg"></span>

            <div class="modal-body">
                <form method="post" action="#" autocomplete="off">
                    <div class="pop_log">
                        <img src="{{asset('public/web/img/mazi.png')}}" alt="logo" class="img-fluid">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="formGroupExampleInput">OTP</label> 
                                <input type="text" class="form-control email_otp" id="formGroupExampleInput" placeholder="Enter OTP" required="" autocomplete="off">
                                <span class="error otpemail_error"></span>
                            </div>
                        </div>

                        <input type="hidden" name="" class="hidden_email">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn com-payment-box email_verification_otp">Verify</button>
                        
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div> 