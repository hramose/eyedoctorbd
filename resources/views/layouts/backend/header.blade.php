@if (Sentinel::getUser()->roles()->first()->slug == 'admin')
  <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper" style="
    margin: -5px; 
"> <a href="dashboard" class="brand-logo darken-1"><img src="{{asset('backend/images/materialize-logo.png')}}" alt="materialize logo"></a> <span class="logo-text">Eyedoctor</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Go To"/>
                    </div>
                    <ul class="right hide-on-med-and-down">

                          
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">0</small></i>
                        
                        </a>
                        </li> 

                         <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();" class="waves-effect waves-block waves-light"><i class="mdi-hardware-keyboard-tab"></i></a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                    
                    <!-- translation-button -->
                    <ul id="translation-dropdown" class="dropdown-content">
                      <li>
                        <a href="#!"><img src="{{asset('backend/images/flag-icons/United-States.png')}}" alt="English" />  <span class="language-select">English</span></a>
                      </li>
                      
                    </ul>
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>NOTIFICATIONS <span class="new badge">0</span></h5>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> Example of notifications</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">0 hours ago</time>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

@elseif (Sentinel::getUser()->roles()->first()->slug == 'doctor')
  <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper" style="
    margin: -5px; 
"> <a href="dashboard" class="brand-logo darken-1"><img src="{{asset('backend/images/materialize-logo.png')}}" alt="materialize logo"></a> <span class="logo-text">Eyedoctor</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down" style="width: calc(95% - 600px);">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Go To"/>
                    </div>
                    <ul class="right hide-on-med-and-down">

                          <li>
                          <div id="divsta">
                              <input type="hidden" id="sta" value="{{Sentinel::getUser()->status}}">
                          </div>
                            <div class="switch"> 
                                @if(Sentinel::getUser()->status == "active" )
                                   <label>
                                      Offline
                                      <input type="checkbox" checked  id="status" onClick="status()">
                                      <span class="lever"></span>
                                      <span>Online</span> 
                                    </label>
                                @else
                                   <label>
                                        Offline
                                       <input type="checkbox" id="status" onClick="status()">
                                      <span class="lever"></span>
                                      <span>Online</span> 
                                    </label>                                 
                                @endif
                            </div>
                        </li>
                       
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>

                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">0</small></i>
                        
                        </a>
                        </li> 
                        
                        <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();" class="waves-effect waves-block waves-light"><i class="mdi-hardware-keyboard-tab"></i></a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        
                    </ul>
                    
                    <!-- translation-button -->
                    <ul id="translation-dropdown" class="dropdown-content">
                      <li>
                        <a href="#!"><img src="{{asset('backend/images/flag-icons/United-States.png')}}" alt="English" />  <span class="language-select">English</span></a>
                      </li>
                      
                    </ul>
                    <!-- notifications-dropdown -->
                     <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>NOTIFICATIONS <span class="new badge">0</span></h5>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href=""><i class="mdi-action-add-shopping-cart"></i> Example of notifications</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">0 hours ago</time>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

@else
    Who are you?
@endif
    