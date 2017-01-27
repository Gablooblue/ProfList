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
	<div class= "container" style = "padding-top: 60px">
		{{ Form::open(array('method' => 'get')) }}
		<ul>
			<div class= "col-md-6">
				School:
				{{ Form::select('school', array('any' => 'Any', 'UPM' => 'UP Manila', 'UPD' => 'UP Diliman'), 'Any') }}
				</li>
			</div>
			<div class = "col-md-6">
				
				Sort by:
				{{ Form::select('sort by', array('recent' => 'Most recent', 'popular' => 'Most popular', 'rating' => 'Highest rating'), 'recent') }}
				</li>
				{{ Form::submit('Filter') }} </li>
			</div>
		</ul>
	</div>
	{{ Form::close() }}
	<!--Display profs here
	formatting is listed below -->
	<div class = "profs">
		<div class = "container">
			@foreach ($professors as $professor)
			<div class = "col md-4">
				<ul>
					<li><h1 style= "cursor:pointer;">{{ professors() -> name }}</h1></li>
					<li>{{ professors() -> likes}}</li>
					<li>{{ professors() -> dislikes }}</li>
					<li>{{ professors() -> school }}</li>
					<li>{{ professors() -> class}}</li>
				</ul>
			</div>
			@endforeach
		</div>
		{{ $professors->links() }}
	</div>
</body>	
@endsection				
