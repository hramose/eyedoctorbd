@extends('layouts.frontend.app')

@section('title')
{{ $doctor->first_name }}
@endsection

@section('csslink')
{{--  Slider js  --}}
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slider/slick.css') }} ">
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slider/slick-theme.css') }} ">
<style>
       #map {
        height: 400px;
        width: 100%;
       }
</style>

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
							   <div class="staff-img"><img src="/upload/doctors/profile/{{ $doctor->avatar }}" alt="" /></div>
							       <div class="member-detail">
								<i>Hello</i>
								<h2>I' m <strong>{{ $doctor->first_name }} {{ $doctor->last_name }}</strong></h2>
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
											<div class="col s12 m6 16">
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

												{{-- Starting map --}}
											 <div class="staff-tab-content" style="box-shadow: -1px 2px 24px 0px rgba(127,127,127,1);color: #7F8080;">

												<div class="panel-header" style="text-align: center; color: cornflowerblue;">
													<h5 style="color: cornflowerblue;">
														<span>
															<i class="fa fa-map-marker" aria-hidden="true"></i> Chamber(s) Location(Map)
														</span>
													</h5>
													<div id="map"></div>
													</div>
												</div>
												{{-- Stop map --}}
												
											</div>
											<div class="col s12 m6 16">
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
																{{ $chamber->app_day_start }} TO {{ $chamber->app_day_end }}
															</strong><br>
															<strong>
																<i class="fa fa-clock-o" aria-hidden="true"></i> 
																{{ $chamber->app_time_start }} TO {{ $chamber->app_time_end }}
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
        <div class="parallax-container"><div class="parallax"><img src="{{ asset('/frontend/images/resource/parallax2.jpg') }}" alt="" /></div></div>
        <div class="container">
        	 <div class="classic-title center-align">
                        <h2>Our Specialist Doctor</h2>
                    </div>
            <div class="row">
            	<section class="regular slider">
			@foreach ($allDoctors as $doctor)
                            <div>
                                <div class="member-img"><img src="/upload/doctors/profile/{{ $doctor->avatar }}" alt="" /></div>
			<div class="doctor-intro">
    			     <strong><a href= "{{ route('profile',$doctor->slug) }}" target="_blank" title="">{{ $doctor->first_name }} {{ $doctor->last_name }}</a></strong>
    			     <i>Orthopaedics</i>
			</div>
                             </div>
			@endforeach
                            </section>
                </div>
            </div>
        </div>
  
</section>

 


@endsection

@section('jslink')
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAsBE16CUMhihku7nqBldifkvXBO26ksDQ&sensor=false" 
          type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/slider/slick.js') }}"></script>


	<script>
      
	var locations = [@foreach($chambers as $k => $chamber)
				['{{ $chamber->chamber_name }}','{{ $chamber->lat }}','{{ $chamber->lng }}',],
				@endforeach ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(23.810332, 90.41251809999994),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
    </script>

    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>

  <script type="text/javascript">
	$(document).on('ready', function() {
	      $(".regular").slick({
	        dots: true,
	        infinite: true,
	        slidesToShow: 8,
	        slidesToScroll: 2,
	        autoplay: true,
	        autoplaySpeed: 2000
	      });
	  });
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
