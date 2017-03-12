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
		<div class = "col-md-6"> 
			<form class = "form-horizontal" role="form" method="get" action="{{ url('professors') }}">
				<div class= "form-group has-feedback">
					<input type="text" class="form-control" name="search" id="search" placeholder="Search">
					<i class ="glyphicon glyphicon-search form-control-feedback"></i>
				</div>
				<div class = "form-group">
					<select class="form-control" name = "school" id = "school" value = "old('school')">
						<option selected>Any</option>
						@foreach ($universities as $university)
							<option value="{{$university->id}}">{{$university->name}}</option>
						@endforeach
					</select>
				</div>
			</form>
		</div>
	
	</div>
</body>
@endsection
</html>
