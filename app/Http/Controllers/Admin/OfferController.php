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
use App\Offer;

class OfferController extends Controller
{
    public function index(Request $request)
    {
        $offer_details = Offer::orderBy('id','desc')->get();
    	return view('admin.offer.index',compact('offer_details'));
    }

    public function create(Request $request)
    {
        return view('admin.offer.create');
    }

    public function save(Request $request)
    {
       $title = $request->title;
       $url   = str_replace(" ","-",$title); 
       $about = $request->about;

        if ($request->hasFile('offer_image'))
        {  
            $image = $request->file('offer_image');   
            $imagenamephoto=$image->getClientOriginalName();

            $destinationPath = public_path('/offer_image');
            $image->move($destinationPath, $imagenamephoto);   
          
        }

        if(isset($imagenamephoto))
        {
            $finalphoto  = $imagenamephoto;

        }else{
            $finalphoto = '';
        }

          $Offer = Offer::create([
                    'title'         => $title,
                    'url'           => $url,
                    'offer'         => $about,
                    'offer_image'   => $finalphoto
            ]);


        return redirect('admin/offers')->with('success','Offer Added Successfully');

    }

    public function delete(Request $request)
    {
        $offer_id = $request->offer_id;

        $offer = Offer::find($offer_id)->delete();

        return redirect('admin/offers')->with('success','Offer Delete Successfully');
    }

    public function offer_active($id)
    {
        $offer = Offer::find($id);

        $offer->offer_status = 1;
        $offer->save();

        return redirect('admin/offers')->with('success','Offer Active Successfully');

    }

    public function offer_deactive($id)
    {
        $offer = Offer::find($id);

        $offer->offer_status = 0;
        $offer->save();

        return redirect('admin/offers')->with('success','Offer Deactive Successfully');
    }

    public function edit($id)
    {
        $offer_details = Offer::find($id);
        return view('admin.offer.edit',compact('offer_details'));
    }

    public function update(Request $request)
    {
        $offer_id   = $request->offer_id;
        $title      = $request->title;
        $offer      = $request->about;

        if ($request->hasFile('offer_image'))
        {  
            $image = $request->file('offer_image');   
            $imagenamephoto=$image->getClientOriginalName();

            $destinationPath = public_path('/offer_image');
            $image->move($destinationPath, $imagenamephoto);   
          
        }

        $offer_details = Offer::find($offer_id);

        $offer_details->title           = $title;
        $offer_details->url             = str_replace(" ","-",$title); 
        $offer_details->offer           = $offer;

        if(isset($imagenamephoto))
        {
            $offer_details->offer_image     = $imagenamephoto;
        }

        $offer_details->save();

        return redirect('admin/offers')->with('success','Offer Update Successfully');
    }

   

   

    

}
