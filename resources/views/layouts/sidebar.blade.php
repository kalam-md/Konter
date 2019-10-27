
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Konter</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
        <a href="{{ route('home') }}" class="nav-link active">
            <i class="nav-icon fas fa-desktop"></i>
            <p>
            Dashboard
            </p>
        </a>
        </li>
        <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
            Forms
            <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('voucher.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Voucher</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('kartu.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kartu Perdana</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Member</p>
                </a>
            </li>
        </ul>
        </li>
        <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p>
            Transaksi
            <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('pembelian.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pembelian</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('penjualan.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Penjualan</p>
                </a>
            </li>
        </ul>
        </li>
        <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
            Report
            <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('report.harian') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Report Harian</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('report.all') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Report Keseluruhan</p>
                </a>
            </li>
        </ul>
        </li>
        <li class="nav-header">LOGOUT</li>
        <li class="nav-item">
        <a href="{{ route('logout') }}" class="nav-link" 
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
            <p class="text">Logout</p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
