@extends('layouts.admin.master')

@section('title')
  <title>Categories</title>
@endsection

@section('csslink')
<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{asset('admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('admin/js/plugins/data-tables/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('admin/js/plugins/prism/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="{{asset('admin/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('content')
<!-- //////////////////////////////////////////////////////////////////////////// -->

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
                <h5 class="breadcrumbs-title">All Categories</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ route('adminDashboard') }}">Dashboard</a></li>
                    <li><a href="#">Blog</a></li>
                    <li class="active">Category</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

      @include('layouts.admin.include.successmsg')

        <!--start container-->
        <div class="container">
          <div class="section">

            <!--DataTables example-->
            <div id="table-datatables">
              <a href="{{ route('category.create') }}" class="btn teal waves-effect waves-light">Add New</a>
              <div class="row">
                <div class="col s12">
                 <div class="container">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Created At</th>
                            <th class="center">Action</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>Sl No</th>                        
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Created At</th>
                            <th class="center">Action</th>
                        </tr>
                    </tfoot>

                    <tbody>
                      @foreach ($categories as $category)
                        <tr>                                                
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>{{$category->created_at}}</td>
                            <td class="center"><a href="{{ route('category.edit',$category->id) }}" class="btn-floating waves-effect waves-light purple"><i class="mdi-editor-mode-edit"></i></a>||
                              <form id="delete-form-{{ $category->id }}" method="POST" action="{{ route('category.destroy',$category->id) }}" style="display:none;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                
                                                </form>
                            <button onClick="if(confirm('Are you sure, You Want to delete this?')) {
                                                        event.preventDefault(); 
                                                        document.getElementById('delete-form-{{ $category->id }}').submit();
                                                    }else{
                                                        event.preventDefault();
                                                    }" class="btn-floating waves-effect waves-light red"><i class="mdi-content-clear"></i></button>
                            </td>
                        </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
               </div>
              </div>
            </div>

          </div>
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a class="btn-floating btn-large">
                  <i class="mdi-action-stars"></i>
                </a>
                <ul>
                  <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                  <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                  <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                  <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul>
            </div>
            <!-- Floating Action Button -->
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
