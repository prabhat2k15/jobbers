@extends('layouts.main')

@section('content')
<section class="worker-header light-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<img src="{{asset('jasset/img/people/1.png')}}" class="worker-mid-pic" alt="">
				<ul class="social text-left">
				<?php
					if(isset(Auth::user()->email))
					{ $user=DB::table('profile')->where('email',Auth::user()->email)->first(); }
					?>
					<li><a href="{{$user->twitter}}" class="social-link 
						twitter"><i class="fa fa-twitter"></i> Twitter</a></li>
					<li><a href="{{$user->facebook}}" class="social-link 
						facebook"><i class="fa fa-facebook"></i> Facebook</a></li>
					<li><a href="{{$user->linkedin}}" class="social-link 
						google-plus"><i class="fa fa-google-plus-square"></i> Linkedin</a></li>
				</ul>
			</div>
			<div class="col-sm-6">
				<h3>{{{ isset(Auth::user()->email) ? Auth::user()->name : "No name" }}} <h6 style="float: right;"><a href="{{route('editprofile')}}">Edit Profile</a></h6></h3>
				<h5>{{$user->designation}} at <a href="#">{{$user->company}}</a></h5>
				<p><i class="fa fa-map-marker"></i> {{$user->address}}</p>
				<br>
				<?php $skills=explode(",",$user->skills); ?>
				@foreach($skills as $skill)
				<a href="#" class="tag">{{$skill}}</a>
				@endforeach
				<div class="row">
					<div class="col-md-12">
						<a href="#" class="btn blue">Hire</a>
						<a href="#" class="btn gray"><i class="fa fa-envelope-o"></i> Send Message</a>
					</div>
				</div>
			</div>
			<div class="col-sm-2 text-center">
				<h6 class="alt">Salary</h6>
				<h3>{{$user->salary}}</h3>
				<h6 class="alt">Experience</h6>
				<h3>{{$user->experience}} years </h3>
			</div>
			<div class="col-sm-2 text-center">
				<h6 class="alt">Highest Education</h6>
				<h3>{{$user->education}}</h3>
				<h6 class="alt">Languages</h6>
				<img src="{{asset('jasset/img/languages/de.png')}}" alt=""> 
				<img src="{{asset('jasset/img/languages/us.png')}}" alt="">
				<img src="{{asset('jasset/img/languages/pl.png')}}" alt="">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12 description">
						<h4>Biography</h4>
						<p>We have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we can’t boast years and years of service we can ensure you that is a good thing in this industry. Our teams are up to date with the latest technologies, media trends and are keen to prove themselves in this industry and that’s what you want from an advertising agency.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>Employers Feedback</h4>
						<div class="comments">
							<div class="comment">
								<img src="img/people/1.png" class="comment-pic" alt="">
								<div class="content">
									<h5>Johnathan Doe <span class="muted">- posted 31 minutes ago</span></h5>
									<p>Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design.</p>
								</div>
							</div>
							<div class="comment nested">
								<img src="img/people/2.png" class="comment-pic" alt="">
								<div class="content">
									<h5>Johnathan Doe <span class="muted">- posted 31 minutes ago</span></h5>
									<p>Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design.</p>
								</div>
							</div>
							<div class="comment">
								<img src="img/people/3.png" class="comment-pic" alt="">
								<div class="content">
									<h5>Johnathan Doe <span class="muted">- posted 31 minutes ago</span></h5>
									<p>Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-danger">
					<div class="panel-heading">
					<h3 class="panel-title">Other people from <strong>Design.com</strong></h3>
					</div>
					<div class="panel-body sidebar-people">
						<div class="row">
							<div class="col-md-4">
								<img src="img/people/1.png" class="img-circle" alt="">
								<a href="#" class="sup green"><i class="fa fa-plus"></i></a>
							</div>
							<div class="col-md-4">
								<img src="img/people/2.png" class="img-circle" alt="">
								<a href="#" class="sup green"><i class="fa fa-plus"></i></a>
							</div>
							<div class="col-md-4">
								<img src="img/people/3.png" class="img-circle" alt="">
								<a href="#" class="sup blue"><i class="fa fa-check"></i></a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<img src="img/people/1.png" class="img-circle" alt="">
								<a href="#" class="sup blue"><i class="fa fa-check"></i></a>
							</div>
							<div class="col-md-4">
								<img src="img/people/2.png" class="img-circle" alt="">
								<a href="#" class="sup green"><i class="fa fa-plus"></i></a>
							</div>
							<div class="col-md-4">
								<img src="img/people/3.png" class="img-circle" alt="">
								<a href="#" class="sup green"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>Latest News</h4>
						<ul class="timeline">
							<li>
								<a href="#">New Web Design</a>
								<a href="#" class="pull-right blue-color">21 March, 2014</a>
								<p>You may have seen us in the Dinosaurs’ Den where we were we told that we didn’t need them because we were already doing it so well ourselves...</p>
							</li>
							<li>
								<a href="#">21 000 Job Seekers</a>
								<a href="#" class="pull-right blue-color">4 March, 2014</a>
								<p>Our teams are up to date with the latest technologies, media trends and are keen to prove themselves in this...</p>
							</li>
							<li>
								<a href="#">Awesome Employers</a>
								<a href="#" class="pull-right blue-color">1 April, 2014</a>
								<p>A number of different teams within our agency that specialise in different areas...</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<nav class="row text-center">
			<div class="col-md-12 text-center">
				<ul class="pagination text-center">
					<li>
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</section>
@endsection
