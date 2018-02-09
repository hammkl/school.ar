<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogueFile extends Model {
	public $incrementing = false;
	protected $table = 'set_cataloguefiles';
	
	protected $fillable = [
			'catalogue_id', 'filename', 'size', 'mimetype', 'data'
	];
}
