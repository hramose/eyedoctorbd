@extends('layouts.main.master')

@section('content')
    <h1>content</h1>
    <span>location:</span><input type="text" id="txtautocomplete" style="width:200px" placeholder="enter the adress"/>
    <label id="lblresult"></label>

    <div id="map"></div>
@endsection

@section('jslink')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsBE16CUMhihku7nqBldifkvXBO26ksDQ&libraries=places&callback=initMap" async defer></script>
<script type="text/javascript">
     function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }

    </script>
@endsection