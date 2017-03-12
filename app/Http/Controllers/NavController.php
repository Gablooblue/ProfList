<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
	/**
	 * @return handles basic navigation for unimportant pages 
	 */
	public function about()
	{
		return view('about');
	}	
	public function contact()
	{
		return view('contact');
	}
	public function FAQ()
	{
		return view('faq');
	}	
}
