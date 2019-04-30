<!DOCTYPE html>
{{-- Set Judul Halaman untuk tab Browser --}}
@section ('page-title', 'Member Raion')

{{-- load Layout --}}
{{-- Urutan : Header - Navbar - Body - Footer - Script --}}
@extends('member.member_dashboard_layout')

{{-- Set Judul Konten --}}
@section('content-title', 'Selamat Datang '.$memberNama)

{{-- Set Nama Member --}}
@section('member-name', $memberNama)

{{-- Set Foto Member --}}
@section('member-photo', $memberFoto)

{{-- Content untuk di Body --}}
@section('member-body-content')

@endsection

{{-- Custom Content Script --}}
@section('custom-script-section')
    
@endsection