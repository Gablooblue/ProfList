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
<div class="jumbotron" id = "intro-header">
<div class="container">
    <div class="row">
	<div class="col-lg-12 pull-right">
	    <div class="intro-message">
		<h3>Start looking for your professors</h3>
		<div class = "col-md-4 col-md-offset-4">
		    <div class = "form-group">
			<form role="form" method="get" action="{{ url('professors') }}">
			    <div class= "form-group has-feedback">
				    <input type="text" class="form-control" name="search" id="search" placeholder="Search">
				    <i class ="glyphicon glyphicon-search form-control-feedback"></i>
			    </div>
			    <label for ="school" class = "col-md-2 control-label">University</label>
			    <select class="form-control" name = "school" id = "school" value = "old('school')">
				    <option selected value=''>Any</option>
				    @foreach ($universities as $university)
					    <option value="{{$university->id}}">{{$university->name}}</option>
				    @endforeach
			    </select>
		    </div>
		    </form>
		</div>
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
	    <h2 class="section-heading">A more realistic rating system</h2>
	    <p class="lead">Other sites use a 5-star system to rate professors. Sophists uses a simple like-dislike system to not only make the user experience better, but also allows for more explicit and accurate ratings</p>
	</div>
	<div class="col-lg-5 col-lg-offset-2 col-sm-6">
	    <img class="img-responsive" src="../Beard-Algorithm.jpg" alt="">
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
	    <h2 class="section-heading">Supports many universities</h2>
	    <p class="lead">Sophists supports a large amount of universities and has the capacity to expand to even more in the future</p>
	</div>
	<div class="col-lg-5 col-sm-pull-6  col-sm-6">
	    <img class="img-responsive" src="../top-univs.png" alt="">
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
	    <h2 class="section-heading">Ease of use</h2>
	    <p class="lead">This mobile-responsive website is designed with simplicity and user-friendliness in mind and also works on your phone.</p>
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
