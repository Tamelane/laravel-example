@extends('layout')

@section ('content')
	<div class="starter-template">
		<!--<h1>Listing product '{{--$products->name --}}'</h1>-->
<img src="{{asset($products->picture)}}"><br>{{ $products->name }} Price: {{ $products->price }}
		<!--This product belongs to '{{-- $product->category->name --}}'-->
	<div class="starter-template">

	</div>
@endsection