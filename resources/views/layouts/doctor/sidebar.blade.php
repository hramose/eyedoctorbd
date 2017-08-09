      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                 
                        <img src="/doctors/avatar/{{ Sentinel::getUser()->avatar }}" alt="" class="circle responsive-img valign profile-image"/>
 
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                        </li>
                        <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                        </li>
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
            <li class="bold {{ (Request::is('doctor/chambers')? 'active' : '') }}"><a href="{{ route('chambers') }}" class="waves-effect waves-cyan"><i class="mdi-maps-place"></i>Chambers</a>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->


      