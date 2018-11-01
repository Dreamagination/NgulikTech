<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NgulikTech</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav class="navbar has-shadow">
        <div class="cotainer">
          <div class="navbar-left">
            <a class="navbar-item" href="{{route('home')}}">
              <img src="{{asset('images/nguliktech-logo.png')}}" alt="NgulikTech Logo"/>
            </a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
          </div>

          <div class="nav-right">
            @if (Auth::guest())
              <a href="#" class="navbar-item is-tab">Login</a>
              <a href="#" class="navbar-item is-tab">Join the Community</a>
            @else
              <button class="navbar-item is-tab">
                Hey Admin <span class="icon"><i class="fa fa-caret-down"></i></span>
                <ul class="dropdown-menu">
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Notifications</a></li>
                  <li><a href="#">Settings</a></li>
                  <li class="separator"></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </button>
            @endif

          </div>

        </div>
      </nav>
      @yield('content')
    </div>
</body>
</html>
