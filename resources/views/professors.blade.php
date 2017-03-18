@extends('layouts.toolbar')

@section('content')
<head>
	<title> Professors </title>
	<meta name="csrf-token" content"{{ csrf_token() }}">
	<script>
		window.Laravel = <?php echo json_encode
		([
			'csrfToken' => csrf_token(),
		]); ?>
	</script>

</head>
<body>
	<div class= "container" style = "padding-top: 70px; ">
		<div class = "row">
			<div class = "col-md-6"> 
				<form class = "form-horizontal" role="form" method="get">
					<div class= "form-group has-feedback">
						<input type="text" class="form-control" name="search" id="search" placeholder="Search">
						<i class ="glyphicon glyphicon-search form-control-feedback"></i>
					</div>
				</form>
			</div>
			<div class = "col-md-2">
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#filter">Advanced filters</button>
			</div>
		</div>
		<div class="modal fade" id="filter" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
							<form role="form" method="get" action="{{ url('professors') }}">
								<div class = "col-md-12">
									<div class= "form-group has-feedback">
										<input type="text" class="form-control" name="search" id="search" placeholder="Search">
										<i class ="glyphicon glyphicon-search form-control-feedback"></i>
									</div>
								</div>
								<div class = "col-md-12">
									<div class = "form-group">
										<label for ="school" class = "col-md-4 control-label">University</label>
										<select class="form-control" name = "school" id = "school" value = "old('school')">
											<option selected value=''>Any</option>
											@foreach ($universities as $university)
												<option value="{{$university->id}}">{{$university->name}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class = "text-center">
									<span> More filters coming soon</span>
								</div>
								<!--<div class = "form-group">
								<label for = 'sort' class = "col-md-4 control-label">Sort by</label>
								{{ Form::select('sort by', array('recent' => 'Most recent', 'popular' => 'Most popular', 'rating' => 'Highest rating'), 'recent' , ['class' => 'form-control', 'name' => 'sort', 'id' => 'sort']) }}
							</div>-->
								<div class = "clearfix">
									<div class="pull-right">
										<div class = 'form-group'>
											<button class = "btn btn-default" data-dismiss="modal">Cancel</button>
											<input type= "submit" class = "btn btn-primary" name = "filter" id = "filter">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		@if (Auth::guest() And $professors->count() != 0)
			<h4 class="text-center"><a href="{{url('login')}}" style="color:#FFDD00;">Login</a> or <a href="{{url('register')}}" style="color:#FFDD00;">Sign up</a> to add your professor to the list</h4>
		@elseif (Auth::user() And $professors->count() != 0)
			<h4 class="text-center">Click <a href="{{url('professors/create')}}" style="color:#FFDD00;">here</a> to add your professor to the list</h4>
		@endif
	<!--display professors here-->
	<!--<div class = "container" style="padding-bottom:10px;">
		<div class = "row">
			<div class = "col-md-5">
				<a class = "btn btn-primary"type = "button"  href="{{ url('/professors/create') }}"><i class="glyphicon glyphicon-plus"></i>&nbspAdd a professor</a>
			</div>
		</div>
	</div>-->
	<div class = "container">
		@if ($professors->count() === 0)
			<div class = 'text-center'>
				<h3>No results found</h3>
				<h4>Can't find the professor you're looking for? Click <a href="{{url('professors/create')}}" style="color:#FFDD00;">here</a> to add them to the list</h4>
			</div>
		@endif
		@foreach ($professors as $professor)
			<div class = "col-md-12">
				<div class = "panel panel-default">
					<div class = "panel-body">
						<div class="media">
							<div class="media-left"><img src="{{ url('/default-user.jpg') }}" alt="Image" class="rounded img-responsive" style="min-width:50; max-width:100px;"> </div>
							<div class = "media-right">
								<h2 style= "cursor:pointer;" class="media-heading"><a href="professors/{{$professor->id}}">{{ $professor -> lname }}, {{$professor->fname}} {{$professor->mname}}</a></h2>	
									<div class= "pull-right">
										<h1 class="media-heading">{{ round($professor -> likes / ($professor -> dislikes + $professor -> likes) * 100 ,2)}}%</h1>
										<a href="professors/{{$professor->id}}">{{$professor->comments_count}} review/s</a>
									</div>

								<div class="media-body">
									<p>University: {{ $professor->university->name }}</p>
									@if ($professor->class)
									<p>Teaches: {{ $professor -> class}}</p>
									@endif
									<p><a href="/professors/{{$professor->id}}" style="font-weight:bold;">View more</a></p>
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
