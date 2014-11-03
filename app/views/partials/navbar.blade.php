        <div class="navbar-header">
          <a href="../" class="navbar-brand">My Example Blog</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="#">Laravel Resources</a>
            </li>
            <li>
              <a href="#">Portfolio</a>
            </li>
            <li>
              <a href="{{ action('PostsController@index') }}">Blog Posts</a>
            </li>
            <li>
              <a href="{{ action('PostsController@create') }}">Write New Post</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://builtwithbootstrap.com/" target="_blank">Register User</a></li>
            <li><a href="https://wrapbootstrap.com/?ref=bsw" target="_blank">Login</a></li>
          </ul>

        </div>
