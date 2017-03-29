<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\University;
use App\Http\Requests\SchoolRequest;
use Redirect;

class UniversityController extends Controller
{
	/**
	 * @param University ID
	 * @return University profile
	 */
	public function show(Request $request, $id)
	{
		$university = University::find($id);
		return view('university', ['university' => $university]);
	}	

	public function create(SchoolRequest $request)
	{
		$data = $request->all();
		
		University::create([
			'name' => $data['name'],
		]);
		return Redirect::to('/professors');
	}	
}
