<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Core Structure</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="colorlib.com">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Core Structure</title>
        <link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('public/fonts/material-design-iconic-font/css/material-design-iconic-font.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/custom_style.css') }}">
    </head>
    <body>
     <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Core Structure                        
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="{{ route('myaccount') }}">My Account</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="wrapper">
        @yield('content')
        @include('layouts.sidebar')
        </div>

        </div>
        <script src="{{ asset('public/js/app.js') }}"></script>
        <script src="{{ asset('public/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.steps.js') }}"></script>
        <script src="{{ asset('public/js/main.js') }}"></script>

</body>
</html>