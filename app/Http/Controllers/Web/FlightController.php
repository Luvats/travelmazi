<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use App\Gallery;
use App\Offer;
use App\About;
use App\City;
use App\Airlines;
use App\Flightclass;
use App\FlightBooking;
use App\FlightRating;
use App\Models\Rating;

class FlightController extends Controller
{

    public function index(Request $request)
    {
        if(!empty($request->endtravelDate)){
            $input=$request->all();
            $input['startRoundTravelDate']=$request->travelDate;
            $input['endRoundTravelDate']=$request->endtravelDate;
            $input['class']=$request->cabinClass;
            unset($input['travelDate']);
            unset($input['cabinClass']);
            unset($input['endtravelDate']);
            $url=URL::to("/")."/round_trip?".http_build_query($input);
            return redirect($url);
        }
        $gallery                = Gallery::where('gallery_status', '1')->orderBy('id', 'desc')->get();
        $offer                  = Offer::where('offer_status', '1')->orderBy('id', 'desc')->limit(3)->get();
        $about                  = About::first();
        $from_cities            = City::where('city_status', '1')->get();
        $to_cities              = City::where('city_status', '1')->orderBy('id', 'desc')->get();
        $airlines_details       = Airlines::where('airline_status', 1)->get();
        $Flightclass            = Flightclass::where('flight_clss_status', '1')->orderBy('id', 'asc')->get();

        $adults                  = $request->adults;
        $children                  = $request->children;
        $infants                 = $request->infants;
        $hidden_one_way_total   = $request->hidden_one_way_total;
        $fromCityOrAirportCode  = $request->from_city;
        $toCityOrAirport        = $request->to_city;
        $show_date              = $request->travelDate;
        $finaltraveldate        = date_create($request->travelDate);
        $traveldatefinal        = date_format($finaltraveldate, 'Y-m-d');
        $cabinClass             = $request->cabinClass;
        $showtraveldate         = $finaltraveldate;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apitest.tripjack.com/fms/v1/air-search-all',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "searchQuery": {
                    "cabinClass": ' . $cabinClass . ',
                    "paxInfo": {
                        "ADULT": ' . $adults . ',
                        "CHILD": ' . $children . ',
                        "INFANT": ' . $infants . '
                    },
                    "routeInfos": [{
                        "fromCityOrAirport": {
                            "code": ' . $fromCityOrAirportCode . '
                        },
                        "toCityOrAirport": {
                                "code": ' . $toCityOrAirport . '
                            },
                            "travelDate": ' . $traveldatefinal . '
                        }],
                        "searchModifiers": {
                            "isDirectFlight": true,
                            "isConnectingFlight": false
                        }
                    }
                }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'apikey: ' . env("API_KEY") . ''
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        $all_flightdata = json_decode($response, true);

        $flight_ratings = array();
        // echo '<pre>'; print_r($all_flightdata); die;
        //get array to take ratings
        if (!empty($all_flightdata['searchResult']['tripInfos']['ONWARD'])) {
            foreach ($all_flightdata['searchResult']['tripInfos']['ONWARD'] as $row) {
                $flight_ratings[$row['sI'][0]['fD']['aI']['name'] . "-" . $row['sI'][0]['fD']['aI']['code'] . "-" . $row['sI'][0]['fD']['fN']] = FlightRating::where('flight_name', $row['sI'][0]['fD']['aI']['name'] . "-" . $row['sI'][0]['fD']['aI']['code'] . "-" . $row['sI'][0]['fD']['fN'])->avg('rate');
            }
        }
        // $flight_ratings_result=FlightRating::where($Ratings_where)->get();
        // foreach($flight_ratings_result as $row){
        //     $flight_ratings[$row->flight_name]=$row['rate'];
        // }

        // echo '<pre>'; print_r($flight_ratings); die;
        // die;
        // >fD->aI->name.'-'.$flight_details->sI[0]->fD->aI->code.'-'.$flight_details->sI[0]->fD->fN
        //     //fare rules
        //     $curl = curl_init();

        //     curl_setopt_array($curl, array(
        //         CURLOPT_URL => 'https://apitest.tripjack.com/fms/v1/farerule',
        //         CURLOPT_RETURNTRANSFER => true,
        //         CURLOPT_ENCODING => '',
        //         CURLOPT_MAXREDIRS => 10,
        //         CURLOPT_TIMEOUT => 0,
        //         CURLOPT_FOLLOWLOCATION => true,
        //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //         CURLOPT_CUSTOMREQUEST => 'POST',
        //         CURLOPT_POSTFIELDS => '{
        //             "id":"' . $row['totalPriceList'][0]['id'] . '",
        //             "flowType":"SEARCH"
        //         }',
        //         CURLOPT_HTTPHEADER => array(
        //             'Content-Type: application/json',
        //             'apikey: ' . env("API_KEY") . ''
        //         ),
        //     ));

        //     $response = curl_exec($curl);
        //     curl_close($curl);
        //     $fare_rules = json_decode($response, true);
        //     foreach ($fare_rules['fareRule'] as $row) {

        //         // echo '<pre>';
        //         // print_r($row);
        //     }
        // }
        // // die;



        $adult_fare = 0;
        $child_fare = 0;
        $infant_fare = 0;
        $flight_names = array();
        $min_flight_price = 0;
        $max_flight_price = 0;
        if (isset($all_flightdata['searchResult']['tripInfos'])) {
            foreach ($all_flightdata['searchResult']['tripInfos']['ONWARD'] as $key => $dt) {
                $stops = $dt['sI'][0]['stops'];
                $all_flightdata['searchResult']['tripInfos']['ONWARD'][$key]['stops'] = $stops;
                $flight_name = $dt['sI'][0]['fD']['aI']['name'];
                $flight_code = $dt['sI'][0]['fD']['aI']['code'];
                $all_flightdata['searchResult']['tripInfos']['ONWARD'][$key]['flight_code'] = $flight_code;
                $final_total_fare = 0;
                foreach ($dt['totalPriceList'] as $totalPriceListKey => $tpl) {

                    $adult_fare = $tpl['fd']['ADULT']['fC']['TF'];
                    $child_fare = isset($tpl['fd']['CHILD']) ? ($tpl['fd']['CHILD']['fC']['TF']) : 0;
                    $infant_fare = isset($tpl['fd']['INFANT']) ? ($tpl['fd']['INFANT']['fC']['TF']) : 0;

                    $total_fare = $adult_fare * $adults;
                    if (isset($tpl['fd']['CHILD'])) {
                        $total_fare = $total_fare + ($child_fare * $children);
                        $total_fare = isset($tpl['fd']['INFANT']) ? ($total_fare + ($infant_fare * $infants)) : $total_fare;
                    } else {
                        $total_fare = isset($tpl['fd']['INFANT']) ? ($total_fare + ($infant_fare * $infants)) : $total_fare;
                    }

                    //particular flight min and max price range to add attributes in dov fpr price filter
                    $min_price_range = ($totalPriceListKey == 0) ? $total_fare : (($min_price_range < $total_fare) ? $min_price_range : $total_fare);
                    $max_price_range = ($totalPriceListKey == 0) ? $total_fare : (($max_price_range > $total_fare) ? $min_price_range : $total_fare);

                    $final_total_fare = ($totalPriceListKey == 0) ? $total_fare : (($final_total_fare < $total_fare) ? $final_total_fare : $total_fare);
                    //all flights min and max price to add range in price filter
                    $min_flight_price = (($key == 0) && ($totalPriceListKey == 0)) ? $total_fare : (($min_flight_price < $total_fare) ? $min_flight_price : $total_fare);
                    $max_flight_price = (($key == 0) && ($totalPriceListKey == 0)) ? $total_fare : (($max_flight_price > $total_fare) ? $max_flight_price : $total_fare);
                }
                $all_flightdata['searchResult']['tripInfos']['ONWARD'][$key]['price_range'] = floor($min_price_range) . ' - ' . round($max_price_range);
                $all_flightdata['searchResult']['tripInfos']['ONWARD'][$key]['min_price'] = floor($min_price_range);

                $final_total_fare = round($final_total_fare, 0);
                setlocale(LC_MONETARY, 'en_IN');

                if (isset($flight_names[$flight_code])) {
                    $final_flight_price = (round($flight_names[$flight_code]['price']) < $final_total_fare) ? $flight_names[$flight_code]['price'] : $final_total_fare;
                    $flight_names[$flight_code]['count'] = $flight_names[$flight_code]['count'] + 1;
                    $flight_names[$flight_code]['price'] = $final_flight_price;
                } else {
                    $flight_names[$flight_code] = array('count' => 1, 'price' => $final_total_fare, 'name' => $flight_name);
                }
            }
        }


        return view('web.flight')->with('adult_fare', $adult_fare)->with('flight_ratings', $flight_ratings)->with('child_fare', $child_fare)->with('infant_fare', $infant_fare)->with('about', $about)->with('gallery', $gallery)->with('offer', $offer)->with('from_cities', $from_cities)->with('to_cities', $to_cities)->with('all_flightdata', $all_flightdata)->with('showtraveldate', $showtraveldate)->with('ADULT', $adults)->with('CHILD', $children)->with('INFANT', $infants)->with('fromCityOrAirportCode', $fromCityOrAirportCode)->with('toCityOrAirport', $toCityOrAirport)->with('airlines_details', $airlines_details)->with('economy', $cabinClass)->with('hidden_one_way_total', $hidden_one_way_total)->with('Flightclass', $Flightclass)->with('show_date', $show_date)->with('flight_names', $flight_names)->with('min_flight_price', floor($min_flight_price))->with('max_flight_price', ceil($max_flight_price));
    }


    public function roundtripflight_list(Request $request)
    {
        if(empty($request->endRoundTravelDate)){
            $input=$request->all();
            $input['travelDate']=$request->startRoundTravelDate;
            //$input['endRoundTravelDate']=$request->endtravelDate;
            $input['cabinClass']=$request->class;
            unset($input['startRoundTravelDate']);
            unset($input['endtravelDate']);
            unset($input['class']);
            $url=URL::to("/")."/flight_list?".http_build_query($input);
            return redirect($url);
        }
        //$input=$request->all();
        // $input->startRoundTravelDate=$request->travelDate;
        //echo '<pre>'; print_r($input); die;
        $gallery            = Gallery::where('gallery_status', '1')->orderBy('id', 'desc')->get();
        $offer              = Offer::where('offer_status', '1')->orderBy('id', 'desc')->limit(3)->get();
        $about              = About::first();
        $from_cities        = City::where('city_status', '1')->get();
        $to_cities          = City::where('city_status', '1')->orderBy('id', 'desc')->get();
        $airlines_details   = Airlines::where('airline_status', 1)->get();
        $Flightclass        = Flightclass::where('flight_clss_status', '1')->orderBy('id', 'asc')->get();

        $adults                     = $request->adults;
        $children                   = $request->children;
        $infants                    = $request->infants;
        $fromCityOrAirportCode      = $request->from_city;
        $toCityOrAirport            = $request->to_city;

        $traveldate                 = date_create($request->startRoundTravelDate);
        $startRoundTravelDate       = date_format($traveldate, "Y-m-d");
        $ReturntravelDate           = date_create($request->endRoundTravelDate);
        $endRoundTravelDate         = date_format($ReturntravelDate, "Y-m-d");
        
        
        $class                      = $request->class;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apitest.tripjack.com/fms/v1/air-search-all',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
  				"searchQuery": {
    				"cabinClass": ' . $class . ',
    				"paxInfo": {
      					"ADULT": ' . $adults . ',
	      				"CHILD": ' . $children . ',
	      				"INFANT": ' . $infants . '
    				},
    				"routeInfos": [
      				{
				        "fromCityOrAirport": {
				          "code": ' . $fromCityOrAirportCode . '
				        },
				        "toCityOrAirport": {
				          "code": ' . $toCityOrAirport . '
				        },
        				"travelDate": ' . $startRoundTravelDate . '
      				},
      				{
				        "fromCityOrAirport": {
				          "code": ' . $toCityOrAirport . '
				        },
				        "toCityOrAirport": {
				          "code": ' . $fromCityOrAirportCode . '
				        },
        				"travelDate": ' . $endRoundTravelDate . '
      				}],
				    "searchModifiers": {
				    	"isDirectFlight": true,
				        "isConnectingFlight": false
				    }
  				}
			}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'apikey: ' . env("API_KEY") . ''
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $all_flightdata = json_decode($response, true);
        
        $flight_ratings = array();
        //get array to take ratings
        if (!empty($all_flightdata['searchResult']['tripInfos'])) {
            $keys=array_keys($all_flightdata['searchResult']['tripInfos']);
            foreach($keys as $key){
            foreach ($all_flightdata['searchResult']['tripInfos'][$key] as $row) {
                    $flight_ratings[$key][$row['sI'][0]['fD']['aI']['name'] . "-" . $row['sI'][0]['fD']['aI']['code'] . "-" . $row['sI'][0]['fD']['fN']] = FlightRating::where('flight_name', $row['sI'][0]['fD']['aI']['name'] . "-" . $row['sI'][0]['fD']['aI']['code'] . "-" . $row['sI'][0]['fD']['fN'])->avg('rate');
            }
        }
        }
        // dd($flight_ratings);

        $from_flight_type_details = City::where('city_short_name', $fromCityOrAirportCode)->first();
        $to_flight_type_details   = City::where('city_short_name', $toCityOrAirport)->first();

        $from_flight_type = $from_flight_type_details->flight_type;
        $to_flight_type   = $to_flight_type_details->flight_type;

        $to_city_name        = $to_flight_type_details->city_name;
        $from_city_name      = $from_flight_type_details->city_name;
        $flight_names = array();
        $min_flight_price = 0;
        $max_flight_price = 0;
        if (isset($all_flightdata['searchResult']['tripInfos'])) {
            $tripInfos = $all_flightdata['searchResult']['tripInfos'];
            foreach ($tripInfos as $infoKey => $tripInfo) {
                if (!empty($tripInfo)) {
                    foreach ($tripInfo as $key => $dt) {

                        $stops = $dt['sI'][0]['stops'];
                        $all_flightdata['searchResult']['tripInfos'][$infoKey][$key]['stops'] = $stops;
                        $flight_name = $dt['sI'][0]['fD']['aI']['name'];
                        $flight_code = $dt['sI'][0]['fD']['aI']['code'];
                        $all_flightdata['searchResult']['tripInfos'][$infoKey][$key]['flight_code'] = $flight_code;
                        $final_total_fare = 0;
                        foreach ($dt['totalPriceList'] as $totalPriceListKey => $tpl) {
                            // $adult_fare = $tpl['fd']['ADULT']['fC']['TF'] * $adults;
                            // $child_fare = isset($tpl['fd']['CHILD']) ? ($tpl['fd']['CHILD']['fC']['TF'] * $children) : 0;
                            // $infant_fare = isset($tpl['fd']['INFANT']) ? ($tpl['fd']['INFANT']['fC']['TF'] * $infants) : 0;
                            $adult_fare = $tpl['fd']['ADULT']['fC']['TF'];
                            $child_fare = isset($tpl['fd']['CHILD']) ? ($tpl['fd']['CHILD']['fC']['TF']) : 0;
                            $infant_fare = isset($tpl['fd']['INFANT']) ? ($tpl['fd']['INFANT']['fC']['TF']) : 0;

                            $total_fare = $adult_fare;
                            if (isset($tpl['fd']['CHILD'])) {
                                $total_fare = $total_fare + $child_fare;
                                $total_fare = isset($tpl['fd']['INFANT']) ? ($total_fare + $infant_fare) : $total_fare;
                            } else {
                                $total_fare = isset($tpl['fd']['INFANT']) ? ($total_fare + $infant_fare) : $total_fare;
                            }

                            //particular flight min and max price range to add attributes in dov fpr price filter
                            $min_price_range = ($totalPriceListKey == 0) ? $total_fare : (($min_price_range < $total_fare) ? $min_price_range : $total_fare);
                            $max_price_range = ($totalPriceListKey == 0) ? $total_fare : (($max_price_range > $total_fare) ? $min_price_range : $total_fare);

                            $final_total_fare = ($totalPriceListKey == 0) ? $total_fare : (($final_total_fare < $total_fare) ? $final_total_fare : $total_fare);
                            //all flights min and max price to add range in price filter
                            $min_flight_price = (($key == 0) && ($totalPriceListKey == 0)) ? $total_fare : (($min_flight_price < $total_fare) ? $min_flight_price : $total_fare);
                            $max_flight_price = (($key == 0) && ($totalPriceListKey == 0)) ? $total_fare : (($max_flight_price > $total_fare) ? $max_flight_price : $total_fare);
                        }
                        $all_flightdata['searchResult']['tripInfos'][$infoKey][$key]['price_range'] = floor($min_price_range) . ' - ' . round($max_price_range);
                        $all_flightdata['searchResult']['tripInfos'][$infoKey][$key]['min_price'] = floor($min_price_range);

                        $final_total_fare = round($final_total_fare, 0);
                        setlocale(LC_MONETARY, 'en_IN');

                        if (isset($flight_names[$flight_code])) {
                            $final_flight_price = (round($flight_names[$flight_code]['price']) < $final_total_fare) ? $flight_names[$flight_code]['price'] : $final_total_fare;
                            $flight_names[$flight_code]['count'] = $flight_names[$flight_code]['count'] + 1;
                            $flight_names[$flight_code]['price'] = $final_flight_price;
                        } else {
                            $flight_names[$flight_code] = array('count' => 1, 'price' => $final_total_fare, 'name' => $flight_name);
                        }
                    }
                }
            }
        }
        // echo '<pre>'; print_r($min_flight_price.",".$max_flight_price); die;
        if ($from_flight_type == 'Domestic' && $to_flight_type == 'Domestic') {
            $view = 'web.domestic_round_flight';
        } else {
            $view = 'web.domestic_round_flight';
            // $view = 'web.round_flight';
        }
        // die("here".$view);
        return view($view)->with('about', $about)->with('flight_ratings', $flight_ratings)->with('showtraveldate', $traveldate)->with('gallery', $gallery)->with('show_dept_date', $endRoundTravelDate)->with('offer', $offer)->with('show_return_date', $endRoundTravelDate)->with('from_cities', $from_cities)->with('to_cities', $to_cities)->with('all_flightdata', $all_flightdata)->with('startRoundTravelDate', $startRoundTravelDate)->with('showreturndate', $endRoundTravelDate)->with('ADULT', $adults)->with('CHILD', $children)->with('INFANT', $infants)->with('fromCityOrAirportCode', $fromCityOrAirportCode)->with('toCityOrAirport', $toCityOrAirport)->with('airlines_details', $airlines_details)->with('Flightclass', $Flightclass)->with('class', $class)->with('startRoundTravelDate', $request->startRoundTravelDate)->with('endRoundTravelDate', $request->endRoundTravelDate)->with('to_city_name', $to_city_name)->with('from_city_name', $from_city_name)->with('flight_names', $flight_names)->with('min_flight_price', floor($min_flight_price))->with('max_flight_price', ceil($max_flight_price));
    }


    public function booking_success(Request $request)
    {

        if (Auth::check()) {
            $flightbooking = FlightBooking::where(['user_id' => Auth::user()->id])->orderBy('id', 'desc')->get();
            return view('web.booking_success', compact('flightbooking'));
        } else {
            return redirect('login');
        }
    }


    public function mulitcity_flight_list(Request $request)
    {
        $gallery            = Gallery::where('gallery_status', '1')->orderBy('id', 'desc')->get();
        $offer              = Offer::where('offer_status', '1')->orderBy('id', 'desc')->limit(3)->get();
        $about              = About::first();
        $from_cities        = City::where('city_status', '1')->get();
        $to_cities          = City::where('city_status', '1')->orderBy('id', 'desc')->get();
        $airlines_details   = Airlines::where('airline_status', 1)->get();
        $Flightclass        = Flightclass::where('flight_clss_status', '1')->orderBy('id', 'asc')->get();

        $adults             = $request->adults[0];
        $children           = $request->children[0];
        $infants            = $request->infants[0];
        $fromCityOrAirportCode   = $request->mulitcityFromCity[0];
        $toCityOrAirport         = $request->mulitcityToCity[0];
        $traveldate         = date_create($request->get('multicityTravelDate')[0]);
        $ReturntravelDate   = date_create($request->get('multicityTravelDate')[0]);
        $cabinClass         = $request->get('cabinClass');

        $showtraveldate      = date_format($traveldate, "Y-m-d");
        $showreturndate      = date_format($ReturntravelDate, "Y-m-d");

        $searchQuery =
            '{
            "searchQuery": {
                "cabinClass": "' . $request->get('cabinClass') . '",
                "paxInfo": {
                    "ADULT": "' . $request->get('adults')[0] . '",
                    "CHILD": "' . $request->get('children')[0] . '",
                    "INFANT": "' . $request->get('infants')[0] . '"
                },
                "routeInfos": [';
        for ($i = 0; $i < count($request->get('mulitcityFromCity')); $i++) {
            if (!empty($request->get('mulitcityFromCity')[$i])) {
                $dt = date_create($request->get('multicityTravelDate')[$i]);
                $multicityTravelDate = date_format($dt, "Y-m-d");


                $searchQuery = $searchQuery . '{
                    "fromCityOrAirport": {
                        "code": "' . $request->get('mulitcityFromCity')[$i] . '"
                    },
                    "toCityOrAirport": {
                        "code": "' . $request->get('mulitcityToCity')[$i] . '"
                    },
                    "travelDate": "' . $multicityTravelDate . '"
                },';
            }
        }
        $searchQuery = rtrim($searchQuery, ',') . '],
                "searchModifiers": {
                    "isDirectFlight": true,
                    "isConnectingFlight": false
                }
            }
        }';

        // die($searchQuery);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apitest.tripjack.com/fms/v1/air-search-all',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $searchQuery,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'apikey: ' . env("API_KEY") . ''
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $all_flightdata = json_decode($response, true);
        // echo '<pre>'; var_dump($all_flightdata); die;

        $flight_ratings = array();
        //get array to take ratings
        if (!empty($all_flightdata['searchResult']['tripInfos'])) {
            $keys=array_keys($all_flightdata['searchResult']['tripInfos']);
            foreach($keys as $key){
            foreach ($all_flightdata['searchResult']['tripInfos'][$key] as $row) {
                    $flight_ratings[$row['sI'][0]['fD']['aI']['name'] . "-" . $row['sI'][0]['fD']['aI']['code'] . "-" . $row['sI'][0]['fD']['fN']] = FlightRating::where('flight_name', $row['sI'][0]['fD']['aI']['name'] . "-" . $row['sI'][0]['fD']['aI']['code'] . "-" . $row['sI'][0]['fD']['fN'])->avg('rate');
            }
        }
        }

        $flight_names = array();
        $min_flight_price = 0;
        $max_flight_price = 0;
        if (isset($all_flightdata['searchResult']['tripInfos'])) {
            $tripInfos = $all_flightdata['searchResult']['tripInfos'];
            foreach ($tripInfos as $infoKey => $tripInfo) {
                if (!empty($tripInfo)) {
                    foreach ($tripInfo as $key => $dt) {
                        $stops = $dt['sI'][0]['stops'];
                        $all_flightdata['searchResult']['tripInfos'][$infoKey][$key]['stops'] = $stops;
                        $flight_name = $dt['sI'][0]['fD']['aI']['name'];
                        $flight_code = $dt['sI'][0]['fD']['aI']['code'];
                        $all_flightdata['searchResult']['tripInfos'][$infoKey][$key]['flight_code'] = $flight_code;
                        $final_total_fare = 0;
                        foreach ($dt['totalPriceList'] as $totalPriceListKey => $tpl) {
                            $adult_fare = $tpl['fd']['ADULT']['fC']['TF'] * $adults;
                            $child_fare = isset($tpl['fd']['CHILD']) ? ($tpl['fd']['CHILD']['fC']['TF'] * $children) : 0;
                            $infant_fare = isset($tpl['fd']['INFANT']) ? ($tpl['fd']['INFANT']['fC']['TF'] * $infants) : 0;

                            $total_fare = $adult_fare;
                            if (isset($tpl['fd']['CHILD'])) {
                                $total_fare = $total_fare + $child_fare;
                                $total_fare = isset($tpl['fd']['INFANT']) ? ($total_fare + $infant_fare) : $total_fare;
                            } else {
                                $total_fare = isset($tpl['fd']['INFANT']) ? ($total_fare + $infant_fare) : $total_fare;
                            }

                            //particular flight min and max price range to add attributes in dov fpr price filter
                            $min_price_range = ($totalPriceListKey == 0) ? $total_fare : (($min_price_range < $total_fare) ? $min_price_range : $total_fare);
                            $max_price_range = ($totalPriceListKey == 0) ? $total_fare : (($max_price_range > $total_fare) ? $min_price_range : $total_fare);

                            $final_total_fare = ($totalPriceListKey == 0) ? $total_fare : (($final_total_fare < $total_fare) ? $final_total_fare : $total_fare);
                            //all flights min and max price to add range in price filter
                            $min_flight_price = (($key == 0) && ($totalPriceListKey == 0)) ? $total_fare : (($min_flight_price < $total_fare) ? $min_flight_price : $total_fare);
                            $max_flight_price = (($key == 0) && ($totalPriceListKey == 0)) ? $total_fare : (($max_flight_price > $total_fare) ? $max_flight_price : $total_fare);
                        }
                        $all_flightdata['searchResult']['tripInfos'][$infoKey][$key]['price_range'] = floor($min_price_range) . ' - ' . round($max_price_range);
                        $all_flightdata['searchResult']['tripInfos'][$infoKey][$key]['min_price'] = floor($min_price_range);

                        $final_total_fare = round($final_total_fare, 0);
                        setlocale(LC_MONETARY, 'en_IN');

                        if (isset($flight_names[$flight_code])) {
                            $final_flight_price = (round($flight_names[$flight_code]['price']) < $final_total_fare) ? $flight_names[$flight_code]['price'] : $final_total_fare;
                            $flight_names[$flight_code]['count'] = $flight_names[$flight_code]['count'] + 1;
                            $flight_names[$flight_code]['price'] = $final_flight_price;
                        } else {
                            $flight_names[$flight_code] = array('count' => 1, 'price' => $final_total_fare, 'name' => $flight_name);
                        }
                    }
                }
            }
        }
        return view('web.multicity_flight')->with('about', $about)->with('flight_ratings', $flight_ratings)->with('gallery', $gallery)->with('offer', $offer)->with('from_cities', $from_cities)->with('to_cities', $to_cities)->with('all_flightdata', $all_flightdata)->with('showtraveldate', $showtraveldate)->with('traveldate', $showtraveldate)->with('showreturndate', $showreturndate)->with('ADULT', $adults)->with('CHILD', $children)->with('INFANT', $infants)->with('fromCityOrAirportCode', $fromCityOrAirportCode)->with('toCityOrAirport', $toCityOrAirport)->with('airlines_details', $airlines_details)->with('Flightclass', $Flightclass)->with('cabinClass', $cabinClass)->with('show_date', $request->get('multicityTravelDate')[0])->with('flight_names', $flight_names)->with('max_flight_price', $max_flight_price)->with('min_flight_price', $min_flight_price);
    }


    public function get_review_details(Request $request){
        if($request->session()->has($request->type)){
            $request->session()->forget($request->type);
        }
        $request->session()->push($request->type,fareRules($request->id));
        // return true;
        // return json_encode(fareRules($request->id));
    }
}
