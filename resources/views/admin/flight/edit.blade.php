@extends('layouts.admin')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header"></div>
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          @if(session()->get('success'))
            <div class="alert bg-green alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                {{ session()->get('success') }}
            </div>
            
        @endif
          <div class="header">
            <h2>Update City</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/flight/update')}}" enctype="multipart/form-data">
               @csrf
               <input type="hidden" name="city_id" value="{{$city->id}}">
               <label for="city_short_name">Code</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="city_short_name" value="{{ $city->city_short_name}}" name="city_short_name" class="form-control" placeholder="Enter City Short Name" required="">
                </div>
              </div>

              <label for="city_name">City Name</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="city_name" value="{{ $city->city_name}}" name="city_name" class="form-control" placeholder="Enter City Name" required="">
                </div>
              </div>

              <label for="country_name">Country Name</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="country_name" value="{{ $city->country_name}}" name="country_name" class="form-control" placeholder="Enter Country Name" required="">
                </div>
              </div>

              <label for="airport">Airport</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="airport" value="{{ $city->airport}}" name="airport" class="form-control" placeholder="Enter City Short Name" required="">
                </div>
              </div>

              <label for="airport">Flight Type</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="flight_type" value="{{ $city->flight_type}}" name="flight_type" class="form-control" placeholder="Domestic or International" required="">
                </div>
              </div>
              
             
              <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop