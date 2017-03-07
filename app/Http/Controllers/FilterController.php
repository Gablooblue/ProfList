<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FilterController extends Controller
{
	/**
	 * @return filtered schools
	 */
	public function schools()
	{
		if(request()->has('sort by'))
		{
			if(request()->has('recent'))
			{
				$schools = DB::table('schools')->latest()->paginate(12);
			}	
		}
		$schools = DB::table('schools')->paginate(12);
		return view("schools", ['schools' => $schools]);
	}

	/**
	 * @return filtered professors
	 */
	public function professors()
	{	
		$professors = DB::table('professors')->paginate(12);
		return view("professors", ['professors' => $professors]);
	}	
}
