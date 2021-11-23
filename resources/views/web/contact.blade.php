@extends('layouts.web')
@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="contact_banner">
    <div class="container">
        <h2>Contact Us</h2>       
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START CONTACT AREA
================================= -->
<section class="contact-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title">We'd love to hear from you</h3>
                        <p class="font-size-15">Send us a message and we'll respond as soon as possible</p>
                    </div><!-- form-title-wrap -->
                    <div class="form-content ">
                        <div class="contact-form-action">
                            <form method="post" class="row">
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label class="label-text">Your Name</label>
                                        <div class="form-group">
                                           <!--  <span class="la la-user form-icon"></span> -->
                                            <input class="form-control" type="text" name="text" placeholder="Your name">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label class="label-text">Your Email</label>
                                        <div class="form-group">
                                            <!-- <span class="la la-envelope-o form-icon"></span> -->
                                            <input class="form-control" type="email" name="email" placeholder="Email address">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <label class="label-text">Message</label>
                                        <div class="form-group">
                                            <!-- <span class="la la-pencil form-icon"></span> -->
                                            <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-12 -->
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <div class="recapcha-box pb-4 d-flex align-items-center">
                                            <label class="label-text flex-shrink-0 mr-3 mb-0">What is? 3 + 5 =</label>
                                            <input class="form-control" type="text" name="text" placeholder="Type answer">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-12 -->
                                <div class="col-lg-12">
                                    <div class="btn-box">
                                        <button type="button" class="theme-btn">Send Message</button>
                                    </div>
                                </div><!-- end col-lg-12 -->
                            </form>
                        </div><!-- end contact-form-action -->
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title">Contact Us</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content">
                        <div class="address-book">
                            <ul class="list-items contact-address">
                                <li>
                                    <i class="la la-map-marker icon-element"></i>
                                    <h5 class="title font-size-16 pb-1">Address</h5>
                                    @if(!empty($supportdetails->address))
                                        <p class="map__desc">{{$supportdetails->address}}</p>
                                    @endif
                                </li>
                                <li>
                                    <i class="la la-phone icon-element"></i>
                                    <h5 class="title font-size-16 pb-1">Phone</h5>
                                   
                                     @if(!empty($supportdetails->phone))
                                        <p class="map__desc">+91-{{$supportdetails->phone}}</p>
                                    @endif
                                </li>
                                <li>
                                    <i class="la la-envelope-o icon-element"></i>
                                    <h5 class="title font-size-16 pb-1">Email</h5>
                                   
                                     @if(!empty($supportdetails->email))
                                        <p class="map__desc">{{$supportdetails->email}}</p>
                                    @endif
                                </li>
                            </ul>
                            <ul class="social-profile text-center">
                                @if(!empty($supportdetails->fb_link))
                                    <li>
                                        <a href="{{$supportdetails->fb_link}}" target="_blank">
                                            <i class="lab la-facebook-f"></i>
                                        </a>
                                    </li>
                                @endif
                                @if(!empty($supportdetails->twitter_link))
                                    <li>
                                        <a href="{{$supportdetails->twitter_link}}" target="_blank">
                                            <i class="lab la-twitter"></i>
                                        </a>
                                    </li>
                                @endif
                                @if(!empty($supportdetails->instagram_link))
                                    <li><a href="{{$supportdetails->instagram_link}}" target="_blank">
                                        <i class="lab la-instagram"></i>
                                    </a>
                                </li>
                                @endif
                                @if(!empty($supportdetails->linkedin_link))
                                    <li>
                                        <a href="{{$supportdetails->linkedin_link}}" target="_blank">
                                            <i class="lab la-linkedin-in"></i>
                                        </a>
                                    </li>
                                @endif
                                @if(!empty($supportdetails->utube_link))
                                    <li>
                                        <a href="{{$supportdetails->utube_link}}" target="_blank">
                                            <i class="lab la-youtube"></i>
                                        </a>
                                    </li>
                                @endif
                               
                                
                                
                                
                                
                                
                            </ul>
                        </div>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end contact-area -->
<!-- ================================
    END CONTACT AREA
================================= -->


@endsection
