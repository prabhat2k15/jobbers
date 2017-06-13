@extends('layouts.main')

@section('content')
<section class="worker-header light-gray">
	<div class="container">
		<div class="row">
<!--FORM-->	<form action="{{route('profilesubmit')}}" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
		<?php
			if(isset(Auth::user()->email))
			{ $flag=true;
			  $user = DB::table('profile')->where('email',Auth::user()->email)->first();
			 }
		?>

			<div class="col-sm-2">
				<img src="{{asset('jasset/img/people/1.png')}}" class="worker-mid-pic" alt="">
				<ul class="social text-left">
					<li><a href="#" class="social-link 
						twitter"><i class="fa fa-twitter"></i> <input type="text" name="twitter" placeholder="http://twiter.com/mytwitter" value="{{{ $flag ? $user->twitter : '' }}}"></a></li>
					<li><a href="#" class="social-link 
						facebook"><i class="fa fa-facebook"></i> <input type="text" name="facebook" placeholder="http://facebook.com/myfbid" value="{{{ $flag ? $user->facebook : '' }}}"></a></li>
					<li><a href="#" class="social-link 
						google-plus"><i class="fa fa-google-plus-square"></i><input type="text" name="linkedin" placeholder="http://linkedin.com/mylinkedinid" value="{{{ $flag ? $user->linkedin : '' }}}"></a></li>
				</ul>
			</div>
			<div class="col-sm-6">
				<h3><input type="text" name="name" value="{{{ $flag ? Auth::user()->name : 'No name' }}}"></h3>
				<h5>Designation : <input type="text" name="designation" placeholder="Web Developer" value="{{{ $flag ? $user->designation : '' }}} "> at <a href="#"><input type="text" name="company" value="{{{ $flag ? $user->company : '' }}}" placeholder="Creativedesign.com"></a></h5>
				<p>Location : <i class="fa fa-map-marker"></i> <input type="text" name="address" placeholder="Los Angeles, United States" value="{{{ $flag ? $user->address : '' }}}"></p>
				<br>
                Skills(separated with comma ,):<input type="text" name="skills" value="{{{ $flag ? $user->skills : '' }}}" placeholder="Java, Php, Spring, MySQL, Laravel " >
				<!--<a href="#" class="tag">Design</a>
				<a href="#" class="tag">Development</a>
				<a href="#" class="tag">Seo</a>-->
				<div class="row">
					<div class="col-md-12">
					<!--<a href="#" class="btn blue">Hire</a>-->
					Upload your CV/Resume<input type="file"  name="cv" class="btn default ">						
					<input type="submit" class="btn green">						
						<a href="#" class="btn gray"><i class="fa fa-envelope-o"></i> Send Message</a>
					</div>
				</div>
			</div>
			<div class="col-sm-2 text-center">
				<h6 class="alt">Salary</h6>
				<h3><select name="salary" value="{{{ $flag ? $user->salary : '' }}}" class="form-control">
					<option>Salary : (per month)</option>
					<option <?php if ($user->salary === '5000') echo ' selected="selected"' ?>>5000</option>
					<option <?php if ($user->salary === '7500') echo ' selected="selected"' ?>>7500</option>
					<option <?php if ($user->salary === '10000') echo ' selected="selected"' ?>>10000</option>
					<option <?php if ($user->salary === '20000') echo ' selected="selected"' ?>>20000</option>
					<option <?php if ($user->salary === '30000') echo ' selected="selected"' ?>>30000</option>
					<option <?php if ($user->salary === '>40000') echo ' selected="selected"' ?>>>40000</option>
				</select>    </h3>
				<h6 class="alt">Experience</h6>
				<h3><select name="experience" value="{{{ $flag ? $user->experience : '' }}}" class="form-control">
					<option>Select Experience in years</option>
					<option <?php if ($user->experience === '< 1') echo ' selected="selected"' ?>>< 1 </option>
					<option <?php if ($user->experience === '1') echo ' selected="selected"' ?>>1</option>
					<option <?php if ($user->experience === '2') echo ' selected="selected"' ?>>2</option>
					<option <?php if ($user->experience === '3') echo ' selected="selected"' ?>>3</option>
					<option <?php if ($user->experience === '4') echo ' selected="selected"' ?>>4</option>
					<option <?php if ($user->experience === '5') echo ' selected="selected"' ?>>5</option>
					<option <?php if ($user->experience === '> 5') echo ' selected="selected"' ?>>> 5</option>
				</select></h3>
			</div>
			<div class="col-sm-2 text-center">
				<h6 class="alt">Highest Education</h6>
				<h3><select name="education" value="{{{ $flag ? $user->education : '' }}}" class="form-control">
					<option>Select Highest Education</option>
					<option <?php if ($user->education === 'Masters') echo ' selected="selected"' ?>>Masters </option>
					<option <?php if ($user->education === 'Bachelors') echo ' selected="selected"' ?>>Bachelors</option>
					<option <?php if ($user->education === '12th') echo ' selected="selected"' ?>>12th</option>
					<option <?php if ($user->education === 'SLC/10th') echo ' selected="selected"' ?>>SLC/10th</option>
					<option <?php if ($user->education === 'Other') echo ' selected="selected"' ?>>Other</option>
				</select></h3>
				<h6 class="alt">Languages</h6>
				<img src="{{asset('jasset/img/languages/de.png')}}" alt=""> 
				<img src="{{asset('jasset/img/languages/us.png')}}" alt="">
				<img src="{{asset('jasset/img/languages/pl.png')}}" alt="">
			</div>
		</div>
		</form>
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
