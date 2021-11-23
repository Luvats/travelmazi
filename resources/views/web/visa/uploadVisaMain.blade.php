@extends('layouts.web')
@section('content')

<style type="text/css">
	.dateDropdown {
    width: 235px !important;
}
.dateDropdown .tvlrFormField {
    width: 39.33% !important;
    float: left;
}
select.year_drop {
    border: none;
}
svg.css-19bqh2r {
    display: none;
}
select#month {
    border: none;
}
.visa-detail-row{
	margin: 18px 0px !important;
}

</style>
<!-- <section class="table-holiday-area table-holiday-area-new"></section> -->
<section class="visa-doc-nav-tab-section">
	<div class="container">
		<div class="row">
			<!-- <div class="col-lg-12">
				<p class="active-text">NAME <span>(0/3)</span></p>
			</div> -->
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				@php  $x = 1; @endphp
				@foreach($VisaProcess['first_name'] as $fd)
					<li class="nav-item">
	    				<a class="nav-link {{ $x == 1 ? 'active' : '' }}" id="pills-home-tab" data-toggle="pill" href="#pills-home{{ $x}}" role="tab" aria-controls="pills-home" aria-selected="true">
							<p class="active-text">{{ strtoupper($fd) }} <span>(0/3)</span></p>
						</a>
  					</li>
  				@php $x++ ; @endphp
				@endforeach
			</ul>
		</div>
	</div>

	<div class="visa-doc-main-div">
		<form method="post" action="{{ url('/visa_application_upload')}}" enctype="multipart/form-data">
			@csrf
		<div class="tab-content" id="pills-tabContent">
			@php  $x = 1; @endphp
			@foreach($VisaProcess['first_name'] as $fd)
				<div class="tab-pane fade show {{ $x == 1 ? 'active' : '' }}" id="pills-home{{ $x}}" role="tabpanel" aria-labelledby="pills-home-tab">
					<section class="visa-document-section">
						<div class="container">
							<div class="sub-container">
								<div class="row">
									<div class="col-lg-12">
										<div class="Visa-heading-section">
											<div class="steps-heading">
												<span class="steps-text">Step 1/2</span>
												<h2>Upload Documents</h2>
											</div>
										</div>
									</div>
									<div class="col-lg-8 visa-document-form">
										<div class="left-section">
											<div class="appendBottom40">
												<div class="white-card upload-document-section">
													<div class="showHideSection">
														<h3>Passport
															@if(count($VisaProcess['first_name']) > 1) 
																<span class="documents-text">( Upload passports for all travellers )</span>
															@endif
														</h3>
														<div class="right-heading-content">
															<span class="pending-text-passport">PENDING</span>
															<span class="down-arrow"></span>
														</div>
													</div>
													<div class="info-main-section">
														<p class="upload-text list-circle-wrapper-upload">
															<ul>
																<li>Upload colored passport copies.</li>
																<li>Passport should be valid 6 months from the date of entry in Cambodia.</li>
															</ul>
														</p>
														<div class="upload-doc-section">
															<div class="makeFlex column">
																<div class="attachmentBtn marginBottom10M makeFlex column">
																	<input class="fileattachemnt" type="file" name="passport_front[]" accept=".jpg,.jpeg,.png" id="passportUpload"  onchange="readURL(this);" multiple>
																	<div class="upload-tab">
																		<div class="flex1">
																			<p class="upload-doc-item">Passport Front</p>
																			<p class="format-txt">jpg/jpeg/png</p>
																		</div>
																		<span class="upload-link">UPLOAD</span>
																	</div>
																</div>
																@if($x == 1)
																	<img id="passport{{$x}}" class="visa_documents" name="passport_front_img" src="http://placehold.it/180" alt="Passport Front" style="display: none;" />
																@else
																	<img id="passport{{$x}}" class="visa_documents" name="passport_front_img" src="http://placehold.it/180" alt="Passport Front" style="display: none;" />
																@endif
															</div>
														</div>
														<span class="passport-error-txt"></span>
													</div>
												</div>
											</div>
											<div>
												<div class="appendBottom20">
													<div class="white-card upload-document-section marginB0">
														<div>
															<div class="showHideSection">
																<h3>E-Tickets <span class="documents-text"></span></h3>
																<div class="right-heading-content">
																	<span class="eticket-pending-text">PENDING</span>
																	<span class="down-arrow"></span>
																</div>
															</div>
														</div>
														<div class="info-main-section">
															<p class="upload-text list-circle-wrapper-upload">
																<ul>
																	<li>Upload flight tickets from India to Cambodia and back.</li>
																</ul>
															</p>
															<div class="upload-doc-section">
																<div>
																	<div class="upload-doc-section makeFlex column">
																		@if( $x == 1)
																			<div class="preview-container" id="preview-container{{$x}}">
																				<div class="attachmentBtn upload-dialog" id="upload-dialog{{$x}}">
																					<input class="fileattachemnt pdf-file" type="file" name="eticket_pdf[]" accept=".pdf" id="pdf-file{{$x}}" multiple="" >
																					<div class="upload-tab" id="upload-tab{{$x}}">
																						<div class="flex1">
																							<p class="upload-doc-item">ETICKET</p>
																							<p class="format-txt">pdf</p>
																						</div>
																						<span class="upload-link">UPLOAD</span>
																					</div>
																					<div class="pdf-loader" id="pdf-loader{{$x}}">Loading Preview ..</div>
																					<canvas class="pdf-preview" id="pdf-preview{{$x}}" width="150"></canvas>
																					<span class="pdf-name" id="pdf-name{{$x}}"></span>
																					
																					<button class="upload-button" id="upload-button{{$x}}">Upload</button>
																					<button class="cancel-pdf" id="cancel-pdf{{$x}}">Cancel</button>
																				</div>
																			</div>
																		@else
																			<div class="preview-container" id="preview-container{{$x}}">
																			<div class="attachmentBtn upload-dialog" id="upload-dialog{{$x}}">
																				<input class="fileattachemnt pdf-file" type="file" name="eticket_pdf[]" accept=".pdf" id="pdf-file{{$x}}" multiple="" >
																				<div class="upload-tab" id="upload-tab{{$x}}">
																					<div class="flex1">
																						<p class="upload-doc-item">ETICKET</p>
																						<p class="format-txt">pdf</p>
																					</div>
																					<span class="upload-link">UPLOAD</span>
																				</div>
																				<div class="pdf-loader" id="pdf-loader{{$x}}">Loading Preview ..</div>
																				<canvas class="pdf-preview" id="pdf-preview{{$x}}" width="150"></canvas>
																				<span class="pdf-name" id="pdf-name{{$x}}"></span>
																				
																				<button class="upload-button" id="upload-button{{$x}}">Upload</button>
																				<button class="cancel-pdf" id="cancel-pdf{{$x}}">Cancel</button>
																			</div>
																		</div>
																		@endif
																	</div>
																</div>
															</div>
															<span class="passport-error-txt"></span>
														</div>
													</div>
												</div>
											</div>
											<div>
												<div class="appendBottom20">
													<div class="white-card upload-document-section marginB0">
														<div>
															<div class="showHideSection">
																<h3>Photograph 
																	@if(count($VisaProcess['first_name']) > 1) 
																		<span class="documents-text">( Upload photographs for all travellers )</span>
																	@endif
																</h3>
																<div class="right-heading-content">
																	<span class="pending-text-photograph">PENDING</span>
																	<span class="down-arrow"></span>
																</div>
															</div>
														</div>
														<div class="info-main-section">
															<p class="upload-text list-circle-wrapper-upload">
																<ul>
																	<li>Upload photograph as per mentioned specification.</li>
																	<li>4cm X 6cm in dimensions 
																		<ul>
																			<li>60%-70% face appearance in white background.</li>
																		</ul>
																	</li>
																</ul>
															</p>
															<div class="upload-doc-section">
																<div>
																	<div class="upload-doc-section makeFlex column">
																		<div class="attachmentBtn">
																			<input class="fileattachemnt" type="file" name="photograph_visa[]" accept=".jpg,.jpeg,.png" onchange="readURLPhoto(this);" multiple="">
																			<div class="upload-tab">
																				<div class="flex1">
																					<p class="upload-doc-item">PHOTOGRAPH</p>
																					<p class="format-txt">jpg/jpeg/png</p>
																				</div>
																				<span class="upload-link">UPLOAD</span>
																			</div>
																		</div>
																		<span class="passport-error-txt"></span>

																		@if($x == 1)
																			<img name="photograph_visa43" class="visa_documents" id="blahPhoto{{ $x }}" src="http://placehold.it/180" alt="Photograph" style="display: none;" />
																		@else
																			<img name="photograph_visa43" class="visa_documents" id="blahPhoto{{ $x }}" src="http://placehold.it/180" alt="Photograph" style="display: none;" />
																		@endif

																		
																	</div>
																</div>
															</div>
															<span class="passport-error-txt"></span>
														</div>
													</div>
												</div>
											</div>
											<div class="Visa-heading-section">
												<div class="steps-heading">
													<span class="steps-text">Step 2/2</span>
													<h2>Fill Form</h2>
												</div>
												<div class="white-card-upload relative">
													<span class="info-tag">IMPORTANT INFORMATION</span>
													<ul class="banner-text">
														<li>Please make sure to mention all the information as per Passport. This information would be sent directly to the embassy for visa processing.</li>
													</ul>
												</div>
											</div>
											<div class="white-card upload-document-section">
												<div>
													<div>
														<div class="showHideSection">
															<h3>Visa Application for Cambodia <span class="documents-text"></span></h3>
															<div class="right-heading-content">
																<span class="pending-text">PENDING</span>
																<span class="down-arrow"></span>
															</div>
														</div>
													</div>
													<div>
														<div class="form-section-main">
															<!-- <form class="form-responsive"> -->
																<div class="row visa-detail-row">
																	<div class="col-lg-4">
																		<div class="visa-inner-form">
																			<label class="input-label-text">1. Given Name<span class="visa_star">*</span></label>
																			<input name="name[]" autocomplete="off" class="tvlrInput" type="text" value="{{ $fd }}" required="">
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<div class="visa-inner-form">
																			<label class="input-label-text">2. Surname<span class="visa_star">*</span></label>
																			<input name="surname[]" autocomplete="off" class="tvlrInput" type="text" value="" required="">
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<div class="visa-inner-form">
																			<label class="input-label-text">3. Date Of Birth<span class="visa_star">*</span></label>
																			<input name="dob[]" autocomplete="off" class="tvlrInput" type="date" value="" required="">
																		</div>
																	</div>
																</div>
																<div class="row visa-detail-row">
																	<div class="col-lg-4 align-self-center">
																		<div class="visa-inner-form select-gender-visa">
																			<label class="input-label-text">4. Gender<span class="visa_star">*</span></label><br>
														 					<input type="radio"  name="gender[]" value="male" required="">
													  						<label for="male">Male</label> 
													  						<input type="radio" id="female" name="gender[]" value="female" required="">
													 	 					<label for="female">Female</label>
													 	 				</div>
																	</div>
																	<div class="col-lg-4">
																		<div class="visa-inner-form">
																			<label class="input-label-text">5. Nationality<span class="visa_star">*</span></label>
																			<input name="nationality[]" autocomplete="off" class="tvlrInput" type="text" value="" required="">
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<div class="visa-inner-form">
																			<label class="input-label-text">6. Country Of Birth<span class="visa_star">*</span></label>
																			<input name="country_birth[]" autocomplete="off" class="tvlrInput" type="text" value="India" required="">
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="visa-inner-form">
																			<label class="input-label-text">7. Passport Number<span class="visa_star">*</span></label>
																			<input name="passport_nbr[]" autocomplete="off" class="tvlrInput" type="text" value="India" required="">
																		</div>
																	</div>
																</div>
																<div class="row visa-detail-row">
																	<div class="col-lg-4">
																		<div class="visa-inner-form">
																			<label class="input-label-text">8. Passpost Issue Date<span class="visa_star">*</span></label>
																			<input name="passport_issue_date[]" autocomplete="off" class="tvlrInput" type="date" value="" required="">
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<div class="visa-inner-form">
																			<label class="input-label-text">9. Passpost Expiry Date<span class="visa_star">*</span></label>
																			<input name="expiry_date[]" autocomplete="off" class="tvlrInput" type="date" value="" required="">
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<div class="visa-inner-form">
																			<label class="input-label-text">10. Departure Date<span class="visa_star">*</span></label>
																			<input name="departure_date[]" autocomplete="off" class="tvlrInput" type="date" value="" required="">
																		</div>
																	</div>
																</div>
																<div class="row visa-detail-row">
																	<div class="col-lg-6">
																		<div class="visa-inner-form">
																			<label class="input-label-text">11. Arrival Date<span class="visa_star">*</span></label>
																			<input name="arrival_date[]" autocomplete="off" class="tvlrInput" type="date" value="" required="">
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="visa-inner-form">
																			<label class="input-label-text">12. Port of Arrival<span class="visa_star">*</span></label>
																			<input name="port_arrival[]" autocomplete="off" class="tvlrInput" type="text" value="" required="">
																		</div>
																	</div>
																</div>
																<p class="amndatory"><span class="visa_star">*</span>fields are mandatory</p>
																
															<!-- </form> -->
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 visa-sidebar">
										<div class="right-section">
											<div class="white-card-right upload-right-section">
												<div class="breakup-row">
													<p class="heading-breakup-upload">30 Days Single Entry </p>
													<div class="right-row">
														<p class="Total-price">₹ 5999</p>
														<p class="traveller-txt">For 2 Travellers</p>
													</div>
												</div>
											</div>
											<div class="green-tag-docs right-tag">
												<span class="relative">
													<span class="green-tip"></span>
												</span>
												<span class="tooltip-text">Make sure that passport copies are colored and clear. We recommend you to upload scanned copies.</span>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</section>
				</div>
			@php $x++ ; @endphp
			@endforeach
			
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="makeFlex row save-next-button">
						<input type="hidden" name="visa_id" value="{{ $id }}">
						<button type="submit" class="makeFlex row edit-later-btn upload-from-btn appendBottom20 appendRight20">SUBMIT</button> 
						@if(count($VisaProcess['first_name']) > 1)
							<div class="makeFlex row upload-submit-btn upload-from-btn appendBottom20 btnTraveller">NEXT TRAVELLER
								<img src="{{asset('public/web/img/9e90ef58f22d76d38c6a5f4b4553f16e.png')}}" alt="" class="upload-back-btn appendLeft15">
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.btnTraveller').click(function(){
		$('.nav-pills > .nav-item > .nav-link.active').parent().next().find('a').trigger('click');
  		//$('.nav-pills > .nav-item >.active').next('a').trigger('click');
	});
});
</script>

@endsection