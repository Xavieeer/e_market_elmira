<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | PAGE 1</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <!-- <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search"> -->
            <!-- <div class="input-group-append">
               <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div> -->
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ url('/')}}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard

                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ url('profile')}}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  profile

                </p>
              </a>
            </li>


            <li class="nav-item">
              <a href="{{ url('contact')}}" class="nav-link">
                <i class="nav-icon fas fa-address-book"></i>
                <p>
                  Contact

                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ url('faq')}}" class="nav-link">
                <i class="nav-icon fas fa-question"></i>
                <p>
                  FAQ

                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('produk.index') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Produk

                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ url('barang') }}" class="nav-link">
                <i class="nav-icon fas fa-box"></i>
                <p>
                  Barang

                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ url('pemasok') }}" class="nav-link">
                <i class="nav-icon fas fa-truck"></i>
                <p>
                  Pemasok

                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ url('pelanggan') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-users"></i>
                <p>
                  Pelanggan

                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ url('users') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-user"></i>
                <p>
                  User

                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ url('pembelian') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-cart-shopping"></i>
                <p>
                  Pembelian

                </p>
              </a>
            </li>

            


         

             


          

        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      @yield('content')
      <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->
    @include('templates.footer')

