<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel  {{isset($title)?'| '.$title:''}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin-assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin-assets/dist/css/adminlte.min.css')}}">
</head>
<body class="bg-gray-100">
<div class="flex flex-col min-h-screen">
  <!-- Navbar -->
  <nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
      <!-- Logo -->
      <a href="/products" class="text-xl font-semibold text-gray-800">Admin Panel</a>
      <!-- User Dropdown -->
      <div class="relative">
        <button class="text-gray-600 focus:outline-none">
          <i class="far fa-user"></i>
        </button>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="flex-1">
    <div class="container mx-auto py-8 px-4">
      <!-- Content Header -->
      @yield('content-header')

      <!-- Main content -->
      <div class="mt-8">
        @yield('body')
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-white text-sm py-4">
    <div class="container mx-auto text-center text-gray-600">
      <span class="mr-2">Copyright &copy; 2014-2021 Admin Panel</span>
      <span class="ml-2">Version 3.1.0</span>
    </div>
  </footer>
</div>

<!-- jQuery -->
<script src="{{asset('admin-assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin-assets/dist/js/demo.js')}}"></script>
</body>
</html>
