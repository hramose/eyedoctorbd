@extends('layouts.frontend.app')

@section('title')
About Us
@endsection


@section('content')

<div class="pagetop">
	<div class="container">
		<span>What We Actually Do?</span>
		<h1>ABOUT <span>MEDICALIST</span></h1>
		<ul>
			<li><a href="{{ route('welcome') }}" title="">Home</a></li>
			<li>About</li>
		</ul>
	</div>
</div>


<section>
	<div class="block gray remove-bottom">
		<div class="container">
			<div class="row">
				<div class="col column s12 m12 l4">
					<div class="information dark">
						{{--  <span>Provide Comprehensive Quality Care</span>  --}}
						<h4>About Eyedoctor</h4>
						<strong>Care Health</strong>
						<p>Eyedoctor BD is a dream that turned into a tech based startup, a business with a great purpose	to create positive impacts in peoples' lives. It is the first online doctor appointment service	platform in Bangladesh, providing real time doctor information and appointments through a fully	integrated system. Eyedoctor BD is missioned to bring convenience in the healthcare service delivery	for the general people in Bangladesh.</p>
					</div><!-- information -->
				</div>
				<div class="col column s12 m12 l4">
					<div class="mockup overlap2"><img alt="" src="/frontend/images/mockup2.png"></div>
				</div>
				<div class="col column s12 m12 l4">
					<div class="traditional-title">
						{{--  <span>Provide Comprehensive Quality Care</span>  --}}
						<h2>The <i>Future</i></h2>
						<p>At Eyedoctor BD, we are confident to make a difference in how people of Bangladesh approach	healthcare services. We have plans to integrate many other related services with the doctors'	appointment in the platform in coming days. The investment from BD Venture has given the	initiative more speed. Now, it's all about execution of the dreams to bring goodness out for	everyone in the country.</p>
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
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('jslink')
    
@endsection