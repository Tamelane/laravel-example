@extends('layout')

@section ('content')
	<div class="starter-template">
<img src="{{asset($products->picture)}}"><br>{{ $products->name }} Price: {{ $products->price }}
	<div class="starter-template">

	</div>
@endsection