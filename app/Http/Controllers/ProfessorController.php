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
	 * @return Professor profile and percentage
	 */
	public function show(Request $request, $id)
	{
		$professor = Professor::find($id);
		$percentage = ($professor->likes/($professor->likes + $professor->dislikes)) * 100;
		return view("professor",['professor' => $professor, 'percentage' => $percentage]);
	}	

	public function create(Request $request)
	{
		$this->middleware('auth');
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
