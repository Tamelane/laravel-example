@extends('layout')

@section ('content')
	<div class="starter-template">
	
		   <h3>Ovaj sajt je školski projekat</h3>
        <p>
            Korištene su fotografije sa <a href="http://www.topfish.rs" target="_blank">TopFish</a> sajta.
        </p>

        <br>
        <h3>Prijatelji sajta:</h3>
        <a href="http://svetpiva.co.nf/" class="margin" target="_blank"><img src="{{asset('/images/ivke.jpg')}}" alt="pivo sajt"></a>
        <a href="http://hoverboardsu024.byethost7.com/?i=2" target="_blank" class="margin"><img src="{{asset('/images/stipke.png')}}" alt="hoverboard sajt"></a>
        <br><br>
        <a href="http://www.nintendosrbija.byethost14.com/" class="margin" target="_blank"><img src="{{asset('/images/nint.jpg')}}" alt="nintendo sajt"></a>
        <a href="http://domacisapuni.freetzi.com//"  target="_blank" class="margin"><img src="{{asset('/images/logosapuni.png')}}" alt="sapuni sajt"></a><br><br>
        <a href="http://kulen.student.yunethosting.rs/"  target="_blank" class="margin"><img src="{{asset('/images/kulen.jpg')}}" alt="Kulen sajt" style="width:150px;"></a><br><br>
	</div>
@endsection