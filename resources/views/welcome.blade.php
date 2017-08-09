@extends('layouts.main.master')

@section('title')
	<title>Eye Doctor | Home</title>
@endsection

@section('csslink')
     <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/revolution/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/revolution/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/revolution/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">

    <!-- AutoComplete -->
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
                                <li data-index="rs-1" data-transition="fade" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-title="Slide 1">
                                    <!-- MAIN IMAGE -->
                                    <img   src="images/resource/slider1.jpg"  alt=""  data-bgposition="center center"  data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                </li>                           

                                <li data-index="rs-2" data-transition="fade" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-title="Slide 2">
                                    <!-- MAIN IMAGE -->
                                    <img   src="images/resource/slider2.jpg"  alt=""  data-bgposition="center center"  data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                </li>

                                <li data-index="rs-3" data-transition="fade" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-title="Slide 2">
                                    <!-- MAIN IMAGE -->
                                    <img   src="images/resource/slider3.jpg"  alt=""  data-bgposition="center center"  data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="appointment-form">
                        <div class="simple-title">
                            <h4>Make An Appointment</h4>
                            <span>A Specialist will Contact You Shortly</span>
                        </div>
                        <form action="{{ route('search') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" 
                                           id="City" 
                                           name="city" 
                                           placeholder="City" 
                                           required="City">
                                </div>                          
                                <div class="input-field col s12">
                                    <input type="text" 
                                           id="Subarea" 
                                           name="subarea" 
                                           placeholder="Subarea" 
                                           required="Subarea">
                                </div>                          
                                <div class="input-field col s12">
                                    <input type="text" 
                                           name="txt_DocORHosName" 
                                           placeholder="Doctor Name or Email">
                                </div>  
                                
                                                                                                                                    
                                <div class="col s12">
                                    <p>All Fields With An ( * ) Are Required.</p>
                                </div>
                                <div class="input-field col s12">
                                    <button type="submit"><i class="fa fa-recycle"></i> Check Now</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- Appointment Form -->                 
                </div><!-- Creative Slider  -->
            </div>
        </div>      
    </div>
</section>

<section>
    <div class="block whitish">
        <div class="container">
            <div class="row">
                
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
                                    <a href="service-detail.html" title="">Service Detail <i class="fa fa-caret-right"></i></a>
                                </div><!-- Service -->
                            </div>
                            <div class="col l4 m6 s12">
                                <div class="service">
                                    <img src="images/resource/service2.jpg" alt="" />
                                    <div class="service-hover">
                                        <i class="icon-medical-list"></i>
                                        <span>Complete Services of </span>
                                        <h5>X Ray / Radiology</h5>
                                    </div>
                                    <a href="service-detail.html" title="">Service Detail <i class="fa fa-caret-right"></i></a>
                                </div><!-- Service -->
                            </div>
                            <div class="col l4 m6 s12">
                                <div class="service">
                                    <img src="images/resource/service3.jpg" alt="" />
                                    <div class="service-hover">
                                        <i class="icon-ambulance"></i>
                                        <span>Pick & Drop by</span>
                                        <h5>First Class Ambulances</h5>
                                    </div>
                                    <a href="service-detail.html" title="">Service Detail <i class="fa fa-caret-right"></i></a>
                                </div><!-- Service -->
                            </div>
                            <div class="col l4 m6 s12">
                                <div class="service">
                                    <img src="images/resource/service4.jpg" alt="" />
                                    <div class="service-hover">
                                        <i class="icon-molecule"></i>
                                        <span>General </span>
                                        <h5>Surgical Services</h5>
                                    </div>
                                    <a href="service-detail.html" title="">Service Detail <i class="fa fa-caret-right"></i></a>
                                </div><!-- Service -->
                            </div>
                            <div class="col l4 m6 s12">
                                <div class="service">
                                    <img src="images/resource/service5.jpg" alt="" />
                                    <div class="service-hover">
                                        <i class="icon-chemicals"></i>
                                        <span>Surgical Services</span>
                                        <h5>Laboratory Services</h5>
                                    </div>
                                    <a href="service-detail.html" title="">Service Detail <i class="fa fa-caret-right"></i></a>
                                </div><!-- Service -->
                            </div>
                            <div class="col l4 m6 s12">
                                <div class="service">
                                    <img src="images/resource/service6.jpg" alt="" />
                                    <div class="service-hover">
                                        <i class="icon-blood-group"></i>
                                        <span>Sterilized & Safe</span>
                                        <h5>Blood Services</h5>
                                    </div>
                                    <a href="service-detail.html" title="">Service Detail <i class="fa fa-caret-right"></i></a>
                                </div><!-- Service -->
                            </div>
                        </div>
                    </div><!-- All Service -->
                
            
            </div>
        </div>
    </div>
</section>

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
                                    <span><i class="count">39</i>+</span>
                                    <h5>OPERATION THEATRE</h5>
                                    <p>Provide Comprehensive</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="simple-service color2">
                                <div class="simple-service-wrap">
                                    <i class="icon-thermometer"></i>
                                    <span><i class="count">24</i>k</span>
                                    <h5>CANCER SERVICE</h5>
                                    <p>Provide Comprehensive</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="simple-service color3">
                                <div class="simple-service-wrap">
                                    <i class=" icon-medical-11"></i>
                                    <span><i class="count">289</i></span>
                                    <h5>OUTDOOR CHECKUP</h5>
                                    <p>Provide Comprehensive</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="simple-service color4">
                                <div class="simple-service-wrap">
                                    <i class="icon-blood-group"></i>
                                    <span><i class="count">480</i>+</span>
                                    <h5>BLOOD BANKS</h5>
                                    <p>Provide Comprehensive</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- Simple Service -->

                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="block grayish">
        <div class="parallax-container"><div class="parallax"><img src="images/resource/parallax2.jpg" alt="" /></div></div>
        <div class="container">
            <div class="row">
                <div class="col l6 m12 s12 column">
                    <div class="doctors-intro overlap">
                        <div class="doctors-img"><img src="images/resource/doctor-img.png" alt="" /></div>
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
                        <div class="staff-slide">
                            <div class="row">                               
                                <div class="col l6 m6 s6">
                                    <div class="staff-member">
                                        <div class="member-img"><img src="images/resource/doctor1.jpg" alt="" /></div>
                                        <div class="doctor-intro">
                                            <strong><a href="staff-detail.html" title=""><span>Dr.</span>Jacobson Ad</a></strong>
                                            <i>Orthopaedics</i>
                                        </div>
                                    </div><!-- Staff Member -->
                                </div>
                                <div class="col l6 m6 s6">
                                    <div class="staff-member">
                                        <div class="member-img"><img src="images/resource/doctor2.jpg" alt="" /></div>
                                        <div class="doctor-intro">
                                            <strong><a href="staff-detail.html" title=""><span>Dr.</span>John Smith</a></strong>
                                            <i>Cardiologist</i>
                                        </div>
                                    </div><!-- Staff Member -->
                                </div>
                                <div class="col l6 m6 s6">
                                    <div class="staff-member">
                                        <div class="member-img"><img src="images/resource/doctor3.jpg" alt="" /></div>
                                        <div class="doctor-intro">
                                            <strong><a href="staff-detail.html" title=""><span>Dr.</span>Jaka Alex</a></strong>
                                            <i>Neurologist</i>
                                        </div>
                                    </div><!-- Staff Member -->
                                </div>
                                <div class="col l6 m6 s6">
                                    <div class="staff-member">
                                        <div class="member-img"><img src="images/resource/doctor4.jpg" alt="" /></div>
                                        <div class="doctor-intro">
                                            <strong><a href="staff-detail.html" title=""><span>Dr.</span>Alex Hashan</a></strong>
                                            <i>Haematologist</i>
                                        </div>
                                    </div><!-- Staff Member -->
                                </div>
                            </div>
                        </div><!-- Staff Slide -->
                        <div class="staff-slide">
                            <div class="row">
                                <div class="col l6 m6 s6">
                                    <div class="staff-member">
                                        <div class="member-img"><img src="images/resource/doctor5.jpg" alt="" /></div>
                                        <div class="doctor-intro">
                                            <strong><a href="staff-detail.html" title=""><span>Dr.</span>Jaka Alex</a></strong>
                                            <i>Neurologist</i>
                                        </div>
                                    </div><!-- Staff Member -->
                                </div>
                                <div class="col l6 m6 s6">
                                    <div class="staff-member">
                                        <div class="member-img"><img src="images/resource/doctor6.jpg" alt="" /></div>
                                        <div class="doctor-intro">
                                            <strong><a href="staff-detail.html" title=""><span>Dr.</span>Alex Hashan</a></strong>
                                            <i>Haematologist</i>
                                        </div>
                                    </div><!-- Staff Member -->
                                </div>
                                <div class="col l6 m6 s6">
                                    <div class="staff-member">
                                        <div class="member-img"><img src="images/resource/doctor7.jpg" alt="" /></div>
                                        <div class="doctor-intro">
                                            <strong><a href="staff-detail.html" title=""><span>Dr.</span>John Smith</a></strong>
                                            <i>Cardiologist</i>
                                        </div>
                                    </div><!-- Staff Member -->
                                </div>
                                <div class="col l6 m6 s6">
                                    <div class="staff-member">
                                        <div class="member-img"><img src="images/resource/doctor8.jpg" alt="" /></div>
                                        <div class="doctor-intro">
                                            <strong><a href="staff-detail.html" title=""><span>Dr.</span>Jacobson Ad</a></strong>
                                            <i>Orthopaedics</i>
                                        </div>
                                    </div><!-- Staff Member -->
                                </div>
                            </div>
                        </div><!-- Staff Slide -->
                    </div><!-- Staff Carousel -->           
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block blackish">
        <div class="parallax-container"><div class="parallax"><img src="images/resource/parallax3.jpg" alt="" /></div></div>
        <div class="container">
            <div class="row">
                <div class="col l12 m12 s12 column">
                    <div class="parallax-title">
                        <h2>WAYS TO <span>SUPPORT</span> THE CLINIC</h2>
                        <p>Gifts of all sizes help the Department of Gynecology and Obstetrics continue our ongoing<br /> efforts as a leader in innovative and compassionate treatment, ground breaking.</p>
                    </div>
                    <div class="support-ways">
                        <div class="row">
                            <div class="col l4 m6 s12">
                                <div class="way">
                                    <span><i class="icon-gift"></i></span>
                                    <div class="way-detail">
                                        <h3><a class="call-popup popup5" href="#" title="">Cash Gifts</a></h3>
                                        <i>Donate For Help</i>
                                    </div>
                                </div><!-- Way -->
                            </div>
                            <div class="col l4 m6 s12">
                                <div class="way">
                                    <span><i class="icon-bag"></i></span>
                                    <div class="way-detail">
                                        <h3><a class="call-popup popup3" href="#" title="">Send Your Gifts</a></h3>
                                        <i>Show Your Love</i>
                                    </div>
                                </div><!-- Way -->
                            </div>
                            <div class="col l4 m6 s12">
                                <div class="way">
                                    <span><i class="icon-medicine"></i></span>
                                    <div class="way-detail">
                                        <h3><a class="call-popup popup3" href="#" title="">Donate Blood</a></h3>
                                        <i>Save A Life</i>
                                    </div>
                                </div><!-- Way -->
                            </div>
                        </div>
                    </div><!-- Support Ways -->
                </div>
            </div>
        </div>
    </div>
</section>


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
                                            <img src="images/resource/post-author1.jpg" alt="" />
                                            By <a href="blog-detail.html" title="">Admin</a>
                                        </span>
                                        <a class="tip-date" href="blog-detail.html" title="">Nov 30, 2015</a>   
                                    </div>
                                    <div class="tip-detail">
                                        <a class="tip-img" href="blog-detail.html" title=""><img src="images/resource/blog-post1.jpg" alt="" /></a>
                                        <h3><a href="blog-detail.html" title="">Cuba The Accidental Eden Full Documentary HD</a></h3>
                                        <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar. Vestibulum bib volutpat accumsan non laoreet...</p>
                                    </div>
                                </div><!-- Tip -->
                            </div>
                            <div class="col l6 m6 s12">
                                <div class="tip">
                                    <div class="tip-meta">
                                        <span>
                                            <img src="images/resource/post-author2.jpg" alt="" />
                                            By <a href="blog-detail.html" title="">Admin</a>
                                        </span>
                                        <a class="tip-date" href="blog-detail.html" title="">Nov 30, 2015</a>   
                                    </div>
                                    <div class="tip-detail">
                                        <a class="tip-img" href="blog-detail.html" title=""><img src="images/resource/blog-post2.jpg" alt="" /></a>
                                        <h3><a href="blog-detail.html" title="">Vivamus Diam Eros, Dictum Sit Amet Cursus Commodo Ut Purus</a></h3>
                                        <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar. Vestibulum bib volutpat accumsan non laoreet...</p>
                                    </div>
                                </div><!-- Tip -->
                            </div>
                        </div>
                    </div><!-- Blog Style -->
                </div>

                <div class="col l4 m12 s12 column">
                    <div class="links-box">
                        <img src="images/resource/links-box.jpg" alt="" />
                        <div class="links-box-overlay">
                            <div class="links-box-inner">
                                <h3>I WANT TO...</h3>
                                <p>Our Commitment Is To Provide Compre hensive Quality Care</p>

                                <ul>
                                    <li><a href="refer.html" title=""><i class="icon-broken-arm"></i> Refer a Patient</a></li>
                                    <li><a class="call-popup popup3" href="#" title=""><i class="icon-gift"></i> Make a Gift</a></li>
                                    <li><a href="events.html" title=""><i class="icon-student"></i> Attend a Health Seminar</a></li>
                                    <li><a href="blog.html" title=""><i class="icon-tool"></i> Search Clinical Trails</a></li>
                                    <li><a href="payment.html" title=""><i class="icon-money"></i> Pay my bill</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- Links Box -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('jslink')
<!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ asset('js/revolution/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->   
    <script type="text/javascript" src="{{ asset('js/revolution/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution/revolution.extension.video.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution/revolution.initialize2.js') }}"></script>
    
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
    
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     
     
    <!--   City Autocomplete -->
    <script type="text/javascript" src="{{ asset('js/autocomplete.js') }}"></script>
    <script>
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
                singleItem:true,
                items:1,
                autoHeight:true

            });     

        });
    </script>
    <script>
        jQuery(document).ready(function() {
            $('.count').counterUp({
                delay:10,
                time:1800
            });
        });
    </script>
@endsection