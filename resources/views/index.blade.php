@extends('layouts.toolbar')

@section('content')

<!-- Custom CSS -->
<link href="css/landing-page.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Header -->
<a name="about"></a>
<div class="intro-header">
<div class="container">
    <div class="row">
	<div class="col-lg-12">
	    <div class="intro-message">
		<h1>Sophists</h1>
		<h3>Find and rate your professors</h3>
		<hr class="intro-divider">
		<ul class="list-inline intro-social-buttons">
		    <li>
			<a href="{{ url('/login') }}" class = "btn btn-primary">Login</a>
		    </li>
		    <li>
			<a href="{{ url('/register') }}" class = "btn btn-primary">Sign Up</a>
		    </li>
		</ul>
	    </div>
	</div>
    </div>

</div>
<!-- /.container -->

</div>
<!-- /.intro-header -->

<!-- Page Content -->

<a  name="services"></a>
<div class="content-section-a">

<div class="container">
    <div class="row">
	<div class="col-lg-5 col-sm-6">
	    <hr class="section-heading-spacer">
	    <div class="clearfix"></div>
	    <h2 class="section-heading">What makes Sophists different</h2>
	    <p class="lead">Other sites use a 5-star system to rate professors. Sophists uses a simple like-dislike system to allow for more accurate results </p>
	</div>
	<div class="col-lg-5 col-lg-offset-2 col-sm-6">
	    <img class="img-responsive" src="../top-univs.jpg" alt="">
	</div>
    </div>

</div>
<!-- /.container -->

</div>
<!-- /.content-section-a -->

<div class="content-section-b">

<div class="container">

    <div class="row">
	<div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
	    <hr class="section-heading-spacer">
	    <div class="clearfix"></div>
	    <h2 class="section-heading">Check out your professors</h2>
	    <p class="lead">View student's comments and reviews about their professors</p>
	</div>
	<div class="col-lg-5 col-sm-pull-6  col-sm-6">
	    <img class="img-responsive" src="../Beard-Algorithm.jpg" alt="">
	</div>
    </div>

</div>
<!-- /.container -->

</div>
<!-- /.content-section-b -->

<div class="content-section-a">

<div class="container">

    <div class="row">
	<div class="col-lg-5 col-sm-6">
	    <hr class="section-heading-spacer">
	    <div class="clearfix"></div>
	    <h2 class="section-heading">Review and comment on your professors</h2>
	    <p class="lead">Sign up now to review your professors.</p>
	</div>
	<div class="col-lg-5 col-lg-offset-2 col-sm-6">
	    <img class="img-responsive" src="../mouse.jpg" alt="">
	</div>
    </div>

</div>
<!-- /.container -->

</div>
<!-- /.content-section-a -->

<a  name="contact"></a>
<div class="banner" style="background-color:#2E4372;">

<div class="container" >

    <div class="row">
	<div class="col-lg-6">
	    <h2 style = "color:#FFDD00">Get started now</h2>
	</div>
	<div class="col-lg-6">
	    <ul class="list-inline banner-social-buttons">
		<li>
		    <a href="{{url('login')}}" class="btn btn-default btn-lg"><span class="network-name">Login</span></a>
		</li>
		<li>
		    <a href="{{url('register')}}" class="btn btn-default btn-lg"><span class="network-name">Sign Up</span></a>
		</li>
	    </ul>
	</div>
    </div>

</div>
<!-- /.container -->
</div>
<!-- /.banner -->

@endsection
