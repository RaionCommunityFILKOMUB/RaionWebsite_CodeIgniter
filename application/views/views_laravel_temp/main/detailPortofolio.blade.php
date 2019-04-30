<!DOCTYPE html>
{{-- Set Judul Halaman untuk tab Browser --}}
{{-- @section ('title', '') --}}

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
<body style="margin-top: 85px;">

@foreach ($portofolios as $portofolio)

@section ('title', $portofolio->portofolio_title)

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 h-100" src=" {{ $portofolio->portofolio_img_thumb }} " alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 h-100" src="{{ $portofolio->portofolio_img_thumb }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 h-100" src="{{ $portofolio->portofolio_img_thumb }}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  
    <div class="container-fluid" id="detail-project">
      <div class="row">
        <div class="col-md-4">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Kategori
                  </button>
                </h5>
              </div>
  
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    {{ $portofolio->portofolio_category }}
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Anggota Tim
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  @foreach ($members as $member)
                    <p>{{ $member->member_name }}</p>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Tanggal
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  {{ strftime("%d %B %Y",  strtotime($portofolio->portofolio_date_start) ) }} <br>
                  <small>s/d</small> <br>
                  {{ strftime("%d %B %Y",  strtotime($portofolio->portofolio_date_end) ) }}
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Klien
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  -
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Link
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  -
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-8">
          <h1>{{ $portofolio->portofolio_title }}</h1>
          <p style="text-align : justify;">
            {{ $portofolio->portofolio_description }}
          </p>
        </div>
      </div>
    </div>
@endforeach

    
</body>
@endsection