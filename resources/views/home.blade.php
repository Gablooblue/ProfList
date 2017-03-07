<!DOCTYPE html>
<html>
@extends('layouts.toolbar')

@section('content')
<head>
	<title> Home</title>
	<link rel='stylesheet' href='/css/body.css'>
	<link rel='stylesheet' href='/css/home.css'>
</head>
<body>
	<div class ="container" style="padding-top:70px;">
		<div class = "col-md-offset-1">
			<h2>Recently Rated</h2>
			<div class = "col-md-3">
				@foreach($professors as $professor)
				<div class = "panel panel-default">
					<div class = "panel-heading">
						{{ $professor->school}}	
					</div>
					<div class = "panel-body">
						<h4><a href="professors/{{$professor->id}}">{{ $professor ->name }}</a></h4>
						<p>Class:&nbsp{{ $professor -> class}}</p>
						<p>Rating:&nbsp{{ $professor -> rating }} </p>
					</div>
					<div class = "panel-footer">
						<p>
						</p>
					</div>
				
				</div>
				@endforeach
			<a href= "{{ url('professors?sort+by=recent') }}">See more</a>
		</div>
		<div class = "col-md-offset-1">
			<h2>Most popular</h2>
			<div class = "col-md-3">
				@foreach($professors_popular as $Pprofessor)
				<div class = "panel panel-default">
					<div class = "panel-heading">
						{{ $Pprofessor->school}}	
					</div>
					<div class = "panel-body">
						<h4><a href="professors/{{$professor->id}}">{{ $professor ->name }}</a></h4>
						<p>Class:&nbsp{{ $Pprofessor -> class}}</p>
						<p>Rating:&nbsp{{ $Pprofessor -> rating }} </p>
					</div>
					<div class = "panel-footer">
						<p>
						</p>
					</div>
				
				</div>
				@endforeach
			<a href= "{{ url('professors?sort+by=popular') }}">See more</a>
		</div>
	</div>
</body>
@endsection
</html>
