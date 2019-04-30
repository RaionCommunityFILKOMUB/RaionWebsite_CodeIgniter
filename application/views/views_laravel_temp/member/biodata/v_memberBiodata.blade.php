<!DOCTYPE html>
{{-- Set Judul Halaman untuk tab Browser --}}
@section ('page-title', 'Member Raion')

{{-- load Layout --}}
{{-- Urutan : Header - Navbar - Body - Footer - Script --}}
@extends('member.member_dashboard')

{{-- Set Judul Konten --}}
@section('content-title', $content_title)

{{-- Content untuk di Body --}}
@section('member-body-content')

    <div class="box box-primary">

        <div class="box-header">
            <b>Biodata Anggota Raion : </b> 
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped table-responsive">

                    <tr>
                        <td>NIM  </td> <td>:</td> <td>{{ session('memberNIMSessionGlobalPolos') }}</td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap  </td> <td>:</td><td>{{ $memberData->member_name }}</td>
                    </tr>
                    <tr>
                        <td>Angkatan  </td> <td>:</td><td>{{ $memberData->member_angkatan }}</td>
                    </tr>
                    <tr>
                        <td>Program Studi  </td><td>:</td> <td>{{ $memberData->member_prodi }}</td>
                    </tr>
                    <tr>
                        <td>Divisi  </td> <td>:</td><td>{{ $memberData->member_division }}</td>
                    </tr>
                    <tr>
                        <td>Jabatan  </td> <td>:</td><td>{{ $memberData->member_jabatan }}</td>
                    </tr>
                    <tr>
                        <td>Link Instagram  </td> <td>:</td><td> <a target="_blank" href="{{ $memberData->member_ig }}">{{ $memberData->member_ig }}</a> </td>
                    </tr>
                    <tr>
                        <td>Link Facebook  </td><td>:</td> <td><a target="_blank" href="{{ $memberData->member_fb }}">{{ $memberData->member_fb }}</a></td>
                    </tr>
                    <tr>
                        <td>Link Linkedin  </td> <td>:</td><td><a target="_blank" href="{{ $memberData->member_sosmed3 }}">{{ $memberData->member_sosmed3 }}</a></td>
                    </tr>
                    <tr>
                        <td>Foto  </td> 
                        <td>:</td>
                        <td>
                            @if (isset($memberData->member_photo))
                                
                                <img class="img-kecil" src="{{ $memberData->member_photo }}" alt="User Image">
                            @else
                                @if ($memberData->member_photo == "Artist")
                                    <img  class="img-kecil" src="../../img/non-projek/logo-artist.png">
                                @elseif ($memberData->member_photo == "Designer")
                                    <img class="img-kecil"  src="../../img/non-projek/logo-designer.png">
                                @else
                                    <img class="img-kecil" src="../../img/non-projek/logo-programmer.png">
                                @endif
                            @endif
                        </td>
                    </tr>

                </table>
            </div>
            
        </div>
        <div class="box-footer">
            <a class="btn btn-primary" 
                href="{{ url('/') }}/member/biodata/edit">Edit
            </a>
        </div>
   
@endsection

@section('custom-script-section')
    <script>
        $(document).ready(function () {

            var menuParameter = "@yield('content-title')" ;
            
            // Left-Menu parameter activation
            if (menuParameter == "Biodata Anggota") {
                $('#menu_anggota').addClass(" active");
                $('#menu_member_biodata').addClass("active");
            }

            // Data Tables
            // $('.dataTable').DataTable();
        });
    </script>
@endsection