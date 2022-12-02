<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('tittle')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logoTT.png') }}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontawesome/css/brands.css"') }} rel="stylesheet">
    <link href="{{ asset('assets/fontawesome/css/solid.css') }}" rel="stylesheet">

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>

</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            @include('admin.layout.header')
            <!-- Header END -->

            <!-- Side Nav START -->
            @include('admin.layout.menubar')
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">


                <!-- Content Wrapper START -->
                @yield('content')
                <!-- Content Wrapper END -->

                <!-- Footer START -->
               @include('admin.layout.footer')
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

        </div>
    </div>




    <!-- Core Vendors JS -->
    <script src="{{ asset('assets/js/vendors.min.js') }}"></script>

    <!-- page js -->
    <script src="{{ asset('assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard-default.js') }}"></script>

    <!-- Core JS -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

</body>

</html>
