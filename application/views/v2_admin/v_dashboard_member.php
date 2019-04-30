<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo  base_url(); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>R</b>MB</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>RAION</b>Member</span>
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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url()."images/member_photo/".$data_member->member_photo?>" class="user-image" alt="User Image">
                <span class="hidden-xs">
                  <?php echo $data_member->member_name?>
                </span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url()."images/member_photo/".$data_member->member_photo?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $data_member->member_name?>
                    <small></small>
                  </p>
                </li>
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  
                  <div class="pull-right">
                    <a href="<?php echo base_url() ; ?>/member-logout" class="btn btn-default btn-flat">Keluar</a>
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
            <img src=" <?php echo base_url()."images/member_photo/".$data_member->member_photo?> " class="img-circle">
          </div>
          <div class="pull-left info">
            <p><?php echo $data_member->member_name?></p>
            <a href="#"><i class="fa fa-circle text-success"></i>Anggota Aktif</a>
          </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU UTAMA</li>

          <li id="menu_anggota" class="treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Data Diri</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="menu_member_biodata"><a href="<?php echo  base_url() ; ?>member/lihat-biodata"><i class="fa fa-circle-o"></i> Biodata</a></li>
            </ul>
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
          <?php echo $title_page?>
          <small>2018</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Main Row -->
        <div class="row">
          <section class="col-lg-12">

            Selamat Datang <br>
            <h2><?php echo $data_member->member_name?></h2>

          </section>
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
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
      <strong>Copyright &copy; 2018 <a href="<?php echo  base_url() ; ?>">Raion</a></strong> Creative Team
      
    </footer>

  </div>
  <!-- ./wrapper -->

  </body>