@extends('layouts.app')

@section('title','Products')

@section('content')
<div class="text-center products-container">
<div class="row">
			@foreach($products as $product)
				<div class="col-xs-10 col-sm-6">
					@include('products/product',['product'=>$product])
				</div>
			@endforeach
			</div>
			<div class="pagination">
			{{$products->links()}}
			</div>
</div>


@endsection