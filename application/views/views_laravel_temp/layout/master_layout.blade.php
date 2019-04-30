<html lang="en">
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Slick Carousel --}}
    <link rel="stylesheet" href="{{ url('/') }}/bower_components/slick/slick/slick.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Oswald|Roboto" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <!-- Animate -->
    <link rel="stylesheet" href="{{ url('/') }}/css/animate.css">

    <!-- Favicomatic -->
    <link rel="icon" type="image/png" href="{{ url('/') }}/img/favicomatic/favicon.png"/>

    

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ url('/') }}/css/style.css">

    <title>

      @yield('title')

    </title>

</head>

<body>
        <!-- ==================================== Navbar ================================== -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('/') }}/img/non-projek/logo.png" alt="" width="80"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a id="menu_index" class="nav-link" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item ">
                  <a id="menu_portofolio" class="nav-link" href="{{ url('/') }}/portofolio">Portofolio</a>
                </li>
                <li class="nav-item ">
                  <a id="menu_proker" class="nav-link" href="{{ url('/') }}/proker">Program Kerja</a>
                </li>
                <li class="nav-item">
                  <a id="menu_anggota" class="nav-link" href="{{ url('/') }}/anggota">Anggota</a>
                </li>
                <li class="nav-item ">
                  <a id="menu_tentang" class="nav-link" href="{{ url('/') }}/tentang">Tentang</a>
                </li>
              </ul>
            </div>

          </nav>
          <!-- ================================== End Navbar ============================ -->            
          
</body>


{{-- Unique Content --}}
{{-- Ini Bagian Body Website --}}
@yield('body-content')


{{-- Ini Bagian Footer Website --}}
{{-- Isinya sama saja di setiap Halaman --}}
<!-- ==================================== Footer ========================== -->
<footer class="footer">
    

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-3">
            <p class="title-footer">LOKASI</p>
            <p class="desc-footer">Sekretariat : Gedung D1.2 Fakultas Ilmu Komputer Universitas Brawijaya</p>
          </div>
          <div class="col-md-3">
            <p class="title-footer">KONTAK</p>
            <p class="desc-footer">Email : raioncom@gmail.com</p>
          </div>
          <div class="col-md-3">
            <p class="title-footer">MEDIA SOSIAL</p>
            <a target="_blank" href="https://www.instagram.com/raion_community/"><i class="fab fa-instagram"></i></a>
            <a target="_blank" href="https://www.facebook.com/raioncommunity/"><i class="fab fa-facebook-square"></i></a>
            <a target="_blank" href="https://twitter.com/RaionCommunity"><i class="fab fa-twitter"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UCM_KCSus8eODu2AlOMuIsrg"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-4 wrapper-footer-link text-right">
        <p class="footer-link"><a href="{{ url('/') }}/portofolio">Portofolio</a></p>
        <p class="footer-link"><a href="{{ url('/') }}/proker">Program Kerja</a></p>
        <p class="footer-link"><a href="{{ url('/') }}/anggota">Anggota</a></p>
        <p class="footer-link"><a href="{{ url('/') }}/tentang">Tentang</a></p>
      </div>
    </div>
  </div>

</footer>

<div class="container-fluid">
   <div class="row author">
      <div class="col-md-12">
        <p>Developed by <span class="raion">Raion</span> Creative Team</p>
      </div>
    </div>
</div>



{{-- Bagian Script --}}
{{-- Script yang sama untuk semua halaman --}}

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

<!-- Custom Script -->
<script src="{{ url('/') }}/js/script.js"></script>

<!-- FadeScroll -->
<script src="{{ url('/') }}/js/fadeScroll.js"></script>

{{-- Slick Carousel --}}
<script src="{{ url('/') }}/bower_components/slick/slick/slick.min.js"></script>

{{-- Custom Script untuk Navbar --}}
<script>

        var navParameter = "@yield('navmenu')" ;
        
        // Navigation Menu Active Indicator
        if (navParameter == "index") {
          $('#menu_index').addClass(" link-active");
        }
        else if (navParameter == "portofolio") {
          $('#menu_portofolio').addClass(" link-active");
        }
        else if (navParameter == "anggota") {
          $('#menu_anggota').addClass(" link-active");
        }
        else if (navParameter == "tentang") {
          $('#menu_tentang').addClass(" link-active");
        }
        else if (navParameter == "proker") {
          $('#menu_proker').addClass(" link-active");
        }
        else  {

        }
</script>



</html>