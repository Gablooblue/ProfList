<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor_comment extends Model
{
	protected $fillable = [
		'author', 'comment', 'professor_id', 'likes',
	];

	public function comments()
	{
		return $this->belongsTo('App\Professor');
	}	
}
