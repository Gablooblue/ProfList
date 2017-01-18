@extends(layout.toolbar)

@section('content')
<head>
	<title> Professors </title>
	<link rel= "stylesheets" href="/css/professors.css">
</head>
<body>
	<div class = "filterbar">
	<ul>
		<li>School:
		<select class = "schoolSelect">
			<option value = "">Any</option>
			<option value = "">UP Manila</option>
			<option value = "">UP Diliman</option>
		</select></li>
		<li>
		Sort by:
		<select class = "sortSelect">
			<option value = "">Most recent</option>
			<option value = "">Most popular</option>
			<option value = "">Highest rating</option>
		</select></li>
	</ul>
	</div>
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
			<!-- ill figure this out later -->
		</ul>
	</nav>
</body>	
@endsection				
