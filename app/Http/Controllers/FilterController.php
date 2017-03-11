<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Professor;
use Illuminate\Support\Collection\Search;

class FilterController extends Controller
{
	/**
	 * @return filtered schools
	 */
	public function schools()
	{
		if(request()->has('sort by'))
		{
			if(request()->has('recent'))
			{
				$schools = DB::table('universities')->latest()->paginate(12);
			}	
		}
		$schools = University::paginate(6);
		return view("schools", ['schools' => $schools]);
	}

	/**
	 * @return filtered professors
	 */
	public function professors(Request $request)
	{	
		$filter = Professor::query();
		if(request()->has('sort by'))
		{
			if(request()->has('recent'))
			{
				$filter -> latest();
			}	
			else if(request()->has('popular'))
			{
				$review_count = comments::count();
				$filter->orderBy($review_count, desc);
			}	
			else if(request()->has('rating'))
			{
				$rating = ($this->likes/($this->dislikes + $this->likes));
				$filter->orderBy($rating, desc);
			}	
		}	
		if(request()->has('school'))
		{
			$filter->where('university_id', $request->school);
		}	
		if(request()->has('search'))
		{
			$search = $request->search;
			$searchValues = preg_split('/\s+/', $search, -1, PREG_SPLIT_NO_EMPTY);
			foreach($searchValues as $value)
			{	
				$filter->orWhere('fname','LIKE','%'.$value.'%')
					->orWhere('lname', 'LIKE', '%'.$value.'%')
					->orWhere('mname', 'LIKE', '%'.$value.'%');
			}	
		}	
		$professors = $filter->withCount('comments')->paginate(8);
		return view("professors", ['professors' => $professors]);
	}	


}
