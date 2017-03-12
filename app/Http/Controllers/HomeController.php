<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\University;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
	if(Auth::check())    
	{
		$universities = University::all();
		return view('home', ['universities' => $universities]);
	}	
	else
	{
		return redirect("/");
	}	
    }
}
