@extends('layout')

@section ('content')
	<div class="starter-template">
		<h1>Listing products from category '{{ $category->name }}'</h1>

		<ul>
		<table>
			@foreach ($category->products as $product)
				<tr><td><li>
				
					<a href="{{ route('product', [$product->id]) }}">
						<img src="{{asset($product->picture)}}"><br>{{ $product->name }}
					</a>
				</li></td></tr>
			@endforeach
			</table>
		</ul>
	</div>
@endsection