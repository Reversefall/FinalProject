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
        <header class="main-header" style="background: linear-gradient(90deg, #6C2EB6 0%, #FF7E1B 100%); padding: 1rem 0; margin-bottom: 2rem;">
            <nav class="main-nav" style="display: flex; align-items: center; justify-content: center;">
                <ul class="main-menu" style="list-style: none; display: flex; gap: 2rem; margin: 0; padding: 0;">
                    <li>
                        <a href="{{ url('/') }}" class="main-link {{ request()->is('/') ? 'active' : '' }}" 
                           style="color: #fff; font-weight: bold; text-decoration: none; padding: 0.5rem 1rem; border-radius: 4px; {{ request()->is('/') ? 'background: rgba(255,255,255,0.2);' : '' }}">
                            Home
                        </a>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li>
                                <a href="{{ route('login') }}" class="main-link {{ request()->is('login') ? 'active' : '' }}" 
                                   style="color: #fff; font-weight: bold; text-decoration: none; padding: 0.5rem 1rem; border-radius: 4px; {{ request()->is('login') ? 'background: rgba(255,255,255,0.2);' : '' }}">
                                    Login
                                </a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}" class="main-link {{ request()->is('register') ? 'active' : '' }}" 
                                   style="color: #fff; font-weight: bold; text-decoration: none; padding: 0.5rem 1rem; border-radius: 4px; {{ request()->is('register') ? 'background: rgba(255,255,255,0.2);' : '' }}">
                                    Register
                                </a>
                            </li>
                        @endif
                    @else
                        <li class="main-user">
                            <span style="color: #fff; margin-right: 1rem;">{{ Auth::user()->name }}</span>
                            <a href="{{ route('logout') }}" class="main-link" 
                               style="color: #fff; font-weight: bold; text-decoration: none; padding: 0.5rem 1rem; border-radius: 4px;"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
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
