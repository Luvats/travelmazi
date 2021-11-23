@extends('layouts.web')
@section('content')
<!-- ================================
    START hotel list box AREA
================================= -->
<section class="table-holiday-area table-holiday-area-new">
	<div class="container">				
		<div class="contact-form-action hotel_destination">
			<form action="{{url('/visa_search')}}" method="post" class="row align-items-center destination-hotel">
				@csrf
				<!-- end col-lg-3 -->
                <div class="col-lg-3 pr-0">
                    <div class="input-box">
                        <label class="label-text">DESTINATION</label>
                        <div class="form-group background-white">
                            <select id="destination" class="js-example-basic-single" name="destination" class="form-control" required>
                                @if(isset($visa))
                                    @foreach($visa as $visas)  
                                        <option value="{{$visas->destination}}" {{ $visas->destination == $going_to ? 'selected="selected"' : '' }}>{{ $visas->destination}}</option>
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
							<!-- <span class="la la-calendar form-icon"></span> -->
							<input class="date-range form-control" type="text" name="value_from_start_visadate" value="{{ $departure_date_input }}" data-datepicker="separateRangeVisa">
						</div>
					</div>
				</div><!-- end col-lg-3 -->
				<div class="col-lg-2 pr-0">
					<div class="input-box">
						<label class="label-text">RETURN</label>
						<div class="form-group">
							<!-- <span class="la la-calendar form-icon"></span> -->
							<input class="date-range form-control" name="value_from_end_visadate" type="text" name="daterange-single" value="{{ $return_date_input }}" data-datepicker="separateRangeVisa">
						</div>
					</div>
				</div><!-- end col-lg-3 -->
				<div class="col-lg-3 pr-0 travel-box_flight">
						<div class="input-box">
							<label class="label-text">TRAVELLERS</label>
							<div class="form-group">
								<div class="dropdown dropdown-contain">
									<a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
										<span>Travellers <span class="qtyTotal guestTotal_9">0</span></span>
									</a>
									<div class="dropdown-menu dropdown-menu-wrap">
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Travellers</label>
												<div class="qtyBtn d-flex align-items-center">
                                                    <input type="text" class="visa_traveller" name="visa_traveller" value="{{$traveller}}">
                                                </div>
											</div>
										</div>
									</div><!-- end dropdown -->
								</div>
							</div>
						</div><!-- end col-lg-3 -->
					</div><!-- end col-lg-3 -->
				<div class="col-lg-2 search-hotel">
					<button type="submit" class="theme-btn text-center">Search Now</button>
					<!-- <a href="#" class="theme-btn text-center">Search Now</a> -->
				</div>
			</form>
		</div>
	</div><!-- end container -->
</section>	<!-- end section -->
<!-- ================================
    End hotel list box AREA
================================= -->
<div class="mobile-content-wrapper">
	<div class="container">
		<div class="why-visa">
			<p class="why-visa-heading">Why get a visa from us?</p>
			<div class="why-Visa-container">
				<div class="why-visa-content">
					<span class="content-text"><img src="{{asset('public/web/images/security.png')}}" alt="document" class="img-fluid"> Submit your Visa Application worry-free. In case Visas are cancelled by the Embassy later due to COVID-19, we’ll refund your fee if not applied to the consulate.</span>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="sub-container">
			<form action="{{ url('/visa_proceed')}}" method="post">
				@csrf
				<div class="left-section">
					<section class="white-card">
						<h2 class="font22 blackText appendBottom5">Visa Type</h2>
						<p class="appendBottom10 greyDr">Select Visa Type</p>
						<div class="visaContentRow appendBottom20">
							<div class="visaSelectWrapper">
								<div class="customSelect visaTypeSelectBox">
									<select name="visa_type">
										@foreach($visa_type as $tp)
										  	<option value="{{ $tp->type}}">{{$tp->type}}</option>
										  	
										@endforeach
									</select>
								</div>
								<p class="font14 appendTop10 grey">Visa processing takes 
									<span class="latoBold blackText">{{$visa_details->working_days}} Working Days</span>
								</p>
								<input type="hidden" name="working_day" class="working_day" value="{{$visa_details->working_days}}">
								<input type="hidden" name="destination" class="destination" value="{{$visa_details->destination}}">
								<input type="hidden" name="traveller" class="traveller" value="{{$traveller}}">
								<input type="hidden" name="visa_validity" class="visa_validity" value="{{$visa_details->visa_validity}}">
								<input type="hidden" name="embassy_fee" class="embassy_fee" value="{{$visa_details->embassy_fee}}">
								<input type="hidden" name="service_fee" class="service_fee" value="{{$visa_details->service_fee}}">
								<input type="hidden" name="gst_amount" class="gst_amount" value="{{$visa_details->gst_amount}}">
								<input type="hidden" name="date_of_entry" class="date_of_entry" value="{{$finaldeparture}}">
								<input type="hidden" name="date_of_exit" class="date_of_exit" value="{{$finalreturn}}">
							</div>
							<div class="priceWrapper">
								<p class="priceTxt">₹ {{ $traveller * $visa_details->embassy_fee }}</p>
								<p class="font12 grey appendTop5">For {{ $traveller }} Traveller</p>
								
							</div>
						</div>
						<div class="list-circle">
							<ul>
								<li>You can enter {{ $visa_details->destination }} once and stay for maximum <b><font color="#249995">{{ $visa_details->visa_validity }} days</font></b> from your first date of entry.
									<ul>
										<li>You have to enter within <b><font color="#249995">{{ $visa_details->visa_approval_day }} days</font></b> from your date of visa approval.</li>
									</ul>
								</li>
								<li>TravelMazi does not undertake any guarantee of visa approval , Visa Approval is solely at the discretion of the embassy.</li>
							</ul>
						</div>
						<div class="cardBottomBanner">
							<p class="impMsg">Apply before 8 Mar for travel starting 22 Apr</p>
						</div>
					</section>
					<div class="travelPurpose white-card">
						<div class="appendTop20">
							<div class="VisaInfoSection">
								<div class="VisaSubinfoSection">
									<div class="docListWrapper">
										<div class="headerWrap">
											<h3 class="font18 blackText appendBottom5">List of Documents</h3>
										</div>
										<div class="docListInfoTag appendBottom10">
											<div class="makeFlex row hrtlCenter appendBottom5">
												<span class="visaSprite docIcon"></span>
												<div class="bannerContent">
													<img src="{{asset('public/web/images/visasprite.png')}}" alt="document" class="img-fluid">
													<span class="font14 blackText LH1-2">All the documents have to be uploaded on TravelMazi Website/App. </span>
												</div>
											</div>
										</div>
									</div>
									<div class="stepRow">
										<h4>IDENTITY</h4>
										<div class="appendTop20">
											<div class="stepContent">
												<div class="rowLeftContent">
													<div class="stepIconWrapper">
														<img src="https://imgak.mmtcdn.com/visa/images/ic_passportfront.png" alt="Passport Front">
													</div>
													<div>
														<div class="listHeading">
															<h5>Passport Front</h5>
														</div>
														<div class="list-circle marLeft18">
															<ul>
																<li>Upload colored passport copies.</li>
																<li>Passport should be valid {{ $visa_details->passport_valid_day }} months from the date of entry in {{ $visa_details->destination }}.</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="stepContent">
												<div class="rowLeftContent">
													<div class="stepIconWrapper">
														<img src="https://imgak.mmtcdn.com/visa/images/ic_photo.png" alt="Photograph">
													</div>
													<div>
														<div class="listHeading">
															<h5>Photograph</h5>
														</div>
														<div class="list-circle marLeft18">
															<ul>
																<li>Upload photograph as per mentioned specification.</li>
																<li>4cm X 6cm in dimensions 
																	<ul>
																		<li>60%-70% face appearance in white background.</li>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="stepRow">
										<h4>VOUCHERS</h4>
										<div class="appendTop20">
											<div class="stepContent">
												<div class="rowLeftContent">
													<div class="stepIconWrapper">
														<img src="https://imgak.mmtcdn.com/visa/images/flight.png" alt="E-Tickets">
													</div>
													<div>
														<div class="listHeading">
															<h5>E-Tickets</h5>
														</div>
														<div class="list-circle marLeft18">
															<ul>
																<li>Upload flight tickets from India to {{ $visa_details->destination }} and back.</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="white-card" id="travllerCard">
						<div class="travellers-info">
							<div class="detail-traveller-info-heading mpl-header">
								<p>Traveller Names </p>
							</div>
						</div>
						@for ($x = 1; $x <= $traveller; $x++)
						<div class="upload-document-section">
							<h3 class="appendBottom15">Traveller {{ $x }}</h3>
							<div class="form-container form-main-section">
								<div class="traveller-mobile">
									<div class="FormRow clearfix">
										<div class="travller-field-container">
											<div class="typeAheadDropDown">
												<label class="input-label-text">Given Name*</label>
												<input name="first_name[]" autocomplete="off" class="tvlrInput" type="text" value="" required="">
											</div>
										</div>
										<div class="travller-field-container">
											<div>
												<label class="input-label-text">Surname</label>
												<input autocomplete="off" class="tvlrInput" type="text" name="last_name[]" maxlength="100000000000" value="" required="">
											</div>
										</div>
										<div class="travller-field-container">
											<div>
												<label class="input-label-text">Age*</label>
												<input autocomplete="off" class="tvlrInput" type="text" name="age[]" maxlength="3" value="" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');" required="" >
											</div>
										</div>
										<div class="travller-field-container">
											<div>
												<div class="radio-form-field clearfix">
													<label for="Gender*" class="input-label-text">Gender*</label>
													<select class="tvlrInput select-gender" name="gender[]" required="">
														<option value="">Select</option>
														<option value="MALE">Male</option>
														<option value="FEMALE">Female</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endfor
						<div class="TravellerOverlayBtn">
							<!-- <a class="capsuleFillBtn latoBold">PROCEED</a> -->
							<button type="submit" class="capsuleFillBtn theme-btn latoBold">Proceed</button>
						</div>
					</div>
				</div>
			</form>
			<div class="right-section">
				<section class="white-card">
					<h2 class="font14 greyLter latoBlack">STEPS TO GET VISA</h2>
					<ul class="stepsList">
						<li>
							<div class="stepsImg">
								<img src="https://imgak.mmtcdn.com/visa/images/upload.png" alt="Upload Documents">
							</div>
							<div class="stepsContent">
								<p class="font16 blackText latoBold">Upload Documents</p>
								<p class="listContent">Upload soft copy of below mentioned documents and get your visa</p>
							</div>
						</li>
						<li>
							<div class="stepsImg">
								<img src="https://imgak.mmtcdn.com/visa/images/pay.png" alt="Pay Online">
							</div>
							<div class="stepsContent">
								<p class="font16 blackText latoBold">Pay Online</p>
								<p class="listContent">Complete your purchase using a paymode of your choice.</p>
							</div>
						</li>
						<li>
							<div class="stepsImg">
								<img src="https://imgak.mmtcdn.com/visa/images/getvisa.png" alt="Get Your Visa">
							</div>
							<div class="stepsContent">
								<p class="font16 blackText latoBold">Get Your Visa</p>
								<p class="listContent">Keep track of your visa status through My trips and get visa on mail.</p>
							</div>
						</li>
					</ul>
				</section>
				<div class="Visa-top-heading">
					<div class="white-card">
						<div class="apply-step-row"></div>
						<p class="documents-text">* Approval of visa is subject to the decision by the embassy TravelMazi shall not be liable for rejection of visa. Visa processing can be delayed in case additional documents are required</p>
						<p class="policy-text">See 
							<a href="{{ url('visaTerms')}}" target="_blank" rel="noopener noreferrer">Terms &amp; Conditions</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

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
	$(document).ready(function(){
		var visa_traveller = $(".visa_traveller").val();
		var sum        = Number(visa_traveller);

        $(".guestTotal_9").html(sum);

         $(".qtyInc").on("click", function(){
            var visa_traveller = $(".visa_traveller").val();
			var sum        = Number(visa_traveller);

        	$(".guestTotal_9").html(sum);
        });

        $(".qtyDec").on("click", function(){
            var visa_traveller = $(".visa_traveller").val();
			var sum        = Number(visa_traveller);

        	$(".guestTotal_9").html(sum);
        });
	});
</script>	


@endsection
