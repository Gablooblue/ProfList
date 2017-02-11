<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
	public function school()
	{
		return view('create_school');
	}
	public function professor()
	{
		return view('create_professor');
	}	
}
