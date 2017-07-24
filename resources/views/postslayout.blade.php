       <div class="container">
      <div class="blog-header">
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
           @yield('post')
          </div>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
          @include('posts.sidebar')
          </div>
        </div>
      </div>

    </div>

