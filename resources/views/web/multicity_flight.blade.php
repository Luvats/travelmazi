@extends('layouts.web')
@section('content')
<!-- ================================
    START CARD AREA
================================= -->
<style type="text/css">
    .fixed-header{
        padding-top: 0px !important;
    }
</style>

<section class="table-flight-area flight-area-table">
	<div class="container">
		<div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
			<div class="contact-form-action flight_from flightpage_area_new">
				
				<form method="get" action="{{url('/flight_list')}}" class="row align-items-center flight-list-form">
                    <div class="col pr-0">
                        <div class="input-box">
                            <label class="label-text">TRIP TYPE</label>
                            <div class="form-group">
                                <select class="selectpicker"name="from_city">
                                 <option>ONE WAY</option>  
                                 <option>ROUND TRIP</option>
                                 <option> MULTI CITY</option>
                             </select>
                         </div>
                     </div>

                 </div>
					<div class="col pr-0">
						<div class="input-box">
							<label class="label-text">FROM</label>
							<div class="form-group">
								<select class="selectpicker"name="from_city" data-show-subtext="true" data-live-search="true">
                                    @if(isset($from_cities))
                                        @foreach($from_cities as $city) 
                                            <option data-subtext="{{ $city->airport}}" value="{{$city->city_short_name}}" {{ $city->city_short_name == $fromCityOrAirportCode ? 'selected="selected"' : '' }}>{{ $city->city_name}}</option>
                                        @endforeach
                                    @endif
                                  
                                </select>

							</div>
						</div>
					</div><!-- end col-lg-3 -->
					<div class="col pr-0">
						<div class="input-box">
							<label class="label-text">TO</label>
							<div class="form-group">

                                <select class="selectpicker"name="to_city" data-show-subtext="true" data-live-search="true">
                                    @if(isset($to_cities))
                                        @foreach($to_cities as $city) 
                                            <option data-subtext="{{ $city->airport}}" value="{{$city->city_short_name}}" {{ $city->city_short_name == $toCityOrAirport ? 'selected="selected"' : '' }}>{{ $city->city_name}}</option>
                                        @endforeach
                                    @endif
                                  
                                </select>  
							</div>
						</div>
					</div><!-- end col-lg-3 -->
					<div class="col pr-0">
						<div class="input-box">
							<label class="label-text">DEPARTURE</label>
							<div class="form-group">
                                <input class="form-control customDatePicker" type="text" name="travelDate" value="{{ $show_date }}" autocomplete="off">
							</div>
						</div>
					</div>
                    <div class="col pr-0">
                        <div class="input-box">
                            <label class="label-text">RETURN</label>
                            <div class="form-group">
                                <input class="form-control" type="text" name="">
                            </div>
                        </div>
                    </div><!-- end col-lg-3 -->
					<div class="col pr-0 travel-box_flight">
						<div class="input-box">
							<label class="label-text">TRAVELLERS</label>
							<div class="form-group">
								<div class="dropdown dropdown-contain">
									<a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
										<span><label class="flight-label">Passengers</label> <span class="qtyTotal onewayflight">
                                       </span></span>
									</a>
									<div class="dropdown-menu dropdown-menu-wrap flight-div">
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Adults (12y +)</label>
												<div class="flightQtyBtn d-flex align-items-center">
                                                    <input type="text" name="adults" value="{{ $ADULT }}" class="flight_adults adults" data-parent-class="flight-div">
												</div>
											</div>
										</div>
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Children (2y - 12y)</label>
												<div class="flightQtyBtn d-flex align-items-center">
                                                    <input type="text" name="children" value="{{ $CHILD }}" class="flight_children childrens" data-parent-class="flight-div">
												</div>
											</div>
										</div>
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Infants (below 2y)</label>
												<div class="flightQtyBtn d-flex align-items-center">
                                                    <input type="text" name="infants" value="{{ $INFANT }}" class="flight_infants Infants" data-parent-class="flight-div">
												</div>
											</div>
										</div>
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Economy</label>
											<select class="select-contain-select" name="cabinClass">
									
												@if(isset($Flightclass))
                                                    @foreach($Flightclass as $fc)
                                                       <option value="{{ $fc->flight_clss_value}}" {{ $fc->flight_clss_value == $cabinClass ? 'selected="selected"' : '' }}>{{ ucfirst($fc->flight_clss)}}</option>
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
					<div class="col pr-0 search-flight">
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
                                <option value="1">Sort by default</option>
                                <option value="2">Popular Flight</option>
                                <option value="3">Price: low to high</option>
                                <option value="4">Price: high to low</option>
                                <option value="5">A to Z</option>
                            </select>
                        </div>-
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            @include('web.multicity_flight_filter', ['flight_names' => $flight_names, 'all_flightdata' => $all_flightdata, 'showtraveldate' => $showtraveldate, 'ADULT' => $ADULT, 'CHILD' => $CHILD, 'INFANT' => $INFANT])


            <div class="col-lg-9">
                <div class="row align-items-center text-center sort-by-Section ">
                    <div class="col-md-2">
                        <h6>Sorted By:</h6>
                    </div>
                    <div class="col-md-2 departure-sort">
                        <h6>Departure</h6>
                        <i class="fa" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-1 duration-sort">
                        <h6>Duration</h6>
                        <i class="fa" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-2 arrival-sort">
                        <h6>Arrival </h6>
                        <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-3 text-left price-sort">
                        <h6>Price</h6>
                        <i class="fa" aria-hidden="true"></i>
                    </div>   
                </div>
                
                @include('web.multicity_flight_listing', ['flight_names' => $flight_names, 'all_flightdata' => $all_flightdata, 'showtraveldate' => $showtraveldate, 'ADULT' => $ADULT, 'CHILD' => $CHILD, 'INFANT' => $INFANT])
			</div><!-- col-lg-8 -->
        </div><!--row end-->
    </div><!--container-->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js" defer></script>
<script>
$(document).ready(function(){
     //alert()
     $('.js-example-basic-single').select2();

        $('.js-example-basic-single_to').select2();
     
     });
    // $(function () {
    //     $('input[name="travelDate"]').datepicker({ 
    //         autoclose: true, 
    //         todayHighlight: true,
    //         minDate: 0
    //     }).datepicker('update', new Date());
    // });
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
$(document).ready(function(){
    var flight_adults = $(".flight_adults").val();
    var flight_children = $(".flight_children").val();
    var flight_infants = $(".flight_infants").val();
    var sum        = Number(flight_adults) + Number(flight_children) + Number(flight_infants);
    if (sum_flight >= 10){
              alert("Upto 9 passengers allowed");
        return false;
            }
    $(".onewayflight").html(sum);
    if(sum > 1) {
        $('.flight-label').html('Passengers');
    } else {
        $('.flight-label').html('Passenger');
    }
});
  </script>
@endsection

@section("scripts")
<script>
    //rating filter is working here
    $(document).on("click", "#rating-1", function() {
        var id = $(this).attr("id");
        $('.card-item').hide();
        $('.ratings-1').show();
    });

    $(document).on("click", "#rating-2", function() {
        var id = $(this).attr("id");
        $('.card-item').hide();
        $('.ratings-2').show();
    });

    $(document).on("click", "#rating-3", function() {
        var id = $(this).attr("id");
        $('.card-item').hide();
        $('.ratings-3').show();
    });

    $(document).on("click", "#rating-4", function() {
        var id = $(this).attr("id");
        $('.card-item').hide();
        $('.ratings-4').show();
    });

    $(document).on("click", "#rating-5", function() {
        var id = $(this).attr("id");
        $('.card-item').hide();
        $('.ratings-5').show();
    });
</script>
@endsection