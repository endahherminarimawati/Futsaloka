<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FUTSALOKA | Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/bf12c9cda7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <i class="fa fa-sign-out"></i> Keluar
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fa fa-gear "></i> Pengaturan
            </a>
          </div>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <span class="brand-text font-weight-light"><i class="fa fa-futbol"></i> FUTSALOKA</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block">Nama Pengguna</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                  Lapangan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tarif</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pesan</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-header">RIWAYAT</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Transaksi</p>
              </a>
            </li>
          </ul>
        </nav>

      </div>
    </aside>

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Quick Menu</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Quick Menu</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>&nbsp;</h3>

                  <p>Riwayat Transaksi</p>
                </div>
                <div class="icon">
                  <i class="fas fa-file"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>&nbsp;</h3>
                  <p>Tarif Lapangan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-money"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>&nbsp;</h3>
                  <p>Lapangan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-futbol"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>&nbsp;</h3>
                  <p>Pengaturan <i>User</i></p>
                </div>
                <div class="icon">
                  <i class="fa fa-gear"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

          </div>

        </div>
      </section>
    </div>

    <footer class="main-footer">
      <strong>Copyright &copy;</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>

  <script src="<?= base_url('assets/adminlte/') ?>plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="<?= base_url('assets/adminlte/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>plugins/chart.js/Chart.min.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>plugins/sparklines/sparkline.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>plugins/moment/moment.min.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>plugins/daterangepicker/daterangepicker.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>plugins/summernote/summernote-bs4.min.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>dist/js/adminlte.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>dist/js/pages/dashboard.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>dist/js/demo.js"></script>
</body>

</html>