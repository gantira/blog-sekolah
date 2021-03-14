<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('mazaya.ico') }}" rel="icon">
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

    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <a href="#" onclick="event.preventDefault();getElementById('logout').submit();"
                        class="btn btn-primary">Logout</a>
                </div>


                <form action="{{ route('logout') }}" method="POST" id="logout">
                    @csrf

                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('ruangadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('ruangadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('ruangadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('ruangadmin/js/ruang-admin.min.js') }}"></script>

    @stack('js')
</body>

</html>
