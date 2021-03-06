@extends('layouts.toolbar')

@section('content')

<div class = "container" style= "padding-top:70px;">
	<div class = "col-md-8 col-md-offset-2">
		<div class = "panel panel-default">
			<div class = "panel-body">
			<h3 class = "text-center">Add a professor</h3>
				<form class = "form-horizontal" role="form" method="post" >
					{{ csrf_field() }}
					<div class = "form-group{{ $errors->has('fname') ? ' has-error' : ''}}" >
						<label for ="fname" class=" col-md-4 control-label">First name</label>
						<div class="col-md-6">
							 <input id ="fname" type= "text" name = "fname" class = "form-control" value="{{ old('fname') }}" required autofocus/> 
						@if ($errors->has('fname'))
						    <span class="help-block">
						<strong>{{ $errors->first('fname') }}</strong>
					    </span>
					@endif
						</div>
						
					</div>
						<div class = "form-group{{ $errors->has('lname') ? ' has-error' : ''}}" >
						<label for ="lname" class=" col-md-4 control-label">Surname</label>
						<div class="col-md-6">
							 <input id = "lname"type= "text" name = "lname" class = "form-control" value="{{ old('lname') }}" required autofocus/> 
						@if ($errors->has('lname'))
						    <span class="help-block">
						<strong>{{ $errors->first('lname') }}</strong>
					    </span>
					@endif
						</div>
						
					</div>
						<div class = "form-group{{ $errors->has('mname') ? ' has-error' : ''}}" >
						<label for ="mname" class=" col-md-4 control-label">Middle Initial</label>
						<div class="col-md-6">
							 <input id = "mname" type= "text" name = "mname" class = "form-control" value="{{ old('mname') }}" placeholder="Optional"> 
						@if ($errors->has('mname'))
						    <span class="help-block">
						<strong>{{ $errors->first('mname') }}</strong>
					    </span>
					@endif
						</div>
						
					</div>
					<div class = "form-group {{$errors->has('school') ? 'has-error' : ''}}"> 	
						<label for = "school" class = "col-md-4 control-label">University</label>
						<div class = "col-md-6">
							<select class="form-control" name = "school" id = "school" value = "old('school')" required autofocus>
								<option disabled selected>Choose a university</option>
								@foreach ($universities as $university)
									<option value="{{$university->id}}">{{$university->name}}</option>
								@endforeach
							</select>
							@if ($errors->has('school'))
								<span class = "help-block">
									<strong>{{$errors->first('school') }} </strong>
							</span>
							@endif
						</div>
					</div>
					<div class = "form-group {{ $errors->has('class' ? ' has-error' : '')}}">
						<label for= "class" class = "col-md-4 control-label">Class/Classes</label>
						<div class = "col-md-6">
							<input type= "text" name='class' id='class' class="form-control" placeholder="Ex. Math 17, CMSC 21 (Optional)"> 
							@if ($errors->has('class'))	
								<span class = "help-block">
									<strong> {{ $errors->first('class') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class = "form-group">
						<div class = "col-md-8 col-md-offset-4">
							<button type = "submit" class="btn btn-primary">Submit</button>
						</div>	
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>

@endsection
