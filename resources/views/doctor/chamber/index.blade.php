@extends('layouts.backend.app')

@section('title')
  <title>All Chambers</title>
@endsection

@section('csslink')

@endsection 

@section('content')
<section id="content">
  {{--alert notification list section start--}}
    @include('layouts.backend.include.successmsg')
  {{--alert notification list section stop--}}
<div id="breadcrumbs-wrapper">
        
            {{-- <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                
            </div> --}}
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">All Chambers</h5>
                <ol class="breadcrumbs">
                  <a class="waves-effect waves-light btn light-blue" href="{{ route('chamber.create') }}">Add New Chamber</a>
                </ol>
              </div>
            </div>
          </div>
        </div>

    <div class="row" id="chambers">
      @foreach($chambers as $chamber)
           <div class="col s12 m4 l4" id="remove">
             <div id="profile-card" class="card">
            <div class="card-content">                     
            <div class="fixed-action-btn " style="position: absolute; display: inline-block; right: 19px;">
            <a class="btn-floating btn-large red">
            <i class="mdi-navigation-apps"></i> </a>
            <ul><li>
            <form id="delete-form-{{ $chamber->id }}" method="POST" action="{{ route('chamber.destroy',$chamber->id) }}" style="display:none;">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
                                                
              </form>
            <button class="btn-floating red tooltipped" type="submit" data-position="left" data-delay="50" data-tooltip="Delete" onClick="deleteChamber('delete-form-{{ $chamber->id }}')" href="/doctor/chambers/delete/id"><i class="mdi-action-delete" ></i> </button>
            
            </li>
            <li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Edit" href="#"><i class="mdi-editor-mode-edit"></i></a></li></ul></div>
            <span class="card-title activator grey-text text-darken-4">{{ $chamber->chamber_name }}</span>
            <p><i class="mdi-maps-pin-drop"></i>{{ $chamber->chamber_address }}</p>
            <p><i class="mdi-action-perm-phone-msg"></i>{{ $chamber->chamber_phone }}</p>
            <p><i class="mdi-action-event"></i>{{  $chamber->app_day_start }} To {{  $chamber->app_day_end }}</p>
            <p><i class="mdi-action-alarm"></i>{{  $chamber->app_time_start }} To {{  $chamber->app_time_end }}</p> </div>
            <div class="card-reveal" style="display: none; transform: translateY(0px);">
            <span class="card-title grey-text text-darken-4">Fees<i class="mdi-navigation-close right"></i></span>
            <p><i class="mdi-maps-local-hospital"></i>New Patient: {{  $chamber->new_patient }}tk</p>
            <p><i class="mdi-maps-local-hotel"></i>Returning Patient: {{  $chamber->returning_patient }}tk</p>
            <p><i class="mdi-maps-local-laundry-service"></i>Follow Up Report: {{  $chamber->followup_report }}tk </p></div></div></div>
      @endforeach
   </div>
   </section>

@endsection

@section('jslink')
	<script type="text/javascript">
  
    function deleteChamber(id) {
      swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
            },
            function(isConfirm){
            if (isConfirm) {
             event.preventDefault(); 
            document.getElementById(id).submit();
            } else {
                swal("Cancelled", "Your data is safe :)", "error");
            }
        });
      
    }
    
      
  </script>
@endsection

       


