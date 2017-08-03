@extends('layouts.toolbar')

@section('content')
<div class = "container" style="padding-top:70px;">
	<div class = "panel panel-default">
		<!-- TODO
			Add review percentage
			Add reviews section
				& submit review button
		-->	
		@if (Auth::check())
			@if (Auth::user()->username === 'admin' Or Auth::user()->username === 'Gablooblue')
				<a href= "{{ $professor->id }}/delete" style="color:red;">Remove Professor</a>
			@endif

		@endif
		<div class = "panel-body">
			<div class = "media">
				<div class= "media-right">
					<h2 class = "media-heading"> {{ $professor->lname }}, {{$professor->fname}} {{$professor->mname}} </h2>
					<div class = "pull-right">
						@if ($professor->comments->count() === 0)
						    <i>No reviews yet </i>
						@else
						    <h3 class= "media-heading">{{round($percentage,2)}}%</h3>
						@endif
					</div>
					<div class = "media-body">
						<p>University:<a href= "../universities/{{ $professor->university->id }}"> {{$professor->university->name}}</a></p>
						<p>Teaches: {{ $professor->class }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{ Session::get('message') }}	
	<div class = "container">
	    <div class = "text-center">
		    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#review">Write a review</button>
	    </div>
	</div>
	<div class = "modal fade" id = "review" role="dialog">
		<div class = "modal-dialog">
		<div class = "modal-content">
		<div class = "modal-body">
			<h3 >Write a review</h3>
				<form method = "POST" role="form" class="form-horizontal">
					<div class = "form-group">
						<div class ="col-md-8">
							<label for ="btn-group" class="control-label">Rating</label>
							<div class = "btn-group" data-toggle="buttons" name="review" >
									<label class="radio-inline">
									    <input type="radio" name="review" id="like" value="like" required>
										<!-- <span class = "glyphicon glyphicon-thumbs-up"></span> -->
										<span>I liked this professor</span>
									</label>
									<label class="radio-inline">
									    <input type="radio" name="review" id="dislike" value="dislike">
										<!--<span class = "glyphicon glyphicon-thumbs-down"></span>-->
										<span>I did not like this professor</span>
									</label>
							</div>
						</div>
					</div>
					<div class = "form-group">
						<div class = "col-md-8">
							<label for ="title" class = "control-label">Title</label>
							<input type="text" name="title" id="title" class="form-control" placeholder="Optional">
						</div>
					</div>
					<div class = "form-group">
						<div class = "col-md-10">
							<label for ="comment" class="control-label">Review</label>
							<textarea class="form-control" name = "comment" id="comment" rows="5" required></textarea>
						</div>
					</div>
					{{ csrf_field() }}
					<div class = "form-group">
						<div class = "col-md-8">
							<input type = "submit" name = "submit" id = "submit" placeholder="submit" class = "btn btn-primary"/>
							<button class = "btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</form>
		</div>	
		</div>
		</div>
	</div>
	<div class = "panel panel-default">
	    <h3 class = 'text-center'>Reviews&nbsp({{$professor->comments->count()}})</h3>
	<div class = "panel-body">
	@if ($comments->count() === 0)
		<h4 class = "text-center">No reviews yet</h4>
	@endif
	@foreach ($comments as $comment)	
		<div class = "col-md-12">
		    <div class = "container">
			<div class ="media">
				<div class="media-left"><img src="{{ url('/default-user.jpg') }}" alt="Image" class="img-circle img-responsive" style="min-width:30; max-width:70px;"></div>
				<div class= "media-right">
					<h2 class="media-heading"><a href="users/{{$comment->author}}">{{$comment->author}}</a></h2>
						@if ($comment->likes == true)
							<h3 style="color:green;"><span class = "glyphicon glyphicon-thumbs-up" ></span><strong>&nbsp{{$comment->title}}</strong></h3>
						@else
							<h3 style="color:red;"><span class = "glyphicon glyphicon-thumbs-down" ></span><strong>&nbsp{{$comment->title}}</strong></h3>
						@endif
					<h3></h3>
					<div class = "media-body">
						<div class = "container">
							<div class ="col-md-6">
							<p style="word-wrap:break-word;">{!! nl2br(e($comment->comment)) !!}</p>
							</div>
						</div>
						@if (Auth::check())
							@if (Auth::user()->username === $comment->author Or Auth::user()->username === 'admin')
								<p ><a href="{{$professor->id}}/delete/{{$comment->id}}" style="color:red;">Delete</a></p>
							@endif
						@endif
					</div>
				<hr>
				</div>
			</div>
		    </div>
		</div>
	@endforeach	
	</div>
	</div>
	<div class = "text-center">
	    {{ $comments->links() }}
	</div>
</div>
@endsection
