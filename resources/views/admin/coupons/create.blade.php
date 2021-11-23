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
            <h2>Create Coupons</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/coupons/save')}}" enctype="multipart/form-data">
               @csrf
              <label for="coupon_name">Coupon Name</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="coupon_name" name="coupon_name" class="form-control" placeholder="Enter Coupon Name">
                </div>
              </div>
              <label for="percentage">Percentage</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="percentage" name="percentage" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');">
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