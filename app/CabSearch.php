<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CabSearch extends Authenticatable
{
	protected $table = 'cab_search';

	protected $fillable = ['id','source','destination','departure','return_date','pickup_time','drop_time','source_lat','source_lng','dest_lat','dest_lng','search_type','created_at','updated_at'];
  
}
