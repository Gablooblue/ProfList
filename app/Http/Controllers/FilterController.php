<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FilterController extends Controller
{
	public function school()
	{
		if(request()->has('sort by'))
		{
			
		}
		$schools = DB::table('schools')->paginate(12);
		return view("schools", ['schools' => $schools]);
	}
	public function professors()
	{	
		$professors = DB::table('professors')->paginate(12);
		return view("professors", ['professors' => $professors]);
	}	
}
