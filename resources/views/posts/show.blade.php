@extends('layout')
@extends('postslayout')
@section ('post')
<div class-sm-8 blog-main>
	<h1>{{$post->title}}</h1>
{{$post->body}}
<div class="comments">
<hr>
<ul>
	@foreach ($post->comments as $comment)
		<li class="list-group-item">
		<strong>
			{{$comment->username($comment->user_id)}}:{{$comment->created_at->diffForHumans()}}: 
		</strong>
			{{$comment->body}}
		</li>
	@endforeach
	</ul>
</div>
{{-- Add a comment--}}
<hr>
<div class="card">
	<div class="card-block">
	@if (Auth::user()) 
{{	Form::open(array('url' => 'posts/'.$post->id.'/comments', 'method' => 'POST'))}}
<!--	<form method="POST" action="/posts/{{--$post->id--}}/comments">-->
	{{csrf_field()}}
		<div class="form-group">
		<textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>			
		</div>
		<div class="form-group">
		<button type="submit" class="btn btn-primary">Add Comment</button>		
		</div>
	</form>		

	@include('layouts.errors')
	@endif
	</div>
</div>
</div>
@endsection