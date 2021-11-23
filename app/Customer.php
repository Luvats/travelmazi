<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
	protected $table = 'customers';

	protected $fillable = ['id','username','first_name','last_name','email','email_otp','email_verify','password','c_password','created_at','updated_at'];
  
}
