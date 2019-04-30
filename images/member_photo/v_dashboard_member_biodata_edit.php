<html>
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
                <img src="<?php echo $data_member->member_photo?>" class="user-image" alt="User Image">
                <span class="hidden-xs">
                  <?php echo $data_member->member_name?>
                </span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo $data_member->member_photo?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $data_member->member_name?>
                    <small></small>
                  </p>
                </li>
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  
                  <div class="pull-right">
                    <a href="<?php echo  base_url() ; ?>/member-logout" class="btn btn-default btn-flat">Keluar</a>
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
              <li id="menu_member_biodata"><a href="<?php echo base_url() ; ?>member/lihat-biodata"><i class="fa fa-circle-o"></i> Biodata</a></li>
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

                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Biodata Anggota</h3>
                        </div>

                    <!-- form start -->
                    
                    <form action="submit-update-biodata/<?php echo $session_nim; ?>" 
                        method="POST" 
                        enctype="multipart/form-data">  
                            
                        <div class="box-body">
                            
                                <div class="form-group">
                                <label for="">NIM <code class="">(*)</code></label>
                                <input type="text" class="form-control input-lg" name="form_edit_nim" 
                                    placeholder="Masukkan NIM (15 Digit)" 
                                    value="<?php echo $session_nim ?>"
                                    disabled>
                                </div>

                                <div class="form-group">
                                <label for="">Nama Lengkap <code class="">(*)</code></label>
                                <input type="text" class="form-control input-lg" name="form_edit_nama" 
                                    placeholder="Masukkan Nama Lengkap" 
                                    value="<?php echo $data_member->member_name ?>"
                                    required>
                                </div>
                                
                                <div class="col-md-6">
                                    <!-- Angkatan (Dropdown) -->
                                    <div class="form-group">
                                        <label>Angkatan <code class="">(*)</code></label>
                                        <select class="form-control input-lg" name="form_edit_angkatan" required>
                                            <option><?php echo  $data_member->member_angkatan ?></option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <!-- Program Studi (Dropdown) -->
                                    <div class="form-group">
                                        <label>Program Studi <code class="">(*)</code></label>
                                        <select class="form-control input-lg" name="form_edit_prodi" required>
                                            <option><?php echo  $data_member->member_prodi ?></option> 
                                            <option>Teknik Informatika</option>
                                            <option>Teknik Komputer</option>
                                            <option>Pendidikan Teknologi Informasi</option>
                                            <option>Sistem Informasi</option>
                                            <option>Teknologi Informasi</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <hr>

                                <div class="col-md-6">
                                    <!-- Divisi Desainer, Artist, Programmer (Dropdown) -->
                                    <div class="form-group">
                                        <label>Divisi <code class="">(*)</code></label>
                                        <select class="form-control input-lg" name="form_edit_divisi" required>
                                            <option><?php echo  $data_member->member_division ?></option>
                                            <option>Programmer</option>
                                            <option>Artist</option>
                                            <option>Designer</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Email <code class="">(*)</code></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                            <input type="email" class="form-control input-lg" name="form_edit_email" 
                                            value="<?php echo  $data_member->member_email ?>"
                                            placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                
                                <hr>
                                <div class="row"></div>
                                <hr>

                                <!-- Link Sosial Media (Optional) -->
                                <div class="form-group">
                                <label for="">Link (Instagram)</label>
                                <div class="input-group col-md-8">
                                    <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                    <input type="url" class="form-control input-lg" name="form_edit_ig" 
                                    value="<?php echo  $data_member->member_ig ?>"
                                    placeholder="Link Profil Instagram">
                                </div>
                                </div>

                                <div class="form-group">
                                <label for="">Link (Linkedin)</label>
                                <div class="input-group col-md-8">
                                    <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                                    <input type="url" class="form-control input-lg" name="form_edit_twitter" 
                                    value="<?php echo  $data_member->member_sosmed3 ?>"
                                    placeholder="Link Profil Linkedin">
                                </div>
                                </div>

                                <div class="form-group">
                                <label for="">Link (Facebook)</label>
                                <div class="input-group col-md-8">
                                    <span class="input-group-addon"><i class="fa fa-facebook-f"></i></span>
                                    <input type="url" class="form-control input-lg" name="form_edit_fb" 
                                    value="<?php echo $data_member->member_fb ?>"
                                    placeholder="Link Profil Facebook">
                                </div>
                                </div>
                                <!-- End Sosial Media -->

                                <hr>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <?php 
                                        if (isset($data_member->member_photo)) { ?>
                                            <img class="img-kecil" src="<?php echo base_url()."images/member_photo/".$data_member->member_photo ?>" alt="Foto Profil">
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
                                        <p class="help-block">
                                            Size max.200 KB <br>
                                            Format .JPG/.PNG/.GIF <br>
                                            Rasio max(500px X 500px)
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Foto Profil</label>
                                        <br>
                                        <input class="form-control input-lg" type="file" name="form_edit_foto" value="<?php echo $data_member->member_photo;?>">
                                        <p class="help-block">
                                            Gunakan Foto Background Putih + Pakai Jaket Raion
                                        </p>
                                    </div>
                                </div>

                                <hr>
                                <div class="row"></div>
                                <hr>

                                <div class="form-group">
                                    <label for="">Ganti Password (Optional)</label>
                                    <div class="input-group col-md-4">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        <input type="password" class="form-control input-lg" name="form_edit_password"
                                        placeholder="Masukkan password baru (optional)">
                                    </div>
                                </div>

                                <hr>
            
                        </div>

                        <div class="box-footer">

                            <button type="submit" class="btn btn-primary">
                                SIMPAN
                            </button>

                            <a type="button" class="btn btn-warning" 
                                href="<?php echo  base_url() ?>member/lihat-biodata">Batal
                            </a>
                            
                        </div>
                        <!-- /.box-footer -->

                    </form>
                    <!-- /.form-Edit -->

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