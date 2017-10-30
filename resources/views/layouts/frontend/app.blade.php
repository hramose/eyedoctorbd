<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Eye Doctor | @yield ('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('frontend/images/favicon.ico') }}' / >

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/materialize.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/color.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/alert.css') }}" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="{{ mix('/frontend/css/app.css') }}"> --}}

    {{-- Page defind css links --}}
    @yield ('csslink')
 {{--    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet"> --}}
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
</head> 
<body>
<div class="theme-layout">
    @include('layouts.frontend.header')
        @yield ('content')
    @include('layouts.frontend.footer')
</div>

{{--  @include ('layouts.frontend.popup')  --}}

    <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/enscroll-0.5.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.poptrox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/smoothscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/script.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    
    @yield ('jslink')

</body>
</html>
