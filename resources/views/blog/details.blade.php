@extends('layouts.frontend.app')

@section('title')
{{ $post->title }}
@endsection

@section('csslink')

@endsection

@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=129576694466761';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div class="pagetop">
	<div class="container">
		{{--  <span>What We Actually Do?</span>  --}}
		<h1><span>{{ $post->title }}</span></h1>
		<ul>
			<li><a href="{{ route('welcome') }}" title="">Home</a></li>
			<li>All Doctors</li>
		</ul>
	</div>
</div>


<section>

<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col column s12 m12 l9">
					<div class="blog-detail-page">
						<div class="blog-detail-img">
							<div class="tip-meta">
								<span>
									<img alt="" src="/upload/doctors/profile/{{ $post->user->avatar }}" style="height: 41px;width: 41px;">
									By <a title="" href="#">{{ $post->user->name }}</a>
								</span>
								<a title="" href="#" class="tip-date">{{ $post->created_at->diffForHumans() }}</a>	
							</div>		
							<div class="post-share">
								<a href="#" title=""><i class="fa fa-facebook"></i></a>
								<a href="#" title=""><i class="fa fa-google-plus"></i></a>
								<a href="#" title=""><i class="fa fa-twitter"></i></a>
							</div>				
							<img src="/upload/blog/image/{{ $post->image }}" alt="" />
						</div><!-- Event Detail Image -->
						<div class="blog-description">
							{{--  <span class="post-subtitle">Provide Comprehensive Quality Care</span>  --}}
							<h2 class="post-title">{{ $post->title }}</h2>
							{{--  <ul class="meta">
								<li><img src="images/resource/author.jpg" alt="" /> Patrick Smith ( Patient )</li>
								<li><a href="#" title=""><i class="fa fa-calendar-o"></i> October 18, 2016</a></li>
							</ul>  --}}
							<div class="single-description">
								{!! htmlspecialchars_decode( $post->body) !!}
							</div>
						</div>

						{{--  <div class="top-space">
							<div class="traditional-title">
								<span>Provide Comprehensive Quality Care</span>
								<h3>PROVIDE SPECIAL <i>CARE</i></h3>
							</div>
							<div class="why-choose">
								<div class="row">
									<div class="col s12 m6 l4">
										<div class="choose-box">
											<span><i class="icon-view"></i></span>
											<div class="choose-inner">
												<h4><a title="" href="#">Health Mission</a></h4>
												<span>Comprehensive Quality</span>
											</div>
										</div><!-- Choose Box  -->
									</div>
									<div class="col s12 m6 l4">
										<div class="choose-box">
											<span><i class="icon-molecule"></i></span>
											<div class="choose-inner">
												<h4><a title="" href="#">Health Facilities</a></h4>
												<span>Comprehensive Quality</span>
											</div>
										</div><!-- Choose Box  -->
									</div>
									<div class="col s12 m6 l4">
										<div class="choose-box">
											<span><i class="icon-tool"></i></span>
											<div class="choose-inner">
												<h4><a title="" href="#">MEDICAL COUNSELING</a></h4>
												<span>Comprehensive Quality</span>
											</div>
										</div><!-- Choose Box  -->
									</div>
									<div class="col s12 m6 l4">
										<div class="choose-box">
											<span><i class="icon-broken-arm"></i></span>
											<div class="choose-inner">
												<h4><a title="" href="#">Health Mission</a></h4>
												<span>Comprehensive Quality</span>
											</div>
										</div><!-- Choose Box  -->
									</div>
									<div class="col s12 m6 l4">
										<div class="choose-box">
											<span><i class="icon-angel"></i></span>
											<div class="choose-inner">
												<h4><a title="" href="#">Health Facilities</a></h4>
												<span>Comprehensive Quality</span>
											</div>
										</div><!-- Choose Box  -->
									</div>
									<div class="col s12 m6 l4">
										<div class="choose-box">
											<span><i class="icon-pregnant"></i></span>
											<div class="choose-inner">
												<h4><a title="" href="#">MEDICAL COUNSELING</a></h4>
												<span>Comprehensive Quality</span>
											</div>
										</div><!-- Choose Box  -->
									</div>
								</div>
							</div>					
				
						</div>  --}}

						<div class="top-space">
							<div class="traditional-title"><h3>TAGS <i>CLOUDS</i></h3></div>
							<div class="tagcloud">
								@foreach($post->tags as $postTag)
									<a href="{{ route('tag.post',$postTag->slug) }}" title="">{{ $postTag->name }}</a>
								@endforeach
							</div><!-- Tags -->
						</div>

						{{--  <div class="top-space">
							<div class="admin">
								<div class="social-links">
									<a class="facebook" href="#" title=""><i class="fa fa-facebook"></i></a>
									<a class="google-plus" href="#" title=""><i class="fa fa-google-plus"></i></a>
									<a class="twitter" href="#" title=""><i class="fa fa-twitter"></i></a>
								</div>
								<img src="images/resource/admin.jpg" alt="" />
								<div class="admin-info">
									<h4>BY ADMIN DOCTOR</h4>
									<p>Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet, consectetur  adipiscing varius tellus egetmassa pulvinar eu aliquet nibh dapibus.</p>
								</div>
							</div>
						</div>  --}}

						<div class="top-space">
							<div class="traditional-title"><h3><i>COMMENTS</i></h3></div>
							
							<div class="comment-form">
								<div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
							</div><!-- Comment Form -->
						</div>

					</div><!-- Event Detail Page -->
				</div>

				<aside class="col  column s12 m12 l3 sidebar">
					<div class="widget">
						<div class="widget-title">
							<h4>Recent <span>Posts</span></h4>
							{{-- <span>Provide Comprehensive</span> --}}
						</div>
						<div class="recent-posts">
							<div class="widget-post">
								<div class="widget-post-img"><img src="/frontend/images/resource/widget-post1.jpg" alt="" /></div>
								<div class="widget-post-name">
									<span>Nov 30, 2015</span>
									<h5><a href="blog-detail.html" title="">Cuba The Accidental Eden Documentary</a></h5>
								</div>
							</div><!-- Widget Post -->
							<div class="widget-post">
								<div class="widget-post-img"><img src="/frontend/images/resource/widget-post2.jpg" alt="" /></div>
								<div class="widget-post-name">
									<span>Nov 30, 2015</span>
									<h5><a href="blog-detail.html" title="">Cuba The Accidental Eden Documentary</a></h5>
								</div>
							</div><!-- Widget Post -->
							<div class="widget-post">
								<div class="widget-post-img"><img src="/frontend/images/resource/widget-post3.jpg" alt="" /></div>
								<div class="widget-post-name">
									<span>Nov 30, 2015</span>
									<h5><a href="blog-detail.html" title="">Cuba The Accidental Eden Documentary</a></h5>
								</div>
							</div><!-- Widget Post -->

 						</div><!-- Recent Posts -->
					</div><!-- Widget -->


					<div class="widget">
						<div class="widget-title">
							<h4>Blog <span>Category</span></h4>
						</div>
						<ul class="style2">
							@foreach($post->categories as $postCategory)
								<li><a href="{{ route('category.post',$postCategory->slug) }}" title="">{{ $postCategory->name }}</a><span>{{ $postCategory->posts()->count() }}</span></li>
							@endforeach
						</ul>						
					</div><!-- Widget -->			

					
				</aside>
			</div>
		</div>
	</div>
</section>
</section>
@endsection

@section('jslink')

@endsection