<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostalCode extends Model
{
	public $incrementing = false;
	protected $table = 'set_postalcodes';
	
	protected $fillable = [
			'code', 'name', 'country_id'
	];
}
