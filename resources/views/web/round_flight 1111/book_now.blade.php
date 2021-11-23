@extends('layouts.web')
@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<div class="traveller-deatails">
    <div class="container">
    <h6>Who Is travelling</h6>
    </div>
</div>
<!-- datails area -->
<div class="traveller-box-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 pl-0">
                <div>
                    <p class="rvw-heading LatoBold">Flight Summary</p>
                </div>
                <div class="tvlr-sctn append_bottom15">
                    <div class="tvlrDtls-heading">
                        <div>
                            <p class="tvlrDtls-heading-txt LatoBold append_bottom5">{{$book_now['tripInfos'][0]['sI'][0]['da']['city']}} - {{$book_now['tripInfos'][1]['sI'][0]['da']['city']}}</p>
                            @php 
                                $start_tym = explode("T",$book_now['tripInfos'][0]['sI'][0]['dt']);
                                $end_tym   = explode("T",$book_now['tripInfos'][0]['sI'][0]['at']);

                                $final_startdate=date_create($start_tym[0]);

                                $final_enddate=date_create($end_tym[0]);

                                $start_tym_return = explode("T",$book_now['tripInfos'][1]['sI'][0]['dt']);
                                $end_tym_return   = explode("T",$book_now['tripInfos'][1]['sI'][0]['at']);
                                $final_startdate_return =date_create($start_tym_return[0]);

                                $final_enddate_return =date_create($end_tym_return[0]);
                                

                            @endphp

                            @php 
                            function hoursandmins($time, $format = '%02d:%02d')
                            {
                                if ($time < 1) {
                                    return;
                                }
                                $hours = floor($time / 60);
                                $minutes = ($time % 60);
                                return sprintf($format, $hours, $minutes);
                            }
                        @endphp
                            <p class="font18">
                                <font color="#4a4a4a">Departure {{ date_format($final_startdate,"D, d M ") }} - Return {{ date_format($final_startdate_return,"D, d M ") }}</font>
                            </p>
                        </div>
                    </div>
                    <div class="collapse in" style="">
                        <div class="travlDtls-body">
                            <div class="fli-list one-way">
                                <div class="fli-list-body-section">
                                    <div class="dept-options">
                                        <div class="dept-options-section clearfix">
                                            <div class="pull-left airline-info">
                                                <div class="pull-left">
                                                    <span class=" ">
                                                        <span class="arln-logo logo1">
                                                            @php
                                                                $logo_details = DB::table('airlines')->where('airlines_code',$book_now['tripInfos'][0]['sI'][0]['fD']['aI']['code'])->where('airline_status',1)->first();

                                                            @endphp

                                                            @if(empty($logo_details))
                                                                <img src="{{asset('public/web/img/airindia.png')}}" alt="flight-logo-img" class="">
                                                            @else
                                                                <img src="{{url('public/airlines_logo')}}/{{$logo_details->airlines_logo}}" alt="flight-logo-img" class="">
                                                            @endif 
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="pull-left airways-info-sect">
                                                    <p>
                                                        <span class="airways-name ">{{ $book_now['tripInfos'][0]['sI'][0]['fD']['aI']['name'] }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="pull-left">
                                                <div class="pull-left">
                                                    <div class="timing-option append_bottom5 clearfix">
                                                        <div class="fli-time-section pull-left">
                                                            <p class="dept-time append_bottom3">{{$start_tym[1] }}</p>
                                                            <p class="font14 LatoBold">{{ date_format($final_startdate,"D, d M y") }}</p>
                                                            <p class="dept-city">{{ $book_now['tripInfos'][0]['sI'][0]['da']['city'] }}</p>
                                                            <p class="font11 prepend_top5">{{ $book_now['tripInfos'][0]['sI'][0]['da']['country'] }}</p>
                                                        </div>
                                                        <div class="pull-left fli-stops make_relative">
                                                            <p class="font16"><b>{{ hoursandmins($book_now['tripInfos'][0]['sI'][0]['duration'], '%02d h %02d m') }}</b></p>
                                                            <div class="make_relative fli-stops-sep">
                                                                <p class="fli-stops-seperator"></p>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="fli-time-section pull-left text-right">
                                                            <div class="pull-right text-left">
                                                                <p class="reaching-time append_bottom3">{{$end_tym[1] }}</p>
                                                                <p class="font14 LatoBold">{{ date_format($final_enddate,"D, d M y") }}</p>
                                                                <p class="arrival-city">{{ $book_now['tripInfos'][0]['sI'][0]['aa']['city'] }}</p>
                                                                <p class="font11 prepend_top5">{{ $book_now['tripInfos'][0]['sI'][0]['aa']['country'] }}, Terminal 2</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fli-list one-way">
                                <div class="fli-list-body-section">
                                    <div class="dept-options">
                                        <div class="dept-options-section clearfix">
                                            <div class="pull-left airline-info">
                                                <div class="pull-left">
                                                    <span class=" ">
                                                        <span class="arln-logo logo1"> 
                                                            @php
                                                                $logo_details_return = DB::table('airlines')->where('airlines_code',$book_now['tripInfos'][1]['sI'][0]['fD']['aI']['code'])->where('airline_status',1)->first();

                                                            @endphp

                                                            @if(empty($logo_details_return))
                                                                <img src="{{asset('public/web/img/airindia.png')}}" alt="flight-logo-img" class="">
                                                            @else
                                                                <img src="{{url('public/airlines_logo')}}/{{$logo_details_return->airlines_logo}}" alt="flight-logo-img" class="">
                                                            @endif
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="pull-left airways-info-sect">
                                                    <p>
                                                        <span class="airways-name ">{{ $book_now['tripInfos'][1]['sI'][0]['fD']['aI']['name'] }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="pull-left">
                                                <div class="pull-left">
                                                    <div class="timing-option append_bottom5 clearfix">
                                                        <div class="fli-time-section pull-left">
                                                            <p class="dept-time append_bottom3"><?php echo $start_tym_return[1];?></p>
                                                            <p class="font14 LatoBold">{{ date_format($final_startdate_return,"D, d M y") }}</p>
                                                            <p class="dept-city">{{ $book_now['tripInfos'][1]['sI'][0]['da']['city'] }}</p>
                                                            <p class="font11 prepend_top5">{{ $book_now['tripInfos'][1]['sI'][0]['da']['country'] }}, Terminal 1</p>
                                                        </div>
                                                        <div class="pull-left fli-stops make_relative">
                                                            <p class="font16"><b>{{ hoursandmins($book_now['tripInfos'][1]['sI'][0]['duration'], '%02d h %02d m') }}</b></p>
                                                            <div class="make_relative fli-stops-sep">
                                                                <p class="fli-stops-seperator"></p>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="fli-time-section pull-left text-right">
                                                            <div class="pull-right text-left">
                                                                <p class="reaching-time append_bottom3"><?php echo $end_tym_return[1];?></p>
                                                                <p class="font14 LatoBold">{{ date_format($final_enddate_return,"D, d M y") }}</p>
                                                                <p class="arrival-city">{{ $book_now['tripInfos'][1]['sI'][0]['aa']['city'] }}</p>
                                                                <p class="font11 prepend_top5">{{ $book_now['tripInfos'][1]['sI'][0]['aa']['country'] }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="meals-assignment-details mt-4">
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center justify-content-between tvlrDtls-heading-txt">
                            <h6>ADULT</h6>
                            <p>1-1 selected</p>
                        </div>
                    </div>
                    <div class="meals-assignment-details">
                        <div class="row d-flex align-items-center justify-content-between adult-main-1">
                            <div class="col-md-6  ">
                                <form>
                                      <input class="form-check-input-ticket" type="checkbox" value="" id="myCheck" onclick="myFunction()">
                                      <label class="form-check-label adult-1" for="">
                                        ADULT 1
                                      </label>
                              </form>
                            </div>
                            <div class="col-md-6  ">
                                <p class="text-right incomplete-text "><span>INCOMPLETE</span></p>
                            </div>
                        </div>
                        <div id="text" >
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="py-3 tvlrDtls-topInfo "><b>IMPORTANT:</b> Enter your name as it is mentioned on your passport. For International Travel, passport should be valid for minimum 6 months from the date of travel. If you are travelling to the USA and/or Canada, please ensure that you enter the correct passport details for every passenger. In case you fail to do so, you may not be allowed to enter the USA and/or Canada.</p>
                                </div>
                            </div>
                            
                            <form>
                                <div class="row first-last-name mb-3">
                                    <div class="col-md-5">
                                        <input autocomplete="none" placeholder="First & Middle Name"text">
                                    </div>
                                    <div class="col-md-5">
                                        <input autocomplete="none" placeholder="Last Name" type="text">
                                    </div>
                                    <div class="col-md-2 no-gutters px-0">
                                       <select>  
                                         <option value = "male"> Male   
                                         </option>  
                                         <option value = "female "> Female   
                                         </option> 
                                     </select>
                                 </div>
                             </div>
                         </form>
                                
                            <form>
                            <div class="row first-last-name">
                                <div class="col-md-5"> 
										<label> Meal </label><br>  
										<select>  
											<option value = "meal"> Meal   
											</option>  
											<option value = "vegetarian  jain meal "> Vegetarian  Jain Meal   
											</option> 
											<option value = "vegetarian  jain meal "> Vegetarian  Jain Meal   
											</option> 
											<option value = "vegetarian  jain meal "> Vegetarian  Jain Meal   
											</option> 
										</select>    
                                </div>
                                <div class="col-md-5">
                                    <form>  
										<label> Whealchair </label><br>  
										<select>   
											<option value = "required"> Required   
											</option>  
											<option value = "required"> Not Required  
											</option>    
										</select>  
									</form>  
                                </div>
                            </div>
                        </form>
                            </div>
                        </div>
                        <div class="row add-adult">
                    	<div class="col-md-4 ">
                    		<p><a href="#">+ ADD ADULT</a></p>
                    	</div>
                    </div>
                    </div>
                    <div class="row">
                    	<div class="col-lg-7 main-headings">
                    		 <h3>Contact information</h3>
                    	</div>
                    </div>
                    <div class="meals-assignment-details Contact-information">
                    	<div class="row">
                    		<div class="col-md-12">
                    			<p>Your ticket and flights information will be sent here.</p>
                    		</div>
                    	</div>
                        <form>
                        	<div class="row first-last-name">
                        		<div class="col-md-4"> 			  
    										<label> Country Code </label>  
    										<select>  
    											<option value = "india91"> India (91) 
    											</option>  
    											<option value = "required"> India (91) 
    											</option>  
    											<option value = "required"> India (91) 
    											</option> 
    											<option value = "required"> India (91) 
    											</option> 
    											<option value = "required"> India (91) 
    											</option> 
    											<option value = "required"> India (91) 
    											</option> 
    											<option value = "required"> India (91) 
    											</option>    
    										</select>  
                        		</div>
                        		<div class="col-md-4">
                        				<label>Mobile No</label>
                        				<input type="text" name="" placeholder="Mobile No">
                        		</div>
                        		<div class="col-md-4">
                        				<label>Email</label>
                        				<input type="text" name="" placeholder="Email">
                        		</div>
                        	</div>
                      </form>
                    </div>
                    <div>
                        <p class="rvw-heading LatoBold">Acknowledgement</p>
                        <div class="rvw-sctn append_bottom15 ack-section">
                            <p class="checkbox-group append_bottom10">
                                <span class="labeltext font14">
                                    <span>By clicking on the Continue button below to proceed with the booking, I confirm that I have read and I accept the</span>
                                    <a> Fare Rules</a>
                                    <span> , the</span>
                                    <a href="https://www.makemytrip.com/legal/in/eng/privacy_policy.html" rel="noopener noreferrer" target="_blank" class="book_now"> Privacy Policy</a>
                                    <span> , the</span>
                                    <a href="https://www.makemytrip.com/legal/in/eng/user_agreement.html#tos" rel="noopener noreferrer" target="_blank" class="book_now"> User Agreement</a>
                                    <span> and</span>
                                    <a href="https://www.makemytrip.com/legal/in/eng/user_agreement.html#1" rel="noopener noreferrer" target="_blank" class="book_now"> Terms of Service</a>
                                    <span> of MakeMyTrip</span>
                                </span>
                            </p>
                            <div class="make_relative blocked_traveller_booking">
                                <button class="ack-cta btn fli_primary_btn text-uppercase" type="button">Continue</button>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-5 pr-0">     
                <div class="meals-assignment-details">
                    
                    <div class="fare-assignment-details">
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-5 pl-0">
                                <h6>Adult(s) (1 X ₹ 30,920)
</h6>
                                <h6>Children (1 X ₹ 23,195)
</h6>
                                <h6>Infant (1 X ₹ 3,105)
</h6>
                              
                                
                            </div>
                            <div class="col-md-4 pr-0">
                               <h6>₹ 30,920</h6>
                               <h6>₹ 23,195</h6>
                               <h6>₹ 3,105</h6>
                                
                            </div>
                        </div>
                        <div class="amount-box">
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-5 pl-0">
                                    <h4>Amount</h4>     
                                </div>
                                <div class="col-md-4 pr-0">
                                    <h4>₹ 65,914</h4>   
                                </div>
                            </div>
                        </div>
                        <div class="net-fare-box">
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-5 pl-0">
                                    <h4>Net Fare</h4>
                                </div>
                                <div class="col-md-4 pr-0">
                                    <h4>₹ 8,684</h4>
                                </div>
                            </div>
                        </div>
                        
                    
                    </div>
                </div>
                <div class="adds">
                    <img src="{{ asset('public/web/img/offer_2.jpg')}}" alt="add" class="img-fluid mt-20px">
                    <img src="{{ asset('public/web/img/offer_1.jpg')}}" alt="add" class="img-fluid mt-20px">
                    <img src="{{ asset('public/web/img/offer_3.jpg')}}" alt="add" class="img-fluid mt-20px">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
@endsection