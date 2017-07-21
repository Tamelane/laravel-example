<nav class="navbar navbar-inverse navbar-fixed-top">
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
