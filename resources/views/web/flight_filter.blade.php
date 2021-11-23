  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript">
      $(function() {
          var minFlightPrice = parseInt("<?php echo $min_flight_price; ?>");
          var maxFlightPrice = parseInt("<?php echo $max_flight_price; ?>");
          if (maxFlightPrice != 0) {
              $('.one-way-price-filter').show();
              $("#range-slider").slider({
                  range: true,
                  minRange: 10,
                  min: minFlightPrice,
                  max: maxFlightPrice,
                  values: [minFlightPrice, maxFlightPrice],
                  slide: function(event, ui) {
                      $("#filter_price").val("₹" + ui.values[0] + " - ₹" + ui.values[1]);
                      showHideFlights();
                  }
              });
              $("#filter_price").val("₹" + $("#range-slider").slider("values", 0) + " - ₹" + $("#range-slider").slider("values", 1));
          } else {
              $('.one-way-price-filter').hide();
          }
      });
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#rating-1").click(function(){
    $("#rating-1").toggleClass("change");
  });
});
</script>
<script>
$(document).ready(function(){
  $("#rating-2").click(function(){
    $("#rating-2").toggleClass("change");
  });
});
</script>
<script>
$(document).ready(function(){
  $("#rating-3").click(function(){
    $("#rating-3").toggleClass("change");
  });
});
</script>
<script>
$(document).ready(function(){
  $("#rating-4").click(function(){
    $("#rating-4").toggleClass("change");
  });
});
</script>
<script>
$(document).ready(function(){
  $("#rating-5").click(function(){
    $("#rating-5").toggleClass("change");
  });
});
</script>
<style>
.change {
  color: #FF9933 !important;}
</style>
  <div class="col-lg-3 flight_sidebar-list ">
      <div class="sidebar-widget">
          <h3 class="title stroke-shape">Flight Stops</h3>
          <div class="sidebar-widget-item">
              <div class="custom-checkbox">
                  <input type="checkbox" id="0stops" class="check-size check-stops">
                  <label for="0stops">0 Stop</label>
              </div>
              <div class="custom-checkbox">
                  <input type="checkbox" id="1stops" class="check-size check-stops">
                  <label for="1stops">1 Stop</label>
              </div>
              <div class="custom-checkbox">
                  <input type="checkbox" id="2stops" class="check-size check-stops">
                  <label for="2stops">2 Stops</label>
              </div>
          </div>
      </div><!-- end sidebar-widget -->
      <div class="sidebar-widget one-way-price-filter">
          <h3 class="title stroke-shape">Filter by Price</h3>
          <div class="sidebar-price-range">
              <p>
                  <label for="filter_price">Price range:</label>
                  <input type="text" id="filter_price" readonly style="border:0; color:#f6931f; font-weight:bold;">
              </p>
              <div id="range-slider"></div>
          </div>
      </div><!-- end sidebar-widget -->

      <div class="sidebar  mt-0">
          @if(!empty($flight_names))
          <div class="sidebar-widget">
              <h3 class="title stroke-shape">Airlines</h3>
              <div class="sidebar-widget-item">
                  <div class="contact-form-action">
                      <form action="#">
                          @foreach($flight_names as $flight_code => $flight)
                          <div class="input-box d-flex justify-content-between">
                              <div class="check">
                                  <input type="checkbox" name="" id="{{ $flight_code }}code" class="check-size check-airlines">
                                  <label>{{ $flight['name'] }} ({{ $flight['count'] }})</label>
                              </div>
                              <div class="rupes">
                                  <p>&#x20B9; {{ $flight['price'] }}</p>
                              </div>
                          </div>
                          @endforeach

                          <!-- <div class="input-box">
                                <label class="label-text">Preferred class</label>
                                <div class="form-group">
                                    <div class="select-contain w-auto">
                                        <select class="select-contain-select">
                                            @if(isset($Flightclass))
                                                @foreach($Flightclass as $fc)
                                                   <option value="{{ $fc->flight_clss_value}}">{{ ucfirst($fc->flight_clss)}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box pt-2">
                                <a href="#" class="theme-btn">Search Now</a>
                            </div> -->
                      </form>
                  </div>
              </div><!-- end sidebar-widget-item -->
          </div><!-- end sidebar-widget -->
          @endif
          <style>
              .fa-star {
                  font-size: 25px;
                  align-content: center;
                  color: yellow;
              }
          </style>
          <div class="sidebar-widget">
              <h3 class="title stroke-shape">Ratings</h3>
              <div class="sidebar-widget-item">
                <div class="contact-form-action">

                      <form action="#">
                        <!-- <div class="rate">
                            <input type="radio" id="rating-1" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="rating-2" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="rating-3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="rating-4" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="rating-5" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div> -->

                          <i class="fa fa-star" aria-hidden="true" id="rating-1"></i>
                          <i class="fa fa-star" aria-hidden="true" id="rating-2"></i>
                          <i class="fa fa-star" aria-hidden="true" id="rating-3"></i>
                          <i class="fa fa-star" aria-hidden="true" id="rating-4"></i>
                          <i class="fa fa-star" aria-hidden="true" id="rating-5"></i>
     
                          <br><a href="javascript::void()" onclick="ratingFilterClear()">Clear</a>
                          <!-- <div class="input-box">
                                <label class="label-text">Preferred class</label>
                                <div class="form-group">
                                    <div class="select-contain w-auto">
                                        <select class="select-contain-select">
                                            @if(isset($Flightclass))
                                                @foreach($Flightclass as $fc)
                                                   <option value="{{ $fc->flight_clss_value}}">{{ ucfirst($fc->flight_clss)}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box pt-2">
                                <a href="#" class="theme-btn">Search Now</a>
                            </div> -->
                      </form>
                  </div>
              </div><!-- end sidebar-widget-item -->
          </div><!-- end sidebar-widget -->

          <!-- departure from mumbai -->
          <!-- <div class="sidebar-widget arrival">
            <h3 class="title stroke-shape">Departure From Mumbai</h3>
            <ul>
                    <li> <a href=""><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                    </li>
                    <li> <a href=""><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                    </li>
                    <li> <a href=""><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                    </li>                       
                </ul>
        </div> -->
          <!-- end sidebar-widget -->
          <!-- Arrival at bengaluru -->
          <!-- <div class="sidebar-widget arrival">
            <h3 class="title stroke-shape">Arrival at Bengaluru</h3>
                <ul>
                    <li> <a href=""><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                    </li>
                    <li> <a href=""><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                    </li>
                    <li> <a href=""><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                    </li>                       
                </ul>
        </div> -->
          <!-- end sidebar-widget -->
          <!-- <div class="sidebar-widget">
            <h3 class="title stroke-shape">Flight Times</h3>
            <div class="sidebar-widget-item">
                <div class="select-contain w-auto">
                    <select class="select-contain-select">
                        <option value="1200AM">12:00AM</option>
                        <option value="1230AM">12:30AM</option>
                        <option value="0100AM">1:00AM</option>
                        <option value="0130AM">1:30AM</option>
                        <option value="0200AM">2:00AM</option>
                        <option value="0230AM">2:30AM</option>
                        <option value="0300AM">3:00AM</option>
                        <option value="0330AM">3:30AM</option>
                        <option value="0400AM">4:00AM</option>
                        <option value="0430AM">4:30AM</option>
                        <option value="0500AM">5:00AM</option>
                        <option value="0530AM">5:30AM</option>
                        <option value="0600AM">6:00AM</option>
                        <option value="0630AM">6:30AM</option>
                        <option value="0700AM">7:00AM</option>
                        <option value="0730AM">7:30AM</option>
                        <option value="0800AM">8:00AM</option>
                        <option value="0830AM">8:30AM</option>
                        <option value="0900AM" selected>9:00AM</option>
                        <option value="0930AM">9:30AM</option>
                        <option value="1000AM">10:00AM</option>
                        <option value="1030AM">10:30AM</option>
                        <option value="1100AM">11:00AM</option>
                        <option value="1130AM">11:30AM</option>
                        <option value="1200PM">12:00PM</option>
                        <option value="1230PM">12:30PM</option>
                        <option value="0100PM">1:00PM</option>
                        <option value="0130PM">1:30PM</option>
                        <option value="0200PM">2:00PM</option>
                        <option value="0230PM">2:30PM</option>
                        <option value="0300PM">3:00PM</option>
                        <option value="0330PM">3:30PM</option>
                        <option value="0400PM">4:00PM</option>
                        <option value="0430PM">4:30PM</option>
                        <option value="0500PM">5:00PM</option>
                        <option value="0530PM">5:30PM</option>
                        <option value="0600PM">6:00PM</option>
                        <option value="0630PM">6:30PM</option>
                        <option value="0700PM">7:00PM</option>
                        <option value="0730PM">7:30PM</option>
                        <option value="0800PM">8:00PM</option>
                        <option value="0830PM">8:30PM</option>
                        <option value="0900PM">9:00PM</option>
                        <option value="0930PM">9:30PM</option>
                        <option value="1000PM">10:00PM</option>
                        <option value="1030PM">10:30PM</option>
                        <option value="1100PM">11:00PM</option>
                        <option value="1130PM">11:30PM</option>
                    </select>
                </div>
            </div>
        </div> -->
          <!-- end sidebar-widget -->
          <!-- <div class="sidebar-widget">
            <h3 class="title stroke-shape">Filter by Rating</h3>
            <div class="sidebar-widget-item">
                <div class="custom-checkbox">
                    <input type="checkbox" id="r6" class="check-size">
                    <label for="r6">
                        <span class="ratings d-flex align-items-center">
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <span class="color-text-3 font-size-13 ml-1">(55.590)</span>
                        </span>
                    </label>
                </div>
                <div class="custom-checkbox">
                    <input type="checkbox" id="r7" class="check-size">
                    <label for="r7">
                        <span class="ratings d-flex align-items-center">
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star-o"></i>
                            <span class="color-text-3 font-size-13 ml-1">(40.590)</span>
                        </span>
                    </label>
                </div>
                <div class="custom-checkbox">
                    <input type="checkbox" id="r8" class="check-size">
                    <label for="r8">
                        <span class="ratings d-flex align-items-center">
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star-o"></i>
                            <i class="la la-star-o"></i>
                            <span class="color-text-3 font-size-13 ml-1">(23.590)</span>
                        </span>
                    </label>
                </div>
                <div class="custom-checkbox">
                    <input type="checkbox" id="r9"class="check-size">
                    <label for="r9">
                        <span class="ratings d-flex align-items-center">
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star-o"></i>
                            <i class="la la-star-o"></i>
                            <i class="la la-star-o"></i>
                            <span class="color-text-3 font-size-13 ml-1">(12.590)</span>
                        </span>
                    </label>
                </div>
                <div class="custom-checkbox mb-0">
                    <input type="checkbox" id="r10" class="check-size">
                    <label for="r10">
                        <span class="ratings d-flex align-items-center">
                            <i class="la la-star"></i>
                            <i class="la la-star-o"></i>
                            <i class="la la-star-o"></i>
                            <i class="la la-star-o"></i>
                            <i class="la la-star-o"></i>
                            <span class="color-text-3 font-size-13 ml-1">(590)</span>
                        </span>
                    </label>
                </div>
            </div>
        </div> -->
          <!-- end sidebar-widget -->

          <div class="sidebar-widget inflight_exp">
              <h3 class="title stroke-shape">Inflight Experience</h3>
              <div class="sidebar-widget-item">
                  <div class="custom-checkbox">
                      <input type="checkbox" id="chb23" class="check-size">
                      <label for="chb23">Inflight Dining</label>
                  </div>
                  <div class="custom-checkbox">
                      <input type="checkbox" id="chb24" class="check-size">
                      <label for="chb24">Music</label>
                  </div>
                  <div class="custom-checkbox">
                      <input type="checkbox" id="chb25" class="check-size">
                      <label for="chb25">Sky Shopping</label>
                  </div>
                  <div class="custom-checkbox">
                      <input type="checkbox" id="chb26" class="check-size">
                      <label for="chb26">Wi-fi</label>
                  </div>
                  <div class="custom-checkbox">
                      <input type="checkbox" id="chb27" class="check-size">
                      <label for="chb27">Seats & Cabin</label>
                  </div>
              </div>
          </div><!-- end sidebar-widget -->
      </div><!-- end sidebar -->
  </div><!-- end col-lg-4 -->