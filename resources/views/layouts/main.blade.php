<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>JOBBERS | Home </title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('jasset/css/bootstrap.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="main" rel="stylesheet" type="text/css" href="{{URL::asset('jasset/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('jasset/icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('jasset/css/owl.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('jasset/css/prettyPhoto.css')}}">
	<link href="{{URL::asset('jasset/font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('jasset/css/animate.css')}}" rel="stylesheet" type="text/css">
	<link rel="icon"  type="image/png"    href="{{URL::asset('jasset/img/favico.ico')}}" />
</head>
<body>
<!--{{URL::asset('jasset/')}}-->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-top text-right">
<div class="social">

				<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
				<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
				<a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
				<a href="#" class="vine"><i class="fa fa-vine"></i></a>
				<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
			</div>
	</div>
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-ellipsis-v"></i>
			</button>
			<a class="navbar-brand" href="{{url('/')}}"><img src="{{URL::asset('jasset/img/logo.png')}}" alt=""></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="{{url('/')}}">Home</a></li>
				<li class="dropdown active">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">How it Works? <span class="caret"></span></a>
		          <ul class="dropdown-menu animated pulse" role="menu">
		            <li><a href="about.html">About</a></li>
		            <li><a href="features.html">Features</a></li>
		            <li><a href="plans_and_pricings.html">Plans and Pricings</a></li>
		          </ul>
		        </li>
				<!--<li class="dropdown active">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
		          <ul class="dropdown-menu animated pulse" role="menu">
		            <li><a href="blog.html">Blog List</a></li>
		            <li><a href="blog_single.html">Blog Single</a></li>
		          </ul>
		        </li>-->
		        <li class="dropdown active">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Job Seekers <span class="caret"></span><sup class="pill blue">10</sup></a>
		          <ul class="dropdown-menu animated pulse" role="menu">
		            <li><a href="profile_employer.html">Employer Profile</a></li>
		            <li><a href="{{ url('jobsearch') }}">Job Search</a></li>
		          </ul>
		        </li>
				<li class="dropdown active">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employeers <span class="caret"></span><sup class="pill blue">48</sup></a>
		          <ul class="dropdown-menu animated pulse" role="menu">
		            <li><a href="profile_worker.html">Worker Profile</a></li>
		            <li><a href="employers_list.html">Search Employers</a></li>
		            <li><a href="worker_search.html">Worker Search</a></li>
		          </ul>
		        </li>
				<li><a href="contact.html">Contact</a></li>
				<li>	@if(Auth::check())
	 <a href="{{ route('logout') }}"
		onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
		Logout
	</a>
	 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
     </form>
	@endif 	</li>
				<li>
				<form class="navbar-form" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
				</form>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<!-- ==========================Content========================= -->

@yield('content')

<!-- ==========================Content========================= -->

<section class="section-alt1 no-margin">
	<div class="container">
		<div class="row owl-clients">
			<div class="item text-center">
				<img src="{{URL::asset('jasset/img/clients/1.png')}}" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="{{URL::asset('jasset/img/clients/2.png')}}" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="{{URL::asset('jasset/img/clients/3.png')}}" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="{{URL::asset('jasset/img/clients/4.png')}}" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="{{URL::asset('jasset/img/clients/1.png')}}" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="{{URL::asset('jasset/img/clients/2.png')}}" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="{{URL::asset('jasset/img/clients/3.png')}}" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="{{URL::asset('jasset/img/clients/4.png')}}" class="client" alt="">
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<img src="{{URL::asset('jasset/img/logo_white.png')}}" class="logo-white" alt="">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
			</div>
			<div class="col-md-3 col-sm-6 text-left">
				<h4 class="heading no-margin">Sitemap</h4>
				<hr class="blue">
				<div class="col-md-6 no-padding">
					<a href="#">Home</a>
					<a href="#">Search for jobs</a>
					<a href="#">Post a job</a>
					<a href="#">How it works</a>
				</div>
				<div class="col-md-6 no-padding">
					<a href="#">Features</a>
					<a href="#">Privacy Policy</a>
					<a href="#">Terms of use</a>
					<a href="#">Contact us</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 text-left">
				<h4 class="heading no-margin">Twitter Widget</h4>
				<hr class="blue">
				<div class="twitter-feed">
					<p class="no-margin"><strong>@cravious</strong>500 new jobs for freelance graphic designer</p>
					<p class="muted"># 2 hours ago</p>
				</div>
				<div class="twitter-feed">
					<p class="no-margin"><strong>@cravious</strong>500 new jobs for freelance graphic designer</p>
					<p class="muted"># 2 hours ago</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 text-left">
				<h4 class="heading no-margin">Sign up for our newsletter</h4>
				<hr class="blue">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
				<form>
					<input type="text" class="form-control" placeholder="Enter your email">
					<button type="button" class="btn blue no-margin">Subscribe now!</button>
				</form>
			</div>
		</div>
	</div>
	<div class="row bottom no-padding no-margin">
		<div class="container">
			<div class="col-md-12 no-padding text-left column-bottom">
				<p>Copyright &copy; <span class="blue-color">Jobbers </span> {{ date('Y') }} | All right reserved</p>
			</div>
		</div>
	</div>
</footer>




	<script src="{{URL::asset('jasset/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::asset('jasset/js/smoothWheel.js')}}"></script>
	<script src="{{URL::asset('jasset/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('jasset/js/owl.carousel.js')}}"></script>
	<script src="{{URL::asset('jasset/js/jquery.prettyPhoto.js')}}"></script>
	<script src="{{URL::asset('jasset/js/images-loaded.js')}}"></script>
	<script src="{{URL::asset('jasset/js/jquery.count.js')}}"></script>
	<script src="{{URL::asset('jasset/js/knobify.js')}}"></script>
	<script src="{{URL::asset('jasset/js/isotope.js')}}"></script>
	<script src="{{URL::asset('jasset/js/main.js')}}"></script>

</body>

</html>
