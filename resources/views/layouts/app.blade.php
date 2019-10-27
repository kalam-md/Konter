<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/template/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="/template/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="/template/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed login-page">
<div class="wrapper">
@if(Auth::user())
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @section('sidebar')
    @include('layouts.sidebar')
  @show
  @endif

  <!-- Content Wrapper. Contains page content -->
    @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/template/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/template/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/template/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/template/plugins/raphael/raphael.min.js"></script>
<script src="/template/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/template/plugins/jquery-mapael/maps/world_countries.min.js"></script>
<!-- ChartJS -->
<script src="/template/plugins/chart.js/Chart.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="/template/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="/template/dist/js/pages/dashboard2.js"></script>
<!-- Select2 -->
<script src="/template/plugins/select2/js/select2.full.min.js"></script>
</body>
</html>
