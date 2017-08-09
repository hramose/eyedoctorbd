<div class="pageloader">
      <div class="loader">
        <div class="loader-inner ball-scale-ripple-multiple">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>	
</div><!-- Pageloader -->


<div class="responsive-header">
	<div class="responsive-topbar">
		<div class="responsive-topbar-info">
			<div class="active">
				<i class="icon-telephone"></i>
				<p><i class="icon-telephone"></i><strong>Call Us Today!</strong> +880 1913371020</p>
			</div>
			<div>
				<i class="icon-envelope2"></i>
				<p><i class="icon-envelope2"></i><strong>Email!</strong>  eyedoctorinfo@gmail.com</p>
		   </div>
		</div><!-- Topbar Info -->
		<div class="topbar-social-search">
			<div class="responsive-social">
				<a href="#" title=""><i class="fa fa-twitter"></i></a>
				<a href="https://www.facebook.com/eyedoctorbd" title=""><i class="fa fa-facebook"></i></a>
				<a href="#" title=""><i class="fa fa-google-plus"></i></a>
				<a href="#" title=""><i class="fa fa-linkedin"></i></a>
			</div>
			<form>
				<input type="text" placeholder="Enter Your Search" />
				<button><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div><!-- Responsive Topbar -->
	<div class="responsive-menu">
		<div class="logo"><a href="{{ route('welcome') }}" title=""><img src="{{ asset('/images/logo.png') }}" alt="" /></a></div>		
		<div class="responsive-menu-btns">
			<a class="call-popup popup1" href="#" title=""><i class="fa fa-user-md"></i> Get Free Consultation</a>
			<a class="open-menu" href="#" title=""><i class="fa fa-list"></i></a>
		</div>
	</div><!-- Responsive Menu -->

	<div class="responsive-links">
		<span><i class="fa fa-remove"></i></span>
		<ul>
			<li><a href="{{ route('welcome') }}" title="">Home</a></li>
			<li><a href="{{ route('alldoctors') }}" title="">All Doctors</a></li>
			<li><a href="blog" title="">Blog</a></li>					
			<li><a href="gallery" title="">Gallery</a></li>
			<li><a href="about" title="">About Page</a></li>					
			<li><a href="contact" title="">Contact</a></li>
			<li>
				<a href="login" title="">Doctors Area</a>
				  <ul>
					<li><a href="{{ route('login') }}" title="">Login</a></li>					
					<li><a href="{{ route('register') }}" title="">Registration</a></li>
				</ul>			
			</li>
		</ul>
	</div><!-- Responsive Links -->
</div><!-- Responsive Header -->

<header class="stick {{ (Request::is('profile/*')? 'sticky' : '') }}">
	<div class="topbar style2">
		<div class="container">
			<ul class="topbar-info">
				<li><i class="icon-telephone2"></i> <strong>Call Us Today!</strong>  +88 1913371020</li>
				<li><i class="icon-envelope"></i> <strong>Email:</strong>  eyedoctorinfo@gmail.com</li>
			</ul>
			<div class="social-icons">
				<a class="facebook" title="" href="https://www.facebook.com/eyedoctorbd"><i class="fa fa-facebook"></i></a>
				<a class="linkedin" title="" href="#"><i class="fa fa-linkedin"></i></a>
				<a class="twitter" title="" href="#"><i class="fa fa-twitter"></i></a>
				<a class="skype" title="" href="#"><i class="fa fa-skype"></i></a>
			</div>
			<div class="topbar-btn"><a class="call-popup popup1" href="#" title=""><i class="fa fa-user"></i> Get Free Consultation</a></div>
		</div>
	</div><!-- Topbar -->
	<div class="menu-bar-height" style="{{ (Request::is('profile/*')? 'height: 0px;' : '') }}"></div>
	<div class="menu-bar">
		<div class="container">
			<div class="logo"><a href="{{ route('welcome') }}" title=""><img src="{{ asset('/images/logo.png') }}" alt="" /></a></div>
			<nav class="menu">
				<ul>
					<li><a href="{{ route('welcome') }}" title="">Home</a></li>
					<li><a href="{{ route('alldoctors') }}" title="">All Doctors</a></li>
					<li><a href="blog" title="">Blog</a></li>					
					<li><a href="gallery" title="">Gallery</a></li>
					<li><a href="about" title="">About Page</a></li>					
					<li><a href="contact" title="">Contact</a></li>
					
					<li>
						<a href="login" title="">Doctors Area</a>
						  <ul>
							<li><a href="{{ route('login') }}" title="">Login</a></li>					
							<li><a href="{{ route('register') }}" title="">Registration</a></li>
						</ul>			
					</li>
				</ul>

			</nav>
		</div>
	</div><!-- Menu Bar -->
</header><!-- Header -->
