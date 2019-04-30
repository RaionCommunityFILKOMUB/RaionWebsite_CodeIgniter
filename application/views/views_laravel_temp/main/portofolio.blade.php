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

@section('body-content')

  <body style="margin-top: 100px;">

      <div class="container" style="min-width: 95%;">
      <section class="wrapper-portofolio">
        <div class="row">
          <div class="col-md-6">
            <h1 class="main-title animated slideInLeft">Jelajahi Karya Kami</h1>
            <p class="desc animated-two zoomIn">Berikut adalah apa saja yang sudah kami kerjakan selama ini baik itu produk berbentuk Aplikasi, game maupun projek dengan klien</p>
          </div>
        </div>
      </section>
    </div>

    <div class="container-fluid animated-three zoomIn">

      <div class="row">
        <div class="col-md-12">
          <nav class="nav nav-pills nav-justified" id="myBtnContainer">
            <a class="nav-link active" href="#" onclick="filterSelection('All');">All</a>
            <a class="nav-link active" href="#" onclick="filterSelection('Aplikasi');">Aplikasi</a>
            <a class="nav-link active" href="#" onclick="filterSelection('Game');">Game</a>
            <a class="nav-link active" href="#" onclick="filterSelection('Projek');">Projek</a>
          </nav>
        </div>
      </div>

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

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 no-padding filterDiv {{ $portofolio->portofolio_category }}">
              <a target="_blank" href="{{ url('/') }}/portofolio/{{$portofolio->portofolio_slug}}">
                <div class="wrapper-projek">
                  <img src="{{ $portofolio->portofolio_img_thumb }}" alt="" width="100%" height="auto" class="img-fluid">
                  <div class="{{ $backgroundColor }}">
                    <div class="circle" style="background-image:url('{{ $portofolio->portofolio_img_thumb }}');"></div>
                    <h2 class="main-title-projek">{{  $portofolio->portofolio_title }}</h2>
                    <p class="sub-title-projek">{{ strftime("%d %B %Y",  strtotime($portofolio->portofolio_date_start) ) }}</p>
                  </div>
                </div>
              </a>
          </div>

        @endforeach

      </div>
      <!-- /.row -->  

    </div>
    <!-- /.container-fluid --> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <!-- Custom Script -->
    <script src="js/script.js"></script>
  </body>

@endsection



