<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Blog;
use App\Footer;
use Session;

class FooterController extends Controller
{
    public function index(Request $request)
    {
        $footer = Footer::orderBy('id','desc')->get();
    	return view('admin.footer.index',compact('footer'));
    }

    public function create(Request $request)
    {
        return view('admin.footer.create');
    }

    public function save(Request $request)
    {
        $title          = $request->title;
        $footer_desc    = $request->footer_desc;

        $footer_create = Footer::create([
                            'title'         => $title,
                            'footer_desc'   => $footer_desc
        ]);

        return redirect('admin/footer')->with('success','Footer Added Successfully');
    }

    public function delete(Request $request)
    {
        $id = $request->footer_id; 
        $blog = Footer::find($id)->delete();

        return redirect('admin/footer')->with('success','Footer Delete Successfully ');
    }

    public function edit($id)
    {
        $footer_details = Footer::find($id);
        return view('admin.footer.edit',compact('footer_details'));
    }

    public function update(Request $request)
    {
        $id             = $request->footer_id;
        $title          = $request->title;
        $footer_desc    = $request->footer_desc;

        $footer_details = Footer::find($id);

        $footer_details->title = $title;
        $footer_details->footer_desc = $footer_desc;
        $footer_details->save();

        return redirect('admin/footer')->with('success','Footer Update Successfully');
    }


   


    

  




}
