@extends('layouts.web')
@section('content')
<section class="payment-page-section section-space">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="white-box ">
					<div class="row">
						<div class="col-lg-4 payment-tab-left">
							<h5>Payment options</h5>
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

								<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
									<div class="payment-option-tag media">
										<i class="fa fa-credit-card-alt d-flex" ></i>
										<div class="media-body">
											<h6> Credit/Debit/ATM Card</h6>
											<p>Visa, MasterCard, Amex, Rupay And More</p>
										</div>
									</div>
								</a>
								<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
									<div class="payment-option-tag media">
										<i class="fa fa-university d-flex" ></i> 
										<div class="media-body">
											<h6>Net Banking</h6>
											<p>All Major Banks Available</p>
										</div>
									</div>
								</a>
								<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
									<div class="payment-option-tag media">	
										<i class="fa fa-gift d-flex" ></i>
										<div class="media-body">
											<h6>Wallets, Rewards &amp; more</h6>
											<p>Google Pay, Gift cards, Mobikwik, AmazonPay</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 payment-tab-right">
							<div class="tab-content" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
									<div class="credit-card-form-div">  
										<form class="">
											<div class="row">
												<div class="form-group col-lg-12">
													<label for="TextInput">Card Number</label>
													<input type="text" id="TextInput" class="form-control" placeholder="Enter Your Card Number Here">
												</div>
												<div class="form-group col-lg-12">
													<label for="TextInput">Name on Card</label>
													<input type="text" id="TextInput" class="form-control" placeholder="Enter Your Name On Card">
												</div>
												<div class="form-group col-lg-6 ">
													<div class="row no-gutters year-month-div">
														<label for="Select" class="col-lg-12"> Expiry Month & Year</label>
														<select id="Select" class="form-control col-lg-6 select-month" >
															<option> Month</option> 
															<option> January (01)</option> 
															<option> February (02)</option> 
															<option> March (03)</option>
															<option> April (04)</option> 
															<option> May (05)</option>
															<option> June (06)</option>
															<option> July (07)</option> 
															<option> August (08)</option> 
															<option> September (09)</option> 
															<option> October (10)</option> 
															<option> November (11)</option> 
															<option> December (12)</option>
														</select>
														<select id="Select" class="form-control col-lg-6 select-year">
															<option> Year</option>
															<option> 2021</option> 
															<option> 2022</option> 
															<option> 2023</option> 
															<option> 2024</option> 
															<option> 2025</option> 
															<option> 2026</option> 
															<option> 2027</option> 
															<option> 2028</option> 
															<option> 2029</option> 
															<option> 2030</option> 
															<option> 2031</option> 
															<option> 2032</option> 
															<option> 2033</option> 
															<option> 2034</option> 
															<option> 2035</option> 
															<option> 2036</option> 
															<option> 2037</option> 
															<option> 2038</option> 
															<option> 2039</option> 
															<option> 2040</option> 
															<option> 2041</option> 
															<option> 2042</option> 
															<option> 2043</option> 
															<option> 2044</option> 
															<option> 2045</option> 
															
														</select>
													</div>
												</div>
												<div class="form-group col-lg-6">
													<label for="TextInput">Card CVV</label>
													<input type="text" id="TextInput" class="form-control" placeholder="Enter Your Name On Card">
												</div>
												<div class="custom-control custom-checkbox col-lg-12">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">Save my card securely. CVV will not be saved</label>
												</div>
												
												
												<div class="col-lg-12 payable-amount">
													<div class="row">
														<div class="col-lg-6 payable-amount-text ">
															<h6> ₹ 5,080 
															<small class="">DUE NOW</small></h6>
														</div>
														<div class="col-lg-6 payable-amount-btn">
															<button type="submit" class="btn btn-primary">pay now</button>
														</div>
													</div>
													<p class="">By continuing to pay, I understand and agree with the<a href="" target="_blank" rel=""> privacy policy</a>, the <a href="" target="_blank" rel=""> user agreement</a> and<a href="" target="_blank" rel=""> terms of service</a> of MaziCab.</p>
												</div>
												
											</div>
										</form>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
									<div class="form-group">
										<div class="input-group">
										  <div class="input-group-prepend">
											<button class="btn btn-success" type="button"><i class="fa fa-search" ></i></button>
										  </div>
										  <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
										</div>
									</div>
									<div class="select-bank">
										<ul>
											<li>
												<div class="custom-control custom-radio">
												  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
												  <label class="custom-control-label" for="customRadio1">State Bank of India</label>
												</div>
												
											</li>
											<li>
											<div class="custom-control custom-radio">
												  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
												  
												  <label class="custom-control-label" for="customRadio2">HDFC Bank</label>
												</div>
											</li>
											<li>
												<div class="custom-control custom-radio">
												  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
												  <label class="custom-control-label" for="customRadio1">ICICI Bank</label>
												</div>
												
											</li>
											<li>
											<div class="custom-control custom-radio">
												  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
												  
												  <label class="custom-control-label" for="customRadio2">Axis Bank</label>
												</div>
											</li>
										</ul>
										<p class=""> <a href="">+ View all banks</a></p>
									</div>
									<div class="col-lg-12 payable-amount">
										<div class="row">
											<div class="col-lg-6 payable-amount-text ">
												<h6> ₹ 5,080 
												<small class="">DUE NOW</small></h6>
											</div>
											<div class="col-lg-6 payable-amount-btn">
												<button type="submit" class="btn btn-primary">pay now</button>
											</div>
										</div>
										<p class="">By continuing to pay, I understand and agree with the<a href="" target="_blank" rel=""> privacy policy</a>, the <a href="" target="_blank" rel=""> user agreement</a> and<a href="" target="_blank" rel=""> terms of service</a> of MaziCab.</p>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
									<div class="main-wallets-div">
										<div class="row">
											<div class=" col-lg-4">
												<a href="">
												<div class="wallet-box ">
												<span class="wallet-icon">
													<img alt="" src="{{url('public/web/images/airtel-logo.png')}}" class="paymode-images-icons">
												</span>
												<p class=" text-center">Airtel Money</p>
												</div>
												</a>
											</div>
											<div class=" col-lg-4">
												<a href="">
												<div class="wallet-box ">
													<span class="wallet-icon">
														<img alt="" src="{{url('public/web/images/airtel-logo.png')}}" class="paymode-images-icons">
													</span>
													<p class="text-center">Itz Cash Card</p>
												</div>
												</a>
											</div>
											<div class=" col-lg-4">
												<a href="">
												<div class="wallet-box ">
													<span class="wallet-icon">
													<img alt="" src="{{url('public/web/images/mobiqwik.png')}}" class="paymode-images-icons"></span>
													<p class="text-center">Mobikwik - Up to Rs.1000 SuperCash</p>
												</div>
												</a>
											</div>
											<div class=" col-lg-4">
												<a href="">
												<div class="wallet-box ">
													<span class="wallet-icon">
														<img alt="" src="{{url('public/web/images/airtel-logo.png')}}" class="paymode-images-icons"></span>
													<p class="text-center">PayZapp</p>
												</div>
												</a>
											</div>
											<div class=" col-lg-4">
												<a href="">
												<div class="wallet-box ">
													<span class="wallet-icon">
													<img alt="" src="{{url('public/web/images/airtel-logo.png')}}" class="paymode-images-icons"></span>
													<p class=" text-center">Amazon Pay</p>
												</div>
												</a>
											</div>
											<div class=" col-lg-4">
											<a href="">
												<div class="wallet-box ">
													<span class="wallet-icon">
													</span>
													<p class="font12 text-center">Gift Card</p>
												</div>
											</a>
											</div>
										</div>
									</div>
									<div class="col-lg-12 payable-amount">
										<div class="row">
											<div class="col-lg-6 payable-amount-text ">
												<h6> ₹ 5,080 
												<small class="">DUE NOW</small></h6>
											</div>
											<div class="col-lg-6 payable-amount-btn">
												<button type="submit" class="btn btn-primary">pay now</button>
											</div>
										</div>
										<p class="">By continuing to pay, I understand and agree with the<a href="" target="_blank" rel=""> privacy policy</a>, the <a href="" target="_blank" rel=""> user agreement</a> and<a href="" target="_blank" rel=""> terms of service</a> of MaziCab.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="cabPaymentContOuter left-side">
                    <div class="cabPaymentCont">
                        <input type="hidden" name="driver_id" class="driver_id" value="13">
                        <input type="hidden" name="booking_id" class="booking_id" value="242">
                        <a class="bluePrimarybtn payNow font22 appendBottom10 CabPayNow">Pay ₹ 45 Now</a>
                    </div>
                    <div class="cabPaymentOption">
                        <div class="makeRelative overflowXHidden">
                            <div class="priveUpdateCont shift">
                                <div>
                                    <p class="font16 latoBold appendBottom5">Price updated !</p>
                                    <p class="font12">We have calculated price as per your new drop-off location</p>
                                </div>
                                <div class="noShrink">
                                    <span class="cabSprite crossIcon cursorPointer"></span>
                                </div>
                            </div>
                            <ul class="paymentOption">

                                <li class="">
                                    <span class="radioOuter">
                                        <input type="radio" name="payOption" id="option2">
                                        <label for="option2">
                                            <p class="makeFlex row spaceBetween hrtlCenter flexOne">
                                                <span class="font16 latoBold blackText">Make full payment now</span>
                                                <span class="noShrink latoBold blackText font20 appendLeft10">₹ 45</span>
                                            </p>
                                        </label>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="totalAmount">
                            <div class="borderTop1 paddingTB15">
                                <div class="makeFlex spaceBetween end">
                                    <div>
                                        <p class="latoBlack font16">Total Amount</p>
                                    </div>
                                    <div class="makeRelative">

                                        <span class="latoBlack font28 blackText"> ₹ 45</span>
                                    </div>
                                </div>
                                <div class="makeFlex spaceBetween start paddingTop5 makeRelative">
                                    <p>inclusive of GST</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>
@endsection