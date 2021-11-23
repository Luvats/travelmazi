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
use App\Airlines;
use App\Flightclass;

class AirlineController extends Controller
{
    public function index(Request $request)
    {
        $airlines = Airlines::orderby('id','desc')->get();
    	return view('admin.airlines.index',compact('airlines'));
    }

    public function create(Request $request)
    {
    	return view('admin.airlines.create');
    }

    public function save(Request $request)
    {
    	$airlines_name    = $request->airlines_name;
        $airlines_code    = $request->airlines_code;

        if ($request->hasFile('airlines_logo'))
        {  
            $image = $request->file('airlines_logo');   
            $imagenamephoto=$image->getClientOriginalName();

            $destinationPath = public_path('/airlines_logo');
            $image->move($destinationPath, $imagenamephoto);   
          
        }

        if(isset($imagenamephoto))
        {
            $finalphoto  = $imagenamephoto;

        }else{
            $finalphoto = '';
        }

        $coupon = Airlines::create([
                            'airlines_name' => $airlines_name,
                            'airlines_code' => $airlines_code,
                            'airlines_logo' => $finalphoto
        ]);

        return redirect('admin/airlines')->with('success','Airlines Added Successfully');
    }

    public function edit($id)
    {
        $airlines = Airlines::find($id);

        return view('admin.airlines.edit', compact('airlines'));
    }

    public function update(Request $request)
    {
        $id             = $request->airline_id;
        $airlines_name    = $request->airlines_name;
        $airlines_code     = $request->airlines_code;

        $airline_details = Airlines::find($id);

        if ($request->hasFile('airlines_logo'))
        {  
            $image = $request->file('airlines_logo');   
            $imagenamephoto=$image->getClientOriginalName();

            $destinationPath = public_path('/airlines_logo');
            $image->move($destinationPath, $imagenamephoto);   
          
        }


        if(!empty($airlines_name))
        {
            $airline_details->airlines_name = $airlines_name;
        }
        if(!empty($airlines_code))
        {
            $airline_details->airlines_code = $airlines_code;
        }

        if(isset($imagenamephoto))
        {
            $airline_details->airlines_logo     = $imagenamephoto;
        }
        $airline_details->save();

        return redirect('admin/airlines')->with('success','Airlines Update Successfully');
    }

    public function delete(Request $request)
    {
        $id     = $request->airline_id; 
        $airline_details   = Airlines::find($id)->delete();

        return redirect('admin/airlines')->with('success','Airline Delete Successfully ');
    }

    public function airline_active($id)
    {
        $airline_details = Airlines::find($id);

        $airline_details->airline_status = 1;
        $airline_details->save();

        return redirect('admin/airlines')->with('success','Airline Active Successfully');

    }

    public function airline_deactive($id)
    {
        $airline_details = Airlines::find($id);

        $airline_details->airline_status = 0;
        $airline_details->save();

        return redirect('admin/airlines')->with('success','Airline Deactive Successfully');
    }

    public function flight_class_list(Request $request)
    {
        $flight_class = Flightclass::orderby('id','desc')->get();
        return view('admin.flight_class.list',compact('flight_class'));
    }

    public function flight_class_create(Request $request)
    {
        return view('admin.flight_class.create');
    }

    public function flight_class_save(Request $request)
    {
        $flight_clss        = $request->flight_clss;
        $flight_clss_value  = strtoupper($flight_clss);

        if($flight_clss_value == 'PREMIUM ECONOMY')
        {
            $final_flight_clss_value = 'PREMIUM_ECONOMY';

        }else if($flight_clss_value == 'FIRST CLASS')
        {
            $final_flight_clss_value = 'FIRST';

        }else{
            $final_flight_clss_value = $flight_clss_value;
        }

        $flight = Flightclass::create([
                            'flight_clss'       => $flight_clss,
                            'flight_clss_value' => $final_flight_clss_value
        ]);

        return redirect('admin/flight_class')->with('success','Flight Class Added Successfully');
        
    }

    public function flight_class_edit($id)
    {
        $Flightclass_details    = Flightclass::find($id);

        return view('admin.flight_class.edit', compact('Flightclass_details'));
    }

    public function flight_class_update(Request $request)
    {
        $id             = $request->flight_class_id;
        $flight_clss    = $request->flight_clss;

        $flight_clss_value  = strtoupper($flight_clss);

        if($flight_clss_value == 'PREMIUM ECONOMY')
        {
            $final_flight_clss_value = 'PREMIUM_ECONOMY';

        }else if($flight_clss_value == 'FIRST CLASS')
        {
            $final_flight_clss_value = 'FIRST';

        }else{
            $final_flight_clss_value = $flight_clss_value;
        }

        $Flightclass_details    = Flightclass::find($id);

        if(!empty($flight_clss))
        {
            $Flightclass_details->flight_clss = $flight_clss;
        }

        if(isset($flight_clss_value))
        {
            $Flightclass_details->flight_clss_value     = $final_flight_clss_value;
        }
        $Flightclass_details->save();

        return redirect('admin/flight_class')->with('success','Flight Class update Successfully ');

    }

    public function flight_class_delete(Request $request)
    {
        $id                     = $request->flight_class_id; 
        $Flightclass_details    = Flightclass::find($id)->delete();

        return redirect('admin/flight_class')->with('success','Flight Class Delete Successfully ');
    }

    public function flight_class_active($id)
    {
        $Flightclass = Flightclass::find($id);

        $Flightclass->flight_clss_status = 1;
        $Flightclass->save();

        return redirect('admin/flight_class')->with('success','Flight Class Active Successfully');

    }

    public function flight_class_deactive($id)
    {
        $Flightclass = Flightclass::find($id);

        $Flightclass->flight_clss_status = 0;
        $Flightclass->save();

        return redirect('admin/flight_class')->with('success','Flight Class Deactive Successfully');
    }


   

   

    

}
