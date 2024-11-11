<!doctype html>
<html lang="en">
<head>
    @include('components.head')
    @vite('resources/css/app.css')
</head>
<body>

@include('components.navbar')

  <main class="site-content min-h-[500px]">
    @yield('content')
  </main>
  <!-- /.site-content -->

@include('components.footer')

</body>
</html>

