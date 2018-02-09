<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetLink extends Model
{
	public $incrementing = false;
	protected $table = 'ar_targetlinks';
	
	protected $fillable = [
			'link', 'description', 'target_id'
	];
}
