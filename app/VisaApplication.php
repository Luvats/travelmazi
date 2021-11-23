<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class VisaApplication extends Authenticatable
{
	protected $table = 'visa_application';

	protected $fillable = ['id','visa_id','name','surname','dob','gender','nationality','country_birth','passport_nbr','passport_issue_date','expiry_date','departure_date','arrival_date','port_arrival','passport_front','eticket_pdf','photograph_visa','created_at','updated_at'];
  
}
