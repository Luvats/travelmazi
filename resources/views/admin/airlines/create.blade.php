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
            <h2>Create Airline</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/airline/save')}}" enctype="multipart/form-data">
               @csrf
              <label for="airlines_name">Name</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="airlines_name" name="airlines_name" class="form-control" placeholder="Enter Airlines Name" required="">
                </div>
              </div>
              <label for="airlines_code">Airline Code</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="airlines_code" name="airlines_code" class="form-control" placeholder="Enter Airline Code" required="">
                </div>
              </div>

              <label for="airlines_logo">Airline Logo</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="file" id="airlines_logo" name="airlines_logo" class="form-control">
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