<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetFile extends Model
{
	public $incrementing = false;
	protected $table = 'ar_targetfiles';
	
	protected $fillable = [
			'target_id', 'filename', 'size', 'mimetype', 'data'
	];
}
