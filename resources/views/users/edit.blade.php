@extends("layouts.app");

@section("content")

	<div class="container white">
		<h1>Editar Usuario</h1>
	

		@include('users.form',['user' => $user,'url'=>'users/'.$user->id,'method'=>'PUT'])
	</div>

@endsection