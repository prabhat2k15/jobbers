
@extends('layouts.main')

@section('content')
<header>
	<form class="col-md-3 col-md-offset-3 col-sm-6 col-xs-12 job-form" action="{{route('customjobsearch')}}" method="POST" >
	{{csrf_field()}}
		<h3>Go Cravious for your next short-term job <i class="fa fa-arrow-right small-icon"></i></h3>
		<input type="text" class="form-control white" name="keyword" placeholder="Keyword e.g. (Job Title, Description)">
		<input type="text" class="form-control white" name="location" placeholder="Location e.g. (Postal Code, Zip... )">
		<div class="col-md-6 no-padding">
			<a href="#" class="dropdown-input white">Time of day</a>
			<ul class="dropdown">
				<li><a href="#">Morning</a></li>
				<li><a href="#">Noon</a></li>
				<li><a href="#">Afternoon</a></li>
			</ul>
		</div>
		<div class="col-md-6 no-padding">
			<a href="#" class="dropdown-input white">Weekday</a>
			<ul class="dropdown">
				<li><a href="#">Monday</a></li>
				<li><a href="#">Tuesday</a></li>
				<li><a href="#">Wendsday</a></li>
				<li><a href="#">Thursday</a></li>
				<li><a href="#">Friday</a></li>
				<li><a href="#">Saturday</a></li>
				<li><a href="#">Sunday</a></li>
			</ul>
		</div>
		<button type="submit" class="btn dark-red">
			Search for a job <i class="fa fa-chevron-right"></i>
		</button>
	</form>
	
	<div class="owl-carousel owl-header">
			<div class="item" data-background="{{URL::asset('jasset/img/header.jpg')}}"></div>
			<div class="item" data-background="{{URL::asset('jasset/img/header2.jpg')}}"></div>
			<div class="item" data-background="{{URL::asset('jasset/img/header3.jpg')}}"></div>
		</div>
</header>
<section class="facts">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-3 col-sm-6 fact">
				<span class="number">241631</span> Registered Members
			</div>
			<div class="col-md-3 col-sm-6 fact">
				<span class="number">457412</span> Jobs Found
			</div>
			<div class="col-md-3 col-sm-6 fact">
				<span class="number">847</span> Awesome Companies
			</div>
			<div class="col-md-3 col-sm-6">

@if(!Auth::check())	<a href="{{URL::asset('login')}}" class="btn red no-margin">Login <i class="fa fa-chevron-right"></i></a> @endif
					<a href="{{URL::asset('postjob')}}" class="btn green no-margin">Post Job <i class="fa fa-chevron-right"></i></a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row title text-center">
			<h3>Offering the best deals</h3>
			<h6 class="alt">What we offer</h6>
		</div>
		<div class="row">
			<div class="col-md-4 feature text-center">
				<img src="{{URL::asset('jasset/img/heart.png')}}" alt="">
				<h4>Searching for the best job</h4>
				<p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
				<a href="#" class="btn read-more">Read More</a>
			</div>
			<div class="col-md-4 feature text-center">
				<img src="{{URL::asset('jasset/img/letter.png')}}" alt="">
				<h4>Searching for the best job</h4>
				<p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
				<a href="#" class="btn read-more">Read More</a>
			</div>
			<div class="col-md-4 feature text-center">
				<img src="{{URL::asset('jasset/img/watch.png')}}" alt="">
				<h4>Searching for the best job</h4>
				<p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
				<a href="#" class="btn read-more">Read More</a>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row text-left no-margin">
			<h3 class="small-margin">Find good a Job</h3>
			<h6 class="alt small-margin">Your job for the future</h6>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p class="blue-color">24123 Jobs Found</p>
				<div class="tabs-container">
					<div class="tab-nav">
                                            <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#tab1">For Job Seeker</a></li>
    <li><a data-toggle="tab" href="#tab2">For Companies</a></li>
    <li><a data-toggle="tab" href="#tab3">Find Candidates</a></li>
    
  </ul>
<!--						<a href="#tab1" class="active">For Job Seeker</a>
						<a href="#tab2">For Companies</a>
						<a href="#tab3">Find Candidates</a>-->
					</div>
                                    <div class="tab-content tab-holder">
                     
						<div class="tab tab-pane fade in active" id="tab1">
                                                    <div class="table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>Job Title</th>
									<th>By</th>
									<th>Option</th>
									<th>Location</th>
									<th>Budget</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								 @foreach($jobs as $job)
									<tr>
										<td>
											<a style="color:green;" href="{{  route('jd',$job->jobid)  }}">{{ $job -> jobid }}   </a>
								<a href="{{  route('jd',$job->jobid)  }}"	>
											<span>{{ $job->title }} </span>  </a>
										</td>
										<td>
											{{$job->company}}
										</td>
										<td> @if(strcmp($job->type,"Full Time")==0)
												<?php $typecolor="pill medium green"; ?>
											 @elseif(strcmp ($job->type,"Part Time") == 0)	
											 	<?php $typecolor="pill medium red"; ?>
											 @elseif(strcmp ($job->type,"Freelance") == 0)	
											 	<?php $typecolor="pill medium blue"; ?>
											 @else	
											 	<?php $typecolor="pill medium gray"; ?>
											 @endif
											<span class="{{ $typecolor }}">{{ $job->type }}</span>
										</td>
										<td>
											{{ $job->city }}
										</td>
										<td>
											{{ $job->salary }}
										</td>
										<td class="text-right">
											<a href="{{url('apply')}}" class="btn btn-small blue btn-apply">Apply</a>
										</td>
									</tr>
									<tr>
									@endforeach
										<!--<td>
											<img src="{{URL::asset('jasset/img/jobs/2.png')}}" alt="">
											<span>Web Designer Leader</span>
										</td>
										<td>
											Sapient
										</td>
										<td>
											<span class="pill medium red">Part Time</span>
										</td>
										<td>
											Ohio
										</td>
										<td>
											30$/h
										</td>
										<td class="text-right">
											<a href="#" class="btn btn-small blue btn-apply">Apply</a>
										</td>
									</tr>
									<tr>
										<td>
											<img src="{{URL::asset('jasset/img/jobs/3.png')}}" alt="">
											<span>Personal Trainer</span>
										</td>
										<td>
											DSM
										</td>
										<td>
											<span class="pill medium green">Full Time</span>
										</td>
										<td>
											Washington DC
										</td>
										<td>
											16$/h
										</td>
										<td class="text-right">
											<a href="#" class="btn btn-small blue btn-apply">Apply</a>
										</td>
									</tr>
									<tr>
										<td>
											<img src="{{URL::asset('jasset/img/jobs/4.png')}}" alt="">
											<span>Front-End/Back-end Developer</span>
										</td>
										<td>
											Mindshare
										</td>
										<td>
											<span class="pill medium gray">Weekend</span>
										</td>
										<td>
											New York City
										</td>
										<td>
											20$/h
										</td>
										<td class="text-right">
											<a href="#" class="btn btn-small blue btn-apply">Apply</a>
										</td>
									</tr>-->
								</tbody>
							</table>
                                                </div>
						</div>
						<div class="tab tab-pane fade" id="tab2">
                                                     <div class="table-responsive">
							<table class="table table-striped ">
								<thead>
									<tr>
									<th>Job Title</th>
									<th>By</th>
									<th>Option</th>
									<th>Location</th>
									<th>Budget</th>
									<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<img src="{{URL::asset('jasset/img/jobs/1.png')}}" alt="">
											<span>Professional Front-End Developer</span>
										</td>
										<td>
											Moen
										</td>
										<td>
											<span class="pill medium green">Full Time</span>
										</td>
										<td>
											New York City
										</td>
										<td>
											24$/h
										</td>
										<td class="text-right">
											<a href="#" class="btn btn-small blue btn-apply">Apply</a>
										</td>
									</tr>
									<tr>
										<td>
											<img src="{{URL::asset('jasset/img/jobs/4.png')}}" alt="">
											<span>Front-End/Back-end Developer</span>
										</td>
										<td>
											Mindshare
										</td>
										<td>
											<span class="pill medium gray">Weekend</span>
										</td>
										<td>
											New York City
										</td>
										<td>
											20$/h
										</td>
										<td class="text-right">
											<a href="#" class="btn btn-small blue btn-apply">Apply</a>
										</td>
									</tr>
								</tbody>
							</table>
                                                </div>
						</div>
						<div class="tab tab-pane fade" id="tab3">
                                                     <div class="table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>Job Title</th>
									<th>By</th>
									<th>Option</th>
									<th>Location</th>
									<th>Budget</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<img src="{{URL::asset('jasset/img/jobs/1.png')}}" alt="">
											<span>Professional Front-End Developer</span>
										</td>
										<td>
											Moen
										</td>
										<td>
											<span class="pill medium green">Full Time</span>
										</td>
										<td>
											New York City
										</td>
										<td>
											24$/h
										</td>
										<td class="text-right">
											<a href="#" class="btn btn-small blue btn-apply">Apply</a>
										</td>
									</tr>
									<tr>
										<td>
											<img src="{{URL::asset('jasset/img/jobs/3.png')}}" alt="">
											<span>Personal Trainer</span>
										</td>
										<td>
											DSM
										</td>
										<td>
											<span class="pill medium green">Full Time</span>
										</td>
										<td>
											Washington DC
										</td>
										<td>
											16$/h
										</td>
										<td class="text-right">
											<a href="#" class="btn btn-small blue btn-apply">Apply</a>
										</td>
									</tr>
								</tbody>
							</table>
                                                </div>
						</div>
						<div class="row">
							<div class="col-md-12 text-right">
								<a href="#"><i class="fa fa-angle-double-right"></i> see all jobs</a>
							</div>
						</div>
					
                                </div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-alt">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 no-padding">
				<img src="{{URL::asset('jasset/img/macbook_empty.png')}}" class="fullscreen-pic" alt="">
				<div class="owl-macbook">
					<div class="item" data-background="{{URL::asset('jasset/img/mac-slider.png')}}"></div>
					<div class="item" data-background="{{URL::asset('jasset/img/mac-slider.png')}}"></div>
					<div class="item" data-background="{{URL::asset('jasset/img/mac-slider.png')}}"></div>
				</div>	
			</div>
			<div class="col-md-4">
				<h3>Awesome Website Features</h3>
				<h6 class="alt">Easy Dashboard for Job Seekers</h6>
				<p>Alternatively if you have a specific service or question in mind please don’t hesitate to contact us to discuss this using the contact details on the Contact Us page of the site.</p>
				<ul class="list">
					<li>Responsive Design Layout</li>
					<li>UI / UX Dashboard Interface</li>
					<li>Webform Validation Progress</li>
					<li>Userfriendly Job Search Options</li>
				</ul>
				<p>You may have seen us in the Dinosaurs’ Den where we were we told that we didn’t need them because we were already doing it so well ourselves, so that’s what we have continued to do. We also hope to win Startup Fictional Business of the Year this Year.</p>
				<a href="#" class="btn blue btn-apply no-margin">Apply</a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row title text-center">
			<h3>Testimonial Clients</h3>
			<h6 class="alt">What our client says</h6>
		</div>
		<div class="row">
			<div class="owl-testimonials">
				<div class="text-center">
					<div class="testimonial-box">
						<p>“We will work with you to fully understand your business and to inform our <a href="#" class="blue-color">marketing</a> ”</p>
					</div>
					<img src="{{URL::asset('jasset/img/people/1.png')}}" class="testimonial-client img-circle" alt="">
					<h4>Markus Dovenberg</h4>
					<h5 class="alt">Web Designer</h5>
				</div>
				<div class="text-center">
					<div class="testimonial-box">
						<p>“We can create a brand that stands out and reflects the message you convey”</p>
					</div>
					<img src="{{URL::asset('jasset/img/people/2.png')}}" class="testimonial-client img-circle" alt="">
					<h4>Johnathan Doe</h4>
					<h5 class="alt">Marketing Manager</h5>
				</div>
				<div class="text-center">
					<div class="testimonial-box">
						<p>“Using the outcomes from the <a href="#" class="blue-color">Analysis</a>, we will put together a plan for the most effective ”</p>
					</div>
					<img src="{{URL::asset('jasset/img/people/3.png')}}" class="testimonial-client img-circle" alt="">
					<h4>Kennedy Johnson</h4>
					<h5 class="alt">SEO</h5>
				</div>
				<div class="text-center">
					<div class="testimonial-box">
						<p>“We will work with you to fully understand your business and to inform our <a href="#" class="blue-color">marketing</a> ”</p>
					</div>
					<img src="{{URL::asset('jasset/img/people/1.png')}}" class="testimonial-client img-circle" alt="">
					<h4>Markus Dovenberg</h4>
					<h5 class="alt">Web Designer</h5>
				</div>
				<div class="text-center">
					<div class="testimonial-box">
						<p>“We can create a brand that stands out and reflects the message you convey”</p>
					</div>
					<img src="{{URL::asset('jasset/img/people/2.png')}}" class="testimonial-client img-circle" alt="">
					<h4>Johnathan Doe</h4>
					<h5 class="alt">Marketing Manager</h5>
				</div>
				<div class="text-center">
					<div class="testimonial-box">
						<p>“Using the outcomes from the <a href="#" class="blue-color">Analysis</a>, we will put together a plan for the most effective ”</p>
					</div>
					<img src="{{URL::asset('jasset/img/people/3.png')}}" class="testimonial-client img-circle" alt="">
					<h4>Kennedy Johnson</h4>
					<h5 class="alt">SEO</h5>
				</div>
			</div>
		</div>
	</div>	
</section>



<section>
	<div class="container">
		<div class="row title text-center">
			<h3>Job Statistics</h3>
			<h6 class="alt">Here are the most popular categories</h6>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 statistic">
				<div class="left-column">
					<input class="dial" value="76" data-readonly="true" data-fgColor="#22c0e8" data-linecap="round" data-width="60" data-inputcolor="#2f2f2f">
				</div>
				<div class="right-column">
					<h5>Health Fitness</h5>
					<p>Using the outcomes from the best  Analysis, we will put together a plan.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 statistic">
				<div class="left-column">
					<input class="dial" value="71" data-readonly="true" data-fgColor="#65be3e" data-linecap="round" data-width="60" data-inputcolor="#2f2f2f">
				</div>
				<div class="right-column">
					<h5>Development</h5>
					<p>Using the outcomes from the best  Analysis, we will put together a plan.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 statistic">
				<div class="left-column">
					<input class="dial" value="63" data-readonly="true" data-fgColor="#ec6be1" data-linecap="round" data-width="60" data-inputcolor="#2f2f2f">
				</div>
				<div class="right-column">
					<h5>Internet & Marketing</h5>
					<p>Using the outcomes from the best  Analysis, we will put together a plan.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 statistic">
				<div class="left-column">
					<input class="dial" value="76" data-readonly="true" data-fgColor="#fb4848" data-linecap="round" data-width="60" data-inputcolor="#2f2f2f">
				</div>
				<div class="right-column">
					<h5>Design & Architecture</h5>
					<p>Using the outcomes from the best  Analysis, we will put together a plan.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 statistic">
				<div class="left-column">
					<input class="dial" value="71" data-readonly="true" data-fgColor="#3fccc7" data-linecap="round" data-width="60" data-inputcolor="#2f2f2f">
				</div>
				<div class="right-column">
					<h5>Educational</h5>
					<p>Using the outcomes from the best  Analysis, we will put together a plan.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 statistic">
				<div class="left-column">
					<input class="dial" value="63" data-readonly="true" data-fgColor="#faba20" data-linecap="round" data-width="60" data-inputcolor="#2f2f2f">
				</div>
				<div class="right-column">
					<h5>Business & Lifestyle</h5>
					<p>Using the outcomes from the best  Analysis, we will put together a plan.</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection