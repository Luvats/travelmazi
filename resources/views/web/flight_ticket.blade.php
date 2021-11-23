
<br><br><br>
<div class="col-lg-10 offset-lg-1">
    <h4 style="text-align:center"><i class="icon-paragraph-justify2"></i>Show flight_booking</h4>
    <!-- <div><b>Id: </b>{{$flight_booking->id}}</div> -->
    <!-- <div><b>User Id: </b>{{$flight_booking->user_id}}</div> -->

    <br><br>
    <div class="ticket-print">
        <div class="flight-passenger">
            <div><b>Booking No: </b>{{$flight_booking->booking_id}}</div>
            <div><b>Payment Number: </b>{{$flight_booking->payment_id}}</div>
            <div><b>Payment Method: </b>{{$flight_booking->payment_method}}</div>
            <div><b>Paid Amount: </b>{{$flight_booking->paid_amount}}</div>
            <br>
            <div class="mt-3"><b>Flight Details: </b></div>
            <table>
                <tr>
                    <td>From</td>
                    <td>To</td>
                    <td>More</td>
                </tr>


                <?php $c = 1;
                foreach (json_decode($flight_booking->booking_details)->api_booking_details[0]->tripInfos as $flight_details) { ?>
                    <?php
        // echo '<pre>'; var_dump($flight_details->sI[0]->da); die; 
                    ?>
                    <tr>
                        <td>{{$c}}. {{$flight_details->sI[0]->da->name}} ({{$flight_details->sI[0]->da->city}}) </td>
                        <td>{{$flight_details->sI[0]->aa->name}} ({{$flight_details->sI[0]->aa->city}})</td>
                        <td>{{$flight_details->sI[0]->fD->aI->name}}</td>
                    </tr>

                    <?php $c++;
                } ?>
            </table>
            <br>
            <div class="mt-3"><b>Passenger Details: </b></div>
            <table>
                <?php
                foreach ($flightBookingTraveller as $row) {
                    ?>
                    <tr>
                        <td><b>Name: </b>{{$row->first_middle_name}} {{$row->last_name}} ({{$row->type}})</td></tr>
                        <tr><td><b>Gender: </b>{{$row->gender}}</td></tr>
                        <tr><td><b>Wheel Chair Required: </b>{{str_replace('_',' ',$row->wheelchair_required)}}</td>
                        </tr>


                        <?php
                    }
                    ?>
                </table>
            </div>
            <br>
            <!-- <div><b>Booking Details: </b>{{$flight_booking->booking_details}}</div> -->
            <!-- <div><b>Source: </b>{{$flight_booking->source}}</div> -->
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
            <br><br>
            <br><br>
        </div>
</div>
