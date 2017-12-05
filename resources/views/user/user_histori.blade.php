@extends('master.layout')

@section('title')
        Halaman Histori Diagnosa
@endsection
@include('partials.header')
@section('content')
<hr>
<a href="{{route('user.profile')}}" type="button" class="btn btn-primary ">Kembali ke Halaman Utama</a>
<div class="row">
   <div class="col-md-12"><br></div>
   <div class="col-md-12"><br></div>

</div>
  	<div class="row panel panel-default">
	  <div class="panel-heading">Histori Diagnosa Gejala</div>
	  <div class="panel-body">
	  	<hr>
		   <table id="example" class="table table-hover">
				<thead>
					<tr>
						<th>Nafsu Makan</th>
						<th>Minum</th>
						<th>Nafas</th>
						<th>Diare</th>
						<th>Bengkak Mata</th>
						<th>Lendir</th>
						<th>Kejang</th>
						<th>Suhu Tubuh</th>
						<th>Lihat Hasil</th>
					</tr>
				</thead>
				<tbody>
					@foreach($bobot as $b)
					<tr>
						<td>
							@if($b->B0==1)
							Sehat
							@elseif($b->B0==3)
							Rendah
							@elseif($b->B0==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($b->B1==1)
							Sehat
							@elseif($b->B1==3)
							Rendah
							@elseif($b->B1==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($b->B2==1)
							Sehat
							@elseif($b->B2==3)
							Rendah
							@elseif($b->B2==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($b->B3==1)
							Sehat
							@elseif($b->B3==3)
							Rendah
							@elseif($b->B3==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($b->B4==1)
							Sehat
							@elseif($b->B4==3)
							Rendah
							@elseif($b->B4==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($b->B5==1)
							Sehat
							@elseif($b->B5==3)
							Rendah
							@elseif($b->B5==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($b->B6==1)
							Sehat
							@elseif($b->B6==3)
							Rendah
							@elseif($b->B6==5)
							Tinggi
							@endif
						</td>
						<td>
							@if($b->B7==1)
							Sehat
							@elseif($b->B7==3)
							Rendah
							@elseif($b->B7==5)
							Tinggi
							@endif
						</td>
						<td>
							<a href="{{route('user.hasil',['id_diagnosa' => $b->id] )}}" type="button" class="btn btn-primary">Detail</a>
						</td>

					</tr>
			     	@endforeach		
				</tbody>
		  </table>
	  </div>
	</div>



@endsection