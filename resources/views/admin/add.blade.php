@extends('layout')
@section ('content')
<style type="text/css">.container{

}</style>
<br>
<form method="POST" action="{{ route('StoreProduct') }}">
 {{ csrf_field()}}
  <div class="form-group">
    <label for="title">Product name: </label>
    <input type="text" class="form-control" id="title" name="name" required="required" >
  </div>
    <div class="form-group">
    <label for="price">Product price: </label>
    <input type="text" class="form-control" id="price" name="price" required="required" >
  </div>
    <div class="form-group">
    <label for="category">Product category: </label>
   <select name="category" id="category" class="form-control">
    @foreach ($categories as $category)
      <option class="form-control" id="category" value="{{ $category->id}}">
        {{ $category->name}}
      </option>
    @endforeach
    </select>
 <!--    <input type="text" class="form-control" id="category" name="category" required="required" >-->
  </div>
    <div class="form-group">
    <label for="image">Product image: </label>
     
     <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" class="form-control" accept="image/png, image/jpeg, image/gif" id="image" name="image"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
    <!-- <input type="text" class="form-control" id="image" name="image" required="required" >--> 
  </div>
   <button type="submit" class="btn btn-primary">Add Product</button>
</form>	

<form method="POST" action="{{ route('StoreCategory') }}">
 {{ csrf_field()}}
  <div class="form-group">
    <label for="title">Category name: </label>
    <input type="text" class="form-control" id="title" name="name" required="required" >
  </div>
   <button type="submit" class="btn btn-primary">Add Category</button>
</form> 
<form method="POST" action="{{ route('DeleteCategory') }}">
 {{ csrf_field()}}
 <div class="form-group">
    <label for="category">Product category: </label>
   <select name="category" id="category" class="form-control">
    @foreach ($categories as $category)
      <option class="form-control" id="category" value="{{ $category->id}}">
        {{ $category->name}}
      </option>
    @endforeach
    </select>
 <!--    <input type="text" class="form-control" id="category" name="category" required="required" >-->
  </div>
   <button type="submit" class="btn btn-primary">Delete Category</button>
</form> 
<script type="text/javascript"></script>
	@include('layouts.errors')
@endsection