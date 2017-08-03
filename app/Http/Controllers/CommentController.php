<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor_comment;
use App\University_comment;
use DB;
use Auth;
use Redirect;
use App\Professor;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{

	public function create(CommentRequest $request, $id)
	{
		$data = $request->all();
		if (Auth::check())
		{
		    $user = Auth::user();
		}
		else
		{
		    $user = "Anonymous student";
		}
		$professor = Professor::find($id);

		if($professor->comment_count() == 0)
		{
			DB::table('professors')
				->where('id', $id)
				->decrement('likes');
		}	
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
			'title' => $data['title'],
		]);
		return Redirect::back()->with('message', 'Review successfully posted');
	}	

	public function remove($profId, $id)
	{
		$this->middleware('auth');
		Professor_Comment::find($id)->delete();
		return Redirect::back()->with('message', "Review deleted");
	}	
}
