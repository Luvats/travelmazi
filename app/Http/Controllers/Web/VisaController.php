<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Blog;
use App\Gallery;
use App\Offer;
use App\About;
use App\City;
use App\Visa;
use App\VisaType;
use App\VisaProcess;
use App\VisaApplication;
use App\Airlines;
use App\Flightclass;
use App\Customer;
use Session;
use Date;
use Mail;
use Response;
use Carbon\Carbon;
use DateTime;

class VisaController extends Controller
{
    public function index(Request $request)
    {
        //echo "<pre/>"; print_r($request->all()); die('aavavf');
    	$visa       = Visa::all();
        $visa_type  = VisaType::where('status','1')->get();

        $going_to 	             = $request->destination;
        $departure_date_input    = $request->value_from_start_visadate;
        $return_date_input       = $request->value_from_end_visadate;
    
        $departure 			= date_create($request->value_from_start_visadate);
    	$finaldeparture 	= date_format($departure,"d/m/Y");
    	$return 			= date_create($request->value_from_end_visadate);
    	$finalreturn 		= date_format($return,"d/m/Y");
        $traveller  		= $request->visa_traveller;

        $visa_details = Visa::where('destination',$going_to)->where('departure_date', '<=', $finaldeparture)
                     ->where('return_date', '>=', $finalreturn)->first();



        return view('web.visa',compact('visa_details','visa','going_to','traveller','visa_type','traveller','finaldeparture','finalreturn','departure_date_input','return_date_input'));

    }

    public function visa_proceed(Request $request)
    {

       // echo"<pre/>"; print_r($visa_proceed); die('data');
        $destination = $request->post('destination');
        $visa_process = array(
                            'first_name'    => $request->post('first_name'),
                            'last_name'     => $request->post('last_name'),
                            'age'           => $request->post('age'),
                            'gender'        => $request->post('gender'),
                            'visa_type'     => $request->post('visa_type'),
                            'working_day'   => $request->post('working_day'),
                            'destination'   => $request->post('destination'),
                            'traveller'     => $request->post('traveller'),
                            'visa_validity' => $request->post('visa_validity'),
                            'embassy_fee'   => $request->post('embassy_fee'),
                            'service_fee'   => $request->post('service_fee'),
                            'gst_amount'    => $request->post('gst_amount'),
                            'date_of_entry' => $request->post('date_of_entry'),
                            'date_of_exit'  => $request->post('date_of_exit')
        );

        $proceed = json_encode($visa_process);

        $VisaProcess = VisaProcess::create([
                                        'destination' => $destination,
                                        'visa_process' => $proceed
        ]);

        $id = $VisaProcess->id;

        $VisaApplication    = VisaApplication::where('visa_id',$id)->first();
        
        return view('web.visa_details')->with('VisaProcess', json_decode($VisaProcess['visa_process'], true))->with('destination',$destination)->with('id',$id)->with('VisaApplication',$VisaApplication);
    }

    public function uploadVisaMain($id)
    {
        $VisaProcess = VisaProcess::find($id);

        return view('web.visa.uploadVisaMain')->with('VisaProcess',json_decode($VisaProcess['visa_process'],true))->with('id',$id);
    }

    public function visa_application_upload(Request $request)
    {
        $visa_id             = $request->visa_id;
        $name                = $request->name;
        $surname             = $request->surname;
        $dob                 = $request->dob;
        $gender              = $request->gender;
        $nationality         = $request->nationality;
        $country_birth       = $request->country_birth;
        $passport_nbr        = $request->passport_nbr;
        $passport_issue_date = $request->passport_issue_date;
        $expiry_date         = $request->expiry_date;
        $departure_date      = $request->departure_date;
        $arrival_date        = $request->arrival_date;
        $port_arrival        = $request->port_arrival;

        foreach($name as $nm)
        {
            $visa_name[] = array(
                                'name' => $nm
            );   
        }

        foreach($surname as $sn)
        {
            $visa_surname[] = array(
                                'surname' => $sn
            );
        }

        foreach($dob as $db)
        {
            $visa_dob[] = array(
                            'dob' => $db
            );
        }

        foreach($gender as $gn)
        {
            $visa_gender[] = array(
                                'gender' => $gn
            );
        }

        foreach($nationality as $nation)
        {
            $visa_nationality[] = array(
                                    'nationality' => $nation
            );
        }

        foreach($country_birth as $cb)
        {
            $visa_country_birth[] = array(
                                        'country_birth' => $cb
            );
        }

        foreach($passport_nbr as $pnbr)
        {
            $visa_passport_nbr[] = array(
                                    'passport_nbr' => $pnbr
            );
        }

        foreach($passport_issue_date as $pissue_date)
        {
            $visa_passport_issuedate[] = array(
                                            'passport_issue_date' => $pissue_date
            );
        }

        foreach($expiry_date as $ed)
        {
            $visa_expiry_date[] = array(
                                    'expiry_date' => $ed
            );
        }

        foreach($departure_date as $d_date)
        {
            $visa_departure_date[] = array(
                                        'departure_date' => $d_date
            );
        }

        foreach($arrival_date as $adate)
        {
            $visa_arrival_date[] = array(
                                    'arrival_date' => $adate
            );
        }

        foreach($port_arrival as $pdate)
        {
            $visa_port_arrival[] = array(
                                    'port_arrival' => $pdate
            );
        }

        $images=array();
        if($files=$request->file('passport_front')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $destinationPath    = public_path('/visadoc');
                $file->move($destinationPath,$name);
                $images[]=$name;
            }
        }

        foreach($images as $pd)
        {
            $visa_passport_front[] = array(
                                        'visa_passport_front' => $pd
            );
        }



        $photos_visa=array();
        if($files=$request->file('photograph_visa')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $destinationPath    = public_path('/visadoc');
                $file->move($destinationPath,$name);
                $photos_visa[]=$name;
            }
        }

        foreach($photos_visa as $pv)
        {
            $visa_photograph_visa[] = array(
                                        'visa_photograph_visa' => $pv
            );
        }

        $eticket_pdf=array();
        if($files=$request->file('eticket_pdf')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $destinationPath    = public_path('/visadoc');
                $file->move($destinationPath,$name);
                $eticket_pdf[]=$name;
            }
        }
        foreach($eticket_pdf as $pv)
        {
            $visa_eticket_pdf[] = array(
                                        'visa_eticket_pdf' => $pv
            );
        }

        $result = array_map(function ($visa_name, $visa_surname, $visa_dob, $visa_gender, $visa_nationality, $visa_country_birth, $visa_passport_nbr, $visa_passport_issuedate, $visa_expiry_date, $visa_departure_date, $visa_arrival_date, $visa_port_arrival,$visa_passport_front, $visa_photograph_visa, $visa_eticket_pdf) {
            return array_merge(isset($visa_name) ? $visa_name : array(), isset($visa_surname) ? $visa_surname : array(), isset($visa_dob) ? $visa_dob : array(), isset($visa_gender) ? $visa_gender : array(), isset($visa_nationality) ? $visa_nationality : array(), isset($visa_country_birth) ? $visa_country_birth : array(), isset($visa_passport_nbr) ? $visa_passport_nbr : array(), isset($visa_passport_issuedate) ? $visa_passport_issuedate : array(), isset($visa_expiry_date) ? $visa_expiry_date : array(), isset($visa_departure_date) ? $visa_departure_date : array(), isset($visa_arrival_date) ? $visa_arrival_date : array(), isset($visa_port_arrival) ? $visa_port_arrival : array(), isset($visa_passport_front) ? $visa_passport_front: array(), isset($visa_photograph_visa) ? $visa_photograph_visa: array(), isset($visa_eticket_pdf) ? $visa_eticket_pdf : array());
        }, $visa_name, $visa_surname, $visa_dob, $visa_gender, $visa_nationality, $visa_country_birth, $visa_passport_nbr, $visa_passport_issuedate,$visa_expiry_date, $visa_departure_date, $visa_arrival_date, $visa_port_arrival,$visa_passport_front,$visa_photograph_visa,$visa_eticket_pdf);

        foreach ($result as $rs) 
        {
            if(isset($rs['visa_passport_front']))
            {
                $passprt = $rs['visa_passport_front'];
            }else{
                $passprt = '';
            }

            if(isset($rs['visa_photograph_visa']))
            {
                $photograph = $rs['visa_photograph_visa'];
            }else{
                $photograph = '';
            }

            if(isset($rs['visa_eticket_pdf']))
            {
                $eticket = $rs['visa_eticket_pdf'];
            }else{
                $eticket = '';
            }

            $VisaProcess = VisaApplication::create([
                                        'visa_id'               => $visa_id,
                                        'name'                  => $rs['name'],
                                        'surname'               => $rs['surname'],
                                        'dob'                   => $rs['dob'],
                                        'nationality'           => $rs['nationality'],
                                        'country_birth'         => $rs['country_birth'],
                                        'passport_nbr'          => $rs['passport_nbr'],
                                        'passport_issue_date'   => $rs['passport_issue_date'],
                                        'expiry_date'           => $rs['expiry_date'],
                                        'departure_date'        => $rs['departure_date'],
                                        'arrival_date'          => $rs['arrival_date'],
                                        'port_arrival'          => $rs['port_arrival'],
                                        'passport_front'        => $passprt,
                                        'photograph_visa'       => $photograph,
                                        'eticket_pdf'           => $eticket
            ]);

            $id = $VisaProcess->id;
            
        }

        return redirect('/visa_upload/'.$visa_id);
       
    }

    public function visa_upload($id)
    {
        $VisaProcess        = VisaProcess::find($id);

        $VisaApplication    = VisaApplication::where('visa_id',$id)->first();

        return view('web.visa_details')->with('VisaProcess', json_decode($VisaProcess['visa_process'], true))->with('destination',$VisaProcess->destination)->with('id',$id)->with('VisaApplication',$VisaApplication);
    } 

    

    

   
}
