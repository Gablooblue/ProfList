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
	<div class= "container" style = "padding-top: 70px">
		<div class="row">
			{{ Form::open(array('method' => 'get')) }}
				<div class= "col-md-4">
					<div class = 'form-group '>
						<label for ='school' class = "col-md-4 control-label">School</label>
						{{ Form::select('school', array('any' => 'Any', 'UPM' => 'UP Manila', 'UPD' => 'UP Diliman'), 'Any'  , ['class' => 'form-control', 'name' => 'school', 'id' =>'school', 'value' => "old('school')"]) }}
					</div>
				</div>
				<div class = "col-md-4">
					<div class = "form-group">
						<label for = 'sort' class = "col-md-4 control-label">Sort by</label>
						{{ Form::select('sort by', array('recent' => 'Most recent', 'popular' => 'Most popular', 'rating' => 'Highest rating'), 'recent' , ['class' => 'form-control', 'name' => 'sort', 'id' => 'sort']) }}
					</div>
				</div>
				<div class = "col-md-4">
					<div class = 'form-group'>
						<br>
						{{ Form::submit('Filter', array('class' => 'btn btn-primary', 'name' => 'filter', 'id' => 'filter')) }} 
					</div>
				</div>
			{{ Form::close() }}
		</div>
		<div class = "row">
			<div class="text-center">
				<input class = "btn btn-primary"type = "button" value = "Add a professor" onclick="{{ url('/professors/create') }}">
			</div>
		</div>
	</div>
	<!--Display profs here
	formatting is listed below -->
	<div class = "profList">
		<div class = "container">
			<div class= "row">
				<div class="media">
					@foreach ($professors as $professor)
					<div class="media-left">Picture here </div>
						<div class = "col md-4">
								<h2 style= "cursor:pointer;" class="media-heading"><a href="professors/{{$professor->id}}">{{ professors() -> fname }}</a></h2>
							<div class="media-body">
								<p><strong>{{ professors() -> likes / (professor() -> dislikes + professor() -> likes)}}%</strong></p>
								<p>University: {{ professors() -> school }}</p>
								<p>Teaches: {{ professors() -> class}}</p>
								<p><a href="professors/{{$professor->id}}">Write a review</a></p>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		<div class = "text-center">
			{{ $professors->links() }}
		</div>
	</div>
</body>	
@endsection				
