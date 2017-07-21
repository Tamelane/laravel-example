@extends('layout')

@section ('content')
	<div class="starter-template">
		<h1>Listing product '{{ $product->name }}'</h1>
<img src="{{asset($product->picture)}}">
		This product belongs to '{{ $product->category->name }}'
	</div>
@endsection