@extends ('layouts.toolbar')

@section ('content')

<div class = "container" style = "padding-top:70px;">
    <div class = "panel default-panel">
	<div class = "panel-body">
	    <h2> {{ $university->name }} </h2>
	</div>
    </div>
    <div class = "container">
	    <h3 class = "text-center">Professor({{ $university->professors->count() }})</h3>
	    @if ($university->professors->count() === 0)
		    <div class = 'text-center'>
			    <h3>No results found</h3>
			    <h4>Can't find the professor you're looking for? Click <a href="{{url('professors/create')}}" style="color:#FFDD00;">here</a> to add them to the list</h4>
		    </div>
	    @endif
	    @foreach ($university->professors as $professor)
		    <div class = "col-md-12">
			    <div class = "panel panel-default">
				    <div class = "panel-body">
					    <div class="media">
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
</div>
