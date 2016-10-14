		{!! Form::open(['url' => $url, 'method' => $method, 'files' => true])!!}

		<div class="form-group">
			{{Form::text('titulo',$product->titulo,['class' => 'form-control','placeholder'=>'Nombre del Product...'])}}
		</div>

		<div class="form-group">
			{{Form::text('descripcion',$product->descripcion,['class' => 'form-control','placeholder'=>'Descripcion del Product...'])}}
		</div>

		<div class="form-group">
			{{Form::number('precio',$product->precio,['class' => 'form-control','placeholder'=>'Precio de Venta...'])}}
		</div class="form-group">
			{{Form::file('cover')}}
		<div>
			
		</div>


		<div class="form-group text-right">
			<a href="{{url('/products')}}">Regresar al listado de productos</a>
			<input type="submit" value="Enviar" class="btn btn-success" />
		</div>

		{!! Form::close()!!}
	