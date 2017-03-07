@extends('layouts.toolbar')

@section('content')
<div class = "container" style="padding-top:70px;">
	<div class = "panel default-panel">
		<!-- TODO
			Add professor picture
			Add review percentage
			Add reviews section
				& submit review button
		-->	
		<div class = "panel-body">
			<div class = "media">
				<div class = "media-left"> Picture here </div>
				<h2 class = "media-heading"> {{ $professor->name() }} </h2>
				<div class = "media-body">
					<h3> {{ $professor->likes()/($professor->likes() + $professor->dislikes()) }}%</h3>	
					<p>University: {{ $professor-> school() }}</p>
					<p>Teaches: {{ $professor->class() }}</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class = "panel default-panel">
		<div class = "panel-body">
			<div class = "media">
			<h3 class = "media-heading">Write a review</h3>
				<div class = "media-left"> 
					<button>Like</button>
					<button>Dislike</button>
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
