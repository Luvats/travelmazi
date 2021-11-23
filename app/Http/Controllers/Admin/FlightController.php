<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\FlightBooking;
use App\Blog;
use App\About;
use App\Coupon;
use App\City;
use App\FlightBookingPassengerDetail;

class FlightController extends Controller
{
    public function index(Request $request)
    {
        $cities = City::orderby('id','desc')->get();
    	return view('admin.flight.index',compact('cities'));
    }

    public function create(Request $request)
    {
    	return view('admin.flight.create');
    }

    public function save(Request $request)
    {
    	$city_name          = $request->city_name;
        $city_short_name    = strtoupper($request->city_short_name);
        $country_name       = $request->country_name;
        $airport            = $request->airport;
        $flight_type            = $request->flight_type;

        $coupon = City::create([
                            'city_name'         => $city_name,
                            'city_short_name'   => $city_short_name,
                            'country_name'      => $country_name,
                            'airport'           => $airport,
                            'flight_type'           => $flight_type
        ]);

        return redirect('admin/flights')->with('success','Flight Added Successfully');
    }

    public function edit($id)
    {
        $city = City::find($id);

        return view('admin.flight.edit', compact('city'));
    }

    public function update(Request $request)
    {
        $id                 = $request->city_id;
        $city_name          = $request->city_name;
        $city_short_name    = strtoupper($request->city_short_name);
        $country_name       = $request->country_name;
        $airport            = $request->airport;
        $flight_type        = $request->flight_type;

        $city_details = City::find($id);

        if(!empty($city_name))
        {
            $city_details->city_name = $city_name;
        }
        if(!empty($city_short_name))
        {
            $city_details->city_short_name = $city_short_name;
        }
        if(!empty($airport))
        {
            $city_details->airport = $airport;
        }
        if(!empty($country_name))
        {
            $city_details->country_name = $country_name;
        }

        if(!empty($flight_type))
        {
            $city_details->flight_type = $flight_type;
        }
        
        $city_details->save();

        return redirect('admin/flights')->with('success','Flight Update Successfully');
    }

    public function delete(Request $request)
    {
        $id     = $request->city_id; 
        $cupon_details   = City::find($id)->delete();

        return redirect('admin/flights')->with('success','Flight Delete Successfully ');
    }

    public function city_active($id)
    {
        $city_details = City::find($id);

        $city_details->city_status = 1;
        $city_details->save();

        return redirect('admin/flights')->with('success','Flight Active Successfully');

    }

    public function city_deactive($id)
    {
        $city_details = City::find($id);

        $city_details->city_status = 0;
        $city_details->save();

        return redirect('admin/flights')->with('success','Flight Deactive Successfully');
    }

    public function flight_booking(){
        $flight_bookings=FlightBooking::orderBy('id','desc')->get();
        // echo '<pre>'; var_dump($flight_bookings->result()); die;
        return view('admin.flight_bookings.index',compact('flight_bookings')); 
    }

    public function booking_details($id){
        $flightbooking=FlightBooking::find($id);
        $flightBookingTraveller=FlightBookingPassengerDetail::where('flight_booking_id',$id)->get();

        return view('admin.flight_bookings.show',compact('flightbooking','flightBookingTraveller')); 
    }

    public function flight_booking_update_status(Request $request){
        return FlightBooking::where('id',$request->id)->update([
            'status'=>($request->status)
        ]);
    }
}
