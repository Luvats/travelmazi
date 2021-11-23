<div class="sort_results">
    @if(isset($all_flightdata))
        <?php  $x = 0; 
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
?> <form action="{{route('multicity-traveller')}}">
        @if(!empty($all_flightdata['searchResult']['tripInfos']))
            @foreach($all_flightdata['searchResult']['tripInfos'] as $key=>$row)
            <?php
                // echo '<pre>'.$key; print_r($row); die;
        ?>
            @foreach($row as $dt_key=>$dt)

                <?php
                // echo '<pre>'; print_r($dt); die;
                    $logo_details = DB::table('airlines')->where('airlines_code',$dt['sI'][0]['fD']['aI']['code'])->where('airline_status',1)->first();
                    $start_tym = explode("T",$dt['sI'][0]['dt']);
                    $start_strtotime = strtotime($start_tym[0].' '.$start_tym[1]);
                    $end_tym = explode("T",$dt['sI'][0]['at']);
                    $end_strtotime = strtotime($end_tym[0].' '.$end_tym[1]);
                    $final_startdate=date_create($start_tym[0]);
                    $final_enddate=date_create($end_tym[0]);
                
               $rating=0;
                    if(!empty($flight_ratings[$dt['sI'][0]['fD']['aI']['name']."-".$dt['sI'][0]['fD']['aI']['code']."-".$dt['sI'][0]['fD']['fN']])){
                        $rating=ceil($flight_ratings[$dt['sI'][0]['fD']['aI']['name']."-".$dt['sI'][0]['fD']['aI']['code']."-".$dt['sI'][0]['fD']['fN']]);
                    } 
                ?>
               
                <div class="card-item {{ $dt['sI'][0]['fD']['aI']['code'] }}code {{ $dt['sI'][0]['stops'] }}stops ratings-{{$rating}}" data-flight-price-range="{{$dt['price_range']}}" data-flight-min-price="{{$dt['min_price']}}" data-flight-departure="{{$start_strtotime }}" data-flight-arrival="{{$end_strtotime }}" data-flight-duration="{{ $dt['sI'][0]['duration'] }}" id="unique-{{ $dt['totalPriceList'][0]['id'] }}">
                    <div class="row align-items-center">
						<div class="card col-md-1 airind">
                            @if(empty($logo_details))
                                <img src="{{asset('public/web/img/airindia.png')}}" alt="flight-logo-img" class="img-fluid">
                            @else
                                 <img src="{{url('public/airlines_logo')}}/{{$logo_details->airlines_logo}}" alt="flight-logo-img" class="img-fluid">
                            @endif  
						</div>
						<div class="card-text col-md-1 d-flex flex-wrap align-content-center">
							<p>{{ $dt['sI'][0]['fD']['aI']['name'] }}</p>
                            <p class="fli-code">{{ $dt['sI'][0]['fD']['aI']['code'] }} {{ $dt['sI'][0]['fD']['fN']}} | {{ $dt['sI'][0]['fD']['eT']}}</p>
                            <?php
                            $rate = $flight_ratings[$dt['sI'][0]['fD']['aI']['name'] . "-" . $dt['sI'][0]['fD']['aI']['code'] . "-" . $dt['sI'][0]['fD']['fN']];
                            if ($rate) {
                                echo "Ratings: " . number_format((float)$rate, 2, '.', '');
                            } ?>
						</div>
						<!-- <div class="card-body"> -->
							<!--<div class="card-top-title">-->
								<div class="title-location col-md-2 d-flex flex-wrap align-content-center justify-content-center text-center">
									<h3 class="card-meta  font-size-17">{{$start_tym[1] }}</h3>
                                    <p class="card-title font-size-14">{{ $dt['sI'][0]['da']['city'] }}</p>
								</div>
								<div class="card col-md-1 boview">
                                    <div class="flight_tym">{{ hoursandmins($dt['sI'][0]['duration']) }}</div>
									<img src="{{asset('public/web/img/boview.png')}}" alt="flight-logo-img" class="img-fluid">
								</div>
								<div class="title-location col-md-2 d-flex flex-wrap align-content-center justify-content-center text-center">
									
									<h3 class="card-meta  font-size-17">{{$end_tym[1] }}</h3>
                                    <p class="card-title font-size-14">{{ $dt['sI'][0]['aa']['city'] }}</p>
								</div>
                                <div class="col-md-5">
                                    <div class="row d-flex align-items-center align-items">
                                        <div class=" col-md-6 section-tab rate-box  section-tab-2 pb-3">
                                            <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                                @foreach($dt['totalPriceList'] as $totalPriceListKey => $tpl)
                                                    <li class="nav-item">
                                                        <!-- <a class="nav-link {{ (($x == 0) && ($totalPriceListKey == 0)) ? 'active' : '' }}" id="one-way-tab{{$x}}" data-toggle="tab" href="#one-way{{$x}}" role="tab" aria-controls="one-way" aria-selected="true"> -->
                                                        <!-- <a class="" id="one-way-tab{{$x}}" data-toggle="tab" href="#one-way{{$x}}" role="tab" aria-controls="one-way" aria-selected="true"> -->
                                                            <?php 
                                                                $total_fare = $tpl['fd']['ADULT']['fC']['TF'];
                                                                $final_total_fare = round($total_fare, 0);

                                                                setlocale(LC_MONETARY, 'en_IN');  
                                                                // $final_total_fare = money_format('%!i', $final_total_fare);  
                                                                
                                                            ?>
												<input type="radio" name="price[{{$key}}]" value="{{$tpl['id']}}">
                                                            <h6>₹ {{$final_total_fare}}</h6>
                                                           
                                                            <p>
                                                                <span>
                                                                    <?php
                                                                        if($tpl['fareIdentifier'] == 'FLEXI_PLUS')
                                                                            $fare_identifier = 'Flexi plus';
                                                                        else 
                                                                            $fare_identifier = $tpl['fareIdentifier'];
                                                                        echo ucfirst( strtolower($fare_identifier) );
                                                                    ?>
                                                                </span>
                                                            </p>

                                                            @if($tpl['fareIdentifier'] == 'PUBLISHED')
                                                                <p>Economy, Non Refundable</p>
                                                            @elseif($tpl['fareIdentifier'] == 'SME')
                                                                <p>Economy, Refundable</p>
                                                            @elseif($tpl['fareIdentifier'] == 'FLEXI_PLUS')
                                                                <p>Premium Economy, Refundable</p>
                                                            @else
                                                                <p></p>
                                                            @endif
                                                        <!-- </a> -->
                                                    </li>
                                                @endforeach                                    
                                            </ul>
                                        </div>
                                        <div class="col-md-6 view-button">
                                            <div class="btn-box  book-view ">
                                                <a class="theme-btn  theme-btn-small details-box" data-toggle="collapse" href="#collapseExample{{ $x}}" aria-expanded="true" aria-controls="collapseExample">View Detail <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="section-tab rate-box col-md-2 section-tab-2 pb-3">
                                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                        @foreach($dt['totalPriceList'] as $totalPriceListKey => $tpl)
                                            <?php //echo "<pre/>"; print_r($tpl['fareIdentifier']);?>
                                            <?php //echo "<pre/>"; print_r($tpl['fd']['ADULT']['fC']['TF']);?>
                                            <li class="nav-item">
                                                <a class="nav-link {{ (($x == 0) && ($totalPriceListKey == 0)) ? 'active' : '' }}" id="one-way-tab{{$x}}" data-toggle="tab" href="#one-way{{$x}}" role="tab" aria-controls="one-way" aria-selected="true">

                                                    <?php 
                                                        if(isset($tpl['fd']['ADULT'])) {
                                                            if(isset($tpl['fd']['CHILD'])) {
                                                                if(isset($tpl['fd']['INFANT'])) {
                                                                    $total_fare = ($tpl['fd']['ADULT']['fC']['TF'] * $ADULT) + ($tpl['fd']['CHILD']['fC']['TF'] * $CHILD) + ($tpl['fd']['INFANT']['fC']['TF'] * $INFANT);
                                                                    // $total_fare = $tpl['fd']['ADULT']['fC']['TF'] + $tpl['fd']['CHILD']['fC']['TF'] + $tpl['fd']['INFANT']['fC']['TF'] * $ADULT * $CHILD * $INFANT;
                                                                } else {
                                                                    $total_fare = ($tpl['fd']['ADULT']['fC']['TF'] * $ADULT) + ($tpl['fd']['CHILD']['fC']['TF']  * $CHILD) ;
                                                                }
                                                            } else {
                                                                if(isset($tpl['fd']['INFANT'])) {
                                                                    $total_fare = ($tpl['fd']['ADULT']['fC']['TF'] * $ADULT) + ($tpl['fd']['INFANT']['fC']['TF'] * $INFANT);
                                                                } else {
                                                                    $total_fare = $tpl['fd']['ADULT']['fC']['TF'] * $ADULT;
                                                                }    
                                                            }
                                                        } else {
                                                            $total_fare = $tpl['fd']['ADULT']['fC']['TF'] * $ADULT;
                                                        }

                                                        $final_total_fare = round($total_fare, 0);

                                                        setlocale(LC_MONETARY, 'en_IN');  
                                                        // $final_total_fare = money_format('%!i', $final_total_fare);  
                                                        
                                                    ?>
                                                    <h6>₹ {{$final_total_fare}}</h6>
                                                   
                                                    <p>
                                                        <span>
                                                            @php
                                                                if($tpl['fareIdentifier'] == 'FLEXI_PLUS')
                                                                    $fare_identifier = 'Flexi plus';
                                                                else 
                                                                    $fare_identifier = $tpl['fareIdentifier'];
                                                                echo ucfirst( strtolower($fare_identifier) );
                                                            @endphp
                                                        </span>
                                                    </p>

                                                    <?php 
                                                        if($tpl['fareIdentifier'] == 'PUBLISHED'){
                                                    ?>
                                                        <p>Economy, Non Refundable</p>
                                                    <?php }else if($tpl['fareIdentifier'] == 'SME'){?>
                                                        <p>Economy, Refundable</p>
                                                    <?php }else if($tpl['fareIdentifier'] == 'FLEXI_PLUS'){?>
                                                        <p>Premium Economy, Refundable</p>
                                                    <?php }else{?>
                                                        <p></p>
                                                    <?php }?>
                                                </a>
                                            </li>
                                        @endforeach                                    
                                    </ul>
                                </div> -->
                                <!-- end section-tab -->
    							
    							<!-- <div class="btn-box col-md-3 book-view d-flex flex-wrap align-content-center">
    								<a href="{{url('traveller')}}/{{$dt['totalPriceList'][0]['id']}}" class="theme-btn theme-btn-small book-box book-now-button">Book Now</a>
    								<a class="theme-btn  theme-btn-small details-box" data-toggle="collapse" href="#collapseExample{{ $x}}" aria-expanded="true" aria-controls="collapseExample">View Detail <i class="fa fa-angle-down" aria-hidden="true"></i></a>  
    							</div> -->
                                    <div class="collapse" id="collapseExample{{ $x }}" style="width: 100%;">
                                        <div class="card card-body cardbody_new_area">
                                            @foreach($dt['totalPriceList'] as $totalPriceListKey => $tpl)
                                                <div class="row border border-warning collapse-border">
                                                    <!-- <div class="card col-md-5  no-gutters airind-new air_imagers">
                                                        <div class="air_imagers card-text d-flex">
                                                            @if(empty($logo_details))
                                                                <img src="{{asset('public/web/img/airindia.png')}}" alt="flight-logo-img" class="img-fluid mr-3 ">
                                                            @else
                                                                 <img src="{{url('public/airlines_logo')}}/{{$logo_details->airlines_logo}}" alt="flight-logo-img" class="img-fluid mr-3">
                                                            @endif  
                                                              <p>{{ $dt['sI'][0]['fD']['aI']['name'] }}</p>
                                                        </div>
                                                        <div class="location_area_box">
                                                            <div class="title-location">
                                                                <p>{{$start_tym[1] }}</p>                                   
                                                                <h3 class="card-meta  font-size-17">{{ date_format($final_startdate,"D, d M y") }}</h3>
                                                                <p class="card-title font-size-14">{{ $dt['sI'][0]['da']['city'] }}, {{ $dt['sI'][0]['da']['country'] }}</p>
                                                            </div>
                                                            <div class="card boview_new airind-new">
                                                                 <div class="flight_tym">{{ hoursandmins($dt['sI'][0]['duration']) }}</div>
                                                                <img src="{{asset('public/web/img/boview.png')}}" alt="flight-logo-img" class="img-fluid">
                                                            </div>
                                                            <div class="title-location">
                                                                <p>{{$end_tym[1] }}</p>
                                                                <h3 class="card-meta  font-size-17">{{ date_format($final_enddate,"D, d M y") }}</h3>
                                                                <p class="card-title font-size-14">{{ $dt['sI'][0]['aa']['city'] }}, {{ $dt['sI'][0]['aa']['country'] }}</p>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-9 no-gutters align-self-center  justify-content-between">
                                                        <div class="flightpage_table_area">
                                                            <table class="table flightpage_table_area_new2">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Prices</th>
                                                                        <th>BAGGAGE :</th>
                                                                        <th>CHECK IN </th>
                                                                        <th>CABIN</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                    <td>
                                                                        <?php 
                                                                        // if(isset($tpl['fd']['ADULT'])) {
                                                                        //     if(isset($tpl['fd']['CHILD'])) {
                                                                        //         if(isset($tpl['fd']['INFANT'])) {
                                                                        //             $total_fare = ($tpl['fd']['ADULT']['fC']['TF'] * $ADULT) + ($tpl['fd']['CHILD']['fC']['TF'] * $CHILD) + ($tpl['fd']['INFANT']['fC']['TF'] * $INFANT);
                                                                        //             // $total_fare = $tpl['fd']['ADULT']['fC']['TF'] + $tpl['fd']['CHILD']['fC']['TF'] + $tpl['fd']['INFANT']['fC']['TF'] * $ADULT * $CHILD * $INFANT;
                                                                        //         } else {
                                                                        //             $total_fare = ($tpl['fd']['ADULT']['fC']['TF'] * $ADULT) + ($tpl['fd']['CHILD']['fC']['TF']  * $CHILD) ;
                                                                        //         }
                                                                        //     } else {
                                                                        //         if(isset($tpl['fd']['INFANT'])) {
                                                                        //             $total_fare = ($tpl['fd']['ADULT']['fC']['TF'] * $ADULT) + ($tpl['fd']['INFANT']['fC']['TF'] * $INFANT);
                                                                        //         } else {
                                                                        //             $total_fare = $tpl['fd']['ADULT']['fC']['TF'] * $ADULT;
                                                                        //         }    
                                                                        //     }
                                                                        // } else {
                                                                        //     $total_fare = $tpl['fd']['ADULT']['fC']['TF'] * $ADULT;
                                                                        // }

                                                                        // $final_total_fare = round($total_fare, 0);
                                                                        $total_fare = $tpl['fd']['ADULT']['fC']['TF'];
                                                                        

                                                                        $final_total_fare = round($total_fare, 0);
                                                                        setlocale(LC_MONETARY, 'en_IN');  
                                                                        // $final_total_fare = money_format('%!i', $final_total_fare);  
                                                                        
                                                                        ?>
                                                                        <h6>₹ {{$final_total_fare}}</h6>
                                                                       
                                                                        <p>
                                                                            <span>
                                                                                @php
                                                                                    if($tpl['fareIdentifier'] == 'FLEXI_PLUS')
                                                                                        $fare_identifier = 'Flexi plus';
                                                                                    else 
                                                                                        $fare_identifier = $tpl['fareIdentifier'];
                                                                                    echo ucfirst( strtolower($fare_identifier) );
                                                                                @endphp
                                                                            </span>
                                                                        </p>

                                                                        <?php 
                                                                            if($tpl['fareIdentifier'] == 'PUBLISHED'){
                                                                        ?>
                                                                            <p>Economy, Non Refundable</p>
                                                                        <?php }else if($tpl['fareIdentifier'] == 'SME'){?>
                                                                            <p>Economy, Refundable</p>
                                                                        <?php }else if($tpl['fareIdentifier'] == 'FLEXI_PLUS'){?>
                                                                            <p>Premium Economy, Refundable</p>
                                                                        <?php }else{?>
                                                                            <p></p>
                                                                        <?php }?>
                                                                    </td>
                                                                    <td>ADULT</td>
                                                                    <td> 
                                                                        @if(isset($tpl['fd']['ADULT']))
                                                                            @if(isset($tpl['fd']['ADULT']['bI']['iB']))
                                                                                {{ $tpl['fd']['ADULT']['bI']['iB'] }}
                                                                            @else
                                                                                0
                                                                            @endif
                                                                        @else
                                                                            0
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(isset($tpl['fd']['ADULT']))
                                                                            @if(isset($tpl['fd']['ADULT']['bI']['cB']))
                                                                                {{ $tpl['fd']['ADULT']['bI']['cB'] }}
                                                                            @else
                                                                                0 Kg
                                                                            @endif
                                                                        @else
                                                                            0 Kg
                                                                        @endif

                                                                    </td>
                                                                  </tr>
                                                                    @if($CHILD > 0) 
                                                                      <tr>
                                                                        <td>CHILD</td>
                                                                        <td>
                                                                            @if(isset($tpl['fd']['CHILD']))
                                                                                @if(isset($tpl['fd']['CHILD']['bI']['iB']))
                                                                                    {{ $tpl['fd']['CHILD']['bI']['iB'] }}
                                                                                @else
                                                                                    -
                                                                                @endif
                                                                            @else
                                                                                -
                                                                            @endif
                                                                        </td>
                                                                        <td>
                                                                            @if(isset($tpl['fd']['CHILD']))
                                                                                @if(isset($tpl['fd']['CHILD']['bI']['cB']))
                                                                                    {{ $tpl['fd']['CHILD']['bI']['cB'] }}
                                                                                @else
                                                                                     0 Kg
                                                                                @endif
                                                                            @else
                                                                                0 Kg
                                                                            @endif

                                                                        </td>
                                                                      </tr>
                                                                    @endif
                                                                    @if($INFANT > 0) 
                                                                        <tr>
                                                                            <td>INFANT</td>
                                                                            <td>
                                                                                @if(isset($tpl['fd']['INFANT']))
                                                                                    @if(isset($tpl['fd']['INFANT']['bI']['iB']))
                                                                                        {{ $tpl['fd']['INFANT']['bI']['iB'] }}
                                                                                    @else
                                                                                        -
                                                                                    @endif
                                                                                @else
                                                                                    -
                                                                                @endif
                                                                                </td>
                                                                            <td>
                                                                                 @if(isset($tpl['fd']['INFANT']))
                                                                                    @if(isset($tpl['fd']['INFANT']['bI']['cB']))
                                                                                        {{ $tpl['fd']['INFANT']['bI']['cB'] }}
                                                                                    @else
                                                                                        0 Kg
                                                                                    @endif
                                                                                @else
                                                                                    0 Kg
                                                                                @endif

                                                                            </td>
                                                                        </tr>
                                                                    @endif
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 align-self-center">
                                                        <!-- <button class="theme-btn theme-btn-small book-box book-now-button">Book</button> -->
                                                        <!-- <a href="{{url('traveller')}}/{{$tpl['id']}}" class="theme-btn theme-btn-small book-box book-now-button">Book</a> -->
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                    </div>
                                    
					</div>
                </div><!-- end card-item -->
               
                @php $x++ ; @endphp
            @endforeach
            @endforeach
            <input type="submit" value="Book"> </form>
        @else
            <div class="notavilable">
                <img src="{{asset('public/web/img/plane.png')}}" alt="flight-logo-img" class="img-fluid">
                <h6>Flight's are not available</h6>
                <p>No flights found on this route for the requested date.</p>
                <a href="#">Back</a>
            </div>
        @endif
    @endif
    <div class="notavilable flights" style="display: none;">
        <img src="{{asset('public/web/img/plane.png')}}" alt="flight-logo-img" class="img-fluid">
        <h6>Flight's are not available</h6>
        <p>No flights found on this route for the requested date.</p>
        <a href="#">Back</a>
    </div>
</div>
<input type="hidden" id="sort_field" value="arrival-sort">
<input type="hidden" id="sort_order" value="asc">
<script type="text/javascript">
    $(function() {
        function basicSorting(className, ascFnctnName, descFnctnName) {
            $('#sort_field').val(className);
            var prevOrder = $('#sort_order').val();
            var newOrder = (prevOrder == 'asc') ? 'desc' : 'asc';
            $('#sort_order').val(newOrder);
            $('.sort-by-Section').find('i').removeClass('fa-long-arrow-down');
            $('.sort-by-Section').find('i').removeClass('fa-long-arrow-up');
            if(newOrder == 'asc') {
                $('.'+className).find('i').removeClass('fa-long-arrow-down').addClass('fa-long-arrow-up');
                $(".sort_results .card-item").sort(ascFnctnName).appendTo('.sort_results');
            } else {
                $('.'+className).find('i').removeClass('fa-long-arrow-up').addClass('fa-long-arrow-down');
                $(".sort_results .card-item").sort(descFnctnName).appendTo('.sort_results');
            }
        }
        //arrival sorting start
        function sort_arrival_asc(a, b) {
            return ($(b).data('flight-arrival')) < ($(a).data('flight-arrival')) ? 1 : -1;
        }

        function sort_arrival_desc(a, b) {
            return ($(b).data('flight-arrival')) > ($(a).data('flight-arrival')) ? 1 : -1;
        }
        $(document).on('click','.arrival-sort', function() {
            basicSorting('arrival-sort', sort_arrival_asc, sort_arrival_desc);
        });
        //arrival sorting end

        //departure sorting start
        function sort_departure_asc(a, b) {
            return ($(b).data('flight-departure')) < ($(a).data('flight-departure')) ? 1 : -1;
        }

        function sort_departure_desc(a, b) {
            return ($(b).data('flight-departure')) > ($(a).data('flight-departure')) ? 1 : -1;
        }
        $(document).on('click','.departure-sort', function() {
            basicSorting('departure-sort', sort_departure_asc, sort_departure_desc);
        });
        //departure sorting end
        //duration sorting start
        function sort_duration_asc(a, b) {
            return ($(b).data('flight-duration')) < ($(a).data('flight-duration')) ? 1 : -1;
        }

        function sort_duration_desc(a, b) {
            return ($(b).data('flight-duration')) > ($(a).data('flight-duration')) ? 1 : -1;
        }
        $(document).on('click','.duration-sort', function() {
            basicSorting('duration-sort', sort_duration_asc, sort_duration_desc);
        });
        //duration sorting end
        //price sorting start
        function sort_price_asc(a, b) {
            return ($(b).data('flight-min-price')) < ($(a).data('flight-min-price')) ? 1 : -1;
        }

        function sort_price_desc(a, b) {
            return ($(b).data('flight-min-price')) > ($(a).data('flight-min-price')) ? 1 : -1;
        }
        $(document).on('click','.price-sort', function() {
            basicSorting('price-sort', sort_price_asc, sort_price_desc);
        });
        //price sorting end
    });
</script>