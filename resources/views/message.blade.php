<!DOCTYPE html>
<html>
<head><script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
	<title></title>
</head>
<body>
      <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the messageddd.</div>
      <?php
      //   echo Form::button('Replace Message',['onClick'=>'getMessage()']);
      ?>

      		<button type="submit" onclick="getMessage()" class="btn btn-primary">Add Tos Cart</button>


   </body>
     <script>
         function getMessage1(){
            $.ajax({
               type:'GET',
               url:'{{ route('ajax') }}',
               data:'_token = <?php echo csrf_token(); ?>',
               success:function($data){
               	console.log($data);
               	$("#msg").html($data.msg);
               }
            });
         }

         function getMessage() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("msg").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", '{{ route('ajax') }}', true);
  xhttp.send();
}
      </script>
</script>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</html>