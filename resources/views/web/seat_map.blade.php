@extends('layouts.web')
@section('content')
<?php //echo '<pre>'; print_r(Auth::user()); die;?>
<section class="ancillary-section section--padding">
	<div class="container">
		<div class="row">
			<div class="ancillary-block">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="">
						<a class="nav-item nav-link active" id="seats-tab" data-toggle="tab" href="#seats" role="tab" aria-controls="seats" aria-selected="true">Seats</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link" id="meals-tab" data-toggle="tab" href="#meals" role="tab" aria-controls="meals" aria-selected="false">Meals</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="baggage-tab" data-toggle="tab" href="#baggage" role="tab" aria-controls="baggage" aria-selected="false">Baggage</a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false">Payment</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="seats" role="tabpanel" aria-labelledby="seats-tab">
						<div class="plane">
							<div class="cockpit">
								<h4>Please select a seat</h4>

							</div>
							<div class="fuselage">

							</div>
							<ol class="cabin fuselage">
								<?php if (isset($seatmap_details['tripSeatMap']['tripSeat'])) {
									$x = 1;
									foreach ($seatmap_details['tripSeatMap']['tripSeat'] as $seat) { ?>

										<li class="row row--{{ $x }}">
											<ol class="seats" type="A">
												@foreach($seat['sInfo'] as $st)

												@if(isset($st['isLegroom']))
												@if($st['isLegroom'] == '1')
												<!-- <li class="seat" data-toggle="tooltip" data-placement="top" title="{{$st['code']}} | ₹{{$st['amount']}} ,Extra Legroom Seat" onclick="book_seat($st['code'])"> -->
												@endif
												@else
												<!-- <li class="seat" data-toggle="tooltip" data-placement="top" title="{{$st['code']}}" onclick="book_seat($st['code'])"> -->
												@endif

												@if($st['isBooked'] == '1')
												<li class="seat-booked" data-toggle="tooltip" data-placement="top" title="{{$st['code']}} | ₹{{$st['amount']}} ,Extra Legroom Seat">
													<!-- <input type="checkbox" id="{{$st['code']}}"/> -->
													@else
												<li class="seat" id="{{$st['code']}}" data-toggle="tooltip" data-placement="top" title="{{$st['code']}} | ₹{{$st['amount']}} ,Extra Legroom Seat" onclick="book_seat('<?php echo $st['code']; ?>');">
													<!-- <input type="checkbox" id="{{$st['code']}}" checked="checked"  /> -->
													@endif

													<label for="{{ $st['code'] }}">{{$st['code']}}</label>
												</li>
												@if($x%6==0)
										</li>
										<li class="row row--{{ $x }}">
							</ol>
							<ol class="seats" type="A">
								@endif
								@php $x++ ; @endphp
								@endforeach
							</ol>
							</li>

					<?php }
								} ?>

					</ol>
					<div class="fuselage">

					</div>
						</div>

					</div>
<!-- 


					<div class="tab-pane fade" id="meals" role="tabpanel" aria-labelledby="meals-tab">
						<div class="meals">
							<div class="meals-heading">
								<h4>Select your prefered meal(s)</h4>
								<div class="veg-non-veg-pref form-row">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Veg</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck2">
										<label class="custom-control-label" for="customCheck2">Non Veg</label>
									</div>
								</div>
							</div>
							<div class="meal-block">
								<div class="bag-meal-div">
									<div class="row">
										<div class="col-lg-8 meal-name-img">
											<div class="media">
												<img class="d-flex mr-3" src="img/burger.png" alt="Generic placeholder image">
												<div class="media-body align-self-center">
													<h5 class="mt-0">Veg Burger</h5>
												</div>
											</div>
										</div>
										<div class="col-lg-4 align-self-center meal-price-quantity">
											<form id='myform1' method='POST' action='#' class="d-flex">
												<h6 class="price mr-3"> <i class="fa fa-inr" aria-hidden="true"></i> 78</h6>
												<div class="add-more-div d-flex">
													<input type='button' value='-' class='qtyminus' field='quantity' />
													<input type='text' name='quantity' value='0' class='qty' />
													<input type='button' value='+' class='qtyplus' field='quantity' />
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="bag-meal-div">
									<div class="row">
										<div class="col-lg-8 meal-name-img">
											<div class="media">
												<img class="d-flex mr-3" src="img/sandwich-img.png" alt="meal-image">
												<div class="media-body align-self-center">
													<h5 class="mt-0">Veg Sandwich</h5>
												</div>
											</div>
										</div>
										<div class="col-lg-4 align-self-center meal-price-quantity">
											<form id='myform2' method='POST' action='#' class="d-flex">
												<h6 class="price mr-3"> <i class="fa fa-inr" aria-hidden="true"></i> 120</h6>
												<div class="add-more-div d-flex">
													<input type='button' value='-' class='qtyminus' field='quantity' />
													<input type='text' name='quantity' value='0' class='qty' />
													<input type='button' value='+' class='qtyplus' field='quantity' />
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="baggage" role="tabpanel" aria-labelledby="baggage-tab">
						<div class="bags">
							<div class="meals-heading">
								<h4>Select your extra baggage <small> You can choose upto two</small> </h4>
							</div>
							<div class="meal-block">
								<div class="bag-meal-div">
									<div class="row">
										<div class="col-lg-8 bag-img">
											<div class="media">
												<img class="d-flex mr-3" src="img/single-bag.png" alt="Generic placeholder image">
												<div class="media-body align-self-center">
													<h5 class="mt-0">Additional 5 KG</h5>
												</div>
											</div>
										</div>
										<div class="col-lg-4 align-self-center bag-price-quantity">

											<form id='myform1' method='POST' action='#' class="d-flex">
												<h6 class="price mr-3"><i class="fa fa-inr" aria-hidden="true"></i> 2000</h6>
												<div class="add-more-div d-flex">

													<input type='button' value='-' class='qtyminus' field='quantity' />
													<input type='text' name='quantity' value='0' class='qty' />
													<input type='button' value='+' class='qtyplus' field='quantity' />
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="bag-meal-div">
									<div class="row">
										<div class="col-lg-8 bag-img">
											<div class="media">
												<img class="d-flex mr-3" src="img/dubble-bag.png" alt="Generic placeholder image">
												<div class="media-body align-self-center">
													<h5 class="mt-0">Additional 10 KG</h5>
												</div>
											</div>
										</div>
										<div class="col-lg-4 align-self-center bag-price-quantity">
											<form id='myform2' method='POST' action='#' class="d-flex">
												<h6 class="price mr-3"><i class="fa fa-inr" aria-hidden="true"></i> 3800</h6>
												<div class="add-more-div d-flex">

													<input type='button' value='-' class='qtyminus' field='quantity' />
													<input type='text' name='quantity' value='0' class='qty' />
													<input type='button' value='+' class='qtyplus' field='quantity' />
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="bag-meal-div">
									<div class="row">
										<div class="col-lg-8 bag-img">
											<div class="media">
												<img class="d-flex mr-3" src="img/tripple-bag.png" alt="Generic placeholder image">
												<div class="media-body align-self-center">
													<h5 class="mt-0">Additional 15 KG</h5>
												</div>
											</div>
										</div>
										<div class="col-lg-4 align-self-center bag-price-quantity">
											<form id='myform3' method='POST' action='#' class="d-flex">
												<h6 class="price mr-3"><i class="fa fa-inr" aria-hidden="true"></i> 6000</h6>
												<div class="add-more-div d-flex">
													<input type='button' value='-' class='qtyminus' field='quantity' />
													<input type='text' name='quantity' value='0' class='qty' />
													<input type='button' value='+' class='qtyplus' field='quantity' />
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->



					<div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
					
					@include('web._razorpay_process',['totalFare'=>$totalFare+$result['baggages_amount']+$result['meals_amount']]) 

				</div>

			</div>
		</div>
	</div>
</section>

<script src="{{asset('public/web/js/jquery-3.4.1.min.js')}} "></script>
<script>
	jQuery(document).ready(function() {
		// This button will increment the value
		$('.qtyplus').click(function(e) {
			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			fieldName = $(this).attr('field');
			// Get its current value
			var currentVal = parseInt($('input[name=' + fieldName + ']').val());
			// If is not undefined
			if (currentVal == 24) {
				$('input[name=' + fieldName + ']').val(currentVal);
			} else if (!isNaN(currentVal)) {
				// Increment
				$('input[name=' + fieldName + ']').val(currentVal + 1);
			} else {
				// Otherwise put a 0 there
				$('input[name=' + fieldName + ']').val(0);
			}
		});
		// This button will decrement the value till 0
		$(".qtyminus").click(function(e) {
			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			fieldName = $(this).attr('field');
			// Get its current value
			var currentVal = parseInt($('input[name=' + fieldName + ']').val());
			// If it isn't undefined or its greater than 0
			if (!isNaN(currentVal) && currentVal > 0) {
				// Decrement one
				$('input[name=' + fieldName + ']').val(currentVal - 1);
			} else {
				// Otherwise put a 0 there
				$('input[name=' + fieldName + ']').val(0);
			}
		});

		$('[data-toggle="tooltip"]').tooltip();
	});

	var booked = 0;

	function book_seat(id) {
		if (<?php echo $max_seats; ?> > booked) {
			if ($('#' + id).hasClass('seat')) {
				$('#' + id).removeClass("seat");
				$('#' + id).addClass("seat-booked");
				$('#' + id).addClass("mine-color");
				booked++;
			} else {
				$('#' + id).addClass("seat");
				$('#' + id).removeClass("seat-booked");
				booked--;
			}

		} else if (<?php echo $max_seats; ?> == booked) {
			if ($('#' + id).hasClass('seat-booked')) {
				$('#' + id).addClass("seat");
				$('#' + id).removeClass("seat-booked");
				booked--;
			}

		}
		console.log(booked);
	}
</script>

@endsection