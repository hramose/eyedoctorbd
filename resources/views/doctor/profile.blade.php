@extends('layouts.backend.app')

@section('title')
  <title>Profile</title>
@endsection

@section('csslink')
  <link href="{{asset('backend/js/plugins/prism/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{asset('backend/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{asset('backend/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
   {{--  animate css --}}
  <link href="{{asset('backend/js/plugins/animate-css/animate.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
   {{--  dropify --}}
  <link href="{{ asset('backend/js/plugins/dropify/css/dropify.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

  <style type="text/css"> 
    .select-wrapper {
          position: relative;
          margin-left: 45px;
      }
  </style>
@endsection

@section('content')
      <!-- START CONTENT -->
      <section id="content">        

        <!--start container-->
        <div class="container">
          <!-- profile-page Start-->
          <div id="profile-page" class="section">

          {{--alert notification list section start--}}
              @if(session('success'))
                <div id="card-alert" class="card green">
                      <div class="card-content white-text">
                        <p><i class="mdi-navigation-check"></i> {{ session('success') }}</p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
               </div>
              @endif
           {{--alert notification list section stop--}}

           
            <!-- profile-page-header -->
            <div id="profile-page-header" class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{asset('backend/images/user-profile-bg.jpg')}}" alt="user background">                    
                </div>
                <figure class="card-profile-image">
          <img src="/upload/doctors/avatar/{{$doctor->avatar}}" alt="profile image" class="circle z-depth-2 responsive-img activator"/>
                </figure>
                <div class="card-content">
                  <div class="row">                    
                    <div class="col s9 offset-s2">                        
                        <h4 class="card-title grey-text text-darken-4">{{$doctor->first_name}} {{$doctor->last_name}}</h4>
                        <p class="medium-small grey-text">{{$doctor->designation}},&nbsp;Dept. of {{$doctor->department}},&nbsp;{{$doctor->hospital_name}}</p> 
                                    
                    </div>
                                      
                    <div class="col s1 right-align">
                      <a class="btn-floating activator waves-effect waves-light darken-2 right">
                          <i class="mdi-action-perm-identity"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-reveal">
                    <p>
                      <span class="card-title grey-text text-darken-4">{{$doctor->first_name}} {{$doctor->last_name}}<i class="mdi-navigation-close right"></i></span>
                    </p>

                    <p>
                      <i class="mdi-action-perm-identity cyan-text text-darken-2"></i>{{$doctor->designation}},&nbsp;Dept. of {{$doctor->department}}, &nbsp; {{$doctor->hospital_name}}
                    </p>
                    <p>{{$doctor->Speciality}}</p>
                    
                    <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +88 {{ $doctor->mobile_number }}</p>
                    <p><i class="mdi-communication-email cyan-text text-darken-2"></i>{{$doctor->email}}</p>
                </div>
            </div>
            <!--/ profile-page-header Stop-->

            <!-- profile-page-content Start-->
            <div id="profile-page-content" class="row">

              <!-- profile-page-wall Start -->
              <div id="profile-page-wall" class="col s12 m12">
                <!-- profile-page-wall-share start -->
                <div id="profile-page-wall-share" class="row">
                  <div class="col s12">
                    <ul class="tabs tab-profile z-depth-1 light-blue">
                      <li class="tab col s3"><a class="white-text waves-effect waves-light active" href="#PersonalInfo"><i class="mdi-editor-border-color"></i>Personal Information</a>
                      </li>
                      {{-- <li class="tab col s3"><a class="white-text waves-effect waves-light" href="#ProfessinoalQualfication"><i class="mdi-image-camera-alt"></i>Professinoal Qualfication</a>
                      </li>
                      <li class="tab col s3"><a class="white-text waves-effect waves-light" href="#Experience"><i class="mdi-image-photo-album"></i>Experience</a>
                      </li>  --}}
                      {{-- <li class="tab col s3"><a class="white-text waves-effect waves-light" href="#ChamberDetalis"><i class="mdi-image-photo-album"></i>Chamber Details</a>
                      </li> --}}                     
                    </ul>
                    <form method="POST" enctype="multipart/form-data" action="{{ Route('profileUpdate') }}" >
                     {{ csrf_field() }}
                      <input type="hidden" name="txt_slug" id="slug" value="{{ $doctor->slug  }}"/>
                      <div class="card-panel">
                       <div class="row">
                        <div class="col s12">
                          <!-- Personal Information-->
                          <div id="PersonalInfo" class="tab-content col s12">
                            <h4 class="header2">Personal Information</h4>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-account-circle prefix"></i>
                                  <input type="text" 
                                         name="txt_First_name" 
                                         id="first_name"
                                        onkeyup="slugReplace()"
                                         value="{{ $doctor->first_name }}" 
                                         class="validate">
                                  <label>First Name</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-account-circle prefix"></i>
                                  <input type="text" 
                                         name="txt_Last_Name" 
                                         id="last_name"
                                          onkeyup="slugReplace()"
                                         value="{{ $doctor->last_name }}" 
                                         class="validate">
                                  <label>Last Name</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-communication-call prefix"></i>
                                  <input type="text" 
                                         name="txt_MobileNumber" 
                                         value="{{ $doctor->mobile_number }}" 
                                         class="validate">
                                  <label>Mobile Number</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-editor-border-color prefix"></i>
                                  <input type="text" 
                                         name="txt_Designation" 
                                         value="{{ $doctor->designation  }}" 
                                         class="validate">
                                  <label>Designation</label>
                                </div>
                              </div>

                              {{--  <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-editor-border-color prefix"></i>
                                  <input type="text" 
                                         name="txt_JobTitle" 
                                         value="{{ $doctor->job_title  }}" 
                                         class="validate">
                                  <label>Job Title</label>
                                </div>
                              </div>  --}}

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-stars prefix"></i>
                                  <input type="text" 
                                         name="txt_Degrees" 
                                         value="{{ $doctor->degrees  }}" 
                                         class="validate">
                                  <label>Degrees</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-account-balance prefix"></i>
                                  <input type="text" 
                                         name="txt_BMDC" 
                                         value="{{ $doctor->bmdc_number  }}" 
                                         class="validate">
                                  <label>BMDC Reg. No</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-grade prefix"></i>
                                  <input type="text" 
                                         name="txt_Department" 
                                         value="{{ $doctor->department  }}" 
                                         class="validate">
                                  <label>Department of</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-bookmark prefix"></i>
                                  <input type="text" 
                                         name="txt_Specialty" 
                                         value="{{ $doctor->speciality  }}" 
                                         class="validate">
                                  <label>Specialty</label>
                                </div>
                              </div>

                              {{-- <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-speaker-notes prefix"></i>
                                  <textarea class="materialize-textarea" 
                                            name="txt_SpecialtyDetails">{{ $doctor->specialty_details  }}</textarea>
                                  <label>Specialty Details</label>
                                </div>
                              </div> --}}

                              <div class="row">
                                <div class="input-field col s12">
                                   <i class="mdi-maps-place prefix"></i>
                                      <select name="opt_City">
                                        <option value="City">City</option>
                                        <option  
                                        {{ $doctor->city===('Dhaka') ? 'selected' : '' }}
                                        value="Dhaka">Dhaka</option>

                                        <option  
                                        {{ $doctor->city===('Narayanganj') ? 'selected' : '' }}
                                        value="Narayanganj">Narayanganj</option>

                                        <option  
                                        {{ $doctor->city===('Chittaogng') ? 'selected' : '' }}
                                        value="Chittaogng">Chittaogng</option>

                                        <option  
                                        {{ $doctor->city===('Khulna') ? 'selected' : '' }}
                                        value="Khulna">Khulna</option>

                                        <option  
                                        {{ $doctor->city===('Bogra') ? 'selected' : '' }}
                                        value="Bogra">Bogra</option>

                                        <option  
                                        {{ $doctor->city===('Mymensingh') ? 'selected' : '' }}
                                        value="Mymensingh">Mymensingh</option>

                                        <option  
                                        {{ $doctor->city===('Rajshahi') ? 'selected' : '' }}
                                        value="Rajshahi">Rajshahi</option>

                                        <option  
                                        {{ $doctor->city===('Sylhet') ? 'selected' : '' }}
                                        value="Sylhet">Sylhet</option>

                                        <option  
                                        {{ $doctor->city===('Comilla') ? 'selected' : '' }}
                                        value="Comilla">Comilla</option>

                                        <option  
                                        {{ $doctor->city===('Kishorganj') ? 'selected' : '' }}
                                        value="Kishorganj">Kishorganj</option>

                                        <option  
                                        {{ $doctor->city===('Natore') ? 'selected' : '' }}
                                        value="Natore">Natore</option>

                                        <option  
                                        {{ $doctor->city===('Tangail') ? 'selected' : '' }}
                                        value="Tangail">Tangail</option>

                                        <option  
                                        {{ $doctor->city===('Barisal') ? 'selected' : '' }}
                                        value="Barisal">Barisal</option>

                                      </select>
                                     <label>City</label>
                                </div>
                               </div>

                                <div class="row">
                                <div class="input-field col s12">
                                   <i class="mdi-maps-pin-drop prefix"></i>
                                      <select name="opt_SubArea">
                                        <option  value="SubArea">Sub Area</option>

                                        <option
                                        {{ $doctor->subarea===('Uttra') ? 'selected' : '' }} 
                                         value="Uttra">Uttra</option>

                                         <option
                                        {{ $doctor->subarea===('Demra') ? 'selected' : '' }} 
                                         value="Demra">Demra</option>

                                         <option
                                        {{ $doctor->subarea===('Badda') ? 'selected' : '' }} 
                                         value="Badda">Badda</option>

                                      </select>
                                     <label>Sub Area</label>
                                </div>
                              </div>
                              
                              {{--  <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-maps-navigation prefix"></i>
                                  <textarea class="materialize-textarea" 
                                            name="txt_WorkingAddress">{{ $doctor->working_address }}</textarea>
                                  <label for="Address">Working Address</label>
                                </div>
                              </div>  --}}

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-maps-local-hospital prefix"></i>
                                  <input type="text" 
                                         name="txt_HospitalName" 
                                         value="{{ $doctor->hospital_name  }}" 
                                         class="validate">
                                  <label>Hospital Name</label>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-social-group-add prefix"></i>
                                  <input type="text" 
                                         name="txt_Association" 
                                         value="{{ $doctor->association }}">
                                  <label for="Association">Association</label>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="input-field col s12">
                                   <i class="mdi-action-accessibility prefix"></i>
                                   <select name="opt_Gender">
                                        <option  value="Gender">Gender</option>
                                        <option
                                        {{ $doctor->gender===('Male') ? 'selected' : '' }}
                                         value="Male">Male</option>

                                         <option
                                        {{ $doctor->gender===('Female') ? 'selected' : '' }}
                                         value="Female">Female</option>
                                      </select>
                                   <label>Gender</label>
                                </div>
                              </div> 

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-social-cake prefix"></i>
                                  <input type="date" 
                                         name="dat_DateofBirth" 
                                         value="{{ $doctor->date_of_birth }}">
                                  <label class="active">Date of Birth</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                   <i class="mdi-maps-local-florist prefix"></i>
                                      
                                      <select name="opt_Religion">
                                        <option  value="Religion">Religion</option>
                                        <option
                                        {{ $doctor->religion===('Islam') ? 'selected' : '' }}
                                         value="Islam">Islam</option>
                                        <option  
                                        {{ $doctor->religion===('Hindu') ? 'selected' : '' }}
                                        value="Hindu">Hindu</option>
                                      </select>
                                     <label>Religion</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-receipt prefix"></i>
                                  <textarea class="materialize-textarea validate" 
                                            name="txt_DoctorShortSummery">{{ $doctor->doctor_short_summery }}</textarea>
                                  <label>Doctor Short Summery</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                   <i class="mdi-social-mood prefix"></i>
                                  <input type="text"
                                         disabled 
                                         value="Change your profile picture" 
                                         class="validate">
                                  <label>Avater</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <input type="file" 
                                         id="input-file-now"
                                         name="avatar" 
                                         class="dropify" 
                                         data-default-file="" />
                                </div>
                              </div>

                           </div>
 
                          {{-- Professinoal Qualfication --}}
                          {{-- <div id="ProfessinoalQualfication" class="tab-content col s12">
                            <h4 class="header2">Professinoal Qualfication</h4>
                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-grade prefix"></i>
                                  <input type="text" 
                                         name ="txt_HighestDegree" 
                                         value="{{ $doctor->PQ_HighestDegree }}" 
                                         class="validate">
                                  <label>Highest Degree</label>
                                </div>
                              </div>

                             

                              <h4 class="header2">Educational Qualfication ( Degree No 1 )</h4>
                             

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-stars prefix"></i>
                                  <input type="text" 
                                         name="txt_DegreeName01" 
                                         value="{{ $doctor->PQ_DegreeName01 }}" 
                                         class="validate">
                                  <label for="DegreeName">Name of Degree</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-communication-business prefix"></i>
                                  <input type="text" 
                                         name="txt_InstitutionName01" 
                                         value="{{ $doctor->PQ_txt_InstitutionName01 }}" 
                                         class="validate">
                                  <label for="Institution">Name of Institution</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                   <i class="mdi-action-alarm prefix"></i>
                                      <input type="text" 
                                             name="txt_PassingYear01" 
                                             value="{{ $doctor->PQ_PassingYear01}}">
                                      <label>Passing Year</label>
                                  </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                   <i class="mdi-maps-place prefix"></i>
                                       <input type="text" 
                                              name="txt_Location01" 
                                              value="{{ $doctor->PQ_Location01  }}" 
                                              class="validate">
                                     <label>Location</label>
                                </div>
                               </div>

                                <h4 class="header2">Educational Qualfication ( Degree No 2 )</h4>
                              <div class="divider"></div>
                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-stars prefix"></i>
                                  <input type="text" 
                                         name="txt_DegreeName02" 
                                         value="{{ $doctor->PQ_DegreeName02  }}" 
                                         class="validate">
                                  <label for="DegreeName">Name of Degree</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-communication-business prefix"></i>
                                  <input type="text" 
                                         name="txt_InstitutionName02" 
                                         value="{{ $doctor->PQ_InstitutionName02}}" class="validate">
                                  <label for="Institution">Name of Institution</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                   <i class="mdi-action-alarm prefix"></i>
                                      <input type="text" 
                                             name="txt_PassingYear02" 
                                             value="{{ $doctor->PQ_PassingYear02}}">
                                     <label>Passing Year</label>
                                  </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                   <i class="mdi-maps-place prefix"></i>
                                       <input type="text" 
                                              name="txt_Location02" 
                                              value="{{ $doctor->PQ_Location02 }}" 
                                              class="validate">
                                     <label>Location</label>
                                </div>
                               </div>

                                <h4 class="header2">Educational Qualfication ( Degree No 3 )</h4>
                               <div class="divider"></div>
                               <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-stars prefix"></i>
                                  <input type="text" 
                                         name="txt_DegreeName03" 
                                         value="{{ $doctor->PQ_DegreeName03  }}" 
                                         class="validate">
                                  <label for="DegreeName">Name of Degree</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-communication-business prefix"></i>
                                  <input type="text" 
                                         name="txt_InstitutionName03" 
                                         value="{{ $doctor->PQ_InstitutionName03}}" 
                                         class="validate">
                                  <label for="Institution">Name of Institution</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                   <i class="mdi-action-alarm prefix"></i>
                                      <input type="text" 
                                             name="txt_PassingYear03" 
                                             value="{{ $doctor->PQ_PassingYear03}}">
                                     <label>Passing Year</label>
                                  </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                   <i class="mdi-maps-place prefix"></i>
                                       <input type="text" 
                                              name="txt_Location03" 
                                              value="{{ $doctor->PQ_Location03 }}" 
                                              class="validate">
                                     <label>Location</label>
                                </div>
                               </div>
                               
                          </div> --}}
                          {{-- Experience --}}
                         {{--  <div id="Experience" class="tab-content col s12">
                              <h4 class="header2">Experience/Service Information</h4>
                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-grade prefix"></i>
                                  <input type="text" 
                                         name="txt_ServiceAt" 
                                         value="{{ $doctor->EX_ServiceAt  }}" 
                                         class="validate">
                                  <label>Service at</label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-communication-business prefix"></i>
                                  <input type="text" 
                                         name="txt_NameofInstitution" 
                                         value="{{ $doctor->EX_NameofInstitution}}" 
                                         class="validate">
                                  <label>Name of Institution</label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-editor-border-color prefix"></i>
                                  <input type="text" 
                                         name="txt_EXIDesignation" 
                                         value="{{ $doctor->EX_Desigation  }}" 
                                         class="validate">
                                  <label>Designation</label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-grade prefix"></i>
                                  <input type="text" 
                                         name="txt_Department" 
                                         value="{{ $doctor->EX_Department  }}" 
                                         class="validate">
                                  <label>Department</label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-maps-pin-drop prefix"></i>
                                  <input type="text" 
                                         name="txt_Address" 
                                         value="{{ $doctor->EX_Address  }}" 
                                         class="validate">
                                  <label>Address</label>
                                </div>
                              </div>
                          </div> --}}

                           {{-- Chamber Details --}}
                          {{-- <div id="ChamberDetalis" class="tab-content col s12">
                             <h4 class="header2">1<sup>ST</sup> Chember Information</h4>
                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-grade prefix"></i>
                                  <input type="text" 
                                         name="txt_ChemberName1st" 
                                         value="{{ $doctor->CD_ChemberName01  }}" 
                                         class="validate">
                                  <label>Chember Name 1st</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-maps-navigation prefix"></i>
                                  <textarea class="materialize-textarea" 
                                            name="txt_ChemberAddress1st">
                                            {{ $doctor->CD_ChemberAddress01  }}
                                            </textarea>
                                  <label for="Address">Chember Address 1st</label>
                                </div>
                              </div>

                               <h4 class="header2">2<sub>nd</sub> Chember Information</h4>
                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-action-grade prefix"></i>
                                  <input type="text" 
                                         name="txt_ChemberName2nd" 
                                         value="{{ $doctor->CD_ChemberName02  }}" 
                                         class="validate">
                                  <label>Chember Name 2nd</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="mdi-maps-navigation prefix"></i>
                                  <textarea class="materialize-textarea" 
                                            name="txt_ChemberAddress2nd">
                                            {{ $doctor->CD_ChemberAddress02  }}
                                            </textarea>
                                  <label for="Address">Chember Address 2nd</label>
                                </div>
                              </div>

                          </div> --}}
    
                          <div class="row">
                            <div class="input-field col s12">
                              <button type="submit" 
                                      class="btn waves-effect waves-light light-blue accent-3 animated infinite rubberBand">
                                      Update
                                <i class="mdi-content-send right"></i>
                           </button>
                         </div>
                        </div>
                       </div> 
                      </div>
                     </div>
                    </form>
                  </div>

                </div>
                <!-- profile-page-wall-share Stop -->
               
              </div>
              <!--/ profile-page-wall Stop-->

            </div>
            <!-- profile-page-content Stop-->

          </div>
          <!-- profile-page Stop-->
        </div>
        
        <!--end container-->
      </section>
      <!-- END CONTENT -->

@endsection

@section('jslink')
  <script type="text/javascript" src="{{asset('backend/js/plugins/prism/prism.js')}}"></script>
     {{--  dropify --}}
  <script type="text/javascript" src="{{ asset('backend/js/plugins/dropify/js/dropify.min.js') }}"></script>
  <script>
      $('.datepicker').pickadate({
    format: 'yyyy/mm/dd',
    formatSubmit: 'yyyy/mm/dd',
    hiddenPrefix: 'prefix__',
    hiddenSuffix: '__suffix'
  }) ;  
  </script>
   <script type="text/javascript">
        $(document).ready(function(){
            $('.dropify').dropify();
        });

          function slugReplace(){
            var first_name = $('input#first_name').val();
            var last_name = $('input#last_name').val();
            var slug = first_name + "-" + last_name;   
             var hyp = slug.replace(/ /g,"-");
            $('input#slug').val(hyp);
        };
    </script>
@endsection