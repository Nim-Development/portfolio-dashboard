
<!--  -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--     Fonts and icons     -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Material Kit CSS -->
    <link href="{{ asset('css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" />
</head>

<body>
<div class="wrapper ">

    <!-- Side Bar -->
    <div class="sidebar" data-color="purple" data-background-color="white">

        <div class="logo">
            <a href="portfolio.nimdevelopment.com" class="simple-text logo-mini">
            NK
            </a>
            <a href="portfolio.nimdevelopment.com" class="simple-text logo-normal">
            Nick Knierim
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item {{ (Route::currentRouteName() == 'add.project' ) ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('add.project') }}">
                    <i class="material-icons">fiber_new</i>
                    <p>New Project</p>
                  </a>
                </li>
                <li class="nav-item {{ (Route::currentRouteName() == 'image.view' ) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('image.view') }}">
                    <i class="material-icons">fiber_new</i>
                    <p>New Image</p>
                    </a>
                </li>
                  <li class="nav-item {{ (Route::currentRouteName() == 'list' ) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('list') }}">
                    <i class="material-icons">list</i>
                    <p>List Projects</p>
                    </a>
                </li>
              </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">

        <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
    
      @yield('admin')
    
    </div>
</body>
</html>
