<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogueType extends Model
{
	public $incrementing = false;
	protected $table = 'set_cataloguetypes';
	
	protected $fillable = [
			'name'
	];
}
