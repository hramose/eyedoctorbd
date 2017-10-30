@extends('layouts.frontend.app')


@section('title')
Tag
@endsection

@section('content')
<div class="pagetop">
	<div class="container">
		<span>What We Actually Do?</span>
		<h1><span>MEDICALIST</span> BLOG</h1>
		<ul>
			<li><a href="{{ route('welcome') }}" title="">Home</a></li>
			<li>Blog</li>
		</ul>
	</div>
</div>


<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col column  s12 m12 l9">
					<div class="blog-style list-view">
						<div class="row">
							@foreach ($categories->posts() as $categoryPost)
								<div class="col l12 m12 s12">
								<div class="tip">
									<div class="tip-meta">
										{{-- <span>
											<img src="images/resource/post-author1.jpg" alt="" />
											By <a href="blog-detail.html" title="">Admin</a>
										</span> --}}
										<a class="tip-date" href="{{ route('blog.post',$categoryPost->slug) }}" title="">{{ $categoryPost->created_at->diffForHumans() }}</a>	
									</div>
									<div class="tip-detail">
										<a class="tip-img" href="{{ route('blog.post',$categoryPost->slug) }}" title=""><img src="/upload/blog/thumb/{{ $categoryPost->image }}" alt="" /></a>
										<div class="tip-desc">
											<h3><a href="{{ route('blog.post',$categoryPost->slug) }}" title="">{{ $categoryPost->title }}</a></h3>
											<p>{{ $categoryPost->subtitle }}</p>
										</div>
									</div>
								</div><!-- Tip -->
							</div>
							@endforeach						
						</div>
					</div><!-- Blog Style -->
					<ul class="pagination theme-pagi">
						{{ $categories->posts()->links() }}
					</ul><!-- Pagination -->			
				</div>

				<aside class="col column s12 m12 l3 sidebar">			
				
					<div class="widget">
						<div class="widget-title">
							<h4>MEDICAL <span>SERVICES</span></h4>
							<span>Provide Comprehensive</span>
						</div>

						<div class="why-choose">
							<div class="choose-box">
								<span><i class=" icon-eye"></i></span>
								<div class="choose-inner">
									<h4><a href="#" title="">Health Mission</a></h4>
									<span>Comprehensive Quality</span>
								</div>
							</div><!-- Choose Box  -->
							<div class="choose-box">
								<span><i class=" icon-doctor"></i></span>
								<div class="choose-inner">
									<h4><a href="#" title="">Health Facilities</a></h4>
									<span>Comprehensive Quality</span>
								</div>
							</div><!-- Choose Box  -->
							<div class="choose-box">
								<span><i class=" icon-medical-12"></i></span>
								<div class="choose-inner">
									<h4><a href="#" title="">MEDICAL COUNSELING</a></h4>
									<span>Comprehensive Quality</span>
								</div>
							</div><!-- Choose Box  -->
						</div>								
					</div><!-- Widget -->		

					<div class="widget">
						<div class="widget-title">
							<h4>TEXT <span>WIDGET</span></h4>
							<span>Provide Comprehensive</span>
						</div>
						<div class="textwidget">
							<p>Lorem Ipsum has been the indus try’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							<div class="social-icons style2 ">
								<a href="#" title=""><i class="fa fa-facebook"></i></a>
								<a href="#" title=""><i class="fa fa-linkedin"></i></a>
								<a href="#" title=""><i class="fa fa-twitter"></i></a>
								<a href="#" title=""><i class="fa fa-skype"></i></a>
							</div>							
						</div>
					</div><!-- Widget -->

				</aside>		

			</div>
		</div>
	</div>
</section>
@endsection

@section('script')

@endsection