@extends('layouts.admin')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
        <ol class="breadcrumb breadcrumb-col-red">
          <li><a href="{{url('/admin')}}"><i class="material-icons">home</i> Home</a></li>
          <li><a href="{{url('/admin/visa')}}"><i class="material-icons">book</i> Visa</a></li>
          <li><a href="{{url('admin/visa/create')}}"><i class="material-icons">book</i> Create</a></li>
          
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
            <h2>Create Visa </h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/visa/save')}}" enctype="multipart/form-data" autocomplete="off">
               @csrf

              <label for="destination">Destination</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="destination" name="destination" class="form-control" placeholder="Enter Destination Name" required="" autocomplete="off">
                </div>
              </div>

              <label for="departure_date">Departure</label>
              <div class="form-group ">
                <div class="form-line">
                  <input type="text" id="departure_date" name="departure_date" class="form-control" placeholder="Enter Visa Type Name" required="" autocomplete="off">
                </div>
                

              </div>

              <label for="return_date">Return</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="return_date" name="return_date" class="form-control" placeholder="Enter Visa Type Name" required="" autocomplete="off">
                </div>
              </div>

              <label for="traveller">Traveller</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="traveller" name="traveller" class="form-control" placeholder="Enter Traveller" required="" autocomplete="off" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');">
                </div>
              </div>

              <label for="embassy_fee">Embassy Fee</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="embassy_fee" name="embassy_fee" class="form-control" placeholder="Enter Embassy Fee" required="" autocomplete="off" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');">
                </div>
              </div>

              <label for="service_fee">Service Fee</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="service_fee" name="service_fee" class="form-control" placeholder="Enter Service Fee" required="" autocomplete="off" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');">
                </div>
              </div>

              <label for="gst_amount">GST Amount</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="gst_amount" name="gst_amount" class="form-control" placeholder="Enter GST Amount" required="" autocomplete="off" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');">
                </div>
              </div>


              <label for="visa_validity">Visa Validity</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="visa_validity" name="visa_validity" class="form-control" placeholder="Enter Visa Validity" required="" autocomplete="off" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');">
                </div>
              </div>

              <label for="visa_approval_day">Visa Approval Day</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="visa_approval_day" name="visa_approval_day" class="form-control" placeholder="Enter Visa Approval Day" required="" autocomplete="off" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');">
                </div>
              </div>

              <label for="passport_valid_day">Passport Valid</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="passport_valid_day" name="passport_valid_day" class="form-control" placeholder="Enter Passport Valid" required="" autocomplete="off" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');">
                </div>
              </div>

              <label for="working_days">Working Days</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="working_days" name="working_days" class="form-control" placeholder="Enter Working Days" required="" autocomplete="off" required="">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('input[name="departure_date"]').datepicker({ 
             minDate: 0,
            autoclose: true, 
            todayHighlight: true,
           
        }).datepicker('update', new Date());

         $('input[name="return_date"]').datepicker({ 
             minDate: 0,
            autoclose: true, 
            todayHighlight: true,
           
        }).datepicker('update', new Date());


    });

</script>
@stop