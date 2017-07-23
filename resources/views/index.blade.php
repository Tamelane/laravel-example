@extends('layout')

@section('home')
<div class="starter-template">
     <div id="header">
        <img src="{{asset('/images/logo2.png')}}" alt="logo"/>
        <h3 class="animated fadeInLeftBig"> Everything for fishing in one place!</h3><br>
    </div>
@endsection
@section ('content')

	
		   <h3>This site is a school project</h3>
           @if (Session::has('CategoryAdded'))
              <p class="bg-danger"> {{session('CategoryAdded')}}</p>
           @endif
            @if (Session::has('ProductAdded'))
              <p class="bg-danger"> {{session('ProductAdded')}}</p>
           @endif
        <p>
            Photos used from <a href="http://www.topfish.rs" target="_blank">TopFish</a> site.
        </p>

        <br>
        <h3></h3>
        <a href="http://svetpiva.co.nf/" class="margin" target="_blank"><img src="{{asset('/images/ivke.jpg')}}" alt="pivo sajt"></a>
        <a href="http://hoverboardsu024.byethost7.com/?i=2" target="_blank" class="margin"><img src="{{asset('/images/stipke.png')}}" alt="hoverboard sajt"></a>
        <br><br>
        <a href="http://www.nintendosrbija.byethost14.com/" class="margin" target="_blank"><img src="{{asset('/images/nint.jpg')}}" alt="nintendo sajt"></a>
        <a href="http://domacisapuni.freetzi.com//"  target="_blank" class="margin"><img src="{{asset('/images/logosapuni.png')}}" alt="sapuni sajt"></a><br><br>
        <a href="http://kulen.student.yunethosting.rs/"  target="_blank" class="margin"><img src="{{asset('/images/kulen.jpg')}}" alt="Kulen sajt" style="width:150px;"></a><br><br>

	</div>
@endsection