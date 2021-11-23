<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Flightclass extends Authenticatable
{
	protected $table = 'flight_class';

	protected $fillable = ['id','flight_clss','flight_clss_value','flight_clss_status'];
  
}
