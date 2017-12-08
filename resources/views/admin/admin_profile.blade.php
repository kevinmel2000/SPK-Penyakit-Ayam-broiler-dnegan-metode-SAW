@extends('master.layout')

@section('title')
        Halaman Admin
@endsection
@include('partials.header')
@section('content')

@include('partials.notif')
<div class="page-header">
  <h1>Sistem Pendukung Keputusan untuk Diagnosa Penyakit Ayam Ternak <small>Silahkan pilih menu</small></h1>
</div>
<a href="{{route('admin.tambah_diagnosa')}}" type="button" class="btn btn-primary btn-lg btn-block">Tambah Diagnosa</a>
<a href="{{route('admin.histori')}}" type="button" class="btn btn-primary btn-lg btn-block">Histori Diagnosa Semua User</a>
<a href="{{route('admin.knowledge')}}" type="button" class="btn btn-primary btn-lg btn-block">Knowledge Base</a>
@endsection