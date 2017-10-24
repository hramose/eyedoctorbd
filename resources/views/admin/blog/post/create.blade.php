@extends('layouts.admin.master')

@section('title')
  <title>Create Post</title>
@endsection

@section('csslink')
<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{asset('admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('admin/js/plugins/prism/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="{{asset('admin/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <script type="text/javascript" src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
    
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
                <h5 class="breadcrumbs-title">Category Create</h5>
                <ol class="breadcrumbs">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Category Create</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        @include('layouts.admin.include.errors')
    <form  action="{{ route('post.store') }}" method="POST">
                  {{ csrf_field() }}
        <!--start container-->
        <div class="container">
          <div class="section">
         
          <div id="basic-form" class="section">
              <div class="row">
                <div class="col s12 m12 l6">
                  <div class="card-panel">
                    {{--  <h4 class="header2">Basic Form</h4>  --}}
                    <div class="row">
                      <div class="col s12">
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="title" type="text" name="title">
                            <label for="title" class="">Post Title</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="subtitle" type="text" name="subtitle">
                            <label for="subtitle">Post Sub Title</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="slug" type="text" name="slug">
                            <label for="slug">Post Slug</label>
                          </div>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Form with placeholder -->
                <div class="col s12 m12 l6">
                  <div class="card-panel">
                    {{--  <h4 class="header2">Form with placeholder</h4>  --}}
                    <div class="row">
                      <div class="col s12">
                        <div class="row">
                          <div class="input-field col s12">
                            <select multiple name="categories[]">
                              <option value="" disabled selected>Choose Post Category</option>
                              <option value="1">Option 1</option>
                              <option value="2">Option 2</option>
                              <option value="3">Option 3</option>
                            </select>
                            <label>Select Categories: </label>
                          </div>  
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <select multiple name="tags[]">
                              <option value="" disabled selected>Choose Post Tags</option>
                              <option value="1">Option 1</option>
                              <option value="2">Option 2</option>
                              <option value="3">Option 3</option>
                            </select>
                            <label>Select Tags: </label>
                          </div>  
                        </div>

                         <div class="row">
                          <div class="input-field col s12">
                            <div class="file-field input-field">
                              <div class="btn">
                                <span>File</span>
                                <input type="file">
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" placeholder="Choose Image" type="text">
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">Post Body</h4>
                <div class="row">
                  <div class="col s12">
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="body-ckeditor"  name="body"></textarea>
                      </div>
                      </div><br>
                      <div class="row">
                          <div class="col s12">
                            <input type="checkbox" id="test5" />
                             <label for="test5">Publish</label>
                          </div>
                        </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light" type="submit" name="action">Submit
                          </button>&nbsp;
                           <a href="{{ route('post.index') }}" class="btn red waves-effect waves-light">Back</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          
        <!--end container-->
           </form>
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
    CKEDITOR.replace( 'body-ckeditor' );

    </script>
@endsection
