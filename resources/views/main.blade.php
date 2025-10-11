@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center py-5">
        <h1 class="display-4" style="color: #6C2EB6;">Welcome to Your Website</h1>
        <p class="lead" style="color: #FF7E1B;">This is the main page of your Laravel project.</p>
        @guest
            <a href="{{ route('login') }}" class="btn btn-primary mx-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-primary mx-2">Register</a>
            <button class="btn btn-secondary mx-2" onclick="window.location='{{ route('login') }}'">Home</button>
        @else
            <a href="{{ route('home') }}" class="btn btn-secondary mx-2">Home</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button class="btn btn-danger mx-2" type="submit">Logout</button>
            </form>
        @endguest
    </div>
</div>
@endsection