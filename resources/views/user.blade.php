@extends('layouts.toolbar')

@section('content')
<div class = "container" style = "padding-top:70px;">
	<div class = "panel default-panel">
		<!-- TODO
			Add profile picture
			Add amount of reviews
			Add amount of submissions
		-->
		<div class = "panel-body">
			<h2> {{ $user->username() }}</h2>
		</div>
	</div>
</div>
@endsection
