@extends('layouts.toolbar')

@section('content')
<div class = "container" style = "padding-top:70px;">
	<div class = "panel default-panel">
		<!-- TODO
			Add uni picture
			Add number of profs
		-->
		<div class = "panel-body">
			<h2> {{ $university->name() }}	</h2>
			<p>Amount of professors: {{ $university->ProfAmount() }}</p>
			<p>Contact info: {{$university -> contact()}} </p>
			<p>Address: {{ $university->address() }}</p>
		</div>
	</div>
</div>
@endsection
