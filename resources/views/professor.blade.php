@extends('layouts.toolbar')

@section('content')
<div class = "container" style="padding-top:70px;">
	<div class = "panel default-panel">
		<!-- TODO
			Add professor picture
			Add review percentage
			Add reviews section
				& submit review button
		-->	
		<div class = "panel-heading">
			{[ $professor->school()  ]}
		</div>
		<div class = "panel-body">
			<h2> {{ $professor->name() }} </h2>
			<p>{{ $professor->class() }} </p>
			<!-- Replace this
				with percentage
				--!>
			<p> {{ $professor->likes() }} </p>
			<p> {{ $professor->dislikes() }}</p>
		
		<!-- add reviews here -->
		</div>
	</div>
</div>
@endsection
