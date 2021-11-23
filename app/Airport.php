<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Airport extends Authenticatable
{
	protected $table = 'airports';

	protected $fillable = ['id','airportcode','airport','citycode','city','countrycode','country','created_at','updated_at'];
  
}
