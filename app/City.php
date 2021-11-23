<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class City extends Authenticatable
{
	protected $table = 'cities';

	protected $fillable = ['id','city_name','city_short_name','country_name','airport','flight_type','city_status'];
  
}
