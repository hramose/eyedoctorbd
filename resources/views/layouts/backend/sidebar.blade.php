@if (Sentinel::getUser()->roles()->first()->slug == 'admin')
     <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                 
                        <img src="{{asset('backend/images/avatar.jpg')}}" alt="" class="circle responsive-img valign profile-image"/>
                    

                </div> 
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        {{--  <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                        </li>
                        <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                        </li>  --}}
                        <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="mdi-hardware-keyboard-tab"></i>Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{Sentinel::getUser()->username}}{{-- admin --}}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
            </li>

            <li class="bold {{ Request::is('admin/dashboard') ? 'active' : '' }}"><a href="{{ Route('adminDashboard') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
            </li>

            <li class="bold {{ Request::is('admin/alldoctors','admin/alldoctors-tableview') ? 'active' : '' }}"><a href="{{ Route('adminAllDoctors') }}" class="waves-effect waves-cyan"><i class="mdi-action-account-circle"></i>All Doctors</a>
            </li>

            <li class="bold {{ Request::is('admin/slider') ? 'active' : '' }}"><a href="{{ Route('slider') }}" class="waves-effect waves-cyan"><i class="mdi-action-view-carousel"></i>Promotion Slider</a>
            </li>

            <li class="bold {{ Request::is('admin/activation') ? 'active' : '' }}"><a href="{{ Route('activation') }}" class="waves-effect waves-cyan"><i class="mdi-action-done"></i>Activation</a>
            </li>

             <li class="bold {{ Request::is('admin/contact') ? 'active' : '' }}"><a href="{{ Route('viewContactMessage') }}" class="waves-effect waves-cyan"><i class="mdi-communication-forum"></i>Contact Message</a>
            </li>

            <li class="li-hover"><div class="divider"></div></li>

             <li class="bold {{ Request::is('admin/city*') ? 'active' : '' }}"><a href="{{ Route('city.index') }}" class="waves-effect waves-cyan"><i class="mdi-communication-business"></i>City</a>
            </li>

            <li class="bold {{ Request::is('admin/sub-area*') ? 'active' : '' }}"><a href="{{ Route('sub-area.index') }}" class="waves-effect waves-cyan"><i class="mdi-social-location-city"></i>Sub Area</a>
            </li>

            <li class="li-hover"><div class="divider"></div></li>

             <li class="bold {{ Request::is('admin/hospital*') ? 'active' : '' }}"><a href="{{ Route('hospital.index') }}" class="waves-effect waves-cyan"><i class="mdi-maps-local-hospital"></i>Hospital</a>
            </li>

            <li class="li-hover"><div class="divider"></div></li>

            <li class="bold {{ Request::is('admin/blog/post') ? 'active' : '' }}"><a href="{{ Route('post.index') }}" class="waves-effect waves-cyan"><i class="mdi-communication-forum"></i>Blog</a>
            </li>
            <li class="bold {{ Request::is('admin/blog/category*') ? 'active' : '' }}"><a href="{{ Route('category.index') }}" class="waves-effect waves-cyan"><i class="mdi-communication-forum"></i>Category</a>
            </li>

            <li class="bold {{ Request::is('admin/blog/tag*') ? 'active' : '' }}"><a href="{{ Route('tag.index') }}" class="waves-effect waves-cyan"><i class="mdi-communication-forum"></i>Tag</a>
            </li>
            

        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->
@elseif (Sentinel::getUser()->roles()->first()->slug == 'doctor')
      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                 
                        <img src="/upload/doctors/avatar/{{ Sentinel::getUser()->avatar }}" alt="" class="circle responsive-img valign profile-image"/>
 
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="{{ route('doctorProfile') }}"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        {{--  <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                        </li>
                        <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                        </li>  --}}
                        <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                               <i class="mdi-hardware-keyboard-tab"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{ Sentinel::getUser()->username }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Doctor</p>
                </div>
            </div>
            </li>

            <li class="bold {{ (Request::is('doctor/dashboard')? 'active' : '') }}"><a href="{{ route('doctorDashboard') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
            </li>

             <li class="bold {{ (Request::is('doctor/profile')? 'active' : '') }}"><a href="{{ route('doctorProfile') }}" class="waves-effect waves-cyan"><i class="mdi-action-account-circle"></i>Profile</a>
            </li>
            <li class="bold {{ (Request::is('doctor/chamber*')? 'active' : '') }}"><a href="{{ route('chamber.index') }}" class="waves-effect waves-cyan"><i class="mdi-maps-place"></i>Chamber</a>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->
@else
    Who are you?
@endif