<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterController extends Controller
{
	public function school($filter)
	{
		return view("welcome");
	}
}
