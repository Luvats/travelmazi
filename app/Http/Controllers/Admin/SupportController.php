<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Support;
use Session;

class SupportController extends Controller
{
    public function index(Request $request)
    {
        $support = Support::orderBy('id','desc')->get();
    	return view('admin.support.index',compact('support'));
    }

    public function create(Request $request)
    {
        return view('admin.support.create');
    }

    public function save(Request $request)
    {
      
      $email          = $request->email;
      $phone          = $request->phone;
      $address        = $request->address;
      $fb_link        = $request->fb_link;
      $twitter_link   = $request->twitter_link;
      $instagram_link = $request->instagram_link;
      $linkedin_link  = $request->linkedin_link;
      $utube_link     = $request->utube_link;

      $edit_support = Support::first();

      if(empty($edit_support))
      {
        $support = Support::create([
                                'email'           => $email,
                                'phone'           => $phone,
                                'address'         => $address,
                                'fb_link'         => $fb_link,
                                'twitter_link'    => $twitter_link,
                                'instagram_link'  => $instagram_link,
                                'linkedin_link'   => $linkedin_link,
                                'utube_link'      => $utube_link
        ]);

        return redirect('admin/support')->with('success','Support Added Successfully');
      }
      else 
      {
        if(!empty($email))
        {
            $edit_support->email  = $email;
        }
        if(!empty($phone))
        {
            $edit_support->phone  = $phone;
        }
        if(!empty($address))
        {
            $edit_support->address  = $address;
        }
        if(!empty($fb_link))
        {
            $edit_support->fb_link  = $fb_link;
        }
        if(!empty($twitter_link))
        {
            $edit_support->twitter_link   = $twitter_link;
        }
        if(!empty($instagram_link))
        {
            $edit_support->instagram_link = $instagram_link;
        }
        if(!empty($linkedin_link))
        {
            $edit_support->linkedin_link  = $linkedin_link;
        }
        if(!empty($utube_link))
        {
            $edit_support->utube_link   = $utube_link;
        }
        $edit_support->save();

        return redirect('admin/support')->with('success','Support Update Successfully');
      } 
    }

    public function delete(Request $request)
    {   
        $support_id = $request->support_id; 
        $support    = Support::find($support_id)->delete();

        return redirect('admin/support')->with('success','Support Delete Successfully ');
    }

    public function edit($id)
    {
      $support_details = Support::find($id);

      return view('admin.support.edit',compact('support_details'));
    }

    public function update(Request $request)
    {
      $id       = $request->support_id;
      $email    = $request->email;
      $phone    = $request->phone;
      $address  = $request->address;
      $fb_link        = $request->fb_link;
      $twitter_link   = $request->twitter_link;
      $instagram_link = $request->instagram_link;
      $linkedin_link  = $request->linkedin_link;
      $utube_link     = $request->utube_link;

      $support = Support::find($id);

      if(!empty($email))
        {
            $support->email  = $email;
        }
        if(!empty($phone))
        {
            $support->phone  = $phone;
        }
        if(!empty($address))
        {
            $support->address  = $address;
        }
        if(!empty($fb_link))
        {
            $support->fb_link  = $fb_link;
        }
        if(!empty($twitter_link))
        {
            $support->twitter_link   = $twitter_link;
        }
        if(!empty($instagram_link))
        {
            $support->instagram_link = $instagram_link;
        }
        if(!empty($linkedin_link))
        {
            $support->linkedin_link  = $linkedin_link;
        }
        if(!empty($utube_link))
        {
            $support->utube_link   = $utube_link;
        }
        $support->save();

      return redirect('admin/support')->with('success','Support Update Successfully ');

    }


}
