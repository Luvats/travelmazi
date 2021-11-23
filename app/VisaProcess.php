<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class VisaProcess extends Authenticatable
{
	protected $table = 'visa_process';

	protected $fillable = ['id','destination','visa_process'];
  
}
