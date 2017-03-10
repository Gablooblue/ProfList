<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Professor;
use Redirect;

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

	public function create(Request $request)
	{
		$data =$request->all();

		Professor::create([
			'fname'	=> $data['fname'],
			'lname'	 => $data['lname'],
			'mname' => $data['mname'],
			'university_id' => $data['school'],
			'class' => $data['class']
		]);

		return Redirect::to('/professors');
	}	

}
