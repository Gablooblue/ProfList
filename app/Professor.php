<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{	
	/**
	 * @var array
	 */
	protected $fillable = [
		'fname', 'lname', 'mname', 'university_id', 'class', 'icon',
	];
	public function comments()
	{
		return $this->hasMany('App\Professor_comment');
	}	

	public function university()
	{
		return $this->belongsTo('App\University');
	}	
	public function comment_count()
	{
		$this->comments->count();
	}	
}
	
