<!DOCTYPE html>
{{-- Set Judul Halaman untuk tab Browser --}}
@section ('title', $judul)

{{-- Set Tombol Navbar mana yang aktif --}}
@section('navmenu', $navmenu)

{{-- load Layout --}}
{{-- Urutan : Header - Navbar - Body - Footer - Script --}}
@extends('layout.master_layout')

@section('body-content')
    
<body style="margin-top: 120px;">
  
  <div class="container wrapper-member">

      <div class="row">

        <div class="col-md-6">

          <div class="row">

            @foreach ($ketumWaketums as $ketumWaketum)
            <div class="col-md-6 col-sm-6">
              <div class="card card-one animated-three zoomIn">
                <img src="{{ $ketumWaketum->member_photo }}" alt="" class="img-fluid">
                <div class="card-body">
                  <h5 class="card-title">{{ $ketumWaketum->member_name }}</h5>
                  <span class="jabatan">{{ $ketumWaketum->member_jabatan }}</span>
                  <p class="card-text">{{ $ketumWaketum->member_prodi }} - {{ $ketumWaketum->member_angkatan }}</p>
                  <div class="social-member">
                    <a target="_blank" href="{{ $ketumWaketum->member_ig }}"><i class="fab fa-instagram fa-2x"></i></a>
                    <a target="_blank" href="{{ $ketumWaketum->member_sosmed3 }}"><i class="fab fa-linkedin-in fa-2x"></i></a>
                    <a target="_blank" href="{{ $ketumWaketum->member_fb }}"><i class="fab fa-facebook-f fa-2x"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>

          <br>

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="card card-two animated zoomIn">
                <div class="card-body">
                  <h5 class="card-title">Divisi</h5>
                  <p class="card-text">Terdapat 2 divisi utama dalam struktur kepengurusan Raion Community yaitu divisi fungsional dan non-fungsional</p>
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
                  <p class="card-text">Tim inti Raion Community terdiri dari 11 anggota utama yang memiliki peran dan tanggung jawabnya masing-masing</p>
                </div>
              </div>
            </div>
          </div>

          <br>

          <div class="row">

            @foreach ($bendaharaSekertarises as $bendaharaSekertarise)
              <div class="col-md-6 col-sm-6">
                <div class="card card-one animated-three zoomIn">
                  <img src="{{ $bendaharaSekertarise->member_photo }}" alt="" class="img-fluid">
                  <div class="card-body">
                    <h5 class="card-title">{{ $bendaharaSekertarise->member_name }}</h5>
                    <span class="jabatan">{{ $bendaharaSekertarise->member_jabatan }}</span>
                    <p class="card-text">{{ $bendaharaSekertarise->member_prodi }} - {{ $bendaharaSekertarise->member_angkatan }}</p>
                    <div class="social-member">
                      <a target="_blank" href="{{ $bendaharaSekertarise->member_ig }}"><i class="fab fa-instagram fa-2x"></i></a>
                      <a target="_blank" href="{{ $bendaharaSekertarise->member_sosmed3 }}"><i class="fab fa-linkedin-in fa-2x"></i></a>
                      <a target="_blank" href="{{ $bendaharaSekertarise->member_fb }}"><i class="fab fa-facebook-f fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

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
              <p class="card-text">Divisi Fungsional terdiri dari  Divisi Desainer, Artsit dan Programmer dimana divisi ini bertanggung jawab terhadap  aktiivitias inti dari program kerja Raion Community dalam  membuat sebuah produk baik aplikasi maupun games</p>
            </div>
          </div>
        </div>

        @foreach ($fungsionals as $fungsional)
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-one animated-three zoomIn">
              <img src="{{ $fungsional->member_photo }}" alt="" class="img-fluid">
              <div class="card-body">
                <h5 class="card-title">{{ $fungsional->member_name }}</h5>
                <span class="jabatan">{{ $fungsional->member_jabatan }}</span>
                <p class="card-text">{{ $fungsional->member_prodi }} - {{ $fungsional->member_angkatan }}</p>
                <div class="social-member">
                  <a target="_blank" href="{{ $fungsional->member_ig }}"><i class="fab fa-instagram fa-2x"></i></a>
                  <a target="_blank" href="{{ $fungsional->member_sosmed3 }}"><i class="fab fa-linkedin-in fa-2x"></i></a>
                  <a target="_blank" href="{{ $fungsional->member_fb }}"><i class="fab fa-facebook-f fa-2x"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach 

      </div>

      <br>
      
      <div class="row">

        <div class="col-md-12 col-sm-12">
          <div class="card card-three fadeInScrollRight">
            <div class="card-body">
              <h5 class="card-title">Divisi Non Fungsional</h5>
              <p class="card-text">Divisi non fungsional terdiri dari beberapa divisi diantaranya di visi pengawasan, 
                ekskternal, produksi dan marketing dimana divisi ini bertanggung jawab terhadap hal-hal yang bersifat 
                non teknis dari program kerja Raion Community yang berhub ungan dengan pembuatan se buat produk</p>
            </div>
          </div>
        </div>
        
        @foreach ($nonFungsionals as $nonFungsional)
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-one animated-three zoomIn">
              <img src="{{ $nonFungsional->member_photo }}" alt="" class="img-fluid">
              <div class="card-body">
                <h5 class="card-title">{{ $nonFungsional->member_name }}</h5>
                <span class="jabatan">{{ $nonFungsional->member_jabatan }}</span>
                <p class="card-text">{{ $nonFungsional->member_prodi }} - {{ $nonFungsional->member_angkatan }}</p>
                <div class="social-member">
                  <a target="_blank" href="{{ $nonFungsional->member_ig }}"><i class="fab fa-instagram fa-2x"></i></a>
                  <a target="_blank" href="{{ $nonFungsional->member_sosmed3 }}"><i class="fab fa-linkedin-in fa-2x"></i></a>
                  <a target="_blank" href="{{ $nonFungsional->member_fb }}"><i class="fab fa-facebook-f fa-2x"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach 
        
      </div>

      <br>
      <div class="row">
        
        <div class="col-md-12 col-sm-12">
          <div class="card card-three fadeInScrollRight">
            <div class="card-body">
              <p class="card-text">Saat ini terdapat 70 anggota aktif yang terdiri dari berbagai divisi baik itu divisi desainer, 
                artist maupun programmer dengan komposisi jumlah anggota desainer sebanyak 20, anggota artist sebanyak 
                20 dan sedangkan anggota programmer sebanyak 30 orang</p>
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

          @foreach ($desainers as $desainer)
              <div class="col-md-3 col-sm-2">
                <div class="card card-one fadeInScrollLeft">
                  
                  @if ($desainer->member_photo)
                    <img src="{{ $desainer->member_photo }}" alt="" class="img-fluid">
                  @else
                    <img src="{{ url('/') }}/img/non-projek/logo-designer.png" alt="" class="img-fluid">
                  @endif

                  <div class="card-body">
                    <h5 class="card-title">{{ $desainer->member_name }}</h5>
                    <span class="jabatan">{{ $desainer->member_division }}</span>
                    <p class="card-text">{{ $desainer->member_prodi }} - {{ $desainer->member_angkatan }}</p>
                    <div class="social-member">
                      <a target="_blank" href="{{ $desainer->member_ig }}"><i class="fab fa-instagram fa-2x"></i></a>
                      <a target="_blank" href="{{ $desainer->member_sosmed3 }}"><i class="fab fa-linkedin-in fa-2x"></i></a>
                      <a target="_blank" href="{{ $desainer->member_fb }}"><i class="fab fa-facebook-f fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
          @endforeach
              
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

          @foreach ($artists as $artist)
              <div class="col-md-3 col-sm-2">
                <div class="card card-one fadeInScrollLeft">

                  @if ($artist->member_photo)
                    <img src="{{ $artist->member_photo }}" alt="" class="img-fluid">
                  @else
                    <img src="{{ url('/') }}/img/non-projek/logo-artist.png" alt="" class="img-fluid">
                  @endif
                  
                  <div class="card-body">
                    <h5 class="card-title">{{ $artist->member_name }}</h5>
                    <span class="jabatan">{{ $artist->member_division }}</span>
                    <p class="card-text">{{ $artist->member_prodi }} - {{ $artist->member_angkatan }}</p>
                    <div class="social-member">
                      <a target="_blank" href="{{ $artist->member_ig }}"><i class="fab fa-instagram fa-2x"></i></a>
                      <a target="_blank" href="{{ $artist->member_sosmed3 }}"><i class="fab fa-linkedin-in fa-2x"></i></a>
                      <a target="_blank" href="{{ $artist->member_fb }}"><i class="fab fa-facebook-f fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
          @endforeach
              
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

           @foreach ($programmers as $programmer)
              <div class="col-md-3 col-sm-2">
                <div class="card card-one fadeInScrollLeft">

                  @if ($programmer->member_photo)
                    <img src="{{ $programmer->member_photo }}" alt="" class="img-fluid">
                  @else
                    <img src="{{ url('/') }}/img/non-projek/logo-programmer.png" alt="" class="img-fluid">
                  @endif

                  <div class="card-body">
                    <h5 class="card-title">{{ $programmer->member_name }}</h5>
                    <span class="jabatan">{{ $programmer->member_division }}</span>
                    <p class="card-text">{{ $programmer->member_prodi }} - {{ $programmer->member_angkatan }}</p>
                    <div class="social-member">
                      <a target="_blank" href="{{ $programmer->member_ig }}"><i class="fab fa-instagram fa-2x"></i></a>
                      <a target="_blank" href="{{ $programmer->member_sosmed3 }}"><i class="fab fa-linkedin-in fa-2x"></i></a>
                      <a target="_blank" href="{{ $programmer->member_ig }}"><i class="fab fa-facebook-f fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
          @endforeach
              
        </div>
        
      </div>
    
    </div>

</body>

@endsection