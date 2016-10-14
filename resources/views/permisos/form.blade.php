		{!! Form::open(['url' => $url, 'method' => $method, 'files' => true])!!}

		<div class="form-group">
			{{Form::text('nivel',$permiso->nivel,['class' => 'form-control','placeholder'=>'Nivel de Permiso...'])}}
		</div>
		<div class="form-group">
			{{Form::text('descripcion',$permiso->descripcion,['class' => 'form-control','placeholder'=>'Descripcion...'])}}
		</div>

		<div class="form-group text-right">
			<a href="{{url('/permisos')}}">Regresar al listado de permisos</a>
			<input type="submit" value="Enviar" class="btn btn-success" />
		</div>

		{!! Form::close()!!}
	