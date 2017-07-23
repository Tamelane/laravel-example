@extends('layout')
@extends('postslayout')
@section ('post')
<style type="text/css">.container{
    margin-top:20px;
}
.image-preview-input {
    position: relative;
  overflow: hidden;
  margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
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
    @foreach ($products as $product)
      <option class="form-control" id="category" value="{{ $product->id}}">
        {{ $product->name}}
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
<!--
<form method="POST" action="{{-- route('StoreCategory') }}">
 {{ csrf_field()--}}
  <div class="form-group">
    <label for="title">Category name: </label>
    <input type="text" class="form-control" id="title" name="name" required="required" >
  </div>
   <button type="submit" class="btn btn-primary">Add Category</button>
</form> -->
<script type="text/javascript">$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});</script>
	@include('layouts.errors')
@endsection