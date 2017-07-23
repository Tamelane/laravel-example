@extends('layout')

@section ('content')

	<div class="starter-template">
		<!--<h1>Listing products from category '{{ $category->name }}'</h1>-->
@foreach ($category->products as $product)
<form method="POST" action="{{ route('addToCart') }}">
{{ csrf_field()}}
<div class="gallery">
<a target="" href="{{ route('product', [$product->id]) }}">
<img src="{{asset($product->picture)}}" alt="{{$product->name}}" width="300" height="200">
  </a>
<div class="desc">{{ $product->name }} Price: {{ $product->price }} 
	@if (Auth::user())
				<input type="hidden" name="product_id" value="{{ $product->id }}">
			<input type="hidden" name="user_id" value="{{ Auth::id() }}">
			<input type="hidden" name="price" value="{{ $product->price }}">
			<input type="hidden" name="quantity" value="2">
			<button type="submit" class="btn btn-primary">Add To Cart</button> 
			@endif</div>
</div>
</form>
@endforeach
<div>
@endsection