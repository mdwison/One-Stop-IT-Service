<?php
  session_start();
  if(!(isset($_SESSION['nip']) && $_SESSION['nip'] != '')){
    
    echo "<script>alert('Harus Login!');window.location.href = '../prakomxiv';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>One Stop IT Services</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Home</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="dashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permintaan Saya</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Permintaan Layanan</li>
          <li class="nav-item">
            <a href="email" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Email</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="cloud" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Cloud</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Layanan Email</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Email</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <!-- general form elements disabled -->
      <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Formulir Permintaan Akun Email</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
                require_once('koneksi.php');
                $nip = $_SESSION["nip"]; 
                $connectDB = mysqli_select_db($con, 'osis_db');
                $result = mysqli_query($con, "SELECT * from pegawai WHERE nip='$nip'");
                
                while ($row = mysqli_fetch_array($result)){
                  // echo $row['role'];?>
                  <form class="form-vertical" method="post" action="tambahmail.php" method="get">
                  <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">No. Form</label>
                  <div class="col-sm-2">
                  <input class="form-control"  name='id_mail' type="number" placeholder="" readonly>
                  </div>
                  <div class="col-sm-2">
                  <input class="form-control" name='jns_transaksi' type="hidden" value="cloud" placeholder="mail" readonly>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name='nama_pemohon' placeholder="<?php echo $row['nama']; ?>" readonly="">
                  </div>
                  </div> 
                  <div class="form-group row">
                  <label for="nip_pemohon" class="col-sm-2 col-form-label">NIP</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name='nip_pemohon' value="<?php echo $row['nip']; ?>" placeholder="<?php echo $row['nip']; ?>" readonly="">
                  </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pangkat</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name='pangkat' placeholder="<?php echo $row['pangkat']; ?>" readonly="">
                  </div>         
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Golongan</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name='golongan' placeholder="<?php echo $row['golongan']; ?>" readonly="">  
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="nip_pemohon" class="col-sm-2 col-form-label">Jabatan</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name='jabatan' placeholder="<?php echo $row['jabatan']; ?>" readonly="">
                  </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Unit Kerja</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name='unit_kerja' value="<?php echo $row['unitkerja']; ?>" placeholder="<?php echo $row['unitkerja']; ?>" readonly="">
                  </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Usulan Nama Akun**)</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name='usulan_akun' placeholder="Usulan Akun">
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="keterangan" class="col-sm-11 col-form-label">Dengan menandatangani formulir isian ini, berarti saya telah memahami dan akan mematuhi Standar Penggunaan Akun dan Kata Sandi, Surat Elektronik yang baik dan benar.</label>
                  </div> 
              
                  <div class="form-group row">
                  <div class="col-sm-4">
                  <input type="hidden" id="nama_transaksi" name="nama_transaksi" value="email">
                  </div>
                  </div>
                  <button type="submit" name="submit" class="btn btn-danger">Simpan</button>
                  </form><?php
                }
              ?>
              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright Kelompok 1 Prakom XIV &copy; 2019 
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
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
