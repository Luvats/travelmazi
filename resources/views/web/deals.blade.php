@extends('layouts.web')
@section('content')
<!-- ================================
    START CARD AREA
================================= -->
<section class="table-flight-area">
	<div class="container">
		<div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
			<div class="contact-form-action flight_from">
				
				<form action="#" class="row align-items-center flight-list-form">
					<div class="col-lg-3 pr-0">
						<div class="input-box">
							<label class="label-text">FROM</label>
							<div class="form-group">
								
								<input class="form-control" type="text" placeholder="Bangalore">
							</div>
						</div>
					</div><!-- end col-lg-3 -->
					<div class="col-lg-2">
						<div class="input-box">
							<label class="label-text">TO</label>
							<div class="form-group">
								
								<input class="form-control" type="text" placeholder="Mumbai">
							</div>
						</div>
					</div><!-- end col-lg-3 -->
					<div class="col-lg-2 pr-0">
						<div class="input-box">
							<label class="label-text">DEPARTURE</label>
							<div class="form-group">
								
								<input class="date-range form-control" type="text" name="daterange-single" value="04/28/2020">
							</div>
						</div>
					</div><!-- end col-lg-3 -->
					<div class="col-lg-3 pr-0 travel-box_flight">
						<div class="input-box">
							<label class="label-text">TRAVELLERS</label>
							<div class="form-group">
								<div class="dropdown dropdown-contain">
									<a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
										<span>Passengers <span class="qtyTotal guestTotal_2">0</span></span>
									</a>
									<div class="dropdown-menu dropdown-menu-wrap">
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
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Infants</label>
												<div class="qtyBtn d-flex align-items-center">
													<input type="text" name="qtyInput" value="0">
												</div>
											</div>
										</div>
										<div class="dropdown-item">
											<div class="qty-box d-flex align-items-center justify-content-between">
												<label>Economy</label>
											<select class="select-contain-select">
									
												<option value="2">Business</option>
												<option value="3">First class</option>
											</select>
											</div>
										</div>
										
									</div><!-- end dropdown -->
								</div>
							</div>
						</div><!-- end col-lg-3 -->
					</div><!-- end col-lg-3 -->
					<div class="col-lg-2 pr-0 search-flight">
						<a href="#" class="theme-btn ">Search Now</a>
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
                   
                    <div class="filter-bar d-flex align-items-center justify-content-between short-df">
					<div class="select-contain">
                            <select class="select-contain-select">
                                <option value="1">Short by default</option>
                                <option value="2">Popular Flight</option>
                                <option value="3">Price: low to high</option>
                                <option value="4">Price: high to low</option>
                                <option value="5">A to Z</option>
                            </select>
                        </div><!-- end select-contain -->
                    </div><!-- end filter-bar -->
                </div><!-- end filter-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar mt-0">
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Search Flights</h3>
                        <div class="sidebar-widget-item">
                            <div class="contact-form-action">
                                <form action="#">
                                    
                                    <div class="input-box">
                                        <label class="label-text">Airlines</label>
                                        <div class="form-group">
                                            <div class="select-contain w-auto">
                                                <select class="select-contain-select">
                                                    <option value="1">Air India</option>
                                                    <option value="2">Air France</option>
                                                    <option value="3">Asiana</option>
                                                    <option value="4">Cathay Pacific</option>
                                                    <option value="5">China Southern</option>
                                                    <option value="6">Delta Airlines</option>
                                                    <option value="7">Jet Airways</option>
                                                    <option value="8">Vietnam Airlines</option>
                                                    <option value="9">Qatar Airways</option>
                                                    <option value="10">Singapore Airlines</option>
                                                </select>
                                            </div><!-- end select-contain -->
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">Preferred class</label>
                                        <div class="form-group">
                                            <div class="select-contain w-auto">
                                                <select class="select-contain-select">
                                                    <option value="1">Business</option>
                                                    <option value="2">First Class</option>
                                                    <option value="3">Economy</option>
                                                    <option value="4">Premium Economy</option>
                                                </select>
                                            </div><!-- end select-contain -->
                                        </div>
                                    </div>
                                    <div class="btn-box pt-2">
                                        <a href="#" class="theme-btn">Search Now</a>
                                    </div>
                                </form>
                            </div>
                        </div><!-- end sidebar-widget-item -->
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Filter by Price</h3>
                        <div class="sidebar-price-range">
                            <div class="slider-range-wrap">
                                <div class="price-slider-amount padding-bottom-20px">
                                    <label for="amount2" class="filter__label">Price:</label>
                                    <!-- <input type="text" id="amount2" class="amounts"> -->
                                </div><!-- end price-slider-amount -->
                                <div id="slider-range2"></div><!-- end slider-range -->
                            </div><!-- end slider-range-wrap -->
                            <div class="btn-box pt-4">
                                <button class="theme-btn theme-btn-small " type="button">Apply</button>
                            </div>
                        </div>
                    </div><!-- end sidebar-widget -->
					
					<!-- departure from mumbai -->
					<div class="sidebar-widget arrival">
                        <h3 class="title stroke-shape">Departure From Mumbai</h3>
                        <ul>
								<li> <a href=""><i class="fa fa-picture-o" aria-hidden="true"></i></a>
								</li>
								<li> <a href=""><i class="fa fa-picture-o" aria-hidden="true"></i></a>
								</li>
								<li> <a href=""><i class="fa fa-picture-o" aria-hidden="true"></i></a>
								</li>						
							</ul>
                    </div><!-- end sidebar-widget -->
					<!-- Arrival at bengaluru -->
					<div class="sidebar-widget arrival">
                        <h3 class="title stroke-shape">Arrival at Bengaluru</h3>
							<ul>
								<li> <a href=""><i class="fa fa-picture-o" aria-hidden="true"></i></a>
								</li>
								<li> <a href=""><i class="fa fa-picture-o" aria-hidden="true"></i></a>
								</li>
								<li> <a href=""><i class="fa fa-picture-o" aria-hidden="true"></i></a>
								</li>						
							</ul>
                    </div><!-- end sidebar-widget -->
					
                     <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Flight Times</h3>
                        <div class="sidebar-widget-item">
                            <div class="select-contain w-auto">
                                <select class="select-contain-select">
                                    <option value="1200AM">12:00AM</option>
                                    <option value="1230AM">12:30AM</option>
                                    <option value="0100AM">1:00AM</option>
                                    <option value="0130AM">1:30AM</option>
                                    <option value="0200AM">2:00AM</option>
                                    <option value="0230AM">2:30AM</option>
                                    <option value="0300AM">3:00AM</option>
                                    <option value="0330AM">3:30AM</option>
                                    <option value="0400AM">4:00AM</option>
                                    <option value="0430AM">4:30AM</option>
                                    <option value="0500AM">5:00AM</option>
                                    <option value="0530AM">5:30AM</option>
                                    <option value="0600AM">6:00AM</option>
                                    <option value="0630AM">6:30AM</option>
                                    <option value="0700AM">7:00AM</option>
                                    <option value="0730AM">7:30AM</option>
                                    <option value="0800AM">8:00AM</option>
                                    <option value="0830AM">8:30AM</option>
                                    <option value="0900AM" selected>9:00AM</option>
                                    <option value="0930AM">9:30AM</option>
                                    <option value="1000AM">10:00AM</option>
                                    <option value="1030AM">10:30AM</option>
                                    <option value="1100AM">11:00AM</option>
                                    <option value="1130AM">11:30AM</option>
                                    <option value="1200PM">12:00PM</option>
                                    <option value="1230PM">12:30PM</option>
                                    <option value="0100PM">1:00PM</option>
                                    <option value="0130PM">1:30PM</option>
                                    <option value="0200PM">2:00PM</option>
                                    <option value="0230PM">2:30PM</option>
                                    <option value="0300PM">3:00PM</option>
                                    <option value="0330PM">3:30PM</option>
                                    <option value="0400PM">4:00PM</option>
                                    <option value="0430PM">4:30PM</option>
                                    <option value="0500PM">5:00PM</option>
                                    <option value="0530PM">5:30PM</option>
                                    <option value="0600PM">6:00PM</option>
                                    <option value="0630PM">6:30PM</option>
                                    <option value="0700PM">7:00PM</option>
                                    <option value="0730PM">7:30PM</option>
                                    <option value="0800PM">8:00PM</option>
                                    <option value="0830PM">8:30PM</option>
                                    <option value="0900PM">9:00PM</option>
                                    <option value="0930PM">9:30PM</option>
                                    <option value="1000PM">10:00PM</option>
                                    <option value="1030PM">10:30PM</option>
                                    <option value="1100PM">11:00PM</option>
                                    <option value="1130PM">11:30PM</option>
                                </select>
                            </div>
                        </div><!-- end sidebar-widget-item -->
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Filter by Rating</h3>
                        <div class="sidebar-widget-item">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="r6">
                                <label for="r6">
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <span class="color-text-3 font-size-13 ml-1">(55.590)</span>
                                    </span>
                                </label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="r7">
                                <label for="r7">
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star-o"></i>
                                        <span class="color-text-3 font-size-13 ml-1">(40.590)</span>
                                    </span>
                                </label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="r8">
                                <label for="r8">
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star-o"></i>
                                        <i class="la la-star-o"></i>
                                        <span class="color-text-3 font-size-13 ml-1">(23.590)</span>
                                    </span>
                                </label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="r9">
                                <label for="r9">
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star-o"></i>
                                        <i class="la la-star-o"></i>
                                        <i class="la la-star-o"></i>
                                        <span class="color-text-3 font-size-13 ml-1">(12.590)</span>
                                    </span>
                                </label>
                            </div>
                            <div class="custom-checkbox mb-0">
                                <input type="checkbox" id="r10">
                                <label for="r10">
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star-o"></i>
                                        <i class="la la-star-o"></i>
                                        <i class="la la-star-o"></i>
                                        <i class="la la-star-o"></i>
                                        <span class="color-text-3 font-size-13 ml-1">(590)</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Flight Stops</h3>
                        <div class="sidebar-widget-item">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="flightStop1">
                                <label for="flightStop1">1 Stop</label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="flightStop2">
                                <label for="flightStop2">2 Stops</label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="flightStop3">
                                <label for="flightStop3">3 Stops</label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="flightStop4">
                                <label for="flightStop4">MultiStops</label>
                            </div>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Inflight Experience</h3>
                        <div class="sidebar-widget-item">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="chb23">
                                <label for="chb23">Inflight Dining</label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="chb24">
                                <label for="chb24">Music</label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="chb25">
                                <label for="chb25">Sky Shopping</label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="chb26">
                                <label for="chb26">Wi-fi</label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="chb27">
                                <label for="chb27">Seats & Cabin</label>
                            </div>
                        </div>
                    </div><!-- end sidebar-widget -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-8">
                <div class="card-item">
                    <div class="row">
						<div class="card col-md-1 airind">
							<img src="{{asset('public/web/img/airindia.png')}}" alt="flight-logo-img" class="img-fluid">
						</div>
						<div class="card-text col-md-1 d-flex flex-wrap align-content-center">
							<p>Air India</p>
						</div>
						<!-- <div class="card-body"> -->
							<!--<div class="card-top-title">-->
							
								<div class="title-location col-md-2 d-flex flex-wrap align-content-center">
									<p class="card-title font-size-14">Chandigarh</p>
									<h3 class="card-meta  font-size-17">13:50</h3>
								</div>
								<div class="card col-md-1 boview airind">
									<img src="{{asset('public/web/img/boview.png')}}" alt="flight-logo-img" class="img-fluid">
								</div>
								<div class="title-location col-md-2 d-flex flex-wrap align-content-center">
									<p class="card-title font-size-14">Mumbai</p>
									<h3 class="card-meta  font-size-17">16:50</h3>
								</div>
								
							
							<div class="section-tab rate-box col-md-2 section-tab-2 pb-3">
                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                    <li class="nav-item">
										  <a class="nav-link active" id="one-way-tab" data-toggle="tab" href="#one-way" role="tab" aria-controls="one-way" aria-selected="true">
                                            <h6>₹ 6500</h6>
											<p><span>Published</span></p>
											<p>Economy, Non Refundable</p>										
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="round-trip-tab" data-toggle="tab" href="#round-trip" role="tab" aria-controls="round-trip" aria-selected="false">
                                            <h6>₹ 6500</h6>
											<p><span>SME</span></p>
											<p>Economy,Refundable</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="multi-city-tab" data-toggle="tab" href="#multi-city" role="tab" aria-controls="multi-city" aria-selected="false">
                                           <h6>₹ 6500</h6>
											<p><span>Plexi Plus</span></p>
											<p>Premium Economy,Refundable</p>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end section-tab -->
							
							<div class="btn-box col-md-3 book-view d-flex flex-wrap align-content-center">
								<a href="http://arthtechsolutions.com/makemytrip/traveller" class="theme-btn theme-btn-small book-box">Book   Now</a>
								<a class="theme-btn bg-dark theme-btn-small details-box" data-toggle="collapse" href="#collapseExample42" aria-expanded="true" aria-controls="collapseExample">View Detail <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                
                            </div>
                       <div class="collapse" id="collapseExample42" style="">
                          <div class="card card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                          </div>
                        </div>
                    </div>
                </div><!-- end card-item -->
                
                
				<div class="card-item card-item-list">
                    <div class="col-md-4 card-img hotel-img-list">
                        <a href="#" class="d-block">
                            <img src="{{asset('public/web/img/holiday_3.jpg')}}" alt="hotel-img" class="img-fluid">
                        </a>
                        <!-- <span class="badge">Bestseller</span> -->
                        <!-- <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Bookmark">
                            <i class="la la-heart-o"></i>
                        </div> -->
                    </div>
                    <div class="col-md-5 card-body">
                        <h6 class="card-title"><a href="">Dubai Holiday</a></h6>
                        <p class="card-meta"><i class="fa fa-map-marker text-warning" aria-hidden="true"></i> Lorem ipsum, Dummy address</p>
                        <!-- <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div> -->
                        <div class="card-facility">
                            <div class="row">
                                <div class="col-sm-4 wifi">
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <p>Hotel</p>
                                </div>
                                <div class="col-sm-4 wifi">
                                    <i class="fa fa-plane" aria-hidden="true"></i>
                                    <p>Flight</p>
                                </div>
                                <div class="col-sm-4 wifi">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <p>Activities</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-breakfast">
                            <p>Included at this price</p>
                        </div>
                        <button type="button" class="dropdown-toggle more" data-toggle="dropdown">
                         More
                        </button>
                        <div class="dropdown-menu">
                          <p class="dropdown-item">Lorem Ipsum is simply dummy </p>
                        </div>
                        <!-- <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$88.00</span>
                                <span class="price__text">Per night</span>
                            </p>
                            <a href="hotel-single.html" class="btn-text">See details<i class="la la-angle-right"></i></a>
                        </div> -->
                    </div>
                    <div class="col-md-3 card-body-rate-list">
                    <p><del>₹ 55,500</del></p>
                    <h4><ins>₹ 45,500</ins></h4>
                    <p>Per/Person</p>
                    <a href="{{url('holiday_details')}}">Book Now</a>
                    </div>
                </div><!-- end card-item -->

                <div class="card-item card-item-list">
                    <div class="col-md-4 card-img hotel-img-list">
                        <a href="#" class="d-block">
                            <img src="{{asset('public/web/img/hotel.jpg')}}" alt="hotel-img" class="img-fluid">
                        </a>
                        <!-- <span class="badge">Bestseller</span> -->
                        <!-- <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Bookmark">
                            <i class="la la-heart-o"></i>
                        </div> -->
                    </div>
                    <div class="col-md-5 card-body">
                        <h6 class="card-title"><a href="{{url('single-hotels')}}">Hotel Name<i class="fa fa-star text-warning star" aria-hidden="true"></i><i class="fa fa-star text-warning star" aria-hidden="true"></i><i class="fa fa-star text-warning star" aria-hidden="true"></i><i class="fa fa-star text-warning star" aria-hidden="true"></i><i class="fa fa-star text-warning star" aria-hidden="true"></i></a></h6>
                        <p class="card-meta"><i class="fa fa-map-marker text-warning" aria-hidden="true"></i> Lorem ipsum, Dummy address</p>
                        <!-- <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div> -->
                        <div class="card-facility">
                            <div class="row">
                                <div class="col-sm-4 wifi">
                                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                                    <p>Restaurent</p>
                                </div>
                                <div class="col-sm-4 wifi">
                                    <i class="fa fa-wifi" aria-hidden="true"></i>
                                    <p>Free wifi</p>
                                </div>
                                <div class="col-sm-4 wifi">
                                    <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                    <p>Doctor Facility</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-breakfast">
                            <p>Incluid Breakfast</p>
                        </div>
                        <button type="button" class="dropdown-toggle more" data-toggle="dropdown">
                         More
                        </button>
                        <div class="dropdown-menu">
                          <p class="dropdown-item">Lorem Ipsum is simply dummy </p>
                        </div>
                        <!-- <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$88.00</span>
                                <span class="price__text">Per night</span>
                            </p>
                            <a href="hotel-single.html" class="btn-text">See details<i class="la la-angle-right"></i></a>
                        </div> -->
                    </div>
                    <div class="col-md-3 card-body-rate-list">
                    <p><del>₹ 5,500</del></p>
                    <h4><ins>₹ 4,500</ins></h4>
                    <p>Avg/Night</p>
                    <a href="{{url('single-hotels')}}">Select Room</a>
                    </div>
                </div><!-- end card-item -->

                     <div class="card-item car-card card-item-list">
                    <div class="card-img">
                        <a href="{{url('/single_car')}}" class="d-block">
                            <img src="{{asset('public/web/img/verna.jpg')}}" alt="car-img" class="h-100">
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="card-meta">Lorem ipsum</p>
                        <h3 class="card-title"><a href="{{url('/single_car')}}">Hyundai Verna</a></h3>
                        <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div>
                        <div class="card-attributes">
                            <ul class="d-flex align-items-center">
                                <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>4</span></li>
                                <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>1</span></li>
                            </ul>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">₹623.00</span>
                               
                            </p>
                            <a href="{{url('/single_car')}}" class="btn-text">See details<i class="la la-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- end card-item -->

				<div class="card-item">
                    <div class="row">
						<div class="card col-md-1 airind">
							<img src="{{asset('public/web/img/airindia.png')}} " alt="flight-logo-img" class="img-fluid">
						</div>
						<div class="card-text col-md-1 d-flex flex-wrap align-content-center">
							<p>Air India</p>
						</div>
						<!-- <div class="card-body"> -->
							<!--<div class="card-top-title">-->
							
								<div class="title-location col-md-2 d-flex flex-wrap align-content-center">
									<p class="card-title font-size-14">Chandigarh</p>
									<h3 class="card-meta  font-size-17">13:50</h3>
								</div>
								<div class="card col-md-1 boview airind">
									<img src="{{asset('public/web/img/boview.png')}} " alt="flight-logo-img" class="img-fluid">
								</div>
								<div class="title-location col-md-2 d-flex flex-wrap align-content-center">
									<p class="card-title font-size-14">Mumbai</p>
									<h3 class="card-meta  font-size-17">16:50</h3>
								</div>
								
							
							<div class="section-tab rate-box col-md-2 section-tab-2 pb-3">
                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                    <li class="nav-item">
										  <a class="nav-link active" id="one-way-tab" data-toggle="tab" href="#one-way" role="tab" aria-controls="one-way" aria-selected="true">
                                            <h6>₹ 6500</h6>
											<p><span>Published</span></p>
											<p>Economy, Non Refundable</p>										
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="round-trip-tab" data-toggle="tab" href="#round-trip" role="tab" aria-controls="round-trip" aria-selected="false">
                                            <h6>₹ 6500</h6>
											<p><span>SME</span></p>
											<p>Economy,Refundable</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="multi-city-tab" data-toggle="tab" href="#multi-city" role="tab" aria-controls="multi-city" aria-selected="false">
                                           <h6>₹ 6500</h6>
											<p><span>Plexi Plus</span></p>
											<p>Premium Economy,Refundable</p>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end section-tab -->
							
							<div class="btn-box col-md-3 book-view d-flex flex-wrap align-content-center">
								<a href="http://arthtechsolutions.com/makemytrip/traveller" class="theme-btn theme-btn-small book-box">Book Now</a>
								<a class="theme-btn bg-dark theme-btn-small details-box" data-toggle="collapse" href="#collapseExample41" aria-expanded="true" aria-controls="collapseExample">View Detail <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                
                            </div>
                       <div class="collapse" id="collapseExample41" style="">
                          <div class="card card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                          </div>
                        </div>
                    </div>
                </div><!-- end card-item -->
                
                
                <div class="card-item card-item-list">
                    <div class="col-md-4 card-img hotel-img-list">
                        <a href="#" class="d-block">
                            <img src="{{asset('public/web/img/holiday_3.jpg')}}" alt="hotel-img" class="img-fluid">
                        </a>
                        <!-- <span class="badge">Bestseller</span> -->
                        <!-- <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Bookmark">
                            <i class="la la-heart-o"></i>
                        </div> -->
                    </div>
                    <div class="col-md-5 card-body">
                        <h6 class="card-title"><a href="">Dubai Holiday</a></h6>
                        <p class="card-meta"><i class="fa fa-map-marker text-warning" aria-hidden="true"></i> Lorem ipsum, Dummy address</p>
                        <!-- <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div> -->
                        <div class="card-facility">
                            <div class="row">
                                <div class="col-sm-4 wifi">
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <p>Hotel</p>
                                </div>
                                <div class="col-sm-4 wifi">
                                    <i class="fa fa-plane" aria-hidden="true"></i>
                                    <p>Flight</p>
                                </div>
                                <div class="col-sm-4 wifi">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <p>Activities</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-breakfast">
                            <p>Included at this price</p>
                        </div>
                        <button type="button" class="dropdown-toggle more" data-toggle="dropdown">
                         More
                        </button>
                        <div class="dropdown-menu">
                          <p class="dropdown-item">Lorem Ipsum is simply dummy </p>
                        </div>
                        <!-- <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$88.00</span>
                                <span class="price__text">Per night</span>
                            </p>
                            <a href="hotel-single.html" class="btn-text">See details<i class="la la-angle-right"></i></a>
                        </div> -->
                    </div>
                    <div class="col-md-3 card-body-rate-list">
                    <p><del>₹ 55,500</del></p>
                    <h4><ins>₹ 45,500</ins></h4>
                    <p>Per/Person</p>
                    <a href="{{url('holiday_details')}}">Book Now</a>
                    </div>
                </div><!-- end card-item -->

                <div class="card-item card-item-list">
                    <div class="col-md-4 card-img hotel-img-list">
                        <a href="#" class="d-block">
                            <img src="{{asset('public/web/img/hotel.jpg')}}" alt="hotel-img" class="img-fluid">
                        </a>
                        <!-- <span class="badge">Bestseller</span> -->
                        <!-- <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Bookmark">
                            <i class="la la-heart-o"></i>
                        </div> -->
                    </div>
                    <div class="col-md-5 card-body">
                        <h6 class="card-title"><a href="{{url('single-hotels')}}">Hotel Name<i class="fa fa-star text-warning star" aria-hidden="true"></i><i class="fa fa-star text-warning star" aria-hidden="true"></i><i class="fa fa-star text-warning star" aria-hidden="true"></i><i class="fa fa-star text-warning star" aria-hidden="true"></i><i class="fa fa-star text-warning star" aria-hidden="true"></i></a></h6>
                        <p class="card-meta"><i class="fa fa-map-marker text-warning" aria-hidden="true"></i> Lorem ipsum, Dummy address</p>
                        <!-- <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div> -->
                        <div class="card-facility">
                            <div class="row">
                                <div class="col-sm-4 wifi">
                                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                                    <p>Restaurent</p>
                                </div>
                                <div class="col-sm-4 wifi">
                                    <i class="fa fa-wifi" aria-hidden="true"></i>
                                    <p>Free wifi</p>
                                </div>
                                <div class="col-sm-4 wifi">
                                    <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                    <p>Doctor Facility</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-breakfast">
                            <p>Incluid Breakfast</p>
                        </div>
                        <button type="button" class="dropdown-toggle more" data-toggle="dropdown">
                         More
                        </button>
                        <div class="dropdown-menu">
                          <p class="dropdown-item">Lorem Ipsum is simply dummy </p>
                        </div>
                        <!-- <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$88.00</span>
                                <span class="price__text">Per night</span>
                            </p>
                            <a href="hotel-single.html" class="btn-text">See details<i class="la la-angle-right"></i></a>
                        </div> -->
                    </div>
                    <div class="col-md-3 card-body-rate-list">
                    <p><del>₹ 5,500</del></p>
                    <h4><ins>₹ 4,500</ins></h4>
                    <p>Avg/Night</p>
                    <a href="{{url('single-hotels')}}">Select Room</a>
                    </div>
                </div><!-- end card-item -->

                     <div class="card-item car-card card-item-list">
                    <div class="card-img">
                        <a href="{{url('/single_car')}}" class="d-block">
                            <img src="{{asset('public/web/img/verna.jpg')}}" alt="car-img" class="h-100">
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="card-meta">Lorem ipsum</p>
                        <h3 class="card-title"><a href="{{url('/single_car')}}">Hyundai Verna</a></h3>
                        <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div>
                        <div class="card-attributes">
                            <ul class="d-flex align-items-center">
                                <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>4</span></li>
                                <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>1</span></li>
                            </ul>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">₹623.00</span>
                               
                            </p>
                            <a href="{{url('/single_car')}}" class="btn-text">See details<i class="la la-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
        
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->
@endsection