<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
	public $incrementing = false;
	protected $table = 'set_catalogues';
	
	protected $fillable = [
			'name', 'publisher_id', 'cataloguetype_id', 'professor_id',
	];
}
