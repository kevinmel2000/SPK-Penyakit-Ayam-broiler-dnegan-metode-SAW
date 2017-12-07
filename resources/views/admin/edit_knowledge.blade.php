@extends('master.layout')

@section('title')
        Edit KnowledgeBase Penyakit
@endsection
@include('partials.header')
@section('content')

<hr>
<a href="{{route('admin.profile')}}" type="button" class="btn btn-primary ">Kembali ke Halaman Utama</a>
<div class="row">
   <div class="col-md-12"><br></div>
   <div class="col-md-12"><br></div>

</div>
@include('partials.notif')
<div class="panel panel-default">
  <div class="panel-heading">Edit KnowledgeBase Penyakit</div>

  <div class="panel-body">
  	<form action="{{route('admin.tambah_knowledge')}}" method="post">
  		  <div class="form-group">

		  	<label> Nama:  </label>
		  	 <input type="text" class="form-control" id="nama"  value="{{ $knowledge->name}}" name="nama">
		  </div>
		  <div class="form-group">

		  	<label>Nafsu Makan:  </label>
		  	 <select class="form-control" name="nafsu_makan">
				 @if($knowledge->C0==5)
					<option value="1" >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" selected>Tinggi</option>
				 @elseif($knowledge->C0==3)
					<option value="1" >Sehat</option>
					<option value="3" selected>Rendah</option>
					<option value="5" >Tinggi</option>
				 @elseif($knowledge->C0==1)
					<option value="1" selected >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" >Tinggi</option>
				 @endif
		  	 </select>
		  </div>
		   <div class="form-group">

		  	<label>Minum:  </label>
		  	 <select class="form-control" name="minum">
				  @if($knowledge->C1==5)
					<option value="1" >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" selected>Tinggi</option>
				 @elseif($knowledge->C1==3)
					<option value="1" >Sehat</option>
					<option value="3" selected>Rendah</option>
					<option value="5" >Tinggi</option>
				 @elseif($knowledge->C1==1)
					<option value="1" selected >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" >Tinggi</option>
				 @endif
		  	 </select>
		  </div>

		   <div class="form-group">
		  	<label>Nafas:  </label>
		  	 <select class="form-control" name="nafas">
				  @if($knowledge->C2==5)
					<option value="1" >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" selected>Tinggi</option>
				 @elseif($knowledge->C2==3)
					<option value="1" >Sehat</option>
					<option value="3" selected>Rendah</option>
					<option value="5" >Tinggi</option>
				 @elseif($knowledge->C2==1)
					<option value="1" selected >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" >Tinggi</option>
				 @endif
		  	 </select>
		  </div>

		   <div class="form-group">
		  	<label>Diare:  </label>
		  	 <select class="form-control" name="diare">
				  @if($knowledge->C3==5)
					<option value="1" >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" selected>Tinggi</option>
				 @elseif($knowledge->C3==3)
					<option value="1" >Sehat</option>
					<option value="3" selected>Rendah</option>
					<option value="5" >Tinggi</option>
				 @elseif($knowledge->C3==1)
					<option value="1" selected >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" >Tinggi</option>
				 @endif
		  	 </select>
		  </div>

		  <div class="form-group">
		  	<label>Bengkak Mata:  </label>
		  	 <select class="form-control" name="bengkak_mata">
				  @if($knowledge->C4==5)
					<option value="1" >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" selected>Tinggi</option>
				 @elseif($knowledge->C4==3)
					<option value="1" >Sehat</option>
					<option value="3" selected>Rendah</option>
					<option value="5" >Tinggi</option>
				 @elseif($knowledge->C4==1)
					<option value="1" selected >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" >Tinggi</option>
				 @endif
		  	 </select>
		  </div>


		   <div class="form-group">
		  	<label>Lendir:  </label>
		  	 <select class="form-control" name="lendir">
				  @if($knowledge->C5==5)
					<option value="1" >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" selected>Tinggi</option>
				 @elseif($knowledge->C5==3)
					<option value="1" >Sehat</option>
					<option value="3" selected>Rendah</option>
					<option value="5" >Tinggi</option>
				 @elseif($knowledge->C5==1)
					<option value="1" selected >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" >Tinggi</option>
				 @endif
		  	 </select>
		  </div>

		   <div class="form-group">
		  	<label>Kejang:  </label>
		  	 <select class="form-control" name="kejang">
				  @if($knowledge->C6==5)
					<option value="1" >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" selected>Tinggi</option>
				 @elseif($knowledge->C6==3)
					<option value="1" >Sehat</option>
					<option value="3" selected>Rendah</option>
					<option value="5" >Tinggi</option>
				 @elseif($knowledge->C6==1)
					<option value="1" selected >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" >Tinggi</option>
				 @endif
		  	 </select>
		  </div>

		   <div class="form-group">
		  	<label>Suhu Tubuh:  </label>
		  	 <select class="form-control" name="suhu_tubuh">
				  @if($knowledge->C7==5)
					<option value="1" >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" selected>Tinggi</option>
				 @elseif($knowledge->C7==3)
					<option value="1" >Sehat</option>
					<option value="3" selected>Rendah</option>
					<option value="5" >Tinggi</option>
				 @elseif($knowledge->C7==1)
					<option value="1" selected >Sehat</option>
					<option value="3">Rendah</option>
					<option value="5" >Tinggi</option>
				 @endif
		  	 </select>
		  </div>

		   <div class="form-group">
		  	<label>Penanggulangan :  </label>
		  	<textarea class="form-control" rows="3" name="penanggulangan" >{{ $knowledge->Penanggulangan}}</textarea>
		  </div>

		  <button type="submit" class="btn btn-default">Simpan</button>
		  {{ csrf_field() }}
 </form>
   
  </div>
</div>


@endsection