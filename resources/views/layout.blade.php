<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.head')
    <title>Starter Template for Bootstrap</title>
  </head>
  <body>
  	@include('nav')
        @yield('home');
    <div class="container">

  		  @yield('content')

    </div>
 </div>
    @include('includes.footer')
    <script src="{{ asset('/js/js.js') }}" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
