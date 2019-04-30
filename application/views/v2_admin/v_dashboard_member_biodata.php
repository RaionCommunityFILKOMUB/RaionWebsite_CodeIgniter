<html>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url(); ?>" class="logo">
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
              <li id="menu_member_biodata"><a href="<?php echo base_url(); ?>member/lihat-biodata"><i class="fa fa-circle-o"></i> Biodata</a></li>
            </ul>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      
        <section class="content-header">
            <h1>
            <?php echo $title_page?>
            <small>2018</small>
            </h1>
        </section>

        <section class="content">

            <div class="row">
                <section class="col-lg-12">

                    <div class="box box-primary">

                        <div class="box-header">
                            <b>Biodata Anggota Raion : </b> 
                        </div>

                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive">

                                    <tr>
                                        <td><b>NIM</b>   </td> <td>:</td> <td><?php echo $session_nim?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Nama Lengkap</b>   </td> <td>:</td><td><?php echo  $data_member->member_name ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Angkatan</b>  </td> <td>:</td><td><?php echo  $data_member->member_angkatan ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Program Studi</b> </td><td>:</td> <td><?php echo  $data_member->member_prodi ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Divisi</b></td> <td>:</td><td><?php echo  $data_member->member_division ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Jabatan</b>   </td> <td>:</td><td><?php echo  $data_member->member_jabatan ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b> </td> <td>:</td><td><?php echo  $data_member->member_email ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Link Instagram</b></td> <td>:</td><td> <a target="_blank" href="<?php echo  $data_member->member_ig ?>"><?php echo  $data_member->member_ig ?></a> </td>
                                    </tr>
                                    <tr>
                                        <td><b>Link Facebook</b></td><td>:</td> <td><a target="_blank" href="<?php echo  $data_member->member_fb ?>"><?php echo  $data_member->member_fb ?></a></td>
                                    </tr>
                                    <tr>
                                        <td><b>Link Linkedin</b>   </td> <td>:</td><td><a target="_blank" href="<?php echo  $data_member->member_sosmed3 ?>"><?php echo  $data_member->member_sosmed3 ?></a></td>
                                    </tr>
                                    <tr>
                                        <td><b>Foto</b></td> 
                                        <td>:</td>
                                        <td>
                                            <?php 
                                            if (isset($data_member->member_photo)) { ?>
                                                <img class="img-kecil" src="<?php echo base_url()."images/member_photo/".$data_member->member_photo ?>" alt="User Image">
                                            <?php
                                            } 
                                            else
                                            {
                                            ?>
                                                <?php 
                                                if ($data_member->member_photo == "Artist") { ?>
                                                    <img  class="img-kecil" src="<?php echo base_url()?>assets/img/non-projek/logo-artist.png">
                                                <?php 
                                                }
                                                elseif ($data_member->member_photo == "Designer"){ ?>
                                                    <img class="img-kecil"  src="<?php echo base_url()?>assets/img/non-projek/logo-designer.png">
                                                <?php 
                                                }
                                                else {?>   
                                                    <img class="img-kecil" src="<?php echo base_url()?>assets/img/non-projek/logo-programmer.png">
                                                <?php 
                                                }?>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>

                        <div class="box-footer">
                            <a class="btn btn-primary" 
                                href="<?php echo base_url() ?>member/edit-biodata">Edit
                            </a>
                        </div>

                    </div>

                </section>
            </div>

            <div class="row">
            </div>

        </section>

    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
      </div>
      <strong>Copyright &copy; 2018 <a href="<?php echo  base_url() ; ?>">Raion</a></strong> Creative Team
      
    </footer>

</div>

<script>
    $(document).ready(function () {

        var menuParameter = "<?php echo $title_page ?>" ;
        
        // Left-Menu parameter activation
        if (menuParameter == "Biodata Anggota") {
            $('#menu_anggota').addClass(" active");
            $('#menu_member_biodata').addClass("active");
        }

    });
</script>

</body>

</html>