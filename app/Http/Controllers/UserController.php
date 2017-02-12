<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
	/**
	 * @param Username in URL
	 * @return user profile
	 */
	public function show(Request $request, $user)
	{
		$user = DB::table('users')-> where('username', $user)->first();
		return view ("user", ['username', $username]);
	}	
}
