<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('eterna/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('eterna/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('eterna/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eterna/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eterna/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eterna/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eterna/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eterna/vendor/venobox/venobox.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('eterna/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
      * Template Name: Eterna - v2.2.1
      * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
      * Author: BootstrapMade.com
      * License: https://bootstrapmade.com/license/
      ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <x-app.topbar />

    <!-- ======= Header ======= -->
    <x-app.header />
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    {{ isset($hero) ? $hero : ''  }}
    <!-- End Hero -->

    {{ $slot }}
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <x-app.footer />
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('eterna/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('eterna/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('eterna/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('eterna/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('eterna/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ asset('eterna/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('eterna/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('eterna/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('eterna/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('eterna/vendor/venobox/venobox.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('eterna/js/main.js') }}"></script>

</body>

</html>
