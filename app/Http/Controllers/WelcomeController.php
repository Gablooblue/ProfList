<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
	/**
	 * @return redirect to home if authenticated
	 * 		redirect to splash if not
	 */		
	public function index()
	{	
		if(Auth::check())	
		{
			return redirect('/home');
		}	
		else
		{
			return view('index');
		}	
	}
}
