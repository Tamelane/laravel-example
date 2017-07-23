@extends('layout')

@section ('content')
	<div class="starter-template">
		<h1>
			Listing productss {{ isset($category) ? "of $category" : "" }}
		</h1>

		<ul>
		<table>
			@foreach ($products as $product)
			<tr><td>	<li>
			
					<a href="{{ route('product', [$product->id]) }}">
					<img src="{{asset('$product->picture')}}" alt="">	{{ $product->name }}
					</a>
				</li>
			</td>	</tr>
			@endforeach
			</table>
	</div>
@endsection