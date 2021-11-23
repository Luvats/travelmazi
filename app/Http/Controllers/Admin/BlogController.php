<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Blog;
use Session;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::orderBy('id','desc')->get();
    	return view('admin.blog.index',compact('blogs'));
    }



    public function create(Request $request)
    {
        return view('admin.blog.create');
    }

    public function save(Request $request)
    {

    	$title 	= $request->title;
    	$url 	= str_replace(" ","-",$title);
    	$blog 	= $request->blog;

    	if ($request->hasFile('image'))
        {  
            $image = $request->file('image');   
            $imagenamephoto=$image->getClientOriginalName();

            $destinationPath = public_path('/blog_image');
            $image->move($destinationPath, $imagenamephoto);   
          
        }

        if(isset($imagenamephoto))
        {
            $finalphoto  = $imagenamephoto;

        }else{
            $finalphoto = '';
        }

        $blog = Blog::create([
    				'title' => $title,
    				'url' 	=> $url,
    				'blog'  => $blog,
    				'image' => $finalphoto
    	]);


    	return redirect('admin/blogs')->with('success','Blog Added Successfully');

    	
    }


    public function delete(Request $request)
    {   
        $blog_id = $request->blog_id; 
        $blog = Blog::find($blog_id)->delete();

        return redirect('admin/blogs')->with('success','Blog Delete Successfully ');
    }
 
    public function edit($id)
    {
        $edit_blog=Blog::find($id);

        return view('admin.blog.edit',compact('edit_blog'));
    }

    public function update(Request $request)
    {
        $id     = $request->blog_id;
        $title  = $request->title;
        $blog   = $request->blog;

       if ($request->hasFile('image'))
        {  
            $image = $request->file('image');   
            $imagenamephoto=$image->getClientOriginalName();

            $destinationPath = public_path('/blog_image');
            $image->move($destinationPath, $imagenamephoto);   
          
        }


        $blog_details = Blog::find($id);
        $blog_details->title  = $title;
        $blog_details->url    = str_replace(" ","-",$title);
        $blog_details->blog   = $blog;

        if(isset($imagenamephoto))
        {
            $blog_details->image     = $imagenamephoto;
        }

        $blog_details->save();

        return redirect('admin/blogs')->with('success','Blog Update Successfully');
    }

    public function blog_active($id)
    {
        $blogs = Blog::find($id);

        $blogs->blog_status = 1;
        $blogs->save();

        return redirect('admin/blogs')->with('success','Blog Active Successfully');

    }

    public function blog_deactive($id)
    {
        $blogs = Blog::find($id);

        $blogs->blog_status = 0;
        $blogs->save();

        return redirect('admin/blogs')->with('success','Blog Deactive Successfully');
    }




}
