<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class FlightBookingPassengerDetail extends Model
{
    protected $primarykey="id";
    protected $table = 'flight_booking_passenger_details';
    protected $fillable=['flight_booking_id','first_middle_name','last_name','gender','wheelchair_required','type']; 
    public $timestamps=false; 

    //public function flight_booking(){
    //    return $this->belongsTo(User::class);
    //}
}
