@extends('layouts.admin')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
        <ol class="breadcrumb breadcrumb-col-red">
          <li><a href="{{url('/admin')}}"><i class="material-icons">home</i> Home</a></li>
          <li><a href="{{url('/admin/flight_class')}}"><i class="material-icons">airplanemode_active</i> Flight Class</a></li>
          <li><a href="{{url('admin/flight_class/create')}}"><i class="material-icons">airplanemode_active</i> Create</a></li>
          
      </ol> 
    </div>
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
            <h2>Create Flight Class</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/flight_class/save')}}" enctype="multipart/form-data" autocomplete="off">
               @csrf
               <label for="flight_clss">Flight Class</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="flight_clss" name="flight_clss" class="form-control" placeholder="Enter Flight class Name" required="" autocomplete="off">
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