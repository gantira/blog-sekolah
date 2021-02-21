<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('ruangadmin/img/logo/logo.png') }}" rel="icon">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('ruangadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('ruangadmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    @stack('css')
    <link href="{{ asset('ruangadmin/css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <x-admin.sidebar />
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <x-admin.top-bar />
                <!-- Topbar -->

                <!-- Container Fluid-->
                {{ $slot }}
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            <x-admin.footer />
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('ruangadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('ruangadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('ruangadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('ruangadmin/js/ruang-admin.min.js') }}"></script>

    @stack('js')
</body>

</html>
