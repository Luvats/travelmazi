<!----Footer----------->
<div class="footer">
	<div class="container">
		<div class="row">
			@php
				$supoort_details = DB::table('support')->first();
			@endphp
			<div class="col-md-4">
				<img src="{{asset('public/web/img/email.png')}}" alt="email" class="img-fluid">
				<h4>Email</h4>
				@if(!empty($supoort_details->email))
					<p>{{$supoort_details->email}}</p>
				@endif
			</div>	
			<div class="col-md-4">
				<img src="{{asset('public/web/img/call.png')}}" alt="call" class="img-fluid">
				<h4>Phone</h4>
				@if(!empty($supoort_details->phone))
					<p>+91-{{$supoort_details->phone}}</p>
				@endif
			</div>
			<div class="col-md-4">
				<img src="{{asset('public/web/img/location.png')}}" alt="location" class="img-fluid">
				<h4>Address</h4>
				@if(!empty($supoort_details->address))
					<p>{{$supoort_details->address}}</p>
				@endif
			</div>		
		</div>


		<div class="row footer-product">
			<div class="col-md-2">
				<div class="about-the-site">
					<ul>
						<!-- <li><img src="" alt="img" class="image-fluid"></li> -->
						<li><a href="#"><h6>Product Offering</h6></a></li>
						<li><a href="#">Flights</a></li>
						<li><a href="#">International Flights</a></li>
						<li><a href="#">Charter Flights</a></li>
						<li><a href="#">Vande Bharat Mission Flights</a></li>
						<li><a href="#">Air Bubble Flights</a></li>
						<li><a href="#">Hotels</a></li>
						<li><a href="#">International Hotels</a></li>
						<li><a href="#">Homestays and Villas</a></li>
						<li><a href="#">Holidays In India</a></li>
						<li><a href="#">International Holidays</a></li>
						<li><a href="#">Book Hotels From UAE</a></li>
						<li><a href="#">myBiz for SME Travel</a></li>
						<li><a href="#">Cabs</a></li>
						<li><a href="#">Cheap Tickets to India</a></li>
						<li><a href="#">Bus Tickets</a></li>
						<li><a href="#">Train Tickets</a></li>
						<li><a href="#">Route Planner</a></li>
						<li><a href="#">Flight Status</a></li>
						<li><a href="#">Mobile Apps</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<div class="about-the-site">
					<ul>
						<!-- <li><a href="#"><img src="" alt="img" class="image-fluid"></a></li> -->
						<li><a href="#"><h6>TRAVEL MAZI</h6></a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Testimonial</a></li>
						<li><a href="#">Reviews</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Corporate Travel</a></li>
						<li><a href="#">Travel Guide</a></li>
						<li><a href="#">Travel Blog</a></li>
						<li><a href="#">Offers</a></li>
						<li><a href="#">Gift Vouchers</a></li>
						<li><a href="#">Travel mazi Coupons</a></li>
						<li><a href="#">My Trip Essentials</a></li>
						<li><a href="#">Deals</a></li>
						<li><a href="#">Stories</a></li>
						<li><a href="#">Trip Planner</a></li>
						<li><a href="#">CSR Policy</a></li>
						<li><a href="#">Travel Community</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<div class="about-the-site">
					<ul>
						<!-- <li><a href="#"><img src="" alt="img" class="image-fluid"></a></li> -->
						<li><a href="#"><h6>ABOUT THE SITE</h6></a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Payment Security</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">User Agreement</a></li>
						<li><a href="#">Terms of Service</a></li>
						<li><a href="#">Visa Information</a></li>
						<li><a href="#">More Offices</a></li>
						<li><a href="#">Make A Payment</a></li>
						<li><a href="#">Work From Home</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<div class="about-the-site">
					<ul>
						<!-- <li><a href="#"><img src="" alt="img" class="image-fluid"></a></li> -->
						<li><a href="#"><h6>PARTNER PROGRAMS</h6></a></li>
						<li><a href="#">Our Retail Stores</a></li>
						<li><a href="#">myPartner - Travel Agent Portal</a></li>
						<li><a href="#">Franchise Program Details</a></li>
						<li><a href="#">Foreign Exchange</a></li>
						<li><a href="#">Reliance – Travel Insurance</a></li>
						<li><a href="#">List your hotel</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<div class="about-the-site">
					<ul>
						<li><a href="#"><h6>MORE LINKS</h6></a></li>
						<li><a href="#">Flights Discount Coupons</a></li>
						<li><a href="#">Domestic Airlines</a></li>
						<li><a href="#">Indigo Airlines</a></li>
						<li><a href="#">Air Asia</a></li>
						<li><a href="#">SpiceJet</a></li>
						<li><a href="#">GoAir</a></li>
						<li><a href="#">Air India</a></li>
						<li><a href="#">Air India Express</a></li>
						<li><a href="#">Vistara</a></li>
						<li><a href="#">New Delhi Mumbai Flights</a></li>
						<li><a href="#">Pune Delhi Flights</a></li>
						<li><a href="#">Delhi Chennai Flights</a></li>
						<li><a href="#">Delhi Guwahati Flights</a></li>
						<li><a href="#">Mumbai Varanasi Flights</a></li>
						<li><a href="#">Guwahati Delhi Flights</a></li>
						<li><a href="#">Goa Delhi Flights</a></li>
						<li><a href="#">Delhi Goa Flights</a></li>
						<li><a href="#">Delhi Chennai Flights</a></li>

					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<div class="about-the-site">
					<ul>
						<li><a href="#"><h6>IMPORTANT LINKS</h6></a></li>
						<li><a href="#">Cheap Flights</a></li>
						<li><a href="#">Flight Status</a></li>
						<li><a href="#">Chennai Mumbai flights</a></li>
						<li><a href="#">Mumbai Hyderabad flights</a></li>
						<li><a href="#">Hyderabad Bangalore flights</a></li>
						<li><a href="#">Pune Bangalore flights</a></li>
						<li><a href="#">Mumbai Jaipur flights</a></li>
						<li><a href="#">Mumbai Chandigarh flights</a></li>
						<li><a href="#">Bangalore Kolkata flights</a></li>
						<li><a href="#">Hyderabad Visakhapatnam flights</a></li>
						<li><a href="#">Chandigarh Bangalore flights</a></li>
						<li><a href="#">Jaipur Mumbai flights</a></li>
						<li><a href="#">Mumbai Shirdi Flights</a></li>
						<li><a href="#">Udaipur to Mumbai flights</a></li>
						<li><a href="#">Goa to Kolkata Flights</a></li>
						<li><a href="#">Delhi to Tirupati Flight</a></li>
						<li><a href="#">Indore to Mumbai Flight</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
		<div class="why-mazi-area">
			<div class="container">
				<div class="row">
					@php
						$footer_details = DB::table('footer')->orderBy('id','desc')->limit(3)->get();
					@endphp
					@if(isset($footer_details))
						@foreach($footer_details as $ft)
							<div class="col-md-4">
								<h6>{{ucfirst($ft->title)}}</h6>
								<p><?php echo $ft->footer_desc;?></p>
							</div>	
						@endforeach
					@endif
				</div>
			</div>

			
				
		</div>
	<!-- </div> -->
		
</div>		
<div class="copy">
	<p>Copyright <?php echo date('Y'); ?> by Travelmazi.in</p><center>
</div>

<!-- Template JS Files -->
<script src="{{asset('public/web/js/jquery-3.4.1.min.js')}} "></script>
<script src="{{asset('public/web/js/jquery-ui.js')}} "></script>
<script src="{{asset('public/web/js/popper.min.js')}} "></script>
<script src="{{asset('public/web/js/jquery-validate.min.js')}}"></script>
<script src="{{asset('public/web/js/bootstrap.min.js')}} "></script>
<script src="{{asset('public/web/js/bootstrap-select.min.js')}} "></script>
<script src="{{asset('public/web/js/moment.min.js')}} "></script>
<script src="{{asset('public/web/js/daterangepicker.js')}} "></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script> -->
<script src="{{asset('public/web/js/owl.carousel.min.js')}} "></script>
<script src="{{asset('public/web/js/jquery.fancybox.min.js')}} "></script>
<script src="{{asset('public/web/js/jquery.countTo.min.js')}} "></script>
<script src="{{asset('public/web/js/animated-headline.js')}} "></script>
<script src="{{asset('public/web/js/jquery.filer.min.js')}} "></script>
<script src="{{asset('public/web/js/jquery.ripples-min.js')}} "></script>
<script src="{{asset('public/web/js/quantity-input.js')}} "></script>
<script src="{{asset('public/web/js/main.js')}} "></script>
@yield('script')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
 <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js" defer></script>
<script>
$(document).ready(function(){
	$('.js-example-basic-single').select2();
	$('.js-example-basic-single_to').select2();
});
</script>

<!-- <script type="text/javascript" src="http://arthtechsolutions.com/mazicab/public/web/js/timepicker.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script type="text/javascript">
$('document').ready(function(){
	var counttt = 0;
   $('#cab_pickup_time').timepicker();
    
    $(document).on('change', '#cab_pickup_time', function() {
        var x = $("#cab_pickup_time").val();
        $(".cab_pickup_time").val(x);
        if(counttt > 0){
        	var ree1 = $('#dropup_time').timepicker('remove');
        }
        $('#dropup_time').timepicker( { 'minTime': x,});
        counttt ++;
    });
});
</script>

<script type="text/javascript">
$('document').ready(function(){
	var counttt = 0;
   $('#Rental_timepicker1').timepicker();
    
    $(document).on('change', '#Rental_timepicker1', function() {
        var x = $("#Rental_timepicker1").val();
        if(counttt > 0){
        	var ree1 = $('#Rental_dropup_time').timepicker('remove');
        }
        $('#Rental_dropup_time').timepicker( { 'minTime': x,});
        counttt ++;
    });
});
</script>

<script type="text/javascript">
$('document').ready(function(){
    $('#dropup_time').timepicker();
    $('#dropup_time').on('changeTime', function() {
        var x = $("#dropup_time").val();
        $(".cab_dropup_time").val(x);
    });
});
</script>

<script type="text/javascript">
	$(function () {
		$('input[name="cabDeparture"]').datepicker({ 
	        minDate: 0,
	        autoclose: true, 
	        todayHighlight: true,
	        dateFormat: 'd M yy' 
	           
	    }).datepicker('update', new Date());
	});

	$(function () {
		$('.customDatePicker').datepicker({ 
	        minDate: 0,
	        autoclose: true, 
	        todayHighlight: true,
	        dateFormat: 'd M yy' 
	           
	    }).datepicker('update', new Date());
	});

	$(function () {
		$('#returStartDatePicker').datepicker({ 
	        minDate: 0,
	        autoclose: true, 
	        todayHighlight: true,
	        dateFormat: 'd M yy',
	        minDate: new Date(),
			onSelect: function(date){
				var selectedDate = new Date(date);
				var msecsInADay = 86400000;
				var endDate = new Date(selectedDate.getTime() + msecsInADay);

			//Set Minimum Date of EndDatePicker After Selected Date of StartDatePicker
				$("#returEndDatePicker").datepicker( "option", "minDate", endDate );
			}
	    });
	});

	$(function () {
		$('#returEndDatePicker').datepicker({ 
	        minDate: 0,
	        autoclose: true, 
	        todayHighlight: true,
	        dateFormat: 'd M yy' 
	           
	    });
	});



	$(document).ready(function(){
		// var adults      = $('.one-way-div').find(".adults").val();
		// var sum         =  Number(adults);
	    // $(".guestTotal_2").html(sum);
	    // $(".hidden_one_way_total").val(sum);

	    // var adults_round = $('.round-trip-div').find(".adults").val();
		// var sum_flight = Number(adults_round);
		// $(".guestTotal_round").html(sum_flight);
        // $(".hidden_round_total").val(sum_flight);

		// var adults_round = $('.multicity-trip-div').find(".adults").val();
		// var sum_flight = Number(adults_round);
		// $(".guestTotal_multicity").html(sum_flight);
        // $(".hidden_multicity_total").val(sum_flight);

	    $(document).on("click",".one-way-div .qtyInc, .one-way-div .qtyDec, #one-way-tab", function(){
    		console.log('one-way-div')
			var children    = $('.one-way-div').find(".childrens").val();
	        var adults      = $('.one-way-div').find(".adults").val();
	        var Infants     = $('.one-way-div').find(".Infants").val();
	        var sum         = Number(children) + Number(adults) + Number(Infants);

	        $(".guestTotal_2").html(sum);
	        $(".hidden_one_way_total").val(sum);
		});
		$(document).on("click",".round-trip-div .qtyInc, .round-trip-div .qtyDec, #round-trip-tab", function(){
			var adults_round 	= $('.round-trip-div').find(".adults").val();
        	var childrens_round = $('.round-trip-div').find(".childrens").val();
        	var Infants_round 	= $('.round-trip-div').find(".Infants").val();

        	var sum_flight         = Number(adults_round) + Number(childrens_round) + Number(Infants_round);

            $(".guestTotal_round").html(sum_flight);
        	$(".hidden_round_total").val(sum_flight);
        });

		$(document).on("click",".multicity-trip-div .qtyInc, .multicity-trip-div .qtyDec, #multicity-trip-tab", function(){
			var adults_multicity 	= $('.multicity-trip-div').find(".adults").val();
        	var childrens_multicity = $('.multicity-trip-div').find(".childrens").val();
        	var Infants_multicity 	= $('.multicity-trip-div').find(".Infants").val();
			console.log("adults_multicity"+adults_multicity+"childrens_multicity"+childrens_multicity+"Infants_multicity"+Infants_multicity);
        	var sum_flight         = Number(adults_multicity) + Number(childrens_multicity) + Number(Infants_multicity);

            $(".guestTotal_multicity").html(sum_flight);
        	$(".hidden_multicity_total").val(sum_flight);
        });

		
	});
</script>

<script type="text/javascript">
   /* $(document).ready(function(){
        var children_multicity    = $(".childrens_multicity").val();
        var adults_multicity      = $(".adults_multicity").val();
        var Infants_multicity     = $(".Infants_multicity").val();
        var sum_multicity         = Number(children_multicity) + Number(adults_multicity) + Number(Infants_multicity);

        $(".guestTotal_multicity").html(sum_multicity);
        $(".hidden_multicity_total").val(sum_multicity);

        $(document).on("click", ".qtyInc, .qtyDec", function(){
        	if ($('#multi-city-tab').hasClass('active')) {
        		var children_multicity    = $(".childrens_multicity").val();
	            var adults_multicity      = $(".adults_multicity").val();
	            var Infants_multicity     = $(".Infants_multicity").val();
	            var sum_multicity         = Number(children_multicity) + Number(adults_multicity) + Number(Infants_multicity);

	            $(".guestTotal_multicity").html(sum_multicity);
	            $(".hidden_multicity_total").val(sum_multicity);
        	}
        });
      
    });*/
</script>

<!------------------------------------------
    VISA TRAVELLER COUNT SCRIPT
---------------------------------------------->
<script type="text/javascript">
    $(document).ready(function(){
        var visa_traveller = $(".visa_traveller").val();
        var sum_visa        = Number(visa_traveller);
        $(".guestTotal_9").html(sum_visa);
        $(".guestTotal_9").val(sum_visa);

    $(".qtyInc").on("click", function(){
    	// alert(5)
        var visa_traveller    = $(".visa_traveller").val();
        var sum_visa        = Number(visa_traveller);

        $(".guestTotal_9").html(sum_visa);
        $(".guestTotal_9").val(sum_visa);
    });

    $(".qtyDec").on("click", function(){
        var visa_traveller    = $(".visa_traveller").val();
        var sum_visa        = Number(visa_traveller);

        $(".guestTotal_9").html(sum_visa);
        $(".guestTotal_9").val(sum_visa);
    });
});
</script>

 <script type="text/javascript">
    /* ========================================== 
scrollTop() >= 300
Should be equal the the height of the header
========================================== */

$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('.fix_headre').addClass('fixed-header');
        $('.fix_headre div').addClass('visible-title');
        $(".main-header-box").css('display','none');
        //$("#myTab").css('width','100%');
        $(".myTab").css("cssText", "width: 100% !important;");

       
    }
    else {
        $('.fix_headre').removeClass('fixed-header');
        $('.fix_headre div').removeClass('visible-title');
        $(".main-header-box").css('display','block');
        $(".myTab").css('width','83%');
    }
});

  </script>

  <script>
$(document).ready(function(){
  // Add smooth scrolling to all links

   $("li a").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top

                    }, 800, function(){
                      
   
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } 
        });
});
</script>

<script>

    function initMap(){
        initMapPick();
        initMapDrop();
        initMapPickRental();
        initMapDropRental();
    }

function initMapPick() {
    var input = document.getElementById('searchMapInputPickup');
   
  
    var autocomplete = new google.maps.places.Autocomplete(input);
  
   
    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        document.getElementById('searchMapInputPickup1').value = place.formatted_address;
        document.getElementById("lat").value = place.geometry.location.lat();
        document.getElementById("lng").value = place.geometry.location.lng();

    });
}

function initMapDrop() {
    var input = document.getElementById('searchMapInputDrop');
  
    var autocomplete = new google.maps.places.Autocomplete(input);
   
    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        document.getElementById('searchMapInputDrop1').value = place.formatted_address;
        document.getElementById("dest_lat").value = place.geometry.location.lat();
        document.getElementById("dest_lng").value = place.geometry.location.lng();

    });
}

function initMapPickRental() {
    var input = document.getElementById('source');
   
  
    var autocomplete = new google.maps.places.Autocomplete(input);
  
   
    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        document.getElementById('source_pickup').value = place.formatted_address;
        document.getElementById("lat_pickup").value = place.geometry.location.lat();
        document.getElementById("lng_pickup").value = place.geometry.location.lng();

    });
}

function initMapDropRental() {
    var input = document.getElementById('destination');
   
  
    var autocomplete = new google.maps.places.Autocomplete(input);
  
   
    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        document.getElementById('destination_drop').value = place.formatted_address;
        document.getElementById("dest_lat_drop").value = place.geometry.location.lat();
        document.getElementById("dest_lng_drop").value = place.geometry.location.lng();

    });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHJ339Q0UfErQfihMr1qEi7JY7V07bn8M&libraries=places&callback=initMap" async defer></script>




<script type="text/javascript">
$(".toggle-password").click(function() {
	$(this).toggleClass("fa-eye fa-eye-slash");
	var input = $($(this).attr("toggle"));
	if (input.attr("type") == "password") {
		input.attr("type", "text");
	} else {
		input.attr("type", "password");
	}
});

$(".signupModel").on("click", function(){
	$("#SignUp").modal('show');
	$("#LoginSignUp").modal('hide');
});

/**************************************************************
		REGISTER SCRIPT 
***************************************************************/

$(".signup_btn").on("click", function(){
	var username 	= $(".username").val();
	var first_name 	= $(".first_name").val();
	var last_name 	= $(".last_name").val();
	var email 		= $(".email").val();
	var password 	= $(".password").val();

	if(username == '')
	{
		$('.username_error').text('Username must be required').css('display', 'block');
		$(".username").css("border-color","#ff0000 !important");

		setInterval(function(){ 
			$(".username_error").css('display','none'); 
			$(".username").css('border-color','rgba(128, 137, 150, 0.2) !important');
		}, 9000);
		
	}

	if(first_name == '')
	{
		$('.first_name_error').text('First name  must be required').css('display', 'block');
		$(".first_name").css("border-color","#ff0000 !important");

		setInterval(function(){ 
			$(".first_name_error").css('display','none'); 
			$(".first_name").css('border-color','rgba(128, 137, 150, 0.2) !important');
		}, 9000);
		
	}

	if(last_name == '')
	{
		$('.last_name_error').text('Last name  must be required').css('display', 'block');
		$(".last_name").css("border-color","#ff0000 !important");

		setInterval(function(){ 
			$(".last_name_error").css('display','none'); 
			$(".last_name").css('border-color','rgba(128, 137, 150, 0.2) !important');
		}, 9000);
		
	}

	if(IsEmail(email)==false)
	{
		$('.email_error').text('Please enter valid email address !').css('display', 'block');
		setInterval(function(){ 
			$(".email_error").css('display','none'); 
		}, 9000);
		
	}else{
		if(email == '')
		{
			$('.email_error').text('Email address must be required').css('display', 'block');
			$(".email").css("border-color","#ff0000 !important");

			setInterval(function(){ 
				$(".email_error").css('display','none'); 
				$(".email").css('border-color','rgba(128, 137, 150, 0.2) !important');
			}, 9000);
			
		}
	}

	if(password == '')
	{
		$('.pswd_error').text('Password must be required').css('display', 'block');
		$(".password").css("border-color","#ff0000 !important");

		setInterval(function(){ 
			$(".pswd_error").css('display','none'); 
			$(".password").css('border-color','rgba(128, 137, 150, 0.2) !important');
		}, 9000);
		
	}

	$.ajaxSetup({
		headers:{ 
				'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
		}
	});

	$.ajax({
		url: "{{url('/signup')}}",
        type: "POST",
        data:{username:username,first_name:first_name,last_name:last_name,email:email,password:password},
        dataType: 'json',
        success: function(response)
        {
        	if(response.status == true)
        	{
        		$("#SignUp").modal('hide');
				$("#successModel").modal('show');

				setInterval(function(){ 
					$("#successModel").modal('hide');
				}, 9000);
        	}else if(response.status == 'Email address already exist')
        	{
        		$('.email_error').text('Email address already exist.').css('display', 'block');
				$(".email").css("border-color","#ff0000 !important");

				setInterval(function(){ 
					$(".email_error").css('display','none'); 
					$(".email").css('border-color','rgba(128, 137, 150, 0.2) !important');
				}, 9000);
        	}
        }
	});
});

function IsEmail(email)
{
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(!regex.test(email))
	{
		return false;
	}else{
		return true;
	}
}

/**************************************************************
		LOGIN SCRIPT 
***************************************************************/
$(".travelLogin").on("click", function(){
	var email 		= $(".loginemail").val();
	var password 	= $(".loginpassword").val();

	if(IsEmail(email)==false)
	{
		$('.loginemail_error').text('Please enter valid email address !').css('display', 'block');
		setInterval(function(){ 
			$(".loginemail_error").css('display','none'); 
		}, 9000);
		
	}else{
		if(email == '')
		{
			$('.loginemail_error').text('Email address must be required').css('display', 'block');
			$(".loginemail").css("border-color","#ff0000 !important");

			setInterval(function(){ 
				$(".loginemail_error").css('display','none'); 
				$(".loginemail").css('border-color','rgba(128, 137, 150, 0.2) !important');
			}, 9000);
			
		}
	}

	if(password == '')
	{
		$('.loginpassword_error').text('Password must be required').css('display', 'block');
		$(".loginpassword").css("border-color","#ff0000 !important");

		setInterval(function(){ 
			$(".loginpassword_error").css('display','none'); 
			$(".loginpassword").css('border-color','rgba(128, 137, 150, 0.2) !important');
		}, 9000);
		
	}

	$.ajaxSetup({
		headers:{ 
			'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
		}
	});

	$.ajax({
		url: "{{url('/weblogin')}}",
        type: "POST",
        data:{email:email,password:password},
        dataType: 'json',
        success: function(response)
        {
        	console.log(response);
        	if(response.status == 'Credential wrong.Please fill correct credential.')
        	{
        		$('.error_msg').text('Credential wrong.Please fill correct credential.').css('display', 'block');

				setInterval(function(){ 
					$(".error_msg").css('display','none'); 
				}, 9000);

        	}else if(response.status == 'Please verify email addreess.')
        	{
        		if(response.verification == 1)
        		{
        			$("#LoginSignUp").modal('hide');

        		}else{

        			$("#email_verification").modal('show');
					$("#LoginSignUp").modal('hide');
					$(".hidden_email").val(email);
        		}
        		
        	}
        }
	});

});

/****************************
	EMAIL VERIFICATION OTP
*****************************/
$(".email_verification_otp").on("click", function(){
	var otp = $(".email_otp").val();
	var email = $(".hidden_email").val();

	if(otp == '')
	{
		$('.otpemail_error').text('OTP must be required').css('display', 'block');

		setInterval(function(){ 
			$(".otpemail_error").css('display','none'); 
		}, 9000);
		
	}

	$.ajaxSetup({
		headers:{ 
			'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
		}
	});

	$.ajax({
		url: "{{url('/otp_verification')}}",
        type: "POST",
        data:{otp:otp,email:email},
        dataType: 'json',
        success: function(response)
        {
        	if(response.status == false)
        	{
        		$('.otpemail_error').text(response.msg).css('display', 'block');

				setInterval(function(){ 
					$(".otpemail_error").css('display','none'); 
				}, 9000);

        	}else if(response.status == true){
        		location.reload();
        	}
        }
	});
});
</script>

<script type="text/javascript">
	    //var separator = ' - ', dateFormat = 'd M Y';
    var options = {
        autoUpdateInput: false,
        autoApply: true,
        locale: {
            format: 'D MMMM Y',
            separator: '-',
            applyLabel: '確認',
            cancelLabel: '取消'
        },
        minDate: moment().add(1, 'days'),
        maxDate: moment().add(359, 'days'),
        opens: "right"
    };


        $('[data-datepicker=separateRange]')
            .daterangepicker(options)
            .on('apply.daterangepicker' ,function(ev, picker) {
                var boolStart = this.name.match(/value_from_start_/g) == null ? false : true;
                var boolEnd = this.name.match(/value_from_end_/g) == null ? false : true;

                var mainName = this.name.replace('value_from_start_', '');
                if(boolEnd) {
                    mainName = this.name.replace('value_from_end_', '');
                    $(this).closest('form').find('[name=value_from_end_'+ mainName +']').blur();
                }

                $(this).closest('form').find('[name=value_from_start_'+ mainName +']').val(picker.startDate.format(dateFormat));
                $(this).closest('form').find('[name=value_from_end_'+ mainName +']').val(picker.endDate.format(dateFormat));

                $(this).trigger('change').trigger('keyup');
            })
            .on('show.daterangepicker', function(ev, picker) {
                var boolStart = this.name.match(/value_from_start_/g) == null ? false : true;
                var boolEnd = this.name.match(/value_from_end_/g) == null ? false : true;
                var mainName = this.name.replace('value_from_start_', '');
                if(boolEnd) {
                    mainName = this.name.replace('value_from_end_', '');
                }

                var startDate = $(this).closest('form').find('[name=value_from_start_'+ mainName +']').val();
                var endDate = $(this).closest('form').find('[name=value_from_end_'+ mainName +']').val();

                $('[name=daterangepicker_start]').val(startDate).trigger('change').trigger('keyup');
                $('[name=daterangepicker_end]').val(endDate).trigger('change').trigger('keyup');
                
                if(boolEnd) {
                    $('[name=daterangepicker_end]').focus();
                }
            });
</script>

<!-----------------------------
	VISA DATERANGEPICKER SCRIPT
----------------------------------->
<script type="text/javascript">
    var separator = ' - ', dateFormat = 'D MMMM Y';
    var options = {
        autoUpdateInput: false,
        autoApply: true,
        locale: {
            format: dateFormat,
            separator: separator,
            applyLabel: '確認',
            cancelLabel: '取消'
        },
        minDate: moment().add(1, 'days'),
        maxDate: moment().add(359, 'days'),
        opens: "right"
    };


$('[data-datepicker=separateRangeVisa]')
    .daterangepicker(options)
    .on('apply.daterangepicker' ,function(ev, picker) {
        var boolStart = this.name.match(/value_from_start_visa/g) == null ? false : true;
        var boolEnd = this.name.match(/value_from_end_visa/g) == null ? false : true;

        var mainName = this.name.replace('value_from_start_visa', '');
        if(boolEnd) {
            mainName = this.name.replace('value_from_end_visa', '');
            $(this).closest('form').find('[name=value_from_end_visa'+ mainName +']').blur();
        }

        $(this).closest('form').find('[name=value_from_start_visa'+ mainName +']').val(picker.startDate.format(dateFormat));
        $(this).closest('form').find('[name=value_from_end_visa'+ mainName +']').val(picker.endDate.format(dateFormat));

        $(this).trigger('change').trigger('keyup');
    })
    .on('show.daterangepicker', function(ev, picker) {
        var boolStart = this.name.match(/value_from_start_visa/g) == null ? false : true;
        var boolEnd = this.name.match(/value_from_end_visa/g) == null ? false : true;
        var mainName = this.name.replace('value_from_start_visa', '');
        if(boolEnd) {
            mainName = this.name.replace('value_from_end_visa', '');
        }

        var startDate = $(this).closest('form').find('[name=value_from_start_visa'+ mainName +']').val();
        var endDate = $(this).closest('form').find('[name=value_from_end_visa'+ mainName +']').val();

        $('[name=daterangepicker_start]').val(startDate).trigger('change').trigger('keyup');
        $('[name=daterangepicker_end]').val(endDate).trigger('change').trigger('keyup');
        
        if(boolEnd) {
            $('[name=daterangepicker_end]').focus();
        }
    });

/*$('[data-datepicker=separateRangeFlightRound]')
    .daterangepicker(options)
    .on('apply.daterangepicker' ,function(ev, picker) {
        var boolStart = this.name.match(/value_from_start_roundflight/g) == null ? false : true;
        var boolEnd = this.name.match(/value_from_end_roundflight/g) == null ? false : true;

        var mainName = this.name.replace('value_from_start_roundflight', '');
        if(boolEnd) {
            mainName = this.name.replace('value_from_end_roundflight', '');
            $(this).closest('form').find('[name=value_from_end_roundflight'+ mainName +']').blur();
        }

        $(this).closest('form').find('[name=value_from_start_roundflight'+ mainName +']').val(picker.startDate.format(dateFormat));
        $(this).closest('form').find('[name=value_from_end_roundflight'+ mainName +']').val(picker.endDate.format(dateFormat));

        $(this).trigger('change').trigger('keyup');
    })
    .on('show.daterangepicker', function(ev, picker) {
    	console.log('show')
        var boolStart = this.name.match(/value_from_start_roundflight/g) == null ? false : true;
        var boolEnd = this.name.match(/value_from_end_roundflight/g) == null ? false : true;
        var mainName = this.name.replace('value_from_start_roundflight', '');
        if(boolEnd) {
            mainName = this.name.replace('value_from_end_roundflight', '');
        }
        var startDate = $(this).closest('form').find('[name=value_from_start_roundflight'+ mainName +']').val();
        var endDate = $(this).closest('form').find('[name=value_from_end_roundflight'+ mainName +']').val();

        $('[name=daterangepicker_start]').val(startDate).trigger('change').trigger('keyup');
        $('[name=daterangepicker_end]').val(endDate).trigger('change').trigger('keyup');
        
        if(boolEnd) {
            $('[name=daterangepicker_end]').focus();
        }

        // $('[name=value_from_start_roundflight'+ mainName +']').data('daterangepicker').setStartDate(startDate);
        // $('[name=value_from_start_roundflight'+ mainName +']').data('daterangepicker').setEndDate(endDate);
        // $('[name=value_from_end_roundflight'+ mainName +']').data('daterangepicker').setStartDate(startDate);
        // $('[name=value_from_end_roundflight'+ mainName +']').data('daterangepicker').setEndDate(endDate);
    });*/

    if($('#roundFlightStartDate, #roundFlightEndDate').length){
	    // check if element is available to bind ITS ONLY ON HOMEPAGE
	    var currentDate = moment().format("DD-MM-YYYY");

	    $('#roundFlightStartDate, #roundFlightEndDate').daterangepicker({
	        locale: {
	              format: dateFormat
	        },
	        "alwaysShowCalendars": true,
	        "minDate": moment().add(1, 'days'),
	        "maxDate": moment().add(359, 'days'),
	        autoApply: true,
	        autoUpdateInput: false
	    }, function(start, end, label) {
	      // console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
	      // Lets update the fields manually this event fires on selection of range
	      var selectedStartDate = start.format(dateFormat); // selected start
	      var selectedEndDate = end.format(dateFormat); // selected end

	      $checkinInput = $('#roundFlightStartDate');
	      $checkoutInput = $('#roundFlightEndDate');

	      // Updating Fields with selected dates
	      $checkinInput.val(selectedStartDate);
	      $checkoutInput.val(selectedEndDate);

	      // Setting the Selection of dates on calender on CHECKOUT FIELD (To get this it must be binded by Ids not Calss)
	      var checkOutPicker = $checkoutInput.data('daterangepicker');
	      checkOutPicker.setStartDate(selectedStartDate);
	      checkOutPicker.setEndDate(selectedEndDate);

	      // Setting the Selection of dates on calender on CHECKIN FIELD (To get this it must be binded by Ids not Calss)
	      var checkInPicker = $checkinInput.data('daterangepicker');
	      checkInPicker.setStartDate(selectedStartDate);
	      checkInPicker.setEndDate(selectedEndDate);

	    });

	} 
	// End Daterange Picker
    /*$('input[name="value_from_start_roundflightdate"]').daterangepicker({
		autoUpdateInput: false,
		minDate: moment().add(1, 'days'),
		maxDate: moment().add(359, 'days'),
        autoclose: true, 
        todayHighlight: true,
        locale: {
			format: 'D MMMM Y',
            separator: '-',
            applyLabel: 'Apply',
            cancelLabel: 'Cancel'
		},
		opens: "right"
	});*/

	/*$('input[name="value_from_start_roundflightdate"]').on('apply.daterangepicker', function(ev, picker) {
		console.log('event', ev, picker)
		$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
	});

	$('input[name="value_from_start_roundflightdate"]').on('cancel.daterangepicker', function(ev, picker) {
		$(this).val('');
	});
*/

function readURL(input) {
	// var files = input.files;
	// alert('total_images = '+files.length);
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#passport1').attr('src', e.target.result);
			$("#passport1").css("display","block");
			$('.pending-text-passport').addClass('complete-text-passport').removeClass('pending-text-passport');
			$(".complete-text-passport").text('COMPLETE');
		};
		reader.readAsDataURL(input.files[0]);
	}
	if (input.files && input.files[1]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#passport2').attr('src', e.target.result);
			$("#passport2").css("display","block");
			
		};
		reader.readAsDataURL(input.files[1]);
	}
	if (input.files && input.files[2]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#passport3').attr('src', e.target.result);
			$("#passport3").css("display","block");
			
		};
		reader.readAsDataURL(input.files[2]);
	}
	if (input.files && input.files[3]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#passport4').attr('src', e.target.result);
			$("#passport4").css("display","block");
			
		};
		reader.readAsDataURL(input.files[3]);
	}
	if (input.files && input.files[4]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#passport5').attr('src', e.target.result);
			$("#passport5").css("display","block");
			
		};
		reader.readAsDataURL(input.files[4]);
	}
	if (input.files && input.files[5]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#passport6').attr('src', e.target.result);
			$("#passport6").css("display","block");
			
		};
		reader.readAsDataURL(input.files[5]);
	}
}
function readURLPhoto(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#blahPhoto1').attr('src', e.target.result);
			$("#blahPhoto1").css("display","block");
			$('.pending-text-photograph').addClass('complete-text-photograph').removeClass('pending-text-photograph');
			$(".complete-text-photograph").text('COMPLETE');
		};
		reader.readAsDataURL(input.files[0]);
	}
	if (input.files && input.files[1]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#blahPhoto2').attr('src', e.target.result);
			$("#blahPhoto2").css("display","block");
			
		};
		reader.readAsDataURL(input.files[1]);
	}
	if (input.files && input.files[2]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#blahPhoto3').attr('src', e.target.result);
			$("#blahPhoto3").css("display","block");
			
		};
		reader.readAsDataURL(input.files[2]);
	}
	if (input.files && input.files[3]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#blahPhoto4').attr('src', e.target.result);
			$("#blahPhoto4").css("display","block");
			
		};
		reader.readAsDataURL(input.files[3]);
	}
	if (input.files && input.files[4]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#blahPhoto5').attr('src', e.target.result);
			$("#blahPhoto5").css("display","block");
			
		};
		reader.readAsDataURL(input.files[4]);
	}
	if (input.files && input.files[5]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#blahPhoto6').attr('src', e.target.result);
			$("#blahPhoto6").css("display","block");
			
		};
		reader.readAsDataURL(input.files[5]);
	}
}

</script>

<script src="{{asset('public/web/js/pdf.js')}} "></script>	
<script src="{{asset('public/web/js/pdf.worker.js')}} "></script>	

<script type="text/javascript">
var _PDF_DOC,
_CANVAS = document.querySelector('#pdf-preview1'),
_OBJECT_URL;

function showPDF(pdf_url) {
	PDFJS.getDocument({ url: pdf_url }).then(function(pdf_doc) {
		_PDF_DOC = pdf_doc;

		// Show the first page
		showPage(1);

		// destroy previous object url
    	URL.revokeObjectURL(_OBJECT_URL);
	}).catch(function(error) {
		// trigger Cancel on error
		document.querySelector("#cancel-pdf1").click();
		
		// error reason
		alert(error.message);
	});;
}

function showPage(page_no) {
	// fetch the page
	_PDF_DOC.getPage(page_no).then(function(page) {

		// set the scale of viewport
		var scale_required = _CANVAS.width / page.getViewport(1).width;

		// get viewport of the page at required scale
		var viewport = page.getViewport(scale_required);

		console.log(_CANVAS.height);

		//var height = 150;

		// set canvas height
		_CANVAS.height = viewport.height;

		var renderContext = {
			canvasContext: _CANVAS.getContext('2d'),
			viewport: viewport
		};
		
		// render the page contents in the canvas
		page.render(renderContext).then(function() {
			document.querySelector("#pdf-preview1").style.display = 'inline-block';
			document.querySelector("#pdf-loader1").style.display = 'none';
		});
	});
}

/* Show Select File dialog */
document.querySelector("#upload-dialog1").addEventListener('click', function() {
    document.querySelector("#pdf-file1").click();
});

/* Selected File has changed */
document.querySelector("#pdf-file1").addEventListener('change', function() {
    // user selected file
    var file = this.files[0];
 

    // allowed MIME types
    var mime_types = [ 'application/pdf' ];
    
    // Validate whether PDF
    if(mime_types.indexOf(file.type) == -1) {
        alert('Error : Incorrect file type');
        return;
    }

    // validate file size
    if(file.size > 10*1024*1024) {
        alert('Error : Exceeded size 10MB');
        return;
    }

  
    document.querySelector("#upload-dialog1").style.border = '1px solid #ffffff';
    document.querySelector("#upload-tab1").style.display = 'none';
    
    // set name of the file
    document.querySelector("#pdf-name1").innerText = file.name;
    document.querySelector("#pdf-name1").style.display = 'inline-block';

	document.querySelector(".eticket-pending-text").className += " complete-text-eticket";
	document.querySelector(".complete-text-eticket").innerText = "COMPLETE";

    // show cancel and upload buttons now
    document.querySelector("#cancel-pdf1").style.display = 'none';
    document.querySelector("#upload-button1").style.display = 'none';

    // Show the PDF preview loader
    document.querySelector("#pdf-loader1").style.display = 'inline-block';

    // object url of PDF 
    _OBJECT_URL = URL.createObjectURL(file)

    // send the object url of the pdf to the PDF preview function
	showPDF(_OBJECT_URL);
});

/* Reset file input */
document.querySelector("#cancel-pdf1").addEventListener('click', function() {
    // show upload dialog button
    document.querySelector("#upload-dialog1").style.display = 'inline-block';

    // reset to no selection
    document.querySelector("#pdf-file1").value = '';

    // hide elements that are not required
    document.querySelector("#pdf-name1").style.display = 'none';
    document.querySelector("#pdf-preview1").style.display = 'none';
    document.querySelector("#pdf-loader1").style.display = 'none';
    document.querySelector("#cancel-pdf1").style.display = 'none';
    document.querySelector("#upload-button1").style.display = 'none';
});

/* Upload file to server */
document.querySelector("#upload-button1").addEventListener('click', function() {
    // AJAX request to server
    alert('This will upload file to server');
});

</script>
</body>
</html>