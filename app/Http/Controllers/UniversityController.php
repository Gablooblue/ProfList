<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UniversityController extends Controller
{
	/**
	 * @param University ID
	 * @return University profile
	 */
	public function show(Request $request, $id)
	{
		$university = DB::table('schools')->where('id', $id)->first();
		return view('university', ['university', $university]);
	}	
}
