<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{	
	/**
	 * @var array
	 */
	protected $fillable = [
		'name', 'school_id', ' class', 'icon',
	];

}
