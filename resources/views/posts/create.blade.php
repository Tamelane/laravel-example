@extends('layout')
@extends('postslayout');
@section ('post')
<h1 class="blog-title">Publish a post</h1>
 <form method="POST" action="{{ route('apc_store(key, var)') }}">
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
</form>
@include('layouts.errors');
@endsection