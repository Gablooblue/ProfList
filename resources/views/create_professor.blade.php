@extends('layouts.toolbar')

@section('content')

<div class = "container" style= "padding-top:70px;">
	<div class = "col-md-8 col-md-offset-2">
		<div class = "panel panel-default">
			<div class = "panel-heading">
				Submit a professor
			</div>
			<div class = "panel-body">
				<div class = "form-horizontal" role="form" method="post" action={{url('/professor/create')}}>
					{{ csrf_field() }
					<div class = "form-group{{ $errors->has('name') ? ' has-error' : ''}}" >
						<label for ="name" class=" col-md-4 control-label">Name</label>
						<div class="col-md-6">
							 <input type= "text" name = "name" class = "form-control" value="{{ old('name') }}" required autofocus/> 
						</div>
					</div>
					<div class = "form-group {{$errors}}"	
					<p>School: <input type = "dropdown" name = "name" </p>
					<p>Class/Classes: <input type= "text" name= "class" class ="class" placeholder="Ex. Math 17, CMSC 21"> </p>
					<p>Picture <!-- TODO Input file upload --> </p>
					<p><button type = "submit" class="btn btn-primary">Submit</button></p>
			
				</div>
			</div>
		</div>
		</div>
	</div>

@endsection
