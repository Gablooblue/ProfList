<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{	
	/**
	 * @var array
	 */
	protected $fillable = [
		'fname', 'lname', 'mname', 'school_id', ' class', 'icon',
	];
	public function comments()
	{
		return $this->hasMany('App\Professor_comment');
	}	

	public function universities()
	{
		return $this->belongsTo('App\University');
	}	
}
