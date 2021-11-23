@extends('layouts.web')
@section('content')
<!-- ================================
    START hotel list box AREA
================================= -->
<section class="table-hotel-area">
	<div class="container">				
		<div class="contact-form-action hotel_destination">
			<form action="#" class="row align-items-center destination-hotel">
				<div class="col-lg-3 pr-0 desti">
					<div class="input-box">
						<label class="label-text">Destination / Hotel</label>
						<div class="form-group">
							<!-- <span class="la la-map-marker form-icon"></span> -->
							<input class="form-control" type="text" placeholder="Enter city or property">
						</div>
					</div>
				</div><!-- end col-lg-3 -->
				<div class="col-lg-2 pr-0">
					<div class="input-box">
						<label class="label-text">Check in</label>
						<div class="form-group">
							<!-- <span class="la la-calendar form-icon"></span> -->
							<input class="date-range form-control" type="text" name="daterange-single" value="04/28/2020">
						</div>
					</div>
				</div><!-- end col-lg-3 -->
				<div class="col-lg-2 pr-0">
					<div class="input-box">
						<label class="label-text">Check out</label>
						<div class="form-group">
							<!-- <span class="la la-calendar form-icon"></span> -->
							<input class="date-range form-control" type="text" name="daterange-single" value="04/28/2020">
						</div>
					</div>
				</div><!-- end col-lg-3 -->
				<div class="col-lg-3">
					<div class="input-box">
						<label class="label-text">Guests and Rooms</label>
						<div class="form-group">
							<div class="dropdown dropdown-contain ">
								<a class="dropdown-toggle dropdown-btn guest-room" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
									<span>Guests <span class="qtyTotal guestTotal">0</span></span>
									<span class="hiphens font-size-20 mx-1">-</span>
									<span>Rooms <span class="roomTotal">0</span></span>
								</a>
								<div class="dropdown-menu dropdown-menu-wrap">
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
				</div><!-- end col-lg-3 -->
				<div class="col-lg-2 search-hotel">
							<a href="#" class="theme-btn text-center">Search Now</a>
				</div>
			</form>
		</div>
	</div><!-- end container -->
</section>	<!-- end section -->
<!-- ================================
    End top area AREA
================================= -->

<!-- ================================
    START TOUR DETAIL AREA
================================= -->
<section class="tour-detail-area padding-bottom-40px padding-top-60px">
    <div class="single-content-navbar-wrap menu section-bg" id="single-content-navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content-nav" id="single-content-nav">
                        <ul>
                            <li><a data-scroll="description" href="#description" class="active">Hotel Details</a></li>
                            <li><a data-scroll="availability" href="#availability">Availability</a></li>
                            <li><a data-scroll="amenities" href="#amenities">Amenities</a></li>
                            <li><a data-scroll="faq" href="#faq">Faq</a></li>
                            <li><a data-scroll="reviews" href="#reviews">Reviews</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end single-content-navbar-wrap -->
    <div class="single-content-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content-wrap padding-top-60px">
                        <div id="description" class="page-scroll">
                            <div class="single-content-item pb-4">
                                <h3 class="title font-size-26">Hotel and Resorts</h3>
                                <div class="d-flex align-items-center pt-2">
                                    <p>
                                        <span class="badge badge-warning text-white font-size-16">4.7</span>
                                        <span>(4,209 Reviews)</span>
                                    </p>
                                </div>
                            </div><!-- end single-content-item -->

                            <div class="card-item card-item-list">
                                <div class="col-md-4 card-img hotel-img-list">
                                    <a href="#" class="d-block">
                                        <img src="{{asset('public/web/img/hotel.jpg')}}" alt="hotel-img" class="img-fluid">
                                    </a>
                                    
                                </div>
                                <div class="col-md-5 card-body">
                                    <h6 class="card-title"><a href="{{url('single-hotels')}}">Hotel Name<i class="fa fa-star text-warning star" aria-hidden="true"></i><i class="fa fa-star text-warning star" aria-hidden="true"></i><i class="fa fa-star text-warning star" aria-hidden="true"></i><i class="fa fa-star text-warning star" aria-hidden="true"></i><i class="fa fa-star text-warning star" aria-hidden="true"></i></a></h6>
                                    <p class="card-meta"><i class="fa fa-map-marker text-warning" aria-hidden="true"></i> Lorem ipsum, Dummy address</p>
                                    
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
                                    
                                </div>
                                <div class="col-md-3 card-body-rate-list">
                                </div>
                            </div><!-- end card-item -->


                            <div class="section-block"></div>
                            <div class="single-content-item py-4">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3 hotel_star">
                                                <i class="la la-hotel"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title">Hotel Type</h3>
                                                <span class="font-size-13">4 Star</span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3 hotel_star">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title">Extra People</h3>
                                                <span class="font-size-13">No Charge</span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3 hotel_star">
                                                <i class="la la-bed"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title">Minimum Stay</h3>
                                                <span class="font-size-13">2 Nights</span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3 hotel_star">
                                                <i class="la la-money"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title">Security Deposit</h3>
                                                <span class="font-size-13">$279</span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3 hotel_star">
                                                <i class="la la-globe"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title">Country</h3>
                                                <span class="font-size-13">France</span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3 hotel_star">
                                                <i class="la la-map"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title">City</h3>
                                                <span class="font-size-13">Paris</span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3 hotel_star">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title">Neighborhood</h3>
                                                <span class="font-size-13">République</span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3 hotel_star">
                                                <i class="la la-times"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title">Cancellation</h3>
                                                <span class="font-size-13">Strict</span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end row -->
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                            <div class="single-content-item padding-top-40px padding-bottom-40px single_about_hotel">
                                <h3 class="title font-size-20">About Hotel</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end description -->
                        <div id="availability" class="page-scroll">
                            <div class="single-content-item padding-top-40px padding-bottom-30px">
                                <h3 class="title font-size-20">Availability</h3>
                                <div class="contact-form-action padding-bottom-35px">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-6 responsive-column single_check">
                                                <div class="input-box">
                                                    <label class="label-text">Check in - Check out</label>
                                                    <div class="form-group">
                                                        <!-- <span class="la la-calendar form-icon"></span> -->
                                                        <input class="date-range form-control" type="text" name="daterange" value="04/28/2020">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 responsive-column single_check">
                                                <div class="input-box">
                                                    <label class="label-text">Rooms</label>
                                                    <div class="form-group">
                                                        <div class="select-contain w-auto">
                                                            <select class="select-contain-select">
                                                                <option value="0">Select Rooms</option>
                                                                <option value="1">1 Room</option>
                                                                <option value="2">2 Rooms</option>
                                                                <option value="3">3 Rooms</option>
                                                                <option value="4">4 Rooms</option>
                                                                <option value="5">5 Rooms</option>
                                                                <option value="6">6 Rooms</option>
                                                                <option value="7">7 Rooms</option>
                                                                <option value="8">8 Rooms</option>
                                                                <option value="9">9 Rooms</option>
                                                                <option value="10">10 Rooms</option>
                                                                <option value="11">11 Rooms</option>
                                                                <option value="12">12 Rooms</option>
                                                                <option value="13">13 Rooms</option>
                                                                <option value="14">14 Rooms</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 responsive-column single_check">
                                                <div class="input-box">
                                                    <label class="label-text">Adults (18+)</label>
                                                    <div class="form-group">
                                                        <div class="select-contain w-auto">
                                                            <select class="select-contain-select">
                                                                <option value="0">Select Adults</option>
                                                                <option value="1">1 Adults</option>
                                                                <option value="2">2 Adults</option>
                                                                <option value="3">3 Adults</option>
                                                                <option value="4">4 Adults</option>
                                                                <option value="5">5 Adults</option>
                                                                <option value="6">6 Adults</option>
                                                                <option value="7">7 Adults</option>
                                                                <option value="8">8 Adults</option>
                                                                <option value="9">9 Adults</option>
                                                                <option value="10">10 Adults</option>
                                                                <option value="11">11 Adults</option>
                                                                <option value="12">12 Adults</option>
                                                                <option value="13">13 Adults</option>
                                                                <option value="14">14 Adults</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 responsive-column single_check">
                                                <div class="input-box">
                                                    <label class="label-text">Children (0-17)</label>
                                                    <div class="form-group">
                                                        <div class="select-contain w-auto">
                                                            <select class="select-contain-select">
                                                                <option value="0">Select Children</option>
                                                                <option value="1">1 Children</option>
                                                                <option value="2">2 Children</option>
                                                                <option value="3">3 Children</option>
                                                                <option value="4">4 Children</option>
                                                                <option value="5">5 Children</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 check_bt">
                                                <div class="btn-box">
                                                    <button type="button" class="theme-btn">Search Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- end contact-form-action -->
                                <h3 class="title font-size-20">Available Rooms</h3>
                                <div class="cabin-type padding-top-30px">
                                    <div class="cabin-type-item seat-selection-item d-flex">
                                        <div class="cabin-type-img flex-shrink-0">
                                            <img src="http://arthtechsolutions.com/makemytrip/public/web/img/roomd.png" alt="room" class="img-fluid">
                                        </div>
                                        <div class="cabin-type-detail">
                                            <h3 class="title">Standard Family Room</h3>
                                            <div class="row padding-top-20px">
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3 hotel_star">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-wifi"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title">Free Wi-Fi</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                 <div class="col-lg-6 responsive-column">
                                                     <div class="single-tour-feature d-flex align-items-center mb-3 hotel_star">
                                                         <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                             <i class="la la-bed"></i>
                                                         </div>
                                                         <div class="single-feature-titles">
                                                             <h3 class="title">2 Single beds</h3>
                                                         </div>
                                                     </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3 hotel_star">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-building"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title">15 m²</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                 <div class="col-lg-6 responsive-column">
                                                     <div class="single-tour-feature d-flex align-items-center mb-3 hotel_star">
                                                         <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                             <i class="la la-hotel"></i>
                                                         </div>
                                                         <div class="single-feature-titles">
                                                             <h3 class="title">Shower and bathtub</h3>
                                                         </div>
                                                     </div>
                                                </div><!-- end col-lg-6 -->
                                            </div><!-- end row -->
                                            <div class="room-photos">
                                                <a class="btn theme-btn-hover-gray" data-src="images/img1.jpg"
                                                   data-fancybox="gallery"
                                                   data-caption="Showing image - 01"
                                                   data-speed="700">
                                                    <i class="la la-photo mr-2"></i>Room Photos
                                                </a>
                                                <a class="d-none"
                                                     data-fancybox="gallery"
                                                     data-src="images/img2.jpg"
                                                     data-caption="Showing image - 02"
                                                     data-speed="700"></a>
                                                <a class="d-none"
                                                     data-fancybox="gallery"
                                                     data-src="images/img3.jpg"
                                                     data-caption="Showing image - 03"
                                                     data-speed="700"></a>
                                                <a class="d-none"
                                                     data-fancybox="gallery"
                                                     data-src="images/img4.jpg"
                                                     data-caption="Showing image - 04"
                                                     data-speed="700"></a>
                                            </div>
                                        </div>
                                        <div class="cabin-price">
                                            <p class="text-uppercase font-size-14">Per/night<strong class="mt-n1 text-black font-size-18 font-weight-black d-block">₹4500</strong></>
                                            <div class="custom-checkbox mb-0">
                                                <input type="checkbox" id="selectChb1">
                                                <label for="selectChb1" class="theme-btn theme-btn-small">Select</label>
                                            </div>
                                        </div>
                                    </div><!-- end cabin-type-item -->
                                </div><!-- end cabin-type -->
                                <div class="cabin-type padding-top-30px">
                                    <div class="cabin-type-item seat-selection-item d-flex">
                                        <div class="cabin-type-img flex-shrink-0">
                                           <img src="http://arthtechsolutions.com/makemytrip/public/web/img/room.jpg" alt="room" class="img-fluid">
                                        </div>
                                        <div class="cabin-type-detail">
                                            <h3 class="title">Superior Double Room</h3>
                                            <div class="row padding-top-20px">
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-wifi"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title font-size-15 font-weight-medium">Free Wi-Fi</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-bed"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title font-size-15 font-weight-medium">2 Single beds</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-building"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title font-size-15 font-weight-medium">15 m²</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-hotel"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title font-size-15 font-weight-medium">Shower and bathtub</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                            </div><!-- end row -->
                                            <div class="room-photos">
                                                <a class="btn theme-btn-hover-gray" data-src="images/img1.jpg"
                                                   data-fancybox="gallery"
                                                   data-caption="Showing image - 01"
                                                   data-speed="700">
                                                    <i class="la la-photo mr-2"></i>Room Photos
                                                </a>
                                                <a class="d-none"
                                                     data-fancybox="gallery"
                                                     data-src="images/img2.jpg"
                                                     data-caption="Showing image - 02"
                                                     data-speed="700"></a>
                                                <a class="d-none"
                                                     data-fancybox="gallery"
                                                     data-src="images/img3.jpg"
                                                     data-caption="Showing image - 03"
                                                     data-speed="700"></a>
                                                <a class="d-none"
                                                     data-fancybox="gallery"
                                                     data-src="images/img4.jpg"
                                                     data-caption="Showing image - 04"
                                                     data-speed="700"></a>
                                            </div>
                                        </div>
                                        <div class="cabin-price">
                                            <p class="text-uppercase font-size-14">Per/night<strong class="mt-n1 text-black font-size-18 font-weight-black d-block">₹4500</strong></>
                                            <div class="custom-checkbox mb-0">
                                                <input type="checkbox" id="selectChb2">
                                                <label for="selectChb2" class="theme-btn theme-btn-small">Select</label>
                                            </div>
                                        </div>
                                    </div><!-- end cabin-type-item -->
                                </div><!-- end cabin-type -->
                                <div class="cabin-type padding-top-30px">
                                    <div class="cabin-type-item seat-selection-item d-flex">
                                        <div class="cabin-type-img flex-shrink-0">
                                            <img src="http://arthtechsolutions.com/makemytrip/public/web/img/rooma.jpg" alt="room" class="img-fluid">
                                        </div>
                                        <div class="cabin-type-detail">
                                            <h3 class="title">Deluxe Single Room</h3>
                                            <div class="row padding-top-20px">
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-wifi"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title font-size-15 font-weight-medium">Free Wi-Fi</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-bed"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title font-size-15 font-weight-medium">2 Single beds</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-building"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title font-size-15 font-weight-medium">15 m²</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-hotel"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title font-size-15 font-weight-medium">Shower and bathtub</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                            </div><!-- end row -->
                                            <div class="room-photos">
                                                <a class="btn theme-btn-hover-gray" data-src="images/img1.jpg"
                                                   data-fancybox="gallery"
                                                   data-caption="Showing image - 01"
                                                   data-speed="700">
                                                    <i class="la la-photo mr-2"></i>Room Photos
                                                </a>
                                                <a class="d-none"
                                                     data-fancybox="gallery"
                                                     data-src="images/img2.jpg"
                                                     data-caption="Showing image - 02"
                                                     data-speed="700"></a>
                                                <a class="d-none"
                                                     data-fancybox="gallery"
                                                     data-src="images/img3.jpg"
                                                     data-caption="Showing image - 03"
                                                     data-speed="700"></a>
                                                <a class="d-none"
                                                     data-fancybox="gallery"
                                                     data-src="images/img4.jpg"
                                                     data-caption="Showing image - 04"
                                                     data-speed="700"></a>
                                            </div>
                                        </div>
                                        <div class="cabin-price">
                                            <p class="text-uppercase font-size-14">Per/night<strong class="mt-n1 text-black font-size-18 font-weight-black d-block">₹4500</strong></p>
                                            <div class="custom-checkbox mb-0">
                                                <input type="checkbox" id="selectChb3">
                                                <label for="selectChb3" class="theme-btn theme-btn-small">Select</label>
                                            </div>
                                        </div>
                                    </div><!-- end cabin-type-item -->
                                </div><!-- end cabin-type -->
                                <div class="cabin-type padding-top-30px">
                                    <div class="cabin-type-item seat-selection-item d-flex">
                                        <div class="cabin-type-img flex-shrink-0">
                                           <img src="http://arthtechsolutions.com/makemytrip/public/web/img/roomb.jpg" alt="room" class="img-fluid">
                                        </div>
                                        <div class="cabin-type-detail">
                                            <h3 class="title">Single Bed Room</h3>
                                            <div class="row padding-top-20px">
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-wifi"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title font-size-15 font-weight-medium">Free Wi-Fi</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-bed"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title font-size-15 font-weight-medium">1 Single beds</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-building"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title font-size-15 font-weight-medium">15 m²</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-tour-feature d-flex align-items-center mb-3">
                                                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                            <i class="la la-hotel"></i>
                                                        </div>
                                                        <div class="single-feature-titles">
                                                            <h3 class="title font-size-15 font-weight-medium">Shower and bathtub</h3>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                            </div><!-- end row -->
                                            <div class="room-photos">
                                                <a class="btn theme-btn-hover-gray" data-src="images/img1.jpg"
                                                   data-fancybox="gallery"
                                                   data-caption="Showing image - 01"
                                                   data-speed="700">
                                                    <i class="la la-photo mr-2"></i>Room Photos
                                                </a>
                                                <a class="d-none"
                                                     data-fancybox="gallery"
                                                     data-src="images/img2.jpg"
                                                     data-caption="Showing image - 02"
                                                     data-speed="700"></a>
                                                <a class="d-none"
                                                     data-fancybox="gallery"
                                                     data-src="images/img3.jpg"
                                                     data-caption="Showing image - 03"
                                                     data-speed="700"></a>
                                                <a class="d-none"
                                                     data-fancybox="gallery"
                                                     data-src="images/img4.jpg"
                                                     data-caption="Showing image - 04"
                                                     data-speed="700"></a>
                                            </div>
                                        </div>
                                        <div class="cabin-price">
                                            <p class="text-uppercase font-size-14">Per/night<strong class="mt-n1 text-black font-size-18 font-weight-black d-block">₹4500</strong></>
                                            <div class="custom-checkbox mb-0">
                                                <input type="checkbox" id="selectChb4">
                                                <label for="selectChb4" class="theme-btn theme-btn-small">Select</label>
                                            </div>
                                        </div>
                                    </div><!-- end cabin-type-item -->
                                </div><!-- end cabin-type -->
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end location-map -->
                        <div id="amenities" class="page-scroll">
                            <div class="single-content-item padding-top-40px padding-bottom-20px">
                                <h3 class="title font-size-20">Amenities</h3>
                                <div class="amenities-feature-item pt-4">
                                    <div class="row">
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-wifi"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">WI-FI</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-check"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Swimming Pool</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-television"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Television</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-coffee"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Coffee</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-tree"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Air Conditioning</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-gear"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Fitness Facility</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-check"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Fridge</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-glass"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Wine Bar</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-music"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Entertainment</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-lock"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Secure Vault</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                         <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-car"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Pick And Drop</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-check"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Room Service</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-check-circle"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Pets Allowed</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-coffee"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Breakfast</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-car"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Free Parking</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-fire"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Fire Place</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-wheelchair"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Handicap Accessible</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-user-secret"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Doorman</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-building"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Elevator In Building</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-gift"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Suitable For Events</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-gamepad"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Play Place</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                    </div><!-- end row -->
                                </div>
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end faq -->
                        <div id="faq" class="page-scroll">
                            <div class="single-content-item padding-top-40px padding-bottom-40px">
                                <h3 class="title font-size-20">FAQs</h3>
                                <div class="accordion accordion-item padding-top-30px" id="accordionExample2">
                                    <div class="card">
                                        <div class="card-header" id="faqHeadingFour">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseFour" aria-expanded="true" aria-controls="faqCollapseFour">
                                                    <span class="ml-3">How do I know a reservation is accepted or confirmed?</span>
                                                    <i class="la la-minus"></i>
                                                    <i class="la la-plus"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="faqCollapseFour" class="collapse show" aria-labelledby="faqHeadingFour" data-parent="#accordionExample2">
                                            <div class="card-body d-flex">
                                                <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                    <div class="card">
                                        <div class="card-header" id="faqHeadingFive">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                                                    <span class="ml-3">Am I allowed to decline reservation requests?</span>
                                                    <i class="la la-minus"></i>
                                                    <i class="la la-plus"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="faqCollapseFive" class="collapse" aria-labelledby="faqHeadingFive" data-parent="#accordionExample2">
                                            <div class="card-body d-flex">
                                                <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                    <div class="card">
                                        <div class="card-header" id="faqHeadingSix">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix">
                                                    <span class="ml-3">What happens if I let a reservation request expire?</span>
                                                    <i class="la la-minus"></i>
                                                    <i class="la la-plus"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="faqCollapseSix" class="collapse" aria-labelledby="faqHeadingSix" data-parent="#accordionExample2">
                                            <div class="card-body d-flex">
                                                <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                    <div class="card">
                                        <div class="card-header" id="faqHeadingSeven">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven">
                                                    <span class="ml-3">How do I set reservation requirements?</span>
                                                    <i class="la la-minus"></i>
                                                    <i class="la la-plus"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="faqCollapseSeven" class="collapse" aria-labelledby="faqHeadingSeven" data-parent="#accordionExample2">
                                            <div class="card-body d-flex">
                                                <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                </div>
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end faq -->
                        <div id="reviews" class="page-scroll">
                            <div class="single-content-item padding-top-40px padding-bottom-40px">
                                <h3 class="title font-size-20">Reviews</h3>
                                <div class="review-container padding-top-30px">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="review-summary">
                                                <h2>4.5<span>/5</span></h2>
                                                <p>Excellent</p>
                                                <span>Based on 4 reviews</span>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-8 hotel_resort_single_hotel">
                                            <div class="review-bars">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="progress-item">
                                                            <h3 class="progressbar-title">Service</h3>
                                                            <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                <div class="progressbar-box flex-shrink-0">
                                                                    <div class="progressbar-line" data-percent="70%">
                                                                        <div class="progressbar-line-item bar-bg-1"></div>
                                                                    </div> <!-- End Skill Bar -->
                                                                </div>
                                                                <div class="bar-percent">4.6</div>
                                                            </div>
                                                        </div><!-- end progress-item -->
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <div class="progress-item">
                                                            <h3 class="progressbar-title">Location</h3>
                                                            <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                <div class="progressbar-box flex-shrink-0">
                                                                    <div class="progressbar-line" data-percent="55%">
                                                                        <div class="progressbar-line-item bar-bg-2"></div>
                                                                    </div> <!-- End Skill Bar -->
                                                                </div>
                                                                <div class="bar-percent">4.7</div>
                                                            </div>
                                                        </div><!-- end progress-item -->
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <div class="progress-item">
                                                            <h3 class="progressbar-title">Value for Money</h3>
                                                            <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                <div class="progressbar-box flex-shrink-0">
                                                                    <div class="progressbar-line" data-percent="40%">
                                                                        <div class="progressbar-line-item bar-bg-3"></div>
                                                                    </div> <!-- End Skill Bar -->
                                                                </div>
                                                                <div class="bar-percent">2.6</div>
                                                            </div>
                                                        </div><!-- end progress-item -->
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <div class="progress-item">
                                                            <h3 class="progressbar-title">Cleanliness</h3>
                                                            <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                <div class="progressbar-box flex-shrink-0">
                                                                    <div class="progressbar-line" data-percent="60%">
                                                                        <div class="progressbar-line-item bar-bg-4"></div>
                                                                    </div> <!-- End Skill Bar -->
                                                                </div>
                                                                <div class="bar-percent">3.6</div>
                                                            </div>
                                                        </div><!-- end progress-item -->
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <div class="progress-item">
                                                            <h3 class="progressbar-title">Facilities</h3>
                                                            <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                <div class="progressbar-box flex-shrink-0">
                                                                    <div class="progressbar-line" data-percent="50%">
                                                                        <div class="progressbar-line-item bar-bg-5"></div>
                                                                    </div> <!-- End Skill Bar -->
                                                                </div>
                                                                <div class="bar-percent">2.6</div>
                                                            </div>
                                                        </div><!-- end progress-item -->
                                                    </div><!-- end col-lg-6 -->
                                                </div><!-- end row -->
                                            </div>
                                        </div><!-- end col-lg-8 -->
                                    </div>
                                </div>
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end reviews -->
                        <div class="review-box">
                            <div class="single-content-item padding-top-40px">
                                <h3 class="title font-size-20">Showing 3 guest reviews</h3>
                                <div class="comments-list">
                                    <div class="comment">
                                        <div class="comment-avatar">
                                            <img src="{{asset('public/web/img/girl.jpg')}}" alt="hotel-img" class="img-fluid">
                                        </div>
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <h3 class="comment__author">Jenny Doe</h3>
                                                <div class="meta-data-inner d-flex">
                                                    <span class="ratings d-flex align-items-center mr-1">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </span>
                                                    <p class="comment__date">April 5, 2019</p>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis
                                            </p>
                                            <div class="comment-reply d-flex align-items-center justify-content-between">
                                                <a class="theme-btn" href="#" data-toggle="modal" data-target="#replayPopupForm">
                                                    <span class="la la-mail-reply mr-1"></span>Reply
                                                </a>
                                                <div class="reviews-reaction">
                                                    <a href="#" class="comment-like"><i class="la la-thumbs-up"></i> 13</a>
                                                    <a href="#" class="comment-dislike"><i class="la la-thumbs-down"></i> 2</a>
                                                    <a href="#" class="comment-love"><i class="la la-heart-o"></i> 5</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end comments -->
                                    <div class="comment comment-reply-item">
                                        <div class="comment-avatar">
                                           <img src="{{asset('public/web/img/girl.jpg')}}" alt="hotel-img" class="img-fluid">
                                        </div>
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <h3 class="comment__author">Jenny Doe</h3>
                                                <div class="meta-data-inner d-flex">
                                                    <span class="ratings d-flex align-items-center mr-1">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </span>
                                                    <p class="comment__date">April 5, 2019</p>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis
                                            </p>
                                            <div class="comment-reply d-flex align-items-center justify-content-between">
                                                <a class="theme-btn" href="#" data-toggle="modal" data-target="#replayPopupForm">
                                                    <span class="la la-mail-reply mr-1"></span>Reply
                                                </a>
                                                <div class="reviews-reaction">
                                                    <a href="#" class="comment-like"><i class="la la-thumbs-up"></i> 13</a>
                                                    <a href="#" class="comment-dislike"><i class="la la-thumbs-down"></i> 2</a>
                                                    <a href="#" class="comment-love"><i class="la la-heart-o"></i> 5</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end comments -->
                                    <div class="comment">
                                        <div class="comment-avatar">
                                            <img src="{{asset('public/web/img/girl.jpg')}}" alt="hotel-img" class="img-fluid">
                                        </div>
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <h3 class="comment__author">Jenny Doe</h3>
                                                <div class="meta-data-inner d-flex">
                                                    <span class="ratings d-flex align-items-center mr-1">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </span>
                                                    <p class="comment__date">April 5, 2019</p>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis
                                            </p>
                                            <div class="comment-reply d-flex align-items-center justify-content-between">
                                                <a class="theme-btn" href="#" data-toggle="modal" data-target="#replayPopupForm">
                                                    <span class="la la-mail-reply mr-1"></span>Reply
                                                </a>
                                                <div class="reviews-reaction">
                                                    <a href="#" class="comment-like"><i class="la la-thumbs-up"></i> 13</a>
                                                    <a href="#" class="comment-dislike"><i class="la la-thumbs-down"></i> 2</a>
                                                    <a href="#" class="comment-love"><i class="la la-heart-o"></i> 5</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end comments -->
                                </div><!-- end comments-list -->
                            </div><!-- end single-content-item -->
                        </div><!-- end review-box -->
                    </div><!-- end single-content-wrap -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar single-content-sidebar mb-0">
                        <div class="sidebar-widget single-content-widget">
                            <div class="sidebar-widget-item">
                                <div class="sidebar-book-title-wrap mb-3">
                                    <h3>Popular</h3>
                                    <p><span class="text-form">From</span><span class="text-value ml-2 mr-1">₹4500.00</span> <span class="before-price">₹5500.00</span></p>
                                </div>
                            </div><!-- end sidebar-widget-item -->
                            <div class="sidebar-widget-item">
                                <div class="contact-form-action">
                                    <form action="#">
                                        <div class="input-box">
                                            <label class="label-text">Check in - Check out</label>
                                            <div class="form-group">
                                                <!-- <span class="la la-calendar form-icon"></span> -->
                                                <input class="date-range form-control" type="text" name="daterange" value="04/28/2020">
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text">Rooms</label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select">
                                                        <option value="0">Select Rooms</option>
                                                        <option value="1">1 Room</option>
                                                        <option value="2">2 Rooms</option>
                                                        <option value="3">3 Rooms</option>
                                                        <option value="4">4 Rooms</option>
                                                        <option value="5">5 Rooms</option>
                                                        <option value="6">6 Rooms</option>
                                                        <option value="7">7 Rooms</option>
                                                        <option value="8">8 Rooms</option>
                                                        <option value="9">9 Rooms</option>
                                                        <option value="10">10 Rooms</option>
                                                        <option value="11">11 Rooms</option>
                                                        <option value="12">12 Rooms</option>
                                                        <option value="13">13 Rooms</option>
                                                        <option value="14">14 Rooms</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end sidebar-widget-item -->
                            <div class="sidebar-widget-item">
                                <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                    <label class="font-size-16">Adults <span>Age 18+</span></label>
                                    <div class="qtyBtn d-flex align-items-center">
                                        <input type="text" name="qtyInput" value="0">
                                    </div>
                                </div><!-- end qty-box -->
                                <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                    <label class="font-size-16">Children <span>2-12 years old</span></label>
                                    <div class="qtyBtn d-flex align-items-center">
                                        <input type="text" name="qtyInput" value="0">
                                    </div>
                                </div><!-- end qty-box -->
                                <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                    <label class="font-size-16">Infants <span>0-2 years old</span></label>
                                    <div class="qtyBtn d-flex align-items-center">
                                        <input type="text" name="qtyInput" value="0">
                                    </div>
                                </div><!-- end qty-box -->
                            </div><!-- end sidebar-widget-item -->
                            <div class="btn-box pt-2">
                                <a href="http://arthtechsolutions.com/makemytrip/holiday_booking" class="theme-btn text-center w-100 mb-2"><!-- <i class="la la-shopping-cart mr-2 font-size-18"></i> -->Book Now</a>
                                <!-- <a href="#" class="theme-btn text-center w-100 theme-btn-transparent"><i class="la la-heart-o mr-2"></i>Add to Wishlist</a -->
                            </div>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Enquiry Form</h3>
                            <div class="enquiry-forum">
                                <div class="form-box">
                                    <div class="form-content">
                                        <div class="contact-form-action">
                                            <form method="post">
                                                <div class="input-box">
                                                    <label class="label-text">Your Name</label>
                                                    <div class="form-group">
                                                        <!-- <span class="la la-user form-icon"></span> -->
                                                        <input class="form-control" type="text" name="text" placeholder="Your name">
                                                    </div>
                                                </div>
                                                <div class="input-box">
                                                    <label class="label-text">Your Email</label>
                                                    <div class="form-group">
                                                       <!--  <span class="la la-envelope-o form-icon"></span> -->
                                                        <input class="form-control" type="email" name="email" placeholder="Email address">
                                                    </div>
                                                </div>
                                                <div class="input-box">
                                                    <label class="label-text">Message</label>
                                                    <div class="form-group">
                                                       <!--  <span class="la la-pencil form-icon"></span> -->
                                                        <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="input-box">
                                                    <div class="form-group">
                                                        <div class="custom-checkbox mb-0">
                                                            <input type="checkbox" id="agreeChb">
                                                            <label for="agreeChb">I agree with <a href="#">Terms of Service</a> and
                                                                <a href="#">Privacy Statement</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-box">
                                                    <button type="button" class="theme-btn">Submit Enquiry</button>
                                                </div>
                                            </form>
                                        </div><!-- end contact-form-action -->
                                    </div><!-- end form-content -->
                                </div><!-- end form-box -->
                            </div><!-- end enquiry-forum -->
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Why Book With Us?</h3>
                            <div class="sidebar-list">
                                <ul class="list-items">
                                    <li><i class="las la-rupee-sign icon-element mr-2"></i>No-hassle best price guarantee</li>
                                    <li><i class="la la-microphone icon-element mr-2"></i>Customer care available 24/7</li>
                                    <li><i class="la la-thumbs-up icon-element mr-2"></i>Hand-picked Tours & Activities</li>
                                    <li><i class="la la-file-text icon-element mr-2"></i>Free Travel Insureance</li>
                                </ul>
                            </div><!-- end sidebar-list -->
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Get a Question?</h3>
                            <p class="font-size-14 line-height-24">Do not hesitate to give us a call. We are an expert team and we are happy to talk to you.</p>
                            <div class="sidebar-list pt-3">
                                <ul class="list-items">
                                    <li><i class="la la-phone icon-element mr-2"></i><a href="#">+ 0123654789</a></li>
                                    <li><i class="la la-envelope icon-element mr-2"></i><a href="mailto:info@trizen.com">info@travelmazi.com</a></li>
                                </ul>
                            </div><!-- end sidebar-list -->
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single-content-box -->
</section><!-- end tour-detail-area -->
<!-- ================================
    END TOUR DETAIL AREA
================================= -->




@endsection
