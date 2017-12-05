@extends('master.layout')

@section('title')
        Hasil Diagnosa
@endsection
@include('partials.header')
@section('content')
Hasil Diagnosa

{{$hasil->Hasil}}
{{$penyakit}}
{{$penanggulangan}}


@endsection