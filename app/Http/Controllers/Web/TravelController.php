<?php
namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TravelController extends Controller
{
	//Get one way travel details
	public function index(Request $request)
	{
		if (!Auth::check()) {
			$request->session()->forget('redirect_back_url');
			$request->session()->push('redirect_back_url', url()->full());
			return redirect('login');
		}

		$fareRules=fareRules($request->id);
		$booking_details=bookingDetails('"'.$request->id.'"');
		$countryPhoneCodes = getCountriesMobileCodes();
		
		$request->session()->forget('api_booking_details');
		if (!empty($booking_details['tripInfos'])) {
			$request->session()->push('api_booking_details', $booking_details);
		}
		return view('web.traveller.oneway', compact('booking_details', 'countryPhoneCodes', 'fareRules'));
	}

	
	//Get return travel details
	public function return_traveller(Request $request)
	{
		if (!Auth::check()) {
			$request->session()->forget('redirect_back_url');
			$request->session()->push('redirect_back_url', url()->full());
			return redirect('login');
		}

		$booking_details=bookingDetails('"'.$request['ONWARD'] . '","' . $request['RETURN'].'"');
		$fareRules['ONWARD']=fareRules($request['ONWARD']);
		$fareRules['RETURN']=fareRules($request['RETURN']);

		if ($booking_details['status']['httpStatus'] == 404) {
			echo "Sorry selected pair is not avaialble select again.<br>";
			if (!empty($request->session()->get('redirect_back_url')[0])) {
				echo "<a href='" . $request->session()->forget('redirect_back_url')[0] . "'>Go back</a>";
			}else{
				echo "<a href='" . url()->previous() . "'>Go back</a>";
			}
			die();
		}
		
		$request->session()->forget('api_booking_details');
		if (!empty($booking_details['tripInfos'])) {
			$request->session()->push('api_booking_details', $booking_details);
		}
		
		$countryPhoneCodes = getCountriesMobileCodes();
		return view('web.traveller.return', compact('booking_details', 'countryPhoneCodes','fareRules'));
	}


	//Get multicity travel details
	public function multicity_traveller(Request $request)
	{
		// echo '<pre>'; print_r($request->all()); die;
		if (!Auth::check()) {
			$request->session()->forget('redirect_back_url');
			$request->session()->push('redirect_back_url', url()->full());
			return redirect('login');
		}

		$searchQuery = '';
		foreach ($request->price as $row) {
			$searchQuery = $searchQuery . '"' . $row . '",';
		}
		// echo '<pre>'; print_r(count($request->price)-1); die;
		foreach (range(array_key_first($request->price),count($request->price)-1) as $row) {
			// echo $row;
			$fareRules[$row]=fareRules($request->price[$row]);
		}
		$booking_details=bookingDetails(rtrim($searchQuery, ','));
		
		if ($booking_details['status']['httpStatus'] == 404) {
			echo "Sorry selected pair is not avaialble select again.<br>";

			if (!empty($request->session()->get('redirect_back_url')[0])) {
				echo "<a href='" . $request->session()->forget('redirect_back_url')[0] . "'>Go back</a>";
			}else{
				echo "<a href='" . url()->previous() . "'>Go back</a>";
			}
			die();
		}
		
		$request->session()->forget('api_booking_details');
		if (!empty($booking_details['tripInfos'])) {
			$request->session()->push('api_booking_details', $booking_details);
		}

		$countryPhoneCodes = getCountriesMobileCodes();
		// die("here");
		return view('web.traveller.multicity', compact('booking_details', 'countryPhoneCodes','fareRules'));
	}


	public function submit_traveller_details(Request $request)
	{
		$input = $request->all();
		unset($input['_token']);
		$input['flight_type']="ONWARD";
		$request->session()->forget('booking_details');
		if (!empty($input)) {
			$request->session()->push('booking_details', $input);
		}

		$request->session()->forget('max_seats');
		if (!empty($request->child)) {
			$request->session()->push('max_seats', count($request->adult) + count($request->child));
		} else {
			$request->session()->push('max_seats', count($request->adult));
		}
		
		return redirect()->route('seat-map', [$request->bookingId]);
	}


	public function submitReturnTravellerDetails(Request $request)
	{
		$input = $request->all();
		unset($input['_token']);
		$input['flight_type']="RETURN";
		$request->session()->forget('booking_details');
		if (!empty($input)) {
			$request->session()->push('booking_details', $input);
		}
		$request->session()->forget('max_seats');
		if (!empty($request->child)) {
			$request->session()->push('max_seats', count($request->adult) + count($request->child));
		} else {
			$request->session()->push('max_seats', count($request->adult));
		}
		
		return redirect()->route('return-seat-map', [$request->bookingId]);
	}


	

	public function submitMulticityTravellerDetails(Request $request)
	{
		// echo '<pre>'; var_dump($request->all()); die;
		$input = $request->all();
		unset($input['_token']);
		$input['flight_type']="MULTICITY";
		$request->session()->forget('booking_details');
		if (!empty($input)) {
			$request->session()->push('booking_details', $input);
		}
		$request->session()->forget('max_seats');
		if (!empty($request->child)) {
			$request->session()->push('max_seats', count($request->adult) + count($request->child));
		} else {
			$request->session()->push('max_seats', count($request->adult));
		}
		
		return redirect()->route('multicity-seat-map', [$request->bookingId]);
	}


	public function getSeatMap($id, Request $request)
	{
		
		$seatmap_details = seatMap($id);
		
		$baggages = array();
		$result['baggages_amount'] = 0;
		
		if (!empty($request->session()->get('booking_details')[0]['baggages'])) {
			foreach ($request->session()->get('api_booking_details')[0]['tripInfos'][0]['sI'][0]['ssrInfo']['BAGGAGE'] as $row) {
				$baggages[$row['code']] = $row['amount'];
			}
			foreach ($request->session()->get('booking_details')[0]['baggages'] as $row) {
				$result['baggages_amount'] += $baggages[$row];
			}
		}
		$request->session()->push('baggages_amount',$result['baggages_amount']);
		
		$meals = array();
		$result['meals_amount'] = 0;
		
		if (!empty($request->session()->get('booking_details')[0]['meals'])) {
			foreach ($request->session()->get('api_booking_details')[0]['tripInfos'][0]['sI'][0]['ssrInfo']['MEAL'] as $row) {
				$meals[$row['code']] = $row['amount'];
			}
			foreach ($request->session()->get('booking_details')[0]['meals'] as $row) {
				$result['meals_amount'] += $meals[$row];
			}
		}
		$request->session()->push('meals_amount',$result['meals_amount']);
		if (empty($seatmap_details['tripSeatMap']['tripSeat']) && empty($request->session()->get('booking_details')[0])) {
			return back();
		}
		return view('web.seat_map')->with('seatmap_details', $seatmap_details)->with('max_seats', $request->session()->get('max_seats')[0])->with('totalFare', $request->session()->get('api_booking_details')[0]['totalPriceInfo']['totalFareDetail']['fC']['TF'])->with('result',$result);
	}


	public function getReturnSeatMap($id, Request $request)
	{
		// echo '<pre>'; print_r($request->session()->get('booking_details')); die;
		$seatmap_details = seatMap($id);
		
		$baggages = array();
		$result['baggages_amount'] = 0;
		
		if (!empty($request->session()->get('booking_details')[0]['baggages'][0])) {
			foreach ($request->session()->get('api_booking_details')[0]['tripInfos'][0]['sI'][0]['ssrInfo']['BAGGAGE'] as $row) {
				$baggages[$row['code']] = $row['amount'];
			}
			foreach ($request->session()->get('booking_details')[0]['baggages'][0] as $row) {
				$result['baggages_amount'] += $baggages[$row];
			}
		}
		if (!empty($request->session()->get('booking_details')[0]['baggages'][1])) {
			foreach ($request->session()->get('api_booking_details')[0]['tripInfos'][1]['sI'][0]['ssrInfo']['BAGGAGE'] as $row) {
				$baggages[$row['code']] = $row['amount'];
			}
			foreach ($request->session()->get('booking_details')[0]['baggages'][1] as $row) {
				$result['baggages_amount'] += $baggages[$row];
			}
		}

		$request->session()->forget('baggages_amount');
		$request->session()->push('baggages_amount',$result['baggages_amount']);
		$meals = array();
		$result['meals_amount'] = 0;
		
		if (!empty($request->session()->get('booking_details')[0]['meals'][0])) {
			foreach ($request->session()->get('api_booking_details')[0]['tripInfos'][0]['sI'][0]['ssrInfo']['MEAL'] as $row) {
				$meals[$row['code']] = $row['amount'];
			}
			foreach ($request->session()->get('booking_details')[0]['meals'][0] as $row) {
				$result['meals_amount'] += $meals[$row];
			}
		}
		if (!empty($request->session()->get('booking_details')[0]['meals'][1])) {
			foreach ($request->session()->get('api_booking_details')[0]['tripInfos'][1]['sI'][0]['ssrInfo']['MEAL'] as $row) {
				$meals[$row['code']] = $row['amount'];
			}
			foreach ($request->session()->get('booking_details')[0]['meals'][1] as $row) {
				$result['meals_amount'] += $meals[$row];
			}
		}
		$request->session()->forget('meals_amount');
		$request->session()->push('meals_amount',$result['meals_amount']);

		if (empty($seatmap_details['tripSeatMap']['tripSeat']) && empty($request->session()->get('booking_details')[0])) {
			return back();
		}
		return view('web.seat_map')->with('seatmap_details', $seatmap_details)->with('max_seats', $request->session()->get('max_seats')[0])->with('totalFare', $request->session()->get('api_booking_details')[0]['totalPriceInfo']['totalFareDetail']['fC']['TF'])->with('result',$result);
	}


	public function getMulticitySeatMap($id, Request $request)
	{
		// echo '<pre>'; print_r($request->session()->get('booking_details')[0]['baggages']); die;
		$seatmap_details = seatMap($id);
		$numberOfFlights=count($request->session()->get('api_booking_details')[0]['tripInfos']);
		$result['meals_amount'] =0;
		$result['baggages_amount'] = 0;

		foreach(range(0,$numberOfFlights) as $i){
			if (!empty($request->session()->get('booking_details')[0]['baggages'][$i])) {
				foreach ($request->session()->get('api_booking_details')[0]['tripInfos'][$i]['sI'][0]['ssrInfo']['BAGGAGE'] as $row) {
					$baggages[$row['code']] = $row['amount'];
				}
				foreach ($request->session()->get('booking_details')[0]['baggages'][$i] as $row) {
					$result['baggages_amount'] += $baggages[$row];
				}
			}
		}
		foreach(range(0,$numberOfFlights) as $i){
			if (!empty($request->session()->get('booking_details')[0]['meals'][$i])) {
				foreach ($request->session()->get('api_booking_details')[0]['tripInfos'][$i]['sI'][0]['ssrInfo']['MEAL'] as $row) {
					$meals[$row['code']] = $row['amount'];
				}
				foreach ($request->session()->get('booking_details')[0]['meals'][$i] as $row) {
					$result['meals_amount'] += $meals[$row];
				}
			}
		}
		
		// if (!empty($request->session()->get('booking_details')[0]['baggages'][1])) {
		// 	foreach ($request->session()->get('api_booking_details')[0]['tripInfos'][1]['sI'][0]['ssrInfo']['BAGGAGE'] as $row) {
		// 		$baggages[$row['code']] = $row['amount'];
		// 	}
		// 	foreach ($request->session()->get('booking_details')[0]['baggages'][1] as $row) {
		// 		$result['baggages_amount'] += $baggages[$row];
		// 	}
		// }

		$request->session()->forget('baggages_amount');
		$request->session()->push('baggages_amount',$result['baggages_amount']);
		$meals = array();
		$result['meals_amount'] = 0;
		
		if (!empty($request->session()->get('booking_details')[0]['meals'][0])) {
			foreach ($request->session()->get('api_booking_details')[0]['tripInfos'][0]['sI'][0]['ssrInfo']['MEAL'] as $row) {
				$meals[$row['code']] = $row['amount'];
			}
			foreach ($request->session()->get('booking_details')[0]['meals'][0] as $row) {
				$result['meals_amount'] += $meals[$row];
			}
		}
		if (!empty($request->session()->get('booking_details')[0]['meals'][1])) {
			foreach ($request->session()->get('api_booking_details')[0]['tripInfos'][1]['sI'][0]['ssrInfo']['MEAL'] as $row) {
				$meals[$row['code']] = $row['amount'];
			}
			foreach ($request->session()->get('booking_details')[0]['meals'][1] as $row) {
				$result['meals_amount'] += $meals[$row];
			}
		}
		$request->session()->forget('meals_amount');
		$request->session()->push('meals_amount',$result['meals_amount']);

		if (empty($seatmap_details['tripSeatMap']['tripSeat']) && empty($request->session()->get('booking_details')[0])) {
			return back();
		}
		return view('web.seat_map')->with('seatmap_details', $seatmap_details)->with('max_seats', $request->session()->get('max_seats')[0])->with('totalFare', $request->session()->get('api_booking_details')[0]['totalPriceInfo']['totalFareDetail']['fC']['TF'])->with('result',$result)->with('booking_id',$id);
	}
	
}