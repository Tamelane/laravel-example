@extends('layout')

@section ('content')
	<div class="starter-template">

		@foreach ($products as $product)
		<form method="POST" action="{{ route('addToCart') }}">
 			{{ csrf_field()}}
			<div class="gallery" width="300" height="200">
			<a target="" href="{{ route('product', [$product->id]) }}">
			<img src="{{asset($product->picture)}}" alt="{{$product->name}}" width="300" height="200"></a>
			<div class="desc">{{ $product->name }} Price: {{ $product->price }}
			@if (Auth::user())
				<input type="hidden" name="product_id" value="{{ $product->id }}">
			<input type="hidden" name="user_id" value="{{ Auth::id() }}">
			<input type="hidden" name="price" value="{{ $product->price }}">
			<input type="hidden" name="quantity" value="2">
			@endif
			{{--<input type="hidden" name="quantity" value="{{ $product->id }}">--}}
			<button type="submit" class="btn btn-primary">Add To Cart</button>
			
 
			</div></div>
		</form>
		@endforeach
	</div>
	<div id="demo" style="margin-bottom: 100px">
<h1>The XMLHttpRequest Object</h1>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>



 <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
      <?php
         echo Form::button('Replace Message',['onClick'=>'getMessage()']);
      ?>
  <script>
         function getMessage(){
            $.ajax({
               type:'POST',
               url:'/getmsg',
               data:'_token = {{ csrf_field()}}',
               success:function(data){
                  $("#msg").html(data.msg);
               }
            });
         }
      </script>
</script>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">

@endsection