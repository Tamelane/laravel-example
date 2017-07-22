@extends('layout')
@extends('postslayout')
@section ('post')
<div class-sm-8 blog-main>
	<h1>{{$post->title}}</h1>
{{$post->body}}
</div>
@endsection