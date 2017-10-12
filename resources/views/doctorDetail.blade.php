@extends('layouts.main.master')

@section('title')
	<title>{{ $doctor->name }}</title>
@endsection

@section('csslink')

@endsection

@section('content')
<section>
	<div class="block" style="padding: 50px 0;">
		<div class="container">
			<div class="row">
				<div class="col column s12 m12 l12">
					<div class="staff-detail">
						<div class="member-introduction">
							<div class="member-wrapper">
								<div class="staff-img"><img src="/doctors/profile/{{ $doctor->avatar }}" alt="" /></div>
								<div class="member-detail">
									<i>Hello</i>
									<h2>I' m <strong>{{ $doctor->name }}</strong></h2>
									<h6>{{ $doctor->designation }}, Dept. of {{ $doctor->department }}, {{ $doctor->hospital_name }}</h6>
									<span>{{ $doctor->speciality }}</span>
									<ul class="info-list">
										{{--  <li><strong>Address:</strong>24058, Belgium, Brussels, Liutte 27, BE</li>
										<li><strong>E-mail:</strong>ericasmile@company.com</li>
										<li><strong>Phone:</strong>+1 256 254 84 56</li>  --}}
									</ul>
									<div class="social-icons">
										<a title="" href="#"><i class="fa fa-facebook"></i></a>
										<a title="" href="#"><i class="fa fa-linkedin"></i></a>
										<a title="" href="#"><i class="fa fa-twitter"></i></a>
										<a title="" href="#"><i class="fa fa-skype"></i></a>
									</div>
								</div><!-- Member Detail -->
							</div>
						</div><!-- Member Introduction -->
						
						<div class="staff-tabs">
							<div class="staff-tabs-selectors">
								<ul class="tabs">
									{{--  <li class="tab"> <a class="" href="#professionalSkill"><i class="fa fa-pie-chart"></i> Professional Skills</a></li>  --}}
									<li class="tab"><a class="active" href="#aboutme"><i class="fa fa-user"></i> About Me</a></li>
									{{--  <li class="tab"><a href="#availablity"><i class="fa fa-calendar-o"></i> Availablity Calendar</a></li>  --}}
								</ul>
							</div>
							<div class="staff-tab-content">
								 {{--  <div id="professionalSkill">
								 	<div class="row">
											<div class="col s12 m6 l6">
												<div class="staff-tab-content">
													Duis sed odio sit amet nibh vulate cursus sit amet mauris.Morbi accumsan psum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed no mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
												</div>
											</div>
											<div class="col s12 m6 l6">
												
											</div>
											<div class="col s12 m6 l6">
												Duis sed odio sit amet nibh vulate cursus sit amet mauris.Morbi accumsan psum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed no mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
											</div>
											<div class="col s12 m6 l6">
												Duis sed odio sit amet nibh vulate cursus sit amet mauris.Morbi accumsan psum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed no mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
											</div>
										</div>
									
								 </div>  --}}
								 <div id="aboutme">
									
									<div class="all-skills">
										<div class="row">
											<div class="col s6 m6 16">
												<div class="staff-tab-content" style="box-shadow: -1px 2px 24px 0px rgba(127,127,127,1);color: #7F8080;">

												<div class="panel-header" style="text-align: center; color: cornflowerblue;">
													<h5 style="color: cornflowerblue;">
														<span>
															<i class="fa fa-stethoscope" aria-hidden="true"></i>Specialist in
														</span>
													</h5>
													<i class="fa fa-heart fa-2x" aria-hidden="true"></i>
												
													<h6>{{ $doctor->speciality }}</h6><hr>
													<h6>{{ $doctor->degrees }}</h6><hr>
													<p>{{ $doctor->doctor_short_summery }}</p>
													</div>
												</div><hr>

												{{-- Starting grabag --}}
 
												{{-- Stop grabag --}}
												
											</div>
											<div class="col s6 m6 16">
												<div class="staff-tab-content" style="box-shadow: -1px 2px 24px 0px rgba(127,127,127,1);color: #7F8080;">

												<div class="panel-header" style="text-align: center; color: cornflowerblue;">
													
													<h5 style="color: cornflowerblue;">
														<span>
															<i class="fa fa-map-marker" aria-hidden="true"></i> 
															All Chambers
														</span>
													</h5>
													<i class="fa fa-heart fa-2x" aria-hidden="true"></i>
												
													@foreach ($chambers as $chamber)
														<hr>
															<h6>
																<i class="fa fa-anchor" aria-hidden="true"></i>
																{{ $chamber->chamber_name }}
															</h6><hr>

														<address>
															<i class="fa fa-map-marker" aria-hidden="true"></i>
															{{ $chamber->chamber_address }}
														</address>

														<p>
															<strong>
																<i class="fa fa-calendar" aria-hidden="true"></i>
																{{ $chamber->app_day }}
															</strong><br>
															<strong>
																<i class="fa fa-clock-o" aria-hidden="true"></i> 
																{{ $chamber->app_time }}
															</strong><br>
															<strong>
																<i class="fa fa-phone" aria-hidden="true"></i>
																{{ $chamber->chamber_phone }}
															</strong>
														</p>

														<p>
															<i class="fa fa-hospital-o" aria-hidden="true"></i>
															New Patient: {{ $chamber->new_patient }}.tk <br>
															<i class="fa fa-refresh" aria-hidden="true"></i>
															Returning Patient: {{ $chamber->returning_patient }}.tk<br>
															<i class="fa fa-file-text-o" aria-hidden="true"></i>
															Followup Report: {{ $chamber->followup_report }}.tk
														</p>
													@endforeach
											    </div>
											  </div>

												
											</div>
											
										</div>
									</div><!-- All Skills -->
								</div>
								 {{--  <div id="availablity">
									<p>Duis sed odio sit amet nibh vulate cursus sit amet mauris.Morbi accumsan psum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed no mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ine rat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.</p>
								</div>  --}}
							</div>
					</div><!-- Staff Detail -->
				</div>
			</div>
		</div>
	</div>
</section>


<section>
    <div class="block grayish">
        <div class="parallax-container"><div class="parallax"><img src="{{ asset('images/resource/parallax2.jpg') }}" alt="" /></div></div>
        <div class="container">
            <div class="row">
			<div class="col l6 m12 s12 column">
                    <div class="doctors-intro overlap">
                        <div class="doctors-img"><img src="{{ asset('images/resource/doctor-img.png') }}" alt="" /></div>
                        <div class="doctor-detail">
                            <div class="doctor-description">
                                <span>Dr.</span>
                                <h5>SMILE JOHN</h5>
                                <i>Neurologiest / CEO</i>
                                <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar. Vestibulum bib volutpat accumsan non laoreet.  Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur...</p>
                                <a class="coloured-btn" href="staff-detail.html" title="">Read More <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div><!-- Doctors Intro -->
                </div>
			<div class="col l6 m12 s12 column">                
                    <div class="classic-title">
                        <h2><span>Our Experienced</span>Medical Staff</h2>
                    </div>
                    <div class="staff-carousel">
					@foreach ($allDoctors->chunk(4) as $chunk)
						<div class="staff-slide">
                            <div class="row">   
							@foreach ($chunk as $doctor)
								<div class="col l6 m6 s6">
										<div class="staff-member">
											<div class="member-img"><img src="/doctors/profile/{{ $doctor->avatar }}" alt="" /></div>
											<div class="doctor-intro">
												<strong><a href="staff-detail.html" title="">{{ $doctor->name }}</a></strong>
												<i>Orthopaedics</i>
											</div>
										</div><!-- Staff Member -->
									</div>
							@endforeach
						 </div>
                        </div><!-- Staff Slide -->
					@endforeach
                    </div><!-- Staff Carousel -->           
					</div>
                </div>
            </div>
        </div>
  
</section>

 


@endsection

@section('jslink')
	

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>


  <script type="text/javascript">

        jQuery(document).ready(function() {

            /* ============  Carousel ================*/
            $('.staff-carousel').owlCarousel({
                autoplay:true,
                autoplayTimeout:2500,
                smartSpeed:2000,
                autoplayHoverPause:true,
                loop:true,
                dots:false,
                nav:true,
                margin:0,
                mouseDrag:true,
                singleItem:false,
                items:2,
                autoHeight:true

            });     

        });
    </script>
@endsection
