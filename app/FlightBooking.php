<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class FlightBooking extends Model
{
    protected $primarykey="id";
    protected $table = 'flight_bookings';
    // protected $fillable=['user_id','booking_id','payment_id','payment_method','paid_amount','booking_details','source','flight_time','destination','contact_country_code','contact_mobile_number','contact_email','gst_number','return_date','status']; 
    protected $guarded=[];
    public $timestamps=true; 

    //public function user(){
    //    return $this->belongsTo(User::class);
    //}
}