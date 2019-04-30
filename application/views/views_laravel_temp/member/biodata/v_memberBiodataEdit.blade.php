<!DOCTYPE html>
{{-- Set Judul Halaman untuk tab Browser --}}
@section ('page-title', 'Edit Biodata')

{{-- load Layout --}}
{{-- Urutan : Header - Navbar - Body - Footer - Script --}}
@extends('member.member_dashboard')

{{-- Set Judul Konten --}}
@section('content-title', $content_title)

{{-- Content untuk di Body --}}
@section('member-body-content')

     <!-- Form Edit Biodata -->
    <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Edit Biodata Anggota</h3>
            </div>
        
        <form role="form" action="/member/submit-update-biodata/{{ session('memberNIMSessionGlobalPolos') }}" 
            method="POST" 
            enctype="multipart/form-data">
                
            <div class="box-body">
                
                    <div class="form-group">
                    <label for="">NIM <code class="">(*)</code></label>
                    <input type="text" class="form-control input-lg" name="form_edit_nim" 
                        placeholder="Masukkan NIM (15 Digit)" 
                        value="{{ session('memberNIMSessionGlobalPolos') }}"
                        disabled>
                    </div>
        
                    <div class="form-group">
                    <label for="">Nama Lengkap <code class="">(*)</code></label>
                    <input type="text" class="form-control input-lg" name="form_edit_nama" 
                        placeholder="Masukkan Nama Lengkap" 
                        value="{{  $memberData->member_name }}"
                        required>
                    </div>
                    
                    <div class="col-md-6">
                        <!-- Angkatan (Dropdown) -->
                        <div class="form-group">
                            <label>Angkatan <code class="">(*)</code></label>
                            <select class="form-control input-lg" name="form_edit_angkatan" required>
                                <option>{{ $memberData->member_angkatan }}</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <!-- Program Studi (Dropdown) -->
                        <div class="form-group">
                            <label>Program Studi <code class="">(*)</code></label>
                            <select class="form-control input-lg" name="form_edit_prodi" required>
                                <option>{{ $memberData->member_prodi }}</option> 
                                <option>Teknik Informatika</option>
                                <option>Teknik Komputer</option>
                                <option>Pendidikan Teknologi Informasi</option>
                                <option>Sistem Informasi</option>
                                <option>Teknologi Informasi</option>
                            </select>
                        </div>
                    </div>
                    
                    <hr>
        
                    <!-- Divisi Desainer, Artist, Programmer (Dropdown) -->
                    <div class="form-group">
                    <label>Divisi <code class="">(*)</code></label>
                    <select class="form-control input-lg" name="form_edit_divisi" required>
                        <option>{{ $memberData->member_division }}</option>
                        <option>Programmer</option>
                        <option>Artist</option>
                        <option>Designer</option>
                    </select>
                    </div>
        
                    <hr>
        
                    <!-- Link Sosial Media (Optional) -->
                    <div class="form-group">
                    <label for="">Link (Instagram)</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                        <input type="url" class="form-control input-lg" name="form_edit_ig" 
                        value="{{ $memberData->member_ig }}"
                        placeholder="Link Profil Instagram">
                    </div>
                    </div>
        
                    <div class="form-group">
                    <label for="">Link (Twitter)</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                        <input type="url" class="form-control input-lg" name="form_edit_twitter" 
                        value="{{ $memberData->member_sosmed3 }}"
                        placeholder="Link Profil Linkedin">
                    </div>
                    </div>
        
                    <div class="form-group">
                    <label for="">Link (Facebook)</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-facebook-f"></i></span>
                        <input type="url" class="form-control input-lg" name="form_edit_fb" 
                        value="{{ $memberData->member_fb }}"
                        placeholder="Link Profil Facebook">
                    </div>
                    </div>
                    <!-- End Sosial Media -->
        
                    <hr>
        
                    <div class="form-group">
                        <label for="">Foto Profil</label>
                        <br>
                        @if (isset($memberData->member_photo))
                            
                            <img class="img-kecil" src="{{ $memberData->member_photo }}" alt="User Image">
                        @else
                            @if ($memberData->member_photo == "Artist")
                                <img class="img-kecil" src="../../img/non-projek/logo-artist.png" alt="">
                            @elseif ($memberData->member_photo == "Designer")
                                <img class="img-kecil" src="../../img/non-projek/logo-designer.png" alt="">
                            @else
                                <img class="img-kecil" src="../../img/non-projek/logo-programmer.png" alt="">
                            @endif
                        @endif
                        <p class="help-block">
                            Masukkan Link foto, max.(500px X 500px)
                        </p>
                        <input class="form-control input-lg " type="file" name="form_edit_foto" value="{{ $memberData->member_photo }}">
                        <p class="help-block">
                            Gunakan Foto Background Putih + Pakai Jaket Raion
                        </p>
                    </div>
                    
            {{-- Kirimkan Method PUT (hidden) jika ingin Update --}}
            <input type="hidden" name="_method" value="PUT">

            </div>
            <!-- /.box-body -->
    
            <div class="box-footer">

                <button type="submit" class="btn btn-primary">
                    SIMPAN
                </button>

                <a type="button" class="btn btn-warning" 
                    href="{{ url('/') }}/member/biodata/lihat">Batal
                </a>
                
            </div>
            <!-- /.box-footer -->

        </form>
        <!-- /.form-Edit -->
            
        {{-- @endforeach --}}
            
        
    </div>
    <!-- /.box --> 
                      
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