<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;

class CreateController extends Controller
{
	/**
	 * @return creation views
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}	
	public function school()
	{
		return view('create_school');
	}
	public function professor()
	{	
		$universities = University::all();
		return view('create_professor', ['universities' => $universities]);
	}	
}
