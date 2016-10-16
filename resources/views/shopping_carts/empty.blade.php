@extends("layouts.app")
@section('content')
<center>
<div class="inline-block">
<h1>El carrito esta vacio</h1>

<a href="{{ url('/') }}"><input class="btn btn-info" value="Ir a productos"></input></a>
</div>
</center>
@endsection