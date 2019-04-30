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

    @if ($content_title == "Tambah Program Kerja")
        
        <!-- Form Tambah proker -->
        <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Tambah Program Kerja</h3>
            </div>
            <!-- /.box-header -->
                
            <!-- form start -->
            <form role="form" action="/admin/proker/insert" method="POST">
        
                <div class="box-body">
        
                    <div class="form-group">
                    <label for="">Judul <code class="">(*)</code> </label>
                    <input type="text" class="form-control input-lg" 
                        name="form_tambah_title" 
                        placeholder="Nama Program Kerja" required>
                    </div>
        
                    <!-- Kategori (Dropdown) -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kategori <code class="">(*)</code> </label>
                            <select class="form-control" name="form_tambah_kategori" required>
                                <option>Internal</option>
                                <option>Eksternal</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Tanggal Proker -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal : <code class="">(*)</code></label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" class="form-control pull-left" name="form_tambah_date" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi Singkat : </label>
                        <textarea class="form-control input-lg" name="form_tambah_deskripsi_singkat" 
                            id="form-deskripsi-singkat" cols="30" rows="2" maxlength="50">
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi Lengkap :<code class="">(*)</code> </label>
                        <textarea class="form-control input-lg" name="form_tambah_deskripsi" 
                            id="form-tambah-deskripsi" cols="30" rows="20"
                            maxlength="1000" required>
                        </textarea>
                    </div>

                    <!-- Status Publish -->
                    <div class="form-group">
                        <label>Status Publish Proker : <code class="">(*)</code></label>
                        <select class="form-control input-lg select2" name="form_tambah_status" required>
                            <option>Published</option>
                            <option>Draft</option>
                            <option>Blocked</option>
                        </select>
                    </div>
        
                    <hr>
                    
                    {{-- Foto untuk di sampul --}}
                    <div class="form-group">
                        <label for="">Foto Projek : </label>
                        <input class="form-control input-lg" type="url" name="form_tambah_img_thumb" 
                            placeholder="Contoh : http://pexels/2020.jpg" required>
                        <p class="help-block">
                            Foto projek disimpan pada Cloud : 
                            <a href="http:///drive.google.com" target="_blank">
                                <b>http://drive.google.com</b>
                            </a>
                            Copy-Paste link Foto tersebut di sini
                        </p>
                    </div>
                    
                </div>
                <!-- /.box-body -->
        
                <div class="box-footer">
                    <button type="submit" id="form-btn-sumbit" class="btn btn-primary">Tambah proker</button>
                    <a type="button" class="btn btn-warning">Batal</a>
                </div>

                {{-- Belum paham ini buat apa fungsinya --}}
                {{ csrf_field() }}
                
            </form>
                
        </div>
        <!-- /.box --> 

    @elseif ($content_title == "Edit Program Kerja")
        
        <!-- Form Tambah proker -->
        <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Edit Program Kerja</h3>
            </div>
            <!-- /.box-header -->
            
        @foreach ($prokers as $proker)

            <!-- form start -->
            <form role="form" action="/admin/proker/update/{{ $proker->proker_id }}" method="POST">
        
                <div class="box-body">
                    
                    <div class="form-group">
                        <label for="">ID Proker</label>
                        <input type="text" class="form-control" name="form_edit_id"
                            value="{{ $proker->proker_id }}"
                            disabled>
                    </div>

                    <div class="form-group">
                        <label for="">Judul <code class="">(*)</code> </label>
                        <input type="text" class="form-control input-lg" 
                            name="form_edit_title" 
                            placeholder="Nama Program Kerja"
                            value="{{ $proker->proker_title }}"
                            required>
                    </div>
        
                    <!-- Kategori (Dropdown) -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kategori <code class="">(*)</code> </label>
                            <select class="form-control input-lg" name="form_edit_kategori" required>
                                <option>{{ $proker->proker_category }}</option>
                                <option>Internal</option>
                                <option>Eksternal</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Tanggal Proker -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal : <code class="">(*)</code></label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" class="form-control pull-left" name="form_edit_date" 
                                value="{{ $proker->proker_date }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi Singkat : </label>
                        <textarea class="form-control input-lg" name="form_edit_deskripsi_singkat" 
                            id="form-deskripsi-singkat" cols="30" rows="5" 
                            placeholder="Deskripsi singkat sebagai tampilan di awal (max. 200 huruf)">
                            {{ $proker->proker_description_singkat }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi Lengkap :<code class="">(*)</code> </label>
                        <textarea class="form-control input-lg" name="form_edit_deskripsi" 
                            id="form-edit-deskripsi" cols="30" rows="20" required>
                            {{ $proker->proker_description }}
                        </textarea>
                    </div>

                    <!-- Status Publish -->
                    <div class="form-group">
                        <label>Status Publish Proker : <code class="">(*)</code></label>
                        <select class="form-control input-lg select2" name="form_edit_status" required>
                            <option>Published</option>
                            <option>Draft</option>
                            <option>Blocked</option>
                        </select>
                    </div>
        
                    <hr>
                    
                    {{-- Foto untuk di sampul --}}
                    <div class="form-group">
                        <label for="">Foto Projek : </label>
                        <input class="form-control input-lg" type="url" name="form_edit_img_thumb" 
                        placeholder="Contoh : http://pexels/2020.jpg" required
                        value="{{ $proker->proker_img_thumb_id }}">
                        <p class="help-block">
                            Foto projek disimpan pada Cloud : 
                            <a href="http:///drive.google.com" target="_blank">
                                <b>http://drive.google.com</b>
                            </a>
                            Copy-Paste link Foto tersebut di sini
                        </p>
                    </div>
                    
                </div>
                <!-- /.box-body -->

                {{-- Ubah method POST jadi Method PUT (untuk UPDATE database butuh method PUT) --}}
                <input type="hidden" name="_method" value="PUT">
        
                <div class="box-footer">
                    <button type="submit" id="form-btn-sumbit" class="btn btn-primary">Perbarui proker</button>
                    <a type="button" class="btn btn-warning">Batal</a>
                </div>

                {{-- Belum paham ini buat apa fungsinya --}}
                {{ csrf_field() }}
                
            </form>
            
        </div>
        <!-- /.box --> 
    
        <div class="box-footer">

        <form action="/admin/proker/delete/{{ $proker->proker_id }}" method="POST">
                
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
        <!-- /.from beginning of EDit section -->


    </div>
    <!-- /.box --> 
    @else

    @endif
                      
@endsection

@section('custom-script-section')
    <script>

        var contentTitle = "@yield('content-title')" ;
        
        $(document).ready(function () {
            if (contentTitle == "Tambah Program Kerja") {
                CKEDITOR.replace('form-tambah-deskripsi');
            } else {
                CKEDITOR.replace('form-edit-deskripsi');
            }
            
            

        });
    </script>
@endsection