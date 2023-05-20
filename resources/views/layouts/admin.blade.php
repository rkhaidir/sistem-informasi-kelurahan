<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ $title }} &mdash; Sistem Informasi Kelurahan</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      @include('components.navbar')
      @include('components.sidebar')
        <!-- Main Content -->
      <div class="main-content">
        <section class="section">
         @yield('content')
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>
  
  <script src="{{ asset('assets/vendor/modules/jquery-3.6.4.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/modules/popper.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/modules/jquery.nicescroll.min.js') }}"></script>

  <script src="{{ asset('assets/js/stisla.js') }}"></script>
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>