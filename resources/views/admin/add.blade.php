@extends('layout')
@extends('postslayout')
@section ('post')

<form method="POST" action="{{ route('StoreCategory') }}">
 {{ csrf_field()}}
  <div class="form-group">
    <label for="title">Title: </label>
    <input type="text" class="form-control" id="title" name="name" required="required" >
  </div>
   <button type="submit" class="btn btn-primary">Publish</button>
</form>	

	@include('layouts.errors')
@endsection