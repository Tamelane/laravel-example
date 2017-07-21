@extends('layout')

@section ('content')
	<div class="starter-template">
		<h1>
			Listing products {{ isset($category) ? "of $category" : "" }}
		</h1>

		<ul>
			@foreach ($products as $product)
				<li>
					<a href="{{ route('product', [$product->id]) }}">
						{{ $product->name }}
					</a>
				</li>
			@endforeach
	</div>
@endsection