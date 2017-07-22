@extends('layout')
@extends('postslayout')
@section ('post')

@foreach ($posts as $post)
	<h1 class="blog-title">
<a href="{{$post->id}}">
	{{$post->title}}
</a>
	</h1>
	<p class="blog-post-meta">Posted by: 
	{{$post->username($post->user_id)}}:  {{$post->created_at->toFormattedDateString()}}</p>
	
{{$post->body}}
@endforeach
@endsection