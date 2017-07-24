@extends('layout')

@section ('content')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<div class="starter-template">

		@foreach ($products as $product)
		<form method="POST" action="{{ route('addToCart') }}">
 			{{ csrf_field()}}
			<div class="gallery" width="300" height="200">
			<a target="" href="{{ route('product', [$product->id]) }}">
			<img src="{{asset($product->picture)}}" alt="{{$product->name}}" width="300" height="200"></a>
			<div class="desc">{{ $product->name }} Price: {{ $product->price }}
			@if (Auth::user())
				<input type="hidden" name="product_id" value="{{ $product->id }}">
			<input type="hidden" name="user_id" value="{{ Auth::id() }}">
			<input type="hidden" name="price" value="{{ $product->price }}">
			<input type="hidden" name="quantity" value="2">
			<button type="submit" class="btn btn-primary">Add To Cart</button> 
			@endif
			</div></div>
		</form>
		@endforeach
	</div>
@endsection