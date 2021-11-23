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
</style>
<section class="table-holiday-area table-holiday-area-new"></section>
<section class="traveller-content-new">
	<div class="container reviews-slider-new">
		<div class="row">
			<div class="col-lg-12">
				<p class="active-text">NAME <span>(0/3)</span></p>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="sub-container">
		<div class="left-section">
			<div class="appendBottom40">
				<div class="Visa-heading-section">
					<div class="steps-heading">
						<span class="steps-text">Step 1/2</span>
						<h2>Upload Documents</h2>
					</div>
				</div>
				<div class="white-card upload-document-section">
					<div>
						<div class="showHideSection">
							<h3>Passport <span class="documents-text"></span></h3>
							<div class="right-heading-content">
								<span class="pending-text-passport">PENDING</span>
								<span class="down-arrow"></span>
							</div>
						</div>
					</div>
					<div class="info-main-section">
						<p class="upload-text list-circle-wrapper-upload">
							<ul>
								<li>Upload colored passport copies.</li>
								<li>Passport should be valid 6 months from the date of entry in Cambodia.</li>
							</ul>
						</p>
						<div class="green-tag-docs right-tag">
							<span class="relative">
								<span class="green-tip"></span>
							</span>
							<span class="tooltip-text">Make sure that passport copies are colored and clear. We recommend you to upload scanned copies.</span>
						</div>
						<div class="upload-doc-section">
							<div class="makeFlex column">
								<div class="attachmentBtn marginBottom10M makeFlex column">
									<input class="fileattachemnt" type="file" name="attachemnt" accept=".jpg,.jpeg,.png" id="passportUpload"  onchange="readURL(this);">
									<div class="upload-tab">
										<div class="flex1">
											<p class="upload-doc-item">Passport Front</p>
											<p class="format-txt">jpg/jpeg/png</p>
										</div>
										<span class="upload-link">UPLOAD</span>
									</div>
								</div>
								
								<img id="blah" src="http://placehold.it/180" alt="Passport Front" style="display: none;" />
							</div>
						</div>
						<span class="passport-error-txt"></span>
					</div>
				</div>
				<div>
					<div class="appendBottom20">
						<div class="white-card upload-document-section marginB0"><div>
							<div class="showHideSection">
								<h3>E-Tickets <span class="documents-text"></span></h3>
								<div class="right-heading-content">
									<span class="pending-text">PENDING</span>
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
										<div class="attachmentBtn">
											<input class="fileattachemnt" type="file" name="attachemnt" accept=".pdf" onchange="readURLPDF(this);">
											<div class="upload-tab">
												<div class="flex1">
													<p class="upload-doc-item">ETICKET</p>
													<p class="format-txt">pdf</p>
												</div>
												<span class="upload-link">UPLOAD</span>
											</div>
										</div>
										<span class="passport-error-txt"></span>
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
					<div class="white-card upload-document-section marginB0"><div>
						<div class="showHideSection">
							<h3>Photograph <span class="documents-text"></span></h3>
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
										<input class="fileattachemnt" type="file" name="attachemnt" accept=".jpg,.jpeg,.png" onchange="readURLPhoto(this);">
										<div class="upload-tab">
											<div class="flex1">
												<p class="upload-doc-item">PHOTOGRAPH</p>
												<p class="format-txt">jpg/jpeg/png</p>
											</div>
											<span class="upload-link">UPLOAD</span>
										</div>
									</div>
									<span class="passport-error-txt"></span>
									<img id="blahPhoto" src="http://placehold.it/180" alt="Photograph" style="display: none;" />
								</div>
							</div>
						</div>
						<span class="passport-error-txt"></span>
					</div>
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
				<!-- <div class="form-container form-main-section form-section">
					<div class="FormRowCol clearfix">
						<div class="correctName-tooltip">
							<div class="input-label-text">
								<p> 1. Given Name<span class="red-text">*</span> </p>
							</div>
							<div>
								<div>
									<div>
									</div>
									<div>
										<div class="clearfix">
											<input class="tvlrInput" type="text" value="" placeholder="name">
										</div>
										<div class="mobile-tooltip">
											<span class="blue-top-tip"></span>Enter name exactly as mentioned in the passport
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="correctName-tooltip">
							<div class="input-label-text">
								<p> 2. Surname </p>
							</div>
							<div>
								<div>
									<div>
									</div>
									<div>
										<div class="clearfix">
											<input class="tvlrInput" type="text" value="">
										</div>
										<div class="mobile-tooltip">
											<span class="blue-top-tip"></span>Enter name exactly as mentioned in the passport
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="correctName-tooltip">
							<div class="input-label-text">
								<p> 3. Date of Birth<span class="red-text">*</span> </p>
							</div>
							<div>
								<div>
									<div></div>
									<div class="dateDropdown">
										<div class="clearfix">
											<div>
												<div class="tvlrFormField">
													<div class="make_relative">
														<div class="css-10nd86i">
															<div class="css-vj8t7z">
																<div class="css-1hwfws3">
																	<div class="css-xp4uvy">DD</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-2-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
																			<div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-d8oujb"></span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																		</svg>
																	</div>
																</div>
															</div>
															<input name="DAY" type="hidden" value="DD">
														</div>
													</div>
												</div>
												<div class="tvlrFormField">
													<div class="make_relative">
														<div class="css-10nd86i">
															<div class="css-vj8t7z">
																<div class="css-1hwfws3">
																	<div class="css-xp4uvy">
																		<select name="month" id="month">
																			<option value="">MM</option>
																			
																		</select>
																	</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-3-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
																			<div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-d8oujb">
																	</span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																		</svg>
																	</div>
																</div>
															</div>
															<input name="MONTH" type="hidden" value="MM">
														</div>
													</div>
												</div>
												<div class="tvlrFormField">
													<div class="make_relative">
														<div class="css-10nd86i">
															<div class="css-vj8t7z">
																<div class="css-1hwfws3">
																	<div class="css-xp4uvy">
																		<select name="year_dropdwon" class="year_drop">
																			<option value="1995">1995</option>
																		    <option value="1996">1996</option>
																		    <option value="1997">1997</option>
																		    <option value="1998">1998</option>
																		    <option value="1999">1999</option>
																		</select>
																	</div>
																		
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-4-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
																			<div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6"><span class="css-d8oujb">
																</span>
																<div aria-hidden="true" class="css-1ep9fjw">
																	<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																		<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																	</svg>
																</div>
															</div>
														</div>
														<input name="YEAR" type="hidden" value="YYYY">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-field-full">
						<div class="input-label-text">
							<p> 4. Gender<span class="red-text">*</span> </p>
						</div>
						<div>
							<div>
								<div>
								</div>
								<div>
									<div class="radio-form-field clearfix">
										<div>
											<label class="radio">
												<input type="radio" name="visaForm.fieldValues.gender[0]" checked="">
												<span class="outer">
													<span class="inner"></span>
												</span>
												<span class="label-text">Male</span>
											</label>
										</div>
										<div>
											<label class="radio"><input type="radio" name="visaForm.fieldValues.gender[0]">
												<span class="outer">
													<span class="inner"></span>
												</span>
												<span class="label-text">Female</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<div class="correctName-tooltip">
							<div class="input-label-text">
								<p> 5. Nationality<span class="red-text">*</span> </p>
							</div>
							<div>
								<div>
									<div>
									</div>
									<div>
										<div class="clearfix">
											<input class="tvlrInput" type="text" disabled="" value="Indian">
										</div>
										<div class="mobile-tooltip">
											<span class="blue-top-tip"></span>Enter name exactly as mentioned in the passport
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-field-full">
							<div class="input-label-text">
								<p> 6. Country of Birth<span class="red-text">*</span> </p>
							</div>
							<div>
								<div>
									<div>
									</div>
									<div class="clearfix">
										<div class="tvlrFormField">
											<div class="make_relative clearfix appendBottom15 width240">
												<div class="css-10nd86i">
													<div class="css-vj8t7z">
														<div class="css-1hwfws3">
															<div class="css-xp4uvy">India</div>
															<div class="css-1g6gooi">
																<div class="" style="display: inline-block;">
																	<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-5-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
																	<div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																	</div>
																</div>
															</div>
														</div>
														<div class="css-1wy0on6">
															<span class="css-d8oujb"></span>
															<div aria-hidden="true" class="css-1ep9fjw">
																<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																	<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
																	</path>
																</svg>
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
						<div class="correctName-tooltip">
							<div class="input-label-text">
								<p> 7. Passport Number<span class="red-text">*</span> </p>
							</div>
							<div>
								<div>
									<div>
									</div>
									<div>
										<div class="clearfix">
											<input class="tvlrInput" type="text" value="">
										</div>
										<div class="mobile-tooltip">
											<span class="blue-top-tip"></span>Enter name exactly as mentioned in the passport
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="correctName-tooltip">
							<div class="input-label-text">
								<p> 8. Passport Issuance Date<span class="red-text">*</span> </p>
							</div>
							<div>
								<div>
									<div>
									</div>
									<div class="dateDropdown">
										<div class="clearfix">
											<div>
												<div class="tvlrFormField">
													<div class="make_relative">
														<div class="css-10nd86i">
															<div class="css-vj8t7z">
																<div class="css-1hwfws3">
																	<div class="css-xp4uvy">DD</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-6-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
																			<div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-d8oujb"></span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																		</svg>
																	</div>
																</div>
															</div>
															<input name="DAY" type="hidden" value="DD">
														</div>
													</div>
												</div>
												<div class="tvlrFormField">
													<div class="make_relative">
														<div class="css-10nd86i">
															<div class="css-vj8t7z">
																<div class="css-1hwfws3">
																	<div class="css-xp4uvy">MM</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-7-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
																			<div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-d8oujb"></span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
																			</path>
																		</svg>
																	</div>
																</div>
															</div>
															<input name="MONTH" type="hidden" value="MM">
														</div>
													</div>
												</div>
												<div class="tvlrFormField">
													<div class="make_relative">
														<div class="css-10nd86i">
															<div class="css-vj8t7z">
																<div class="css-1hwfws3">
																	<div class="css-xp4uvy">YYYY</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-8-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																				
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-d8oujb"></span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																		</svg>
																	</div>
																</div>
															</div>
															<input name="YEAR" type="hidden" value="YYYY">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="correctName-tooltip">
							<div class="input-label-text">
								<p> 9. Passport Expiry Date<span class="red-text">*</span> </p>
							</div>
							<div>
								<div>
									<div>
										
									</div>
									<div class="dateDropdown">
										<div class="clearfix">
											<div>
												<div class="tvlrFormField">
													<div class="make_relative">
														<div class="css-10nd86i">
															<div class="css-vj8t7z">
																<div class="css-1hwfws3">
																	<div class="css-xp4uvy">DD</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-9-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																				
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-d8oujb"></span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																		</svg>
																	</div>
																</div>
															</div>
															<input name="DAY" type="hidden" value="DD">
														</div>
													</div>
												</div>
												<div class="tvlrFormField">
													<div class="make_relative">
														<div class="css-10nd86i">
															<div class="css-vj8t7z">
																<div class="css-1hwfws3">
																	<div class="css-xp4uvy">MM</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-10-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
																			<div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																				
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-d8oujb"></span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
																				
																			</path>
																		</svg>
																	</div>
																</div>
															</div>
															<input name="MONTH" type="hidden" value="MM">
														</div>
													</div>
												</div>
												<div class="tvlrFormField">
													<div class="make_relative">
														<div class="css-10nd86i">
															<div class="css-vj8t7z">
																<div class="css-1hwfws3">
																	<div class="css-xp4uvy">YYYY</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-11-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																				
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-d8oujb"></span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																		</svg>
																	</div>
																</div>
															</div>
															<input name="YEAR" type="hidden" value="YYYY">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="correctName-tooltip">
							<div class="input-label-text">
								<p> 10. Departure Date<span class="red-text">*</span> </p>
							</div>
							<div>
								<div>
									<div>
										
									</div>
									<div class="dateDropdown">
										<div class="clearfix">
											<div>
												<div class="tvlrFormField">
													<div class="make_relative disabled_input">
														<div class="css-1sontr1">
															<div class="css-162g8z5">
																<div class="css-1hwfws3">
																	<div class="css-142w6gm">20</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input disabled="" autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-12-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																				
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-ln5n5c"></span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																		</svg>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tvlrFormField">
													<div class="make_relative disabled_input">
														<div class="css-1sontr1">
															<div class="css-162g8z5">
																<div class="css-1hwfws3">
																	<div class="css-142w6gm">04</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input disabled="" autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-13-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																				
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-ln5n5c"></span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																		</svg>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tvlrFormField">
													<div class="make_relative disabled_input">
														<div class="css-1sontr1">
															<div class="css-162g8z5">
																<div class="css-1hwfws3">
																	<div class="css-142w6gm">2021</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input disabled="" autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-14-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																				
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-ln5n5c"></span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																		</svg>
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
						<div class="correctName-tooltip">
							<div class="input-label-text">
								<p> 11. Arrival Date<span class="red-text">*</span> </p>
							</div>
							<div>
								<div>
									<div>
										
									</div>
									<div class="dateDropdown">
										<div class="clearfix">
											<div>
												<div class="tvlrFormField">
													<div class="make_relative">
														<div class="css-10nd86i">
															<div class="css-vj8t7z">
																<div class="css-1hwfws3">
																	<div class="css-xp4uvy">27</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-15-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																				
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-d8oujb"></span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																		</svg>
																	</div>
																</div>
															</div>
															<input name="DAY" type="hidden" value="27">
														</div>
													</div>
												</div>
												<div class="tvlrFormField">
													<div class="make_relative">
														<div class="css-10nd86i">
															<div class="css-vj8t7z">
																<div class="css-1hwfws3">
																	<div class="css-xp4uvy">04</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-16-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																				
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-d8oujb"></span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																		</svg>
																	</div>
																</div>
															</div>
															<input name="MONTH" type="hidden" value="04">
														</div>
													</div>
												</div>
												<div class="tvlrFormField">
													<div class="make_relative">
														<div class="css-10nd86i">
															<div class="css-vj8t7z">
																<div class="css-1hwfws3">
																	<div class="css-xp4uvy">2021</div>
																	<div class="css-1g6gooi">
																		<div class="" style="display: inline-block;">
																			<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-17-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																				
																			</div>
																		</div>
																	</div>
																</div>
																<div class="css-1wy0on6">
																	<span class="css-d8oujb"></span>
																	<div aria-hidden="true" class="css-1ep9fjw">
																		<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																			<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																		</svg>
																	</div>
																</div>
															</div>
															<input name="YEAR" type="hidden" value="2021">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-field-full">
							<div class="input-label-text">
								<p> 12. Port of Arrival<span class="red-text">*</span> </p>
							</div>
							<div>
								<div>
									<div>
										
									</div>
									<div class="clearfix">
										<div class="tvlrFormField">
											<div class="make_relative clearfix appendBottom15 width240">
												<div class="css-10nd86i">
													<div class="css-vj8t7z">
														<div class="css-1hwfws3">
															<div class="css-xp4uvy"></div>
															<div class="css-1g6gooi">
																<div class="" style="display: inline-block;">
																	<input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-18-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
																	<div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14px; font-family: Arial; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
																		
																	</div>
																</div>
															</div>
														</div>
														<div class="css-1wy0on6">
															<span class="css-d8oujb"></span>
															<div aria-hidden="true" class="css-1ep9fjw">
																<svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
																	<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
																</svg>
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
					<p class="red-text">* fields are mandatory</p>
				</div> -->
				<div class="form-section-main">
					<form class="form-responcive">
						<div class="row">
							<div class="col-lg-4">
								<div class="typeAheadDropDown">
									<label class="input-label-text">1. Given Name*</label>
									<input name="" autocomplete="rutjfkde" class="tvlrInput" type="text" value="">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="typeAheadDropDown">
									<label class="input-label-text">2. Surname*</label>
									<input name="" autocomplete="" class="tvlrInput" type="text" value="">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="typeAheadDropDown">
									<label class="input-label-text">3. Date Of Birth*</label>
									<input name="" autocomplete="" class="tvlrInput" type="text" value="">
								</div>
							</div>
						</div>
						<div class="typeAheadDropDown">
							<label class="input-label-text">4. Gender*</label><br>
							<input type="radio" name=""><label class="input-label-text">Male</label>
							<input type="radio" name=""><label class="input-label-text">Female</label>
						</div>
						<div class="typeAheadDropDown">
							<label class="input-label-text">5. Nationality*</label>
							<input name="" autocomplete="" class="tvlrInput" type="text" value="">
						</div>
						<div class="typeAheadDropDown">
							<label class="input-label-text">6. Country Of Birth*</label>
							<input name="" autocomplete="" class="tvlrInput" type="text" value="India">
						</div>
						<div class="typeAheadDropDown">
							<label class="input-label-text">7. Passport Number*</label>
							<input name="" autocomplete="" class="tvlrInput" type="text" value="India">
						</div>
						<div class="typeAheadDropDown">
							<label class="input-label-text">8. Passpost Issue Date*</label>
							<input name="" autocomplete="" class="tvlrInput" type="text" value="">
						</div>
						<div class="typeAheadDropDown">
							<label class="input-label-text">9. Passpost Evpiry Date*</label>
							<input name="" autocomplete="" class="tvlrInput" type="text" value="">
						</div>
						<div class="typeAheadDropDown">
							<label class="input-label-text">10. Departure Date*</label>
							<input name="" autocomplete="" class="tvlrInput" type="text" value="">
						</div>
						<div class="typeAheadDropDown">
							<label class="input-label-text">11. Arrival Date*</label>
							<input name="" autocomplete="" class="tvlrInput" type="text" value="">
						</div>
						<div class="typeAheadDropDown">
							<label class="input-label-text">12. Port of Arrival*</label>
							<input name="" autocomplete="" class="tvlrInput" type="text" value="">
						</div>
						<p>*filled are amndatory</p>
						<div class="typeAheadDropDown">
							<label class="input-label-text"> Given Name*</label>
							<input name="" autocomplete="rutjfkde" class="tvlrInput" type="text" value="">
						</div>
						<div class="typeAheadDropDown">
							<label class="input-label-text"> Given Name*</label>
							<input name="" autocomplete="rutjfkde" class="tvlrInput" type="text" value="">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
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
</div>
</div>
<div class="makeFlex row">
	<div class="makeFlex row edit-later-btn upload-from-btn appendBottom20 appendRight20">
		<img src="{{asset('public/web/img/39638719e9225b5fd2cf16ec15e3ecf8.png')}}" alt="" class="upload-back-btn appendRight15">SAVE &amp; EDIT LATER
	</div>
	<div class="makeFlex row upload-submit-btn upload-from-btn appendBottom20">NEXT TRAVELLER
		<img src="{{asset('public/web/img/9e90ef58f22d76d38c6a5f4b4553f16e.png')}}" alt="" class="upload-back-btn appendLeft15">
	</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://jsak.mmtcdn.com/pwa_v3/pwa_commons/pwatracker.js"></script>
<script type="text/javascript" src="https://jsak.mmtcdn.com/pwa_v3/pwa_commons/fingerPrint.js"></script>

<script language="javascript" type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#blah').attr('src', e.target.result);
				$("#blah").css("display","block");
				$('.pending-text-passport').addClass('complete-text-passport').removeClass('pending-text-passport');
				$(".complete-text-passport").text('COMPLETE');
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
	function readURLPhoto(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#blahPhoto').attr('src', e.target.result);
				$("#blahPhoto").css("display","block");
				$('.pending-text-photograph').addClass('complete-text-photograph').removeClass('pending-text-photograph');
				$(".complete-text-photograph").text('COMPLETE');
			};
			reader.readAsDataURL(input.files[0]);
		}
	}

	function readURLPDF(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#blah1').attr('src', e.target.result);
				$("#blah1").css("display","block");
				
			};
			reader.readAsDataURL(input.files[0]);
		}
	}

</script>
<script type="text/javascript">
	$(function () {
        //Reference the DropDownList.
        var ddlYears = $(".year_drop");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = 1950; i <= currentYear; i++) {
            var option = $("<option />");
            option.html(i);
            option.val(i);
            ddlYears.append(option);
        }
    });

</script>

<script type="text/javascript">

var d = new Date();
var monthArray = new Array();
monthArray[0] = "01";
monthArray[1] = "02";
monthArray[2] = "03";
monthArray[3] = "04";
monthArray[4] = "05";
monthArray[5] = "06";
monthArray[6] = "07";
monthArray[7] = "08";
monthArray[8] = "09";
monthArray[9] = "10";
monthArray[10] = "11";
monthArray[11] = "12";
for(m = 0; m <= 11; m++) {
    var optn = document.createElement("OPTION");
    optn.text = monthArray[m];
    // server side month start from one
    optn.value = (m+1);
    // if june selected
    if ( m == 5) {
        optn.selected = true;
    }
    document.getElementById('month').options.add(optn);
}

</script>
@endsection