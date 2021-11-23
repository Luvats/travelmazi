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

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $about_details = About::first();
    	return view('admin.about.index',compact('about_details'));
    }

    public function addabout(Request $request)
    {
    	$title 	= $request->title;
    	$url 	= str_replace(" ","-",$title);
    	$about 	= $request->about;

    	$about_details = About::first();

    	if(empty($about_details))
    	{
    		$about = About::create([
    				'title' => $title,
    				'url' 	=> $url,
    				'about' => $about
    		]);

    		return redirect('admin/about')->with('success','About add Successfully');

    	}else{

    		$about_details->title 	= $title;
    		$about_details->url 	= $url;
    		$about_details->about 	= $about;

    		$about_details->save();

    		return redirect('admin/about')->with('success','About update Successfully');
    	}
    }

   

    

}
