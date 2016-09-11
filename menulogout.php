<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMSGateway PT. PLN Indarung</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="pages/fonts/font/font-awesome.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="pages/fonts/font/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Menu</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">SMSGateway</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Ini Untuk Membuat Sidebar Menu User-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- Ini Untuk Dropdown Menu User -->
             <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/pln.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">PT. PLN (Persero) Rayon Indarung</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- Ini Untuk Gambar Menu User -->
                  <li class="user-header">
                    <img src="dist/img/pln1.png" class="img-circle" alt="User Image">
                    <p>
                      Adminitrator
                      <small>SMS Gateway PT.PLN Rayon Indarung</small>
                    </p>
                  </li>
                  
                  <!-- Ini Untuk Tombol Menu User-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Ini Akhir Menu User -->
              
              
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
           <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/main.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>ADMIN</p>
              <a href="#"><i class="fa fa-circle text-success"></i> SMS Gateway</a> <br>
              <a href="#"><i class="fa fa-circle text-success"></i> TAGIHAN lISTRIK PELANGGAN</a>
            </div>
          </div>
          <!-- search form -->
         
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                     <i class="fa fa-dashboard"></i> <span>Tambah User</span> <i class="fa fa-angle-left pull-right"></i>
          </a>   
          <ul class="treeview-menu">
                <li class="active"><a href="menuadduser.php"><i class="fa fa-circle-o"></i> Tambah USER</a></li>
                <li class="active"><a href="menudaftaruser.php"><i class="fa fa-circle-o"></i> Daftar User</a></li>
                
                </ul>
            </li>         
                   
            
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Import Data</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="importPelanggan.php"><i class="fa fa-circle-o"></i> Import Pelanggan</a></li>
                <li><a href="importRekening.php"><i class="fa fa-circle-o"></i> Import Rekening</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-envelope-o"></i>
                <span>Pesan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="menubroadcast.php"><i class="fa fa-circle-o"></i> Broadcast</a></li>
                
                <li><a href="menukirim_sms.php"><i class="fa fa-circle-o"></i> Kirim Manual</a></li>
                <li><a href="menugroup.php"><i class="fa fa-circle-o"></i> Kirim SMS Group</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="tabelPelanggan.php"><i class="fa fa-circle-o"></i> Tabel Pelanggan</a></li>
                <li><a href="tabelRekening.php"><i class="fa fa-circle-o"></i> Tabel Rekening</a></li>
                <li><a href="menuinbox.php"><i class="fa fa-circle-o"></i> Inbox</a></li>
                <li><a href="menuoutbox.php"><i class="fa fa-circle-o"></i> Outbox</a></li>
              </ul>
            </li>
            
             <li class="treeview">
              
              
              <li><a href="menulogout.php"><i class="fa fa-circle-o"></i> Logout</a></li>
                        </li>
         
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Menu Input Pelanggan
            <small>Silahkan Pilih File Berekstensi .xls 97-2003</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Menu Input Pelanggan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		<?php include ("logout.php")?>
        </section>
        <!-- /.content -->
      </div><!-- /.content-wrapper --><!-- Control Sidebar --><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>
