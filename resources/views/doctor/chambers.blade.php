@extends('layouts.doctor.master')

@section('title')
All Chambers
@endsection

@section('csslink')

@endsection 

@section('content')
<section id="content">
  {{--alert notification list section start--}}
              @if(session()->has('message'))
                <div id="card-alert" class="card green" style="margin: 0.5rem 10px 1rem 10px;">
                      <div class="card-content white-text">
                        <p><i class="mdi-navigation-check"></i> {{ session()->get('message') }}</p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
               </div>
              @endif

              
              @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                   <div id="card-alert" class="card red" style="margin: 0.5rem 10px 1rem 10px;">
                      <div class="card-content white-text">
                        <p><i class="mdi-alert-error"></i> {{ $error }}</p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
               </div>
                @endforeach
              @endif
              
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
                  <a class="waves-effect waves-light btn modal-trigger light-blue" href="#modal1">Add New Chamber</a>
                  <button class="waves-effect waves-light btn light-blue" onclick="reloadChambers()">Reload</button>
                </ol>
              </div>
            </div>
          </div>
        </div>

    <div class="row" id="chambers">
       {{--  Here will show all chmabers with javascipt --}}
   </div>
   </section>

  <form method="POST" action="{{ route('addChamber') }}">  
   {{ csrf_field() }}
  {{ method_field('DELETE') }}
  <div id="modal1" class="modal modal-fixed-footer">

     
    <div class="modal-content">
     <h4 class="header2">Add New Chamber</h4>
                    
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-maps-my-location prefix"></i>
                          <input type="text" 
                                 class="validate"
                                 name="txt_chamberName"
                                 required autofocus>
                          <label for="chamber_name">Chamber Name</label>
                        </div>
                      </div>
                                           
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-maps-pin-drop prefix"></i>
                          <textarea class="materialize-textarea validate"
                                    length="120"
                                    name="txt_chamberAddress"
                                    ></textarea>
                          <label for="chamber_address">Chamber Address</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-settings-phone prefix"></i>
                          <input type="text"
                                 class="validate"
                                 name="txt_chamberPhone">
                          <label for="chamber_phone">Chamber Phone</label>
                        </div>
                      </div>

                      <div class="row">
                       <h4 class="header2">Available Days</h4>
                        <div class="input-field col s5">
                        <select name="opt_day1">
                          <option value="" disabled selected>Choose day</option>
                          <option value="Saturday">Saturday</option>
                          <option value="Sunday">Sunday</option>
                          <option value="Monday">Monday</option>
                          <option value="Tuesday">Tuesday</option>
                          <option value="Wednesday">Wednesday</option>
                          <option value="Thursday">Thursday</option>                          
                          <option value="Friday">Friday</option>
                        </select>
                        <label>Select Day</label>
                        </div>
                        <div class="col s2">  
                         <strong class="center-text">TO</strong>
                        </div>
                      <div class="input-field col s5">
                        <select name="opt_day2">
                          <option value="" disabled selected>Choose day</option>
                          <option value="Saturday">Saturday</option>
                          <option value="Sunday">Sunday</option>
                          <option value="Monday">Monday</option>
                          <option value="Tuesday">Tuesday</option>
                          <option value="Wednesday">Wednesday</option>
                          <option value="Thursday">Thursday</option>                          
                          <option value="Friday">Friday</option>
                        </select>
                        <label>Select day</label>
                      </div>    
                      </div>

                      <div class="row">
                       <h4 class="header2">Available Time</h4>
                        <div class="input-field col s3">
                          <i class="mdi-action-alarm prefix"></i>
                            <input type="text"
                                   class="validate"
                                   name="txt_time1">
                            <label>00.00 AM</label>

                        </div>
                        <div class="input-field col s2">
                        <select name="opt_AP1">
                              <option value="AM">AM</option>
                              <option value="PM">PM</option>
                            </select>
                          
                        </div>
                        <div class="col s2">
                         <strong class="center-text">TO</strong>
                        </div>
                      <div class="input-field col s3">
                          <i class="mdi-action-alarm prefix"></i>
                          <input type="text"
                                 class="validate"
                                 name="txt_time2">
                          <label>00.00 PM</label>
                      </div>    
                      <div class="input-field col s2">
                        <select name="opt_AP2">
                              <option value="AM">AM</option>
                              <option value="PM">PM</option>
                            </select>
                          
                        </div>                    
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-maps-local-pharmacy prefix"></i>
                          <input type="text"
                                 class="validate"
                                 name="txt_newPatient">
                          <label>New Patient (fees)</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-maps-local-pharmacy prefix"></i>
                          <input type="text"
                                 class="validate"
                                 name="txt_returningPatient">
                          <label>Returning Patient (fees)</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-maps-local-pharmacy prefix"></i>
                          <input type="text"
                                 class="validate"
                                 name="txt_followupReport">
                          <label>Followup Report (fees)</label>
                        </div>
                      </div>             
                  </div>

        <div class="modal-footer">
          <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
          <button class="btn cyan waves-effect waves-light right" 
                   type="submit">Save
                   <i class="mdi-content-send right"></i>
                   </button>
       </div>
      
  </div>
  </form>

@endsection

@section('jslink')
  <script>
    getChambers();
    
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
              $.post("{{ route('delete.chamber') }}", {'id': id, '_token':$('input[name=_token]').val(),'_method':$('input[name=_method]').val()}, function(data){
                  swal("Deleted!", "Your data has been deleted.", "success");            
                  reloadChambers();  
              });  
            } else {
                swal("Cancelled", "Your data is safe :)", "error");
            }
        });
      
    }
    function reloadChambers(){
      $('#chambers').empty();
      getChambers();
    }
    function getChambers(){
      axios({
        method:'post',
        url:'chambers/api'
      })
        .then(function(response) {
          for (let key in response.data){
            content = '<div class="col s12 m4 l4" id="remove">';
            content += '<div id="profile-card" class="card">';
            //content += '<div class="card-image waves-effect waves-block waves-light">';
            //content += '<img class="activator" src="{{ asset('admin/images/user-bg.jpg') }}" alt="user bg"></div>';
            content += '<div class="card-content">';                     
            content += '<div class="fixed-action-btn " style="position: absolute; display: inline-block; right: 19px;">';
            content += '<a class="btn-floating btn-large red">';
            content += '<i class="mdi-navigation-apps"></i> </a>';
            content += '<ul><li>';
            content += '<button class="btn-floating red tooltipped" type="submit" data-position="left" data-delay="50" data-tooltip="Delete" onClick="deleteChamber('+ response.data[key].id +')" href="/doctor/chambers/delete/id"><i class="mdi-action-delete" ></i> </button></li>';
            content += '<li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Edit" href="#"><i class="mdi-editor-mode-edit"></i></a></li></ul></div>';
            content += '<span class="card-title activator grey-text text-darken-4">'+ response.data[key].chamber_name +'</span>';
            content += '<p><i class="mdi-maps-pin-drop"></i>'+ response.data[key].chamber_address + '</p>';
            content += '<p><i class="mdi-action-perm-phone-msg"></i>'+ response.data[key].chamber_phone +'</p>';
            content += '<p><i class="mdi-action-event"></i>'+ response.data[key].app_day +'</p>';
            content += '<p><i class="mdi-action-alarm"></i>'+ response.data[key].app_time +'</p> </div>';
            content += '<div class="card-reveal" style="display: none; transform: translateY(0px);">';
            content += '<span class="card-title grey-text text-darken-4">Fees<i class="mdi-navigation-close right"></i></span>';
            content += '<p><i class="mdi-maps-local-hospital"></i>New Patient: '+ response.data[key].new_patient +'.tk</p>';
            content += '<p><i class="mdi-maps-local-hotel"></i>Returning Patient: '+ response.data[key].returning_patient +'.tk</p>';
            content += '<p><i class="mdi-maps-local-laundry-service"></i>Follow Up Report: '+ response.data[key].followup_report +'.tk</p></div></div></div>';
           $('#chambers').append(content);
          }
      });
    }
      
  </script>
@endsection

       


