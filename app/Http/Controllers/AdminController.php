<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class AdminController extends Controller
{
	public function show()
	{
		if(Auth::user()->username === "admin")
		{
			return view('create_school');
		}	
		else
		{
			Redirect::back();
		}	
	}	
}
