@extends('master.layout')

@section('title')
        Hasil Diagnosa
@endsection
@include('partials.header')
@section('content')

<hr>
<a href="{{route('admin.profile')}}" type="button" class="btn btn-primary ">Kembali ke Halaman Utama</a>
<div class="row">
   <div class="col-md-12"><br></div>
   <div class="col-md-12"><br></div>
 
   	<h3><span class="label label-default">
   <b>Bobot :
      ( {{$hasil->B0}} ,
       {{$hasil->B1}} ,
       {{$hasil->B2}} ,
       {{$hasil->B3}} ,
       {{$hasil->B4}} ,
       {{$hasil->B5}} ,
       {{$hasil->B6}} ,
       {{$hasil->B7}} )</b></span></h3>
      
</div>



  	<div class="row panel panel-default">
	  <div class="panel-heading">Matriks Rating Kecocokan</div>
	  <div class="panel-body">
	  	<hr>
		   <table id="example" class="table table-hover">
				<thead>
					<tr>
						<th>Alternatif (v) </th>
						<th>C1 </th>
						<th>C2 </th>
						<th>C3 </th>
						<th>C4 </th>
						<th>C5 </th>
						<th>C6 </th>
						<th>C7 </th>
						<th>C8 </th>
					</tr>
				</thead>
				<tbody>
					@foreach($alternatif as $a)
					<tr>
						<td>{{$a->name}}</td>
						<td>{{$a->C0}}</td>
						<td>{{$a->C1}}</td>
						<td>{{$a->C2}}</td>
						<td>{{$a->C3}}</td>
						<td>{{$a->C4}}</td>
						<td>{{$a->C5}}</td>
						<td>{{$a->C6}}</td>
						<td>{{$a->C7}}</td>
					</tr>
					@endforeach
					<tr>
						<td><b>Max</b></td>
						<td><b>5</b></td>
						<td><b>5</b></td>
						<td><b>5</b></td>
						<td><b>5</b></td>
						<td><b>5</b></td>					
						<td><b>5</b></td>
						<td><b>5</b></td>
						<td><b>5</b></td>
					</tr>	
				</tbody>
		  </table>
	  </div>

	</div>
  <hr>
		  <h2>Proses Perankingan</h2>
		  @foreach($ranking as $r)	
		   {{$r->hasil}} :
		   		@foreach($alternatif as $c)
		   		    @if($r->id_knowledge==$c->id)
		   		    {{$c->name}}
		   		    @endif
		   		@endforeach
		   		<br>
		  @endforeach
  <hr>
  <h2>Hasil Diagnosa</h2>
<div class="well well-lg">
     <h3 ><u>{{$penyakit}}</u></h3>
	 <p>Penanggulangan Penyakit {{$penyakit}} dapat ditanggulangi dengan cara : </p>
	{{$penanggulangan}}
</div>

@endsection