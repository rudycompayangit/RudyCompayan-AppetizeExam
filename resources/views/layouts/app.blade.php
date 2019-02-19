<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="{{ asset('js/admin/require.min.js') }}"></script>
    <script>
        require.config({
            baseUrl: '.',
            shim: {
                'bootstrap': ['jquery'],
                'sparkline': ['jquery'],
                'tablesorter': ['jquery'],
                'vector-map': ['jquery'],
                'vector-map-de': ['vector-map', 'jquery'],
                'vector-map-world': ['vector-map', 'jquery'],
                'core': ['bootstrap', 'jquery'],
            },
            paths: {
                'core': '{{ asset('js/admin/core') }}',
                'jquery': '{{ asset('js/admin/vendors/jquery-3.2.1.min') }}',
                'bootstrap': '{{ asset('js/admin/vendors/bootstrap.bundle.min') }}',
                'sparkline': '{{ asset('js/admin/vendors/jquery.sparkline.min') }}',
                'selectize': '{{ asset('js/admin/vendors/selectize.min') }}',
                'tablesorter': '{{ asset('js/admin/vendors/jquery.tablesorter.min') }}',
                'vector-map': '{{ asset('js/admin/jquery-jvectormap-2.0.3.min') }}',
                'vector-map-de': '{{ asset('js/admin/vendors/jquery-jvectormap-de-merc') }}',
                'vector-map-world': '{{ asset('js/admin/vendors/jquery-jvectormap-world-mill') }}',
                'circle-progress': '{{ asset('js/admin/vendors/circle-progress.min') }}',
            }
        });
    </script>
    <!-- Dashboard Core -->
    <link href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/admin/dashboard.js') }}"></script>

    <link href="{{ asset('js/admin/plugins/charts-c3/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/admin/plugins/charts-c3/plugin.js') }}"></script>
    <!-- Google Maps Plugin -->
    <link href="{{ asset('js/admin/plugins/maps-google/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/admin/plugins/maps-google/plugin.js') }}"></script>
    <!-- Input Mask Plugin -->
    <script src="{{ asset('js/admin/plugins/input-mask/plugin.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
    @yield('content')
</body>
</html>
