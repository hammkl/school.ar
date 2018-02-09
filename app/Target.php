<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
	public $incrementing = false;
	protected $table = 'ar_targets';
	
	protected $fillable = [
			'name', 'catalogue_id'
	];
}
