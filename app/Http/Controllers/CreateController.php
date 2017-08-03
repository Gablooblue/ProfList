<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;

class CreateController extends Controller
{
	/**
	 * @return creation views
	 */
	public function school()
	{
		$this->middleware('auth');
		return view('create_school');
	}
	public function professor()
	{	
		$universities = University::orderBy('name')->get();
		return view('create_professor', ['universities' => $universities]);
	}	
}
