<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class VisaType extends Authenticatable
{
	protected $table = 'visa_type';

	protected $fillable = ['id','type','status'];
  
}
