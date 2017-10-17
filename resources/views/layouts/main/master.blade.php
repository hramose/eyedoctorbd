<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @yield ('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('images/favicon.ico') }}' / >

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/color.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/alert.css') }}" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="{{ mix('/main/css/app.css') }}"> --}}

    {{-- Page defind css links --}}
    @yield ('csslink')
 {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
</head> 
<body>
<div class="theme-layout">
    @include('layouts.main.header')
        @yield ('content')
    @include('layouts.main.footer')
</div>

{{--  @include ('layouts.main.popup')  --}}

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/enscroll-0.5.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.poptrox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/smoothscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    
    @yield ('jslink')

</body>
</html>
