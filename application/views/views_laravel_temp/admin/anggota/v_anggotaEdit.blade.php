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

    @if ($content_title == "Tambah Anggota")
        
    <!-- Form Tambah Anggota -->
    <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Data Anggota</h3>
            </div>
            <!-- /.box-header -->
            
            <!-- form start -->
            <form role="form" action="/admin/anggota/insert" method="POST">
    
            <div class="box-body">
    
                <div class="form-group">
                <label for="">NIM</label>
                <input type="number" class="form-control input-lg" name="form_tambah_nim" 
                    placeholder="Masukkan NIM (15 Digit)" required>
                <code class="">(*)</code>
                </div>
    
                <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" class="form-control input-lg" name="form_tambah_nama" 
                    placeholder="Masukkan Nama Lengkap" required>
                <code class="">(*)</code>
                </div>
    
                <!-- Angkatan (Dropdown) -->
                <div class="form-group">
                <label>Angkatan</label>
                <select class="form-control input-lg" name="form_tambah_angkatan" required>
                    <option></option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>2016</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                </select>
                <code class="">(*)</code>
                </div>
    
                <!-- Program Studi (Dropdown) -->
                <div class="form-group">
                <label>Program Studi</label>
                <select class="form-control input-lg" name="form_tambah_prodi" required>
                    <option></option>
                    <option>Teknik Informatika</option>
                    <option>Teknik Komputer</option>
                    <option>Pendidikan Teknologi Informasi</option>
                    <option>Sistem Informasi</option>
                    <option>Teknologi Informasi</option>
                </select>
                <code class="">(*)</code>
                </div>
    
                <hr>
    
                <!-- Divisi Desainer, Artist, Programmer (Dropdown) -->
                <div class="form-group">
                <label>Divisi</label>
                <select class="form-control input-lg" name="form_tambah_divisi" required>
                    <option></option>
                    <option>Programmer</option>
                    <option>Artist</option>
                    <option>Designer</option>
                </select>
                <code class="">(*)</code>
                </div>
    
                <!-- Jabatan Pengurus (Dropdown) -->
                <div class="form-group">
                <label>Jabatan</label>
                <select class="form-control input-lg" name="form_tambah_jabatan">
                    <option></option>
                    <option>Ketua Umum</option>
                    <option>Wakil Ketua Umum</option>
                    <option>Bendahara</option>
                    <option>Sekretaris</option>
    
                    <option>Kadiv Programmer</option>
                    <option>Kadiv Designer</option>
                    <option>Kadiv Artist</option>
    
                    <option>Kadiv Marketing</option>
                    <option>Kadiv Eksternal</option>
                    <option>Kadiv Produksi</option>
                    <option>Kadiv Pengawasan</option>
    
                    <option>Staff Marketing</option>
                    <option>Staff Eksternal</option>
                    <option>Staff Produksi</option>
                    <option>Staff Pengawasan</option>
                </select>
                </div>
    
                <hr>
    
                <!-- Link Sosial Media (Optional) -->
                <div class="form-group">
                <label for="">Link (Instagram)</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                    <input type="url" class="form-control input-lg" name="form_tambah_ig" placeholder="Link Profil Instagram">
                </div>
                </div>
    
                <div class="form-group">
                <label for="">Link (Twitter)</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                    <input type="url" class="form-control input-lg" name="form_tambah_twitter" placeholder="Link Profil Twitter">
                </div>
                </div>
    
                <div class="form-group">
                <label for="">Link (Facebook)</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-facebook-f"></i></span>
                    <input type="url" class="form-control input-lg" name="form_tambah_fb" placeholder="Link Profil Facebook">
                </div>
                </div>
                <!-- End Sosial Media -->
    
                <hr>
    
                <div class="form-group">
                    <label for="">Foto Profil</label>
                    <input class="form-control input-lg" type="url" name="form_tambah_foto">
                    <p class="help-block">
                        Foto Profil disimpan pada Cloud : 
                        <a href="http:///drive.google.com" target="_blank"><b>http://drive.google.com</b></a>
                        Copy-Paste link Foto tersebut di sini
                    </p>
                </div>
                
            </div>
            <!-- /.box-body -->
    
            <div class="box-footer">
                <button type="submit" id="form-btn-sumbit" class="btn btn-primary">Tambah Anggota</button>
                <a type="submit" class="btn btn-warning">Batal</a>
            </div>

            {{-- Belum paham ini buat apa fungsinya --}}
            {{ csrf_field() }}
            
            </form>
            
        
    </div>
    <!-- /.box --> 

    @elseif ($content_title == "Edit Anggota")
    
     <!-- Form Edit Anggota -->
     <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Edit Data Anggota</h3>
            </div>
            <!-- /.box-header -->
            @foreach ($anggotas as $member)
            <!-- form start -->
            <form role="form" action="/admin/anggota/update/{{ $member->member_id }}" method="POST">
                
            <div class="box-body">
                
                    <div class="form-group">
                    <label for="">NIM</label>
                    <input type="number" class="form-control input-lg" name="form_edit_nim" 
                        placeholder="Masukkan NIM (15 Digit)" 
                        value="{{ $member->member_id }}"
                        disabled>
                    <code class="">(*)</code>
                    </div>
        
                    <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control input-lg" name="form_edit_nama" 
                        placeholder="Masukkan Nama Lengkap" 
                        value="{{  $member->member_name }}"
                        required>
                    <code class="">(*)</code>
                    </div>
        
                    <!-- Angkatan (Dropdown) -->
                    <div class="form-group">
                    <label>Angkatan <code class="">(*)</code></label>
                    <select class="form-control input-lg" name="form_edit_angkatan" required>
                        <option>{{ $member->member_angkatan }}</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                    </select>
                    </div>
        
                    <!-- Program Studi (Dropdown) -->
                    <div class="form-group">
                    <label>Program Studi <code class="">(*)</code></label>
                    <select class="form-control input-lg" name="form_edit_prodi" required>
                        <option>{{ $member->member_prodi }}</option> 
                        <option>Teknik Informatika</option>
                        <option>Teknik Komputer</option>
                        <option>Pendidikan Teknologi Informasi</option>
                        <option>Sistem Informasi</option>
                        <option>Teknologi Informasi</option>
                    </select>
                    
                    </div>
        
                    <hr>
        
                    <!-- Divisi Desainer, Artist, Programmer (Dropdown) -->
                    <div class="form-group">
                    <label>Divisi <code class="">(*)</code></label>
                    <select class="form-control input-lg" name="form_edit_divisi" required>
                        <option>{{ $member->member_division }}</option>
                        <option>Programmer</option>
                        <option>Artist</option>
                        <option>Designer</option>
                    </select>
                    
                    </div>
        
                    <!-- Jabatan Pengurus (Dropdown) -->
                    <div class="form-group">
                    <label>Jabatan</label>
                    <select class="form-control input-lg" name="form_edit_jabatan">
                        <option>{{ $member->member_jabatan }}</option>
                        <option>Ketua Umum</option>
                        <option>Wakil Ketua Umum</option>
                        <option>Bendahara</option>
                        <option>Sekretaris</option>
        
                        <option>Kadiv Programmer</option>
                        <option>Kadiv Designer</option>
                        <option>Kadiv Artist</option>
        
                        <option>Kadiv Marketing</option>
                        <option>Kadiv Eksternal</option>
                        <option>Kadiv Produksi</option>
                        <option>Kadiv Pengawasan</option>
        
                        <option>Staff Marketing</option>
                        <option>Staff Eksternal</option>
                        <option>Staff Produksi</option>
                        <option>Staff Pengawasan</option>
                    </select>
                    </div>
        
                    <hr>
        
                    <!-- Link Sosial Media (Optional) -->
                    <div class="form-group">
                    <label for="">Link (Instagram)</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                        <input type="url" class="form-control input-lg" name="form_edit_ig" 
                        value="{{ $member->member_ig }}"
                        placeholder="Link Profil Instagram">
                    </div>
                    </div>
        
                    <div class="form-group">
                    <label for="">Link (Twitter)</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                        <input type="url" class="form-control input-lg" name="form_edit_twitter" 
                        value="{{ $member->member_sosmed3 }}"
                        placeholder="Link Profil Twitter">
                    </div>
                    </div>
        
                    <div class="form-group">
                    <label for="">Link (Facebook)</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-facebook-f"></i></span>
                        <input type="url" class="form-control input-lg" name="form_edit_fb" 
                        value="{{ $member->member_fb }}"
                        placeholder="Link Profil Facebook">
                    </div>
                    </div>
                    <!-- End Sosial Media -->
        
                    <hr>
        
                    <div class="form-group">
                        <label for="">Foto Profil</label>
                        <input class="form-control input-lg " type="url" name="form_edit_foto" value="{{ $member->member_photo }}">
                        <p class="help-block">
                            Foto Profil disimpan pada Cloud : 
                            <a href="http:///drive.google.com" target="_blank"><b>http://drive.google.com</b></a>
                            Copy-Paste link Foto tersebut di sini
                        </p>
                    </div>
                    
            {{-- Kirimkan Method PUT (hidden) jika ingin Update --}}
            <input type="hidden" name="_method" value="PUT">

            </div>
            <!-- /.box-body -->
    
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">
                    Perbarui Anggota
                </button>

            <a type="button" class="btn btn-warning" 
                href="{{ url('/') }} /admin/anggota/anggota_aktif">Batal
            </a>

                {{-- Belum paham ini buat apa fungsinya --}}
                {{ csrf_field() }}
                
            </div>
            <!-- /.box-footer -->

            </form>
            <!-- /.form-Edit -->
            
            <div class="box-footer">
                <form action="/admin/anggota/delete/{{ $member->member_id }}" method="POST">
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