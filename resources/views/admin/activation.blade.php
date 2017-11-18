@extends('layouts.backend.app')

@section('title')
  <title>Doctors Activation</title>
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
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Doctors Activation</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ route('adminDashboard') }}">Dashboard</a></li>
                    <li class="active">Activation</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

       @include('layouts.backend.include.successmsg')
       @include('layouts.backend.include.errormsg')

        <!--start container-->
        <div class="container">
          <div class="section">
            <div class="divider"></div>

            <!--DataTables example-->
            <div id="table-datatables">
              <div class="row">
                <div class="col s12">
                 <div class="container">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>user_id</th>
                            <th>code</th>
                            <th class="center-align">completed</th>
                            <th>completed_at</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>user_id</th>
                            <th>code</th>
                            <th class="center-align">completed</th>
                            <th>completed_at</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                        </tr>
                    </tfoot>

                    <tbody>
                      @foreach ($activations as $activation)
                        <tr>
                            <td>{{ $activation->id}}</td>
                            <td>{{$activation->user_id}}</td>
                            <td>{{$activation->code}}</td>
                            <td class="center-align">
                               @if($activation->completed == 1)
                                   <span class="task-cat cyan">Activated</span>
                              @else
                                  <a class="btn-floating waves-effect waves-light blue" href="{{ route('activation.Byadmin',[$activation->user_id,$activation->code]) }}"><i class="mdi-content-add"></i></a>
                              @endif
                            </td>
                            <td>{{$activation->completed_at}}</td>
                            <td>{{$activation->created_at}}</td>
                            <td>{{$activation->updated_at}}</td>
                            {{--  <td class="center-align">
                              @if($activation->slider2 == 1)
                                  <a class="btn-floating waves-effect waves-light red" href="{{ route('slider.slider2',$doctor->id) }}"><i class="mdi-content-remove"></i></a>
                              @else
                                  <a class="btn-floating waves-effect waves-light blue" href="{{ route('slider.slider2',$doctor->id) }}"><i class="mdi-content-add"></i></a>
                              @endif
                            </td>  --}}
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
