@extends('layouts.toolbar')

@section('content')
<div class = "container" style="padding-top:70px;">
	<div class = "panel default-panel">
		<!-- TODO
			Add review percentage
			Add reviews section
				& submit review button
		-->	
		<div class = "panel-body">
			<div class = "media">
				<div class = "media-left"> Picture here </div>
				<div class= "media-right">
					<h2 class = "media-heading"> {{ $professor->lname }}, {{$professor->fname}} {{$professor->mname}} </h2>
					<div class = "pull-right">
						<h3 class= "media-heading">{{round($percentage,2)}}%</h3>
					</div>
					<div class = "media-body">
						<p>University: {{$professor->university->name}}</p>
						<p>Teaches: {{ $professor->class }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{ Session::get('message') }}	
	<div class = "panel default-panel">
		<div class = "panel-body">
			<h3 >Write a review</h3>
				<div class = "container">
				<form method = "POST" role="form" class="form-horizontal">
					<div class = "form-group">
						<div class ="col-md-8">
							<label for ="btn-group" class="control-label">Rating</label>
							<div class = "btn-group" data-toggle="buttons" name="review">
									<label class="radio-inline"><input type="radio" name="review" id="like" value="like"><span class = "glyphicon glyphicon-thumbs-up"></span></label>
		<label class="radio-inline"><input type="radio" name="review" id="dislike" value="dislike"><span class = "glyphicon glyphicon-thumbs-down"></span></label>
							</div>
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
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<h3 class = 'text-center'>Reviews</h3>
	@foreach ($professor->comments as $comment)	
		<div class = "col-md-6">
		<div class = "panel default-panel">
			<div class = "panel-body">
				<div class ="media">
					<div class="media-left">Picture here</div>
					<div class= "media-right">
						<h2 class="media-heading"><a href="users/{{$comment->author}}">{{$comment->author}}</a></h2>
						<div class = "pull-right">
							@if ($comment->likes == true)
								<h3><span class = "glyphicon glyphicon-thumbs-up"></span></h3>
							@else
								<h3><span class = "glyphicon glyphicon-thumbs-down"></span></h3>
							@endif
						</div>
						<div class = "media-body">
							<p>{{$comment->comment}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	@endforeach	

</div>
@endsection
