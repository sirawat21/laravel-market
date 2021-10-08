<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Web Brand -->
  <a class="navbar-brand" href="{{ url('/') }}">
      <span class="fa fa-american-sign-language-interpreting"></span>
      <span>Market</span>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- Left Side Menu -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}" id="/">Home</a>
      </li>
      @auth
        @if (Auth::user()->type == "Moderator")
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/manage') }}" id="manage">Manage</a>
          </li>
        @endif
      @endauth
    </ul>
    <!-- Right Side Menu -->
    <div class="form-inline my-2 my-lg-0">
      @auth
        <!-- Dropdown -->
        <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span>{{ Auth::user()->name }} | {{ Auth::user()->type }}</span>
          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="right:100px;">
          <a class="dropdown-item" href="#"><span class="fa fa-user"></span>&nbsp;Profile</a>
          <a class="dropdown-item" href="#"><span class="fa fa-book"></span>&nbsp;My Items</a>
          <a class="dropdown-item" href="#"><span class="fa fa-gavel"></span>&nbsp;Create Sale</a>
          @if (Auth::user()->type == "moderator")
          <a class="dropdown-item" href="#"><span class="fa fa-cogs"></span>&nbsp;Manage</a>
          @endif
          <form method="POST" action="{{ url('logout') }}">
            @csrf
            <br>
            <button class="btn btn-sm btn-danger" type="submit" style="width:100%;">
              <span class="fa fa-sign-out"></span>
              <span style="font-size:16px">Logout</span>
            </button>
          </form>
        </div>
      </li>
    </ul>
      <!-- End Dropdown -->
      @endauth

      @guest
        <ul class="navbar-nav me-right mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link" href="{{ url('login') }}">Login</a>
          </li>
        </ul>
      @endguest
    </div>
    <!-- End Righthand Menu -->
  </div>
</nav>

<script>
  var currentMenu =  document.URL.split('/')[3];
  $("#" + currentMenu).addClass("active");
</script>