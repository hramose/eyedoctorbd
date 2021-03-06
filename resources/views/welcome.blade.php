@extends('layouts.frontend.app') 

@section('title') 
Home 
@endsection 

@section('csslink')
<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/revolution/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/revolution/navigation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/revolution/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">

<!-- AutoComplete -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.6/css/swiper.min.css"> 
<style>
    .swiper-container {
      width: 100%;
      height: auto;
      margin-left: auto;
      margin-right: auto;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      height: 200px;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
    }
</style>

{{-- Slider css --}} {{--
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slider/slick.css') }} "> --}} {{--
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slider/slick-theme.css') }} "> --}} 
@endsection 
@section('content')
<section>
	<div class="block no-padding">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="creative-slider">
					<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1">
						<div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;">
							<ul>
								<li data-index="rs-1" data-transition="fade" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
								 data-masterspeed="2000" data-title="Slide 1">
									<!-- MAIN IMAGE -->
									<img src="frontend/images/resource/slider1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
									 data-bgparallax="10" class="rev-slidebg" data-no-retina>
								</li>

								<li data-index="rs-2" data-transition="fade" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
								 data-masterspeed="2000" data-title="Slide 2">
									<!-- MAIN IMAGE -->
									<img src="frontend/images/resource/slider2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
									 data-bgparallax="10" class="rev-slidebg" data-no-retina>
								</li>

								<li data-index="rs-3" data-transition="fade" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
								 data-masterspeed="2000" data-title="Slide 2">
									<!-- MAIN IMAGE -->
									<img src="/frontend/images/resource/slider3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
									 data-bgparallax="10" class="rev-slidebg" data-no-retina>
								</li>
							</ul>
						</div>
					</div>
					<div class="appointment-form">
						<div class="simple-title">
							<h4>Find your nearest eye specialists</h4>
							{{--
							<span>Find your nearest eye specialists</span> --}}
						</div>

						<form id="search_form" action="{{ route('search') }}" method="POST">

							{{ csrf_field() }}
							<div class="row">
								<div class="input-field col s12 m3 3">
									<select name="city" id="city">
										<option value="" disabled selected>Select Your City</option>
										@foreach ($cities as $city)
											<option value="{{ $city->slug }}">{{ $city->city_name }}</option>
										@endforeach
									</select>
								</div>
								<div class="input-field col s12 m3 3">
									<select name="subarea" id="subarea">
										<option value="" disabled selected>Select Your Sub-area</option>
										@foreach ($sub_areas as $subarea)
											<option value="{{ $subarea->slug }}">{{ $subarea->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="input-field col s12 m4 4">
									<select name="hospital" id="hospital">
										<option value="" disabled selected>Search by Hospital</option>
										@foreach ($hospitals as $hospital)
											<option value="{{ $hospital->slug }}">{{ $hospital->hospital_name }}</option>
										@endforeach
									</select>
								</div>


								{{--
								<div class="col s12">
									<p>Search with Place or Doctor name</p>
								</div> --}}
								<div class="input-field col s12 m2 2">
									<button type="button" onclick="route();" style="float: none; margin-top: auto;">
										<i class="fa fa-search" aria-hidden="true"></i>
										</i> Search</button>
								</div>
							</div>
						</form>
					</div>
					<!-- Appointment Form -->
				</div>
				<!-- Creative Slider  -->
			</div>
		</div>
	</div>
</section>

<section>
	<div class="block grayish">
		<div class="parallax-container">
			<div class="parallax">
				<img src="{{ asset('frontend/images/resource/parallax2.jpg') }}" alt="" />
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col l6 m12 s12 column">
					<div class="doctors-intro overlap">
						<div class="doctors-img">
							<img src="{{ asset('frontend/images/resource/doctor-img.png') }}" alt="" />
						</div>
						<div class="doctor-detail">
							<div class="doctor-description">
								<h5>Eyedoctor BD</h5><br><br>
								<p>একটি সেবামূলক অনলাইন প্রতিষ্ঠান।যেখানে আপনি পাবেন চক্ষু বিশেষজ্ঞ ডাক্তারের সকল তথ্য। বিস্তারিত জানতে - 01629230506, 01906066233</p>
								<a class="coloured-btn" href="{{ route('alldoctors') }}" title="">All Doctors
									<i class="fa fa-caret-right"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- Doctors Intro -->
				</div>
				<div class="col l6 m12 s12 column">
					<div class="classic-title center-align">
						<h2>Our Specialist Doctor</h2>
					</div>
					<div class="row">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								@foreach ($allDoctors as $doctor)
								<div class="swiper-slide">
									<div class="member-img">
										<img src="/upload/doctors/profile/{{ $doctor->avatar }}" alt="" />
									</div>
									<div class="doctor-intro">
										<strong>
											<a href="{{ route('profile',$doctor->slug) }}" target="_blank" title="">{{ $doctor->name }}</a>
										</strong>
										<i>Orthopaedics</i>
									</div>
								</div>
								@endforeach
							</div><!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</section>

{{--
<section>
	<div class="block half-gray no-padding">
		<div class="container">
			<div class="row">
				<div class="col l12 m12 s12 column">
					<div class="simple-services">
						<div class="col s12 m6 l3">
							<div class="simple-service color1">
								<div class="simple-service-wrap">
									<i class="icon-dropper"></i>
									<span>
										<i class="count">39</i>+</span>
									<h5>OPERATION THEATRE</h5>
									<p>Provide Comprehensive</p>
								</div>
							</div>
						</div>
						<div class="col s12 m6 l3">
							<div class="simple-service color2">
								<div class="simple-service-wrap">
									<i class="icon-thermometer"></i>
									<span>
										<i class="count">24</i>k</span>
									<h5>CANCER SERVICE</h5>
									<p>Provide Comprehensive</p>
								</div>
							</div>
						</div>
						<div class="col s12 m6 l3">
							<div class="simple-service color3">
								<div class="simple-service-wrap">
									<i class=" icon-medical-11"></i>
									<span>
										<i class="count">289</i>
									</span>
									<h5>OUTDOOR CHECKUP</h5>
									<p>Provide Comprehensive</p>
								</div>
							</div>
						</div>
						<div class="col s12 m6 l3">
							<div class="simple-service color4">
								<div class="simple-service-wrap">
									<i class="icon-blood-group"></i>
									<span>
										<i class="count">480</i>+</span>
									<h5>BLOOD BANKS</h5>
									<p>Provide Comprehensive</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Simple Service -->

				</div>
			</div>
		</div>
	</div>
</section> --}} {{--
<section>
	<div class="block whitish">
		<div class="container">
			<div class="row">
				<div class="col l8 m12 s12 column">
					<div class="all-services">
						<div class="row">
							<div class="col l4 m6 s12">
								<div class="service">
									<img src="images/resource/service1.jpg" alt="" />
									<div class="service-hover">
										<i class="icon-hospital"></i>
										<span>Short Term</span>
										<h5>Hospitalization Services</h5>
									</div>
									<a href="service-detail.html" title="">Service Detail
										<i class="fa fa-caret-right"></i>
									</a>
								</div>
								<!-- Service -->
							</div>
							<div class="col l4 m6 s12">
								<div class="service">
									<img src="images/resource/service2.jpg" alt="" />
									<div class="service-hover">
										<i class="icon-medical-list"></i>
										<span>Complete Services of </span>
										<h5>X Ray / Radiology</h5>
									</div>
									<a href="service-detail.html" title="">Service Detail
										<i class="fa fa-caret-right"></i>
									</a>
								</div>
								<!-- Service -->
							</div>
							<div class="col l4 m6 s12">
								<div class="service">
									<img src="images/resource/service3.jpg" alt="" />
									<div class="service-hover">
										<i class="icon-ambulance"></i>
										<span>Pick & Drop by</span>
										<h5>First Class Ambulances</h5>
									</div>
									<a href="service-detail.html" title="">Service Detail
										<i class="fa fa-caret-right"></i>
									</a>
								</div>
								<!-- Service -->
							</div>
							<div class="col l4 m6 s12">
								<div class="service">
									<img src="images/resource/service4.jpg" alt="" />
									<div class="service-hover">
										<i class="icon-molecule"></i>
										<span>General </span>
										<h5>Surgical Services</h5>
									</div>
									<a href="service-detail.html" title="">Service Detail
										<i class="fa fa-caret-right"></i>
									</a>
								</div>
								<!-- Service -->
							</div>
							<div class="col l4 m6 s12">
								<div class="service">
									<img src="images/resource/service5.jpg" alt="" />
									<div class="service-hover">
										<i class="icon-chemicals"></i>
										<span>Surgical Services</span>
										<h5>Laboratory Services</h5>
									</div>
									<a href="service-detail.html" title="">Service Detail
										<i class="fa fa-caret-right"></i>
									</a>
								</div>
								<!-- Service -->
							</div>
							<div class="col l4 m6 s12">
								<div class="service">
									<img src="images/resource/service6.jpg" alt="" />
									<div class="service-hover">
										<i class="icon-blood-group"></i>
										<span>Sterilized & Safe</span>
										<h5>Blood Services</h5>
									</div>
									<a href="service-detail.html" title="">Service Detail
										<i class="fa fa-caret-right"></i>
									</a>
								</div>
								<!-- Service -->
							</div>
						</div>
					</div>
					<!-- All Service -->
				</div>
				<div class="col l4 m12 s12 column">
					<div class="timetable">
						<div class="classic-title">
							<h2>
								<span>Check Our</span>Ads Section</h2>
						</div>
						<p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar. Vestibulum bib volutpat accumsan non laoreet nulla luctus...</p>
						<ul>
							<li>
								<span>Monday - Friday</span>--
								<i>8.00 – 18.00</i>
							</li>
							<li>
								<span>Saturday</span>--
								<i>8.00 – 18.00</i>
							</li>
							<li>
								<span>Sunday</span>--
								<i>8.00 – 18.00</i>
							</li>
						</ul>
						<a class="icon-btn" href="timetable.html" title="">
							<i class="fa fa-user-md"></i> See Doctors Timetable</a>
					</div>
					<!-- Timetable -->
				</div>
			</div>
		</div>
	</div>
</section> --}} {{--
<section>
	<div class="block blackish">
		<div class="parallax-container">
			<div class="parallax">
				<img src="images/resource/parallax3.jpg" alt="" />
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col l12 m12 s12 column">
					<div class="parallax-title">
						<h2>WAYS TO
							<span>SUPPORT</span> US</h2>
					</div>
					<div class="support-ways">
						<div class="row">
							<div class="col l4 m6 s12">
								<div class="way">
									<span>
										<i class="icon-gift"></i>
									</span>
									<div class="way-detail">
										<h3>
											<a href="#" title="">Cash Gifts</a>
										</h3>
										<i>Donate For Help</i>
									</div>
								</div>
								<!-- Way -->
							</div>
							<div class="col l4 m6 s12">
								<div class="way">
									<span>
										<i class="icon-bag"></i>
									</span>
									<div class="way-detail">
										<h3>
											<a href="#" title="">Send Your Gifts</a>
										</h3>
										<i>Show Your Love</i>
									</div>
								</div>
								<!-- Way -->
							</div>
							<div class="col l4 m6 s12">
								<div class="way">
									<span>
										<i class="icon-medicine"></i>
									</span>
									<div class="way-detail">
										<h3>
											<a href="#" title="">Donate Blood</a>
										</h3>
										<i>Save A Life</i>
									</div>
								</div>
								<!-- Way -->
							</div>
						</div>
					</div>
					<!-- Support Ways -->
				</div>
			</div>
		</div>
	</div>
</section> --}} {{--
<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col l8 m12 s12 column">
					<div class="modern-title">
						<h2>Latest Medical TIPS & NEWS</h2>
						<span>Our Commitment Is To Provide Comprehensive Quality Care</span>
					</div>

					<div class="blog-style">
						<div class="row">
							<div class="col l6 m6 s12">
								<div class="tip">
									<div class="tip-meta">
										<span>
											<img src="images/resource/post-author1.jpg" alt="" /> By
											<a href="blog-detail.html" title="">Admin</a>
										</span>
										<a class="tip-date" href="blog-detail.html" title="">Nov 30, 2015</a>
									</div>
									<div class="tip-detail">
										<a class="tip-img" href="blog-detail.html" title="">
											<img src="images/resource/blog-post1.jpg" alt="" />
										</a>
										<h3>
											<a href="blog-detail.html" title="">Cuba The Accidental Eden Full Documentary HD</a>
										</h3>
										<p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar. Vestibulum bib volutpat accumsan non laoreet...</p>
									</div>
								</div>
								<!-- Tip -->
							</div>
							<div class="col l6 m6 s12">
								<div class="tip">
									<div class="tip-meta">
										<span>
											<img src="images/resource/post-author2.jpg" alt="" /> By
											<a href="blog-detail.html" title="">Admin</a>
										</span>
										<a class="tip-date" href="blog-detail.html" title="">Nov 30, 2015</a>
									</div>
									<div class="tip-detail">
										<a class="tip-img" href="blog-detail.html" title="">
											<img src="images/resource/blog-post2.jpg" alt="" />
										</a>
										<h3>
											<a href="blog-detail.html" title="">Vivamus Diam Eros, Dictum Sit Amet Cursus Commodo Ut Purus</a>
										</h3>
										<p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar. Vestibulum bib volutpat accumsan non laoreet...</p>
									</div>
								</div>
								<!-- Tip -->
							</div>
						</div>
					</div>
					<!-- Blog Style -->
				</div>

				<div class="col l4 m12 s12 column">
					<div class="links-box">
						<img src="images/resource/links-box.jpg" alt="" />
						<div class="links-box-overlay">
							<div class="links-box-inner">
								<h3>Ads Section.</h3>
								<p>Our Commitment Is To Provide Compre hensive Quality Care</p>

								<ul>
									<li>
										<a href="refer.html" title="">
											<i class="icon-broken-arm"></i> Refer a Patient</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="icon-gift"></i> Make a Gift</a>
									</li>
									<li>
										<a href="events.html" title="">
											<i class="icon-student"></i> Attend a Health Seminar</a>
									</li>
									<li>
										<a href="blog.html" title="">
											<i class="icon-tool"></i> Search Clinical Trails</a>
									</li>
									<li>
										<a href="payment.html" title="">
											<i class="icon-money"></i> Pay my bill</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Links Box -->
				</div>
			</div>
		</div>
	</div>
</section>
--}} @endsection @section('jslink')
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{ asset('frontend/js/revolution/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/revolution/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script type="text/javascript" src="{{ asset('frontend/js/revolution/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/revolution/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/revolution/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/revolution/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/revolution/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/revolution/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/revolution/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/revolution/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/revolution/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/revolution/revolution.initialize2.js') }}"></script>

<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<!--   City Autocomplete -->
{{--
<script type="text/javascript" src="{{ asset('frontend/js/autocomplete.js') }}"></script> --}}
<!-- Swiper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.6/js/swiper.min.js"></script>
{{--
<script type="text/javascript" src="{{ asset('frontend/js/slider/slick.js') }}"></script> --}}

<script src="{{ asset('backend/js/sweetalert-dev.js') }}"></script>

<script type="text/javascript">
	var swiper = new Swiper('.swiper-container', {
      slidesPerView: 2,
      slidesPerColumn: 2,
      spaceBetween: 10,
     freeMode: true,
     loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
	function route (){
       event.preventDefault();       
      if ($.trim($("#city").val()) == "" && $.trim($("#subarea").val()) == "" && $.trim($("#hospital").val()) == "") {
          console.log('all empty');
          swal(
                'Oops...One condition required.',
                'Search with one condition City and Sub Area Or Doctor Name and Hospital Name',
                'error'
                );
    }else if($.trim($("#city").val()) == "" && $.trim($("#hospital").val()) == "" && $.trim($("#subarea").val()) !== ""){
         swal(
                'Oops...',
                'You can not search only with sub area :(',
                'error'
                );
    }else{
        document.getElementById('search_form').submit();
    }
  }
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
     jQuery(document).ready(function() {
        $('.count').counterUp({
            delay:10,
            time:1800
        });
    });

</script>
@endsection