<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>@yield('title')</title>
    <!-- Favicons-->
    <link rel="icon" href="{{ asset('admin/images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('admin/images/favicon/apple-touch-icon-152x152.png') }}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{ asset('admin/images/favicon/mstile-144x144.png') }}">
    <!-- For Windows Phone -->

    <!-- CORE CSS-->    
    <link href="{{asset('admin/css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('admin/css/style.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
        {{--  notify css  --}}
    <link rel="stylesheet" href="{{ asset('admin/css/sweetalert.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- Custome CSS-->    
    <link href="{{asset('admin/css/custom/custom.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
        {{-- Page defind css links --}}
    @yield ('csslink')
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    @include('layouts.admin.header')
  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
    @include('layouts.admin.sidebar')
    
        @yield('content')

        </div>
        <!-- END WRAPPER -->
     </div>
    <!-- END MAIN -->
    @include('layouts.admin.footer')

    <!-- jQuery Library -->
    <script type="text/javascript" src="{{asset('admin/js/plugins/jquery-1.11.2.min.js')}}"></script> 
        <!--materialize js-->
    <script type="text/javascript" src="{{asset('admin/js/materialize.min.js')}}"></script>
     <!--scrollbar-->
    <script type="text/javascript" src="{{asset('admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="{{asset('admin/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/plugins/sparkline/sparkline-script.js')}}"></script>
        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{asset('admin/js/plugins.min.js')}}"></script>
        {{--  notify js  --}}
    <script src="{{ asset('admin/js/sweetalert-dev.js') }}"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{asset('admin/js/custom-script.js')}}"></script>
    @yield('jslink')
</body>
</html>