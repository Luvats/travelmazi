@extends('layouts.admin')

@section('content')
<style type="text/css">
    .dasboard_div {
        cursor: pointer !important;
    }
</style>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>
        <!-- Widgets -->
        <div class="row clearfix">

            <a href="{{ url('admin/flight-booking')}}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">airplanemode_active</i>
                        </div>
                        <div class="content">
                            <div class="text">Flight Booked</div>
                            <div class="number count-to" data-from="0" data-to="{{ $flight_booking_count }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ url('admin/blogs')}}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-zoom-effect dasboard_div">
                        <div class="icon">
                            <i class="material-icons">note</i>
                        </div>
                        <div class="content">
                            <div class="text">Blogs</div>
                            <div class="number count-to" data-from="0" data-to="{{ $blog_count }}" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ url('admin/offers')}}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal hover-zoom-effect dasboard_div">
                        <div class="icon">
                            <i class="material-icons">store</i>
                        </div>
                        <div class="content">
                            <div class="text">Offers</div>
                            <div class="number count-to" data-from="0" data-to="{{ $offer_count }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ url('admin/coupons')}}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">store</i>
                        </div>
                        <div class="content">
                            <div class="text">Coupons</div>
                            <div class="number count-to" data-from="0" data-to="{{ $coupon_count }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ url('admin/gallery')}}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">image</i>
                        </div>
                        <div class="content">
                            <div class="text">Gallery</div>
                            <div class="number count-to" data-from="0" data-to="{{ $gallery_count }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ url('admin/cities')}}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">airplanemode_active</i>
                        </div>
                        <div class="content">
                            <div class="text">Flights Name</div>
                            <div class="number count-to" data-from="0" data-to="{{ $city_count }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ url('admin/airlines')}}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-indigo hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">airplanemode_active</i>
                        </div>
                        <div class="content">
                            <div class="text">Airlines</div>
                            <div class="number count-to" data-from="0" data-to="{{ $airline_count }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ url('admin/visa_type')}}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-brown hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">book</i>
                        </div>
                        <div class="content">
                            <div class="text">Visa Type</div>
                            <div class="number count-to" data-from="0" data-to="{{ $visa_type_count }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ url('admin/visa')}}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">book</i>
                        </div>
                        <div class="content">
                            <div class="text">Visa</div>
                            <div class="number count-to" data-from="0" data-to="{{ $visa_count }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ url('admin/cities')}}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">location_city</i>
                        </div>
                        <div class="content">
                            <div class="text">Cities</div>
                            <div class="number count-to" data-from="0" data-to="{{ $coupon_count }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </a>


        </div>
    </div>
</section>
@endsection