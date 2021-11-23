<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Coupon extends Authenticatable
{
	protected $table = 'coupon';

	protected $fillable = ['id','coupon_name','percentage','coupon_status'];
  
}
