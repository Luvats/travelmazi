@extends('layouts.web')
@section('content')
<br><br><br>
<div class="col-lg-10 offset-lg-1">
    <h4 style="text-align:center"><i class="icon-paragraph-justify2"></i>Show flight_booking</h4>
    <!-- <div><b>Id: </b>{{$flight_booking->id}}</div> -->
    <!-- <div><b>User Id: </b>{{$flight_booking->user_id}}</div> -->
    <br><br>
    <div class="ticket-print">
        
            <div class="row ">
                <div class="col-lg-8">
                    <div><b>Booking No: </b>{{$flight_booking->booking_id}}</div>
                    <div><b>Payment Number: </b>{{$flight_booking->payment_id}}</div>
                    <div><b>Payment Method: </b>{{$flight_booking->payment_method}}</div>
                    <div><b>Paid Amount: </b>{{$flight_booking->paid_amount}}</div>
                    <br>
                </div>
                <div class="col-lg-4">
                    <img src="{{asset('public/web/img/mazi.png')}} " alt="logo" class="img-fluid">
                </div>
            </div>
            <div class="passenger-flight">
    
    <div class="mt-3"><b>Flight Details: </b></div>

    <div class="row">
        <div class="col-lg-4 font-weight-bold">From</div>
        <div class="col-lg-4 font-weight-bold">To</div>
        <div class="col-lg-4 font-weight-bold">More</div>
    </div>
    <?php $c = 1;
    foreach (json_decode($flight_booking->booking_details)->api_booking_details[0]->tripInfos as $flight_details) { ?>
        <?php
        // echo '<pre>'; var_dump($flight_details->sI[0]->da); die; 
        ?>

        <div class="row">
            <div class="col-lg-4">{{$c}}. {{$flight_details->sI[0]->da->name}} ({{$flight_details->sI[0]->da->city}}) </div>
            <div class="col-lg-4">{{$flight_details->sI[0]->aa->name}} ({{$flight_details->sI[0]->aa->city}})</div>
            <div class="col-lg-4">{{$flight_details->sI[0]->fD->aI->name}}-{{$flight_details->sI[0]->fD->aI->code}}-{{$flight_details->sI[0]->fD->fN}}
            <?php 
            
            // echo '<pre>'; print_r($flight_ratings);
            
            // echo "<br><br><br>".$flight_booking->booking_id."<br><br><br>".$flight_details->sI[0]->fD->aI->name.'-'.$flight_details->sI[0]->fD->aI->code.'-'.$flight_details->sI[0]->fD->fN;

            // die;
            
            
            if(!empty($flight_ratings[$flight_booking->booking_id][$flight_details->sI[0]->fD->aI->name.'-'.$flight_details->sI[0]->fD->aI->code.'-'.$flight_details->sI[0]->fD->fN])){
                echo " | Rated: ".$flight_ratings[$flight_booking->booking_id][$flight_details->sI[0]->fD->aI->name.'-'.$flight_details->sI[0]->fD->aI->code.'-'.$flight_details->sI[0]->fD->fN];
             } else { ?>
            <?php }?>
            </div>
             <div class="col-lg-12">
                    <a href="{{route('flight_ratings_show',['booking_id'=>$flight_booking->booking_id,'flight_name'=>$flight_details->sI[0]->fD->aI->name.'-'.$flight_details->sI[0]->fD->aI->code.'-'.$flight_details->sI[0]->fD->fN])}}" class="btn rating-button">Give Ratings</a>
                </div>
        </div>
    <?php $c++;
    } ?>
    <br>
    <div class="mt-3"><b>Passinger Details: </b></div>
    <?php
    foreach ($flightBookingTraveller as $row) {
    ?>
        <div class="row">
            <div class="col-lg-4"><b>Name: </b>{{$row->first_middle_name}} {{$row->last_name}} ({{$row->type}})</div>
            <div class="col-lg-4"><b>Gender: </b>{{$row->gender}}</div>
            <div class="col-lg-4"><b>Wheel Chair Required: </b>{{str_replace('_',' ',$row->wheelchair_required)}}</div>
        </div>
    </div>


    <?php
    }
    ?>
    <br>
    <!-- <div><b>Booking Details: </b>{{$flight_booking->booking_details}}</div> -->
    <!-- <div><b>Source: </b>{{$flight_booking->source}}</div> -->
    <div class="flight-time-detail">
        <div><b>Flight Time: </b>{{$flight_booking->flight_time}}</div>
        <!-- <div><b>Destination: </b>{{$flight_booking->destination}}</div> -->
        <div><b>Baggages: </b>{{$flight_booking->baggages}}</div>
        <div><b>Meals: </b>{{$flight_booking->meals}}</div>
        <!-- <div><b>Contact Country Code: </b></div> -->
        <div><b>Contact Number: </b>{{$flight_booking->contact_country_code}} {{$flight_booking->contact_mobile_number}}</div>
        <div><b>Contact Email: </b>{{$flight_booking->contact_email}}</div>
        <?php if (!empty($flight_booking->gst_number)) { ?><div><b>Gst Number: </b>{{$flight_booking->gst_number}}</div><?php } ?>
        <?php if (!empty($flight_booking->return_date)) { ?><div><b>Return Date: </b>{{$flight_booking->return_date}}</div><?php } ?>
        <div><b>Status: </b>{{$flight_booking->status}}</div>
    </div>
    <br><br>
    <div class="text-center"><a href="{{route('download-ticket',$flight_booking->booking_id)}}" class="btn btn-primary">Download Ticket</a></div>
    <br><br>
</div>
</div>
@endsection