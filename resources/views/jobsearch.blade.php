@extends('layouts.main')

@section('content')
<section style="padding:0px; margin-top:0px; ">
	<div class="container">
		<div class="row title text-left">
			<h3 >Search for a job</h3>
			<h6 class="alt" >See search results</h6>
		</div>
		<div class="row text-left">
		<form action="{{route('customjobsearch')}}" method="POST">  <!-- form for custom Job Search  -->
		{{ csrf_field() }}
			<div class="col-md-3"> @if(!isset($data)) {{$data=null}} @endif
				<input type="text" class="form-control" name="keyword" value="{{$data['keyword']}}"placeholder="Keyword e.g. (Job Title, Description)">
			</div>
			<div class="col-md-3">
				<input type="text" class="form-control" name="location" value="{{$data['location']}}"placeholder="Location ( Country, etc.. )">
			</div>
			<div class="col-md-3">
				
				<select name="salary" class="form-control">
					<option>Salary : (per month)</option>
					<option>5000</option>
					<option>7500</option>
					<option>10000</option>
					<option>20000</option>
					<option>30000</option>
					<option>>40000</option>
				</select>
			</div>
			<div class="col-md-3">
				<!--<a href="#" class="btn green submit">Search for a job <i class="fa fa-chevron-right"></i>-->
				<input type="submit" class="btn green submit" value="Search for job">
			</div>
			</form>
		</div>
		<div class="row">
			<div class="col-md-12 checks">
				<input type="checkbox" id="checkbox1" class="css-checkbox" checked="checked"/><label for="checkbox1">Full Time</label>

				<input type="checkbox" id="checkbox2" class="css-checkbox"/><label for="checkbox2">Part Time</label>

				<input type="checkbox" id="checkbox3" class="css-checkbox" checked="checked"/><label for="checkbox3">Weekend</label>

				<input type="checkbox" id="checkbox4" class="css-checkbox" /><label for="checkbox4">Freelance</label>

				<label for="fader">Distance :</label>
				<input type="range" min="0" max="100" value="3" id="fader"/>
				<b><span class="distance">60</span></b> km

			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="tabs-container">
					<h6 class="blue-color">24123 Jobs Found</h6>
					<div class="tab-nav">
                                            <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#tab1">For Job Seeker</a></li>
    <li><a data-toggle="tab" href="#tab2">For Companies</a></li>
    <li><a data-toggle="tab" href="#tab3">Find Candidates</a></li>
    
  </ul>
<!--						<a href="#" class="active">For Job Seeker</a>
						<a href="#">For Companies</a>
						<a href="#">Find Candidates</a>-->
					</div>
					<div class="tab-holder tab-content">
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
										<td>
											@if(strcmp($job->type,"Full Time")==0)
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
                                    @endforeach
									
								</tbody>
							</table>
                                                </div>
						</div>
						<div class="tab tab-pane fade" id="tab2">
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
											<img src="img/jobs/2.png" alt="">
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
											<img src="img/jobs/3.png" alt="">
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
											<img src="img/jobs/1.png" alt="">
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
											<img src="img/jobs/5.png" alt="">
											<span>Frontend/Backendd Developer</span>
										</td>
										<td>
											Disneyland
										</td>
										<td>
											<span class="pill medium green">Full Time</span>
										</td>
										<td>
											Paris
										</td>
										<td>
											44$/h
										</td>
										<td class="text-right">
											<a href="#" class="btn btn-small blue btn-apply">Apply</a>
										</td>
									</tr>
									<tr>
										<td>
											<img src="img/jobs/6.png" alt="">
											<span>Web and graphic designer</span>
										</td>
										<td>
											Jacksgap
										</td>
										<td>
											<span class="pill medium red">Part time</span>
										</td>
										<td>
											Berlin
										</td>
										<td>
											38$/h
										</td>
										<td class="text-right">
											<a href="#" class="btn btn-small blue btn-apply">Apply</a>
										</td>
									</tr>
									<tr>
										<td>
											<img src="img/jobs/7.png" alt="">
											<span>Producer-Store Manager</span>
										</td>
										<td>
											Mixcloud
										</td>
										<td>
											<span class="pill medium yellow">Freelance</span>
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
											<img src="img/jobs/1.png" alt="">
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
											<img src="img/jobs/3.png" alt="">
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
											<img src="img/jobs/4.png" alt="">
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
									<tr>
										<td>
											<img src="img/jobs/1.png" alt="">
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
											<img src="img/jobs/5.png" alt="">
											<span>Frontend/Backendd Developer</span>
										</td>
										<td>
											Disneyland
										</td>
										<td>
											<span class="pill medium green">Full Time</span>
										</td>
										<td>
											Paris
										</td>
										<td>
											44$/h
										</td>
										<td class="text-right">
											<a href="#" class="btn btn-small blue btn-apply">Apply</a>
										</td>
									</tr>
									<tr>
										<td>
											<img src="img/jobs/6.png" alt="">
											<span>Web and graphic designer</span>
										</td>
										<td>
											Jacksgap
										</td>
										<td>
											<span class="pill medium red">Part time</span>
										</td>
										<td>
											Berlin
										</td>
										<td>
											38$/h
										</td>
										<td class="text-right">
											<a href="#" class="btn btn-small blue btn-apply">Apply</a>
										</td>
									</tr>
									<tr>
										<td>
											<img src="img/jobs/7.png" alt="">
											<span>Producer-Store Manager</span>
										</td>
										<td>
											Mixcloud
										</td>
										<td>
											<span class="pill medium yellow">Freelance</span>
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
											<img src="img/jobs/8.png" alt="">
											<span>Blogger-Entrepenour</span>
										</td>
										<td>
											Rhapsody
										</td>
										<td>
											<span class="pill medium gray">Weekend</span>
										</td>
										<td>
											Munich
										</td>
										<td>
											41$/h
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
				<nav class="text-center">
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
				</nav>
			</div>
		</div>
	</div>
</section>



@endsection
