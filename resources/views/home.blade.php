<!DOCTYPE html>
<html>
@extends('layouts.toolbar')

@section('content')
<head>
	<title> Home</title>
</head>
<body>
	<div class ="container" style="padding-top:70px;">
	<h2>Get started</h2>
	<div class = "col-md-8 col-md-offset-2">
		<div class = "panel default-panel" style="background-color:transparent;"> 
			<div class = "panel-body">
				<h3>Look for your professor</h3>
				<form class = "form-horizontal" role="form" method="get" action="{{ url('professors') }}">
					<div class= "form-group has-feedback">
						<input type="text" class="form-control" name="search" id="search" placeholder="Search">
						<i class ="glyphicon glyphicon-search form-control-feedback"></i>
					</div>
					<div class = "form-group">
						<label for="school" class="control-label">University</label>
						<select class="form-control" name = "school" id = "school" value = "old('school')">
							<option selected>Any</option>
							@foreach ($universities as $university)
								<option value="{{$university->id}}">{{$university->name}}</option>
							@endforeach
						</select>
					</div>
					<div class = "form-group">
						<input type="submit" name = "submit" id = "submit" placeholder="Search" class = "btn btn-primary">
					</div>
				</form>
			</div>
		</div>	
		<div class = "text-center">
			<h3 >Can't find the professor you're looking for?</h3>
			<h4>Click <a href= "{{url('professors/create')}}" style="color:#FFDD00;">here</a> to add your professor to the database</h4>
		</div>
	</div>
	</div>
</body>
@endsection
</html>
