<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Auth;

class AdminController extends Controller
{
	public function show()
	{
		$user = Auth::user();
		if($user->username === "admin")
		{
			return view('create_school');
		}	
		else
		{
			Redirect::back();
		}	
	}	
}
