@extends('layout')

@section ('content')
	<div class="starter-template">
		<h1>Listing products from category '{{ $category->name }}'</h1>

		<ul>
			@foreach ($category->products as $product)
				<li>
					<a href="{{ route('product', [$product->id]) }}">
						{{ $product->name }}
					</a>
				</li>
			@endforeach
		</ul>
	</div>
@endsection