@extends('layouts.admin.master')

@section('title')
  <title>All Doctors Table view</title>
@endsection

@section('csslink')
<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{asset('admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('admin/js/plugins/prism/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="{{asset('admin/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
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
                <h5 class="breadcrumbs-title">Tag Update</h5>
                <ol class="breadcrumbs">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Tag Update</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        @include('layouts.admin.include.errors')

        <!--start container-->
        <div class="container">
          <div class="section">
          <!--Form Advance-->          
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">Edit Tag</h4>
                <div class="row">
                  <form class="col s12" action="{{ route('tag.update',$tag->id) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="name" name="name" value="{{ $tag->name }}" type="text">
                        <label for="Name">Name</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s12">
                        <input id="slug" name="slug" value="{{ $tag->slug }}" type="text">
                        <label for="slug">Slug</label>
                      </div>
                    </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light" type="submit">Submit</button>&nbsp;

                          <a href="{{ route('tag.index') }}" class="btn red waves-effect waves-light">Back</a>
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
    <script type="text/javascript" src="{{asset('admin/js/plugins/prism/prism.js')}}"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="{{asset('admin/js/plugins/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/plugins/data-tables/data-tables-script.js')}}"></script>
    <script>
    $('#data-table-simple').DataTable( {
  buttons: [
      'copy', 'excel', 'pdf'
  ]
} );
    </script>
@endsection
