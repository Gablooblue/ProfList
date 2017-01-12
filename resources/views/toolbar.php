<!DOCTYPE html>
<html>
<body>
	<table class = "myToolbar" name = 'toolbar'>
		<ul>
			<li>{{ HTML::link(Home</li>
			<li>Sort by</li>
			<li>About us</li>
		<?php if(isset($_SESSION['id'])
			{
			"<li>Login</li>"
			"<li>Sign Up</li>"
			}
			else
			{
				echo "<li>"$_SESSION['username']; "</li>"
				"<li>Logout</li>"
			}		
		?>
</body>
</html>
