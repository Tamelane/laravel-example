       <div class="container">
      <div class="blog-header">
       <!-- <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>-->
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
           @yield('post')
          </div>

          <nav>
           <!-- <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>-->
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
          @include('posts.sidebar')
          </div>
        </div>
      </div>

    </div>
