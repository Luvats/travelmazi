@extends('layouts.web')
@section('content')
<!-- ================================
    START hotel list box AREA
================================= -->
<section class="table-hotel-area">
	<div class="container">				
		<div class="contact-form-action hotel_destination">
			<form action="#" class="row align-items-center destination-hotel">
				<div class="col-lg-5 pr-0 desti">
					<div class="input-box">
                        <label class="label-text">APPLYING FOR</label>
                        <div class="form-group">
                            <div class="select-contain w-auto">
                                <select class="select-contain-select">
                                        <option value="caribbean">Fresh Passport</option>
                                        <option value="bahamas">Re-issue of Passport</option>
                                </select>
                            </div>
                        </div>
                    </div>
				</div><!-- end col-lg-3 -->
				<div class="col-lg-5 pr-0">
					<div class="input-box">
                        <label class="label-text">GENDER</label>
                        <div class="form-group">
                            <div class="select-contain w-auto">
                                <select class="select-contain-select">
                                        <option value="caribbean">Male</option>
                                        <option value="bahamas">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
				</div><!-- end col-lg-3 -->
				<div class="col-lg-2 search-hotel">
					<a href="" class="theme-btn text-center">Search Now</a>
				</div>
			</form>
		</div>
	</div><!-- end container -->
</section>	<!-- end section -->

<!-- passport details section -->
<div class="passport_page-details">
    <div class="container">
        <div class="passport-box-area">
            <h2>PASSPORT APPLICATION FORM</h2>
            <h6>Government of India, Ministry of External Affairs</h6>
            <p>Please read the Passport Instruction Booklet carefully before filling the form. Furnishing of incorrect
                information/suppression of information would lead to rejection of application and would attract penal provisions as prescribed under the Passports Act, 1967. Please produce your original documents at the time of submission of the form. All fieldsmarked with (*) are mandatory to fill.</p>
            <h4>Service Required</h4>
            <div class="applicant">
                <form>
                	<div class="row">
	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Applying for</label>
	                        <div class="select-contain w-auto">
	                            <select class="select-contain-select">
	                                    <option value="caribbean">Fresh Passport</option>
	                                    <option value="bahamas">Re-issue of Passport</option>
	                            </select>
	                        </div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Type of Application</label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Normal
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Tatkal
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Type of Passport Booklet</label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio3">
								    <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3" checked>Normal
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio4">
							        <input type="radio" class="form-check-input" id="radio4" name="optradio" value="option4">Tatkal
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label  class="label-text">Applicant's Given Name</label>
	                            <input type="email" class="form-control" id="inputEmail3" placeholder=" (Given Name means First Name followed by middle Name (if any))"> 
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Surname</label>
	                        
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                        
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Gender</label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio5">
								    <input type="radio" class="form-check-input" id="radio5" name="optradio" value="option5" checked>Male
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio6">
							        <input type="radio" class="form-check-input" id="radio6" name="optradio" value="option6">Female
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Are you known by any other names(aliases)?</label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio7">
								    <input type="radio" class="form-check-input" id="radio7" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio8">
							        <input type="radio" class="form-check-input" id="radio8" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Have you ever changed your name ?</label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio9">
								    <input type="radio" class="form-check-input" id="radio9" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio10">
							        <input type="radio" class="form-check-input" id="radio10" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label  class="label-text">D.O.B</label>             
	                            <input type="date" class="form-control" id="inputdate" placeholder="">     
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text
	                        ">Is your Place of Birth out of India
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio11">
								    <input type="radio" class="form-check-input" id="radio11" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio12">
							        <input type="radio" class="form-check-input" id="radio12" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Village or Town or City</label>
	                        
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                       
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Marital Status</label>
	                        <div class="form-group">
	                            <div class="select-contain w-auto">
	                                <select class="select-contain-select">
	                                        <option value="caribbean">Single</option>
	                                        <option value="bahamas">Married</option>
	                                        <option value="bahamas">Divorced</option>
	                                        <option value="bahamas">Widow/Widower</option>
	                                </select>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Citizenship of India by</label>
	                        <div class="form-group">
	                            <div class="select-contain w-auto">
	                                <select class="select-contain-select">
	                                        <option value="caribbean">Birth</option>
	                                        <option value="bahamas">Descent</option>
	                                        <option value="bahamas">Registration</option>
	                                </select>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Voter ID (If available)</label>
	                       
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                        
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">PAN (If available)</label>
	                       
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                        
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Employment Type</label>
	                        <div class="form-group">
	                            <div class="select-contain w-auto">
	                                <select class="select-contain-select">
	                                        <option value="caribbean">Govt Job</option>
	                                        <option value="bahamas">Homemaker</option>
	                                        <option value="bahamas">Not Employed</option>
	                                        <option value="bahamas">Private</option>
	                                </select>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Is either of your parent (in case of minor)/ spouse, a government servant?</label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio12" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio14" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Educational Qualification</label>
	                        <div class="form-group">
	                            <div class="select-contain w-auto">
	                                <select class="select-contain-select">
	                                        <option value="caribbean">Graduate and above</option>
	                                        <option value="bahamas">10 Pass and above</option>
	                                </select>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Are you eligible for Non-ECR category?</label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio15" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio16" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Visible Distinguishing Mark</label>
	                        
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                        
	                    </div>

	                    <div class="form-group col-lg-12">
	                        <label class="label-text"">Aadhaar Number</label>
	                        
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                        
	                    </div>
	                    <h5>Family Details (Father/Mother/Legal Guardian details; at least one is mandatory.)</h5>
	                    <div class="form-group col-lg-6">
	                        <label class="label-text"">Father's Given Name</label>
	                        
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                       
	                    </div>
	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Surname</label>
	                        
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                        
	                    </div>
	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Legal Guardian's Given Name</label>
	                        
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                        
	                    </div>
	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Surname</label>
	                       
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                       
	                    </div>
	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Mother Name</label>
	                        
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                        
	                    </div>
	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Surname</label>
	                        
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                        
	                    </div>
	                    <h5>Present Residential Address Details (where applicant presently resides) </h5>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Is your present address out of India?</label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio17" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio18" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Do you have a Permanent Address?</label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio19" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio20" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <h5>Emergency Contact Details</h5>
	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Name and Address</label>
	                        
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                        
	                    </div>
	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Mobile Number</label>
	                        
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                        
	                    </div>
	                    <div class="form-group col-lg-6">
	                        <label class="label-text">Telephone Number</label>
	                       
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                       
	                    </div>
	                    <div class="form-group col-lg-12">
	                        <label class="label-text">E-mail ID</label>
	                        
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                        
	                    </div>

	                    <h5>Identity Certificate /Passport Details</h5>
	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Have you ever held/hold any Identity Certificate?</label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio21" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio22" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <h6>(Identity Certificate(IC) is normally issued to Tibetan/other stateless people residing in India)
	                    Details of Previous/Current Diplomatic/Official Passport* </h6>
	                    <div class="form-group col-lg-12">
	                        <div class="select-contain w-auto">
	                            <select class="select-contain-select">
	                                    <option value="caribbean">Details Available</option>
	                                    <option value="bahamas">Details Not Available/Never Held Diplomatic/Official Passport</option>
	                            </select>
	                        </div>
	                    </div>

	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Have you ever applied for passport, but not issued?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio23" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio24" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>
						<div class="col-lg-12" style="padding:8px 0;">
		                    <h5>Other Details</h5>
		                </div>
	                    <h6>1) Provide the following details if there are any criminal proceedings pending against the applicant.</h6>

	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Are any proceedings in respect of an offence alleged to have been committed by you pending before a criminal court in India?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio25" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio26" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Has any warrant or summons for your appearance been issued and pending before a court under any law for the time being in force?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio27" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio28" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Has a warrant for your arrest been issued by a court under any law for the time being in force?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio29" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio30" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-12">
	                        <label class="label-text col-sm-8">Has an order prohibiting your departure from India been made by any court?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio31" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio32" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <h6>2) Provide the following details if the applicant has been convicted by a court in India.</h6>
	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Have you, at any time during the period of five years immediately preceding the date of this application,been convicted by a court in India for any offence involving moral turpitude and sentenced in respect thereof to
	                        imprisonment for not less than two years?*
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio33" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio34" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <h6>3) Provide the following details if the applicant has been refused/denied passport.</h6>
	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Have you ever been refused/denied passport?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio35" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radi036" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Has your passport ever been impounded?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio37" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio38" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Has your passport ever been revoked?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio39" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio40" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <h6>4) Provide the following details if applicant has applied for or been granted foreign citizenship.</h6>
	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Have you ever been granted citizenship by any other country?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio41" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio42" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Have you ever held the passport of any other country at any time?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio43" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio44" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Have you ever surrendered your Indian passport?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio45" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio46" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Have you ever applied for renunciation of Indian citizenship?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio47" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio48" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <h6>5) Provide the following details if applicant has returned to India on Emergency Certificate.</h6>
	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Have you ever returned to India on Emergency Certificate (EC) ?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio49" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio50" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Have you ever been deported from any country?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio51" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio52" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <div class="form-group col-lg-12">
	                        <label class="label-text">Have you ever been repatriated from any country back to India?
	                        </label>
	                        <div class="check-area">
		                        <div class="form-check form-check-inline">
								    <label class="form-check-label" for="radio1">
								    <input type="radio" class="form-check-input" id="radio53" name="optradio" value="option1" checked>Yes
								    </label>
							    </div>
							    <div class="form-check form-check-inline">
							      <label class="form-check-label" for="radio2">
							        <input type="radio" class="form-check-input" id="radio54" name="optradio" value="option2">no
							      </label>
							    </div>
							</div>
	                    </div>

	                    <h5>Self Declaration</h5>
	                    <p>I owe allegiance to the sovereignty, unity & integrity of India, and have not voluntarily acquired citizenship or travel document of anyother country. I have not lost, surrendered or been deprived of the citizenship of India. I have not contravened any of the conditionsrelating to the possession and use of an Indian passport.
	                    I affirm that the information and particulars given by me in this form are true and correct. I further state that I am not suppressing any material information in this regard. I further affirm that the enclosures and documentary proof submitted in support of my application for an Indian passport are authentic and solely pertain to me and I am fully responsible for the accuracy of the same. I am liable to be penalized or prosecuted if found otherwise. I am aware that under the Passports Act, 1967 it is a criminal offence to furnish any false
	                    information or to suppress any material information with a view to obtaining passport or travel document.
	                    I have read and understood the contents of the above and by submitting this form certify that all the information submitted by me in theform is bonafide.</p> 
	                    <div class="form-group col-lg-12">
	                         <div class="select-contain w-auto">
	                            <select class="select-contain-select">
	                                    <option value="caribbean">I Agree</option>
	                            </select>
	                       </div>
	                   </div>
	                   <div class="form-group col-lg-6">
	                        <label  class="label-text">Place</label>
	                       
	                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
	                        
	                    </div>
	                    <div class="form-group col-lg-6">
	                        <label  class="label-text">Date</label>
	                        
	                            <input type="date" class="form-control" id="inputdate" placeholder="">
	                       
	                    </div>

	                    <h5>NOTE :</h5>
	                    <p>Applicants are required to submit the proof of address of the present address only, irrespective of the date from which he/she has been residing at the given address. </p>

	                    <div class="form-group col-lg-12">
	                        <div class="sub-pass">
	                          <button type="submit" class="btn save_passport_details">Save</button>
	                        </div>
	                    </div>
	                </div>
                </form>  
            </div>
        </div>
    </div>
</div>

@endsection
