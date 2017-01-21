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
	{{ Form::open(array('method' => 'get')) }}
	<ul>
		<li>School:
		{{ Form::select('school', array('any' => 'Any', 'UPM' => 'UP Manila', 'UPD' => 'UP Diliman'), 'Any') }} </li>
		<li>
		Sort by:
		{{ Form::select('sort by', array('recent' => 'Most recent', 'popular' => 'Most popular', 'rating' => 'Highest rating'), 'recent') }} </li>
		<li>{{ Form::submit('Filter') }} </li>
	</ul>
	{{ Form::close() }}
	<!--Display profs here
	formatting is listed below -->
	<div class = "profList">
		Picture Here
		<ul>
			<li>Name</li>
			<li>Rating</li>
			<li>School</li>
			<li>Subject</li>
		</ul>
	</div>
	<nav class = "pageNav">
		<ul>
			<!-- ill figure this out later (number buttons at the bottom) -->
		</ul>
	</nav>
</body>	
@endsection				
