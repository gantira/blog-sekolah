<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('mazaya.ico') }}" rel="icon">
  <title>Login</title>
  <link href="{{ asset('ruangadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('ruangadmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('ruangadmin/css/ruang-admin.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-login">
{{ $slot }}
  <script src="{{ asset('ruangadmin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('ruangadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('ruangadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('ruangadmin/js/ruang-admin.min.js') }}"></script>
</body>

</html>
