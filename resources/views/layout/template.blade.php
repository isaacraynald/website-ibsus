<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Stylesheets -->
    <link type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('bsbmd/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('css/theme.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,500italic,500,300italic,300' rel='stylesheet' type='text/css'>
    <link type="text/css" href="{{asset('icons/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('icons/rondo/style.css')}}" rel="stylesheet">


    <!--scripts -->

</head>
<body>
@include('topbar')
    @yield('content')
@include('footer')
<script type="text/javascript" src="{{asset('scripts/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/jquery.smooth-scroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/mixitup/jquery.mixitup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/theme.js')}}"></script>
</body>
</html>