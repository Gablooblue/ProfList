@extends('layouts.toolbar')

@section('content')
<head>
	<title> Schools </title>
	<link rel= "stylesheets" href="/css/schools.css">
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
	<div class= "container" style= "padding-top:70px;">
		<div class = "row">
			{{ Form::open(array('method' => 'get')) }}
				<div class= "col-md-6">
					Sort by:
					{{ Form::select('sort by', array('recent' => 'Most Recent', 'popular' => 'Most Popular', 'rating' => 'Highest Rating'), 'rating') }}	
					{{ Form::submit('Filter') }} 
				</div>
			{{ Form::close() }}
		</div>
		<div class = "row">
			<div class="text-center">
				<input class = "btn-gradient"type = "button" value = "Add a university" onclick="{{ url('/universities/create') }}">
			</div>
		</div>
	
	</div>
	{{ Form::close() }}
	<!--Display schools here
	formatting is listed below -->
	<div class = "schoolList">
		<div class= "container">
			<div class = "row">
			@foreach ($schools as $school)
				<div class = "col md-4">
					<div class="media">
						<div class="media-left"> Picture Here </div>
						<h2 class="media-heading">{{ school() -> name }}</h2>
						<div class="media body">
							<p>{{ schools() -> number}}</p>
							<p>{{ schools() -> average}}</p>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
		{{ $schools->links() }}
	</div>
</body>				
@endsection
