@extends('layouts.web')
@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="offer_banner">
        <div class="container">
            <h2>Offers</h2>
        </div>
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START INFO AREA
================================= -->
<section class="info-area padding-top-80px padding-bottom-30px">
    <div class="container">
        <div class="row">
            @if(isset($offer))
                @foreach($offer as $offr)
                    <div class="col-lg-4 responsive-column">
                        <div class="card-item ">
                            <div class="card-img">
                                <img src="{{asset('public/offer_image/')}}/{{$offr->offer_image}}" alt="about-img">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title mb-2">{{$offr->title}}</h3>
                                <p class="card-text">
                                   <?php echo $offr->offer;?>
                                </p>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-4 -->
                @endforeach
            @endif
            
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->





@endsection
