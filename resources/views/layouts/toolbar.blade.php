<!DOCTYPE html>
<html>
<head>
	<title> {{ config('app.name', 'Sophists') }}</title>
	<link href="/css/app.css" rel="stylesheet">
	<link href="/css/toolbar.css" rel="stylesheet">
	<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
    	<script src="/assets/js/jquery.js"></script>
	<script src="/js/app.js"></script>
	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content"{{ csrf_token() }}">
	<script>
		window.Laravel = <?php echo json_encode
		([
			'csrfToken' => csrf_token(),
		]); ?>
	</script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-93585080-1', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body>
	<nav id = "myToolbar" class = 'navbar navbar-default navbar-fixed-top'>
		<div class="container">
			<div class = "navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
				<a class="navbar-brand" href="{{ url('/') }}">{{config('app.name', 'Sophists') }}</a>
			</div>
		<div class= "collapse navbar-collapse"  id="navbar">
			<ul class = "nav navbar-nav">
				<!--<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Universities&nbsp<span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li> <a href="/universities?sort+by=recent">Most recent</a></li>
						<li> <a href="/universities?sort+by=popular">Most popular</a></li>
						<li> <a href="/universities?sort+by=rating">Highest Rating</a></li>
					</ul>	
				</li>-->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Professors&nbsp<span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<!--<li> <a href="{{ url('professors?sort+by=recent') }}">Most recent</a></li>
						<li> <a href="{{ url('professors?sort+by=popular')}}">Most popular</a></li>
						<li> <a href="{{ url('professors?sort+by=rating')}}">Highest Rating</a></li>-->
						<li> <a href="{{ url('search') }}">Search for professors</a></li>
						<li> <a href="{{ url('professors/create') }}">Add a professor</a></li>
						<li> <a href="{{ url('professors') }}">View all</a></li>
					</ul>	
				</li>
</span></a></li>
			</ul>
			<ul class = "nav navbar-nav navbar-right">	
				@if (Auth::guest())
					<li><a href= "{{url('/login')}}">Login</a></li>
					<li><a href="{{url('/register')}}">Sign Up</a></li>
				@else
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						{{Auth::user()->username}}&nbsp<span class= "caret"></span>
					</a>
					<ul class = "dropdown-menu">
						<!--<li> <a href= "{{ url('/account') }}">Account</a></li>-->
						<li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
					</ul>
				</li>
				@if (Auth::user()->username === 'admin')
					<li><a href = "{{url('schools/create')}}">Create School</a></li>
				@endif
 				<form id="logout-form" action = "{{ url('/logout') }}" method="POST" style="display:none;">
				{{ csrf_field() }}
				 </form>
				</li>
			</ul>
				@endif
		</div>	
	</nav>
	@yield('content')
	<br><br>
	<div class="footercenter">
	<nav id = "myFooter" class="footer">	
		<ul> 
			<li> <a href="{{ url('/about') }}">About us</a></li>
			<li> <a href="{{ url('/contact') }}">Contact us</a></li>
			<li> <a href="{{ url('/FAQ') }}">FAQ</a></li>
		</ul>
	</nav>
	</div>

</body>

</html>
