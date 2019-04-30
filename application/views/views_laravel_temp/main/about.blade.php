<!DOCTYPE html>
{{-- Set Judul Halaman untuk tab Browser --}}
@section ('title', $judul)

{{-- Set Tombol Navbar mana yang aktif --}}
@section('navmenu', $navmenu)

{{-- load Layout --}}
{{-- Urutan : Header - Navbar - Body - Footer - Script --}}
@extends('layout.master_layout')

{{-- Set bahasa tanggal di website ke bahasa Indonesia --}}
@php setlocale(LC_TIME, 'id_ID'); @endphp {{-- untuk Cross platform --}}
@php setlocale(LC_TIME, 'INDONESIA'); @endphp {{-- untuk WINDOWS --}}

{{-- Content untuk di Body --}}
@section('body-content')
  <body style="margin-top: 150px;">

  <!-- ======================== Raion About =================== -->
    <section class="summary" style="margin-top: -62px;">
      <div class="wrapper-summary">
        <div class="container">
          
          <div class="row justify-content-center">
            <div class="col-sm-12">
              
            </div>
            <div class="col-md-8 text-center">
                <img src="{{ url('/') }}/img/non-projek/logo.png" alt="" width="45%" height="auto">
                <br>
                <br>
              <p class="raion-community"><span class="raion">Filosofi</span> Logo 
              <br>
              <small><i></i></small>
              </p>
              
              <p class="main-summary">
                  Logo  Raion  community  terdiri  atas  tulisan  raion  community  bersama  dengan  lambang  utama  raion,  yaitu  singa. 
                  <br>
                  <br>
                  <b class="raion">Lambang  Singa</b> <br>  
                  Lambang  singa  dipilih  atas  dasar  latar  belakang  terbentuknya  nama  raion  yang  diambil  dari  bahasa  jepang,  ͚raion’,  dan  memiliki  arti  singa.
                  <br>
                  <br>
                  <b class="raion">Elemen  Api</b> <br> 
                  Api  menggambarkan  semangat  juang.  Artinya,  anggota  raion  harus  memiliki  semangat  yang  membara  untuk  mendapatkan  gelar  dan  memberikan  yang  terbaik.
                  Jilatan  api  ada  tiga  menggambarkan  3  divisi  raion,  yaitu  designer,  artist,  dan  programmer.Warna  orange  menggambarkan  kehangatan.  Artinya,  menjadi  bagian  dari  raion  berarti  menjadi  bagian  dari  sebuah  keluarga  besar  yang  nyaman  dan  penuhkehangatan.
              </p>
            </div>
          </div>
          <br><br><br>
          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              
              <p class="raion-community"><span class="raion">DIVISI</span>
                <br>
                <small><i>Men Behind The Gun</i></small>
              </p>
              
              <p class="desc" style="text-align: justify;">
                Raion Community memiliki 3 divisi utama yang bertindak sebagai divisi fungsional 
                yakni divisi <b class="raion">Desainer</b>, <b class="raion">Artist</b> & <b class="raion">Programmer</b>. 
                <br>
                Selain itu juga terdapat divisi non-fungsional 
                untuk keperluan yang bersifat non teknis untuk 
                menunjang pengembangan produk dan program kerja Raion Community
              </p>
              <div class="row text-center summary-division">
                <div class="col-md-4 col-sm-12">
                  <img src="img/non-projek/logo-designer.png" alt="" width="150">
                  <p class="main-title-summary">Desainer</p>
                </div>
                <div class="col-md-4 col-sm-12">
                  <img src="img/non-projek/logo-artist.png" alt="" width="150">
                  <p class="main-title-summary">Artist</p>              
                </div>
                <div class="col-md-4 col-sm-12">
                  <img src="img/non-projek/logo-programmer.png" alt="" width="150">
                  <p class="main-title-summary">Programmer</p>
                </div>
              </div>
          </div>
        </div>

      </div>
    </section>

  <section class="about">
    <div class="container">
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="wrapper-about">
            <p class="main-title">Sekilas Tentang Kami</p>
            <br>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/tEvNA29kOQk" 
              frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
      <br>
    </div>
  </section>

  <!-- =============================== VISI MISI =============================== -->
  <section class="summary" style="margin-top: -62px;">
      <div class="wrapper-summary">
        <div class="container">
          
          <div class="row justify-content-center">
            
            <div class="col-md-8">
              <p class="raion-community"><span class="raion">Visi</span> 
              
              <p class="main-summary">
                Menciptakan  Raion  yang  disiplin,  bertanggung  jawab ,  
                religius  serta  prestatif  untuk  meningkatkan kemampuan  berorganisasi  
                dan  kemampuan  dalam  mengembangkan  aplikasi    mobile  dan  game.
              </p>
            </div>
          </div>
          <br><br><br>
          <div class="row justify-content-center">
            <div class="col-md-8">
              
              <p class="raion-community"><span class="raion">MISI</span></p>
              
              <p class="desc">
                <ol>
                  <li>Meningkatkan  kekeluargaan  dan  kedisiplinan  anggota  Raion  Community.</li>
                  <li>Membentuk  anggota  Raion  Community  agar  memiliki  rasa  tanggung  jawab  terhadap  amanah  yang  diberikan.</li>
                  <li>Menghasilkan  produk  berupa  aplikasi  mobile  dan  game  yang  bermanfaat  untuk  masyarakat.</li>
                  <li>Membentuk  anggota  Raion  Community  yang  prestatif,  kreatif,  inovatif  serta  mandiri.</li>
                  <li>Menciptakan  budaya  religius  kepada  setiap  anggota  Raion  Community. </li>
                  <li>Mengharumkan  dan  menjaga  nama  baik  Raion  Community  serta  Fakultas  Ilmu  Komputer  Universitas  Brawijaya.</li>
                  <li>Meningkatkan  kepedulian  anggota  Raion  Community  terhadap  alat  kelengkapan  Fakultas  Ilmu  Komputer.</li>
                </ol>
              </p>
              
            </div>
          </div>
        </div>

      </div>
    </section>

</body>
@endsection