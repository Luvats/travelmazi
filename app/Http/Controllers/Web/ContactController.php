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
use App\Support;
use Session;

class ContactController extends Controller
{
    public function index(Request $request)
    {
    	$supportdetails = Support::first();

    	//echo "<pre/>"; print_r($supportdetails); die('data');
    	return view('web.contact',compact('supportdetails'));
    }


}
