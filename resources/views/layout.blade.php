<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<meta name="keywords" content="ribolov, ribolovacka-oprema, stapovi, pecanje, mamci, varalice, ">
<meta name="description" content="Ribolovacka oprema za pecarose, oprema za ribolov, stapovi za ribolov, masinice za ribolov,feeder oprema i carp oprema">
<meta name="author" content="Branislav Skenderovic, Ditrih Bajic">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="NOODP">
<meta http-equiv="Content-language" content="sr">
<meta property="og:type"   content="article">
<meta property="og:url"    content="http://ribolov.webutu.com">
<meta property="og:title"  content="Ribolovacka oprema">
<meta property="og:description" content="Najpovoljnija ribolovacka oprema!">
<meta property="og:image"  content="http://ribolov.webutu.com/photos/logo.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>
<link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/starter-template.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
  </head>

  <body>
  	@include('nav')

    <div class="container">

  		  @yield('content')

    </div>
  </body>
</html>
