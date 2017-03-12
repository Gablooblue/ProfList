@extends ('layouts.toolbar')

@section ('content')

<div class = "container" style = "padding-top:70px;">
	<form class = "form-horizontal"	role="form" method="post">
		{{ csrf_field() }}
		<input id = "name" type = "text" name = "name" class = "form-control" value="{{old('name')}}" placeholder="name" required autofocus/>
		<button type = "submit" class= "btn btn-primary">Submit</button>
	</form>
</div>

@endsection

