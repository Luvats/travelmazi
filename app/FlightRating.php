<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlightRating extends Model
{
    protected $primarykey = "id";
    protected $table = 'flight_ratings';
    protected $fillable = ['user_id', 'booking_id','flight_name', 'title', 'description', 'rate'];
    public $timestamps = true;

    //public function user(){
    //    return $this->belongsTo(User::class);
    //}
}
