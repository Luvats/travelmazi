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
use App\CabSearch;
use App\Offer;
use App\About;
use Session;
use Date;
use Carbon\Carbon;
use DateTime;

class CabController extends Controller
{
    public function index(Request $request)
    {
    	$source             = $request->source;
    	$source_lat         = $request->source_lat;
    	$source_lng         = $request->source_lng;
    	$destination        = $request->destination;
    	$dest_lat           = $request->dest_lat;
    	$dest_lng           = $request->dest_lng;

        $finaldeparture     = date_create($request->cabDeparture);

        $departure          = date_format($finaldeparture,'Y-m-d');

    	//$departure          = $request->cabDeparture;	 
        $cab_pickup_time    = $request->cab_pickup_time;     
        $cab_dropup_time    = $request->cab_dropup_time;     

    	$search = CabSearch::create([
    							'source'         => $source,
    							'source_lat'     => $source_lat,
    							'source_lng'     => $source_lng,
    							'destination'    => $destination,
    							'dest_lat'       => $dest_lat,
    							'dest_lng'       => $dest_lng,
    							'departure'      => $departure,
                                'pickup_time'    => $cab_pickup_time,
                                'drop_time'      => $cab_dropup_time,
                                'search_type'    => 'one-way'

    	]);

    	return redirect()->route('mazicab');
    }

    public function CabSearchRound(Request $request)
    {
        $source             = $request->source;
        $source_lat         = $request->lat_pickup;
        $source_lng         = $request->lng_pickup;
        $destination        = $request->destination;
        $dest_lat           = $request->dest_lat_drop;
        $dest_lng           = $request->dest_lng_drop;
        //$departure          = $request->value_from_start_date; 
        $finaldeparture     = date_create($request->value_from_start_date);

        $departure          = date_format($finaldeparture,'Y-m-d');

        //$return_date        = $request->value_from_end_date;
        $finalreturn_date     = date_create($request->value_from_end_date);

        $return_date          = date_format($finalreturn_date,'Y-m-d');    
        $cab_pickup_time    = $request->cab_pickup_time;     
        $cab_dropup_time    = $request->cab_dropup_time;     

        $search = CabSearch::create([
                                'source'         => $source,
                                'source_lat'     => $source_lat,
                                'source_lng'     => $source_lng,
                                'destination'    => $destination,
                                'dest_lat'       => $dest_lat,
                                'dest_lng'       => $dest_lng,
                                'departure'      => $departure,
                                'return_date'    => $return_date,
                                'pickup_time'    => $cab_pickup_time,
                                'drop_time'      => $cab_dropup_time,
                                'search_type'    => 'round-trip'

        ]);

        return redirect('http://arthtechsolutions.com/mazicab/');
    }


}
