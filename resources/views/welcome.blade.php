<!DOCTYPE html>
@extends('layouts.toolbar')

@section('content')
<head>
	<title> Sophists</title>
	<link rel='stylesheet' href='/css/welcome.css'>
	<link rel='stylesheet' href='/css/body.css'>
<head>
<body>	
	
	<div class= "jumbotron" style="padding-top: 75px !IMPORTANT;">
		<div class = "container">
		<h1 class = "welcome">Welcome to Sophists</h1><br>
		<p class = "with"> &nbspSophists is a platform for students to review or to check out the ratings of their professors</p><br>
		<p>  <input class= "btn-gradient" type="button" onClick="{{ url('/login') }}" value="Already a member? Login"> &nbsp <input class="btn-gradient" type="button" onClick="{{ url('/register')}}" value="Not a member yet? Sign up now!"> </p>
		</div>
	</div>
	<div class = "container" style="font-size:20px;"> 
		<div class = "row">
			<div class = "col-md-4">
				<h2>See which universities have the best professors</h2>
				<p>You can view a the average score given to the professors of a certain university</p>
				<p><input class = "btn-gradient" type = "button" value = "Universities &raquo" onClick = "{{url('/schools')}}"> </p>
			</div>
			<div class = "col-md-4">
				<h2>Check out your professors</h2>
				<p>View students' comments and reviews about their professors</p>
				<p><input class = "btn-gradient"type = "button" value = "Professors &raquo" onclick="{{ url('/professors') }}"> </p>
			</div>
			<div class = "col-md-4">
				<h2>Make your own reviews</h2>
				<p>Sign up now to review your professors</p>
				<p><input class = "btn-gradient" type = "button" value = "Sign up &raquo" onClick = "{{ url('/register') }}"> </p>
			</div>
		</div>
	</div>
</body>
@endsection
</html>
