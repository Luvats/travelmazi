<div class="col-lg-9 flights-to-mumbai">
    <p class="heading">flights from <b>{{$from_city_name}} </b> to <b>{{$to_city_name}}</b>, and back</p>
    <div class="row">
        @if(!empty($all_flightdata) && isset($all_flightdata['searchResult']))
            @if(isset($all_flightdata['searchResult']['tripInfos']))
                @php  $x = 0; @endphp
                @php 
                    function hoursandmins($time)
                    {
                        $format = '%02d hrs %02d mins';
                        $minFormat = '%02d mins';
                        $hrsFormat = '%02d hrs';
                        if ($time < 1) {
                            return;
                        }
                        $hours = floor($time / 60);
                        $minutes = ($time % 60);
                        if(($hours > 0) && ($minutes > 0)) {
                            return sprintf($format, $hours, $minutes);
                        } else if($hours > 0) {
                            return sprintf($hrsFormat, $hours);
                        } else {
                            return sprintf($minFormat, $minutes);
                        }
                    }
                @endphp
                @if(isset($all_flightdata['searchResult']['tripInfos']['ONWARD']))
                    @php $tripInfos['ONWARD'] = $all_flightdata['searchResult']['tripInfos']['ONWARD']; @endphp
                    @endif
                @if(isset($all_flightdata['searchResult']['tripInfos']['RETURN']))
                    @php $tripInfos['RETURN'] = $all_flightdata['searchResult']['tripInfos']['RETURN']; @endphp
                @endif
                @foreach($tripInfos as $tripInfoKey => $tripInfo)
                    @if($tripInfoKey == 'ONWARD')
                        @php $main_class = 'new-listing-left'; @endphp
                    @elseif($tripInfoKey == 'RETURN')
                        @php $main_class = 'new-listing-right'; @endphp
                    @else
                        @php $main_class = ''; @endphp
                    @endif
                    <div class="col-lg-6 {{$main_class}}">
                        <div class="new-listing d-flex align-items-center justify-content-between mb-4">
                            <div class="departure-flight">
                                @if($tripInfoKey == 'ONWARD')
                                    <h5>Departure Flight</h5>
                                    @php
                                        $dept_date = date_create($show_dept_date);
                                        $dept_date = date_format($dept_date,"D, d M H:i:s");
                                    @endphp
                                    <p class="time">{{$from_city_name}} to {{$to_city_name}} | {{$dept_date}}</p>
                                @elseif($tripInfoKey == 'RETURN')
                                    <h5>Return Flight</h5>
                                    @php
                                        $return_date = date_create($show_return_date);
                                        $return_date = date_format($return_date,"D, d M H:i:s");
                                    @endphp
                                    <p class="time">{{$to_city_name}} to {{$from_city_name}} | {{$return_date}}</p>
                                @endif
                            </div>
                        </div>
                        @if(!empty($tripInfo))
                            @foreach($tripInfo as $rs)
                                @php
                                    $logo_details = DB::table('airlines')->where('airlines_code',$rs['sI'][0]['fD']['aI']['code'])->where('airline_status',1)->first();

                                @endphp
                                @php 
                                    $start_tym = explode("T",$rs['sI'][0]['dt']);
                                    $end_tym   = explode("T",$rs['sI'][0]['at']);

                                    $final_startdate=date_create($start_tym[0]);

                                    $final_enddate=date_create($end_tym[0]);                                    
                                    $final_startdate_return = $final_startdate;
                                    $final_enddate_return = $final_enddate;
                                @endphp
                                <div class="row  align-items-center  splitVw-listing no-gutters">
                                    <div class="col-lg-3 d-flex align-items-center">
                                        @if(empty($logo_details))
                                            <img src="{{asset('public/web/img/airindia.png')}}" alt="flight-logo-img">
                                        @else
                                            <img src="{{url('public/airlines_logo')}}/{{$logo_details->airlines_logo}}" alt="flight-logo-img">
                                        @endif 
                                        <div class="departure-time">
                                            <h5 class="float">{{$start_tym[1]}}</h5>
                                            <p>{{ $rs['sI'][0]['da']['city']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 no-gutters">
                                        <!-- <p><b>01</b> hr <b>40</b> mins</p> -->
                                        <p>{{ hoursandmins($rs['sI'][0]['duration']) }}</p>
                                        <hr class="center-hr">
                                        <p class="fli-stops-desc">
                                            @php 
                                                if($rs['sI'][0]['stops'] == 0) 
                                                    echo 'Non stop'; 
                                                else echo ($rs['sI'][0]['stops'] > 1 ) ? $rs['sI'][0]['stops'].' stops' : $rs['sI'][0]['stops'].' stop'; 
                                            @endphp
                                        </p>
                                    </div>
                                    <div class="col-lg-2">
                                        <h5>{{$end_tym[1]}}</h5>
                                        <p>{{ $rs['sI'][0]['aa']['city']}}</p>
                                    </div>
                                    <div class="col-lg-4 text-left d-flex">
                                        <h4> &#8377; 5,581</h4>
                                        <input type="radio" name="">
                                    </div>
                                    <hr class="last-hr">
                                </div>
                                @php $x++ ; @endphp
                            @endforeach
                        @else
                            <div class="notavilable">
                                <img src="{{asset('public/web/img/plane.png')}}" alt="flight-logo-img" class="img-fluid">
                                <h6>Flight's are not available</h6>
                                <p>No flights found on this route for the requested date.</p>
                                <a href="#">Back</a>
                            </div>
                        @endif
                    </div>
                    <!-- <div class="col-lg-6 new-listing-right">   
                        <div class="new-listing d-flex align-items-center justify-content-between mb-4">
                            <div class="departure-flight">
                                <h5>Return Flight</h5>
                                <p class="time">Chennai to Mumbai | Mon, 15 Mar</p>
                            </div>
                            <div class="dropdown-1">
                                <select class="shorted-by" id="shorted">
                                    <option  value=""><p>Prise</p><span> Low to High</span></option>
                                    <option value=""><p>Duration</p><span>Low to High</span></option>
                                    <option value=""><p>Departure (Bom)</p><span>Early</span></option>
                                    <option value=""><p></p><span>Late</span></option>
                                    <option value=""><p>Arrival (MAA)</p><span>Early</span></option>
                                    <option value=""><p></p><span>Late</span></option>

                                </select>
                            </div>
                        </div>
                        <div class="row  align-items-center no-gutters splitVw-listing">
                            <div class="col-lg-3 d-flex align-items-center">
                                <img src="{{ asset('public/airlines_logo/SG.png')}}" alt="flight-logo">
                                <div class="departure-time">
                                    <h5 class="float">21:05</h5>
                                    <p>Mumbai</p>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <p><b>01</b> hr <b>40</b> mins</p>
                                <hr class="center-hr">
                                <p class="fli-stops-desc">Non stop</p>
                            </div>
                            <div class="col-lg-3">
                                <h5>22:45</h5>
                                <p>Chennai</p>
                            </div>
                            <div class="col-lg-3">
                                <h4> &#8377; 5,581</h4>
                            </div>
                            <hr class="last-hr">
                        </div>
                        <div class="row  align-items-center no-gutters splitVw-listing">
                            <div class="col-lg-3 d-flex align-items-center">
                                <img src="{{ asset('public/airlines_logo/SG.png')}}" alt="flight-logo">
                                <div class="departure-time">
                                    <h5 class="float">21:05</h5>
                                    <p>Mumbai</p>
                                </div>
                            </div>
                            <div class="col-lg-3 no-gutters">
                                <p><b>01</b> hr <b>40</b> mins</p>
                                <hr class="center-hr">
                                <p class="fli-stops-desc">Non stop</p>
                            </div>
                            <div class="col-lg-3">
                                <h5>22:45</h5>
                                <p>Chennai</p>
                            </div>
                            <div class="col-lg-3">
                                <h4> &#8377; 5,581</h4>
                            </div>
                            <hr class="last-hr">
                        </div>
                        <div class="row  align-items-center no-gutters splitVw-listing">
                            <div class="col-lg-3 d-flex align-items-center">
                                <img src="{{ asset('public/airlines_logo/SG.png')}}" alt="flight-logo">
                                <div class="departure-time">
                                    <h5 class="float">21:05</h5>
                                    <p>Mumbai</p>
                                </div>
                            </div>
                            <div class="col-lg-3 no-gutters">
                                <p><b>01</b> hr <b>40</b> mins</p>
                                <hr class="center-hr">
                                <p class="fli-stops-desc">Non stop</p>
                            </div>
                            <div class="col-lg-3">
                                <h5>22:45</h5>
                                <p>Chennai</p>
                            </div>
                            <div class="col-lg-3">
                                <h4> &#8377; 5,581</h4>
                            </div>
                            <hr class="last-hr">
                        </div>
                    </div> -->
                @endforeach
            @endif
        @else
            <div class="col-lg-4">
                <div class="sort_results">
                    <div class="notavilable">
                        <img src="{{asset('public/web/img/plane.png')}}" alt="flight-logo-img" class="img-fluid">
                        <h6>Flight's are not available</h6>
                        <p>No flights found on this route for the requested date.</p>
                        <a href="#">Back</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sort_results">
                    <div class="notavilable">
                        <img src="{{asset('public/web/img/plane.png')}}" alt="flight-logo-img" class="img-fluid">
                        <h6>Flight's are not available</h6>
                        <p>No flights found on this route for the requested date.</p>
                        <a href="#">Back</a>
                    </div>
                </div>
            </div>
        @endif
    </div>      
    <!-- bottom poup -->
    <div class="row">
        <div class="fixed-position fixed-bottom flight-booking-popup">
            <!-- popup small -->
            <div class="row bg-color">
                <div class="col-lg-4 ">
                    <p>Departure |  <span>Spicejet</span> <span>| SG-323</span></p>
                    <div class="row  align-items-center no-gutters text-start fare-detail ">
                        <div class="col-lg-3 fare-detail">
                            <img src="{{ asset('public/airlines_logo/SG.png')}}" alt="flight-logo">
                        </div>
                        <div class="col-lg-3">
                            <p>21:05</p>
                        </div>
                        <div class="col-lg-3">
                            <p>
                                <i class="fa fa-long-arrow-right mr-1" aria-hidden="true"></i>22:05
                            </p>
                        </div>
                        <div class="col-lg-3 text-right">
                            <p>&#8377; 5,581</p>
                        </div>
                        <a href="#">Flight Details</a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <p>Departure |  <span>Spicejet</span> <span>| SG-323</span></p>
                    <div class="row  align-items-center no-gutters text-start fare-detail ">
                        <div class="col-lg-3 fare-detail">
                            <img src="{{ asset('public/airlines_logo/SG.png')}}" alt="flight-logo">
                        </div>
                        <div class="col-lg-3">
                            <p>21:05</p>
                        </div>
                        <div class="col-lg-3">
                            <p><i class="fa fa-long-arrow-right mr-1" aria-hidden="true"></i>22:05</p>
                        </div>
                        <div class="col-lg-3 text-right">
                            <p>&#8377; 5,581</p>
                        </div>
                        <a href="#">Flight Details</a>
                    </div>
                </div>
                <div class="col-lg-4  d-flex align-items-center justify-content-between ">
                    <div class="sky-blue-text">
                        <p>&#8377; 5,581</p>
                        <a href="#">Fare detail</a>
                    </div>

                    <button class="btn btn-primary book-now-down-button">Book now</button>
                    <button class="btn ticket-collapse book-now-drodown-button " data-toggle="collapse" data-target="#show-hide-data"><i class="fa fa-angle-down" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <!-- complete flight detail popup -->
            <div  class="collapse summary" id="show-hide-data">
                <div class="f-details">
                    <ul class="tabs">
                        <li class="active"><a href="#" >FLIGHT DETAILS</a></li>
                        <li><a href="#">FARE SUMMARY</a></li>
                        <li><a href="#">CANCELLATION</a></li>
                        <li><a href="#">DATE CHANGE</a></li>
                    </ul>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 ">
                        <div class="departure-flight-border">
                            <p class="departure-flight-span">Departure <span>Flight</span></p>
                            <div class="duration-time d-flex align-items-center justify-content-between">
                                <p>Mumbai to Chennai , 09 Mar</p>
                                <p>01 hr 40 mins</p>
                            </div>
                            <div class="row align-items-center justify-content-between spicejet-sg ">
                                <div class="col-lg-6">
                                    <img src="images/spicejet-logo.png" alt="flight-logo">
                                </div>
                                <div class="col-lg-6">
                                    <p>Spicejet SG 323 | 737</p>
                                </div>  
                            </div>
                            <div class="row align-items-center mumbai-india ">
                                <div class="col-lg-4">
                                    <h6>21:05 </h6>
                                    <p>Tue, 09 Mar 21</p>
                                    <p><span>Mumbai, India</span></p>
                                </div>
                                <div class="col-lg-4">
                                    <p><b>01</b> hr <b>40</b> mins</p>
                                </div>
                                <div class="col-lg-4">
                                    <h6>22:45</h6>
                                    <p>Tue, 09 Mar 21</p>
                                    <p>Chennai, India</p>
                                </div>
                            </div>
                            <div class="row text-center baggage">
                                <div class="col-lg-4">
                                    <h6>BAGGAGE :</h6>
                                    <p>ADULT</p>
                                </div>
                                <div class="col-lg-4">
                                    <h6>CHECK IN</h6>
                                    <p>15 Kgs<br> (1 piece only)</p>
                                </div>
                                <div class="col-lg-4">
                                    <h6>CABIN</h6>
                                    <p>7 Kgs<br> (1 piece only)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="departure-flight-border">
                            <p class="departure-flight-span">Departure <span>Flight</span></p>
                            <div class="duration-time d-flex align-items-center justify-content-between">
                                <p>Mumbai to Chennai , 09 Mar</p>
                                <p>01 hr 40 mins</p>
                            </div>
                            <div class="row align-items-center justify-content-between spicejet-sg">
                                <div class="col-lg-6">
                                    <img src="{{ asset('public/airlines_logo/SG.png')}}" alt="flight-logo">
                                </div>
                                <div class="col-lg-6">
                                    <p>Spicejet SG 323 | 737</p>
                                </div>  
                            </div>
                            <div class="row align-items-center mumbai-india">
                                <div class="col-lg-4">
                                    <h6>21:05 </h6>
                                    <p>Tue, 09 Mar 21</p>
                                    <p>Mumbai, India</p>
                                </div>
                                <div class="col-lg-4">
                                    <p><b>01</b> hr <b>40</b> mins</p>
                                </div>
                                <div class="col-lg-4">
                                    <h6>22:45</h6>
                                    <p>Tue, 09 Mar 21</p>
                                    <p><span>Chennai, India</span></p>
                                </div>
                            </div>
                            <div class="row text-center baggage">
                                <div class="col-lg-4">
                                    <h6>BAGGAGE :</h6>
                                    <p>ADULT</p>
                                </div>
                                <div class="col-lg-4">
                                    <h6>CHECK IN</h6>
                                    <p>15 Kgs<br> (1 piece only)</p>
                                </div>
                                <div class="col-lg-4">
                                    <h6>CABIN</h6>
                                    <p>7 Kgs<br> (1 piece only)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>