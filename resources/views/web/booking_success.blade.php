@extends('layouts.web')
@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="about_banner">
    <div class="container">
        <h2>Flights Bookings</h2>
    </div>
</section><!-- end breadcrumb-area -->

<div class="row">
    <div class="col-md-12">
        <h3 align="center" class="mt-5"><br><br>All FlightBookings</h3><br>
        @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif<br>

        <table class="table table-striped table-responsive booking-ticket">
            <tr>
                <th>Booking No.</th>
                <th>Source</th>
                <th>Destination</th>
                <th>Flight Schedule</th>
                <!-- <th>Contact Country Code</th> -->
                <th>Contact Number</th>
                <!-- <th>Ratings</th> -->
                <!-- <th>Payment Id</th> -->
                <!-- <th>Payment Method</th> -->
                <!-- <th>Paid Amount</th> -->
                <!-- <th>Booking Details</th> -->
                <!-- <th>Contact Email</th>
                <th>Gst Number</th> -->
                <th>Status</th>
                <th>Return Date</th>

            </tr>
            @foreach($flightbooking as $row)
            <tr>
                <td>{{$row['booking_id']}}</td>
                <td>{{$row['source']}}</td>
                <td>{{$row['destination']}}</td>
                <td><?php $dt=new DateTime($row['flight_time']); echo $dt->format('H:i-s d-M-Y'); ?></td>
                <td>{{$row['contact_country_code']}}{{$row['contact_mobile_number']}}</td>
                <!-- <td><?php if(empty($row['rate'])) { ?><a href="{{route('flight_ratings_show',$row->booking_id)}}" class="btn btn-warning">Give Ratings</a><?php } else { echo $row['rate']; } ?></td> -->
                <!-- <td>{{$row['payment_id']}}</td> -->
                <!-- <td>{{$row['payment_method']}}</td> -->
                <!-- <td>{{$row['paid_amount']}}</td> -->
                <!-- <td>{{$row['booking_details']}}</td> -->
                <!-- <td>{{$row['contact_email']}}</td>
                <td>{{$row['gst_number']}}</td> -->
                <!-- <td>{{$row['return_date']}}</td> -->
                <td>{{ucwords(str_replace('_',' ',$row['status']))}}</td>
                <td><a href="{{route('booking-show',$row['booking_id'])}}" class="btn booking-ticket-more">More</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection