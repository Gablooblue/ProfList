<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
	public function about()
	{
		return view('about');
	}	
	public function schools()
	{
		return view('schools');
	}	
	public function professors()
	{
		return view('professors');
	}	
	public function contact()
	{
		return view('contact');
	}
}
