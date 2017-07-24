@extends('layout')

@section ('content')
	<div class="starter-template">
<img src="{{asset($products->picture)}}"><br>{{ $products->name }} Price: {{ $products->price }}
	<div class="starter-template">
			{{--$posts=Post::latest()->get();
    	return view('posts.posts',compact('posts'));--}}
    	


@foreach ($posts as $post)
	<h1 class="blog-title">
<a href="{{$post->id}}">
	{{$post->title}}
</a>
	</h1>
	<p class="blog-post-meta">Posted by: 
	{{$post->username($post->user_id)}}:  {{$post->created_at->toFormattedDateString()}}</p>
	
{{$post->body}}
<h1 class="blog-title">Comment</h1>
 {{--<form method="POST" action="{{ route('apc_store(key, var)') }}">
 {{ csrf_field()}}
  <div class="form-group">
    <label for="title">Title: </label>
    <input type="text" class="form-control" id="title" name="title" required="required" >
  </div>
  <div class="form-group">
    <label for="body">Body</label>
   <textarea id="body" name="body" class="form-control" required="required"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Publish</button>
</form>--}}
@include('layouts.errors');
@endforeach
	</div>
@endsection