<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University_comment extends Model
{
	protected $fillable = [
		'author', 'comment', 'university_id',
	];

	public function university_comment()
	{
		return $this->belongsTo('App\Event');
	}	

}
