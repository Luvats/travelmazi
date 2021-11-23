<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Gallery extends Authenticatable
{
	protected $table = 'galleries';

	protected $fillable = ['id','gallery_title','gallery_img'];
  
}
