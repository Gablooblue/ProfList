<!DOCTYPE html>
<html>
<head>
	<title> {{ config('app.name', 'Laravel') }}</title>
	<link href="/css/toolbar.css" rel="stylesheet">
	<meta name="csrf-token" content"{{ csrf_token() }}">
	<script>
		window.Laravel = <?php echo json_encode
		([
			'csrfToken' => csrf_token(),
		]); ?>
	</script>
</head>
<body>
	<div class="toolbarx">
	<nav id = "myToolbar" class = 'toolbar'>
		<ul>
			<div class="left_align">
			<div class = "title">
			<li><a class="Sophists" href="{{ url('/') }}">{{config('app.name', 'Laravel') }}</a></li></div>
			<div class = 'rest'>
			<li><a href="{{ url('/professors') }}">Professors</a></li>
			<li><a href= "{{ url('/school') }}">Schools</a></li>
			<li><a href="{{ url('/about') }}">About us</a></li>
			</div></div>
			<div class = 'rest2'>
			<div class = "right_align">
			@if (Auth::guest())
				<li><a href= "{{url('/login')}}">Login</a></li>
				<li><a href="{{url('/register')}}">Sign Up</a></li>
			@else
				<li> <a href="/account">{{Auth::user()->username}}<a></li>
				<li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></div></div>
 				<form id="logout-form" action = "{{ url('/logout') }}" method="POST" style="display:none;"> </form>
				{{ csrf_field() }}
</li></div></div>
		</ul>
			@endif
	</nav>
	</div>
	@yield('content')
</body>
</html>