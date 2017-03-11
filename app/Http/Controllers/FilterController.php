<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Professor;

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
				$schools = DB::table('universities')->latest()->paginate(12);
			}	
		}
		$schools = University::paginate(6);
		return view("schools", ['schools' => $schools]);
	}

	/**
	 * @return filtered professors
	 */
	public function professors()
	{	
		$professors = Professor::withCount('comments')->paginate(8);
		return view("professors", ['professors' => $professors]);
	}	


}
