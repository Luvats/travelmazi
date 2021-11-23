<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Blog;
use App\About;
use App\Coupon;
use App\City;
use App\Airlines;
use App\Airport;
use App\Flightclass;

class AirportController extends Controller
{
    public function index(Request $request)
    {
        $airports = Airport::orderby('id','desc')->get();
    	return view('admin.airport.index',compact('airports'));
    }

    public function create(Request $request)
    {
    	return view('admin.airport.create');
    }

    public function save(Request $request)
    {
    	$airportcode        = $request->airportcode;
        $airport        = $request->airport;
        $citycode       = $request->citycode;
        $city           = $request->city;
        $countrycode    = $request->countrycode;
        $country        = $request->country;

       

        $coupon = Airport::create([
                            'airportcode'       => $airportcode,
                            'airport'       => $airport,
                            'citycode'      => $citycode,
                            'city'          => $city,
                            'countrycode'   => $countrycode,
                            'country'       => $country
        ]);

        return redirect('admin/airports')->with('success','Aiport Added Successfully');
    }

    public function edit($id)
    {
        $airports = Airport::find($id);

        return view('admin.airport.edit', compact('airports'));
    }

    public function update(Request $request)
    {
        $id             = $request->airport_id;
        $airportcode    = $request->airportcode;
        $airport        = $request->airport;
        $citycode       = $request->citycode;
        $city           = $request->city;
        $countrycode    = $request->countrycode;
        $country        = $request->country;

        $airport_details = Airport::find($id);

        if(!empty($airportcode))
        {
            $airport_details->airportcode = $airportcode;
        }
        if(!empty($airport))
        {
            $airport_details->airport = $airport;
        }
        if(!empty($citycode))
        {
            $airport_details->citycode = $citycode;
        }
        if(!empty($city))
        {
            $airport_details->city = $city;
        }
        if(!empty($countrycode))
        {
            $airport_details->countrycode = $countrycode;
        }
        if(!empty($country))
        {
            $airport_details->country = $country;
        }

        
        $airport_details->save();

        return redirect('admin/airports')->with('success','Airport Update Successfully');
    }

    public function delete(Request $request)
    {
        $id     = $request->airport_id; 
        $airline_details   = Airport::find($id)->delete();

        return redirect('admin/airports')->with('success','Airport Delete Successfully ');
    }

  
}