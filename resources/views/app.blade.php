<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <meta name="_token" content="{{ csrf_token() }}">
    <title>{{config('app.name'). '-' . ucfirst(Route::currentRouteName()) }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico')}}"/>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet"/>
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Your Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Route::is('home') ? 'active' : '' }}"><a class="nav-link"
                                                                                href="{{ route('home') }}">Home</a></li>
                <li class="nav-item {{ Route::is('about') ? 'active' : '' }}"><a class="nav-link"
                                                                                 href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item {{ Route::is('services') ? 'active' : '' }}"><a class="nav-link"
                                                                                    href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}"><a class="nav-link"
                                                                                   href="{{ route('contact') }}">Contact</a>
                </li>

                @guest
                    <li class="nav-item {{ Route::is('login') ? 'active' : '' }}"><a class="nav-link"
                                                                                     href="{{ route('login') }}">Login</a>
                    </li>
                @endguest

                @auth()
                    <li class="nav-item {{ Route::is('panel.index') ? 'active' : '' }}"><a class="nav-link"
                                                                                              href="{{ route('panel.index') }}">Panel</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"
                                            onclick="document.getElementById('logout-form').submit()">Log out</a></li>
                    <form action="{{ route('logout') }}" method="POST" id="logout-form">@csrf</form>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- Page Content-->
<div class="container content">
    <div class="row">
        @yield('content')
    </div>
</div>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Shoppex 2021</p></div>
</footer>
</body>
</html>
