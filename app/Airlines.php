<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Airlines extends Authenticatable
{
	protected $table = 'airlines';

	protected $fillable = ['id','airlines_name','airlines_code','airlines_logo','airline_status'];
  
}
