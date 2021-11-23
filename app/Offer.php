<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Offer extends Authenticatable
{
	protected $table = 'offers';

	protected $fillable = ['id','title','url','offer','offer_image'];
  
}
