@extends('layout')

@section ('content')
	<div class="starter-template">
		<h1>Listing product '{{ $product->name }}'</h1>

		This product belongs to '{{ $product->category->name }}'
	</div>
@endsection