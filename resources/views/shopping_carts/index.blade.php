@extends("layouts.app")
@section('content')
<div class="big-padding text-center blue-grey white-text">
<h1>Tu carrito de compras</h1>
</div>

<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Producto</td>
				<td>Precio</td>
				<td>Accion</td>
			</tr>
		</thead>
		<tbody>
			@for($i=0;$i < sizeof($products_in_shopping_cart);$i++)
				<tr>
					<td>{{$products[$i]->titulo}}</td>
					<td class="text-right">$ {{$products[$i]->precio}}</td>
					<td>
						@include('in_shopping_carts.delete',['id'=>$products_in_shopping_cart[$i]->id])
					</td>
			@endfor
				</tr>
			<tr>
				<td>Total</td>
				<td class="text-right">$ {{$total}}</td>
			</tr>
			
		</tbody>
	</table>
	<div class="text-right">
		@include("shopping_carts/comprar",['shopping_cart_id'=>$shopping_cart_id])	
	</div>
	
</div>
@endsection