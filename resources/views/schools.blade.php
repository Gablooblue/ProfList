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
	{{ Form::open(array('method' => 'get')) }}
	<ul>
		<li class = "sortSelect">
		Sort by:
		{{ Form::select('sort by', array('recent' => 'Most Recent', 'popular' => 'Most Popular', 'rating' => 'Highest Rating'), 'rating') }}	
		{{ Form::submit('Filter') }} </li>
	</ul>
	{{ Form::close() }}
	<!--Display schools here
	formatting is listed below -->
	<div class = "schoolList">
		Picture Here
		<ul>
			<li>School</li>
			<li>Number of professors</li>
			<li>Average professor rating</li>
		</ul>
	</div>
	<nav class = "pageNav">
		<ul>
			<li><input type= "button" value="Previous"></li>
			<li><input type= "button" value="Next"></li>
		</ul>
	</nav>
</body>				
@endsection
