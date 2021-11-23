<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Visa extends Authenticatable
{
	protected $table = 'visa';

	protected $fillable = ['id','destination','departure_date','return_date','traveller','embassy_fee','service_fee','gst_amount','visa_validity','visa_approval_day','passport_valid_day','working_days'];
  
}
