<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Professor;

class ProfessorController extends Controller
{
	/**
	 * @param Professor ID
	 * @return Professor profile
	 */
	public function show(Request $request, $id)
	{
		$professor = Professor::find($id);
		return view("professor",['professor' => $professor]);
	}	

}
