<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Links -->
    <!-- Custom fonts for this template-->
    <link href="{{asset('sb-admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sb-admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sb-admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('sb-admin/js/sb-admin-2.min.js')}}"></script>

    <!-- chart -->
    <script src="{{asset('sb-admin/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('sb-admin/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('sb-admin/js/demo/chart-pie-demo.js')}}"></script>
</body>

</html>