


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/') }}">Student Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item {{ Request::is(url('/')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ Request::is(url('/create')) ? 'active' : ''}} ">
        <a class="nav-link" href="{{ url('/create') }}">Create <span class="sr-only">(current)</span></a>
      </li>

      @if(Auth::check())
      <li class="nav-item {{ Request::is(route('logout')) ? 'active' : ''}} ">
        <a class="nav-link" href="{{ action('Auth\LoginController@logout') }}">Logout <span class="sr-only">(current)</span></a>
      </li>
      @else
      <li class="nav-item {{ Request::is(url('/admin/registershow')) ? 'active' : ''}} ">
        <a class="nav-link" href="{{ action('Auth\RegisterController@showRegistrationForm') }}">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ Request::is(url('/admin/registershow')) ? 'active' : ''}} ">
        <a class="nav-link" href="{{ action('Auth\LoginController@showLoginForm') }}">Login <span class="sr-only">(current)</span></a>
      </li>
      @endif
    </ul>
  </div>
</nav>