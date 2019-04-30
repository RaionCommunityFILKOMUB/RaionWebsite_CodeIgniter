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
    
    @if ($content_title == "Daftar Portofolio")
    <div class="box box-primary">

        <div class="box-header">
            <a class="btn btn-social btn-success" 
                href="{{ url('/') }}/admin/portofolio/tambah_portofolio">
                <i class="fa fa-plus-square"></i>
                Tambah Portofolio
            </a>
        </div>
        
        <div class="box-body">
            <table class="table table-bordered table-striped dataTable" role="grid">
                <thead>
                    <tr role="row">
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Klien</th>
                        <th>Manager Tim</th>
                        <th>CRUD</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Menampilkan semua Anggota ke dalam Tabel --}}
                    @foreach ($portofolios as $portofolio)
                        <tr role="row" class="odd">
                            <td> {{ $portofolio->portofolio_title }} </td>
                            <td>
                                @if ( $portofolio->portofolio_category == "Aplikasi" )
                                    <small class="label bg-green">{{ $portofolio->portofolio_category }}</small>
                                @elseif ( $portofolio->portofolio_category == "Game" )
                                    <small class="label bg-yellow">{{ $portofolio->portofolio_category }}</small>
                                @else
                                    <small class="label bg-blue">{{ $portofolio->portofolio_category }}</small>
                                @endif
                            </td>
                            <td> {{ $portofolio->portofolio_date_start }} </td>
                            <td> {{ $portofolio->client_name }} </td>
                            <td> {{ $portofolio->member_name }} </td>
                            <td>
                                {{-- Edit Portofolio --}}
                                <a class="btn btn-primary" 
                                    href="{{ url('/') }}/admin/portofolio/edit/{{ $portofolio->portofolio_id }}">
                                    Lihat
                                </a>
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

    @endif
   
@endsection

@section('custom-script-section')
    <script>
        $(document).ready(function () {

            var menuParameter = "@yield('content-title')" ;
            
            // Left-Menu parameter activation
            if (menuParameter == "Daftar Portofolio") {
                $('#menu_portofolio').addClass(" active");
                $('#menu_portofolio_raion_produktif').addClass("active");
            }

            // Data Tables
            $('.dataTable').DataTable();
        });
    </script>
@endsection