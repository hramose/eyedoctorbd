@extends('layouts.frontend.app')

@section('title')
Blog
@endsection

@section('csslink')

@endsection

@section('content')
	<div class="pagetop">
	<div class="container">
		{{--  <span>What We Actually Do?</span>  --}}
		<h1>All <span>Blog</span></h1>
		<ul>
			<li><a href="{{ route('welcome') }}" title="">Blog</a></li>
			<li>Archives</li>
		</ul>
	</div>
</div>


<section>
<div class="block">
		<div class="container">
			<div class="row">
				<div class="col column  s12 m12 l12">
					<div class="blog-style">
						<div class="row">
							@foreach($posts as $post)
							<div class="col l4 m6 s12">
								<div class="tip">
									<div class="tip-meta">
										{{--  <span>
											<img src="" alt="" />
											By <a href="blog-detail.html" title="">sd</a>
										</span>  --}}
										<a class="tip-date" href="{{ route('blog.post',$post->slug) }}" title="">{{ $post->created_at->diffForHumans() }}</a>	
									</div>
									<div class="tip-detail">
										<a class="tip-img" href="{{ route('blog.post',$post->slug) }}" title=""><img src="/upload/blog/thumb/{{ $post->image }}" alt="" /></a>
										<div class="tip-desc">
											<h3><a href="{{ route('blog.post',$post->slug) }}" title="">{{ $post->title }}</a></h3>
											<p>{{ $post->subtitle }}</p>

											<a class="coloured-btn" href="{{ route('blog.post',$post->slug) }}" title="">See Detail <i class="fa fa-caret-right"></i></a>
										</div>
									</div>
								</div><!-- Tip -->
							</div>
							@endforeach
						</div>
					</div><!-- Blog Style -->
				
					<ul class="pagination theme-pagi">
						{{ $posts->links() }}
					</ul><!-- Pagination -->					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('jslink')

@endsection