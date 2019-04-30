<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url() ?>" class="logo">
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
              <a href="<?php echo base_url() ?>" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url() ?>assets/img/non-projek/logo-artist.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Raion Admin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url() ?>assets/img/non-projek/logo-artist.png" class="img-circle" alt="User Image">

                  <p>
                    Admin Raion Community
                    <small>Member since 2018</small>
                  </p>
                </li>
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  
                  <div class="pull-right">
                    <a href="<?php echo base_url() ?>/admin/logout" class="btn btn-default btn-flat">Sign out</a>
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
            <img src="<?php echo base_url() ?>assets/img/non-projek/logo-artist.png" class="img-circle" alt="User Image">
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
              <li id="menu_anggota_aktif"><a href="<?php echo base_url() ?>admin/anggota/anggota_aktif"><i class="fa fa-circle-o"></i> Anggota Aktif</a></li>
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
              <li id="menu_portofolio_raion_produktif"><a href="<?php echo base_url() ?>admin/portofolio/produk"><i class="fa fa-circle-o"></i> Produk</a></li>
            </ul>
          </li>

          <!-- <li id="menu_proker" class="treeview">
            <a href="#">
              <i class="fa fa-th"></i> <span>Proker</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="menu_proker_internal_eksternal"><a href="<?php echo base_url() ?>/admin/proker/program_kerja"><i class="fa fa-circle-o"></i> Internal & Eksternal</a></li>
            </ul>
          </li> -->

          <!-- <li id="menu_sponsor" class="treeview">
            <a href="#">
              <i class="fa fa-star"></i><span>Sponsor</span>
            </a>
          </li> -->
          
          <!-- <li id="menu_aset" class="treeview">
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
          </li> -->

          <!-- <li id="menu_dokumen" class="treeview">
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
          </li> -->

          <!-- <li id="menu_informasi" class="treeview">
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
          </li> -->

          <!-- <li class="header">Khusus Oprec</li> -->

          <!-- <li id="menu_rekrutmen" class="treeview">
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
          </li> -->

          <!-- <li id="menu_kustomisasi" class="treeview">
            <a href="#">
              <i class="fa fa-wrench"></i> <span>Kustomisasi</span>
            </a>
          </li> -->

          <!-- <li class="header">Fitur</li> -->
          
          <!-- <li id="menu_tampilan" class="treeview">
            <a href="#">
              <i class="fa fa-cogs"></i> <span>Ubah Tampilan Web</span>
            </a>
          </li> -->

           <!-- <li id="menu_jadwal" class="treeview">
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
          </li> -->

          <!-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->
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
          <!-- @yield('content-title') -->
          <small>2018</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Main Row -->
        <div class="row">
          <section class="col-lg-12">
            
            <?=$content_view?>
            <!-- @yield('admin-body-content') -->

          </section>
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- OPSIONAL -->
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
      <strong>Copyright &copy; 2018 <a href="<?php echo base_url();?>">Raion</a></strong> Creative Team
      
    </footer>

  </div>

  </body>

  <!-- ./wrapper -->