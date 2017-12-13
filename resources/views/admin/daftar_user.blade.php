@extends('master.layout')

@section('title')
        Halaman Daftar User
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
  	<div class="row panel panel-default">
	  <div class="panel-heading">Daftar User</div>
	  <div class="panel-body">
	  	<hr>
		   <table id="example" class="table table-hover">
				<thead>
					<tr>
						<th>ID user</th>
						<th>Nama User </th>
						<th> Tipe</th>
					</tr>
				</thead>
				<tbody>
					@foreach($user as $u)
					<tr>
						<td>{{$u->id}}</td>
						<td>{{$u->name}}</td>
						<td>{{$u->type}}</td>
					</tr>
					@endforeach
				</tbody>
		  </table>
	  </div>
	</div>



@endsection