<!DOCTYPE html>
<html>
<head>
  <title>@yield('page-title')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  {{-- <title>AdminLTE 2 | Dashboard</title> --}}
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('/') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/') }}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('/') }}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/') }}/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('/') }}/css/skins/_all-skins.min.css">
  
  <!-- Favicomatic -->
  <link rel="icon" type="image/png" href="{{ url('/') }}/img/favicomatic/favicon.png"/>

  <!-- Morris chart -->
  {{-- <link rel="stylesheet" href="{{ url('/') }}/bower_components/morris.js/morris.css"> --}}
  <!-- jvectormap -->
  {{-- <link rel="stylesheet" href="{{ url('/') }}/bower_components/jvectormap/jquery-jvectormap.css"> --}}
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ url('/') }}/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  {{-- <link rel="stylesheet" href="{{ url('/') }}/bower_components/bootstrap-daterangepicker/daterangepicker.css"> --}}
  <!-- bootstrap wysihtml5 - text editor -->
  {{-- <link rel="stylesheet" href="{{ url('/') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> --}}
  <!-- Datatables -->
  <link rel="stylesheet" href="{{ url('/') }}/bower_components/datatable_new/css/jquery.dataTables.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" 
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="{{ url('/') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>R</b>AD</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>RAION</b>Admin</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        
          <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="{{ url('/admin') }}" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ url('/') }}/img/non-projek/logo-artist.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Raion Admin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{ url('/') }}/img/non-projek/logo-artist.png" class="img-circle" alt="User Image">

                  <p>
                    Admin Raion Community
                    <small>Member since 2018</small>
                  </p>
                </li>
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  
                  <div class="pull-right">
                    <a href="{{ url('/') }}/admin/logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>

                </li>
              </ul>
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
            <img src="{{ url('/') }}/img/non-projek/logo-artist.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Raion Admin</p>
            <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
          </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU UTAMA</li>

          <li id="menu_anggota" class="treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Anggota</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="menu_anggota_aktif"><a href="{{ url('/') }}/admin/anggota/anggota_aktif"><i class="fa fa-circle-o"></i> Anggota Aktif</a></li>
              <li id="menu_anggota_pengurus"><a href="{{ url('/') }}/admin/anggota/anggota_pengurus"><i class="fa fa-circle-o"></i> Pengurus</a></li>
            </ul>
          </li>

          <li  id="menu_portofolio" class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i><span>Portofolio</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="menu_portofolio_raion_produktif"><a href="{{ url('/') }}/admin/portofolio/raion_produktif"><i class="fa fa-circle-o"></i> Raion Produktif</a></li>
            </ul>
          </li>

          <li id="menu_proker" class="treeview">
            <a href="#">
              <i class="fa fa-th"></i> <span>Proker</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="menu_proker_internal_eksternal"><a href="{{ url('/') }}/admin/proker/program_kerja"><i class="fa fa-circle-o"></i> Internal & Eksternal</a></li>
            </ul>
          </li>

          <li id="menu_sponsor" class="treeview">
            <a href="#">
              <i class="fa fa-star"></i><span>Sponsor</span>
            </a>
          </li>
          
          <li id="menu_aset" class="treeview">
            <a href="#">
              <i class="fa fa-folder"></i> <span>Aset</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="menu_aset_gambar"><a href="#"><i class="fa fa-circle-o"></i> Gambar</a></li>
              <li id="menu_aset_video"><a href="#"><i class="fa fa-circle-o"></i> Video</a></li>
              <li id="menu_aset_lainnya"><a href="#"><i class="fa fa-circle-o"></i> Lainnya</a></li>
            </ul>
          </li>

          <li id="menu_dokumen" class="treeview">
            <a href="#">
              <i class="fa fa-book"></i> <span>Dokumen</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="menu_dokumen_proker"><a href="#"><i class="fa fa-circle-o"></i> Dokumen Proker</a></li>
              <li id="menu_dokumen_raion"><a href="#"><i class="fa fa-circle-o"></i> Dokumen Raion</a></li>
            </ul>
          </li>

          <li id="menu_informasi" class="treeview">
            <a href="#">
              <i class="fa fa-question"></i> <span>Informasi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="menu_informasi_tentang"><a href="#"><i class="fa fa-circle-o"></i> Tentang Raion</a></li>
              <li id="menu_informasi_lisensi"><a href="#"><i class="fa fa-circle-o"></i> Lisensi (Coming Soon)</a></li>
            </ul>
          </li>

          <li class="header">Khusus Oprec</li>

          <li id="menu_rekrutmen" class="treeview">
            <a href="#">
              <i class="fa fa-user-plus"></i> <span>Rekrutmen</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="menu_rekrutmen_designer"><a href="#"><i class="fa fa-circle-o"></i> Designer</a></li>
              <li id="menu_rekrutmen_artist"><a href="#"><i class="fa fa-circle-o"></i> Artist</a></li>
              <li id="menu_rekrutmen_programmer"><a href="#"><i class="fa fa-circle-o"></i> Programmer</a></li>
            </ul>
          </li>

          <li id="menu_kustomisasi" class="treeview">
            <a href="#">
              <i class="fa fa-wrench"></i> <span>Kustomisasi</span>
            </a>
          </li>

          <li class="header">Fitur</li>
          
          <li id="menu_tampilan" class="treeview">
            <a href="#">
              <i class="fa fa-cogs"></i> <span>Ubah Tampilan Web</span>
            </a>
          </li>

           <li id="menu_jadwal" class="treeview">
            <a href="#">
              <i class="fa fa-calendar"></i> <span>Jadwal Kegiatan (OTW)</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="menu_jadwal_proker"><a href="#"><i class="fa fa-circle-o"></i> Proker</a></li>
              <li id="menu_jadwal_projek"><a href="#"><i class="fa fa-circle-o"></i> Projek</a></li>
            </ul>
          </li>

          {{-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li> --}}
          <li class="header">Informasi</li>

          <li id="menu_versi_website"><a href="#"><i class="fa fa-info-circle text-red"></i> <span>Versi Website</span></a></li>
        
          <li id="menu_hak_cipta"><a href="#"><i class="fa fa-copyright text-yellow"></i> <span>Hak Cipta</span></a></li>
        
          <li id="menu_kontak_developer"><a href="#"><i class="fa fa-phone text-aqua"></i> <span>Kontak Developer</span></a></li>
        
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          @yield('content-title')
          <small>2018</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Main Row -->
        <div class="row">
          <section class="col-lg-12">

            @yield('admin-body-content')

          </section>
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          {{-- OPSIONAL --}}
        </div>
        <!-- /.row (main row) -->

      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
      </div>
      <strong>Copyright &copy; 2018 <a href="https://raion.ub.ac.id">Raion</a></strong> Creative Team
      
    </footer>

  </div>
  <!-- ./wrapper -->

    <!-- jQuery 3.3.1 -->
    <script src="{{ url('/') }}/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('/') }}/bower_components/jquery-ui/jquery-ui.min.js"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>

    <!-- Bootstrap 3.3.7 -->
    <script src="{{ url('/') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Morris.js charts -->
    <script src="{{ url('/') }}/bower_components/raphael/raphael.min.js"></script>
    <script src="{{ url('/') }}/bower_components/morris.js/morris.min.js"></script>

    <!-- Sparkline -->
    {{-- <script src="{{ url('/') }}/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script> --}}

    <!-- jvectormap -->
    {{-- <script src="{{ url('/') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> --}}
    {{-- <script src="{{ url('/') }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> --}}

    <!-- jQuery Knob Chart -->
    <script src="{{ url('/') }}/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

    <!-- daterangepicker -->
    {{-- <script src="{{ url('/') }}/bower_components/moment/min/moment.min.js"></script> --}}
    {{-- <script src="{{ url('/') }}/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> --}}

    <!-- datepicker -->
    <script src="{{ url('/') }}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ url('/') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

    <!-- Slimscroll -->
    {{-- <script src="{{ url('/') }}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> --}}

    <!-- FastClick -->
    <script src="{{ url('/') }}/bower_components/fastclick/lib/fastclick.js"></script>

    <!-- AdminLTE App -->
    <script src="{{ url('/') }}/js/adminlte.min.js"></script>

    <!-- Datatable -->
    <script src="{{ url('/') }}/bower_components/datatable_new/js/jquery.dataTables.min.js"></script>

    <!-- CKEditor -->
    <script src="{{ url('/') }}/bower_components/ckeditor/ckeditor.js"></script>

    @yield('custom-script-section')



  </body>

</html>