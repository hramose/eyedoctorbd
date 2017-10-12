@extends('layouts.main.master')

@section('title')
	<title>All Doctors</title>
@endsection

@section('csslink')

@endsection

@section('content')
	<div class="pagetop">
	<div class="container">
		<span>What We Actually Do?</span>
		<h1><span>MEDICALIST</span> SURGEONS</h1>
		<ul>
			<li><a href="index-2.html" title="">Home</a></li>
			<li>Staff</li>
		</ul>
	</div>
</div>


<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col column s12 m12 l12">
				<div class="all-surgeons">
					<div class="row">
						<div id="test-list"> 
							<div class="list">
							
							@if(isset($msg))
								<h1 class="">{{ $msg }}</h1>
							@else

							@foreach ($allDoctors as $allDoctor)
								<div class="name col s12 m6 l3">
									<div class="surgeon">
										<a href="profile/{{ $allDoctor->username }}" title="">
											<img src="/doctors/thumb/{{ $allDoctor->avatar }}" alt="profile image"/>
											<div class="surgeon-info">
												<div class="surgeon-name">
													<h3>{{ $allDoctor->name }}</h3>
												<span>{{ $allDoctor->designation }}</span>
											</div>
										  </div>
										</a>
									</div><!-- Surgeon -->
								</div>

							@endforeach
							 </div>
								<ul class="pagination theme-pagi">

								{{ $allDoctors->links() }}
									{{-- <li class="disabled"><a href="#">Prev</a></li>
									
									<li><a href="#">Next</a></li> --}}
								</ul><!-- Pagination -->	
							@endif
						 </div>
						</div>
					</div><!-- All Surgeons -->
									
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('jslink')

@endsection