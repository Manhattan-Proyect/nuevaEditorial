@extends('layouts.app')
@section('content')
<div class="big-padding text-center blue-grey white-text">
		<h1>Permisos</h1>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead">
			<tr>
				<td><center>Nivel</center></td>
				<td><center>Descripcion</center></td>
			</tr>
			</thead>
			<tbody>
				@foreach ($permisos as $permiso)
				<tr>
					<td><center>{{$permiso->nivel}}</center></td>
					<td><center>{{$permiso->descripcion}}</center></td>
					<td>
						<a href="{{url('/permisos/'.$permiso->id.'/edit')}}">Editar</a>
						@include('permisos/delete',['permiso'=>$permiso])
						
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/permisos/create')}}" class="btn btn-primary btn-fab"><i class="material-icons">add</i></a>
		
	</div>
@endsection