<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProfessorController extends Controller
{
	/**
	 * @param Professor ID
	 * @return Professor profile
	 */
	public function show(Request $request, $id)
	{
		$professor = DB::table('professors')->where('id', $id)->first();
		return view("professor",['professor' => $professor]);
	}	
}
