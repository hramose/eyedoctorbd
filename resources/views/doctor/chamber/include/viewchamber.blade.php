 @foreach ($chambers as $chamber)
            <div class="col s12 m4 l4">
            <div id="profile-card" class="card">
                    {{-- <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="{{ asset('admin/images/user-bg.jpg') }}" alt="user bg">
                    </div> --}}
                    <div class="card-content">
                     
                      <div class="fixed-action-btn " style="position: absolute; display: inline-block; right: 19px;">
                      <a class="btn-floating btn-large red">
                        <i class="mdi-navigation-apps"></i>
                      </a>
                      <ul>
                      <li>
                       <form action="{{ '/doctor/chambers/'.$chamber->id.'/delete' }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }} 
                        <button class="btn-floating red tooltipped"
                                type="submit"
                                data-position="left" 
                                data-delay="50" 
                                data-tooltip="Delete" 
                                href="/doctor/chambers/delete/{{ $chamber->id }}">
                                <i class="mdi-action-delete" ></i> </button>
                         </form> 
                       </li>
                      <li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Edit" href="#"><i class="mdi-editor-mode-edit"></i></a>
                      </li>
                    </ul>
                    </div>

                      <span class="card-title activator grey-text text-darken-4">{{ $chamber->chamber_name }}</span>
                      <p><i class="mdi-maps-pin-drop"></i>{{ $chamber->chamber_address }}</p>
                      <p><i class="mdi-action-perm-phone-msg"></i>{{ $chamber->chamber_phone }}</p>
                      <p><i class="mdi-action-event"></i>{{ $chamber->app_day }}</p>
                      <p><i class="mdi-action-alarm"></i>{{ $chamber->app_time }}</p>

                    </div>
                    <div class="card-reveal" style="display: none; transform: translateY(0px);">
                      <span class="card-title grey-text text-darken-4">Fees<i class="mdi-navigation-close right"></i></span>
                      
                      <p><i class="mdi-maps-local-hospital"></i>New Patient: {{ $chamber->new_patient }}.tk</p>
                      <p><i class="mdi-maps-local-hotel"></i>Returning Patient: {{ $chamber->returning_patient }}.tk</p>
                      <p><i class="mdi-maps-local-laundry-service"></i>Follow Up Report: {{ $chamber->followup_report }}.tk</p>
                    </div>
            </div>
        </div>
        @endforeach