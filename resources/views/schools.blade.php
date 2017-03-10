@extends('layouts.toolbar')

@section('content')
<head>
	<title> Schools </title>
	<link rel= "stylesheets" href="/css/schools.css">
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
	<div class= "container" style= "padding-top:70px;">
		<div class = "row">
			<!--{{ Form::open(array('method' => 'get')) }}
				<div class= "col-md-6">
					<!--Sort by:
					{{ Form::select('sort by', array('recent' => 'Most Recent', 'popular' => 'Most Popular', 'rating' => 'Highest Rating'), 'rating', ['class' => 'form-control']) }}	
					{{ Form::submit('Filter') }} 
				</div>
			{{ Form::close() }}
		</div>
		<div class = "row">
			<div class="text-center">
				<input class = "btn-gradient"type = "button" value = "Add a university" onclick="{{ url('/universities/create') }}">
			</div>-->
		</div>
	
	</div>
	{{ Form::close() }}
	<!--Display schools here
	formatting is listed below -->
	<div class = "schoolList">
		<div class= "container">
			@foreach ($schools as $school)
				<div class = "col md-4">
					<div class = "panel panel-default">
						<div class = "panel-body">
							<div class="media">
								<div class="media-left"> Picture Here </div>
								<div class = "media-right">
									<h2 class="media-heading">{{ $school->name }}</h2>
									<div class="media body">
										<p>{{ $school->contact}}</p>
										<p>{{ $school->address }}</p>
									</div>
								</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		{{ $schools->links() }}
	</div>
</body>				
@endsection
