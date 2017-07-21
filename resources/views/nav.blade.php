<!--<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">Laravel example</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('categories') }}">Categories</a></li>
        <li><a href="{{ route('filter_category_by_name', ['Category1']) }}">Filter category by name</a></li>
        <li><a href="{{ route('products') }}">Products</a></li>
        <li><a href="{{ route('filter_product_by_name', ['Product1']) }}">Filter product by name</a></li>
        <li><a href="{{ route('filter_product_by_category_name', ['Category1']) }}">Filter product by category name</a></li>
      </ul>
    </div>
  </div>
</nav>
-->
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
                    <img src="{{asset('/images/stap.png')}}" alt="ikonica za stap" style="height: 20px; width:20px"/> Štapovi <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('filter_category_by_name', ['feeder']) }}">Feeder</a></li>
                    <li><a href="{{ route('filter_category_by_name', ['match']) }}">Match</a></li>
                    <li><a href="{{ route('filter_category_by_name', ['picker']) }}">Picker</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <img src="{{asset('/images/masinica.png')}}" alt="ikonica za masinicu" style="height: 20px; width:20px"/> Mašinice <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('filter_category_by_name', ['falcon']) }}">Falcon</a></li>
                    <li><a href="{{ route('filter_category_by_name', ['shimano']) }}">Shimano</a></li>
                    <li><a href="{{ route('filter_category_by_name', ['spro']) }}">Spro</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <img src="{{asset('/images/varalica.png')}}" alt="ikonica za varalicu" style="height: 20px; width:20px"/> Varalice <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('filter_category_by_name', ['povrsinske']) }}">Površinske</a></li>
                    <li><a href="{{ route('filter_category_by_name', ['specijalne']) }}">Specijalne</a></li>
                </ul>
            </li>
        </ul>
        <div class="col-sm-3 col-md-3">

          <form class="navbar-form" role="search" action="{{-- url('/product/filter_by_name/namematch') --}}{{ route('filter_product_by_name', ['feeder']) }}" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pretraga" name="name">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>

    </div><!-- /.navbar-collapse -->
</nav>
    <div id="header">
        <img src="{{asset('/images/logo2.png')}}" alt="logo"/>
        <h3 class="animated fadeInLeftBig">Sve za pecanje na jednom mestu!</h3><br>
    </div>