<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Web\IndexController@index')->name('/');
Route::get('/flight_list','Web\FlightController@index');
Route::get('/hotel_list','Web\HotelController@index2');
Route::post('/get-review-details','Web\FlightController@get_review_details')->name('get-review-details');
Route::get('/round_trip','Web\FlightController@roundtripflight_list');
Route::get('/mulitcity-flight-list','Web\FlightController@mulitcity_flight_list');
Route::get('/return-traveller','Web\TravelController@return_traveller')->name('return-traveller');
Route::get('/multicity-traveller','Web\TravelController@multicity_traveller')->name('multicity-traveller');


Route::get('flight-ratings','Web\FlightRatingController@index')->name('flight_ratings_index');
Route::get('flight-rating/{booking_id?}/{flignt_name?}','Web\FlightRatingController@show')->name('flight_ratings_show');
Route::get('flight-ratings-create','Web\FlightRatingController@create')->name('flight_ratings_create');
Route::post('flight-ratings','Web\FlightRatingController@store')->name('flight_ratings_store');
Route::get('flight-ratings-edit/{id}','Web\FlightRatingController@edit')->name('flight_ratings_edit');
Route::patch('flight-ratings/update/','Web\FlightRatingController@update')->name('flight_ratings_update');
Route::delete('flight-ratings/delete/{id}','Web\FlightRatingController@destroy')->name('flight_ratings_delete');


Route::post('/process-payment','Web\FlightBookingController@payment_process')->name('process-payment');
Route::get('/bookings','Web\FlightController@booking_success')->name('bookings');
Route::get('/booking-show/{booking_id}','Web\FlightBookingController@booking_show')->name('booking-show');
Route::get('/download-ticket/{booking_id}','Web\FlightBookingController@download_ticket')->name('download-ticket');


Route::get('login/google', 'Auth\LoginController@redirectGoogle');
Route::get('google-callback', 'Web\IndexController@handleGoogleCallback');

Route::post('/multi_city_flight','Web\FlightController@multi_city_flight');
Route::get('offer', 'Web\OfferController@index');
Route::get('CabSearch', 'Web\CabController@index');
Route::get('CabSearchRound', 'Web\CabController@CabSearchRound');
Route::get('about', 'Web\AboutController@index');
Route::get('contact', 'Web\ContactController@index');
Route::get('traveller', 'Web\TravelController@index');
Route::post('/traveller_details', 'Web\TravelController@submit_traveller_details')->name('traveller_details');
Route::post('/return-traveller-details', 'Web\TravelController@submitReturnTravellerDetails')->name('return-traveller-details');
Route::post('/multicity-traveller-details', 'Web\TravelController@submitMulticityTravellerDetails')->name('multicity-traveller-details');
// Route::get('roundflight_book_now/{id}', 'Web\TravelController@roundflight_book_now');
Route::get('seat-map/{id}','Web\TravelController@getSeatMap')->name('seat-map');
Route::get('return-seat-map/{id}','Web\TravelController@getReturnSeatMap')->name('return-seat-map');
Route::get('multicity-seat-map/{id}','Web\TravelController@getMulticitySeatMap')->name('multicity-seat-map');
Route::post('signup','Web\IndexController@signup')->name('signup');
Route::post('weblogin','Web\IndexController@weblogin')->name('weblogin');
Route::get('logout','Web\IndexController@doLogout');
Route::post('otp_verification','Web\IndexController@otp_verification')->name('otp_verification');

/******************************************
	VISA SEARCH 
******************************************/
Route::post('/visa_search','Web\VisaController@index');
Route::post('/visa_proceed','Web\VisaController@visa_proceed')->name('visa_proceed');
Route::get('/visa_upload/{id}','Web\VisaController@visa_upload');

Route::get('payment', function () {
    return view('web.payment');
});

// Route::get('uploadVisaMain/{id}', function(){
//     return view('web.visa.uploadVisaMain');
// });

Route::get('uploadVisaMain/{id}','Web\VisaController@uploadVisaMain');
Route::post('/visa_application_upload','Web\VisaController@visa_application_upload');

Route::get('hotels', function () {
    return view('web.hotels');
});
Route::get('visaTerms', function () {
    return view('web.visa.visaTerms');
});




// Route::get('traveller', function () {
//     return view('web.traveller');
// });

Route::get('single-hotels', function () {
    return view('web.single-hotels');
});
Route::get('holiday', function () {
    return view('web.holiday');
});



// Route::get('visa_detail', function(){
//     return view('web.visa_details');
// });

Route::get('visa', function () {
    return view('web.visa');
});



Route::get('passport', function () {
    return view('web.passport');
});

Route::get('holiday_booking', function () {
    return view('web.holiday_booking');
});
Route::get('holiday_details', function () {
    return view('web.holiday_details');
});
Route::get('car_list', function () {
    return view('web.car_list');
});
Route::get('single_car', function () {
    return view('web.single_car');
});

Route::get('deals', function () {
    return view('web.deals');
});

Route::get('admin/login', function(){
    return view('auth.login');
});

Route::get('mazicab', function () {
    return view('web.mazicab');
})->name('mazicab');

Route::get('seatmap', function () {
    return view('web.seatmap');
});




Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('admin/profile', 'Admin\ProfileController@index');
    Route::post('admin/profileUpdate', 'Admin\ProfileController@profileUpdate');
    Route::any('admin/change_pswd', 'Admin\ProfileController@changepswd');
    
    
    Route::any('admin/about', 'Admin\AboutController@index');
    
    Route::any('admin/blogs', 'Admin\BlogController@index');
    Route::any('admin/blog/create', 'Admin\BlogController@create');
    Route::post('admin/blog/save', 'Admin\BlogController@save');
    Route::get('admin/blog/edit/{id}','Admin\BlogController@edit');
    Route::post('admin/blog/update','Admin\BlogController@update');
    Route::post('admin/blog/delete','Admin\BlogController@delete');
    Route::get('admin/blog/active/{id}', 'Admin\BlogController@blog_active');
    Route::get('admin/blog/deactive/{id}', 'Admin\BlogController@blog_deactive');
    
    
    Route::get('admin/offers', 'Admin\OfferController@index');
    Route::get('admin/offer/create', 'Admin\OfferController@create');
    Route::post('admin/offer/save', 'Admin\OfferController@save');
    Route::get('admin/offer/edit/{id}', 'Admin\OfferController@edit');
    Route::post('admin/offer/update', 'Admin\OfferController@update');
    Route::post('admin/offer/delete', 'Admin\OfferController@delete');
    Route::get('admin/offer/active/{id}', 'Admin\OfferController@offer_active');
    Route::get('admin/offer/deactive/{id}', 'Admin\OfferController@offer_deactive');
    
    Route::get('admin/visa','Admin\VisaController@index');
    Route::get('admin/visa/create', 'Admin\VisaController@create');
    Route::post('admin/visa/save', 'Admin\VisaController@visa_save');
    Route::get('admin/visa/edit/{id}', 'Admin\VisaController@visa_edit');
    Route::post('admin/visa/update', 'Admin\VisaController@visa_update');
    Route::post('admin/visa/delete', 'Admin\VisaController@visa_delete');
    
    Route::get('admin/visa_type','Admin\VisaController@visa_type');
    Route::get('admin/visa_type/create', 'Admin\VisaController@visa_type_create');
    Route::post('admin/visa_type/save', 'Admin\VisaController@visa_type_save');
    Route::post('admin/visa_type/delete', 'Admin\VisaController@visa_type_delete');
    Route::get('admin/visa_type/edit/{id}', 'Admin\VisaController@visa_type_edit');
    Route::post('admin/visa_type/update', 'Admin\VisaController@visa_type_update');
    Route::get('admin/visa_type/active/{id}', 'Admin\VisaController@visa_type_active');
    Route::get('admin/visa_type/deactive/{id}', 'Admin\VisaController@visa_type_deactive');
    
    Route::get('admin/gallery', 'Admin\GalleryController@index');
    Route::get('admin/gallery/create', 'Admin\GalleryController@create');
    Route::post('admin/gallery/save', 'Admin\GalleryController@save');
    Route::get('admin/gallery/edit/{id}', 'Admin\GalleryController@edit');
    Route::post('admin/gallery/update', 'Admin\GalleryController@update');
    Route::post('admin/gallery/delete', 'Admin\GalleryController@delete');
    Route::get('admin/gallery/active/{id}', 'Admin\GalleryController@gallery_active');
    Route::get('admin/gallery/deactive/{id}', 'Admin\GalleryController@gallery_deactive');
    
    Route::get('admin/coupons', 'Admin\CouponController@index');
    Route::get('admin/coupons/create', 'Admin\CouponController@create');
    Route::post('admin/coupons/save', 'Admin\CouponController@save');
    Route::get('admin/coupons/edit/{id}', 'Admin\CouponController@edit');
    Route::post('admin/coupons/update', 'Admin\CouponController@update');
    Route::post('admin/coupons/delete', 'Admin\CouponController@delete');
    Route::get('admin/coupons/active/{id}', 'Admin\CouponController@coupon_active');
    Route::get('admin/coupons/deactive/{id}', 'Admin\CouponController@coupon_deactive');
    
    Route::get('admin/flights', 'Admin\FlightController@index');
    Route::get('admin/flight/create', 'Admin\FlightController@create');
    Route::post('admin/flight/save', 'Admin\FlightController@save');
    Route::get('admin/flight/edit/{id}', 'Admin\FlightController@edit');
    Route::post('admin/flight/update', 'Admin\FlightController@update');
    Route::post('admin/flight/delete', 'Admin\FlightController@delete');
    Route::get('admin/flight/active/{id}', 'Admin\FlightController@city_active');
    Route::get('admin/flight/deactive/{id}', 'Admin\FlightController@city_deactive');
    Route::get('admin/flight-booking', 'Admin\FlightController@flight_booking')->name('flight-booking');
    Route::get('admin/flight-booking-details/{id}', 'Admin\FlightController@booking_details')->name('admin/flight-booking-details');
    Route::post('flight_booking-update-status', 'Admin\FlightController@flight_booking_update_status')->name('ajax.flight_booking.update-status');
    
    
    Route::get('admin/cities', 'Admin\CityController@index');
    Route::get('admin/city/create', 'Admin\CityController@create');
    Route::post('admin/city/save', 'Admin\CityController@save');
    Route::get('admin/city/edit/{id}', 'Admin\CityController@edit');
    Route::post('admin/city/update', 'Admin\CityController@update');
    Route::post('admin/city/delete', 'Admin\CityController@delete');
    Route::get('admin/city/active/{id}', 'Admin\CityController@city_active');
    Route::get('admin/city/deactive/{id}', 'Admin\CityController@city_deactive');

    Route::get('admin/airlines', 'Admin\AirlineController@index');
    Route::get('admin/airline/create', 'Admin\AirlineController@create');
    Route::post('admin/airline/save', 'Admin\AirlineController@save');
    Route::get('admin/airline/edit/{id}', 'Admin\AirlineController@edit');
    Route::post('admin/airline/update', 'Admin\AirlineController@update');
    Route::post('admin/airline/delete', 'Admin\AirlineController@delete');
    Route::get('admin/airline/active/{id}', 'Admin\AirlineController@airline_active');
    Route::get('admin/airline/deactive/{id}', 'Admin\AirlineController@airline_deactive');

    Route::get('admin/airports', 'Admin\AirportController@index');
    Route::get('admin/airport/create', 'Admin\AirportController@create');
    Route::post('admin/airport/save', 'Admin\AirportController@save');
    Route::get('admin/airport/edit/{id}', 'Admin\AirportController@edit');
    Route::post('admin/airport/update', 'Admin\AirportController@update');
    Route::post('admin/airport/delete', 'Admin\AirportController@delete');
    Route::get('admin/airport/active/{id}', 'Admin\AirportController@airline_active');
    Route::get('admin/airport/deactive/{id}', 'Admin\AirportController@airline_deactive');


    Route::get('admin/flight_class', 'Admin\AirlineController@flight_class_list');
    Route::get('admin/flight_class/create', 'Admin\AirlineController@flight_class_create');
    Route::post('admin/flight_class/save', 'Admin\AirlineController@flight_class_save');
    Route::get('admin/flight_class/edit/{id}', 'Admin\AirlineController@flight_class_edit');
    Route::post('admin/flight_class/update', 'Admin\AirlineController@flight_class_update');
    Route::post('admin/flight_class/delete', 'Admin\AirlineController@flight_class_delete');
   	Route::get('admin/flight_class/active/{id}', 'Admin\AirlineController@flight_class_active');
    Route::get('admin/flight_class/deactive/{id}', 'Admin\AirlineController@flight_class_deactive');


    Route::any('admin/support', 'Admin\SupportController@index');
    Route::any('admin/support/create', 'Admin\SupportController@create');
    Route::post('admin/support/save', 'Admin\SupportController@save');
    Route::post('admin/support/delete', 'Admin\SupportController@delete');
    Route::get('admin/support/edit/{id}', 'Admin\SupportController@edit');
    Route::post('admin/support/update', 'Admin\SupportController@update');

    Route::get('admin/footer', 'Admin\FooterController@index');
    Route::get('admin/footer/create', 'Admin\FooterController@create');
    Route::post('admin/footer/save', 'Admin\FooterController@save');
    Route::post('admin/footer/delete', 'Admin\FooterController@delete');
    Route::get('admin/footer/edit/{id}', 'Admin\FooterController@edit');
    Route::post('admin/footer/update', 'Admin\FooterController@update');
    Route::post('admin/footer/update', 'Admin\FooterController@update');
    

});
