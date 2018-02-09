<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
	public $incrementing = false;
	protected $table = 'ar_bookmarks';
	
	protected $fillable = [
			'target_id', 'user_id'
	];
}