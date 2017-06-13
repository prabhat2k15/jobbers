@extends('layouts.main')

@section('content')

<section class="worker-header light-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<img src="{{ asset('jasset/img/tnw.png')}}" class="employer-pic" alt="">
				<ul class="social text-left">
					<li><a href="#" class="social-link 
						twitter"><i class="fa fa-twitter"></i> Twitter</a></li>
					<li><a href="#" class="social-link 
						facebook"><i class="fa fa-facebook"></i> Facebook</a></li>
					<li><a href="#" class="social-link 
						google-plus"><i class="fa fa-google-plus-square"></i> Google Plus</a></li>
					<li><a href="#" class="social-link 
						link"><i class="fa fa-chain"></i> thenextweb.com</a></li>
				</ul>
			</div>
			<div class="col-sm-6">
				<h3> {{ $job->title }}</h3>
				<h5>{{ $job -> company}}</h5>
				<p><i class="fa fa-map-marker"></i> {{ $job -> address . ", " . $job->city . "-" . $job->pin . ", " . $job->country }}</p>
				<div class="row">
					<div class="col-md-12">
						<a href="#" class="btn blue no-margin">Follow</a>
						<a href="{{route('applyjob')}}" class="btn gray">Apply for a job</a>
						<p>{{  $job ->description }}</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="col-md-6 text-center">
					<h6 class="alt">Job Id</h6>
					<h2>{{$job -> jobid}}</h2>
				</div>
				<div class="col-md-6 text-center">
					<h6 class="alt">Salary</h6>
					<h2>{{ $job -> salary }}</h2>
				</div>
				<div class="col-md-12 text-center">
					<h6 class="alt">Skills</h6> <?php $skills=explode( "," , $job->skills ) ?>
					@foreach($skills as $skill)
					<a href="#" class="tag">{{ $skill }}</a>
					<!--<a href="#" class="tag">Wordpress Developer</a>
					<a href="#" class="tag">UX / UI Designer</a>
					<a href="#" class="tag">Product Designer</a>-->
					@endforeach
				</div>
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
						<h4>Company Description</h4>
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
				<h4>Similiar Jobs and Employers</h4>
				<h5>Bowie Company</h5>
				<p>Product and clothing designer <i class="fa fa-map-marker"></i> Los Angeles, US</p>
				<h5>Boxfresh Shoes</h5>
				<p>Store Manager <i class="fa fa-map-marker"></i> Cleveland, US</p>
				<h5>Google Inc.</h5>
				<p>Marketing Manager <i class="fa fa-map-marker"></i> Berlin, GER</p>
				<div class="row">
					<div class="col-md-12">
						<h4>Latest News</h4>
						<ul class="timeline">
<!-- start sw-rss-feed code --> 
<script type="text/javascript"> 
<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="https://news.google.com/news?cf=all&hl=en&pz=1&ned=us&topic=tc&output=rss";  
rssfeed_frame_width="320"; 
rssfeed_frame_height="250"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url="http://feed.surfing-waves.com/css/style4.css"; 
rssfeed_title="off"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage="http://"; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage="http://"; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage="http://"; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "883f35139e825c8fd17281897fbf12dd"; 
//--> 
</script> 
<script type="text/javascript" src="http://feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
<!-- end sw-rss-feed code -->
							<!--<li>
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
							</li>-->
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