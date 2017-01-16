<!DOCTYPE html>
@extends('layouts.toolbar')

@section('content')
<head>
	<title> Sophists</title>
	<link rel='stylesheet' href='/css/welcome.css'>
	<link rel='stylesheet' href='/css/body.css'>
<head>
<body>	
	<div class= centerx>
		<span class = "welcome">Welcome to Sophists</span><br><br>
		<span class = "with">With Sophists you can:<br><br></span>
	<ul class="info">
		<li>Rate and comment of professors from your school</li>
		<li>Check a professor's ratings and reviews</li>
		<li>Choose the correct professor for your class</li>
		<li>And so much more!</li><br>
		<li><input class= "register" type="button" onClick="{{ url('/login') }}" value="Already a member? Login"> </li>
		<li><input class="register" type="button" onClick="{{ url('/register')}}" value="Not a member yet? Sign up now!"></li>
	</ul>
	</div>
</body>
@endsection
</html>
