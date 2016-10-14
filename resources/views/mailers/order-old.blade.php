<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Hola!</h1>
	<p>Te enviamos los datos de tu compra realizada en Manhattan</p>

	<table>
		<thead>
			<tr>
				<th>Producto</th>
				<th>Costo</th>
			</tr>
		</thead>
		<tbody>
			@foreach($productos as $producto)
			<tr>
				<td>{{$producto->descripcion}}</td>
				<td>{{$producto->precio_final}}</td>
			</tr>
			@endforeach

			<tr>
				<td>Total</td>
				<td>{{$order->total}}</td>
			</tr>
		</tbody>
	</table>
</body>
</html>