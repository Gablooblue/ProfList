<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
		return view('create_professor');
	}	
}
