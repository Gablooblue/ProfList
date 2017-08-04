<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\University;

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
		    $universities = University::orderBy('name')->get();
		    return view('index', ['universities' => $universities]);
		}	
	}
}
