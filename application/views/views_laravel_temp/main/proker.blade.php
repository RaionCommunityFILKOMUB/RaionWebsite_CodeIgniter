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

  <body style="margin-top: 100px;">

    <!-- ================================== Section Popular ======================== -->
    <div class="container" style="min-width: 85%;">
      <div class="row">
        <div class="col-md-7 item no-padding animated zoomIn">
          <a href="">
            {{-- <img  style="background-image:url('img/non-projek/jumbotron.jpg');" alt=""> --}}
            <img src="{{ url('/') }}/img/projek/1.jpg" width="auto" height="100%" alt="">
            <div class="item-overlay">
              <div class="content-overlay">
                <p class="main-title">Gamosphere 2017</p>
              <p class="sub-title">Seminar & workshop Mobile Developers</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-5 item no-padding animated-two zoomIn">
          <a href="">
            {{-- <img  style="background:url('img/non-projek/jumbotron.jpg');" alt=""> --}}
            <img src="{{ url('/') }}/img/projek/1.jpg" width="auto" height="100%" alt="" class="img-fluid">
            <div class="item-overlay2">
              <div class="content-overlay">
                <p class="main-title">Raion Produktif</p>
                <p class="sub-title">Making product real for everyone</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-5 item no-padding animated-two zoomIn">
          <a href="">
            {{-- <img  style="background:url('img/non-projek/jumbotron.jpg');" alt=""> --}}
            <img src="{{ url('/') }}/img/projek/1.jpg" width="auto" height="100%" alt="" class="img-fluid">
            <div class="item-overlay3">
              <div class="content-overlay">
                <p class="main-title">Study Banding</p>
                <p class="sub-title">Bandung Digital Valey, West Java</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-7 item no-padding animated-three zoomIn">
          <a href="">
            {{-- <img  style="background:url('img/non-projek/jumbotron.jpg');" alt=""> --}}
            <img src="{{ url('/') }}/img/projek/1.jpg" width="auto" height="100%" alt="" class="img-fluid">
            <div class="item-overlay4">
              <div class="content-overlay">
                <p class="main-title">Hackjam 2018</p>
              <p class="sub-title">Build Interactive Product 2 days only</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!-- ======================== End Section Popular -->

    <!-- ======================== Section More =========================-->
    <section class="more">
      <div class="container no-padding" style="min-width: 85%;">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-proker">
              <div class="item">
                <a href="">
                  <img class="card-img-top" src="{{ url('/') }}/img/projek/1.jpg" alt="Card image cap">
                </a>
                <div class="item-overlay"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakti Sosial</h5>
                <p class="card-text">Bakti Sosial 2018 bersama anak yatim dari panti asuhan Nurul Huda Kota Malang</p>
                <a href="#" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 no-padding-right">
            <div class="card card-proker">
              <div class="wrapper-workshop">
                <p class="title">Workshop Internal</p>
                <p class="desc">Belajar bersama seputar Mobile Apps dan Games dengan sesama anggota</p>
                <p class="sub-desc">Workshop internal merupakan salah satu program kerja Raion Community untuk belajar bersama seputar mobile apps dan games</p>
                <hr>
                <a href="#" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 no-padding-left">
            <div class="card card-proker">
                <img src="{{ url('/') }}/img/projek/1.jpg" class="img-proker">
                <div class="item-overlay2"></div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-proker">
              <div class="item">
                <a href="">
                  <img class="card-img-top" src="{{ url('/') }}/img/projek/1.jpg" alt="Card image cap">
                </a>
                <div class="item-overlay4"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakti Sosial</h5>
                <p class="card-text">Bakti Sosial 2018 bersama anak yatim dari panti asuhan Nurul Huda Kota Malang</p>
                <a href="#" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-proker">
              <div class="item">
                <a href="">
                  <img class="card-img-top" src="{{ url('/') }}/img/projek/1.jpg" alt="Card image cap">
                </a>
                <div class="item-overlay"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakti Sosial</h5>
                <p class="card-text">Bakti Sosial 2018 bersama anak yatim dari panti asuhan Nurul Huda Kota Malang</p>
                <a href="#" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-proker">
              <div class="item">
                <a href="">
                  <img class="card-img-top" src="{{ url('/') }}/img/projek/1.jpg" alt="Card image cap">
                </a>
                <div class="item-overlay3"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakti Sosial</h5>
                <p class="card-text">Bakti Sosial 2018 bersama anak yatim dari panti asuhan Nurul Huda Kota Malang</p>
                <a href="#" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4 no-padding-right">
            <div class="card card-proker">
              <div class="wrapper-workshop">
                <p class="title">Workshop Internal</p>
                <p class="desc">Belajar bersama seputar Mobile Apps dan Games dengan sesama anggota</p>
                <p class="sub-desc">Workshop internal merupakan salah satu program kerja Raion Community untuk belajar bersama seputar mobile apps dan games</p>
                <hr>
                <a href="#" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 no-padding-left">
            <div class="card card-proker">
                <img src="{{ url('/') }}/img/projek/1.jpg" class="img-proker">
                <div class="item-overlay2"></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-proker">
              <div class="item">
                <a href="">
                  <img class="card-img-top" src="{{ url('/') }}/img/projek/1.jpg" alt="Card image cap">
                </a>
                <div class="item-overlay3"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakti Sosial</h5>
                <p class="card-text">Bakti Sosial 2018 bersama anak yatim dari panti asuhan Nurul Huda Kota Malang</p>
                <a href="#" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </body>

@endsection