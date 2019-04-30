<!DOCTYPE html>
{{-- Set Judul Halaman untuk tab Browser --}}
@section ('page-title', 'Admin Web Raion')

{{-- load Layout --}}
{{-- Urutan : Header - Navbar - Body - Footer - Script --}}
@extends('admin.dashboard_layout')

{{-- Set Judul Konten --}}
@section('content-title', $content_title)

{{-- Content untuk di Body --}}
@section('admin-body-content')

    @if ($content_title == "Tambah Portofolio")
        
    <!-- Form Tambah Portofolio -->
    <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Tambah Portofolio</h3>
            </div>
            <!-- /.box-header -->
            
            <!-- form start -->
        <form role="form" action="/admin/portofolio/insert" method="POST">
    
            <div class="box-body">
    
                <div class="form-group">
                <label for="">Judul <code class="">(*)</code> </label>
                <input type="text" class="form-control input-lg" 
                    name="form_tambah_title" 
                    placeholder="Nama Aplikasi/Game" required>
                </div>
    
                <!-- Angkatan (Dropdown) -->
                <div class="form-group">
                <label>Kategori <code class="">(*)</code> </label>
                <select class="form-control input-lg" name="form_tambah_kategori" required>
                    <option></option>
                    <option>Aplikasi</option>
                    <option>Game</option>
                    <option>Projek</option>
                </select>
                </div>
                
                <!-- Tanggal Mulai -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Mulai: <code class="">(*)</code></label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" class="form-control pull-left" name="form_tambah_date_start" required>
                        </div>
                    </div>
                </div>

                <!-- Tanggal Selesai -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Selesai :</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" class="form-control pull-right" name="form_tambah_date_end">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Deskripsi <code class="">(*)</code> </label>
                    <textarea class="form-control input-lg" name="form_tambah_deskripsi" 
                        id="form-deskripsi" cols="30" rows="5" placeholder="Deskripsi Produk (max. 200 kata)" required>
                    </textarea>
                </div>

                <!-- Program Studi (Dropdown) -->
                <div class="form-group">
                <label>Klien : <code class="">(*)</code></label>
                <select class="form-control input-lg select2" name="form_tambah_client_id" required>
                    <option></option>
                    @foreach ($kliens as $klien)
                        <option><b>{{ $klien->client_id }}</b> - {{ $klien->client_name }}</option>
                    @endforeach
                </select>
                </div>
    
                <hr>
    
                <!-- Divisi Desainer, Artist, Programmer (Dropdown) -->
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manager Projek <code class="">(*)</code></label>
                    <select class="form-control input-lg select2" 
                    name="form_tambah_manager_id" required>
                        <option></option>
                        @foreach ($anggotas as $anggota)
                            <option><b>{{ $anggota->member_id }}</b> - {{ $anggota->member_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Anggota 1 : <small>(Opsional)</small></label>
                    <select class="form-control input-lg select2" 
                    name="form_tambah_anggota_1">
                        <option></option>
                        @foreach ($anggotas as $anggota)
                            <option><b>{{ $anggota->member_id }}</b> - {{ $anggota->member_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Anggota 2 : <small>(Opsional)</small></label>
                    <select class="form-control input-lg select2" 
                    name="form_tambah_anggota_2">
                        <option></option>
                        @foreach ($anggotas as $anggota)
                            <option><b>{{ $anggota->member_id }}</b> - {{ $anggota->member_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Anggota 3 : <small>(Opsional)</small></label>
                    <select class="form-control input-lg select2" 
                    name="form_tambah_anggota_3">
                        <option></option>
                        @foreach ($anggotas as $anggota)
                            <option><b>{{ $anggota->member_id }}</b> - {{ $anggota->member_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Anggota 4 : <small>(Opsional)</small></label>
                    <select class="form-control input-lg select2" 
                    name="form_tambah_anggota_4">
                        <option></option>
                        @foreach ($anggotas as $anggota)
                            <option><b>{{ $anggota->member_id }}</b> - {{ $anggota->member_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Anggota 5 : <small>(Opsional)</small></label>
                    <select class="form-control input-lg select2" 
                    name="form_tambah_anggota_5">
                        <option></option>
                        @foreach ($anggotas as $anggota)
                            <option><b>{{ $anggota->member_id }}</b> - {{ $anggota->member_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
    
                <hr>
    
                <div class="form-group">
                    <label for="">Poster Projek : <code>(*)</code> </label>
                    <input class="form-control input-lg" type="url" name="form_tambah_img_thumb" 
                           placeholder="Contoh : http://pexels/2020.jpg" required>
                    <p class="help-block">
                        Poster projek disimpan pada Cloud : 
                        <br>
                        Copy-Paste link Poster tersebut di sini
                    </p>
                </div>
                
            </div>
            <!-- /.box-body -->
    
            <div class="box-footer">
                <button type="submit" id="form-btn-sumbit" class="btn btn-primary">Tambah Portofolio</button>
                <a type="submit" class="btn btn-warning">Batal</a>
            </div>

            {{-- Belum paham ini buat apa fungsinya --}}
            {{ csrf_field() }}
            
            </form>
    </div>
    <!-- /.box --> 

    @elseif ($content_title == "Edit Portofolio")
    <!-- Form Edit Portofolio -->
    <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Edit Portofolio</h3>
            </div>
            <!-- /.box-header -->
            @foreach ($portofolios as $portofolio)
             
            <form role="form" action="/admin/portofolio/update/{{ $portofolio->portofolio_id }}" method="POST">
    
            <div class="box-body">

                <div class="form-group">
                <label for="">ID Portofolio</label>
                <input type="text" class="form-control input-lg" name="form_edit_id"
                    value="{{ $portofolio->portofolio_id }}"
                    disabled>
                </div>

                <div class="form-group">
                <label for="">Judul <code class="">(*)</code></label>
                <input type="text" class="form-control input-lg" name="form_edit_title" 
                    placeholder="Nama Projek" 
                    value="{{ $portofolio->portofolio_title }}"
                    required>
                </div>
    
                <!-- Category (Dropdown) -->
                <div class="form-group">
                <label>Kategori<code class="">(*)</code></label>
                <select class="form-control input-lg" name="form_edit_kategori" required>
                    <option>{{ $portofolio->portofolio_category }}</option>
                    <option>Aplikasi</option>
                    <option>Game</option>
                    <option>Projek</option>
                </select>
                </div>
                
                <!-- Tanggal Mulai -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Mulai : <code class="">(*)</code></label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" class="form-control pull-left" 
                            name="form_edit_date_start" id="datepicker"
                            value="{{ $portofolio->portofolio_date_start }}" required>
                        </div>
                    </div>
                </div>

                <!-- Tanggal Selesai -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Selesai :</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" class="form-control pull-right" 
                            name="form_edit_date_end" id="datepicker"
                            value="{{ $portofolio->portofolio_date_end }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Deskripsi <code class="">(*)</code> </label>
                    <textarea class="form-control input-lg" name="form_edit_deskripsi" 
                        id="form-deskripsi" cols="30" rows="5" required>
                        {{ $portofolio->portofolio_description }}
                    </textarea>
                </div>
                                                                        
                <!-- Daftar Klien (Dropdown) -->
                <div class="form-group">
                <label>Klien : <code class="">(*)</code> </label>
                <select class="form-control input-lg" name="form_edit_client_id" required>
                    <option>{{ $portofolio->portofolio_client_id }}</option>
                    @foreach ($kliens as $klien)
                        <option><b>{{ $klien->client_id }}</b> - {{ $klien->client_name }}</option>
                    @endforeach
                </select>
                </div>
    
                <hr>    
    
                <!-- Divisi Desainer, Artist, Programmer (Dropdown) -->
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manager Projek <code class="">(*)</code></label>
                    <select class="form-control input-lg select2" 
                    name="form_edit_manager_id" required>
                        <option>{{ $portofolio->portofolio_manager_id }}</option>
                        @foreach ($anggotas as $anggota)
                            <option><b>{{ $anggota->member_id }}</b> - {{ $anggota->member_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Anggota 1 : <small>(Opsional)</small></label>
                    <select class="form-control input-lg select2" 
                    name="form_edit_anggota_1">
                        <option></option>
                        @foreach ($anggotas as $anggota)
                            <option><b>{{ $anggota->member_id }}</b> - {{ $anggota->member_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Anggota 2 : <small>(Opsional)</small></label>
                    <select class="form-control input-lg select2" 
                    name="form_edit_anggota_2">
                        <option></option>
                        @foreach ($anggotas as $anggota)
                            <option><b>{{ $anggota->member_id }}</b> - {{ $anggota->member_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Anggota 3 : <small>(Opsional)</small></label>
                    <select class="form-control input-lg select2" 
                    name="form_edit_anggota_3">
                        <option></option>
                        @foreach ($anggotas as $anggota)
                            <option><b>{{ $anggota->member_id }}</b> - {{ $anggota->member_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Anggota 4 : <small>(Opsional)</small></label>
                    <select class="form-control input-lg select2" 
                    name="form_edit_anggota_4">
                        <option></option>
                        @foreach ($anggotas as $anggota)
                            <option><b>{{ $anggota->member_id }}</b> - {{ $anggota->member_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Anggota 5 : <small>(Opsional)</small></label>
                    <select class="form-control input-lg select2" 
                    name="form_edit_anggota_5">
                        <option></option>
                        @foreach ($anggotas as $anggota)
                            <option><b>{{ $anggota->member_id }}</b> - {{ $anggota->member_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
    
                <hr>
    
                <div class="form-group">
                    <label for="">Poster Projek : <code>(*)</code> </label>
                    <input class="form-control input-lg" type="url" name="form_edit_img_thumb" required
                    value="{{ $portofolio->portofolio_img_thumb }}">
                    <p class="help-block">
                        Poster projek disimpan pada Cloud : 
                        <br>
                        Copy-Paste link Poster tersebut di sini
                    </p>
                </div>

                <input type="hidden" name="_method" value="PUT">
                
            </div>
            <!-- /.box-body -->
    
            <div class="box-footer">
                <button type="submit" id="form-btn-sumbit" class="btn btn-primary">Perbarui Portofolio</button>
                <a type="" class="btn btn-warning">Batal</a>
            </div>

            {{-- Belum paham ini buat apa fungsinya --}}
            {{ csrf_field() }}
            
            </form>

            <div class="box-footer">

            <form action="/admin/portofolio/delete/{{ $portofolio->portofolio_id }}" method="POST">
                
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </button>

            {{-- Belum paham ini buat apa fungsinya --}}
            {{ csrf_field() }}
            
            </form>
            <!-- /.form khusus untuk button delete -->

            </div>
            <!-- /.box-footer -->

            @endforeach
            <!-- from beginning -->


    </div>
    <!-- /.box --> 

    @else

    @endif
                      
@endsection

@section('custom-script-section')
    <script>
        // Cek Ukuran File Foto Profil Sebelum Submit
        // $('#form-btn-sumbit').click(function () {
        //     var formProfileSize = $('#form-profile-file')[0].files[0].size;
        //     if (formProfileSize > 512000) // 512000bits = 64KB
        //     {
        //         alert("Ukuran Foto Terlalu Besar (Max. 64KB)");
        //     }else
        //     {
        //         alert("Ukuran Foto Diterima");
        //     }
        // });
    </script>
@endsection