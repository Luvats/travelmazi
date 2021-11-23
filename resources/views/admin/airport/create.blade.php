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
            <h2>Create Airport</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/airport/save')}}" enctype="multipart/form-data">
               @csrf
               <label for="airportcode">Airport Code</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="airportcode" name="airportcode" class="form-control" placeholder="Enter Airport Code" required="">
                </div>
              </div>

              <label for="airport">Airport</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="airport" name="airport" class="form-control" placeholder="Enter Airport Name" required="">
                </div>
              </div>
              <label for="citycode">City Code</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="citycode" name="citycode" class="form-control" placeholder="Enter City Code" required="">
                </div>
              </div>

              <label for="city">City</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="text" id="city" name="city" class="form-control" placeholder="Enter City Name" required="">
                </div>
              </div>
              <label for="countrycode">Country Code</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="text" id="countrycode" name="countrycode" class="form-control" placeholder="Enter Country Code" required="">
                </div>
              </div>
              <label for="country">Country</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="text" id="country" name="country" class="form-control" placeholder="Enter Country Name" required="">
                </div>
              </div>
              
             
              <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop