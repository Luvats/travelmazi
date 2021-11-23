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
                        <!-- <div class="container"> -->
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="float-left">
                                    Flight Details
                                </h2>
                            </div>


                        </div>

                        <!--  </div> -->


                    </div>
                    <div class="body">

                        <table>
                            <tr>
                                <td><a href="{{route('flight-booking')}}" class="btn btn-primary">Back</a> <a href="{{route('flight-booking')}}" class="btn btn-primary">Update Status</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- <h4 style="text-align:center"><i class="icon-paragraph-justify2"></i>Show FlightBooking</h4> -->
                                    <!-- <div><b>Id: </b>{{$flightbooking->id}}</div> -->
                                    <div><b>User Id: </b>{{$flightbooking->user_id}}</div>
                                    <div><b>Booking Id: </b>{{$flightbooking->booking_id}}</div>
                                    <div><b>Payment Id: </b>{{$flightbooking->payment_id}}</div>
                                    <div><b>Payment Method: </b>{{$flightbooking->payment_method}}</div>
                                    <div><b>Paid Amount: </b>{{$flightbooking->paid_amount}}</div>
                                    <!-- <div><b>Booking Details: </b>{{$flightbooking->booking_details}}</div> -->
                                    <div><b>Source: </b>{{$flightbooking->source}}</div>
                                    <div><b>Flight Time: </b>{{$flightbooking->flight_time}}</div>
                                    <div><b>Destination: </b>{{$flightbooking->destination}}</div>
                                    <div><b>Contact Country Code: </b>{{$flightbooking->contact_country_code}}</div>
                                    <div><b>Contact Mobile Number: </b>{{$flightbooking->contact_mobile_number}}</div>
                                    <div><b>Contact Email: </b>{{$flightbooking->contact_email}}</div>
                                    <div><b>Gst Number: </b>{{$flightbooking->gst_number}}</div>
                                    <div><b>Return Date: </b>{{$flightbooking->return_date}}</div>
                                    <div><b>Status: </b>{{$flightbooking->status}}</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
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
                        <!-- <div class="container"> -->
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="float-left">
                                    Flight Passingers
                                </h2>
                            </div>
                        </div>
                        <!--  </div> -->
                    </div>
                    <?php
                    foreach ($flightBookingTraveller as $row) {
                    ?>
                        <div class="body">
                            <table>
                                <tr>
                                    <td>
                                        <!-- <h4 style="text-align:center"><i class="icon-paragraph-justify2"></i>Show FlightBooking</h4> -->
                                        <div><b>Passinger is: </b>{{$row->type}}</div>
                                        <div><b>Name: </b>{{$row->first_middle_name}} {{$row->last_name}}</div>
                                        <div><b>Gender: </b>{{$row->gender}}</div>
                                        <div><b>Wheel Chair Required: </b>{{str_replace('_',' ',$row->wheelchair_required)}}</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->





    </div>
</section>


@endsection