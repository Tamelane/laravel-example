@extends('layout')

@section ('content')
	<div class="starter-template">
		@foreach ($products as $product)
			<div class="gallery" width="300" height="200">
			<a target="" href="{{ route('product', [$product->id]) }}">
			<img src="{{asset($product->picture)}}" alt="{{$product->name}}" width="300" height="200"></a>
			<div class="desc">{{ $product->name }} Price: {{ $product->price }} </div>
			</div>
		@endforeach
	</div>
@endsection