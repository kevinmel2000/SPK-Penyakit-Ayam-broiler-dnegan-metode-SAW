@extends('master.layout')

@section('title')
        Tambah Diagnosa
@endsection
@include('partials.header')
@section('content')

<hr>
<a href="{{route('user.profile')}}" type="button" class="btn btn-primary ">Kembali ke Halaman Utama</a>
<div class="row">
   <div class="col-md-12"><br></div>
   <div class="col-md-12"><br></div>

</div>
<div class="panel panel-default">
  <div class="panel-heading">Tambah Diagnosa</div>

  <div class="panel-body">
  	<form action="{{route('user.tambah_diagnosa')}}" method="post">
		  <div class="form-group">

		  	<label>Nafsu Makan:  </label>
		  	 <select class="form-control" name="nafsu_makan">
				  <option value="1">Sehat</option>
				  <option value="3">Rendah</option>
				  <option value="5">Tinggi</option>
		  	 </select>
		  </div>
		   <div class="form-group">

		  	<label>Minum:  </label>
		  	 <select class="form-control" name="minum">
				  <option value="1">Sehat</option>
				  <option value="3">Rendah</option>
				  <option value="5">Tinggi</option>
		  	 </select>
		  </div>

		   <div class="form-group">
		  	<label>Nafas:  </label>
		  	 <select class="form-control" name="nafas">
				  <option value="1">Sehat</option>
				  <option value="3">Rendah</option>
				  <option value="5">Tinggi</option>
		  	 </select>
		  </div>

		   <div class="form-group">
		  	<label>Diare:  </label>
		  	 <select class="form-control" name="diare">
				  <option value="1">Sehat</option>
				  <option value="3">Rendah</option>
				  <option value="5">Tinggi</option>
		  	 </select>
		  </div>

		  <div class="form-group">
		  	<label>Bengkak Mata:  </label>
		  	 <select class="form-control" name="bengkak_mata">
				  <option value="1">Sehat</option>
				  <option value="3">Rendah</option>
				  <option value="5">Tinggi</option>
		  	 </select>
		  </div>


		   <div class="form-group">
		  	<label>Lendir:  </label>
		  	 <select class="form-control" name="lendir">
				  <option value="1">Sehat</option>
				  <option value="3">Rendah</option>
				  <option value="5">Tinggi</option>
		  	 </select>
		  </div>

		   <div class="form-group">
		  	<label>Kejang:  </label>
		  	 <select class="form-control" name="kejang">
				  <option value="1">Sehat</option>
				  <option value="3">Rendah</option>
				  <option value="5">Tinggi</option>
		  	 </select>
		  </div>

		   <div class="form-group">
		  	<label>Suhu Tubuh:  </label>
		  	 <select class="form-control" name="suhu_tubuh">
				  <option value="1">Sehat</option>
				  <option value="3">Rendah</option>
				  <option value="5">Tinggi</option>
		  	 </select>
		  </div>


		  <button type="submit" class="btn btn-default">Simpan</button>
		  {{ csrf_field() }}
 </form>
   
  </div>
</div>


@endsection