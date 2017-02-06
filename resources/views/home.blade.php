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
	<div class ="container">
		<div class = "col-md-offset-1">
			<h2>Recently Rated</h2>
		</div>
		<div class = "row"	>
			<div class = "col-md-3">
				@foreach($professors as $professor)
				<div class = "panel panel-default">
					<div class = "panel-heading">
						{{ $professor->school}}	
					</div>
					<div class = "panel-body">
						<h4>{{ $professor ->name }}</h4>
						<p>Class:&nbsp{{ $professor -> class }}</p>
						<p>Rating:&nbsp {{ $professor -> rating }} </p>
					</div>
					<div class = "panel-footer">
						<p>
						</p>
					</div>
				
				</div>
				@endforeach
			</div>
		
	</div>
</body>
@endsection
</html>
