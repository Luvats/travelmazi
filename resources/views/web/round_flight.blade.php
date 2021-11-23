@extends('layouts.web')
@section('content')
<!-- ================================
    START CARD AREA
================================= -->

<section class="table-flight-area round_trip_flight flight-area-table round-trip-flight">
	<div class="container">
		<div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
			<div class="contact-form-action flight_from flightpage_area_new">
				
				<form method="post" action="{{url('/round_trip')}}" class="row align-items-center flight-list-form">
                    @csrf
					<div class="col-lg-2 pr-0">
						<div class="input-box">
							<label class="label-text">FROM</label>
							<div class="form-group">
								
								<!-- <select id="lca" class="js-example-basic-single" name="from_city" class="form-control" required> -->
                                <select class="selectpicker "name="from_city" data-show-subtext="true" data-live-search="true" required="">
                                    @if(isset($from_cities))
                                        @foreach($from_cities as $city)  
                                            <option data-subtext="{{ $city->airport}}" value="{{$city->city_short_name}}" {{ $city->city_short_name == $fromCityOrAirportCode ? 'selected="selected"' : '' }}>{{ $city->city_name}}</option>
                                        @endforeach
                                    @endif
                                </select>
							</div>
						</div>
					</div><!-- end col-lg-3 -->
					<div class="col-lg-2 pr-0">
						<div class="input-box">
							<label class="label-text">TO</label>
							<div class="form-group">
								
								<!-- <select id="lca1" class="js-example-basic-single_to" name="to_city" class="form-control" required> -->
                                <select class="selectpicker"name="to_city" data-show-subtext="true" data-live-search="true" required="">
                                     @if(isset($to_cities))
                                            @foreach($to_cities as $city)  
                                                <option data-subtext="{{ $city->airport}}" value="{{$city->city_short_name}}" {{ $city->city_short_name == $toCityOrAirport ? 'selected="selected"' : '' }}>{{ $city->city_name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
							</div>
						</div>
					</div><!-- end col-lg-3 -->
					<div class="col-lg-2 pr-0">
						<div class="input-box">
							<label class="label-text">DEPARTURE</label>
							<div class="form-group">
                                <input class="form-control" name="value_from_start_roundflightdate" data-datepicker="separateRangeFlightRound" type="text" name="travelDate" value="{{ $show_dept_date}}">
							</div>
						</div>
					</div><!-- end col-lg-3 -->
                    <div class="col-lg-2 pr-0">
                        <div class="input-box">
                            <label class="label-text">RETURN</label>
                            <div class="form-group">
                                <input class="form-control" type="text" value="{{ $show_return_date}}" name="value_from_end_roundflightdate"  data-datepicker="separateRangeFlightRound">
                            </div>
                        </div>
                    </div>
					<div class="col-lg-2 pr-0 travel-box_flight">
						<div class="input-box">
							<label class="label-text">TRAVELLERS</label>
							<div class="form-group">
								<div class="dropdown dropdown-contain">
									<a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
										<span>Passengers <span class="qtyTotal guestTotal_2">6</span></span>
									</a>
									<div class="dropdown-menu dropdown-menu-wrap">
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Adults</label>
												<div class="qtyBtn d-flex align-items-center">
													<input type="text" class="round_trip_adults" name="Adults" value="{{ $ADULT }}">
												</div>
											</div>
										</div>
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Children</label>
												<div class="qtyBtn d-flex align-items-center">
													<input type="text" class="round_trip_children" name="Children" value="{{ $CHILD }}">
												</div>
											</div>
										</div>
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Infants</label>
												<div class="qtyBtn d-flex align-items-center">
													<input type="text" class="round_trip_infants" name="Infants" value="{{ $INFANT }}">
												</div>
											</div>
										</div>
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Economy</label>
												<select class="select-contain-select" name="class">
													@if(isset($Flightclass))
                                                        @foreach($Flightclass as $fc)
                                                           <option value="{{ $fc->flight_clss_value}}" {{ $fc->flight_clss_value == $class ? 'selected="selected"' : '' }}>{{ ucfirst($fc->flight_clss)}}</option>
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
					<div class="col-lg-2 pr-0 search-flight">
						<button type="submit" class="theme-btn ">Search Now</button>
					</div> 	
				</form>
			   
			</div>
		</div><!-- end tab-pane -->
		</div><!-- end container -->
</section>							
								

<section class="card-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 short-default-area">
                <div class="filter-wrap margin-bottom-30px">                   
                    <!-- <div class="filter-bar d-flex align-items-center justify-content-between short-df">
					   <div class="select-contain">
                            <select class="select-contain-select">
                                <option value="1">Short by default</option>
                                <option value="2">Popular Flight</option>
                                <option value="3">Price: low to high</option>
                                <option value="4">Price: high to low</option>
                                <option value="5">A to Z</option>
                            </select>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            @include('web.round_flight_filter', ['flight_names' => $flight_names, 'all_flightdata' => $all_flightdata, 'showtraveldate' => $showtraveldate, 'ADULT' => $ADULT, 'CHILD' => $CHILD, 'INFANT' => $INFANT])

            <!-- end col-lg-4 -->
            
            @include('web.round_flight_listing', ['flight_names' => $flight_names, 'all_flightdata' => $all_flightdata, 'showtraveldate' => $showtraveldate, 'ADULT' => $ADULT, 'CHILD' => $CHILD, 'INFANT' => $INFANT, 'fromCityOrAirportCode' => $fromCityOrAirportCode, 'toCityOrAirport' => $toCityOrAirport])
        </div><!--row end-->
    </div><!--container-->
</section><!-- end card-area -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
 <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js" defer></script>
<script>
$(document).ready(function(){
     //alert()
     $('.js-example-basic-single').select2();

      $('.js-example-basic-single_to').select2();
     
     });

 
</script>
<script type="text/javascript">
    $(function () {
        $('input[name="travelDate"]').datepicker({ 
             minDate: 0,
            autoclose: true, 
            todayHighlight: true,
           
        }).datepicker('update', new Date());

        $('input[name="ReturntravelDate"]').datepicker({ 
             minDate: 0,
            autoclose: true, 
            todayHighlight: true,
           
        }).datepicker('update', new Date());
    });
</script>
<script type="text/javascript">
      $(document).ready(function(){
        var round_trip_adults 		= $(".round_trip_adults").val();
        var round_trip_children 	= $(".round_trip_children").val();
        var round_trip_infants 		= $(".round_trip_infants").val();
        var sum        = Number(round_trip_adults) + Number(round_trip_children) + Number(round_trip_infants);

        $(".guestTotal_2").html(sum);

        $(".qtyInc").on("click", function(){
            var round_trip_adults 	= $(".round_trip_adults").val();
            var round_trip_children = $(".round_trip_children").val();
            var round_trip_infants 	= $(".round_trip_infants").val();
            var sum        = Number(round_trip_adults) + Number(round_trip_children) + Number(round_trip_infants);

            $(".guestTotal_2").html(sum);
        });

        $(".qtyDec").on("click", function(){
            var round_trip_adults = $(".round_trip_adults").val();
            var round_trip_children = $(".round_trip_children").val();
            var round_trip_infants = $(".round_trip_infants").val();
            var sum        = Number(round_trip_adults) + Number(round_trip_children) + Number(round_trip_infants);

            $(".guestTotal_2").html(sum);
        });
      });
  </script>
<script type="text/javascript">
    /* ========================================== 
scrollTop() >= 300
Should be equal the the height of the header
========================================== */

$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('.table-flight-area').addClass('fixed-header');
        $('.table-flight-area div').addClass('visible-title');
        $(".main-header-box").css('display','none');
    }
    else {
        $('.table-flight-area').removeClass('fixed-header');
        $('.table-flight-area div').removeClass('visible-title');
        $(".main-header-box").css('display','block');
       
    }
});

  </script>
@endsection