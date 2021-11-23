@extends('layouts.admin')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
        <ol class="breadcrumb breadcrumb-col-red">
          <li><a href="{{url('/admin')}}"><i class="material-icons">home</i> Home</a></li>
          <li><a href="{{url('/admin/visa_type')}}"><i class="material-icons">book</i> Visa Type</a></li>
          <li><a href="{{url('/admin/visa_type/edit/'.$VisaType->id)}}"><i class="material-icons">book</i> Update</a></li>
          
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
            <h2>Update Visa Type</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/visa_type/update')}}" enctype="multipart/form-data" autocomplete="off">
               @csrf
               <input type="hidden" name="visa_type_id" value="{{ $VisaType->id}}">
               <label for="visa_type">Visa Type</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="visa_type" name="visa_type" class="form-control" placeholder="Enter Visa Type Name" required="" autocomplete="off" value="{{ $VisaType->type}}">
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