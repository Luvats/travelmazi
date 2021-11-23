@extends('layouts.admin')
@section('content')
<style type="text/css">
    .delete_btn {
        top: 5 !important;
        /* margin-left: 25px !important;*/
    }

    .modal-body.center_txt {
        text-align: center !important;
        font-size: large !important;
    }

    .modal .modal-header {
        box-shadow: inherit !important;
        padding: 25px 25px 5px 25px !important;
        background-color: #F44336 !important;
    }

    h4#defaultModalLabel {
        color: white !important;
    }

    .delete_model_btn {
        text-decoration: none !important;
        color: #fff !important;
        background-color: #f44336 !important;
    }

    .delete_model_btn:hover {
        text-decoration: none !important;
        color: #fff !important;
        background-color: #f44336 !important;
    }

    .color_div {

        display: block !important;
        height: 30px !important;
        border-radius: 50px !important;
    }
</style>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb breadcrumb-col-red">
                <li><a href="{{url('/admin')}}"><i class="material-icons">home</i> Home</a></li>
                <li><a href="{{url('/admin/flight_class')}}"><i class="material-icons">airplanemode_active</i> Flight Class</a></li>
            </ol>
        </div>
        <!-- Basic Examples -->
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
                    @if(session()->get('danger'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        {{ session()->get('danger') }}
                    </div>
                    @endif
                    <div class="header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="float-left">
                                    Booked Flights
                                </h2>
                            </div>
                        </div>
                        <!--  </div> -->
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="tableId">
                            <thead>
                                <tr>
                                    <th>Ser.</th>
                                    <th>Booking No.</th>
                                    <th>Source</th>
                                    <th>Destination</th>
                                    <th>Flight Schedule</th>
                                    <th>Contact Number</th>
                                    <th>Status</th>
                                    <th>Return Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1;@endphp
                                @foreach($flight_bookings as $row)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$row['booking_id']}}</td>
                                    <td>{{$row['source']}}</td>
                                    <td>{{$row['destination']}}</td>
                                    <td><?php $dt = new DateTime($row['flight_time']);
                                        echo $dt->format('H:i-s d-M-Y'); ?></td>
                                    <td>{{$row['contact_country_code']}}{{$row['contact_mobile_number']}}</td>
                                    <!-- <td>{{-- ucwords(str_replace('_',' ',$row['status'])) --}}</td> -->
                                    <td>
                                    <style>
                                    .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
  width: 120px;
}</style>
                                        <form method="post" action="#">
                                        @csrf
                                            <select id="status" onchange="updateStatus({{$row['id']}},this.selectedIndex)" name="status">
                                                <option value="pending" <?php if($row['status']=='pending') echo "Selected"; ?>>Pending</option>
                                                <option value="confirmed" <?php if($row['status']=='confirmed') echo "Selected"; ?>>Confirmed</option>
                                                <option value="cancel" <?php if($row['status']=='cancel') echo "Selected"; ?>>Cancel</option>
                                                <option value="completed" <?php if($row['status']=='completed') echo "Selected"; ?>>Completed</option>
                                                <option value="delayed" <?php if($row['status']=='delayed') echo "Selected"; ?>>Delayed</option>
                                                <option value="postponed" <?php if($row['status']=='postponed') echo "Selected"; ?>>Postponed</option>
                                                <option value="refund_requested" <?php if($row['status']=='refund_requested') echo "Selected"; ?>>Refund Requested</option>
                                                <option value="refunded" <?php if($row['status']=='refunded') echo "Selected"; ?>>Refunded</option>
                                            </select>
                                        </form>
                                    </td>
                                    
                                    <td><a href="{{route('admin/flight-booking-details',$row['id'])}}" class="btn btn-primary">More</a></td>
                                </tr>
                                @php $i++;@endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function updateStatus(id,selectedId) {
    var _token ="{{csrf_token()}}";
    var status = document.getElementById('status').options[selectedId].value;  
    var qs={id:id,status:status,_token:_token};
    // alert(JSON.stringify(qs));
           
        $.ajax({
            url:"{{ route('ajax.flight_booking.update-status') }}",
            method:"POST",
            data:qs,
            success:function(result)
            {
                alert("Flight Booking status changed to "+status);
            },error:function(request, status, error){
                console.log('Error is'+request.responseText);
            }
        });
    }

</script>

@endsection