<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Blog;
use App\About;
use App\Offer;
use App\Gallery;
use App\Coupon;
use App\City;
use App\Airlines;
use App\FlightBooking;
use App\VisaType;
use App\Visa;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //echo '<pre>'; var_dump(Auth::user()["user_type"]); die;
        if (Auth::user()["user_type"] == 0) {
            $blog_count     = Blog::count();
            $offer_count    = Offer::count();
            $gallery_count  = Gallery::count();
            $coupon_count   = Coupon::count();
            $city_count     = City::count();
            $airline_count     = Airlines::count();
            $visa_type_count   = VisaType::count();
            $visa_count   = Visa::count();
            $flight_booking_count   = FlightBooking::count();

            return view('admin.dashboard', compact('blog_count', 'offer_count', 'gallery_count', 'coupon_count', 'city_count', 'airline_count', 'visa_type_count', 'visa_count','flight_booking_count'));
        }
        
        if(!empty($request->session()->get('redirect_back_url')[0])){
            return redirect($request->session()->get('redirect_back_url')[0]);
        }
        return redirect('/');
    }
}
