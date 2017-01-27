@extends('layouts.toolbar')

@section('content')
<head>
	<title> Professors </title>
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
	<div class= "container" style= "padding-top:60px;">
		{{ Form::open(array('method' => 'get')) }}
			<div class= "col-md-6">
				Sort by:
				{{ Form::select('sort by', array('recent' => 'Most Recent', 'popular' => 'Most Popular', 'rating' => 'Highest Rating'), 'rating') }}	
				{{ Form::submit('Filter') }} 
			</div>
	</div>
	{{ Form::close() }}
	<!--Display schools here
	formatting is listed below -->
	<div class = "schoolList">
		<div class= "container">
			@foreach ($schools as $school)
			<div class = "col md-4">
			Picture Here
				<ul>
					<li><h1>{{ school() -> name }}</h1></li>
					<!--<li>{{ schools() -> number}}</li>-->
					<!--li>{{ schools() -> average}}</li>-->
				</ul>
			@endforeach
			</div>
		</div>
		{{ $schools->links() }}
	</div>
</body>				
@endsection
