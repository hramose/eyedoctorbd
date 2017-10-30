@extends('layouts.backend.app')

@section('title')
 <title>All Doctors</title>
@endsection

@section('csslink')

@endsection

@section('content')
<section id="content">
<div id="breadcrumbs-wrapper">
            {{-- <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                
            </div> --}}
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">All Doctor Card View</h5>
                <ol class="breadcrumbs">
                   <a class="waves-effect waves-light btn" href="{{ Route('amdinAlldoctorsTableview') }}"><i class="mdi-action-3d-rotation left"></i>Switch to table View</a>
                </ol>
              </div>
            </div>
          </div>
        </div>
     
	<div class="row">
		@foreach ($alldoctors as $alldoctor)
			<div class="col s12 m4 l4">
			<div id="profile-card" class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="{{ asset('backend/images/user-bg.jpg') }}" alt="user bg">
                    </div>
                    <div class="card-content">
                      <img src="/upload/doctors/avatar/{{$alldoctor->avatar}}" alt="" class="circle responsive-img activator card-profile-image">

                      <div class="fixed-action-btn " style="position: absolute; display: inline-block; right: 19px;">
					  <a class="btn-floating btn-large red">
					    <i class="mdi-navigation-apps"></i>
					  </a>
					  <ul>
					  <li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Delete" href="#"><i class="mdi-action-delete" ></i></a>
					  </li>
					  <li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Edit" href="#"><i class="mdi-editor-mode-edit"></i></a>
					  </li>
					  
					  <li><a class="btn-floating blue tooltipped" data-position="left" data-delay="50" data-tooltip="View" href="#"><i class="mdi-action-visibility"></i></a>
					  </li>
					</ul>
					</div>

                      <span class="card-title activator grey-text text-darken-4">{{ $alldoctor->name }}</span>
                      <p><i class="mdi-action-perm-identity"></i> Project Manager</p>
                      <p><i class="mdi-action-perm-phone-msg"></i>{{ $alldoctor->mobile_number }}</p>
                      <p><i class="mdi-communication-email"></i>{{ $alldoctor->email }}</p>

                    </div>
                    <div class="card-reveal" style="display: none; transform: translateY(0px);">
                      <span class="card-title grey-text text-darken-4">{{ $alldoctor->name }}<i class="mdi-navigation-close right"></i></span>
                      <p>Here is some more information about this card.</p>
                      <p><i class="mdi-action-perm-identity"></i> Project Manager</p>
                      <p><i class="mdi-action-perm-phone-msg"></i>{{ $alldoctor->mobile_number }}</p>
                      <p><i class="mdi-communication-email"></i>{{ $alldoctor->email }}</p>
                      <p><i class="mdi-social-cake"></i> 18th June 1990
                        </p><p>
                          </p><p><i class="mdi-device-airplanemode-on"></i> BAR - AUS
                            </p><p>
                 </p></div>
            </div>
		</div>
		@endforeach
   </div>
   </section>
@endsection

@section('jslink')

@endsection
