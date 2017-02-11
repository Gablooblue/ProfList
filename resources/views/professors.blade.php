@extends('layouts.toolbar')

@section('content')
<head>
	<title> Professors </title>
	<link rel= "stylesheets" href="/css/professors.css">
	<link rel= "stylesheets" href="/css/app.css">
	<meta name="csrf-token" content"{{ csrf_token() }}">
	<script>
		window.Laravel = <?php echo json_encode
		([
			'csrfToken' => csrf_token(),
		]); ?>
	</script>

</head>
<body>
	<div class= "container" style = "padding-top: 70px">
		<div class="row">
			{{ Form::open(array('method' => 'get')) }}
				<div class= "col-md-6 ">
					School:
					{{ Form::select('school', array('any' => 'Any', 'UPM' => 'UP Manila', 'UPD' => 'UP Diliman'), 'Any') }}
					
					Sort by:
					{{ Form::select('sort by', array('recent' => 'Most recent', 'popular' => 'Most popular', 'rating' => 'Highest rating'), 'recent') }}
					{{ Form::submit('Filter') }} 
				</div>
			{{ Form::close() }}
		</div>
		<div class = "row">
			<div class="text-center">
				<input class = "btn-gradient"type = "button" value = "Add a professor" onclick="{{ url('/professors/create') }}">
			</div>
		</div>
	</div>
	<!--Display profs here
	formatting is listed below -->
	<div class = "profList">
		<div class = "container">
			<div class= "row">
				<div class="media">
					@foreach ($professors as $professor)
					<div class="media-left">Picture here </div>
						<div class = "col md-4">
								<h2 style= "cursor:pointer;" class="media-heading">{{ professors() -> name }}</h2>
							<div class="media-body">
								<p>Likes: {{ professors() -> likes}}</p>
								<p>Dislikes: {{ professors() -> dislikes }}</p>
								<p>University: {{ professors() -> school }}</p>
								<p>Teaches: {{ professors() -> class}}</p>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		{{ $professors->links() }}
	</div>
</body>	
@endsection				
