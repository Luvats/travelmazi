<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\FlightBooking;
use App\FlightRating;
use App\FlightBookingPassengerDetail;
use PDF;
use View;

class FlightBookingController extends Controller
{



    public function payment_process(Request $request)
    {
        $baggages="";
        if(!empty($request->session()->get('booking_details')[0]['baggages'])){
            $baggages=json_encode($request->session()->get('booking_details')[0]['baggages']); 
        }
        $meals="";
        if(!empty($request->session()->get('booking_details')[0]['meals'])){
        $meals=json_encode($request->session()->get('booking_details')[0]['meals']); 
        }
        // echo '<pre>'; print_r($baggages); die;
        
        
        //if return order is placed
        // if($request->session()->get('api_booking_details')[0]['searchQuery']['searchType']=='RETURN'){
        //     $baggages[0] = "";
        // if (!empty($request->session()->get('booking_details')[0]['baggages'][0])) {
        //     if (count($request->session()->get('booking_details')[0]['baggages'][0]) == 1) {
        //         $baggages[0] = $request->session()->get('booking_details')[0]['baggages'][0][0];
        //     } else {
        //         $baggages[0] = implode(",", $request->session()->get('booking_details')[0]['baggages'][0]);
        //     }
        // }
        // if (!empty($request->session()->get('booking_details')[0]['baggages'][1])) {
        //     // echo '<pre>'; print_r($request->session()->get('booking_details')[0]['baggages'][1]); die;
        //     if (count($request->session()->get('booking_details')[0]['baggages'][1]) == 1) {
        //         $baggages[1] = $request->session()->get('booking_details')[0]['baggages'][1][0];
        //     } else {
        //         $baggages[1] = implode(",", $request->session()->get('booking_details')[0]['baggages'][1]);
        //     }
        // }

        // $meals[0] = "";
        // if (!empty($request->session()->get('booking_details')[0]['meals'][0])) {
        //     if (count($request->session()->get('booking_details')[0]['meals'][0]) == 1) {
        //         $meals[0] = $request->session()->get('booking_details')[0]['meals'][0][0];
        //     } else {
        //         $meals[0] = implode(",", $request->session()->get('booking_details')[0]['meals'][0]);
        //     }
        // }
        // if (!empty($request->session()->get('booking_details')[0]['meals'][1])) {
        //     // echo '<pre>'; print_r($request->session()->get('booking_details')[0]['meals'][1]); die;
        //     if (count($request->session()->get('booking_details')[0]['meals'][1]) == 1) {
        //         $meals[1] = $request->session()->get('booking_details')[0]['meals'][1][0];
        //     } else {
        //         $meals[1] = implode(",", $request->session()->get('booking_details')[0]['meals'][1]);
        //     }
        // }
        // echo '<pre>'; print_r($meals); die;


        // }else{
        // $baggages = "";
        // if (!empty($request->session()->get('booking_details')[0]['baggages'])) {
        //     if (count($request->session()->get('booking_details')[0]['baggages']) == 1) {
        //         $baggages = $request->session()->get('booking_details')[0]['baggages'][0];
        //     } else {
        //         $baggages = implode(",", $request->session()->get('booking_details')[0]['baggages']);
        //     }
        // }
        
        // $meals = "";
        // if (!empty($request->session()->get('booking_details')[0]['meals'])) {
        //     if (count($request->session()->get('booking_details')[0]['meals']) == 1) {
        //         $meals = $request->session()->get('booking_details')[0]['meals'][0];
        //     } else {
        //         $meals = implode(",", $request->session()->get('booking_details')[0]['meals']);
        //     }
        // }
        $total_amount=$request->session()->get('api_booking_details')[0]['totalPriceInfo']['totalFareDetail']['fC']['TF']+$request->session()->get('baggages_amount')[0]+$request->session()->get('meals_amount')[0];
        // echo '<pre>'; var_dump($total_amount); die;
        // if(!empty($request->session()->get('booking_details')[1]['baggages_amount'])){
        //     $total_amount+=$request->session()->get('booking_details')[1]['baggages_amount'];
        // }
        // if(!empty($request->session()->get('booking_details')[2]['meals_amount'])){
        //     $total_amount+=$request->session()->get('booking_details')[2]['meals_amount'];
        // }

        // echo '<pre>'; print_r($total_amount); die;

        $booking_details = json_encode(['api_booking_details'=>$request->session()->get('api_booking_details'),'booking_details'=>$request->session()->get('booking_details')]);
        //echo '<pre>'; var_dump($request->get('razorpay_payment_id')); die;
        $flight_bookings = new FlightBooking([
            'user_id' => Auth::user()->id,
            'booking_id' => $request->session()->get('booking_details')[0]['bookingId'],
            'payment_id' => $request->get('razorpay_payment_id'),
            'payment_method' => 'razorpay',
            'paid_amount' => $total_amount,
            'booking_details' => $booking_details,
            'source' => $request->session()->get('api_booking_details')[0]['tripInfos'][0]['sI']['0']['da']['code'],
            'flight_time' => date('Y-m-d H:i:s'),
            'destination' => $request->session()->get('api_booking_details')[0]['tripInfos'][0]['sI']['0']['aa']['code'],
            'baggages' => $baggages,
            'meals' => $meals,
            'contact_country_code' => $request->session()->get('booking_details')[0]['contact_country_code'],
            'contact_mobile_number' => $request->session()->get('booking_details')[0]['contact_mobile_number'],
            'contact_email' => $request->session()->get('booking_details')[0]['contact_email'],
            'gst_number' =>  $request->session()->get('booking_details')[0]['gst_number'],
            'return_date' => $request->get('return_date'),
            'status' => 'pending',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        $flight_bookings->save();

        foreach ($request->session()->get('booking_details')[0]['adult'] as $row) {
            $flight_booking_passenger_details = new FlightBookingPassengerDetail([
                'flight_booking_id' => $flight_bookings->id,
                'first_middle_name' => $row["'name'"],
                'last_name' => $row["'last_name'"],
                'gender' => $row["'gender'"],
                'wheelchair_required' => $row["'wheelchair'"],
                'type' => 'adult',
            ]);
            $flight_booking_passenger_details->save();
        }
        if (!empty($request->session()->get('booking_details')[0]['child'])) {

            foreach ($request->session()->get('booking_details')[0]['child'] as $row) {
                $flight_booking_passenger_details = new FlightBookingPassengerDetail([
                    'flight_booking_id' => $flight_bookings->id,
                    'first_middle_name' => $row["'name'"],
                    'last_name' => $row["'last_name'"],
                    'gender' => $row["'gender'"],
                    'wheelchair_required' => $row["'wheelchair'"],
                    'type' => 'child',
                ]);
                $flight_booking_passenger_details->save();
            }
        }
        if (!empty($request->session()->get('booking_details')[0]['infant'])) {
            foreach ($request->session()->get('booking_details')[0]['infant'] as $row) {
                $flight_booking_passenger_details = new FlightBookingPassengerDetail([
                    'flight_booking_id' => $flight_bookings->id,
                    'first_middle_name' => $row["'name'"],
                    'last_name' => $row["'last_name'"],
                    'gender' => $row["'gender'"],
                    'wheelchair_required' => $row["'wheelchair'"],
                    'type' => 'infant',
                ]);
                $flight_booking_passenger_details->save();
            }
        }
        $request->session()->forget('redirect_back_url');
        $request->session()->forget('api_booking_details');
        $request->session()->forget('booking_details');
        $request->session()->forget('max_seats');
        $request->session()->forget('baggages_amount');
        $request->session()->forget('meals_amount');

        return redirect()->route('bookings')->with(['success' => 'Ticket is booked successfully.', 'bookingId' => $flight_bookings->booking_id]);
    // }
    // die("reached o end");
    }


    public function booking_show($booking_id)
    {
        // echo '<pre>'; var_dump($booking_id); die;
        $flight_booking = FlightBooking::where('booking_id', $booking_id)->first();
        $flightBookingTraveller=FlightBookingPassengerDetail::where('flight_booking_id',$flight_booking->id)->get();
        $flight_ratings_records=FlightRating::where('booking_id',$booking_id)->get();
        $flight_ratings=array();
        foreach($flight_ratings_records as $row){
            // echo '<pre>'; var_dump($row->flight_name); die;
            $flight_ratings[$booking_id][$row->flight_name]=$row['rate'];
        }
        // echo '<pre>'; print_r($flight_booking); die;
        return view('web.flight_booking_show', compact('flight_booking','flightBookingTraveller','flight_ratings'));
    }


    public function download_ticket($booking_id)
    {
        
        $flight_booking = FlightBooking::where('booking_id', $booking_id)->first();
        $flightBookingTraveller=FlightBookingPassengerDetail::where('flight_booking_id',$flight_booking->id)->get();

        // echo '<pre>'; print_r($flight_booking); die;
        $pdf=PDF::loadHTML(View::make('web.flight_ticket',compact('flight_booking','flightBookingTraveller')));
        return $pdf->download($booking_id.'.pdf');        
    }
}
