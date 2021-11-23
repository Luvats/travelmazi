<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Blog extends Authenticatable
{
	protected $table = 'blogs';

	protected $fillable = ['id','title','url','image','blog'];
  
}
