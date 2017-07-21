@extends('layout')

@section ('content')

	<div class="starter-template">
		<!--<h1>Listing products from category '{{ $category->name }}'</h1>-->
@foreach ($category->products as $product)
<div class="gallery">
<a target="" href="{{ route('product', [$product->id]) }}">
<img src="{{asset($product->picture)}}" alt="{{asset($product->picture)}}" width="300" height="200">
  </a>
<div class="desc">{{ $product->name }} Price: {{ $product->price }} </div>
</div>
@endforeach
<div>
@endsection