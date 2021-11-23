<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Footer extends Authenticatable
{
	protected $table = 'footer';

	protected $fillable = ['id','title','footer_desc'];
  
}
