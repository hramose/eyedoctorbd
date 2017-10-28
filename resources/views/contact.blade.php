@extends('layouts.main.master')

@section('title')
Contact Us
@endsection

@section('content')


<div class="pagetop">
	<div class="container">
		<span>What We Actually Do?</span>
		<h1>CONTACT <span>MEDICALIST</span></h1>
		<ul>
			<li><a href="index.html" title="">Home</a></li>
			<li>Contact</li>
		</ul>
	</div>
</div>


<section>
	<div class="block no-padding">
		<div class="row">
			<div class="col column  s12 m12 l12">
				<div class="map">
					<div id="map-canvas"></div>
				</div>				
			</div>
		</div>
	</div>
</section>


<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col column s12 m12 l4">
					<div class="contact-details">
						<span>Provide Comprehensive Quality Care</span>
						<h4>Contact Details</h4>
						<strong>Questions Or Inquiries</strong>
						{{--  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt. Maecenas tempus, tellus eget condimentum rhoncus.</p>  --}}
						<p>Please be patient while waiting for response. <strong>(24/7 Support!)</strong> Phone General Inquiries:</p>
						<i> +880 1913371020</i>
					</div><!-- Contact Details -->
				</div>
				<div class="col column s12 m12 l8">
					<div class="contact-boxes">
						<div class="parallax-container"><div  class="parallax"><img src="images/resource/parallax3.jpg" alt="" /></div></div>
						<div class="row">
							<div class="col s12 m4 l4">
								<div class="contact-box">
									<span><i class="fa fa-home"></i></span>
									<strong>Site Location</strong>
                                    <p>Capital super Market, Farmgate, Dhaka-1215</p>
								</div><!-- Contact Box -->
							</div>
							<div class="col s12 m4 l4">
								<div class="contact-box">
									<span><i class="fa fa-phone"></i></span>
									<strong>Phone Numbers</strong>
									<p><strong>+880 1913371020</strong> Alise Vinne <i>( Manager )</i></p>
								</div><!-- Contact Box -->
							</div>
							<div class="col s12 m4 l4">
								<div class="contact-box">
									<span><i class="fa fa-envelope"></i></span>
									<strong>Email Address</strong>
									<p><span>eyedoctorinfo@gmail.com</span><span>www. eyedoctorbd.net</span></p>
								</div><!-- Contact Box -->
							</div>
						</div>
					</div><!-- Contact Boxes -->
				</div>
			</div>
		</div>
	</div>
</section>



<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col column offset-l2 s12 m12 l8">
					<div class="modern-title">
						<h2>If you got any <span>Questions or Inquiries</span><br/> Please Contact Us </h2>
					</div>

				    <div class="contact-form">
						<div id="message"></div>
						<form id="contactform" method="post">
						   {{ csrf_field() }}
						    <div class="row">
								<div class="input-field col s12 m12 l12">
								    <input name="name" id="name" class="name" type="text" placeholder="Complete Name"/>
								    <span></span>
								</div>
								<div class="input-field col s12 m6 l6">
								    <input name="email" id="email" class="email" type="email" placeholder="Email Address" />
								    <span></span>
								</div>
								<div class="input-field col s12 m6 l6">
								    <input name="subject" class="subject" 
									id="subject"
									type="text" placeholder="Enter a Subject" />
								    <span></span>
								</div>
								<div class="input-field col s12 m12 l12">
								    <input name="phone" class="phone" 
									id="phone" type="text"  placeholder="Enter a Phone Number" />
								    <span></span>
								</div>
								<div class="input-field col s12 m12 l12">
								    <textarea name="msg" id="description" class="message" placeholder="Description"></textarea>
								    <span></span>
								</div>
								<div class="input-field col s12 m12 l12">
								    <button id="submit" class="coloured-btn submit" type="button" onClick="sendMessage()"><i class="fa fa-user-md"></i> CONTACT US NOW</button>
								</div>
						    </div>
						</form>
				    </div><!-- Contact Form -->
				</div>
			</div>
		</div>
	</div>
</section>


{{--  <section>
	<div class="block less-spacing">
		<div class="container">
			<div class="row">
				<div class="col column s12 m12 l12">
					<ul class="sponsors">
						<li><a href="#" title=""><img src="images/sponsor1.png" alt="" /></a></li>
						<li><a href="#" title=""><img src="images/sponsor2.png" alt="" /></a></li>
						<li><a href="#" title=""><img src="images/sponsor3.png" alt="" /></a></li>
						<li><a href="#" title=""><img src="images/sponsor4.png" alt="" /></a></li>
						<li><a href="#" title=""><img src="images/sponsor5.png" alt="" /></a></li>
					</ul><!-- Sponsors -->
				</div>
			</div>
		</div>
	</div>
</section>  --}}
@endsection

@section('jslink')
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAsBE16CUMhihku7nqBldifkvXBO26ksDQ" 
          type="text/javascript"></script>

    <script type="text/javascript">
		jQuery (document).ready(function () {
			/*================== Map =====================*/
			function initialize() {
			  var myLatlng = new google.maps.LatLng(23.7546279, 90.38864269999999);
			  var mapOptions = {
			    zoom: 16,
			    disableDefaultUI: true,
			    scrollwheel:true,
			    center: myLatlng
			  };
			  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

			  var image = '{{ asset("/images/pointer.png") }}';
			  var myLatLng = new google.maps.LatLng(23.7546279, 90.38864269999999);
			  var beachMarker = new google.maps.Marker({
			      position: myLatLng,
			      map: map,
			      icon: image
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);				
		});

		function sendMessage(){
			axios.post('{{ route('post.contact') }}', {
				_token:$('input[name=_token]').val(),
				name:$('#name').val(),
				email:$('#email').val(),
				phone:$('#phone').val(),
				subject:$('#subject').val(),
				description:$('#description').val()
			})
			.then(response => {              
				toastr.success(response.data.message);
				$('#contactform')[0].reset();
			})
			.catch(error => {
				console.log(error.response.data.errors);
				toastr.error(error.response.data.errors.email[0]);
				toastr.error(error.response.data.errors.name[0]);
				toastr.error(error.response.data.errors.phone[0]);
				toastr.error(error.response.data.errors.subject[0]);
				toastr.error(error.response.data.errors.description[0]);
			});
		}

	</script>
@endsection