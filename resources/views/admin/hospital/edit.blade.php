@extends('layouts.backend.app')

@section('title')
  <title>Edit Hospital</title>
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
                <h5 class="breadcrumbs-title">Hospital Update</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ route('adminDashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('hospital.index') }}">Hospital</a></li>
                    <li class="active">Hospital Update</li>
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
                <h4 class="header2">Edit Hospital</h4>
                <div class="row">
                  <form class="col s12" action="{{ route('hospital.update',$hospital->id) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="name" name="name" value="{{ $hospital->hospital_name }}" type="text">
                        <label for="name">Hospital Name</label>
                      </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                          <textarea id="address" name="address" class="materialize-textarea">{{ $hospital->address }}</textarea>
                          <label for="address">Address</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light" type="submit">Submit</button>&nbsp;

                          <a href="{{ route('hospital.index') }}" class="btn red waves-effect waves-light">Back</a>
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
    </script>
@endsection
