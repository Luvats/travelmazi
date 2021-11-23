@extends('layouts.web')
@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<marquee style="background-color:#86ccff;">
    <h6 style="color:#f93; font-weight: 900;">Welcome To TRAVEL MAZI</h6>
</marquee>
<section class="about_banner">
        <div class="container">
            <marquee><h2>About Us</h2></marquee>
        </div>
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START INFO AREA
================================= -->
<section class="info-area padding-top-50px padding-bottom-70px">
    <div class="container">
        <div class="row">
            @if(isset($blogdetails))
                @foreach($blogdetails as $blog)
                    <div class="col-lg-4 responsive-column">
                        <div class="card-item ">
                            <div class="card-img">
                                <img src="{{asset('/public/blog_image')}}/{{$blog->image}} " alt="about-img">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title mb-2">{{ucfirst($blog->title)}}</h3>
                                <p class="card-text">
                                    <?php echo ucfirst($blog->blog);?>
                                </p>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-4 -->
                @endforeach
            @endif
            
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->
<!-- ================================
    END INFO AREA
================================= -->

<!-- ================================
    START ABOUT AREA
================================= -->
<section class="about-area padding-bottom-90px overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading margin-bottom-40px">
                    <h2 class="sec__title">About Us</h2>
                   <!--  <h4 class="title font-size-16 line-height-26 pt-4 pb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</h4> -->
                   <!--  <p class="sec__desc font-size-16 pb-3">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p class="sec__desc font-size-16 pb-3"> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="sec__desc font-size-16">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </p> -->

                    <?php echo $aboutdetails->about;?>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-5 ml-auto">
                <div class="image-box about-img-box">
                    <img src="http://arthtechsolutions.com/makemytrip/public/web/img/ab_lorem.jpg " alt="about-img" class="img__item img__item-1">
                    <img src="http://arthtechsolutions.com/makemytrip/public/web/img/pack.jpg " alt="about-img" class="img__item img__item-2">
                </div>
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!-- ================================
    END ABOUT AREA
================================= -->


@endsection
