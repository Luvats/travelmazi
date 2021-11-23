<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FlightRating;
use App\FlightBooking;
use Auth;

class FlightRatingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $flight_ratings = FlightRating::all();
        return view('flight_ratings.index', compact('flight_ratings'));
    }

    
    public function create()
    {
        return view('flight_ratings.create');
    }


    public function store(Request $request)
    {

        // $flight_booking_data=FlightBooking::where('booking_id',$request->booking_id)->first();
        // $planes=json_decode($flight_booking_data->booking_details)->api_booking_details
        // echo '<pre>'; print_r($request->all()); die;
        $this->validate($request, [
            // 'flight_number' => 'required',
            'title' => 'required',
            'description' => 'required',
            'rate' => 'required',
        ]);
        $flight_ratings = new FlightRating([
            'user_id' => Auth::user()->id,
            'booking_id' => $request->get('booking_id'),
            'title' => $request->get('title'),
            'flight_name' => $request->get('flight_name'),
            'description' => $request->get('description'),
            'rate' => $request->get('rate'),
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        $flight_ratings->save();
        //$request->user()->FlightRating()->create($request->only('user_id','flight_number','title','description','rate','created_at','updated_at'));
        return redirect()->route('bookings')->with('success', 'Your valuable ratings are stored');
    }



    public function edit($id)
    {
        $flightrating = FlightRating::findOrFail($id);
        return view('flight_ratings.edit', compact('flightrating'));
    }




    public function show($booking_id,$flight_name)
    {
        $flight_rating = FlightRating::where(['booking_id'=>$booking_id,'flight_name'=>$flight_name])->first();
        return view('web.flight_ratings.show', compact('flight_rating','booking_id','flight_name'));
    }


    public function update(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            // 'flight_number' => 'required',
            'title' => 'required',
            'description' => 'required',
            'rate' => 'required',
        ]);

        $flight_ratings = FlightRating::findOrFail($request->get('id'));
        $flight_ratings->user_id = $request->get('user_id');
        $flight_ratings->flight_number = $request->get('flight_number');
        $flight_ratings->title = $request->get('title');
        $flight_ratings->description = $request->get('description');
        $flight_ratings->rate = $request->get('rate');
        $flight_ratings->created_at = date('Y-m-d');
        $flight_ratings->updated_at = date('Y-m-d');

        $flight_ratings->save();
        //$request->user()->FlightRating()->update($request->only('user_id','flight_number','title','description','rate','created_at','updated_at'));

        return redirect()->route('flight_ratings-index')->with('success', 'Data Updated');
    }


    public function destroy($id)
    {
        $flight_ratings = FlightRating::find($id);
        $file = public_path('images' . "/" . $flight_ratings->image_url);
        if (file_exists($file)) {
            unlink($file);
        }
        $flight_ratings->delete();
        return redirect()->route('flight_ratings-index')->with('success', 'Data Deleted');
    }
}
