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
					<div class="col-lg-3 pr-0 travel">
                        <div class="input-box">
                            <label class="label-text">PICKUP-TIME</label>
                            <div class="form-group">
                                <!-- <span class="la la-map-marker form-icon"></span> -->
                                <input class="form-control" type="time" placeholder="09:50AM">
                            </div>
                        </div>   
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
            <div class="col-lg-12">
                <div class="filter-wrap margin-bottom-30px">
                    <div class="filter-bar d-flex align-items-center justify-content-between short-df">
                        <div class="select-contain">
                            <select class="select-contain-select">
                                <option value="1">Short by default</option>
                                <option value="2">New Car</option>
                                <option value="3">Popular Car</option>
                                <option value="4">Popular Cruise</option>
                                <option value="5">Price: low to high</option>
                                <option value="6">Price: high to low</option>
                                <option value="7">A to Z</option>
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
                        <h3 class="title stroke-shape">Search Cars</h3>
                        <div class="sidebar-widget-item">
                            <div class="contact-form-action">
                                <form action="#">
                                    <div class="input-box">
                                        <label class="label-text">Pick-up From</label>
                                        <div class="form-group">
                                            <!-- <span class="la la-map-marker form-icon"></span> -->
                                            <input class="form-control" type="text" placeholder="Destination, city, or region">
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">Drop-off to</label>
                                        <div class="form-group">
                                            <!-- <span class="la la-map-marker form-icon"></span> -->
                                            <input class="form-control" type="text" placeholder="Destination, city, or region">
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">Pick-up Date</label>
                                        <div class="form-group">
                                            <!-- <span class="la la-calendar form-icon"></span> -->
                                            <input class="date-range form-control" type="text" name="daterange-single" value="04/28/2020">
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">Time</label>
                                        <div class="form-group">
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
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">Drop-off Date</label>
                                        <div class="form-group">
                                            <!-- <span class="la la-calendar form-icon"></span> -->
                                            <input class="date-range form-control" type="text" name="daterange-single" value="04/28/2020">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- end sidebar-widget-item -->
                        <div class="main-search-input-item">
                            <div class="contact-form-action">
                                <form action="#">
                                    <div class="input-box">
                                        <label class="label-text">Time</label>
                                        <div class="form-group">
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
                                        </div>
                                    </div>
                                    <div class="btn-box pt-2">
                                        <a href="car-search-result.html" class="theme-btn">Search Now</a>
                                    </div>
                                </form>
                            </div>
                        </div><!-- end main-search-input-item -->
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Filter by Price</h3>
                        <div class="sidebar-price-range">
                            <div class="slider-range-wrap">
                                <div class="price-slider-amount padding-bottom-20px">
                                    <label for="amount2" class="filter__label">Price:</label>
                                    <input type="text" id="amount2" class="amounts">
                                </div><!-- end price-slider-amount -->
                                <div id="slider-range2"></div><!-- end slider-range -->
                            </div><!-- end slider-range-wrap -->
                            <div class="btn-box pt-4">
                                <button class="theme-btn theme-btn-small theme-btn-transparent" type="button">Apply</button>
                            </div>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Review Score</h3>
                        <div class="sidebar-category">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="r6">
                                <label for="r6">Excellent</label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="r7">
                                <label for="r7">Very Good</label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="r8">
                                <label for="r8">Average</label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="r9">
                                <label for="r9">Poor</label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="r10">
                                <label for="r10">Terrible</label>
                            </div>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Filter by Rating</h3>
                        <div class="sidebar-review">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="s1">
                                <label for="s1">
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
                                <input type="checkbox" id="s2">
                                <label for="s2">
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
                                <input type="checkbox" id="s3">
                                <label for="s3">
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
                                <input type="checkbox" id="s4">
                                <label for="s4">
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
                                <input type="checkbox" id="s5">
                                <label for="s5">
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
                        <h3 class="title stroke-shape">Categories</h3>
                        <div class="sidebar-category">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="cat1">
                                <label for="cat1">Convertibles <span class="font-size-13 ml-1">(1809)</span></label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="cat2">
                                <label for="cat2">Coupes <span class="font-size-13 ml-1">(809)</span></label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="cat3">
                                <label for="cat3">Hatchbacks <span class="font-size-13 ml-1">(504)</span></label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="cat4">
                                <label for="cat4">Minivans <span class="font-size-13 ml-1">(401)</span></label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="cat5">
                                <label for="cat5">Sedan <span class="font-size-13 ml-1">(277)</span></label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="cat6">
                                <label for="cat6">SUVs <span class="font-size-13 ml-1">(87)</span></label>
                            </div>
                            <div class="collapse" id="categoryMenu">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat7">
                                    <label for="cat7">Trucks <span class="font-size-13 ml-1">(100)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat8">
                                    <label for="cat8">Wagons <span class="font-size-13 ml-1">(58)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat9">
                                    <label for="cat9">Compact Elite <span class="font-size-13 ml-1">(33)</span></label>
                                </div>
                            </div><!-- end collapse -->
                            <a class="btn-text" data-toggle="collapse" href="#categoryMenu" role="button" aria-expanded="false" aria-controls="categoryMenu">
                                <span class="show-more">Show More <i class="la la-angle-down"></i></span>
                                <span class="show-less">Show Less <i class="la la-angle-up"></i></span>
                            </a>
                        </div>
                    </div><!-- end sidebar-widget -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-8">
                <div class="card-item car-card card-item-list">
                    <div class="card-img">
                        <a href="{{url('/single_car')}}" class="d-block">
                            <img src="{{asset('public/web/img/car.jpg')}}" alt="car-img" class="h-100">
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="card-meta">Lorem Ipsum</p>
                        <h3 class="card-title"><a href="{{url('/single_car')}}">Maruti Swift</a></h3>
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
                                <span class="price__num">₹523.00</span>
                            </p>
                            <a href="{{url('/single_car')}}" class="btn-text">See details<i class="la la-angle-right"></i></a>
                        </div>
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
                <div class="card-item car-card card-item-list">
                    <div class="card-img">
                        <a href="{{url('/single_car')}}" class="d-block">
                            <img src="{{asset('public/web/img/car.jpg')}}" alt="car-img" class="h-100">
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="card-meta">Lorem Ipsum</p>
                        <h3 class="card-title"><a href="{{url('/single_car')}}">Maruti Swift</a></h3>
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
                <div class="card-item car-card card-item-list">
                    <div class="card-img">
                        <a href="{{url('/single_car')}}" class="d-block">
                            <img src="{{asset('public/web/img/verna.jpg')}}" alt="car-img" class="h-100">
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="card-meta">Lorem Ipsum</p>
                        <h3 class="card-title"><a href="{{url('/single_car')}}">Hyundai Verna</a></h3>
                        <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div>
                        <div class="card-attributes">
                            <ul class="d-flex align-items-center">
                                <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>6</span></li>
                                <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>2</span></li>
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
                <div class="card-item car-card card-item-list">
                    <div class="card-img">
                        <a href="{{url('/single_car')}}" class="d-block">
                            <img src="{{asset('public/web/img/car.jpg')}}" alt="car-img" class="h-100">
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="card-meta">Lorem Ipsum</p>
                        <h3 class="card-title"><a href="{{url('/single_car')}}">Maruti Swift</a></h3>
                        <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div>
                        <div class="card-attributes">
                            <ul class="d-flex align-items-center">
                                <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>5</span></li>
                                <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>3</span></li>
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
                <div class="card-item car-card card-item-list">
                    <div class="card-img">
                        <a href="{{url('/single_car')}}" class="d-block">
                            <img src="{{asset('public/web/img/verna.jpg')}}" alt="car-img" class="h-100">
                        </a>
                        <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Save for later">
                            <!-- <i class="la la-heart-o"></i> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-meta">Lorem Ipsum</p>
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
                                <span class="price__num">₹623.00.00</span>
                            </p>
                            <a href="{{url('/single_car')}}" class="btn-text">See details<i class="la la-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- end card-item -->
                <div class="card-item car-card card-item-list">
                    <div class="card-img">
                        <a href="{{url('/single_car')}}" class="d-block">
                            <img src="{{asset('public/web/img/car.jpg')}}" alt="car-img" class="h-100">
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="card-meta">Lorem Ipsum</p>
                        <h3 class="card-title"><a href="car-single.html">Maruti Swift</a></h3>
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
                                <span class="price__num">₹623.00.00</span>
                            </p>
                            <a href="{{url('/single_car')}}" class="btn-text">See details<i class="la la-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- end card-item -->

            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box mt-3 text-center">
                    <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                    <p class="font-size-13 pt-2">Showing 1 - 6 of 44 Cars</p>
                </div><!-- end btn-box -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->












@endsection