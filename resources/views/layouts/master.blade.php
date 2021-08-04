<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/js/alertifyjs/css/alertify.min.css')}}">
    <link rel="stylesheet" href="{{asset('/js/alertifyjs/css/themes/bootstrap.css')}}">

    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container d-flex">
          <a class="navbar-brand" href="{{url('/')}}">Registro</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="{{url('/alumnos')}}">Alumnos</a>
                <a class="nav-link" href="{{url('/materias')}}">Materias</a>
                <a class="nav-link" href="{{url('/grados')}}">Grados</a>
                <a class="nav-link" href="#">Materias por grados</a>
            </div>
          </div>
        </div>
      </nav>

    {{-- creamos el contendedor de nuestra sección --}}
@yield('content')



<script src="{{ asset('/js/alertifyjs/alertify.min.js')}}"></script>
<script src="{{ asset('/js/jquery.js')}}"></script>
<script src="{{ asset('/js/app.js')}}"></script>

@yield('scripts')
</body>
</html>