<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Blog;
use App\Gallery;
use App\Offer;
use App\About;
use Session;

class OfferController extends Controller
{
    public function index(Request $request)
    {
    	$offer      = Offer::where('offer_status','1')->orderBy('id','desc')->get();

    	return view('web.offer',compact('offer'));
    }


}
