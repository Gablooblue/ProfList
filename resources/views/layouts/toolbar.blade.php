<!DOCTYPE html>
<html>
<head>
	<title> {{ config('app.name', 'Laravel') }}</title>
	<link href="/css/toolbar.css" rel="stylesheet">
	<script type="text/javascript" src="/js/rToolbar.js"></script>
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
	<div class="toolbackg">
	<nav id = "myToolbar" class = 'toolbar'>
		<ul>
			<div class="left_align">
			<div class = "title">
			<li class="titler"><a class="Sophists" href="{{ url('/') }}">{{config('app.name', 'Laravel') }}</a></li></div>
			<div class = 'rest'>
			<li><a href="{{ url('/professors') }}">Professors</a></li>
			<li><a href= "{{ url('/school') }}">Schools</a></li>
			
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
</li></div></div></div>
		</ul>
			@endif
			<li class ="iconer">
				<a class="icon" href="javascript:void(0);" onClick="navbar()">&#9776;</a>
			</li>
	</nav>
	</div>
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
