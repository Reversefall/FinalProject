@extends('layouts.app')

@section('content')
<div class="login-bg">
    <div class="login-container">
        <div class="login-card">
            <h2 class="login-title">{{ __('Login') }}</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-group">
                    <label for="email" class="login-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="login-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="login-group">
                    <label for="password" class="login-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="login-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="login-group login-remember">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <div class="login-actions">
                    <button type="submit" class="login-btn">
                        {{ __('Login') }}
                    </button>
                    @if (Route::has('password.request'))
                        <a class="login-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
