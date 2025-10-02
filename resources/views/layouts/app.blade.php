<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <header class="main-header">
            <nav class="main-nav">
                <a class="main-logo" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
                <ul class="main-menu">
                    <li><a href="{{ url('/') }}" class="main-link {{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                    @guest
                        @if (Route::has('login'))
                            <li><a href="{{ route('login') }}" class="main-link {{ request()->is('login') ? 'active' : '' }}">Login</a></li>
                        @endif
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="main-link {{ request()->is('register') ? 'active' : '' }}">Register</a></li>
                        @endif
                    @else
                        <li class="main-user">
                            <span>{{ Auth::user()->name }}</span>
                            <a href="{{ route('logout') }}" class="main-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                        </li>
                    @endguest
                </ul>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
