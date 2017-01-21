<!DOCTYPE html>
@extends('layouts.toolbar')

@section('content')
<head>
	<title> Sophists</title>
	<link rel='stylesheet' href='/css/welcome.css'>
	<link rel='stylesheet' href='/css/body.css'>
<head>
<body>	
	
	<div class= "jumbotron">
		<div class = "container">
		<h1 class = "welcome">Welcome to Sophists</h1>
		<p class = "with">Sophists is a platform for students to review or to check out the ratings of their professors</p>
		<p>  <input class= "register" type="button" onClick="{{ url('/login') }}" value="Already a member? Login"> &nbsp <input class="register" type="button" onClick="{{ url('/register')}}" value="Not a member yet? Sign up now!"> </p>
		</div>
	</div>
	<ul class="info">
		<li>Rate and comment on professors from your school</li>
		<li>Check a professor's ratings and reviews</li>
		<li>Choose the correct professor for your class</li>
		<li>And so much more!</li><br>
	</ul>
	</div>
</body>
@endsection
</html>
