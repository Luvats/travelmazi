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
            <h2>Update Coupons</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/coupons/update')}}" enctype="multipart/form-data">
               @csrf
               <input type="hidden" name="cupon_id" value="{{$coupon->id}}">
              <label for="coupon_name">Coupon Name</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="coupon_name" name="coupon_name" class="form-control" placeholder="Enter Coupon Name"value="{{$coupon->coupon_name}}">
                </div>
              </div>
              <label for="percentage">Percentage</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="percentage" name="percentage" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');" value="{{ $coupon->percentage}}">
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