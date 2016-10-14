@extends("layouts.app");

@section("content")

	<div class="container white">
		<center><h1>Nuevo Permiso</h1></center>
	
		@include('permisos.form',['permiso' => $permiso,'url'=>'/permisos','method'=>'POST'])
	</div>

@endsection