@extends('layouts.web')
@section('content')
<?php
//echo '<pre>'; var_dump($booking_details['tripInfos'][0]['totalPriceList'][0]['fd']['ADULT']['mI']); die; 
?>
<style>
    p {
        font-weight: normal;
    }
</style>
<!-- ================================
    START BREADCRUMB AREA
================================= -->
@if(!empty($booking_details['status']['success']))
<section class="flight-summery">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="flight-summery-heading flights-summery">Flight Summary</h3>
            </div>
            <div class="col-lg-4">
                <h3 class="flight-summery-heading flights-summery">Fare Summary</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="white-card">
                    <div class="row">
                        @php
                        $start_tym = explode("T",$booking_details['tripInfos'][0]['sI'][0]['dt']);
                        $end_tym = explode("T",$booking_details['tripInfos'][0]['sI'][0]['at']);

                        $final_startdate = date_create($start_tym[0]);
                        $final_enddate = date_create($end_tym[0]);
                        @endphp
                        <div class="col-lg-12">
                            <div class="Departure-flight-summery">
                                <p class="flight-summery-heading">{{$booking_details['tripInfos'][0]['sI'][0]['da']['city']}} - {{$booking_details['tripInfos'][0]['sI'][0]['aa']['city']}}</p>
                                <p class="font18">Departure {{ date_format($final_startdate,"D, d M y") }}</p>
                            </div>
                        </div>
                        @php
                        $logo_details = DB::table('airlines')->where('airlines_code',$booking_details['tripInfos'][0]['sI'][0]['fD']['aI']['code'])->where('airline_status',1)->first();
                        @endphp

                        <div class="col-lg-3 d-flex align-items-center align-self-start">
                            @if(empty($logo_details))
                            <img src="{{asset('public/web/img/airindia.png')}}" alt="flight-logo-img" class="img-fluid" style="width: 25%; height: auto; margin-right: 15px;">
                            @else
                            <img src="{{url('public/airlines_logo')}}/{{$logo_details->airlines_logo}}" alt="flight-logo-img" class="img-fluid" style="width: 25%; height: auto; margin-right: 15px;">
                            @endif


                            <p class="jet-name">{{$booking_details['tripInfos'][0]['sI'][0]['fD']['aI']['name']}}</p>
                        </div>
                        @php
                        function hoursandmins($time)
                        {
                        $format = '%02d hrs %02d mins';
                        $minFormat = '%02d mins';
                        $hrsFormat = '%02d hrs';
                        if ($time < 1) { return; } $hours=floor($time / 60); $minutes=($time % 60); if(($hours> 0) && ($minutes > 0)) {
                            return sprintf($format, $hours, $minutes);
                            } else if($hours > 0) {
                            return sprintf($hrsFormat, $hours);
                            } else {
                            return sprintf($minFormat, $minutes);
                            }
                            }
                            @endphp
                            @php
                            $start_tym = explode("T",$booking_details['tripInfos'][0]['sI'][0]['dt']);
                            $end_tym = explode("T",$booking_details['tripInfos'][0]['sI'][0]['at']);

                            $final_startdate = date_create($start_tym[0]);

                            $final_enddate = date_create($end_tym[0]);

                            @endphp
                            <div class="col-lg-3">
                                <h6 class="dept-time">{{$start_tym[1] }}</h6>
                                <p class="dept-date">{{ date_format($final_startdate,"D, d M y") }}</p>
                                <p class="dept-city">{{ $booking_details['tripInfos'][0]['sI'][0]['da']['city'] }}<?php if (!empty($booking_details['tripInfos'][0]['sI'][0]['da']['terminal'])) echo $booking_details['tripInfos'][0]['sI'][0]['da']['terminal']; ?></p>

                            </div>
                            <div class="col-lg-3 align-self-center text-center">
                                <p class="timing">{{ hoursandmins($booking_details['tripInfos'][0]['sI'][0]['duration']) }}</p>
                                <img src="{{ asset('public/web/img/boview.png')}}">

                            </div>
                            <div class="col-lg-3">
                                <h6 class="dept-time">{{$end_tym[1] }}</h6>
                                <p class="dept-date">{{ date_format($final_startdate,"D, d M y") }}</p>
                                <p class="dept-city">{{ $booking_details['tripInfos'][0]['sI'][0]['aa']['city'] }}</p>
                                <p class="teminal-no">{{ $booking_details['tripInfos'][0]['sI'][0]['aa']['city'] }}-{{ $booking_details['tripInfos'][0]['sI'][0]['aa']['countryCode'] }}, <?php if (!empty($booking_details['tripInfos'][0]['sI'][0]['aa']['terminal'])) echo $booking_details['tripInfos'][0]['sI'][0]['aa']['terminal']; ?></p>
                            </div>
                    </div>
                </div>
                <h3 class="flight-summery-heading">Traveller Details</h3>
                <form name="traveller_details" id="traveller_details" method="POST" action="{{url('/traveller_details')}}">
                    @csrf
                    <input type="hidden" name="bookingId" value="{{$booking_details['bookingId']}}">

                    @php
                    $adult_count = $booking_details['searchQuery']['paxInfo']['ADULT'];
                    $child_count = $booking_details['searchQuery']['paxInfo']['CHILD'];
                    $infant_count = $booking_details['searchQuery']['paxInfo']['INFANT'];

                    @endphp
                    @if($booking_details['searchQuery']['paxInfo']['ADULT'] > 0)
                    @php
                    for($i=1; $i<=$adult_count; $i++) { @endphp <div class="white-card">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="heading-txt">ADULT {{$i}}</p>
                            </div>
                            <div class="col-lg-12">
                                <p class="topInfo"><b>IMPORTANT:</b> Enter your name as it is mentioned on your passport or any goverment approved id.</p>
                            </div>
                            <div class="row visa-detail-row">
                                <div class="col-lg-4">
                                    <input class="form-control" type="text" name="adult[{{$i}}]['name']" placeholder="First & Middle Name" required>
                                </div>
                                <div class="col-lg-4">
                                    <input class="form-control" type="text" name="adult[{{$i}}]['last_name']" placeholder="Last Name">
                                </div>
                                <div class="col-lg-4">
                                    <select class="tvlrInput  select-summery" name="adult[{{$i}}]['gender']" required="">
                                        <optgroup label="select">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">whealchair</label><br>
                                        <select class="tvlrInput  select-summery" name="adult[{{$i}}]['wheelchair']" required="">
                                            <optgroup label="whealchair">
                                                <option value="not_required">Not Required</option>
                                                <option value="required">Required</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            @php
            }
            @endphp
            @endif
            @if($booking_details['searchQuery']['paxInfo']['CHILD'] > 0)
            @php
            for($i=1; $i<=$child_count; $i++) { @endphp <div class="white-card">
                <div class="row">
                    <div class="for-child">
                        <div class="col-lg-12">
                            <p class="heading-txt">CHILD</p>
                            <p>Child 2-12 years old on the day of travel</p>
                        </div>
                        <div class="col-lg-12">
                            <p class="topInfo"><b>IMPORTANT:</b> Enter your name as it is mentioned on your passport or any goverment approved id.</p>
                        </div>
                        <div class="row visa-detail-row">
                            <div class="col-lg-4">
                                <input class="form-control" type="text" name="child[{{$i}}]['name']" placeholder="First & Middle Name" required>
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control" type="text" name="child[{{$i}}]['last_name']" placeholder="Last Name">
                            </div>
                            <div class="col-lg-4">
                                <select class="tvlrInput select-summery" name="child[{{$i}}]['gender']" required="">
                                    <optgroup label="Select">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">whealchair</label><br>
                                    <select class="tvlrInput select-summery" name="child[{{$i}}]['wheelchair']" required="">
                                        <optgroup label="whealchair">
                                            <option value="not_required">Not Required</option>
                                            <option value="required">Required</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @php
        }
        @endphp
        @endif
        @if($booking_details['searchQuery']['paxInfo']['INFANT'] > 0)
        @php
        for($i=1; $i<=$infant_count; $i++) { @endphp <div class="white-card">
            <div class="row">
                <div class="for-child">
                    <div class="col-lg-12">
                        <p class="heading-txt">INFANT</p>
                        <p>Infant 0-2 years old on the day of travel</p>
                    </div>
                    <div class="col-lg-12">
                        <p class="topInfo"><b>IMPORTANT:</b> Enter your name as it is mentioned on your passport or any goverment approved id.</p>
                    </div>
                    <div class="row visa-detail-row">
                        <div class="col-lg-4">
                            <input class="form-control" type="text" name="infant[{{$i}}]['name']" placeholder="First & Middle Name" required>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" name="infant[{{$i}}]['last_name']" placeholder="Last Name">
                        </div>
                        <div class="col-lg-4">
                            <select class="tvlrInput select-summery" name="infant[{{$i}}]['gender']" required="">
                                <optgroup label="Select">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">whealchair</label><br>
                                <select class="tvlrInput select-summery" name="infant[{{$i}}]['wheelchair']" required="">
                                    <optgroup label="whealchair">
                                        <option value="not_required">Not Required</option>
                                        <option value="required">Required</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @php
    }
    @endphp
    @endif


    <!-- <?php if (!empty($fareRules['policy'])) : ?>
        <h3 class="flight-summery-heading">Fare Rules</h3>
        <div class="white-card">
            <div class="col-lg-12 policy-card">

                <p><b>Policy</b><br>{{$fareRules['policy']}}</p>
                <p><b>Date Change Policy</b><?php echo str_replace('__nls__', '<br>', $fareRules['dateChangePolicy']); ?></p>
                <p><b>Cancellation Policy</b><?php echo str_replace('__nls__', '<br>', $fareRules['cancellationPolicy']); ?></p>

            </div>
        </div>
    <?php endif; ?> -->



    <h3 class="flight-summery-heading">Contact information</h3>
    <div class="white-card">
        <div class="col-lg-12">
            <p class="">Your ticket and flights information will be send here</p>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Country Code</label>
                        <select class="tvlrInput select-summery" name="contact_country_code" required>
                            @foreach($countryPhoneCodes as $row)
                            @if($row->dialCode=="+91")<option value="{{$row->dialCode}}">{{$row->name}} ({{$row->dialCode}})</option> @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Mobile No</label>
                        <input type="text" class="form-control" name="contact_mobile_number" placeholder="mobile number" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="contact_email" placeholder="enter your email" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="flight-summery-heading">GST information</h3>
    <div class="white-card">
        <div class="col-lg-12">

            <div class="form-group">
                <label>GST Number: </label>
                <input type="text" class="form-control" name="gst_number" placeholder="GST Number">
            </div>

        </div>
    </div>
    <!-- <?php if (!empty($booking_details['tripInfos'][0]['sI'][0]['ssrInfo']['BAGGAGE'])) : ?>
        <h3 class="flight-summery-heading">Extra Baggages</h3>
        <div class="white-card">
            <div class="col-lg-12">

                <?php foreach ($booking_details['tripInfos'][0]['sI'][0]['ssrInfo']['BAGGAGE'] as $row) {
                    // echo '<pre>'; var_dump($row);
                ?>
                    <input type="checkbox" class="baggage" id="{{$row['amount']}}" name="baggages[]" value="{{$row['code']}}"> Pay Extra ₹{{$row['amount']}} - {{$row['desc']}}<br>
                <?php
                }
                ?>
            </div>
        </div>
    <?php endif; ?> -->

    <?php if (!empty($booking_details['tripInfos'][0]['sI'][0]['ssrInfo']['MEAL']) && $booking_details['tripInfos'][0]['totalPriceList'][0]['fd']['ADULT']['mI'] == true) : ?>
        <h3 class="flight-summery-heading">Select Free meals</h3>
        <div class="white-card">
            <div class="col-lg-12">

                <?php foreach ($booking_details['tripInfos'][0]['sI'][0]['ssrInfo']['MEAL'] as $row) {
                    // echo '<pre>'; var_dump($row);
                ?>
                    <input type="radio" name="meals[]" value="{{$row['code']}}"> {{$row['desc']}}<br>
                <?php
                }
                ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (!empty($booking_details['tripInfos'][0]['sI'][0]['ssrInfo']['MEAL']) && $booking_details['tripInfos'][0]['totalPriceList'][0]['fd']['ADULT']['mI'] == false) : ?>
        <h3 class="flight-summery-heading">Extra Meals</h3>
        <div class="white-card">
            <div class="col-lg-12">

                <?php foreach ($booking_details['tripInfos'][0]['sI'][0]['ssrInfo']['MEAL'] as $row) {
                    // echo '<pre>'; var_dump($row);
                ?>
                    &nbsp; <?php if ($row['amount'] == 0) {
                                echo "Free Provided";
                            } else { ?><input type="checkbox" name="meals[]" class="meal" value="{{$row['code']}}" id="{{$row['amount']}}"> <?php echo "Pay Extra ₹" . $row['amount'];
                                                                                                                                                                                        } ?> - {{$row['desc']}}<br>
                <?php
                }
                ?>
            </div>
        </div>
    <?php endif; ?>
    <h3 class="flight-summery-heading">Acknowledgement</h3>
    <div class="white-card">
        <p class="acknowledgement">By clicking on the Continue button below to proceed with the booking, I confirm that I have read and I accept the <a href=""> Fare Rules</a>, the<a href=""> Privacy Policy</a> , the <a href="">User Agreement</a> and<a href=""> Terms of Service</a> of MakeMyTrip</p>
        <button class=" capsuleFillBtn theme-btn" type="submit">Continue</button>
    </div>
    </form>
    <input type="hidden" id="adult_count" value="{{$adult_count}}">
    <input type="hidden" id="child_count" value="{{$child_count}}">
    <input type="hidden" id="infant_count" value="{{$infant_count}}">

    </div>
    <div class="col-lg-4">
        <div class="white-card">
            <div class="row no-gutters justify-content-between align-items-center">
                <div class="col-lg-5 fare-fee">
                    <p>Base Fare</p>
                </div>
                <div class="col-lg-7">
                    <?php
                    $final_base_fare = 0;
                    $adult_base_fare = $booking_details['tripInfos'][0]['totalPriceList'][0]['fd']['ADULT']['fC']['BF'];
                    $adults = $booking_details['searchQuery']['paxInfo']['ADULT'];
                    if ($adults > 1) {
                        $final_base_fare = $adult_base_fare * $adults; ?>
                        <p class="text-right"> Adults: {{ $adults}} x &#8377; {{$adult_base_fare}}=<span> &#8377; {{$adult_base_fare*$adults}}</span></p>
                    <?php } else {
                        $final_base_fare = $adult_base_fare; ?>
                        <p class="text-right">Adult: 1 x {{$adult_base_fare}}=<span> {{$adult_base_fare}}</span></p>
                        <?php }

                    if ($booking_details['searchQuery']['paxInfo']['CHILD']) {
                        $childern = $booking_details['searchQuery']['paxInfo']['CHILD'];
                        $childern_base_fare = $booking_details['tripInfos'][0]['totalPriceList'][0]['fd']['CHILD']['fC']['BF'];

                        if ($childern > 1) {
                            $final_base_fare = $final_base_fare + ($childern_base_fare * $childern); ?>
                            <p>Childern: {{ $childern}} x &#8377; {{$childern_base_fare}}=<span style="float:right"> &#8377; {{$childern_base_fare*$childern}}</span></p>
                        <?php } else {
                            $final_base_fare = $final_base_fare + $childern_base_fare; ?>
                            <p class="text-right">Childern: 1 x &#8377; {{$childern_base_fare}}=<span> &#8377; {{$childern_base_fare}}</span></p>

                        <?php
                        }
                    }
                    if ($booking_details['searchQuery']['paxInfo']['INFANT']) {
                        $infant = $booking_details['searchQuery']['paxInfo']['INFANT'];
                        $infant_base_fare = $booking_details['tripInfos'][0]['totalPriceList'][0]['fd']['INFANT']['fC']['BF'];

                        if ($infant > 1) {
                            $final_base_fare = $final_base_fare + ($infant_base_fare * $infant); ?>
                            <p class="text-right"> Infants: {{ $infant}} x &#8377; {{$infant_base_fare}}=<span > &#8377; {{$infant_base_fare*$infant}}</span></p>
                        <?php } else {
                            $final_base_fare = $final_base_fare + $infant_base_fare;
                        ?>

                            <p class="text-right">Infant: 1 x &#8377; {{$infant_base_fare}}=<span > &#8377; {{$infant_base_fare}}</span></p>
                        <?php } ?>
                        </p>
                    <?php
                    }
                    ?>
                    <p class="text-right"><span >Total Base Fare: &#8377; {{$final_base_fare}}</span></p>
                </div>



                <hr class="w-100 my-0 mt-1">
                <div class="col-lg-6 fare-fee">
                    <p>Extra Baggage Amount</p>
                </div>
                <div class="col-lg-6 mt-1">
                    <p class=" text-right">&#8377;<span  id="baggage_amount">0</span></p>
                </div>
                <hr class="w-100 my-0 mt-1">
                <div class="col-lg-6 fare-fee">
                    <p>Extra Meal Amount</p>
                </div>
                <div class="col-lg-6 mt-1">
                    <p class=" text-right">&#8377;<span  id="meal_amount">0</span></p>
                </div>


                <hr class="w-100 my-0 mt-1">
                <div class="col-lg-6 fare-fee">
                    <p>Fee & Surcharges</p>
                </div>
                <div class="col-lg-6 mt-1 text-right">
                    <?php
                    $fee_fare = $booking_details['totalPriceInfo']['totalFareDetail']['fC']['TAF'];
                    setlocale(LC_MONETARY, 'en_IN');
                    // $final_fee_fare = money_format('%!i', $fee_fare);
                    $final_fee_fare =  $fee_fare;
                    ?>

                    <p class="text-right"><span>&#8377; {{$final_fee_fare}}</span></p>
                </div>
                <hr class="w-100 my-0 mt-1">
                <div class="col-lg-6 total-amount fare-fee">
                    <p>Total Amount:</p>
                </div>
                <div class="col-lg-6 total-amount mt-1 d-flex
                justify-content-end">
                    <?php
                    $total_fare = $booking_details['totalPriceInfo']['totalFareDetail']['fC']['TF'];
                    setlocale(LC_MONETARY, 'en_IN');
                    // $final_total_fare = money_format('%!i', $total_fare);
                    $final_total_fare =  $total_fare;
                    ?>
                    <p class=" text-right"><span >&#8377; <div id="base_fare">{{$final_total_fare}}</div></span></p>
                </div>
                <hr class="w-100 my-0">
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@else
No flight found
@endif
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('.meal').change(function() {
            if ($(this).prop("checked") == true) {
                $('#meal_amount').text(parseFloat($('#meal_amount').text()) + parseFloat($(this).attr('id')));
                $('#base_fare').text(parseFloat($('#base_fare').text()) + parseFloat($(this).attr('id')));
            } else if ($(this).prop("checked") == false) {
                $('#meal_amount').text(parseFloat($('#meal_amount').text()) - parseFloat($(this).attr('id')));
                $('#base_fare').text(parseFloat($('#base_fare').text()) - parseFloat($(this).attr('id')));
            }
        });
        $('.baggage').change(function() {
            if ($(this).prop("checked") == true) {
                $('#baggage_amount').text(parseFloat($('#baggage_amount').text()) + parseFloat($(this).attr('id')));
                $('#base_fare').text(parseFloat($('#base_fare').text()) + parseFloat($(this).attr('id')));
            } else if ($(this).prop("checked") == false) {
                $('#baggage_amount').text(parseFloat($('#baggage_amount').text()) - parseFloat($(this).attr('id')));
                $('#base_fare').text(parseFloat($('#base_fare').text()) - parseFloat($(this).attr('id')));
            }
        });
    });
</script>
@endsection