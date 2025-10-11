@extends('layouts.app')

@section('content')
<style>
    .main-hero {
        background: linear-gradient(90deg, #6C2EB6 0%, #FF7E1B 100%);
        color: #fff;
        border-radius: 16px;
        padding: 3rem 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 24px rgba(108,46,182,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
    }
    .main-hero-img {
        max-width: 320px;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.08);
    }
    .main-hero-content {
        max-width: 500px;
        text-align: left;
    }
    .main-hero-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }
    .main-hero-lead {
        font-size: 1.25rem;
        margin-bottom: 1.5rem;
    }
    .main-action-btns a, .main-action-btns button {
        margin-right: 1rem;
        margin-bottom: 0.5rem;
    }
    .project-info {
        background: #fff;
        color: #333;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(108,46,182,0.08);
        padding: 2rem;
        margin: 2rem auto;
        max-width: 700px;
    }
    .project-info-title {
        color: #6C2EB6;
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }
</style>
<div class="container">
    <div class="main-hero">
        <div class="main-hero-content">
            <div class="main-action-btns">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
                    <button class="btn btn-secondary" onclick="window.location='{{ route('login') }}'">Home</button>
                @else
                    <a href="{{ route('home') }}" class="btn btn-secondary">Home</a>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button class="btn btn-danger" type="submit">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
    <div class="project-info">
        <div class="project-info-title">About Our Group Buying Platform</div>
        <p>
            Welcome to our group buying platform, an innovative e-commerce solution designed to help users save money by purchasing products together. 
            Our platform allows users to join group deals, unlock exclusive discounts, and enjoy a seamless shopping experience.
        </p>
        <ul>
            <li>Discover and join group deals for popular products</li>
            <li>Benefit from lower prices through collective purchasing</li>
            <li>Easy registration and secure login</li>
            <li>Modern, responsive interface powered by Laravel and React</li>
        </ul>
        <p>
            Start exploring now and experience the future of online shopping with group buying!
        </p>
    </div>
    <div class="text-center mt-4">
        <p style="color: #333; max-width: 600px; margin: 0 auto;">
            Explore the features of this template, including authentication, React integration, and beautiful UI components. 
            Customize your project to fit your needs and build something amazing!
        </p>

    </div>
</div>
@endsection