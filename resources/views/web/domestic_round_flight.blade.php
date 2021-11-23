@extends('layouts.web')
@section('content')
<!-- ================================
    START CARD AREA
================================= -->
<?php
// echo '<pre>'; print_r($showtraveldate); die;
?>
<section class="table-flight-area round_trip_flight flight-area-table round-trip-flight">
	<div class="container">
		<div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
			<div class="contact-form-action flight_from flightpage_area_new">

				<form method="get" action="{{url('/round_trip')}}" class="row align-items-center flight-list-form">
				<input type="hidden" name="round_trip" value="round_trip">
					<div class="col trip-selection pr-0">
						<div class="input-box">
							<label class="label-text">TRIP TYPE</label>
							<div class="form-group">
								<select class="selectpicker" id="choiceTripType">
									<option value="return">ROUND TRIP</option>
									<option value="oneway">ONE WAY</option>
									<!-- <option> MULTI CITY</option> -->
								</select>
							</div>
						</div>
					</div>
					<div class="col trip-selection pr-0">
						<div class="input-box">
							<label class="label-text">FROM</label>
							<div class="form-group">

								<!-- <select id="lca" class="js-example-basic-single" name="from_city" class="form-control" required> -->
								<select class="selectpicker " name="from_city" data-show-subtext="true" data-live-search="true" required="">
									@if(isset($from_cities))
									@foreach($from_cities as $city)
									<option data-subtext="{{ $city->airport}}" value="{{$city->city_short_name}}" {{ $city->city_short_name == $fromCityOrAirportCode ? 'selected="selected"' : '' }}>{{ $city->city_name}}</option>
									@endforeach
									@endif
								</select>
							</div>
						</div>
					</div><!-- end col-lg-3 -->
					<div class="col trip-selection pr-0">
						<div class="input-box">
							<label class="label-text">TO</label>
							<div class="form-group">

								<!-- <select id="lca1" class="js-example-basic-single_to" name="to_city" class="form-control" required> -->
								<select class="selectpicker" name="to_city" data-show-subtext="true" data-live-search="true" required="">
									@if(isset($to_cities))
									@foreach($to_cities as $city)
									<option data-subtext="{{ $city->airport}}" value="{{$city->city_short_name}}" {{ $city->city_short_name == $toCityOrAirport ? 'selected="selected"' : '' }}>{{ $city->city_name}}</option>
									@endforeach
									@endif
								</select>
							</div>
						</div>
					</div><!-- end col-lg-3 -->
					<div class="col trip-selection pr-0">
						<div class="input-box">
							<label class="label-text">DEPARTURE</label>
							<div class="form-group">
								<input class="form-control" id="returStartDatePicker" type="text" name="startRoundTravelDate" value="{{ $startRoundTravelDate}}">
							</div>
						</div>
					</div><!-- end col-lg-3 -->
					<div class="col trip-selection pr-0" id="return-date">
						<div class="input-box">
							<label class="label-text">RETURN</label>
							<div class="form-group">
								<input class="form-control" id="returEndDatePicker" type="text" name="endRoundTravelDate" value="{{ $endRoundTravelDate}}">
							</div>
						</div>
					</div>
					<div class="col trip-selection pr-0 travel-box_flight">
						<div class="input-box">
							<label class="label-text">TRAVELLERS</label>
							<div class="form-group">
								<div class="dropdown dropdown-contain">
									<a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
										<span>Passengers <span class="qtyTotal retrunflightlist">1</span></span>
									</a>
									<div class="dropdown-menu dropdown-menu-wrap flight-div">
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Adults</label>
												<div class="qtyBtn d-flex align-items-center">
													<input type="text" class="adults" name="adults" value="{{ $ADULT }}" data-parent-class="flight-div">
												</div>
											</div>
										</div>
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Children</label>
												<div class="qtyBtn d-flex align-items-center">
													<input type="text" class="children" name="children" value="{{ $CHILD }}" data-parent-class="flight-div">
												</div>
											</div>
										</div>
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Infants</label>
												<div class="qtyBtn d-flex align-items-center">
													<input type="text" class="Infants" name="infants" value="{{ $INFANT }}" data-parent-class="flight-div">
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
					<div class="col trip-selection pr-0 search-flight">
					

<button type="submit" class="theme-btn w-100 " onclick="myFunction()">Search Now</button>

<script>
function myFunction() {
  alert("upto 9 passenger are allowed");
}

</script>
				</form>
			</div>
		</div><!-- end tab-pane -->
	</div><!-- end container -->
</section>

<section class="traveller-box-area">
	<div class="container">
		<div class="row">



			@include('web.flight_filter', ['flight_names' => $flight_names, 'all_flightdata' => $all_flightdata, 'showtraveldate' => $showtraveldate, 'ADULT' => $ADULT, 'CHILD' => $CHILD, 'INFANT' => $INFANT])





			<div class="col-lg-9 flights-to-mumbai">
				<!-- <p class="heading">flights from <b>New Delhi </b>to <b>Bengaluru</b>, and back</p> -->

				<div class="row align-items-center  sort-by-Section ">
					<div class="col">
						<h6>Sorted By:</h6>
					</div>
					<div class="col departure-sort">
						<h6>Departure</h6>
						<i class="fa" aria-hidden="true"></i>
					</div>
					<div class="col duration-sort">
						<h6>Duration</h6>
						<i class="fa" aria-hidden="true"></i>
					</div>
					<div class="col arrival-sort">
						<h6>Arrival </h6>
						<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
					</div>
					<div class="col text-left price-sort">
						<h6>Price</h6>
						<i class="fa" aria-hidden="true"></i>
					</div>
				</div>
				<form action="{{route('return-traveller')}}">
					<div class="row ">
						<div class="col-lg-6 new-listing-right sort_return_results1">

							<?php
							if (isset($all_flightdata)) {


								function hoursandmins($time)
								{
									$format = '%02d hrs %02d mins';
									$minFormat = '%02d mins';
									$hrsFormat = '%02d hrs';
									if ($time < 1) {
										return;
									}
									$hours = floor($time / 60);
									$minutes = ($time % 60);
									if (($hours > 0) && ($minutes > 0)) {
										return sprintf($format, $hours, $minutes);
									} else if ($hours > 0) {
										return sprintf($hrsFormat, $hours);
									} else {
										return sprintf($minFormat, $minutes);
									}
								}
								$x = 0;
								if (!empty($all_flightdata['searchResult']['tripInfos']['ONWARD'])) {
									$onwardArrFirstItem = $all_flightdata['searchResult']['tripInfos']['ONWARD'][0];
									//echo '<pre>'; var_dump($onwardArrFirstItem); die;
									foreach ($all_flightdata['searchResult']['tripInfos']['ONWARD'] as $dt_key =>  $dt) {
										$ft = flightTimings($dt['sI'][0]['fD']['aI']['code'], $dt['sI'][0]['dt'], $dt['sI'][0]['at']);
										$rating=0;
										if(!empty($flight_ratings['ONWARD'][$dt['sI'][0]['fD']['aI']['name']."-".$dt['sI'][0]['fD']['aI']['code']."-".$dt['sI'][0]['fD']['fN']])){
											$rating=ceil($flight_ratings['ONWARD'][$dt['sI'][0]['fD']['aI']['name']."-".$dt['sI'][0]['fD']['aI']['code']."-".$dt['sI'][0]['fD']['fN']]);
										}
							?>
										<div class="card ">
											<div class="card-item row align-items-center no-gutters round-flight-ticket-collapse {{ $dt['sI'][0]['fD']['aI']['code'] }}code {{ $dt['sI'][0]['stops'] }}stops ratings-{{$rating}}" data-flight-price-range="{{$dt['price_range']}}" data-flight-min-price="{{$dt['min_price']}}" data-flight-departure="{{$ft['start_strtotime'] }}" data-flight-arrival="{{$ft['end_strtotime'] }}" data-flight-duration="{{ $dt['sI'][0]['duration'] }}" id="unique-{{ $dt['totalPriceList'][0]['id'] }}">
												<div class="col-lg-12">
													<div class="flight-img">
														<!-- <img src="{{ asset('public/airlines_logo/SG.png')}}" alt="flight-logo"> -->
														@if(empty($ft['logo_details']))
														<img src="{{asset('public/web/img/airindia.png')}}" alt="flight-logo-img" class="img-fluid">

														@else
														<img src="{{url('public/airlines_logo')}}/{{$ft['logo_details']->airlines_logo}}" alt="flight-logo-img" class="img-fluid">

														@endif
														<h5 class="text-left" style="font-size: 18px; ">{{ $dt['sI'][0]['fD']['aI']['name'] }}</h5>
													</div>
												</div>
												<div class="col-lg-3  text-center">
													<div class="departure-time">
														<h5 class="">{{$ft['start_tym'][1] }}</h5>
														<p>{{ $dt['sI'][0]['fD']['eT']}} | {{ $dt['sI'][0]['fD']['aI']['code'] }} {{ $dt['sI'][0]['fD']['fN']}} </p>
														<?php
															$rate = $flight_ratings['ONWARD'][$dt['sI'][0]['fD']['aI']['name'] . "-" . $dt['sI'][0]['fD']['aI']['code'] . "-" . $dt['sI'][0]['fD']['fN']];
															if ($rate) {
																echo "Ratings: " . number_format((float)$rate, 2, '.', '');
															} ?>
													</div>
												</div>
												<div class="col-lg-3 text-center">
													<p>{{ hoursandmins($dt['sI'][0]['duration']) }}</p>
													<hr class="center-hr">
													<p class="fli-stops-desc">Non stop</p>
												</div>
												<div class="col-lg-3 text-center  arrivel-time-round">
													<h5>{{$ft['end_tym'][1] }}</h5>
													<p>{{ $dt['sI'][0]['da']['city'] }} <br>to<br> {{ $dt['sI'][0]['aa']['city'] }}</p>
												</div>
												
												<div class="col-lg-3  ">
											<div class="btn-box  book-view text-center ">
												<a class="theme-btn theme-btn-small details-box" data-toggle="collapse" href="#collapseExample1{{$x}}" aria-expanded="true" aria-controls="collapseExample1">select <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="collapse fclass-select" style="width: 100%" id="collapseExample1{{$x}}"  >
											<h4 class="flight-list-items" style="font-size: 14px; margin-top: 20px;">
														@foreach($dt['totalPriceList'] as $totalPriceListKey => $tpl)
														<p class="fl-class">
															<?php $total_fare = $tpl['fd']['ADULT']['fC']['TF'];
															$final_total_fare = round($total_fare, 0);
															setlocale(LC_MONETARY, 'en_IN');
															?>
															<?php $id = $dt['totalPriceList'][0]['id']; ?>
															<input type="radio" style="margin-right: 12px" name="ONWARD" onClick="find_rv('{{$id}}','onward')" <?php if ($onwardArrFirstItem['totalPriceList'][0]['id'] == $id) {
																																		echo "checked";
																																	} ?> value="{{$tpl['id']}}">{{$tpl['fd']['ADULT']['cc']}} &#8377;{{$final_total_fare}}<br>
														</p>
														@endforeach

													</h4>
									</div>
												<hr class="last-hr">
											</div>
											
										</div>
										
							<?php $x++;
									}
								}
							}
							?>

						</div>
						<div class="col-lg-6 new-listing-right sort_return_results">
							<?php
							if (isset($all_flightdata)) {
								$x = 0;
								if (!empty($all_flightdata['searchResult']['tripInfos']['RETURN'])) {
									$returnArrFirstItem = $all_flightdata['searchResult']['tripInfos']['RETURN'][0];
									foreach ($all_flightdata['searchResult']['tripInfos']['RETURN'] as $dt_key =>  $dt) {
										$ft = flightTimings($dt['sI'][0]['fD']['aI']['code'], $dt['sI'][0]['dt'], $dt['sI'][0]['at']);
										$rating=0;
										if(!empty($flight_ratings['RETURN'][$dt['sI'][0]['fD']['aI']['name']."-".$dt['sI'][0]['fD']['aI']['code']."-".$dt['sI'][0]['fD']['fN']])){
											$rating=ceil($flight_ratings['RETURN'][$dt['sI'][0]['fD']['aI']['name']."-".$dt['sI'][0]['fD']['aI']['code']."-".$dt['sI'][0]['fD']['fN']]);
										}
							?>
										<div class="card">
											<div class="card-item row align-items-center no-gutters round-flight-ticket-collapse {{ $dt['sI'][0]['fD']['aI']['code'] }}code {{ $dt['sI'][0]['stops'] }}stops ratings-{{$rating}}" data-flight-price-range="{{$dt['price_range']}}" data-flight-min-price="{{$dt['min_price']}}" data-flight-departure="{{$ft['start_strtotime'] }}" data-flight-arrival="{{$ft['end_strtotime'] }}" data-flight-duration="{{ $dt['sI'][0]['duration'] }}" id="unique-{{ $dt['totalPriceList'][0]['id'] }}">
												<div class="col-lg-12">
													<div class="flight-img">
														<!-- <img src="{{ asset('public/airlines_logo/SG.png')}}" alt="flight-logo"> -->
														@if(empty($ft['logo_details']))
														<img src="{{asset('public/web/img/airindia.png')}}" alt="flight-logo-img" class="img-fluid">

														@else
														<img src="{{url('public/airlines_logo')}}/{{$ft['logo_details']->airlines_logo}}" alt="flight-logo-img" class="img-fluid">

														@endif
														<h5 class="text-left" style="font-size: 18px; ">{{ $dt['sI'][0]['fD']['aI']['name'] }}</h5>
													</div>
												</div>
												<div class="col-lg-3 text-center">
													<div class="departure-time">
														<h5 class="">{{$ft['start_tym'][1] }}</h5>
														<p>{{ $dt['sI'][0]['fD']['eT']}} | {{ $dt['sI'][0]['fD']['aI']['code'] }} {{ $dt['sI'][0]['fD']['fN']}} </p>
														<!-- <p><a href="#" onClick="find_rv('{{$id}}')">Flight Details</a></p> -->
														<?php
															$rate = $flight_ratings['RETURN'][$dt['sI'][0]['fD']['aI']['name'] . "-" . $dt['sI'][0]['fD']['aI']['code'] . "-" . $dt['sI'][0]['fD']['fN']];
															if ($rate) {
																echo "Ratings: " . number_format((float)$rate, 2, '.', '');
															} ?>
													</div>
												</div>
												<div class="col-lg-3 text-center">
													<p>{{ hoursandmins($dt['sI'][0]['duration']) }}</p>
													<hr class="center-hr">
													<p class="fli-stops-desc">Non stop</p>
												</div>
												<div class="col-lg-3 text-center arrivel-time-round">
													<h5>{{$ft['end_tym'][1] }}</h5>
													<p>{{ $dt['sI'][0]['da']['city'] }} <br>to<br> {{ $dt['sI'][0]['aa']['city'] }}</p>
												</div>
												<div class="col-lg-3  ">
											<div class="btn-box  book-view text-center ">
												<a class="theme-btn theme-btn-small details-box" data-toggle="collapse" href="#collapseExample{{$x}}" aria-expanded="true" aria-controls="collapseExample{{$x}}">select <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="collapse fclass-select" style="width: 100%" id="collapseExample{{$x}}"  >
											<h4 class="flight-list-items" style="font-size: 14px; margin-top: 20px">
														@foreach($dt['totalPriceList'] as $totalPriceListKey => $tpl)
														<p class="fl-class">
															<?php $total_fare = $tpl['fd']['ADULT']['fC']['TF'];
															$final_total_fare = round($total_fare, 0);
															setlocale(LC_MONETARY, 'en_IN');
															?>
															<?php $id = $dt['totalPriceList'][0]['id']; ?>
															<input type="radio" style="margin-right: 12px" name="RETURN" <?php if ($onwardArrFirstItem['totalPriceList'][0]['id'] == $id) {
																																		echo "checked";
																																	} ?> value="{{$tpl['id']}}">{{$tpl['fd']['ADULT']['cc']}} &#8377;{{$final_total_fare}}<br>
														</p>
														@endforeach

													</h4>
									</div>
												<hr class="last-hr">
											</div>
										</div>
							<?php
							$x++;
									}
								}
							}
							?>

						</div>
						<!-- <input class="theme-btn  theme-btn-small mx-auto round-book " type="submit" value="Book"> -->
					</div>

				<!-- </form> -->
				@if(!empty($onwardArrFirstItem) && !empty($returnArrFirstItem))
				<div class="row">
					<div class="fixed-position fixed-bottom flight-booking-popup">
						<div class="row bg-color">
							<div class="col-lg-4 ">
								<p>Departure | <span>{{$onwardArrFirstItem['sI'][0]['fD']['aI']['name']}}</span> <span>| {{$onwardArrFirstItem['sI'][0]['fD']['aI']['code']}}-{{$onwardArrFirstItem['sI'][0]['fD']['fN']}}</span></p>
								<?php $ft = flightTimings($onwardArrFirstItem['sI'][0]['fD']['aI']['code'], $onwardArrFirstItem['sI'][0]['dt'], $onwardArrFirstItem['sI'][0]['at']); ?>
								<div class="row  align-items-center no-gutters text-start fare-detail ">
									<div class="col-lg-3 fare-detail">
										<img src="{{url('public/airlines_logo')}}/{{$ft['logo_details']->airlines_logo}}" alt="flight-logo">
									</div>
									<div class="col-lg-3">
										<p><?php $ex = explode("T", $onwardArrFirstItem['sI'][0]['dt']);
											echo end($ex); ?></p>
									</div>
									<div class="col-lg-3">
										<p>
											<i class="fa fa-long-arrow-right mr-1" aria-hidden="true"></i><?php $ex = explode("T", $onwardArrFirstItem['sI'][0]['at']);
																											echo end($ex); ?>
										</p>
									</div>
									<div class="col-lg-3 text-right">
										<p>&#8377; {{$onwardArrFirstItem['totalPriceList'][0]['fd']['ADULT']['fC']['TF']}}</p>
									</div>
									<a href="#">Flight Details</a>
								</div>
							</div>
							<div class="col-lg-4 ">
								<p>Departure | <span>{{$returnArrFirstItem['sI'][0]['fD']['aI']['name']}}</span> <span>| {{$returnArrFirstItem['sI'][0]['fD']['aI']['code']}}-{{$returnArrFirstItem['sI'][0]['fD']['fN']}}</span></p>
								<div class="row  align-items-center no-gutters text-start fare-detail ">
									<?php $ftr = flightTimings($returnArrFirstItem['sI'][0]['fD']['aI']['code'], $returnArrFirstItem['sI'][0]['dt'], $returnArrFirstItem['sI'][0]['at']); ?>
									<div class="col-lg-3 fare-detail">
										<img src="{{url('public/airlines_logo')}}/{{$ftr['logo_details']->airlines_logo}}" alt="flight-logo">
									</div>
									<div class="col-lg-3">
										<p><?php $ex = explode("T", $returnArrFirstItem['sI'][0]['dt']);
											echo end($ex); ?></p>
									</div>
									<div class="col-lg-3">
										<p><i class="fa fa-long-arrow-right mr-1" aria-hidden="true"></i><?php $ex = explode("T", $returnArrFirstItem['sI'][0]['at']);
																											echo end($ex); ?></p>
									</div>
									<div class="col-lg-3 text-right">
										<p>&#8377; {{$returnArrFirstItem['totalPriceList'][0]['fd']['ADULT']['fC']['TF']}}</p>
									</div>
									<a href="#">Flight Details</a>
								</div>
							</div>
							<div class="col-lg-4  d-flex align-items-center justify-content-between ">
								<div class="sky-blue-text">
									<p>&#8377; {{$returnArrFirstItem['totalPriceList'][0]['fd']['ADULT']['fC']['TF']+$onwardArrFirstItem['totalPriceList'][0]['fd']['ADULT']['fC']['TF']}}</p>
									<a href="#">Fare detail</a>
								</div>

								<input class="theme-btn  theme-btn-small mx-auto round-book " type="submit" value="Book Now"/>

								</form>

								<a href="javascript::void()" id="showDetails" class="btn fixed-collapse-button" onclick="find_rv('<?php echo $onwardArrFirstItem['totalPriceList'][0]['id']; ?>','onword_review')">
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</a>
							</div>
						</div>

						<div class="collapse summary" id="show-hide-data">
							<div class="f-details">
								<!-- <ul class="tabs">
									<li class="active"><a href="#">FLIGHT DETAILS</a></li>
									<li><a href="#">FARE SUMMARY</a></li>
									<li><a href="#">CANCELLATION</a></li>
									<li><a href="#">DATE CHANGE</a></li>
								</ul> -->
								<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="pills-flight-details-tab" data-toggle="pill" href="#pills-flight-details" role="tab" aria-controls="pills-flight-details" aria-selected="true">Flight Details</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-fare-summary-tab" data-toggle="pill" href="#pills-fare-summary" role="tab" aria-controls="pills-fare-summary" aria-selected="false">Fare Summary</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-date-change-tab" data-toggle="pill" href="#pills-date-change" role="tab" aria-controls="pills-date-change" aria-selected="false">Date Change</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-cancellation-tab" data-toggle="pill" href="#pills-cancellation" role="tab" aria-controls="pills-cancellation" aria-selected="false">cancellation</a>
									</li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="pills-flight-details" role="tabpanel" aria-labelledby="pills-flight-details-tab">
										<div class="row no-gutters">
											<div class="col-lg-6 ">
												<div class="departure-flight-border">
													<!-- <p class="departure-flight-span">Departure <span>Flight</span></p> -->
													<div class="duration-time d-flex align-items-center justify-content-between">
														<p>{{$onwardArrFirstItem['sI'][0]['da']['city']}} to {{$onwardArrFirstItem['sI'][0]['aa']['city']}} , Date: <?php $dt = explode("T", $onwardArrFirstItem['sI'][0]['dt']);
																																									$date = new DateTime($dt[0]);
																																									echo $date->format('d-M'); ?></p>
														<p>{{ hoursandmins($onwardArrFirstItem['sI'][0]['duration']) }}</p>
													</div>
													<div class="row align-items-center justify-content-between spicejet-sg ">
														<div class="col-lg-6">
															<img src="{{url('public/airlines_logo')}}/{{$ft['logo_details']->airlines_logo}}" alt="flight-logo">
														</div>
														<div class="col-lg-6">
															<p>{{ $onwardArrFirstItem['sI'][0]['fD']['aI']['name']}} | {{ $onwardArrFirstItem['sI'][0]['fD']['aI']['code'] }} {{ $onwardArrFirstItem['sI'][0]['fD']['fN']}}</p>
														</div>
													</div>
													<div class="row align-items-center mumbai-india ">
														<div class="col-lg-4">
															<h6><?php $dt = explode("T", $onwardArrFirstItem['sI'][0]['dt']);
																echo $dt[1]; ?> </h6>
															<!-- <p>Tue, 09 Mar 21</p> -->
															<p><span>{{$onwardArrFirstItem['sI'][0]['da']['city']}}, {{$onwardArrFirstItem['sI'][0]['da']['country']}} </span></p>
														</div>
														<div class="col-lg-4">
															<p><b>{{ hoursandmins($onwardArrFirstItem['sI'][0]['duration']) }}</b></p>
														</div>
														<div class="col-lg-4">
															<h6><?php $dt = explode("T", $onwardArrFirstItem['sI'][0]['at']);
																echo $dt[1]; ?></h6>
															<!-- <p>Tue, 09 Mar 21</p> -->
															<p>{{$onwardArrFirstItem['sI'][0]['aa']['city']}}, {{$onwardArrFirstItem['sI'][0]['aa']['country']}} </p>
														</div>
													</div>
													<div class="row text-center baggage">

														<div class="col-lg-4">
															<h6>BAGGAGE :</h6>
															<p>ADULT</p>
														</div>
														<div class="col-lg-4">
															<h6>CHECK IN</h6>
															<p>{!!$onwardArrFirstItem['totalPriceList'][0]['fd']['ADULT']['bI']['iB']!!}<br> (1 piece only)</p>
														</div>
														<div class="col-lg-4">
															<h6>CABIN</h6>
															<p>{{$onwardArrFirstItem['totalPriceList'][0]['fd']['ADULT']['bI']['cB']}}<br> (1 piece only)</p>
														</div>

													</div>
												</div>
											</div>
											<div class="col-lg-6 ">
												<div class="departure-flight-border">
													<!-- <p class="departure-flight-span">Departure <span>Flight</span></p> -->
													<div class="duration-time d-flex align-items-center justify-content-between">
														<p>{{$returnArrFirstItem['sI'][0]['da']['city']}} to {{$returnArrFirstItem['sI'][0]['aa']['city']}} , Date: <?php $dt = explode("T", $returnArrFirstItem['sI'][0]['dt']);
																																									$date = new DateTime($dt[0]);
																																									echo $date->format('d-M'); ?></p>
														<p>{{ hoursandmins($returnArrFirstItem['sI'][0]['duration']) }}</p>
													</div>
													<div class="row align-items-center justify-content-between spicejet-sg">
														<div class="col-lg-6">
															<img src="{{url('public/airlines_logo')}}/{{$ftr['logo_details']->airlines_logo}}" alt="flight-logo">
														</div>
														<div class="col-lg-6">
															<p>{{ $returnArrFirstItem['sI'][0]['fD']['aI']['name']}} | {{ $returnArrFirstItem['sI'][0]['fD']['aI']['code'] }} {{ $returnArrFirstItem['sI'][0]['fD']['fN']}}</p>
														</div>
													</div>
													<div class="row align-items-center mumbai-india">
														<div class="col-lg-4">
															<h6><?php $dt = explode("T", $returnArrFirstItem['sI'][0]['dt']);
																echo $dt[1]; ?> </h6>
															<!-- <p>Tue, 09 Mar 21</p> -->
															<p>{{$returnArrFirstItem['sI'][0]['da']['city']}}, {{$returnArrFirstItem['sI'][0]['da']['country']}} </p>
														</div>
														<div class="col-lg-4">
															<p><b>{{ hoursandmins($returnArrFirstItem['sI'][0]['duration']) }}</b></p>
														</div>
														<div class="col-lg-4">
															<h6><?php $dt = explode("T", $returnArrFirstItem['sI'][0]['at']);
																echo $dt[1]; ?></h6>
															<!-- <p>Tue, 09 Mar 21</p> -->
															<p><span>{{$returnArrFirstItem['sI'][0]['aa']['city']}}, {{$returnArrFirstItem['sI'][0]['aa']['country']}} </span></p>
														</div>
													</div>
													<div class="row text-center baggage">
														<div class="col-lg-4">
															<h6>BAGGAGE :</h6>
															<p>ADULT</p>
														</div>
														<div class="col-lg-4">
															<h6>CHECK IN</h6>
															<p>{!!$returnArrFirstItem['totalPriceList'][0]['fd']['ADULT']['bI']['iB']!!}<br> (1 piece only)</p>
														</div>
														<div class="col-lg-4">
															<h6>CABIN</h6>
															<p>{!!$returnArrFirstItem['totalPriceList'][0]['fd']['ADULT']['bI']['cB']!!}<br> (1 piece only)</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-fare-summary" role="tabpanel" aria-labelledby="pills-fare-summary-tab">
										<p>Total: &#8377; {{$onwardArrFirstItem['totalPriceList'][0]['fd']['ADULT']['fC']['TF']+$returnArrFirstItem['totalPriceList'][0]['fd']['ADULT']['fC']['TF']}}</p>
										<p>Base Fare: &#8377; {{$onwardArrFirstItem['totalPriceList'][0]['fd']['ADULT']['fC']['BF']+$returnArrFirstItem['totalPriceList'][0]['fd']['ADULT']['fC']['BF']}}</p>
										<p>Surcharges: &#8377; {{$onwardArrFirstItem['totalPriceList'][0]['fd']['ADULT']['fC']['TAF']+$returnArrFirstItem['totalPriceList'][0]['fd']['ADULT']['fC']['TAF']}}</p>
									</div>
									<div class="tab-pane fade" id="pills-date-change" role="tabpanel" aria-labelledby="pills-date-change-tab">
										<?php 
										
										if(Session::has('onword_review')):
										$fareRules = Session::get('onword_review')[0];
										if (!empty($fareRules)) :
										?>
											<p><b>Policy</b><br>{{$fareRules['policy']}}</p>
											<p><b>Date Change Policy</b><?php echo str_replace('__nls__', '<br>', $fareRules['dateChangePolicy']); ?></p>
										<?php endif; 
											endif;?>
									</div>
									<div class="tab-pane fade" id="pills-cancellation" role="tabpanel" aria-labelledby="pills-cancellation-tab">
										<?php if(Session::has('onword_review')):
											$fareRules = Session::get('onword_review')[0];
										if (!empty($fareRules)) :
										?>
											<p><b>Policy</b><br>{{$fareRules['policy']}}</p>
											<p><b>Cancellation Policy</b><?php echo str_replace('__nls__', '<br>', $fareRules['cancellationPolicy']); ?></p>
										<?php endif; 
										endif;
										?>

									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>

</section>
<!-- <input type="hidden" id="sort_field" value="price-sort"> -->
<input type="hidden" id="sort_order" value="asc">
@endsection
@section('scripts')

<script type="text/javascript">
	function find_rv(id, type) {
		var form_data = {
			'id': id,
			'type': type,
			'_token': "{{csrf_token()}}" //in laravel
		};
		$.ajax({
			url: "{{route('get-review-details')}}",
			type: "POST",
			async: true,
			data: form_data,
			success: function(data) {
				// var data = $.parseJSON(data);
				// var html=data['policy']+"<br>"+data['dateChangePolicy'];
				// $('#tab-date-change').text(html);
				// alert(data['policy']);
				// alert(data['dateChangePolicy']);
				// alert(data['cancellationPolicy']);
			},
			error: function(request, status, error) {
				console.log("Error is: " + request.responseText);
			}
		});
	}
	$(document).ready(function() {
		$('#showDetails').on('click', function() {
			//$('#show-hide-data').show();
			if ($('#show-hide-data').is(":visible")) {
				$('#show-hide-data').hide();
			} else {
				$('#show-hide-data').show();
			}
		});
		//pessinger count
		$(document).on("click", ".flight-div .qtyInc, .flight-div .qtyDec", function() {
			calculate_passinger();
		});

		function calculate_passinger() {
			var adults = $('.flight-div').find(".adults").val();
			var childrens = $('.flight-div').find(".children").val();
			var Infants = $('.flight-div').find(".Infants").val();
			console.log("adults" + adults + "childrens" + childrens + "Infants" + Infants);
			var sum_flight = Number(adults) + Number(childrens) + Number(Infants);
			// alert(sum_flight);
			$(".retrunflightlist").html(sum_flight);
			$(".hidden_total").val(sum_flight);
		}
		calculate_passinger();


		var lastDate;
		$(document).on("change", "#choiceTripType", function() {
			if (lastDate == null) {
				lastDate = $('#returEndDatePicker').val();
			}
			if ($("#choiceTripType").val() == "oneway") {
				$("#return-date").hide();
				// alert(lastDate);
				$('#returEndDatePicker').val("").datepicker("update");

			}
			if ($("#choiceTripType").val() == "return") {
				$("#return-date").show();
				// alert(lastDate);
				$("#returEndDatePicker").datepicker("setDate", lastDate);
				// if ($("#endDatePicker").is(":visible")) {
				// }
			}
		});

		function basicSorting(className, ascFnctnName, descFnctnName) {
			// alert(className+"/"+ascFnctnName);
			$('#sort_field').val(className);
			var prevOrder = $('#sort_order').val();
			var newOrder = (prevOrder == 'asc') ? 'desc' : 'asc';
			$('#sort_order').val(newOrder);
			$('.sort-by-Section').find('i').removeClass('fa-long-arrow-down');
			$('.sort-by-Section').find('i').removeClass('fa-long-arrow-up');
			if (newOrder == 'asc') {
				$('.' + className).find('i').removeClass('fa-long-arrow-down').addClass('fa-long-arrow-up');
				$(".sort_return_results .card-item").sort(ascFnctnName).appendTo('.sort_return_results');
				$(".sort_return_results1 .card-item").sort(ascFnctnName).appendTo('.sort_return_results1');
			} else {
				$('.' + className).find('i').removeClass('fa-long-arrow-up').addClass('fa-long-arrow-down');
				$(".sort_return_results .card-item").sort(descFnctnName).appendTo('.sort_return_results');
				$(".sort_return_results1 .card-item").sort(descFnctnName).appendTo('.sort_return_results1');
			}
		}
		//arrival sorting start
		function sort_arrival_asc(a, b) {
			return ($(b).data('flight-arrival')) < ($(a).data('flight-arrival')) ? 1 : -1;
		}

		function sort_arrival_desc(a, b) {
			return ($(b).data('flight-arrival')) > ($(a).data('flight-arrival')) ? 1 : -1;
		}
		$(document).on('click', '.arrival-sort', function() {
			basicSorting('arrival-sort', sort_arrival_asc, sort_arrival_desc);
		});
		//arrival sorting end

		//departure sorting start
		function sort_departure_asc(a, b) {
			return ($(b).data('flight-departure')) < ($(a).data('flight-departure')) ? 1 : -1;
		}

		function sort_departure_desc(a, b) {
			return ($(b).data('flight-departure')) > ($(a).data('flight-departure')) ? 1 : -1;
		}
		$(document).on('click', '.departure-sort', function() {
			basicSorting('departure-sort', sort_departure_asc, sort_departure_desc);
		});
		//departure sorting end
		//duration sorting start
		function sort_duration_asc(a, b) {
			return ($(b).data('flight-duration')) < ($(a).data('flight-duration')) ? 1 : -1;
		}

		function sort_duration_desc(a, b) {
			return ($(b).data('flight-duration')) > ($(a).data('flight-duration')) ? 1 : -1;
		}
		$(document).on('click', '.duration-sort', function() {
			basicSorting('duration-sort', sort_duration_asc, sort_duration_desc);
		});
		//duration sorting end
		//price sorting start
		function sort_price_asc(a, b) {
			return ($(b).data('flight-min-price')) < ($(a).data('flight-min-price')) ? 1 : -1;
		}

		function sort_price_desc(a, b) {
			return ($(b).data('flight-min-price')) > ($(a).data('flight-min-price')) ? 1 : -1;
		}
		$(document).on('click', '.price-sort', function() {
			basicSorting('price-sort', sort_price_asc, sort_price_desc);
		});
		basicSorting('price-sort', sort_price_asc, sort_price_desc);
		basicSorting('price-sort', sort_price_asc, sort_price_desc);
		//price sorting end
	});


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