<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Support extends Authenticatable
{
	protected $table = 'support';

	protected $fillable = ['id','email','phone','address','fb_link','twitter_link','instagram_link','linkedin_link','utube_link'];
  
}
