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
use App\Gallery;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $gallery_details = Gallery::orderBy('id','desc')->get();
    	return view('admin.gallery.index',compact('gallery_details'));
    }

    public function create(Request $request)
    {
        return view('admin.gallery.create');
    }

    public function save(Request $request)
    {
        $gallery_title = $request->gallery_title;

        if ($request->hasFile('gallery_img'))
        {  
            $image = $request->file('gallery_img');   
            $imagenamephoto=$image->getClientOriginalName();

            $destinationPath = public_path('/gallery_img');
            $image->move($destinationPath, $imagenamephoto);   
          
        }

        if(isset($imagenamephoto))
        {
            $finalphoto  = $imagenamephoto;

        }else{
            $finalphoto = '';
        }

        $gallery = Gallery::create([
                'gallery_title' => $gallery_title,
                'gallery_img'   => $finalphoto
        ]);


        return redirect('admin/gallery')->with('success','Gallery Added Successfully');
    }

    public function edit($id)
    {
        $gallery_details = Gallery::find($id);
        return view('admin.gallery.edit',compact('gallery_details'));
    }

    public function update(Request $request)
    {
        $gallery_id    = $request->gallery_id;
        $gallery_title = $request->gallery_title;

        $gallery_details = Gallery::find($gallery_id);

        if ($request->hasFile('gallery_img'))
        {  
            $image = $request->file('gallery_img');   
            $imagenamephoto=$image->getClientOriginalName();

            $destinationPath = public_path('/gallery_img');
            $image->move($destinationPath, $imagenamephoto);   
          
        }

        $gallery_details->gallery_title = $gallery_title;

        if(isset($imagenamephoto))
        {
            $gallery_details->gallery_img     = $imagenamephoto;
        }

        $gallery_details->save();

        return redirect('admin/gallery')->with('success','Gallery Update Successfully');


    }

    public function delete(Request $request)
    {
        $gallery_id = $request->gallery_id; 
        $blog = Gallery::find($gallery_id)->delete();

        return redirect('admin/gallery')->with('success','Gallery Delete Successfully ');
    }

    public function gallery_active($id)
    {
        $gallery = Gallery::find($id);

        $gallery->gallery_status = 1;
        $gallery->save();

        return redirect('admin/gallery')->with('success','Gallery Active Successfully');

    }

    public function gallery_deactive($id)
    {
        $gallery = Gallery::find($id);

        $gallery->gallery_status = 0;
        $gallery->save();

        return redirect('admin/gallery')->with('success','Gallery Deactive Successfully');
    }

}
