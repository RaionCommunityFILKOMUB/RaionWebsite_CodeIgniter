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
    
    @if ($content_title == "Daftar Program Kerja")
    <div class="box box-primary">

        <div class="box-header">
            <a class="btn btn-social btn-success" 
                href="{{ url('/') }}/admin/proker/tambah_proker">
                <i class="fa fa-plus-square"></i>
                Tambah proker
            </a>
        </div>

        <div class="box-body">
            <table class="table table-bordered table-striped dataTable" role="grid">
                <thead>
                    <tr role="row">
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Kategori</th>
                        <th>Status Publish</th>
                        <th>CRUD</th>
                    </tr>
                </thead>
                
                <tbody>
                    {{-- Menampilkan semua Anggota ke dalam Tabel --}}
                    @foreach ($prokers as $proker)
                        <tr role="row" class="odd">
                            <td> {{ $proker->proker_title }} </td>
                            <td> {{ $proker->proker_date }} </td>
                            <td> {{ $proker->proker_category }} </td>
                            <td> 
                                @if ( $proker->proker_status == "Published" )
                                    <small class="label bg-green">{{ $proker->proker_status }}</small>
                                @elseif ( $proker->proker_status == "Draft" )
                                    <small class="label bg-yellow">{{ $proker->proker_status }}</small>
                                @else
                                    <small class="label bg-red">{{ $proker->proker_status }}</small>
                                @endif    
                            </td>
                            <td>
                                {{-- Edit proker --}}
                                <a class="btn btn-primary" 
                                    href="{{ url('/') }}/admin/proker/edit/{{ $proker->proker_id }}">
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

    <div class="box box-primary">

        <div class="box-header">

        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped dataTable" role="grid">
                <thead>
                    <tr role="row">
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Kategori</th>
                        <th>Status Publish</th>
                        <th>CRUD</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Menampilkan semua Anggota ke dalam Tabel --}}
                    @foreach ($prokers as $proker)
                        
                        <tr role="row" class="odd">
                            <td> {{ $proker->proker_title }} </td>
                            <td> {{ $proker->proker_date }} </td>
                            <td> {{ $proker->proker_category }} </td>
                            <td> 
                                 @if ( $proker->proker_status == "Published" )
                                    <small class="label bg-green">{{ $proker->proker_status }}</small>
                                @elseif ( $proker->proker_category == "Draft" )
                                    <small class="label bg-yellow">{{ $proker->proker_status }}</small>
                                @elseif ( $proker->proker_category == "Blocked" )
                                    <small class="label bg-red">{{ $proker->proker_status }}</small>
                                @else
                                    <small class="label bg-blue">{{ $proker->proker_status }}</small>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary" 
                                href="{{ url('/') }}/admin/anggota/edit/{{ $proker->proker_id }}">Lihat</a>
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
            if (menuParameter == "Daftar Program Kerja") {
                $('#menu_proker').addClass(" active");
                $('#menu_proker_internal_eksternal').addClass("active");
            }

            // Data Tables
            $('.dataTable').DataTable();
        });
    </script>
@endsection