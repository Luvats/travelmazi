@extends('layouts.web')
@section('content')

<!-- ================================
    START hotel list box AREA
================================= -->
<section class="table-hotel-area table-hotel-area-background">
	
</section>	<!-- end section -->
<!-- ================================
    End hotel list box AREA
================================= -->
<!--Visa Detail-->
<div class="visa_process">
    <div class="container">
        <div class="row">
            <div class="col-md-8 visa-detail-div">
                <h2>Visa Details</h2>
				<div class="accordion accordion-item visa-detail-accordion " id="accordionExample2">
					<div class="card">
						<div class="card-header" id="faqHeadingFour">
							<h2 class="mb-0">
								<button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseFour" aria-expanded="true" aria-controls="faqCollapseFour">
									<h5 class="ml-3">{{ $destination }}</h5>
									<i class="la la-minus"></i>
									<i class="la la-plus"></i>
								</button>
							</h2>
						</div>
						<div id="faqCollapseFour" class="collapse show" aria-labelledby="faqHeadingFour" data-parent="#accordionExample2">
							<div class="card-body col-lg-12">
								<div class="row">
									<div class="col-lg-4 responsive-column">
										<div class="single-tour-feature d-flex align-items-center mb-3">
											
											<div class="single-feature-titles">
												<p  class="visaInfoHeding gray-text">DATE OF ENTRY</p>
												<p class="visaInfoDtls title font-size-15 font-weight-medium">
													
													<?php echo $VisaProcess['date_of_entry'];?>
													
												</p>
											</div>
										</div><!-- end single-tour-feature -->
									</div><!-- end col-lg-4 -->
									<div class="col-lg-4 responsive-column">
										<div class="single-tour-feature d-flex align-items-center mb-3">
											
											<div class="single-feature-titles">
												<p  class="visaInfoHeding gray-text">DATE OF EXIT</p>
												<p class="visaInfoDtls title font-size-15 font-weight-medium">
													
													<?php echo $VisaProcess['date_of_exit'];?> 
													
												</p>
											</div>
										</div><!-- end single-tour-feature -->
									</div><!-- end col-lg-4 -->
									<div class="col-lg-4 responsive-column">
										<div class="single-tour-feature d-flex align-items-center mb-3">
											
											<div class="single-feature-titles">
												<p class="visaInfoHeding gray-text">TYPE OF VISA </p>
												<p class="visaInfoDtls title font-size-15 font-weight-medium">{{ $VisaProcess['visa_type'] }}</h3>
												
											</div>
										</div><!-- end single-tour-feature -->
									</div>
									<div class="col-lg-8 responsive-column">
										<div class="single-tour-feature d-flex align-items-center mb-3">
											
											<div class="single-feature-titles">
												<p  class="visaInfoHeding gray-text">VALIDITY</p>
												<p class="visaInfoDtls title font-size-15 font-weight-medium">
												You have to make your first entry within {{ $VisaProcess['visa_validity']}} Days days from your date of visa approval.</h3>
											</div>
										</div><!-- end single-tour-feature -->
									</div><!-- end col-lg-4 -->
									<div class="col-lg-4 responsive-column">
										<div class="single-tour-feature d-flex align-items-center mb-3">
											
											<div class="single-feature-titles">
												<p class="visaInfoHeding gray-text">PROCESSING TIME</p>
												<p class="visaInfoDtls title font-size-15 font-weight-medium">{{ $VisaProcess['working_day'] }} Working Days </h3>
												
											</div>
										</div><!-- end single-tour-feature -->
									</div>
								</div>
							</div>
						</div>
					</div><!-- end card -->
				</div>
				<div class="white-box-div my-3 py-3">
					<div class="row">
						<div class="col-lg-12">
							<h5>Upload Documents & Fill Form</h5>
							<div class="all-documents d-flex align-items-center">
								<img src="{{asset('public/web/images/visasprite.png')}}" alt="document" class="img-fluid">
								<p>All the documents have to be uploaded on TravelMazi Website/App.</p>
							</div>
						</div>
					</div>
						<div class="row align-items-center my-3">
							<div class="col-lg-4">
								<p class="grey_name">TRAVELLER NAMES</p>
								@foreach($VisaProcess['first_name'] as $fd)
									<div class="name-img d-flex align-items-center ">
										<img src="{{asset('public/web/images/admin-img.png')}}" alt="document" class="img-fluid">
										<span class="travellerName">{{ ucfirst($fd) }}</span>
									</div>
								@endforeach

								@foreach($VisaProcess['last_name'] as $ln)
									<span class="travellerName">{{ $ln}}</span>
								@endforeach
							</div>
							<div class="col-lg-2 ">
								<p class="grey_name">GENDER</p>
								@foreach($VisaProcess['gender'] as $fd)
									<div class="name-img">
										<span class="grey font16">{{ strtoupper($fd) }}</span>
									</div>
									@endforeach
								
							</div>
							<div class="col-lg-1 ">
								<p class="grey_name">AGE</p>
								@foreach($VisaProcess['age'] as $fds)
									<div class="name-img">
										<span class="grey font16">{{ $fds }}</span>
									</div>
									@endforeach
								
							</div>
							@if(!isset($VisaApplication))
								<div class="col-lg-5">
									<p class="grey_name">DOCUMENT STATUS</p>
									@if(isset($VisaProcess['first_name']))
										@foreach($VisaProcess['first_name'] as $fds)
											<div class="name-img d-flex align-items-center  justify-content-between">
												<button class="button">3/3 REQUIRED</button>
												<a href="{{ url('/uploadVisaMain')}}/{{ $id }}" class="button upload-button documentUpload">upload</a>
												<!-- <button class="button upload-button">upload</button> -->
											</div>
										@endforeach
									@endif
								</div>
							@else
								<div class="col-lg-5">
									<p class="grey_name">DOCUMENT STATUS</p>
									@if(isset($VisaProcess['first_name']))
										@foreach($VisaProcess['first_name'] as $fds)
											<div class="name-img d-flex align-items-center  justify-content-between">
												<!-- <button class="button">3/3 REQUIRED</button> -->
												<button class="button documentComplete">Complete</button>
												<!-- <a href="#" class="button documentComplete">Complete</a> -->
												<!-- <button class="button upload-button">upload</button> -->
											</div>
										@endforeach
									@endif
								</div>
							@endif
								
						</div>
				</div>
				<div class="white-box-div my-3 py-3">
					<div class="row">
						<div class="col-lg-12 confirm-contect-detail">
							<h2>Contact Details</h2>
							<p class="reviewContactTopInfo"><span class="darkText">Confirm your contact details,</span> All communications would be shared on this email id and phone number.</p>
						</div>
					</div>
					<form>
						<div class="row d-flex align-items-center">
							<div class="col-lg-4">
								<div class="form-group">
									<label class="label-text" for="formGroupExampleInput">Email<span class="important_mark">*</span></label>
									<input type="text" class="form-control" placeholder="Your email id">
								</div>
							</div>
							<div class="col-sm-5 ">
								<div class="form-group">
									<label class="label-text" for="formGroupExampleInput">Phone Number<span class="important_mark">*</span></label>
									<input type="text" class="form-control" placeholder="Your phone number">
								</div>
							</div>
							<hr class="form-hr">
							<!-- <div class="col-lg-12">
								<label><input type="checkbox" name="remember"> <span class="GSTInfoTxt">Want to add GSTIN number</span></label>
							</div> -->
						</div>
					</form>
				</div>
				<div class="white-box-div my-3 py-3">
					<div class="row">
						<div class="col-lg-12">
							<div class="pay-now d-flex align-items-center getVisaInfo">
								 <img src="{{asset('public/web/images/calendar.png')}}" alt="document" class="img-fluid">
								 <p class="getVisaInfoTxt"> Pay now and Get Visa by <span class="getVisaDate"> 8th Mar</span></p>
							</div>
							<p class="visaApprovalInfo">By clicking on the Continue to Pay button below to proceed with the booking, I understand that approval of visa is subject to the decision by the embassy & TravelMazi shall not be liable for rejection of visa. Visa processing can be delayed in case additional documents are required. I agree to the<strong class="Conditions"><a class="linkTxt latoBold" href="{{url('visaTerms')}}" target="_blank" rel="noopener noreferrer"> Visa Terms & Conditions</a>, <a class="linkTxt latoBold" href="{{url('visaTerms')}}" target="_blank" rel="noopener noreferrer">User Agreement</a>, <a class="linkTxt latoBold" href="{{url('visaTerms')}}" target="_blank" rel="noopener noreferrer">Terms of Service</a></strong>  and <strong class="Conditions"> <a class="linkTxt latoBold" href="{{url('visaTerms')}}" target="_blank" rel="noopener noreferrer">Privacy Policy</a> </strong>of TravelMazi.</p>
						</div>
					</div>
				</div>
				<div class="con-to-pay">
					<a href="{{url('/payment')}}">
						<button class="" button>CONTINUE TO PAY</button>
					</a>
					
				</div>
            </div>
			<div class="col-md-4">
				<div class="Visa-top-heading">
					<h2>Price Breakup</h2>
				</div>
				<div class="price-break-wrapper white-card-right appendBottom0">
					<div class="breakup-row">
						<div class="flexOne">
							<p class="heading-breakup">Visa Embassy Fee</p>
						</div>
						<p class="breakup-price">₹ {{ $VisaProcess['embassy_fee'] }}</p>
					</div>
					<div class="breakup-row">
						<div class="flexOne">
							<p class="heading-breakup">Service Fee</p>
						</div>
						<p class="breakup-price">₹ {{ $VisaProcess['service_fee'] }}</p>
					</div>
					<div class="breakup-row">
						<div class="flexOne">
							<p class="heading-breakup">GST Amount</p>
						</div>
						<p class="breakup-price">₹ {{ $VisaProcess['gst_amount'] }}</p>
					</div>
					<div class="breakup-row-total">
						<div class="flexOne">
							<p class="heading-breakup">Total Amount</p>
							<p class=" textLeft lightText font12">For {{ $VisaProcess['traveller']}} travellers</p>
						</div>
						<p class="breakup-price">₹ {{ $VisaProcess['service_fee'] + $VisaProcess['gst_amount'] + $VisaProcess['embassy_fee'] }}</p>
					</div>
				</div>
                
               <!--  <div class="meals-assignment-details">
                	<div class="fare-assignment-details">
                        <div class="row">
                        	<div class="col-md-6 pl-0">
                                
                                <h6>Visa Embassy Fee</h6>
                                <h6>Service Fee</h6>
                                <h6>GST Amount</h6>
                            </div>
                            <div class="col-md-6 pr-0">
                               <h6>₹ 5400.00</h6>
                            	<h6>₹ 508.00</h6>
                            	<h6>₹ 91.44</h6>
                                
                            </div>
                            
                        </div>
                        <div class="amount-box">
                            <div class="row">
                                
                                <div class="col-md-6 pl-0">
                                    <h4>Total Amount</h4>
                                </div>
                                <div class="col-md-6 pr-0">
                                    <h4>₹ 5999.44</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>


    </div>
</div> 
@endsection