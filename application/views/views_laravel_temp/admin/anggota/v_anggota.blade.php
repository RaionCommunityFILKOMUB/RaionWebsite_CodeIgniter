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
    
    @if ($content_title == "Anggota Aktif")
    <div class="box box-primary">

        <div class="box-header">
            <a class="btn btn-social btn-success" 
                href="{{ url('/') }}/admin/anggota/tambah_anggota">
                <i class="fa fa-plus-square"></i>
                Tambah Anggota
            </a>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped dataTable" role="grid">
                <thead>
                    <tr role="row">
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Divisi</th>
                        <th>Prodi</th>
                        <th>Angkatan</th>
                        <th>CRUD</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Menampilkan semua Anggota ke dalam Tabel --}}
                    @foreach ($anggotas as $member)
                        <tr role="row" class="odd">
                            <td> {{ $member->member_id }} </td>
                            <td> {{ $member->member_name }} </td>
                            <td>
                                @if ( $member->member_division == "Designer" )
                                    <small class="label bg-green">{{ $member->member_division }}</small>
                                @elseif ( $member->member_division == "Artist" )
                                    <small class="label bg-yellow">{{ $member->member_division }}</small>
                                @elseif ( $member->member_division == "Programmer" )
                                    <small class="label bg-red">{{ $member->member_division }}</small>
                                @else
                                    <small class="label bg-blue">{{ $member->member_division }}</small>
                                @endif
                            </td>
                            <td> {{ $member->member_prodi }} </td>
                            <td> {{ $member->member_angkatan }} </td>
                            <td>
                                {{-- Edit Data Anggota --}}
                                <a class="btn btn-primary" 
                                href="{{ url('/') }}/admin/anggota/edit/{{ $member->member_id }}">Lihat</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>

                </tfoot>

            </table>
        </div>
        <div class="box-footer">

        </div>

    </div>

        
    
    @else

    <div class="box box-primary">

        <div class="box-header">

        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped dataTable" role="grid">
                <thead>
                    <tr role="row">
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Divisi</th>
                        <th>Angkatan</th>
                        <th>CRUD</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Menampilkan semua Anggota ke dalam Tabel --}}
                    @foreach ($anggotas as $member)
                        
                        <tr role="row" class="odd">
                            <td> {{ $member->member_id }} </td>
                            <td> {{ $member->member_name }} </td>
                            <td> {{ $member->member_jabatan }} </td>
                            <td> 
                                @if ( $member->member_division == "Designer" )
                                    <small class="label bg-green">{{ $member->member_division }}</small>
                                @elseif ( $member->member_division == "Artist" )
                                    <small class="label bg-yellow">{{ $member->member_division }}</small>
                                @elseif ( $member->member_division == "Programmer" )
                                    <small class="label bg-red">{{ $member->member_division }}</small>
                                @else
                                    <small class="label bg-blue">{{ $member->member_division }}</small>
                                @endif
                            </td>
                            <td> {{ $member->member_angkatan }} </td>
                            <td>
                                <a class="btn btn-primary" 
                                href="{{ url('/') }}/admin/anggota/edit/{{ $member->member_id }}">Lihat</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>

                </tfoot>

            </table>
        </div>
        <div class="box-footer">

        </div>

    </div>


        
    
    @endif
   
@endsection

@section('custom-script-section')
    <script>
        $(document).ready(function () {

            var menuParameter = "@yield('content-title')" ;
            
            // Left-Menu parameter activation
            if (menuParameter == "Anggota Aktif") {
                $('#menu_anggota').addClass(" active");
                $('#menu_anggota_aktif').addClass("active");
            } else {
                $('#menu_anggota').addClass(" active");
                $('#menu_anggota_pengurus').addClass("active");
            }

            // Data Tables
            $('.dataTable').DataTable();
        });
    </script>
@endsection