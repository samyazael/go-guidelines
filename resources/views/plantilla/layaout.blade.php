<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--TOKEN PARA CAMBIOS--}}
    <meta name="token" id="token" value="{{ csrf_token() }}">
    {{--META PARA RUTA DINAMICA--}}
    <meta name="route" id="route" value="{{url('/')}}">
    
  <title>@yield('title','Default') | BICA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('adminlite/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlite/dist/css/adminlte.min.css')}}">

  <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>

</head>

<body class="hold-transition sidebar-mini">
  <section>
    @include('plantilla.menusuperior')
    @include('plantilla.menuizquierda')
    @yield('contenido')
   
  </section>
 
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@stack('scripts')

<!-- jQuery -->
<script src="{{ asset('adminlite/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<!--<script src="{{ asset('adminlite/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


<!-- AdminLTE App -->
<script src="{{ asset('adminlite/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
<input type="hidden" name="route" value="{{url('/')}}">