<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand glyphicon glyphicon-home" href="{{ route('home') }}"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <img src="{{asset('/images/stap.png')}}" alt="ikonica za stap" style="height: 20px; width:20px"/> Rods <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('filter_category_by_name', ['feeder']) }}">Feeder</a></li>
                    <li><a href="{{ route('filter_category_by_name', ['match']) }}">Match</a></li>
                    <li><a href="{{ route('filter_category_by_name', ['picker']) }}">Picker</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <img src="{{asset('/images/masinica.png')}}" alt="ikonica za masinicu" style="height: 20px; width:20px"/> Reels <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('filter_category_by_name', ['falcon']) }}">Falcon</a></li>
                    <li><a href="{{ route('filter_category_by_name', ['shimano']) }}">Shimano</a></li>
                    <li><a href="{{ route('filter_category_by_name', ['spro']) }}">Spro</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <img src="{{asset('/images/varalica.png')}}" alt="ikonica za varalicu" style="height: 20px; width:20px"/> lure <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('filter_category_by_name', ['surface']) }}">surface </a></li>
                    <li><a href="{{ route('filter_category_by_name', ['special']) }}">special</a></li>
                </ul>
            </li>
          
            @if (Auth::user()) 
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                {{ Auth::user()->name }} <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                    <li> <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li>
                </ul>
            </li>
            @else(Auth::guest())
            <li class=""><a class="" data-toggle="" href="{{ route('login') }}">Login</a>
            </li>
            <li class=""><a class="" data-toggle="" href="{{ route('register') }}">Register</a>
            </li>
            @endif
              @if (Auth::user())
             @if (Auth::user()->admin==1)
                  <li class="dropdown"><a class="dropdown-toggle" href="{{ route('showPanel') }}">Admin Panel</a>
              @endif
              
            @endif
        </ul>
        <div class="col-sm-3 col-md-3">
{!! Form::open(array('method' => 'Get', 'class'=>'navbar-form','route' => 'search')) !!} <div class="input-group">
{!! Form::text('first_name', '', array('class' => 'form-control','name'=>'search','placeholder'=>'Search')) !!}<div class="input-group-btn">
<button class="btn btn-default"><i class="glyphicon glyphicon-search"></i>  </button>   </div></div>
{!! Form::close() !!}
        </div>

    </div><!-- /.navbar-collapse -->
</nav>