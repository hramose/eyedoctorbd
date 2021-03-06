@extends('layouts.backend.app')

@section('title')
  <title>All Doctors Table view</title>
@endsection

@section('csslink')
<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{asset('backend/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('backend/js/plugins/data-tables/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('backend/js/plugins/prism/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="{{asset('backend/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('content')
<!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
           {{--  <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div> --}}
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">All Doctors Table View</h5>
                <ol class="breadcrumbs">
                   <a class="waves-effect waves-light btn" href="{{ Route('adminAllDoctors') }}"><i class="mdi-action-3d-rotation left"></i>Switch to Card View</a>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <div class="section">
            <div class="divider"></div>

            <!--DataTables example-->
            <div id="table-datatables">
              <h4 class="header">ALL DOCTORS</h4>
              <div class="row">
                <div class="col s12">
                 <div class="container">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Last Login</th>
                            <th>Promotion</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Last Login</th>
                            <th>Promotion</th>
                            <th>Action</th>
                            
                        </tr>
                    </tfoot>

                    <tbody>
                      @foreach ($alldoctors as $doctor)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{$doctor->name}}</td>
                            <td>{{$doctor->email}}</td>
                            <td>
                              @if($doctor->mobile_number == "")
                                  ask to update
                              @else
                                  {{ $doctor->mobile_number }}
                              @endif
                            </td>
                            <td class="center-align">
                              @if($doctor->status == "active")
                                  <span class="task-cat cyan">Active</span>
                              @else
                                  <span class="task-cat pink">Deactive</span>
                              @endif
                            </td>
                            <td>
                              @if($doctor->last_login == "")
                                  not login yet
                              @else
                                  {{ $doctor->last_login }}
                              @endif
                            </td>
                            <td class="center-align">
                              @if ($doctor->slider1 === 1 && $doctor->slider2 === 1)
                                  <span class="task-cat cyan">Slider1</span> ,
                                   <span class="task-cat cyan">Slider2</span>
                              @elseif ($doctor->slider1 === 1 && $doctor->slider2 ===0)
                                  <span class="task-cat cyan">Slider1</span>
                              @elseif ($doctor->slider1 === 0 && $doctor->slider2 ===1)
                                   <span class="task-cat cyan">Slider2</span>                              
                              @else
                                  not promoted yet
                              @endif
                            </td>
                            <td>action</td>
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
