<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
	use Notifiable;
	public $incrementing = false;
	
	protected $table = 'set_publishers';
	
	protected $fillable = [
			'short_name', 'long_name', 'email', 'vatid', 
			'password', 'companyid', 'postalcode_id', 'active'
	];
	protected $hidden = [
			'password'
	];
}
