<body style="margin-top: 120px;">
  
  <div class="container wrapper-member">

      <div class="row">

        <div class="col-md-6">

          <div class="row">

            <?php 
            foreach ($data_ketum_waketum as $ketumWaketum) 
            {
            ?>
                
            <div class="col-md-6 col-sm-6">
              <div class="card card-one animated-three zoomIn">
                <img src="<?php echo base_url()."images/member_photo/".$ketumWaketum['member_photo']; ?>" alt="" class="img-fluid">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $ketumWaketum['member_name']; ?></h5>
                  <span class="jabatan"><?php echo $ketumWaketum['member_jabatan']; ?></span>
                  <p class="card-text"><?php echo $ketumWaketum['member_prodi']; ?> - <?php echo $ketumWaketum['member_angkatan']; ?></p>
                  <div class="social-member">
                    <a target="_blank" href="<?php echo $ketumWaketum['member_ig']; ?>"><i class="fab fa-instagram fa-2x"></i></a>
                    <a target="_blank" href="<?php echo $ketumWaketum['member_sosmed3']; ?>"><i class="fab fa-linkedin-in fa-2x"></i></a>
                    <a target="_blank" href="<?php echo $ketumWaketum['member_fb']; ?>"><i class="fab fa-facebook-f fa-2x"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <?php 
            } //End foreach ketum_waketum 
            ?>
            

          </div>

          <br>

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="card card-two animated zoomIn">
                <div class="card-body">
                  <h5 class="card-title">Anggota</h5>
                  <p class="card-text">Anggota <b>Raion Community</b> terdiri atas mahasiswa aktif Fakultas Ilmu Komputer. 
                  Secara garis besar divisi pada Raion Community terbagi menjadi <b>Divisi Fungsional</b>  & <b>Non Fungsional</b> </p>
                </div>
              </div>
            </div>
          </div>
          
        </div> <!-- =================== Left ==================== -->

        

        <div class="col-md-6">

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="card card-two animated-three zoomIn">
                <div class="card-body">
                  <h5 class="card-title">Pengurus Inti</h5>
                  <p class="card-text">Pengurus inti <b>Raion Community</b> terdiri dari 11 anggota yang memiliki peran dan tanggung jawab dalam membimbing, memimpin & merancang kegiatan untuk anggota lainnya</p>
                </div>
              </div>
            </div>
          </div>

          <br>

          <div class="row">

            <?php 
            foreach ($data_sekertaris_bendahara as $bendaharaSekertaris) 
            {
            ?>
              <div class="col-md-6 col-sm-6">
                <div class="card card-one animated-three zoomIn">
                  <img src="<?php echo base_url()."images/member_photo/".$bendaharaSekertaris['member_photo']; ?>" alt="" class="img-fluid">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $bendaharaSekertaris['member_name']; ?></h5>
                    <span class="jabatan"><?php echo $bendaharaSekertaris['member_jabatan']; ?></span>
                    <p class="card-text"><?php echo $bendaharaSekertaris['member_prodi']; ?> - <?php echo $bendaharaSekertaris['member_angkatan']; ?></p>
                    <div class="social-member">
                      <a target="_blank" href="<?php echo $bendaharaSekertaris['member_ig']; ?>"><i class="fab fa-instagram fa-2x"></i></a>
                      <a target="_blank" href="<?php echo $bendaharaSekertaris['member_sosmed3']; ?>"><i class="fab fa-linkedin-in fa-2x"></i></a>
                      <a target="_blank" href="<?php echo $bendaharaSekertaris['member_fb']; ?>"><i class="fab fa-facebook-f fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            
            <?php 
            } //End foreach sekertaris_bendahara 
            ?>

          </div>

          <br>

          
        </div> <!-- ==================== Right ============================== -->

      </div>

      <br>
      
      <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-one fadeInScrollLeft">
            <div class="card-body">
              <h5 class="card-title">Divisi Fungsional</h5>
              <p class="card-text">Divisi Fungsional terdiri dari  Divisi <b>Desainer</b>, <b>Artist</b> dan <b>Programmer</b>. 
              <br> Ketiga divisi ini bertanggung jawab terhadap teknis dari kegiatan Raion Community dalam membuat produk Game maupun Aplikasi. 
              <br>Divisi Fungsional juga bertanggung jawab dalam pengembangan <i>skill</i> & minat tiap anggota Raion Community.
              <br>Semua anggota Raion Community adalah bagian dari divisi fungsional</p>
            </div>
          </div>
        </div>

        <?php 
        foreach ($data_kadiv_fungsional as $fungsional) 
        {
        ?>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-one animated-three zoomIn">
              <img src="<?php echo base_url()."images/member_photo/".$fungsional['member_photo']; ?>" alt="" class="img-fluid">
              <div class="card-body">
                <h5 class="card-title"><?php echo $fungsional['member_name']; ?></h5>
                <span class="jabatan"><?php echo $fungsional['member_jabatan']; ?></span>
                <p class="card-text"><?php echo $fungsional['member_prodi']; ?> - <?php echo $fungsional['member_angkatan']; ?></p>
                <div class="social-member">
                  <a target="_blank" href="<?php echo $fungsional['member_ig']; ?>"><i class="fab fa-instagram fa-2x"></i></a>
                  <a target="_blank" href="<?php echo $fungsional['member_sosmed3']; ?>"><i class="fab fa-linkedin-in fa-2x"></i></a>
                  <a target="_blank" href="<?php echo $fungsional['member_fb']; ?>"><i class="fab fa-facebook-f fa-2x"></i></a>
                </div>
              </div>
            </div>
          </div>

        <?php 
        } //End foreach kadiv_fungsional 
        ?>

      </div>

      <br>
      
      <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card card-two fadeInScrollRight">
            <div class="card-body">
              <h5 class="card-title">Divisi Non Fungsional</h5>
              <p class="card-text">Divisi Non Fungsional terdiri dari Divisi <b>Eksternal</b>, <b>Marketing</b>, <b>Pengawas</b>, & <b>Produksi</b>. 
                <br> Keempat divisi ini bertanggung jawab terhadap hal-hal yang bersifat non teknis dari kegiatan Raion Community
                <br> Divisi Fungsional berperan dalam keberlangsungan organisasi Raion Community</p>
            </div>
          </div>
        </div>

      </div>

      <div class="row" style="margin-top:25px;">  
        <?php 
        foreach ($data_kadiv_non_fungsional as $nonFungsional) 
        {
        ?>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-one animated-three zoomIn">
              <img src="<?php echo base_url()."images/member_photo/".$nonFungsional['member_photo']; ?>" alt="" class="img-fluid">
              <div class="card-body">
                <h5 class="card-title"><?php echo $nonFungsional['member_name']; ?></h5>
                <span class="jabatan"><?php echo $nonFungsional['member_jabatan']; ?></span>
                <p class="card-text"><?php echo $nonFungsional['member_prodi']; ?> - <?php echo $nonFungsional['member_angkatan']; ?></p>
                <div class="social-member">
                  <a target="_blank" href="<?php echo $nonFungsional['member_ig']; ?>"><i class="fab fa-instagram fa-2x"></i></a>
                  <a target="_blank" href="<?php echo $nonFungsional['member_sosmed3']; ?>"><i class="fab fa-linkedin-in fa-2x"></i></a>
                  <a target="_blank" href="<?php echo $nonFungsional['member_fb']; ?>"><i class="fab fa-facebook-f fa-2x"></i></a>
                </div>
              </div>
            </div>
          </div>

        <?php 
        } //End foreach kadiv_non_fungsional 
        ?> 
        
      </div>

      <br>

      <div class="row">
        
        <div class="col-md-12 col-sm-12">
          <div class="card card-three fadeInScrollRight">
            <div class="card-body">
              <p class="card-text">Saat ini terdapat 91 anggota aktif Raion Community yang terdiri dari Divisi <b>Desainer</b> , 
                <b>Artist</b> & <b>Programmer</b> dari angkatan 2015, 2016 & 2017</p>
            </div>
          </div>
        </div>
      </div>
      
      <br>

      <div class="row">
        <div class="col-md-12">
          <p class="desainer">Divisi Desainer</p>
        </div>
      </div>

      <div class="row" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="slick-carousel carousel-inner">

        <?php 
        foreach ($data_desainer as $desainer) {
        ?>
              <div class="col-md-3 col-sm-2">
                <div class="card card-one fadeInScrollLeft">
                  
                <?php if ($desainer['member_photo']) {?>
                    <img src="<?php echo base_url()."images/member_photo/".$desainer['member_photo']; ?>" alt="" class="img-fluid">
                <?php } else {?>
                    <img src="<?php echo base_url(); ?>assets/img/non-projek/logo-designer.png" alt="" class="img-fluid">
                <?php } ?>

                  <div class="card-body">
                    <h5 class="card-title"><?php echo $desainer['member_name']; ?></h5>
                    <span class="jabatan"><?php echo $desainer['member_division']; ?></span>
                    <p class="card-text"><?php echo $desainer['member_prodi']; ?> - <?php echo $desainer['member_angkatan']; ?></p>
                    <div class="social-member">
                      <a target="_blank" href="<?php echo $desainer['member_ig']; ?>"><i class="fab fa-instagram fa-2x"></i></a>
                      <a target="_blank" href="<?php echo $desainer['member_sosmed3']; ?>"><i class="fab fa-linkedin-in fa-2x"></i></a>
                      <a target="_blank" href="<?php echo $desainer['member_fb']; ?>"><i class="fab fa-facebook-f fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
        
        <?php 
        } //End foreach data_desainer 
        ?> 
              
        </div>
        
      </div>
      
      
      <br>


      <div class="row">
        <div class="col-md-12">
          <p class="desainer">Divisi Artist</p>
        </div>
      </div>

      <div class="row" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="slick-carousel carousel-inner">

        <?php 
        foreach ($data_artist as $artist) {
        ?>

              <div class="col-md-3 col-sm-2">
                <div class="card card-one fadeInScrollLeft">

                <?php if ($artist['member_photo']) {?>
                    <img src="<?php echo base_url()."images/member_photo/".$artist['member_photo']; ?>" alt="" class="img-fluid">
                <?php } else {?>
                    <img src="<?php echo base_url(); ?>assets/img/non-projek/logo-artist.png" alt="" class="img-fluid">
                <?php } ?>
                  
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $artist['member_name']; ?></h5>
                    <span class="jabatan"><?php echo $artist['member_division']; ?></span>
                    <p class="card-text"><?php echo $artist['member_prodi']; ?> - <?php echo $artist['member_angkatan']; ?></p>
                    <div class="social-member">
                      <a target="_blank" href="<?php echo $artist['member_ig']; ?>"><i class="fab fa-instagram fa-2x"></i></a>
                      <a target="_blank" href="<?php echo $artist['member_sosmed3']; ?>"><i class="fab fa-linkedin-in fa-2x"></i></a>
                      <a target="_blank" href="<?php echo $artist['member_fb']; ?>"><i class="fab fa-facebook-f fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
        
        <?php 
        } //End foreach data_artist 
        ?> 
              
        </div>
        
      </div>

      <br>

      <div class="row">
        <div class="col-md-12">
          <p class="desainer">Divisi Programmer</p>
        </div>
      </div>

      <div class="row" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="slick-carousel carousel-inner">

        <?php 
        foreach ($data_programmer as $programmer) {
        ?>
              <div class="col-md-3 col-sm-2">
                <div class="card card-one fadeInScrollLeft">

                <?php if ($programmer['member_photo']) {?>
                    <img src="<?php echo base_url()."images/member_photo/".$programmer['member_photo']; ?>" alt="" class="img-fluid">
                <?php } else {?>
                    <img src="<?php echo base_url(); ?>assets/img/non-projek/logo-programmer.png" alt="" class="img-fluid">
                <?php } ?>

                  <div class="card-body">
                    <h5 class="card-title"><?php echo $programmer['member_name']; ?></h5>
                    <span class="jabatan"><?php echo $programmer['member_division']; ?></span>
                    <p class="card-text"><?php echo $programmer['member_prodi']; ?> - <?php echo $programmer['member_angkatan']; ?></p>
                    <div class="social-member">
                      <a target="_blank" href="<?php echo $programmer['member_ig']; ?>"><i class="fab fa-instagram fa-2x"></i></a>
                      <a target="_blank" href="<?php echo $programmer['member_sosmed3']; ?>"><i class="fab fa-linkedin-in fa-2x"></i></a>
                      <a target="_blank" href="<?php echo $programmer['member_ig']; ?>"><i class="fab fa-facebook-f fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
        
        <?php 
        } //End foreach data_programmer 
        ?> 
              
        </div>
        
      </div>
    
    </div>

</body>