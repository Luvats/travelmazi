<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Support;
use App\VisaType;
use App\Visa;
use Session;
use Date;

class VisaController extends Controller
{

    public function index(Request $request)
    {
        $visa = Visa::orderBy('id','desc')->get();
        return view('admin.visa.visa_list',compact('visa'));
    }

    public function create(Request $request)
    {
        return view('admin.visa.visa_create');
    }

    public function visa_save(Request $request)
    {
        $destination        = $request->destination;
        $departure_date     = $request->departure_date;
        $return_date        = $request->return_date;
        $traveller          = $request->traveller;
        $embassy_fee        = $request->embassy_fee;
        $service_fee        = $request->service_fee;
        $gst_amount         = $request->gst_amount;
        $visa_validity      = $request->visa_validity;
        $visa_approval_day  = $request->visa_approval_day;
        $passport_valid_day = $request->passport_valid_day;
        $working_days       = $request->working_days;

        $visa_details = Visa::create([
                                'destination'           => $destination,
                                'departure_date'        => $departure_date,
                                'return_date'           => $return_date,
                                'traveller'             => $traveller,
                                'embassy_fee'           => $embassy_fee,
                                'service_fee'           => $service_fee,
                                'gst_amount'            => $gst_amount,
                                'visa_validity'         => $visa_validity,
                                'visa_approval_day'     => $visa_approval_day,
                                'passport_valid_day'    => $passport_valid_day,
                                'working_days'          => $working_days
        ]);

        return redirect('admin/visa')->with('success','Visa Added Successfully');
    }

    public function visa_edit($id)
    {
        $visa_detail = Visa::find($id);

        return view('admin.visa.visa_edit',compact('visa_detail'));
    }

    public function visa_update(Request $request)
    {
        $visa_id            = $request->visa_id;
        $destination        = $request->destination;
        $departure_date     = $request->departure_date;
        $return_date        = $request->return_date;
        $traveller          = $request->traveller;
        $embassy_fee        = $request->embassy_fee;
        $service_fee        = $request->service_fee;
        $gst_amount         = $request->gst_amount;
        $visa_validity      = $request->visa_validity;
        $visa_approval_day  = $request->visa_approval_day;
        $passport_valid_day = $request->passport_valid_day;
        $working_days       = $request->working_days;

        $visa_detail = Visa::find($visa_id);

        if(!empty($destination))
        {
            $visa_detail->destination = $destination;
        }

        if(!empty($departure_date))
        {
            $visa_detail->departure_date = $departure_date;
        }

        if(!empty($departure_date))
        {
            $finaldeparture_date       = date_create($departure_date);
            $finaldeparturedate        = date_format($finaldeparture_date,"d/m/Y");

            $visa_detail->departure_date = $finaldeparturedate;
        }

        if(!empty($return_date))
        {
            $finalreturn_date       = date_create($return_date);
            $finaltraveldate        = date_format($finalreturn_date,"d/m/Y");

            $visa_detail->return_date = $finaltraveldate;
        }

        if(!empty($traveller))
        {
            $visa_detail->traveller = $traveller;
        }

        if(!empty($embassy_fee))
        {
            $visa_detail->embassy_fee = $embassy_fee;
        }

        if(!empty($service_fee))
        {
            $visa_detail->service_fee = $service_fee;
        }

        if(!empty($gst_amount))
        {
            $visa_detail->gst_amount = $gst_amount;
        }

        if(!empty($visa_validity))
        {
            $visa_detail->visa_validity = $visa_validity;
        }

        if(!empty($visa_approval_day))
        {
            $visa_detail->visa_approval_day = $visa_approval_day;
        }

        if(!empty($passport_valid_day))
        {
            $visa_detail->passport_valid_day = $passport_valid_day;
        }

        if(!empty($working_days))
        {
            $visa_detail->working_days = $working_days;
        }

       $visa_detail->save();

        return redirect('admin/visa')->with('success','Visa Updated Successfully');
    }

     public function visa_delete(Request $request)
    {   
        $visa_id = $request->visa_id; 
        $Visas = Visa::find($visa_id)->delete();

        return redirect('admin/visa')->with('success','Visa Delete Successfully ');
    }

    public function visa_type(Request $request)
    {
        $visa_type = VisaType::orderBy('id','desc')->get();
    	 return view('admin.visa.visa_type',compact('visa_type'));
    }

    public function visa_type_create(Request $request)
    {
      return view('admin.visa.create_visa_type');
    }

    public function visa_type_save(Request $request)
    {
      $visa_type = $request->visa_type;

      $visaType = VisaType::create([
                                'type' => $visa_type
      ]);

       return redirect('admin/visa_type')->with('success','Visa Type Added Successfully');
      
    }

     public function visa_type_active($id)
    {
        $VisaType = VisaType::find($id);

        $VisaType->status = 1;
        $VisaType->save();

        return redirect('admin/visa_type')->with('success','Visa Type Active Successfully');

    }

    public function visa_type_deactive($id)
    {
        $VisaType = VisaType::find($id);

        $VisaType->status = 0;
        $VisaType->save();

        return redirect('admin/visa_type')->with('success','Visa Type Deactive Successfully');
    }

    public function visa_type_delete(Request $request)
    {   
        $visa_type_id = $request->visa_type_id; 
        $VisaType = VisaType::find($visa_type_id)->delete();

        return redirect('admin/visa_type')->with('success','Visa Type Delete Successfully ');
    }

    public function visa_type_edit($id)
    {
        $VisaType=VisaType::find($id);

        return view('admin.visa.visa_type_edit',compact('VisaType'));
    }

    public function visa_type_update(Request $request)
    {
        $visa_type_id = $request->visa_type_id;
        $visa_type    = $request->visa_type;

        $VisaType_details = VisaType::find($visa_type_id);

        if(!empty($visa_type))
        {
            $VisaType_details->type = $visa_type;
        }

        $VisaType_details->save();

        return redirect('admin/visa_type')->with('success','Visa Type Update Successfully');
    }

}
