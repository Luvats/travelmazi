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
            <h2>Update Airport</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/airport/update')}}" enctype="multipart/form-data">
               @csrf
               <input type="hidden" name="airport_id" value="{{ $airports->id}}">
              <label for="airportcode">Airport Code</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="airportcode" name="airportcode" class="form-control" placeholder="Enter Airlines Name" required="" value="{{$airports->airportcode}}">
                </div>
              </div>
              <label for="airport">Airport</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="airport" name="airport" class="form-control" placeholder="Enter Airline Code" required="" value="{{$airports->airport}}">
                </div>
              </div>

              <label for="citycode">City Code</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="citycode" name="citycode" class="form-control" placeholder="Enter City Code" required="" value="{{$airports->citycode}}">
                </div>
              </div>

              <label for="city">City</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="text" id="city" name="city" class="form-control" placeholder="Enter City Name" required="" value="{{$airports->city}}">
                </div>
              </div>
              <label for="countrycode">Country Code</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="text" id="countrycode" name="countrycode" class="form-control" placeholder="Enter Country Code" required="" value="{{$airports->countrycode}}">
                </div>
              </div>
              <label for="country">Country</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="text" id="country" name="country" class="form-control" placeholder="Enter Country Name" required="" value="{{$airports->country}}">
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