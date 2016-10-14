@extends('layouts.app')
@section('content')
<div class="big-padding text-center blue-grey white-text">
		<h1>Usuarios</h1>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead">
			<tr>
				<td><center>Nombre</center></td>
				<td><center>Mail</center></td>
				<td><center>Permiso</center></td>
			</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
				<tr>
					<td><center>{{$user->name}}</center></td>
					<td><center>{{$user->email}}</center></td>
					<td><center>{{$user->permiso->descripcion}}</center></td>
					<td>
						<a href="{{url('/users/'.$user->id.'/edit')}}">Editar</a>
						@include('users/delete',['user'=>$user])
						
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/users/create')}}" class="btn btn-primary btn-fab"><i class="material-icons">add</i></a>
		
	</div>
@endsection