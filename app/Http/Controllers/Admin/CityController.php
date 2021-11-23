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
use App\City;
use App\CabCity;

class CityController extends Controller
{
    public function index(Request $request)
    {
        $cities = CabCity::orderby('id','desc')->get();
    	return view('admin.city.index',compact('cities'));
    }

    public function create(Request $request)
    {
    	return view('admin.city.create');
    }

    public function save(Request $request)
    {
    	$name          = $request->name;
        

        $coupon = CabCity::create([
                            'name'         => $name,
        ]);

        return redirect('admin/cities')->with('success','City Added Successfully');
    }

    public function edit($id)
    {
        $city = CabCity::find($id);

        return view('admin.city.edit', compact('city'));
    }

    public function update(Request $request)
    {
        $id   = $request->city_id;
        $name = $request->name;
        

        $city_details = CabCity::find($id);

        if(!empty($name))
        {
            $city_details->name = $name;
        }
        
        $city_details->save();

        return redirect('admin/cities')->with('success','City Update Successfully');
    }

    public function delete(Request $request)
    {
        $id     = $request->city_id; 
        $cupon_details   = CabCity::find($id)->delete();

        return redirect('admin/cities')->with('success','City Delete Successfully ');
    }

    public function city_active($id)
    {
        $city_details = CabCity::find($id);

        $city_details->status = 1;
        $city_details->save();

        return redirect('admin/cities')->with('success','City Active Successfully');

    }

    public function city_deactive($id)
    {
        $city_details = CabCity::find($id);

        $city_details->status = 0;
        $city_details->save();

        return redirect('admin/cities')->with('success','City Deactive Successfully');
    }
}
