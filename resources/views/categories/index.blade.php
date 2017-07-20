@extends('layout')

@section ('content')
	<div class="starter-template">
		<h1>List of all categories</h1>

		<ul>
			@foreach ($categories as $category)
				<li>
					<a href="{{ route('category', [$category->id]) }}">
						{{ $category->name }}

						({{ count($category->products) }} product(s))
					</a>
				</li>

				<ul>
					@foreach ($category->products as $product)
						<li>{{ $product->name }}</li>
					@endforeach
				</ul>
			@endforeach
		</ul>
	</div>
@endsection