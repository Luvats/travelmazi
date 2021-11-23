<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CabCity extends Authenticatable
{
	protected $table = 'cab_cities';

	protected $fillable = ['id','name','status','created_at','updated_at'];
  
}
