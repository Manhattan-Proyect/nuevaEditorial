@extends('layouts.app')

@section('title','Products')

@section('content')
<div class="text-center products-container">
<div class="row">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				@for($i=0;$i<sizeof($products);$i++)
				@if($i==0)
				<li data-target="#myCarousel" data-slide-to="{{$i}}" class="active"></li>
				@else
				<li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
				@endif
				@endfor
			</ol>
			<div class="carousel-inner" role="listbox">	
				@for($i=0; $i<sizeof($products);$i++)
					@if($i==0)
					<div class="item active">
					@else
					<div class="item">
					@endif
						<div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6">
							@include('products/product',['product'=>$products[$i]])
						</div>
					</div>
				@endfor
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span></a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span></a>
		</div>
</div>
@foreach($products as $product)
@include('products/product',['product'=>$product])
@endforeach
			<div class="pagination">
			{{$products->links()}}
			</div>
</div>


@endsection