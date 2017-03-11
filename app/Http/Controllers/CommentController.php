<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor_comment;
use App\University_comment;
use DB;
use Auth;
use Redirect;

class CommentController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}	
	public function CreatePComment(Request $request, $id)
	{
		$data = $request->all();
		$user = Auth::user();

		if($data['review'] == 'like')
		{
			$likes = true;
			DB::table('professors')
				->where('id', $id)
				->increment('likes');

		}	
		else
		{
			$likes = false;
			DB::table('professors')
				->where('id', $id)
				->increment('dislikes');
		}	

		Professor_comment::create([
			'author' => $user['username'],
			'comment' => $data['comment'],
			'professor_id' => $id,
			'likes' => $likes,
		]);
		return Redirect::back()->with('message', 'Review successfully posted');
	}	

	public function CreateUComment(array $data)
	{
		return University_comment::create([
			'author' => $user['username'],
			'comment' => $data['comment'],
			'university_id' => $data['university_id'],
		]);
	}	
}
