@extends('layout')
@section ('content')
 @if (Session::has('text'))
              <p class="bg-danger"> {{session('text')}}</p>
           @endif
           @include('layouts.errors')
<style type="text/css"></style>
<br>{!! Form::open(
    array(
        'route' => 'StoreProduct', 
        'class' => 'form', 
        'files' => true)) !!}

<div class="form-group">

    {!! Form::label('Product Name') !!}
</div>
<div class="form-group">
    {!! Form::text('name', null) !!}
</div>
<div class="form-group">
    {!! Form::label('price') !!}
</div>
<div class="form-group">
    {!! Form::text('price', null) !!}
</div>
<div class="form-group">
    {!! Form::label('category') !!}
{{ Form::select('category', $items,2, array('value' => '1')) }}
</div>
{{--<div class="form-group">
    {!! Form::text('category', null) !!}
</div>--}}
<div class="form-group">
    {!! Form::file('image', null) !!}
</div>

<div class="form-group">
    {!! Form::submit('Create Product!') !!}
</div>
{!! Form::close() !!}
{{--<form method="POST" action="{{ route('StoreProduct') }}" class="container">
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
                        <input type="file" class="form-control" accept="image/png, image/jpeg, image/gif" id="image" name="image"  value="image/default.png"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
  </div>
   <button type="submit" class="btn btn-primary">Add Product</button>
</form>	
--}}
<form method="POST" action="{{ route('StoreCategory') }}"  class="container">
 {{ csrf_field()}}
  <div class="form-group">
    <label for="title">Category name: </label>
    <input type="text" class="form-control" id="title" name="name" required="required" >
  </div>
   <button type="submit" class="btn btn-primary">Add Category</button>
</form> 

<form method="POST" action="{{ route('DeleteCategory') }}"  class="container">
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
  </div> <button type="submit" class="btn btn-primary">Delete Category</button>
</form> 
<div class="container" style="margin-bottom:70px;">
      @foreach ($products as $product)
<form method="POST" action="{{ route('DeleteProduct') }}">
      {{ csrf_field()}}
      <div class="gallery"  >
      <input type="hidden" name="id" value="{{ $product->id }}">
      <a target="" href="{{ route('product', [$product->id]) }}">
      <img src="{{asset($product->picture)}}" alt="{{$product->name}}" style="max-height:120px;"></a>
      <div class="desc">{{ $product->name }} Price: {{ $product->price }} <br>
      <button type="submit" class="btn btn-primary">Delete Product</button></div>
      </div>
       </form>  
    @endforeach
       </div>
<script type="text/javascript"></script>
	
@endsection