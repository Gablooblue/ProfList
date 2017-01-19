@extends('layouts.toolbar')

@section('content')
<head>
	<title> Professors </title>
	<link rel= "stylesheets" href="/css/professors.css">
</head>
<body>
	<div class = "filterbar">
	<ul>
		<li>
		Sort by:
		<select class = "sortSelect">
			<option value = "">Most recent</option>
			<option value = "">Most popular</option>
			<option value = "">Highest ratings</option>
		</select></li>
	</ul>
	</div>
	<!--Display profs here
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
			<!-- ill figure this out later -->
		</ul>
	</nav>
</body>				
@endsection
