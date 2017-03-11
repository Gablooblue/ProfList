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
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#filter">Filters</button>
		<div class="modal fade" id="filter" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						{{ Form::open(array('method' => 'get')) }}
							<div class = 'form-group '>
								<label for ='school' class = "col-md-4 control-label">School</label>
								{{ Form::select('school', array('any' => 'Any', 'UPM' => 'UP Manila', 'UPD' => 'UP Diliman'), 'Any'  , ['class' => 'form-control', 'name' => 'school', 'id' =>'school', 'value' => "old('school')"]) }}
							</div>
						<div class = "form-group">
								<label for = 'sort' class = "col-md-4 control-label">Sort by</label>
								{{ Form::select('sort by', array('recent' => 'Most recent', 'popular' => 'Most popular', 'rating' => 'Highest rating'), 'recent' , ['class' => 'form-control', 'name' => 'sort', 'id' => 'sort']) }}
							</div>
							<div class = 'form-group'>
								{{ Form::submit('Filter', array('class' => 'btn btn-primary', 'name' => 'filter', 'id' => 'filter')) }} 
							</div>
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class ="container">
		<div class="text-center">
			<a class = "btn btn-primary"type = "button"  href="{{ url('/professors/create') }}">Add a professor</a>
		</div>
	</div>
	<!--Display profs here
	formatting is listed below -->
	<div class = "container">
		@foreach ($professors as $professor)
			<div class = "col-md-12">
				<div class = "panel panel-default">
					<div class = "panel-body">
						<div class="media">
							<div class="media-left">Picture here </div>
							<div class = "media-right">
								<h2 style= "cursor:pointer;" class="media-heading"><a href="professors/{{$professor->id}}">{{ $professor -> lname }}, {{$professor->fname}} {{$professor->mname}}</a></h2>	
									<div class= "pull-right">
										<h1 class="media-heading">{{ round($professor -> likes / ($professor -> dislikes + $professor -> likes) * 100 ,2)}}%</h1>
										<a href="professors/{{$professor->id}}">{{$professor->comments_count}} reviews</a>
									</div>

								<div class="media-body">
									<p>University: {{ $professor->university->name }}</p>
									<p>Teaches: {{ $professor -> class}}</p>
									<p><a href="professors/{{$professor->id}}">Write a review</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
			</div>
		<div class = "text-center">
			{{ $professors->links() }}
	</div>
</body>	
@endsection				
