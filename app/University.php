<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
	protected $fillable= [
		 'name', 'comment', 'address', 'icon',
	];
	public function comments()
	{
		return $this->hasMany('App\University_comment');
	}
	public function professors()
	{
		return $this->hasMany('App\Professor');
	}	
}
