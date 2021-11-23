<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Gallery;
use App\Offer;
use App\About;
use App\City;
use App\CabCity;
use App\Visa;
use App\Flightclass;
use Mail;
use Socialite;

class IndexController extends Controller
{

    
    public function index(Request $request)
    {
        $gallery    = Gallery::where('gallery_status','1')->orderBy('id','desc')->get();
        $offer      = Offer::where('offer_status','1')->orderBy('id','desc')->limit(3)->get();
        $about      = About::first();
        $from_cities    = City::where('city_status','1')->get();
        $to_cities      = City::where('city_status','1')->orderBy('id','desc')->get();

        $CabCity     = CabCity::where('status','1')->get();
        $CabCityTo   = CabCity::where('status','1')->orderBy('id','desc')->get();

        $visa       = Visa::all();

        $final_date = date('Y/m/d',strtotime("+1 days"));
        $final_date_outstation = date('Y/m/d',strtotime("+3 days"));

        $Flightclass   = Flightclass::where('flight_clss_status','1')->orderBy('id','asc')->get();
        return view('web.index',compact('about','gallery','offer','from_cities','to_cities','Flightclass','visa','CabCity','CabCityTo','final_date','final_date_outstation'));
    }

    public function signup(Request $request)
    {
        $email      = $request->post('email');
        $c_password = $request->post('password');

        $exist_email = User::where('email',$email)->first();

        if(empty($exist_email))
        {
            $user = User::create([
                'username'      => $request->get('username'),
                'name'    => $request->get('first_name'),
                'last_name'     => $request->get('last_name'),
                'email'         => $request->get('email'),
                'password'      => Hash::make($request->get('password')),
                'c_password'    => $c_password
            ]);

            $userID = $user->id;

             return response()->json([
                'status' => true,
                'message'=> "Sign up successfully",
                'userID'   => $userID
            ], 200);

        }else{
            return response()->json([
                'status' => 'Email address already exist',
                'message'=> "",
                'userID'   => ''
            ], 200);
        }
    }

    public function weblogin(Request $request)
    {
        $email      = $request->input('email');
        $password   = $request->input('password');

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed..

            $exist_email = User::where('email',$credentials['email'])->first();
            if(empty($exist_email))
            {
                return response()->json([
                    'status' => 'Credential wrong.Please fill correct credential.',
                ], 200);

            }else{
                $verification = $exist_email->email_verify;
                $email_otp      = rand(100000, 999999);

                $exist_email->email_otp = $email_otp;
                $exist_email->save();

                if($verification == 0)
                {
                     Mail::send('emails.otp_verification_template', ['receiver'=>$email,'email_otp'=>$email_otp], function ($m) use ($email,$email_otp) {
                        $m->from('travelmazi@arthtechsolutions.com', 'TravelMazi')->cc('travelmazi@arthtechsolutions.com', 'TravelMazi');

                        $m->to($email)->subject('OTP to create your TravelMazi account');
                    });
                }

                return response()->json([
                    'status'        => 'Please verify email addreess.',
                    'verification'  => $verification
                ], 200);
            }

        }else{

            return response()->json([
                'status' => 'Credential wrong.Please fill correct credential.',
            ], 200);
        }
    }

    public function otp_verification(Request $request)
    {
        $otp = $request->post('otp');
        $email = $request->post('email');

        $verification = User::where('email',$email)->where('email_otp',$otp)->first();

        if(empty($verification))
        {
            return response()->json([
                'status' => false,
                'msg' => 'OTP not match. Please enter correct OTP.'
            ], 200);

        }else{
            $verification->email_verify = 1;
            $verification->save();

            return response()->json([
                'status'        => true,
               
            ], 200);

        }
    }

    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return redirect('/'); // redirect the user to the login screen
        
    }
        
    public function handleGoogleCallback(Request $request)
    {
        $userSocial= Socialite::driver('google')->user();
        $user=User::where('email',$userSocial->email)->first();
        if($user){
            if(Auth::loginUsingId($user->id, true)){
                // die("inside");
                return redirect()->route('/');
            }
        }
        $userSignup=User::create([
            'name'=>$userSocial->name,
            'email'=>$userSocial->email,
            'password'=>bcrypt('1234'),
            'image_url'=>$userSocial->avatar,
        ]);
        if($userSignup){
            if(Auth::loginUsingId($userSignup->id,true)){
                return redirect()->route('/');
            }
        }
    }
    
}
