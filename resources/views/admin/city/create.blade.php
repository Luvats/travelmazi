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
            <h2>Create City</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/city/save')}}" enctype="multipart/form-data" autocomplete="off">
               @csrf
               <label for="city_short_name">Name</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Enter City Name" required="" autocomplete="off">
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