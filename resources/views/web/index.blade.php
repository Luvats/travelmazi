@extends('layouts.web')
@section('content')
<!-----scroll bar---->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* width */
::-webkit-scrollbar {
  width: 6px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background:#e6f4ff; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background:orange; 
}
<!---banner start---->
</style>
<marquee style="background-color:#86ccff;">
    <h6 style="color:#f93; font-weight: 900;">Welcome To TRAVEL MAZI</h6>
</marquee>
<div class="banner ">

    <!--  <video autoplay muted loop id="myVideo" >
  <source src="{{asset('public/web/img/ships.mp4')}}" type="video/mp4"> -->
    </video>
    <section class="hero-wrapper table-box">
        <div class="hero-box hero-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto responsive--column-l" id="section-5">
                        <div class='fix_headre'>
                            <div class="section-tab text-center flight_1 home-tab-div">
                                <ul class="nav nav-tabs myTab" id="myTab" role="tablist">
                                    <li class="nav-item mazi-logo">
                                        <img src="{{asset('public/web/img/mazi.png')}} " alt="flight" class="img-fluid">
                                    </li>
                                    <li class="nav-item up-items">
                                        <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">
                                            <img src="{{asset('public/web/img/flighta.png')}} " alt="flight" class="img-fluid">
                                            <p> Flight</p>
                                        </a>
                                    </li>
                                    <li class="nav-item up-items">
                                        <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">
                                            <img src="{{asset('public/web/img/boolhotel.png')}} " alt="flight" class="img-fluid">
                                            <p>Hotel</p>
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item up-items">
                                        <a class="nav-link" id="package-tab" data-toggle="tab" href="#package" role="tab" aria-controls="package" aria-selected="false">
                                        <img src="{{asset('public/web/img/holidaya.png')}} " alt="flight" class="img-fluid">
                                        <p>Holiday</p>
                                        </a>
                                    </li> -->
                                    <li class="nav-item up-items">
                                        <a class="nav-link" id="tour-tab" data-toggle="tab" href="#cab" role="tab" aria-controls="tour" aria-selected="false">
                                            <img src="{{asset('public/web/img/caba.png')}} " alt="flight" class="img-fluid">
                                            <p>Cabs</p>
                                        </a>
                                    </li>
                                    <!--  <li class="nav-item up-items">
                                        <a class="nav-link" id="car-tab" data-toggle="tab" href="#car" role="tab" aria-controls="car" aria-selected="true">
                                         <img src="{{asset('public/web/img/passport.png')}} " alt="flight" class="img-fluid">
                                         <p>Passport</p>
                                        </a>
                                    </li> -->
                                    <li class="nav-item up-items">
                                        <a class="nav-link" id="cruise-tab" data-toggle="tab" href="#cruise" role="tab" aria-controls="cruise" aria-selected="false">
                                            <img src="{{asset('public/web/img/visaa.png')}} " alt="flight" class="img-fluid">
                                            <p>Visa</p>
                                        </a>
                                    </li>

                                    <li class="nav-item up-items">
                                        <a class="nav-link more-link" id="tour-tab" data-toggle="tab" href="#tour" role="tab" aria-controls="tour" aria-selected="false">
                                            <img src="{{asset('public/web/img/more-imga.png')}}" alt="flight" class="img-fluid">
                                        </a>
                                        <ul class="dropdown drop-more">
                                            <a class="btn  dropdown-toggle drop-button more_tab_btn" data-toggle="dropdown">
                                                More
                                            </a>
                                            <div class="dropdown-menu drop-more-menu">
                                                <a class="dropdown-item" href="{{route('bookings')}}">My Bookings</a>
                                                <a class="dropdown-item" href="#">Activitees &amp; Tours</a>
                                                <a class="dropdown-item" href="#">Trip Ideas</a>
                                                <a class="dropdown-item" href="#">Giftcards</a>
                                                <a class="dropdown-item" href="#">My Biz</a>
                                                <a class="dropdown-item" href="#">International Flights</a>
                                                <a class="dropdown-item" href="#">International hotels</a>
                                                <a class="dropdown-item" href="#">Deals</a>
                                                <!-- <a class="dropdown-item" href="#">Blog</a> -->
                                            </div>
                                        </ul>


                                    </li>
                                    <li class="nav-item support-new">
                                        <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>24x7 Support</a>
                                    </li>

                                    <li class="nav-item sign-new">
                                        @if (Auth::check())
                                        <a href="{{ URL::to('logout') }}" class="btn white-bt"><i class="fa fa-user log-hom" aria-hidden="true"></i>Logout</a>

                                        @else

                                        <!-- Trigger the modal with a button -->
                                        <a href="" data-toggle="modal" data-target="#LoginSignUp"><i class="fa fa-user log-hom" aria-hidden="true"></i>Login or Sign Up</a>
                                        @endif


                                    </li>
                                </ul>
                            </div><!-- end section-tab -->

                        </div>
                        <div class="tab-content search-fields-container" id="myTabContent">
                            <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                                <div class="section-tab section-tab-2 pb-3 trip">
                                    <ul class="nav nav-tabs " id="myTab3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="one-way-tab" data-toggle="tab" href="#one-way" role="tab" aria-controls="one-way" aria-selected="true">
                                                ONEWAY
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="round-trip-tab" data-toggle="tab" href="#round-trip" role="tab" aria-controls="round-trip" aria-selected="false">
                                                ROUND TRIP
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="multi-city-tab" data-toggle="tab" href="#multi-city" role="tab" aria-controls="multi-city" aria-selected="false">
                                                MULTI CITY
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- end section-tab -->




                                <!-- One way start-->
                                <div class="tab-content" id="myTabContent3">
                                    <div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
                                        <div class="contact-form-action flight_from  mum-flight-area">

                                            <form method="get" action="{{url('/flight_list')}}" class="row align-items-center" id="one-way-form">

                                                <input type="hidden" name="one_way" value="one_way">
                                                <div class="box-bod-area row align-items-center">
                                                    <div class="col-lg-3 pr-0 from">
                                                        <div class="input-box">
                                                            <label class="label-text">FROM</label>
                                                            <div class="form-group">
                                                                <select class="selectpicker" name="from_city" data-show-subtext="true" data-live-search="true">
                                                                    @if(isset($from_cities))
                                                                    @foreach($from_cities as $city)
                                                                    <option data-subtext="{{ $city->airport}}" value="{{$city->airport_code}}" @if($city->airport_code=="DEL") selected @endif >{{$city->city_name}}({{$city->airport_code}})</option>
                                                                    @endforeach
                                                                    @endif

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-lg-3">
                                                        <div class="input-box">
                                                            <label class="label-text">TO</label>
                                                            <div class="form-group">
                                                                <select class="selectpicker" name="to_city" data-show-subtext="true" data-live-search="true">
                                                                    @if(isset($to_cities))
                                                                    @foreach($to_cities as $city)
                                                                    <option data-subtext="{{ $city->airport}}" value="{{$city->airport_code}}" @if($city->airport_code=="BOM") selected @endif>{{$city->city_name}}({{$city->airport_code}})</option>
                                                                    @endforeach
                                                                    @endif

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-lg-3 pr-0">
                                                        <div class="input-box">
                                                            <label class="label-text">DEPARTURE</label>
                                                            <div class="form-group flight_deptre">
                                                                <input class="form-control customDatePicker" type="text" name="travelDate" value="<?php echo date('d M Y'); ?>" required="">
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-lg-3 pr-0 travel">
                                                        <div class="input-box">
                                                            <label class="label-text">TRAVELLERS</label>
                                                            <div class="form-group flight_deptre">
                                                                <div class="dropdown dropdown-contain">
                                                                    <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                        <span> <label class="flight-label">Passenger</label> <span class="qtyTotal guestTotal_2">1</span></span>
                                                                        <input type="hidden" name="hidden_one_way_total" class="hidden_one_way_total">
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-wrap eco-area one-way-div">
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label>Adults (12y +)</label>
                                                                                <div class="oneWayQtyBtn d-flex align-items-center">
                                                                                    <input type="text" name="adults" 
                                                                                    value="0" vbtn btn-block bg-orange waves-effect class="adults" data-parent-class="one-way-div">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label>Children (2y - 12y)</label>
                                                                                <div class="oneWayQtyBtn d-flex align-items-center">
                                                                                    <input type="text" name="children" value="0" class="childrens" data-parent-class="one-way-div">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label>Infants (below 2y)</label>
                                                                                <div class="oneWayQtyBtn d-flex align-items-center">
                                                                                    <input type="text" name="infants" value="0" class="Infants" data-parent-class="one-way-div">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between ">
                                                                                <label>Economy</label>
                                                                                <select class="select-contain-select font-size-12px business_details-area" name="cabinClass">
                                                                                    @if(isset($Flightclass))
                                                                                    @foreach($Flightclass as $fc)
                                                                                    <option value="{{ $fc->flight_clss_value}}">{{ ucfirst($fc->flight_clss)}}</option>
                                                                                    @endforeach
                                                                                    @endif
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                    </div><!-- end dropdown -->
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-3 -->
                                                    </div><!-- end col-lg-3 -->
                                                </div>
                                                <div class="col-lg-12 pr-0 search">
                                                    <!-- <a href="{{url('/flight_list')}}" class="theme-btn ">SEARCH</a> -->
                                                    <button type="submit" class="theme-btn">SEARCH</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div><!-- One way end -->



                                    <!-- return start-->
                                    <div class="tab-pane fade" id="round-trip" role="tabpanel" aria-labelledby="round-trip-tab">
                                        <div class="contact-form-action flight_from mum-flight-area">

                                            <form method="get" action="{{url('/round_trip')}}" class="row align-items-center">

                                                <div class="box-bod-area row align-items-center from_cities">
                                                    <input type="hidden" name="round_trip" value="round_trip">
                                                    <div class="col-lg-3 pr-0 from no-gutters">
                                                        <div class="input-box">
                                                            <label class="label-text">FROM</label>
                                                            <div class="form-group from_city">
                                                                <select class="selectpicker " name="from_city" data-show-subtext="true" data-live-search="true">
                                                                    @if(isset($from_cities))
                                                                    @foreach($from_cities as $city)
                                                                    <option data-subtext="{{ $city->airport}}" value="{{$city->city_short_name}}" @if($city->airport_code=="DEL") selected @endif>{{$city->city_name}}({{$city->city_short_name}})</option>
                                                                    @endforeach
                                                                    @endif

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-lg-3">
                                                        <div class="input-box">
                                                            <label class="label-text">TO</label>
                                                            <div class="form-group to_city parent">
                                                                <select class="selectpicker" name="to_city" data-show-subtext="true" data-live-search="true">
                                                                    @if(isset($to_cities))
                                                                    @foreach($to_cities as $city)
                                                                    <option data-subtext="{{ $city->airport}}" value="{{$city->city_short_name}}" @if($city->airport_code=="BOM") selected @endif>{{$city->city_name}}({{$city->city_short_name}})</option>
                                                                    @endforeach
                                                                    @endif

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-lg-2 pr-0">
                                                        <div class="input-box">
                                                            <label class="label-text">DEPARTURE</label>
                                                            <div class="form-group flight_deptre">
                                                                <input class="form-control" type="text" name="startRoundTravelDate" id="startRoundTravelDate" value="<?php echo date('d M Y'); ?>" required="">
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-lg-2 pr-0">
                                                        <div class="input-box">
                                                            <label class="label-text">RETURN</label>
                                                            <div class="form-group flight_deptre">
                                                                <input class="form-control" type="text" name="endRoundTravelDate" id="endRoundTravelDate" value="<?php echo date('d M Y'); ?>" required="">
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-lg-2 pr-0 travel">
                                                        <div class="input-box">
                                                            <label class="label-text">TRAVELLERS</label>
                                                            <div class="form-group flight_deptre">
                                                                <div class="dropdown dropdown-contain">
                                                                    <a class="dropdown-toggle dropdown-btn font-size-22" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                        <span> <label class="flight-label">Passenger</label> <span class="qtyTotal guestTotal_round">1</span></span>
                                                                        <input type="hidden" name="" value="1" class="hidden_round_total">
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-wrap eco-area round-trip-div">
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label>Adults (12y +)</label>
                                                                                <div class="ReturnWay QtyBtn d-flex align-items-center">
                                                                                    <input type="text" name="adults" value="1" class="adults" data-parent-class="round-trip-div">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label>Children (2y - 12y)</label>
                                                                                <div class="ReturnWay QtyBtn d-flex align-items-center">
                                                                                    <input type="text" name="children" value="0" class="childrens" data-parent-class="round-trip-div">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label>Infants (below 2y)</label>
                                                                                <div class="ReturnWay QtyBtn d-flex align-items-center">
                                                                                    <input type="text" name="infants" value="0" class="Infants" data-parent-class="round-trip-div">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label>Economy</label>
                                                                                <select class="select-contain-select business_details-area" name="class">

                                                                                    @if(isset($Flightclass))
                                                                                    @foreach($Flightclass as $fc)
                                                                                    <option value="{{ $fc->flight_clss_value}}">{{ ucfirst($fc->flight_clss)}}</option>
                                                                                    @endforeach
                                                                                    @endif
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                    </div><!-- end dropdown -->
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-3 -->
                                                    </div><!-- end col-lg-3 -->
                                                </div>
                                                <div class="col-lg-12 search">

                                                    <button type="submit" class="theme-btn text-center">SEARCH</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- return end -->



                                    <!-- multi city start-->
                                    <div class="tab-pane fade multi-flight-wrap" id="multi-city" role="tabpanel" aria-labelledby="multi-city-tab">

                                        <form method="get" action="{{url('mulitcity-flight-list')}}" class="row align-items-center">

                                            @for($i=0;$i<5;$i++) <div class="contact-form-action multi-flight-field d-flex align-items-center flight_from">
                                                <div class="box-bod-area row align-items-center flight-input-{{$i}}">
                                                    <div class="col-lg-3 pr-0 from">
                                                        <div class="input-box">
                                                            <label class="label-text">FROM</label>
                                                            <div class="form-group">
                                                                <select class="selectpicker" name="mulitcityFromCity[]" data-show-subtext="true" data-live-search="true">
                                                                    @if(isset($from_cities))
                                                                    <option value="">Select City</option>
                                                                    @foreach($from_cities as $city)
                                                                    <option data-subtext="{{ $city->airport}}" value="{{$city->city_short_name}}" @if($city->airport_code=="DEL" && $i==0) selected @endif @if($city->airport_code=="BOM" && $i==1) selected @endif>{{$city->city_name}}({{$city->city_short_name}})</option>
                                                                    @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col-lg-3 -->
                                                    <div class="col-lg-3">
                                                        <div class="input-box">
                                                            <label class="label-text">TO</label>
                                                            <div class="form-group">
                                                                <select class="selectpicker" name="mulitcityToCity[]" data-show-subtext="true" data-live-search="true" @if($i==1) required @endif>
                                                                    @if(isset($to_cities))
                                                                    <option value="">Select City</option>
                                                                    @foreach($to_cities as $city)
                                                                    <option data-subtext="{{ $city->airport}}" value="{{$city->city_short_name}}" @if($city->airport_code=="BOM" && $i==0) selected @endif>{{$city->city_name}}({{$city->city_short_name}})</option>
                                                                    @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col-lg-3 -->
                                                    <div class="col-lg-2 pr-0">
                                                        <div class="input-box">
                                                            <label class="label-text">DEPARTURE</label>
                                                            <div class="form-group flight_deptre">
                                                                <input class="form-control customDatePicker" type="text" name="multicityTravelDate[]" value="<?php echo date('d M Y', strtotime(date("d M Y") . ' +' . ($i + 1) . ' day')); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col-lg-3 -->

                                                    <div class="col-lg-4 pr-0 travel">
                                                        @if($i==0)
                                                        <div class="input-box">
                                                            <label class="label-text">TRAVELLERS</label>
                                                            <div class="form-group flight_deptre">
                                                                <div class="dropdown dropdown-contain">
                                                                    <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                        <span>Passengers <span class="qtyTotal guestTotal_multicity">1</span></span>
                                                                        <input type="hidden" name="" class="hidden_multicity_total">
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-wrap eco-area multicity-trip-div">
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label>Adults</label>
                                                                                <div class="qtyBtn d-flex align-items-center">
                                                                                    <input type="text" name="adults[]" value="1" class="adults" data-parent-class="multicity-trip-div">
                                                                                    <!--  <button id="minus">−</button>
                                                                       <input type="number" value="0" id="input"/>
                                                                       <button id="plus">+</button> -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label>Children</label>
                                                                                <div class="qtyBtn d-flex align-items-center">
                                                                                    <input type="text" name="children[]" value="0" class="childrens" data-parent-class="multicity-trip-div">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label>Infants</label>
                                                                                <div class="qtyBtn d-flex align-items-center">
                                                                                    <input type="text" name="infants[]" value="0" class="Infants" data-parent-class="multicity-trip-div">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between ">
                                                                                <label>Economy</label>
                                                                                <select class="select-contain-select font-size-12px business_details-area" name="cabinClass" data-parent-class="multicity-trip-div">
                                                                                    @if(isset($Flightclass))
                                                                                    @foreach($Flightclass as $fc)
                                                                                    <option value="{{ $fc->flight_clss_value}}">{{ ucfirst($fc->flight_clss)}}</option>
                                                                                    @endforeach
                                                                                    @endif
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end dropdown -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col-lg-3 -->
                                                        @elseif($i==1)
                                                        <div class="row">
                                                                <div class="col-lg-9 another-city">
                                                                    <a href="#" class="clone add-city{{$i}}">+ ADD ANOTHER CITY</a>

                                                                </div>
                                                                
                                                            </div>
                                                        
                                                        @else
                                                        <div class="row">
                                                                <div class="col-lg-9 another-city">
                                                                    <a href="#" class="clone add-city{{$i}}">+ ADD ANOTHER CITY</a>

                                                                </div>
                                                                <div class="col-lg-3  another-city text-right">
                                                                    <a href="#" class="remove remove-city{{$i}}"><i class="fa fa-times icon-2x" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div><!-- end col-lg-3 -->
                                                </div>
                                    </div>
                                    @endfor

                                    <div class="col-lg-12 pr-0 search">
                                        <button class="theme-btn" type="submit">SEARCH</button>
                                        <!-- <a href="#" class="theme-btn ">SEARCH</a> -->
                                    </div>
                                    </form>



                                </div><!-- multi city end  -->


                            </div>
                        </div><!-- end tab-pane -->




                        <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                            <div class="contact-form-action hotel_box">
                                <form action="#" class="row align-items-center destination">
                                    <div class="row align-items-center box-bod-area">
                                        <div class="col-lg-3 pr-0 desti">
                                            <div class="input-box">
                                                <label class="label-text">DESTINATION / HOTEL</label>
                                                <div class="form-group">
                                                    <!-- <span class="la la-map-marker form-icon"></span> -->
                                                    <input class="form-control" type="text" placeholder="Goa">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">CHECK IN</label>
                                                <div class="form-group">
                                                    <!-- <span class="la la-calendar form-icon"></span> -->
                                                    <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">CHECK OUT</label>
                                                <div class="form-group">
                                                    <!-- <span class="la la-calendar form-icon"></span> -->
                                                    <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3">
                                            <div class="input-box">
                                                <label class="label-text">GUEST</label>
                                                <div class="form-group">
                                                    <div class="dropdown dropdown-contain">
                                                        <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <span>Guests <span class="qtyTotal guestTotal">0</span></span>
                                                            <!-- <span class="hiphens font-size-20 mx-1">-</span>
                                                        <span>Rooms <span class="roomTotal">0</span></span> -->
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap eco-area">
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Rooms</label>
                                                                    <div class="roomBtn d-flex align-items-center">
                                                                        <input type="text" name="roomInput" value="0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Adults</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <input type="text" name="qtyInput" value="0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Children</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <input type="text" name="qtyInput" value="0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end dropdown -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-12 search">
                                        <a href="{{url('/hotels')}}" class="theme-btn text-center">SEARCH</a>
                                    </div>
                                </form>
                            </div>

                        </div><!-- end tab-pane -->




                        <div class="tab-pane fade" id="package" role="tabpanel" aria-labelledby="package-tab">
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="flight-hotel" role="tabpanel" aria-labelledby="flight-hotel-tab">
                                    <div class="contact-form-action holiday_box">
                                        <form action="#" class="row align-items-center holiday">
                                            <div class="row align-items-center box-bod-area w-100 ">
                                                <div class="col-lg-6 pr-0 desti">
                                                    <div class="input-box">
                                                        <label class="label-text">FROM CITY</label>
                                                        <div class="form-group">
                                                            <!-- <span class="la la-map-marker form-icon"></span> -->
                                                            <input class="form-control" type="text" placeholder="Mumbai">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-6 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">TO CITY/COUNTRY</label>
                                                        <div class="form-group">
                                                            <!-- <span class="la la-map-marker form-icon"></span> -->
                                                            <input class="form-control" type="text" placeholder="Goa">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                            </div>
                                            <div class="col-lg-12 search">
                                                <a href="{{url('/holiday')}}" class="theme-btn text-center">SEARCH</a>
                                            </div>
                                        </form>
                                    </div>

                                </div><!-- end tab-pane -->
                            </div><!-- end tab-pane -->
                        </div>




                        <!-- passport area -->
                        <div class="tab-pane fade" id="car" role="tabpanel" aria-labelledby="car-tab">
                            <div class="contact-form-action hotel_box">
                                <form action="#" class="row align-items-center destination">
                                    <div class="row align-items-center w-100  box-bod-area">
                                        <div class="col-lg-6 pr-0  desti">
                                            <div class="input-box">
                                                <label class="label-text">APPLYING FOR</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto fresh">
                                                        <select class="select-contain-select pass">
                                                            <option value="caribbean">Fresh Passport</option>
                                                            <option value="bahamas">Re-issue of Passport</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 pr-0">
                                            <div class="input-box fresh">
                                                <label class="label-text">GENDER</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select pass">
                                                            <option value="caribbean">Male</option>
                                                            <option value="bahamas">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-12 search">
                                        <a href="{{url('/passport')}}" class="theme-btn text-center">SEARCH</a>
                                    </div>
                            </div><!-- end tab-pane -->

                            </form>
                        </div>


                        <div class="tab-pane fade" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
                            <div class="contact-form-action hotel_box">
                                <form method="post" action="{{url('/visa_search')}}" class="row align-items-center visa">
                                    @csrf
                                    <div class="row align-items-center box-bod-area ">
                                        <div class="col-lg-3 pr-0  desti">
                                            <div class="input-box">
                                                <label class="label-text">GOING TO</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto italy_area">


                                                        <select class="selectpicker" name="destination" data-show-subtext="true" data-live-search="true">
                                                            @if(isset($visa))
                                                            @foreach($visa as $visas)
                                                            <option data-subtext="" value="{{ $visas->destination}}">{{ $visas->destination}}</option>
                                                            @endforeach
                                                            @endif

                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">DEPARTURE</label>
                                                <div class="form-group">
                                                    <!-- <span class="la la-calendar form-icon"></span> -->

                                                    <input class="date-range form-control" type="text" name="value_from_start_visadate" id="visa_destinationdate" data-datepicker="separateRangeVisa" value="<?php echo date('d M Y'); ?>">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">RETURN</label>
                                                <div class="form-group">
                                                    <!-- <span class="la la-calendar form-icon"></span> -->
                                                    <input class="date-range form-control" type="text" name="value_from_end_visadate" id="visa_returndate" data-datepicker="separateRangeVisa" value="<?php echo date('d M Y'); ?>">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3">
                                            <div class="input-box">
                                                <label class="label-text">TRAVELLERS</label>
                                                <div class="form-group">
                                                    <div class="dropdown dropdown-contain">
                                                        <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <span>Travellers <span class="qtyTotal guestTotal_9">0</span></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap eco-area">
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Travellers</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <input type="text" class="visa_traveller" name="visa_traveller" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div><!-- end dropdown -->
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                    </div>
                                    <div class="col-lg-12 search">
                                        <!-- <a href="{{url('/visa')}}" class="theme-btn text-center">SEARCH</a> -->
                                        <button type="submit" class="theme-btn text-center">SEARCH</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- end tab-pane -->

                        <!-- cab area start -->

                        <div class="tab-pane fade show" id="cab" role="tabpanel" aria-labelledby="flight-tab">
                            <div class="section-tab section-tab-2 pb-3 trip Outstation">
                                <ul class="nav nav-tabs " id="myTab3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="one-way-tab" data-toggle="tab" href="#outstation-one-way" role="tab" aria-controls="one-way" aria-selected="true">
                                            OUTSTATION ONE-WAY
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="round-trip-tab" data-toggle="tab" href="#outstation-round-trip" role="tab" aria-controls="round-trip" aria-selected="false">
                                            OUTSTATION ROUND TRIP
                                        </a>
                                    </li>
                                    <!--  <li class="nav-item">
                                        <a class="nav-link" id="multi-city-tab" data-toggle="tab" href="#airport" role="tab" aria-controls="multi-city" aria-selected="false">
                                            AIRPORT TRANSFERS
                                        </a>
                                    </li> -->
                                </ul>
                            </div><!-- end section-tab -->
                            <div class="tab-content" id="myTabContent3">
                                <div class="tab-pane fade show active" id="outstation-one-way" role="tabpanel" aria-labelledby="one-way-tab">
                                    <div class="contact-form-action flight_from">

                                        <form action="{{ url('/CabSearch')}}" class="row align-items-center">
                                            @csrf
                                            <div class="row align-items-center box-bod-area">
                                                <div class="col-lg-3 pr-0 from">
                                                    <div class="input-box">
                                                        <label class="label-text">FROM</label>
                                                        <div class="form-group">

                                                            <input id="searchMapInputPickup" class="form-control" type="text" placeholder="Bangalore" required="">
                                                            <input type="hidden" name="source" id="searchMapInputPickup1">
                                                            <input type="hidden" name="source_lat" id="lat">
                                                            <input type="hidden" name="source_lng" id="lng">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3">
                                                    <div class="input-box">
                                                        <label class="label-text">TO</label>
                                                        <div class="form-group">

                                                            <input class="form-control" type="text" placeholder="Mumbai" id="searchMapInputDrop" required="">

                                                            <input type="hidden" name="destination" id="searchMapInputDrop1">
                                                            <input type="hidden" name="dest_lat" id="dest_lat">
                                                            <input type="hidden" name="dest_lng" id="dest_lng">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3  font-size input-box ">
                                                    <!-- <div class="row no-gutters"> -->
                                                    <!-- <div class="input-box  col-lg-6 px-0"> -->
                                                    <label class="label-text">DEPARTURE</label>
                                                    <div class="form-group">
                                                        <!-- <input type="text" class="form-control" value="{{ $final_date }}" name="value_from_start_date" data-datepicker="separateRange"/> -->
                                                        <input class="form-control" id="cabDeparture" type="text" name="cabDeparture" value="<?php echo date('d M Y'); ?>" required="">

                                                    </div>
                                                    <!--  </div> -->

                                                    <!-- </div> -->
                                                </div>

                                                <div class="col-lg-3  travel input-box ">
                                                    <!-- <div class="row no-gutters drop-pick-text"> -->
                                                    <!-- <div class="input-box col-lg-6"> -->
                                                    <label class="label-text">PICKUP-TIME</label>
                                                    <div class="form-group">
                                                        <input id="cab_pickup_time" type="text" class="form-control mb-2 mr-sm-2 timepicker_cab mx-auto" required="">

                                                        <input type="hidden" class="cab_pickup_time" name="cab_pickup_time" value="">

                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- end col-lg-3 -->


                                                    <!--  </div> -->


                                                </div>


                                            </div>

                                            <div class="col-lg-12 pr-0 search">
                                                <button type="submit" class="theme-btn">SEARCH</button>

                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="outstation-round-trip" role="tabpanel" aria-labelledby="round-trip-tab">
                                    <div class="contact-form-action flight_from">
                                        <form action="{{ url('/CabSearchRound')}}" class="row align-items-center">
                                            @csrf
                                            <div class=" row align-items-center box-bod-area">
                                                <div class="col-lg-5 pr-0  no-gutters cab-location-div">
                                                    <div class="row no-gutters ">
                                                        <div class=" input-box col-lg-6">
                                                            <div class="">
                                                                <label class="label-text">FROM</label>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control mb-2 mr-sm-2" id="source" placeholder="Bangalore" required="">
                                                                    <!--   <input type="text" class="form-control mb-2 mr-sm-2 pac-target-input" id="source" placeholder="Bangalore" required="" autocomplete="off"> -->

                                                                    <input type="hidden" name="source" id="source_pickup">
                                                                    <input type="hidden" name="lat_pickup" id="lat_pickup">
                                                                    <input type="hidden" name="lng_pickup" id="lng_pickup">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-box col-lg-6">
                                                            <div class="">
                                                                <label class="label-text">TO</label>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control mb-2 mr-sm-2" id="destination" placeholder="Mumbai" required="">
                                                                    <!-- <input type="text" class="form-control mb-2 mr-sm-2 pac-target-input" id="destination" placeholder="Mumbai" required="" autocomplete="off"> -->

                                                                    <input type="hidden" name="destination" id="destination_drop">
                                                                    <input type="hidden" name="dest_lat_drop" id="dest_lat_drop">
                                                                    <input type="hidden" name="dest_lng_drop" id="dest_lng_drop">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-2 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">DEPARTURE</label>
                                                        <div class="form-group">

                                                            <input type="text" class="form-control" value="<?php echo date('d M Y'); ?>" name="value_from_start_date" data-datepicker="separateRange" />
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-2 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">RETURN</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" value="<?php echo date('d M Y'); ?>" name="value_from_end_date" data-datepicker="separateRange" />
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->

                                                <div class="col-lg-3 pr-0 travel">
                                                    <div class="row no-gutters drop-pick-text">
                                                        <div class="input-box col-lg-6">
                                                            <label class="label-text">PICKUP-TIME</label>
                                                            <div class="form-group">
                                                                <input id="Rental_timepicker1" type="text" class="form-control mb-2 mr-sm-2 timepicker_cab" name="cab_pickup_time">
                                                            </div>
                                                        </div>
                                                        <div class="input-box col-lg-6">
                                                            <label class="label-text">DROP-TIME</label>
                                                            <div class="form-group">
                                                                <input id="Rental_dropup_time" type="text" class="form-control mb-2 mr-sm-2 timepicker_cab" name="cab_dropup_time">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                            </div>
                                            <div class="col-lg-12 search">

                                                <button type="submit" class="theme-btn">SEARCH</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="airport" role="tabpanel" aria-labelledby="airport-tab">
                                    <div class="contact-form-action flight_from">
                                        <form action="http://arthtechsolutions.com/mazicab/" class="row align-items-center">
                                            <div class="col-lg-3 pr-0 from no-gutters">
                                                <div class="input-box">
                                                    <label class="label-text">FROM</label>
                                                    <div class="form-group">
                                                        <!-- <span class="la la-map-marker form-icon"></span> -->
                                                        <input class="form-control" type="text" placeholder="Bangalore">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <div class="input-box">
                                                    <label class="label-text">TO</label>
                                                    <div class="form-group">
                                                        <!-- <span class="la la-map-marker form-icon"></span> -->
                                                        <input class="form-control" type="text" placeholder="Mumbai">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">DEPARTURE</label>
                                                    <div class="form-group">
                                                        <!-- <span class="la la-calendar form-icon"></span> -->
                                                        <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20" data-datepicker="separateRange">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0 travel">
                                                <div class="input-box">
                                                    <label class="label-text">PICKUP-TIME</label>
                                                    <div class="form-group">
                                                        <!-- <span class="la la-map-marker form-icon"></span> -->
                                                        <!--  <input class="form-control" type="time" placeholder="09:50AM"> -->
                                                        <select class="form-control timer" name="time">
                                                            <option value="12:00 AM">12:00 AM</option>
                                                            <option value="12:30 AM">12:30 AM</option>
                                                            <option value="01:00 AM">01:00 AM</option>
                                                            <option value="01:30 AM">01:30 AM</option>
                                                            <option value="02:00 AM">02:00 AM</option>
                                                            <option value="02:30 AM">02:30 AM</option>
                                                            <option value="03:00 AM">03:00 AM</option>
                                                            <option value="03:30 AM">03:30 AM</option>
                                                            <option value="04:00 AM">04:00 AM</option>
                                                            <option value="04:30 AM">04:30 AM</option>
                                                            <option value="05:00 AM">05:00 AM</option>
                                                            <option value="05:30 AM">05:30 AM</option>
                                                            <option value="06:00 AM">06:00 AM</option>
                                                            <option value="06:30 AM">06:30 AM</option>
                                                            <option value="07:00 AM">07:00 AM</option>
                                                            <option value="07:30 AM">07:30 AM</option>
                                                            <option value="08:00 AM">08:00 AM</option>
                                                            <option value="08:30 AM">08:30 AM</option>
                                                            <option value="09:00 AM">09:00 AM</option>
                                                            <option value="09:30 AM">09:30 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="10:30 AM">10:30 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="11:30 AM">11:30 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="12:30 PM">12:30 PM</option>
                                                            <option value="01:00 PM">01:00 PM</option>
                                                            <option value="01:30 PM">01:30 PM</option>
                                                            <option value="02:00 PM">02:00 PM</option>
                                                            <option value="02:30 PM">02:30 PM</option>
                                                            <option value="03:00 PM">03:00 PM</option>
                                                            <option value="03:30 PM">03:30 PM</option>
                                                            <option value="04:00 PM">04:00 PM</option>
                                                            <option value="04:30 PM">04:30 PM</option>
                                                            <option value="05:00 PM">05:00 PM</option>
                                                            <option value="05:30 PM">05:30 PM</option>
                                                            <option value="06:00 PM">06:00 PM</option>
                                                            <option value="06:30 PM">06:30 PM</option>
                                                            <option value="07:00 PM">07:00 PM</option>
                                                            <option value="07:30 PM">07:30 PM</option>
                                                            <option value="08:00 PM">08:00 PM</option>
                                                            <option value="08:30 PM">08:30 PM</option>
                                                            <option value="09:00 PM">09:00 PM</option>
                                                            <option value="09:30 PM">09:30 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="10:30 PM">10:30 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="11:30 PM">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-12 search">
                                                <!-- <a href="{{url('/mazicab')}}" class="theme-btn text-center">SEARCH</a> -->
                                                <button type="submit" class="theme-btn">SEARCH</button>
                                            </div>
                                        </form>
                                    </div>


                                </div><!-- end tab-pane -->
                            </div>
                        </div><!-- end tab-pane -->
                        <!-- cab area end -->

                        <!-- deal area start -->
                        <div class="tab-pane fade" id="tour" role="tabpanel" aria-labelledby="tour-tab">
                            <div class="contact-form-action hotel_box">
                                <form action="#" class="row align-items-center destination">
                                    <div class="col-lg-4 pr-0 desti">
                                        <div class="input-box">
                                            <label class="label-text">WHERE WOULD LIKE TO GO?</label>
                                            <div class="form-group">
                                                <!-- <span class="la la-map-marker form-icon"></span> -->
                                                <input class="form-control" type="text" placeholder="Destination, city, or region">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">FROM</label>
                                            <div class="form-group">
                                                <!-- <span class="la la-calendar form-icon"></span> -->
                                                <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="input-box">
                                            <label class="label-text">TO</label>
                                            <div class="form-group">
                                                <!-- <span class="la la-calendar form-icon"></span> -->
                                                <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                </form>
                            </div>

                            <div class="col-lg-12 search">
                                <a href="{{url('/deals')}}" class="theme-btn text-center">SEARCH</a>
                            </div>
                        </div><!-- end col-lg-12 -->
                    </div>
                </div><!-- row -->
            </div><!-- row-->
        </div>
        <!---container-->
</div>
</section>
</div><!-- hero-box -->
<!-- ================================
    END HERO-WRAPPER AREA
================================= -->
<div class="offer">
    <div class="container">
        <div class="row">
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/badrinath.jpg')}} " alt="Card image cap">
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/kerala.jpg')}} " alt="Card image cap">
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/dubai.jpg')}} " alt="Card image cap">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/andaman.jpg')}}" alt="Card image cap">
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/mauritius.jpg')}} " alt="Card image cap">
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/shimla.jpg')}} " alt="Card image cap">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Second slide-->

                    <!--Third slide-->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/maladives.jpg')}} ">
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/slider 3.jpg')}}" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/slider 6.jpg')}}" alt="Card image cap">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Third slide-->
                </div>
                <!--/.Slides-->
            </div>
        </div>
    </div>
</div>
<!---- start about----------->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-img">
                <img src="{{asset('public/web/img/travel.webp')}} " alt="about" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class=" enjoy">
                    <h6>About Us</h6>
                    <h2>{{$about->title}}</h2>
                    <p><?php echo $about->about; ?></p>
                    <a href="{{url('/about')}}">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!------slider----->
<div class="main-deal-2">
    <div class="deals">
        <div class="container">
            <div class="coupon-deals-div">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Best Deals</h3>
                    </div>
                    <nav class="cab-type-nav col-md-9">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">HOTELS</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">INTERNATIONAL FLIGHTS</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">DOMESTIC FLIGHTS</a>
                            <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">-->
                            <a class="dropdown btn btn dropdown-toggle more_offer" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                MORE
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <a href="{{url('/offer')}}" class="dropdown-item" target="_blank">OFFERS</a>
                                <a href="{{url('/hotels')}}" class="dropdown-item" target="_blank">HOTELS</a>
                            </div>

                    </nav>
                </div>
                <div class="tab-content coupon-slider-div" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="coupon-box">
                                                <div class="media">
                                                    <img class="d-flex mr-3" src="{{asset('public/web/img/coupon-img.png')}} " alt="coupon-image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Up to 1500 Cashback</h5>
                                                        <p>Lorem Ipsum is simply dummy
                                                            text of the printing and typesetting.</p>
                                                        <a href=""><small>T&C's apply</small></a>
                                                    </div>
                                                </div>
                                                <div class="media-footer">
                                                    <div class="table-cell coupon-code">
                                                        <h5 class="">COUPON:FGDHLK</h5>
                                                    </div>
                                                    <div class="table-cell book-btn">
                                                        <h5><a href="{{url('/hotels')}}">Book Now</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="coupon-box">
                                                <div class="media">
                                                    <img class="d-flex mr-3" src="{{asset('public/web/img/coupon-img_1.png')}}  " alt="coupon-image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Up to 1600 Cashback</h5>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        <a href=""><small>T&C's apply</small></a>
                                                    </div>
                                                </div>
                                                <div class="media-footer">
                                                    <div class="table-cell coupon-code">
                                                        <h5 class="">COUPON:FGDHLK</h5>
                                                    </div>
                                                    <div class="table-cell book-btn">
                                                        <h5><a href="{{url('/hotels')}}">Book Now</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---2nd slide-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="coupon-box">
                                                <div class="media">
                                                    <img class="d-flex mr-3" src="{{asset('public/web/img/coupon-img_1.png')}} " alt="coupon-image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Up to 1400 Cashback</h5>
                                                        <p>Lorem Ipsum is simply dummy
                                                            text of the printing and typesetting.</p>
                                                        <a href=""><small>T&C's apply</small></a>
                                                    </div>
                                                </div>
                                                <div class="media-footer">
                                                    <div class="table-cell coupon-code">
                                                        <h5 class="">COUPON:FGDHLK</h5>
                                                    </div>
                                                    <div class="table-cell book-btn">
                                                        <h5><a href="{{url('/hotels')}}">Book Now</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="coupon-box">
                                                <div class="media">
                                                    <img class="d-flex mr-3" src="{{asset('public/web/img/coupon-img.png')}}  " alt="coupon-image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Up to 1200 Cashback</h5>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        <a href=""><small>T&C's apply</small></a>
                                                    </div>
                                                </div>
                                                <div class="media-footer">
                                                    <div class="table-cell coupon-code">
                                                        <h5 class="">COUPON:FGDHLK</h5>
                                                    </div>
                                                    <div class="table-cell book-btn">
                                                        <h5><a href="{{url('/hotels')}}">Book Now</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </a>
                            <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>

                    </div>
                    <!--------Second slider----->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div id="carouselFadeExampleIndicators_1" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="coupon-box">
                                                <div class="media">
                                                    <img class="d-flex mr-3" src="{{asset('public/web/img/international.png')}} " alt="coupon-image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Up to 1500 Cashback</h5>
                                                        <p>Lorem Ipsum is simply dummy
                                                            text of the printing and typesetting.</p>
                                                        <a href=""><small>T&C's apply</small></a>
                                                    </div>
                                                </div>
                                                <div class="media-footer">
                                                    <div class="table-cell coupon-code">
                                                        <h5 class="">COUPON:FGDHLK</h5>
                                                    </div>
                                                    <div class="table-cell book-btn">
                                                        <h5><a href="{{url('/flight_list')}}">Book Now</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="coupon-box">
                                                <div class="media">
                                                    <img class="d-flex mr-3" src="{{asset('public/web/img/international_1.png')}} " alt="coupon-image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Up to 1600 Cashback</h5>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        <a href=""><small>T&C's apply</small></a>
                                                    </div>
                                                </div>
                                                <div class="media-footer">
                                                    <div class="table-cell coupon-code">
                                                        <h5 class="">COUPON:FGDHLK</h5>
                                                    </div>
                                                    <div class="table-cell book-btn">
                                                        <h5><a href="{{url('/flight_list')}}">Book Now</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---2nd slide-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="coupon-box">
                                                <div class="media">
                                                    <img class="d-flex mr-3" src="{{asset('public/web/img/international_1.png')}} " alt="coupon-image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Up to 1400 Cashback</h5>
                                                        <p>Lorem Ipsum is simply dummy
                                                            text of the printing and typesetting.</p>
                                                        <a href=""><small>T&C's apply</small></a>
                                                    </div>
                                                </div>
                                                <div class="media-footer">
                                                    <div class="table-cell coupon-code">
                                                        <h5 class="">COUPON:FGDHLK</h5>
                                                    </div>
                                                    <div class="table-cell book-btn">
                                                        <h5><a href="{{url('/flight_list')}}">Book Now</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="coupon-box">
                                                <div class="media">
                                                    <img class="d-flex mr-3" src="{{asset('public/web/img/international.png')}}" alt="coupon-image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Up to 1200 Cashback</h5>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        <a href=""><small>T&C's apply</small></a>
                                                    </div>
                                                </div>
                                                <div class="media-footer">
                                                    <div class="table-cell coupon-code">
                                                        <h5 class="">COUPON:FGDHLK</h5>
                                                    </div>
                                                    <div class="table-cell book-btn">
                                                        <h5><a href="{{url('/flight_list')}}">Book Now</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselFadeExampleIndicators_1" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </a>
                            <a class="carousel-control-next" href="#carouselFadeExampleIndicators_1" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                    <!--------Third slider----->

                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div id="carouselFadeExampleIndicators_2" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="coupon-box">
                                                <div class="media">
                                                    <img class="d-flex mr-3" src="{{asset('public/web/img/domestic.png')}} " alt="coupon-image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Up to 1500 Cashback</h5>
                                                        <p>Lorem Ipsum is simply dummy
                                                            text of the printing and typesetting.</p>
                                                        <a href=""><small>T&C's apply</small></a>
                                                    </div>
                                                </div>
                                                <div class="media-footer">
                                                    <div class="table-cell coupon-code">
                                                        <h5 class="">COUPON:FGDHLK</h5>
                                                    </div>
                                                    <div class="table-cell book-btn">
                                                        <h5><a href="{{url('/flight_list')}}">Book Now</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="coupon-box">
                                                <div class="media">
                                                    <img class="d-flex mr-3" src="{{asset('public/web/img/domestic_1.png')}}" alt="coupon-image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Up to 1600 Cashback</h5>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        <a href=""><small>T&C's apply</small></a>
                                                    </div>
                                                </div>
                                                <div class="media-footer">
                                                    <div class="table-cell coupon-code">
                                                        <h5 class="">COUPON:FGDHLK</h5>
                                                    </div>
                                                    <div class="table-cell book-btn">
                                                        <h5><a href="{{url('/flight_list')}}">Book Now</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---2nd slide-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="coupon-box">
                                                <div class="media">
                                                    <img class="d-flex mr-3" src="{{asset('public/web/img/domestic_1.png')}}" alt="coupon-image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Up to 1400 Cashback</h5>
                                                        <p>Lorem Ipsum is simply dummy
                                                            text of the printing and typesetting.</p>
                                                        <a href="{{url('/flight')}}"><small>T&C's apply</small></a>
                                                    </div>
                                                </div>
                                                <div class="media-footer">
                                                    <div class="table-cell coupon-code">
                                                        <h5 class="">COUPON:FGDHLK</h5>
                                                    </div>
                                                    <div class="table-cell book-btn">
                                                        <h5><a href="{{url('/flight_list')}}">Book Now</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="coupon-box">
                                                <div class="media">
                                                    <img class="d-flex mr-3" src="{{asset('public/web/img/domestic.png')}}" alt="coupon-image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Up to 1200 Cashback</h5>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        <a href=""><small>T&C's apply</small></a>
                                                    </div>
                                                </div>
                                                <div class="media-footer">
                                                    <div class="table-cell coupon-code">
                                                        <h5 class="">COUPON:FGDHLK</h5>
                                                    </div>
                                                    <div class="table-cell book-btn">
                                                        <h5><a href="{{url('/flight_list')}}">Book Now</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselFadeExampleIndicators_2" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </a>
                            <a class="carousel-control-next" href="#carouselFadeExampleIndicators_2" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!------==============responsive slider=======================----->
<div class="main-deal">
    <div class="deals">
        <div class="container">
            <div class="coupon-deals-div">
                <h3>Best Deals</h3>
                <nav class="cab-type-nav">
                    <div class="nav nav-tabs" id="nav-tab_1" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab_1" data-toggle="tab" href="#nav-home_1" role="tab" aria-controls="nav-home" aria-selected="true">HOTELS</a>
                        <a class="nav-item nav-link" id="nav-profile-tab_1" data-toggle="tab" href="#nav-profile_1" role="tab" aria-controls="nav-profile" aria-selected="false">INTERNATIONAL FLIGHTS</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact_1" role="tab" aria-controls="nav-contact" aria-selected="false">DOMESTIC FLIGHTS</a>
                        <a class="dropdown btn btn dropdown-toggle more_offer" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MORE
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a href="{{url('/offer')}}" class="dropdown-item" target="_blank">OFFERS</a>
                            <a href="{{url('/hotels')}}" class="dropdown-item" target="_blank">HOTELS</a>
                        </div>
                    </div>
                    </a>
            </div>
            </nav>
        </div>
        <div class="tab-content coupon-slider-div" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home_1" role="tabpanel" aria-labelledby="nav-home-tab_1">
                <div id="carouselFadeExampleIndicators_10" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="coupon-box">
                                <div class="media">
                                    <img class="d-flex mr-3" src="{{asset('public/web/img/coupon-img.png')}} " alt="coupon-image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Up to 1500 Cashback</h5>
                                        <p>Lorem Ipsum is simply dummy
                                            text of the printing and typesetting.</p>
                                        <a href=""><small>T&C's apply</small></a>
                                    </div>
                                </div>
                                <div class="media-footer">
                                    <div class="table-cell coupon-code">
                                        <h5 class="">COUPON:FGDHLK</h5>
                                    </div>
                                    <div class="table-cell book-btn">
                                        <h5><a href="{{url('/hotels')}}">Book Now</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---2nd slide-->

                        <div class="carousel-item">
                            <div class="coupon-box">
                                <div class="media">
                                    <img class="d-flex mr-3" src="{{asset('public/web/img/coupon-img_1.png')}}  " alt="coupon-image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Up to 1200 Cashback</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                        <a href=""><small>T&C's apply</small></a>
                                    </div>
                                </div>
                                <div class="media-footer">
                                    <div class="table-cell coupon-code">
                                        <h5 class="">COUPON:FGDHLK</h5>
                                    </div>
                                    <div class="table-cell book-btn">
                                        <h5><a href="{{url('/hotels')}}">Book Now</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselFadeExampleIndicators_10" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselFadeExampleIndicators_10" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <!--------Second slider----->
            <div class="tab-pane fade" id="nav-profile_1" role="tabpanel" aria-labelledby="nav-profile-tab_1">
                <div id="carouselFadeExampleIndicators_11" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="coupon-box">
                                <div class="media">
                                    <img class="d-flex mr-3" src="{{asset('public/web/img/international.png')}} " alt="coupon-image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Up to 1500 Cashback</h5>
                                        <p>Lorem Ipsum is simply dummy
                                            text of the printing and typesetting.</p>
                                        <a href=""><small>T&C's apply</small></a>
                                    </div>
                                </div>
                                <div class="media-footer">
                                    <div class="table-cell coupon-code">
                                        <h5 class="">COUPON:FGDHLK</h5>
                                    </div>
                                    <div class="table-cell book-btn">
                                        <h5><a href="{{url('/flight_list')}}">Book Now</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---2nd slide-->

                        <div class="carousel-item">
                            <div class="coupon-box">
                                <div class="media">
                                    <img class="d-flex mr-3" src="{{asset('public/web/img/international_1.png')}} " alt="coupon-image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Up to 1400 Cashback</h5>
                                        <p>Lorem Ipsum is simply dummy
                                            text of the printing and typesetting.</p>
                                        <a href=""><small>T&C's apply</small></a>
                                    </div>
                                </div>
                                <div class="media-footer">
                                    <div class="table-cell coupon-code">
                                        <h5 class="">COUPON:FGDHLK</h5>
                                    </div>
                                    <div class="table-cell book-btn">
                                        <h5><a href="{{url('/flight_list')}}">Book Now</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselFadeExampleIndicators_11" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselFadeExampleIndicators_11" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <!--------Third slider----->

            <div class="tab-pane fade" id="nav-contact_1" role="tabpanel" aria-labelledby="nav-contact-tab_1">
                <div id="carouselFadeExampleIndicators_12" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="coupon-box">
                                <div class="media">
                                    <img class="d-flex mr-3" src="{{asset('public/web/img/domestic.png')}} " alt="coupon-image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Up to 1500 Cashback</h5>
                                        <p>Lorem Ipsum is simply dummy
                                            text of the printing and typesetting.</p>
                                        <a href=""><small>T&C's apply</small></a>
                                    </div>
                                </div>
                                <div class="media-footer">
                                    <div class="table-cell coupon-code">
                                        <h5 class="">COUPON:FGDHLK</h5>
                                    </div>
                                    <div class="table-cell book-btn">
                                        <h5><a href="{{url('/flight_list')}}">Book Now</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---2nd slide-->

                        <div class="carousel-item">
                            <div class="coupon-box">
                                <div class="media">
                                    <img class="d-flex mr-3" src="{{asset('public/web/img/domestic_1.png')}}" alt="coupon-image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Up to 1200 Cashback</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                        <a href=""><small>T&C's apply</small></a>
                                    </div>
                                </div>
                                <div class="media-footer">
                                    <div class="table-cell coupon-code">
                                        <h5 class="">COUPON:FGDHLK</h5>
                                    </div>
                                    <div class="table-cell book-btn">
                                        <h5><a href="{{url('/flight_list')}}">Book Now</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselFadeExampleIndicators_12" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselFadeExampleIndicators_12" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!----tour----------->
<div class="tour">
    <div class="container">
        <div class="row">
            @if(isset($gallery))
            @foreach($gallery as $gly)
            <div class="col-md-3 tour-box">
                <img src="{{asset('public/gallery_img/')}}/{{$gly->gallery_img}}" alt="tour" class="img-fluid">
                <h6>{{$gly->gallery_title}}</h6>
            </div>
            @endforeach
            @endif

        </div>

    </div>
</div>
<div class="offer-b">
    <div class="container">
        <div class="row">
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/tour1.jpg')}} " alt="Card image cap">
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/tour2.jpg')}} " alt="Card image cap">
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/tour3.jpg')}} " alt="Card image cap">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/tour4.jpg')}}" alt="Card image cap">
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/tour5.jpg')}} " alt="Card image cap">
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/tour6.jpg')}} " alt="Card image cap">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Second slide-->

                    <!--Third slide-->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/dubai.jpg')}} ">
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/tour8.jpg')}}" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{asset('public/web/img/tour9.jpg')}}" alt="Card image cap">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Third slide-->
                </div>
                <!--/.Slides-->
            </div>
        </div>
    </div>
</div>
@endsection
@section("scripts")
<script>
 
 $('#startRoundTravelDate').datepicker({
            minDate: 0,
            autoclose: true,
            todayHighlight: true,
            dateFormat: 'd M yy',
            minDate: new Date(),
            onSelect: function(date) {
                var selectedDate = new Date(date);
                var msecsInADay = 86400000;
                var endDate = new Date(selectedDate.getTime() + msecsInADay);

                //Set Minimum Date of EndDatePicker After Selected Date of StartDatePicker
                $("#endRoundTravelDate").datepicker("option", "minDate", endDate);
                // if ($("#endRoundTravelDate").is(":visible")) {
                    $("#endRoundTravelDate").datepicker("setDate", endDate);
                // }

            }
        });

        $('#endRoundTravelDate').datepicker({
            minDate: 0,
            autoclose: true,
            todayHighlight: true,
            dateFormat: 'd M yy'
        });

        $('.startRoundTravelDate').datepicker({ 
	        minDate: 0,
	        autoclose: true, 
	        todayHighlight: true,
	        dateFormat: 'd M yy' 
	           
	    });
         //pessinger count
        $(document).on("click", ".one-way-div .qtyInc, .one-way-div .qtyDec", function() {
            calculate_passinger();
        });

        function calculate_passinger() {
            var adults = $('.one-way-div').find(".adults").val();
            var childrens = $('.one-way-div').find(".childrens").val();
            var Infants = $('.one-way-div').find(".Infants").val();
            // console.log("adults"+adults+"childrens"+childrens+"Infants"+Infants);
            var sum_flight = Number(adults) + Number(childrens) + Number(Infants);
            if (sum_flight >= 10){
              alert("Total guest count cannot exceed 9");
        return false;
            }
            $(".onewayflightlist").html(sum_flight);
            $(".hidden_total").val(sum_flight);


        }
        calculate_passinger();
        
</script>
@endsection
