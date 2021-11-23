<?php

// use App\SubjectCategory;

if (!function_exists('fareRules')) {

    function fareRules($id)
    {

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apitest.tripjack.com/fms/v1/farerule',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
				"id":"' . $id . '",
				"flowType":"SEARCH"
			  }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'apikey: ' . env("API_KEY") . ''
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        $fareRules = array();
        $fr = json_decode($response, true);
        if (!empty($fr['fareRule'])) {
            foreach ($fr['fareRule'] as $row) {
                $fareRules['policy'] = $row['fr']['NO_SHOW']['DEFAULT']['policyInfo'];
                $fareRules['dateChangePolicy'] = $row['fr']['DATECHANGE']['DEFAULT']['policyInfo'];
                $fareRules['cancellationPolicy'] = $row['fr']['CANCELLATION']['DEFAULT']['policyInfo'];
            }
        }
        return $fareRules;
    }
}

if (!function_exists('bookingDetails')) {

    function bookingDetails($id)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apitest.tripjack.com/fms/v1/review',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
  				"priceIds" : [' . $id . ']
			}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'apikey: ' . env("API_KEY") . ''
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response, true);
    }
}


if (!function_exists('seatMap')) {

    function seatMap($id)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apitest.tripjack.com/fms/v1/seat',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
    				"bookingId" : "' . $id . '"
  			}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'apikey: ' . env("API_KEY") . ''
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response, true);
    }

    if (!function_exists('flightTimings')) {

        function flightTimings($airlinesCode,$dt,$at)
        {
            $logo_details = DB::table('airlines')->where('airlines_code', $airlinesCode)->where('airline_status', 1)->first();
            $start_tym = explode("T",$dt );
            $start_strtotime = strtotime($start_tym[0] . ' ' . $start_tym[1]);
            $end_tym   = explode("T", $at);
            $end_strtotime = strtotime($end_tym[0] . ' ' . $end_tym[1]);
            $final_startdate = date_create($start_tym[0]);
            $final_enddate = date_create($end_tym[0]);
            return (['logo_details'=>$logo_details,'start_tym'=>$start_tym,'start_strtotime'=>$start_strtotime,'end_tym'=>$end_tym,'end_strtotime'=>$end_strtotime,'final_startdate'=>$final_startdate,'final_enddate'=>$final_enddate]);
        }
    }
}
