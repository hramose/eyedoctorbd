@extends('layouts.backend.app')

@section('title')
  <title>Create Chamber</title>
@endsection

@section('csslink')
<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{asset('backend/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('backend/js/plugins/prism/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="{{asset('backend/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('content')
 <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Chamber Create</h5>
                <ol class="breadcrumbs">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="{{ route('chamber.index') }}">Chamber</a></li>
                    <li class="active">Chamber Create</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        @include('layouts.backend.include.errors')

        <!--start container-->
        <div class="container">
          <div class="section">
          <!--Form Advance-->          
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">New Chamber</h4>
                <div class="row">
                  <form class="col s12" action="{{ route('chamber.store') }}" method="POST">
                  {{ csrf_field() }}
                     <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-maps-my-location prefix"></i>
                          <input type="text" 
                                 class="validate"
                                 id="chamberName"
                                 required autofocus>
                          <label for="chamber_name">Chamber Name</label>
                        </div>
                      </div>
                                           
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-maps-pin-drop prefix"></i>
                          <textarea class="materialize-textarea validate"
                                    length="120"
                                    name="chamberAddress"
                                    id="address"
                                    ></textarea>
                          <label for="chamber_address">Chamber Address</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-settings-phone prefix"></i>
                          <input type="text"
                                 class="validate"
                                 name="chamberPhone"
                                 id="txt_chamberPhone">
                          <label for="chamber_phone">Chamber Phone</label>
                        </div>
                      </div>

                      <div class="row">
                       <h4 class="header2">Available Days</h4>
                        <div class="input-field col s5">
                        <select id="opt_day_start" name="dayStart">
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
                        <select id="opt_day_end" name="dayEnd">
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
                        <div class="input-field col s5">
                          <i class="mdi-action-alarm prefix"></i>
                            <input type="text"
                                   class="validate"
                                   name="timeStart"
                                   id="txt_time_start">
                            <label>00.00 AM</label>

                        </div>
                        <div class="col s2">
                         <strong class="center-text">TO</strong>
                        </div>
                      <div class="input-field col s5">
                          <i class="mdi-action-alarm prefix"></i>
                          <input type="text"
                                 class="validate"
                                 name="timeEnd"
                                 id="txt_time_end">
                          <label>00.00 PM</label>
                      </div>                
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-maps-local-pharmacy prefix"></i>
                          <input type="text"
                                 class="validate"
                                 name="newPatient"
                                 id="txt_newPatient">
                          <label>New Patient (fees)</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-maps-local-pharmacy prefix"></i>
                          <input type="text"
                                 class="validate"
                                 name="returningPatient"
                                 id="txt_returningPatient">
                          <label>Returning Patient (fees)</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-maps-local-pharmacy prefix"></i>
                          <input type="text"
                                 class="validate"
                                 name="followupReport"
                                 id="txt_followupReport">
                          <label>Followup Report (fees)</label>
                        </div>
                      </div>             
                  </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <button id="btn_submit" class="btn cyan waves-effect waves-light" type="submit">Submit</button>&nbsp;

                          <a href="{{ route('chamber.index') }}" class="btn red waves-effect waves-light">Back</a>
                        </div>
                        
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->
@endsection

@section('jslink')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsBE16CUMhihku7nqBldifkvXBO26ksDQ" async defer></script>

      <!--prism-->
    <script type="text/javascript" src="{{asset('backend/js/plugins/prism/prism.js')}}"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="{{asset('backend/js/plugins/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/js/plugins/data-tables/data-tables-script.js')}}"></script>
    <script>
    $('#data-table-simple').DataTable( {
  buttons: [
      'copy', 'excel', 'pdf'
  ]
} );

  function getLatitudeLongitude(callback, address) {
            address = address || 'Dhaka';
            geocoder = new google.maps.Geocoder();
            if (geocoder) {
                geocoder.geocode({
                    'address': address
                }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        callback(results[0]);
                    }
                });
            }
        }

        var button = document.getElementById('btn_submit');

        button.addEventListener("click", function () {
            var address = document.getElementById('address').value;
            getLatitudeLongitude(createChamber, address)
            
        });

        function createChamber(result){
            let lat = result.geometry.location.lat();
            let lng = result.geometry.location.lng();
            console.log(lat);
            console.log(lng);
      }
    </script>
@endsection
