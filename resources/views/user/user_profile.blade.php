@extends('master.layout')

@section('title')
        Halaman User
@endsection
@include('partials.header')
@section('content')

<div class="page-header">
  <h1>Sistem Pendukung Keputusan untuk Diagnosa Penyakit Ayam Ternak <small>Silahkan pilih menu</small></h1>
</div>
<a href="{{route('user.tambah_diagnosa')}}" type="button" class="btn btn-primary btn-lg btn-block">Tambah Diagnosa</a>
<a href="{{route('user.histori_diagnosa')}}" type="button" class="btn btn-primary btn-lg btn-block">Histori Diagnosa</a>
<a href="{{route('user.knowledge')}}" type="button" class="btn btn-primary btn-lg btn-block">Knowledge Base</a>
@endsection