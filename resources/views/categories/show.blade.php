@extends('layout')

@section ('content')

<style>
div.gallery {
    margin: 5px;
    border: 0px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
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