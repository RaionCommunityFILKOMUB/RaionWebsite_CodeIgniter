
<body style="margin-top: 50px;">
      <!-- ================================== Jumbotron ============================= -->
    <div class="jumbotron no-padding">
      <div class="container-fluid no-padding">
        <div class="wrapper-jumbotron">
          <div class="container">
            <div class="row wrapper-jumbotron-content justify-content-center">
              <div class="col-md-8 text-center animated-two zoomIn">
                <p class="sub-title-jumbotron">Selamat Datang di</p>
                <h1 class="main-title-jumbotron"><span class="raion">RAION</span> COMMUNITY</h1>
                <p class="desc-jumbotron">Raion Community adalah salah satu <b>Lembaga Semi Otonom (LSO)</b> yang berada di lingkungan Fakultas Ilmu Komputer yang bergerak dibidang pengembangan mobile baik itu games maupun aplikasi</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =============================== End Jumbotron ============================ -->
    
    
    <!-- =============================== Summary of Raion =============================== -->
    <section class="summary">
      <div class="wrapper-summary">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              <p class="raion-community"><span class="raion">RAION</span> COMMUNITY</p>
              <p class="main-summary">memiliki 3 divisi utama dalam menjalankan kegiatan sehari-harinya dimana masing-masing divisi 
                  tersebut memiliki tugas dan tanggung jawabnya masing-masing</p>
            </div>
          </div>
          <div class="row text-center summary-division">
            <div class="col-md-4">
              <img src="<?php echo base_url();?>assets/img/non-projek/logo-designer.png" alt="" width="150">
              <p class="main-title-summary">Desainer</p>
              <p class="desc-summary">Divisi yang bertanggung jawab dalam memecahkan masalah menjadi suatu produk baik itu games maupun aplikasi</p>
            </div>
            <div class="col-md-4">
              <img src="<?php echo base_url();?>assets/img/non-projek/logo-artist.png" alt="" width="150">
              <p class="main-title-summary">Artist</p>
              <p class="desc-summary">Divisi yang bertanggung jawab dalam membuat sebuah produk memiliki estetika yang tinggi sehingga dapat menarik perhatian</p>
            </div>
            <div class="col-md-4">
              <img src="<?php echo base_url();?>assets/img/non-projek/logo-programmer.png" alt="" width="150">
              <p class="main-title-summary">Programmer</p>
              <p class="desc-summary">Divisi yang bertanggung jawab dalam membuat sebuah produk menjadi realistis dan bisa digunakan oleh user</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================================ Special Event ============================= -->

    <!-- <section class="about">
      <div class="container">
        <div class="shape">
          <div class="box-left"></div>
          <div class="box-middle"></div>
          <div class="box-right"></div>
        </div>
        <div class="col-sm-6 maskot"><img src="<?php echo base_url();?>gamosphere/assets-gamosphere/img/logoGamos.png"></div>
        <div class="col-sm-5 text">
          <div class="title">GAMOSPHERE<strong>2018</strong></div>
          <div class="sub">Creativity To The Next Level</div>
          <p>
            Gamosphere adalah serangkaian acara Seminar-Talkshow tentang Aplikasi & Game. <br>
            Dengan tema "Creativity to The Next Level" yang akan membahas tentang 
            <i>Brainstorming</i> ide, hingga tahap merealisasikannya dalam bentuk produk. <br>
            Bersama dengan teman-teman pemateri kita dari Bukalapak, Cladeventures & Eximod Link Studio
          </p>
        </div>
        <div class="clearfix"></div>
      </div>
    </section>
    <section class="speaker"><img src="<?php echo base_url();?>gamosphere/assets-gamosphere/img/speaker-pattern.png" class="pattern">
      <div class="container">
        <div class="rocket"><img src="<?php echo base_url();?>gamosphere/assets-gamosphere/img/rocket-big.png"></div>
        <div class="col-md-3 text">
          <div class="title">PEMBICARA</div>
          <div class="sub">SEMINAR NASIONAL GAMOSPHERE 2017</div>
        </div>

        <div class="col-md-3 brand brand1">
          <div class="img"><img src="<?php echo base_url();?>gamosphere/assets-gamosphere/img/bukalapak.png"></div>
          <p>
            <b>Bukalapak</b> merupakan salah satu <i>online marketplace</i> terkemuka di 
            Indonesia yang menyediakan sarana jual-beli dari konsumen ke konsumen
          </p>
        </div>
        <div class="col-md-3 brand brand2">
          <div class="img"><img src="<?php echo base_url();?>gamosphere/assets-gamosphere/img/cladeventures.png"></div>
          <p>
            <i><b>Clade Ventures</b> is a Perth based venture capital firm specializing in early-stage 
            investments with focus in South East Asia & Australia</i>
          </p>
        </div>
        <div class="col-md-3 brand brand3">
          <div class="img"><img src="<?php echo base_url();?>gamosphere/assets-gamosphere/img/eximod.png"></div>
          <p>
            <b>Eximod Link Studio</b> adalah sebuah studio game yang berdiri pada 
            10 juli 2015 & berbasis di Kota Malang
          </p>
        </div>
        <div class="clearfix"></div>
      </div>
    </section>

    <style>
      
    </style>
    <script>
    
    </script> -->
    <!-- ================================ End of Special Event ====================== -->

    <!-- =============================== Work of Raion ============================ -->
    <!-- <section class="projek">
      <div class="container-fluid">
        <div class="row">

          @php $color = 1; @endphp 

          @foreach ($portofolios as $portofolio)
            {{-- 
                default : warna merah
                two : warna pink
                three : warna kuning-gelap
                four : warna biru
                five : warna kuning terang
                six : warna hijau
               --}}
            
            {{-- Variabel $color ini untuk menggonta-ganti warna background agar tidak sama & bertabrakan --}}
            @if ($color > 5)
              @php $color = 1; @endphp
            @endif
            
            @if ($color == 1)
              @php $backgroundColor = "wrapper-circle-four"; @endphp 
            @elseif($color == 2)
              @php $backgroundColor = "wrapper-circle-five"; @endphp
            @elseif($color == 3)
              @php $backgroundColor = "wrapper-circle-six"; @endphp
            @elseif($color == 4)
              @php $backgroundColor = "wrapper-circle-two"; @endphp
            @else
              @php $backgroundColor = "wrapper-circle"; @endphp 
            @endif

            @php $color ++; @endphp

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 no-padding">
              <a target="_blank" href="{{ url('/') }}/portofolio/{{ $portofolio->portofolio_slug }}">
                <div class="wrapper-projek">
                  <img src="{{ $portofolio->portofolio_img_thumb }}" alt="" width="100%" height="auto" class="img-fluid">
                  <div class="{{ $backgroundColor }}">
                  <div class="circle" style="background-image:url('{{ $portofolio->portofolio_img_thumb }}');"></div>
                    <h2 class="main-title-projek">{{ $portofolio->portofolio_title }}</h2>
                    <p class="sub-title-projek">{{ strftime("%d %B %Y",  strtotime($portofolio->portofolio_date_start) ) }}</p>
                  </div>
                </div>
              </a>
            </div>
            
          @endforeach

        </div>
      </div>
    </section> -->
    <!-- ============================ End Work of Raion ========================== -->

    <!-- ============================ Our Support ============================= -->
    <section class="our-support">
      <div class="container-fluid text-center">
        <h3 class="main-title-our-support">Sponsor</h3>
        <p class="sub-title-our-support">Terima kasih kepada semua pihak yang telah mendukung</p>
        <div class="row fadeInScrollLeft justify-content-lg-center">
          <div class="col-md-2 wrapper-logo">
            <img src="<?php echo base_url();?>assets/img/non-projek/logo-filkom.png" alt="" class="img-fluid">
          </div>
          <div class="col-md-2 wrapper-logo">
            <img src="<?php echo base_url();?>assets/img/non-projek/logo-ub.png" alt="" class="img-fluid">
          </div>
          <div class="col-md-2 wrapper-logo">
            <img src="<?php echo base_url();?>assets/img/non-projek/logo-bem.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-2 wrapper-logo">
            <img src="<?php echo base_url();?>assets/img/non-projek/logo-raion-hitam.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- ================================ End of Our Ssupport ============================== -->

    <!-- =================================== Maps =================================== -->
    <div class="container-fluid no-padding">
      <div id="map"></div>
      <script>
        function initMap() {
          var uluru = {lat: -7.954795, lng: 112.614431};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
      </script>
    </div>
    <!-- ==================================== End of Maps ============================= -->
    
    <!-- Maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAafgoWn7nSfw4o5ctci8yvyWOQmAD93g4&callback=initMap"> 
    </script>
  
</body>