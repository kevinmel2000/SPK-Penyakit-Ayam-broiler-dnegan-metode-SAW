@extends('master.layout')

@section('title')
        Halaman Knowledge Base Admin
@endsection
@include('partials.header')
@section('content')
<hr>
<a href="{{route('admin.profile')}}" type="button" class="btn btn-primary ">Kembali ke Halaman Utama</a>
<a href="{{route('admin.tambah_knowledge')}}" type="button" class="btn btn-info pull-right ">Tambah Knowledge Base</a>
<div class="row">
   <div class="col-md-12"><br></div>
   <div class="col-md-12"><br></div>

</div>
@include('partials.notif')
  	<div class="row panel panel-default">
	  <div class="panel-heading">Halaman Knowledge Base Admin</div>
	  <div class="panel-body">
	  	<hr>
		   <table id="example" class="table table-hover">
				<thead>
					<tr>
						<th>Nama Penyakit</th>
						<th>Nafsu Makan</th>
						<th>Minum</th>
						<th>Nafas</th>
						<th>Diare</th>
						<th>Bengkak Mata</th>
						<th>Lendir</th>
						<th>Kejang</th>
						<th>Suhu Tubuh</th>
						<th>Edit</th>
						<th>Hapus</th>
					</tr>
				</thead>
				<tbody>
					@foreach($knowledge as $K)
					<tr>
						<td>
							{{$K->name}}
						</td>
						<td>
							@if($K->C0==1)
							Sehat
							@elseif($K->C0==3)
							Rendah
							@elseif($K->C0==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($K->C1==1)
							Sehat
							@elseif($K->C1==3)
							Rendah
							@elseif($K->C1==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($K->C2==1)
							Sehat
							@elseif($K->C2==3)
							Rendah
							@elseif($K->C2==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($K->C3==1)
							Sehat
							@elseif($K->C3==3)
							Rendah
							@elseif($K->C3==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($K->C4==1)
							Sehat
							@elseif($K->C4==3)
							Rendah
							@elseif($K->C4==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($K->C5==1)
							Sehat
							@elseif($K->C5==3)
							Rendah
							@elseif($K->C5==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($K->C6==1)
							Sehat
							@elseif($K->C6==3)
							Rendah
							@elseif($K->C6==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($K->C7==1)
							Sehat
							@elseif($K->C7==3)
							Rendah
							@elseif($K->C7==5)
							Tinggi
							@endif
						</td>
						<td><a href="{{route('admin.edit',['id_knowlegde' => $K->id])}}" type="button" class="btn btn-primary"> edit </td>
						<td><a href="{{route('admin.delete',['id_knowlegde' => $K->id])}}" type="button" class="btn btn-danger"> hapus</td>
					</tr>
			     	@endforeach		
				</tbody>
		  </table>
	  </div>
	</div>



@endsection