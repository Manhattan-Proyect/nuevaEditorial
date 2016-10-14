<div class="card product text-left ">
		@if(Auth::check() && Auth::user()->permiso_id <= 1)
		<div class="absolute actions">
			<a href="{{url("/products/$product->id/edit")}}">Editar</a>
						@include('products/delete',['product'=>$product])		
		</div>
		@endif
		<h1>{{$product->titulo}}</h1>
		<div class="row">
			<div class="col-sm-6 col-xs-12">
			@if($product->extension)
				<img src="{{url('/products/image/'.$product->id.'.'.$product->extension)}}" class="product-avatar">
			@endif
			</div>
				<div class="col-sm-6 col-xs-12">
					<p>
					<strong>Descripción</strong>
					</p>
					<p>
						{{$product->descripcion}}
					</p>

					<p>
						@include("in_shopping_carts.form",["product" => $product])
					</p>
						<div class="row">
								Precio
						</div>
						<div class="row">
							{{"$ ".$product->precio}}
						</div>
				</div>
			
		</div>
</div>