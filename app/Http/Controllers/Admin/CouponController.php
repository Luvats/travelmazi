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
use App\Coupon;

class CouponController extends Controller
{
    public function index(Request $request)
    {
        $coupons = Coupon::orderby('id','desc')->get();
    	return view('admin.coupons.index',compact('coupons'));
    }

    public function create(Request $request)
    {
    	return view('admin.coupons.create');
    }

    public function save(Request $request)
    {
    	$coupon_name = $request->coupon_name;
        $percentage = $request->percentage;

        $coupon = Coupon::create([
                            'coupon_name' => $coupon_name,
                            'percentage' => $percentage
        ]);

        return redirect('admin/coupons')->with('success','Coupon Added Successfully');
    }

    public function edit($id)
    {
        $coupon = Coupon::find($id);

        return view('admin.coupons.edit', compact('coupon'));
    }

    public function update(Request $request)
    {
        $id             = $request->cupon_id;
        $coupon_name    = $request->coupon_name;
        $percentage     = $request->percentage;

        $cupon_details = Coupon::find($id);

        if(!empty($coupon_name))
        {
            $cupon_details->coupon_name = $coupon_name;
        }
        if(!empty($percentage))
        {
            $cupon_details->percentage = $percentage;
        }
        $cupon_details->save();

        return redirect('admin/coupons')->with('success','Coupon Update Successfully');
    }

    public function delete(Request $request)
    {
        $id     = $request->coupon_id; 
        $cupon_details   = Coupon::find($id)->delete();

        return redirect('admin/coupons')->with('success','Coupon Delete Successfully ');
    }

    public function coupon_active($id)
    {
        $cupon_details = Coupon::find($id);

        $cupon_details->coupon_status = 1;
        $cupon_details->save();

        return redirect('admin/coupons')->with('success','Coupon Active Successfully');

    }

    public function coupon_deactive($id)
    {
        $cupon_details = Coupon::find($id);

        $cupon_details->coupon_status = 0;
        $cupon_details->save();

        return redirect('admin/coupons')->with('success','Coupon Deactive Successfully');
    }

   

   

    

}
