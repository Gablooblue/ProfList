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
						<h3 class= "media-heading">{{ $professor->likes/($professor->likes + $professor->dislikes) * 100 }}%</h3>	
					</div>
					<div class = "media-body">
						<p>University: {{$professor->university->name}}</p>
						<p>Teaches: {{ $professor->class }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class = "panel default-panel">
		<div class = "panel-body">
			<div class = "media">
			<h3 class = "media-heading">Write a review</h3>
				<div class = "media-left"> 
					<div class = "container">
						<ul class = "rev-buttons">
							<li>
								<input type = "radio" id = "like" name = "review"/>
								<label for = "like" class = "control-label"><span class= "glyphicon glyphicon-thumbs-up"></span></label>
							</li>
							<li>
								<input type = "radio" id = "dislike" name = "review"/>
								<label for = "dislike" class = "control-label"><span class = "glyphicon glyphicon-thumbs-down"></span></label>
							</li>
						</ul>
					</div>
				</div>
				<div class = "media-body">
					<form method = "POST" role="form">
						<textarea class = "form-control" name = "comment" id="comment" rows= "50" cols = "20"></textarea>
						{{ csrf_field() }}
						<input type = "submit" name = "submit" id = "submit" placeholder="submit" class = "btn btn-primary"/>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
