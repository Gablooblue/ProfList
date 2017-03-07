<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\University;

class UniversityController extends Controller
{
	/**
	 * @param University ID
	 * @return University profile
	 */
	public function show(Request $request, $id)
	{
		$university = University::find($id);
		return view('university', ['university', $university]);
	}	
}
