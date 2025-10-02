@extends('layouts.app')

@section('content')
<div class="login-bg">
    <div class="login-container">
        <div class="login-card">
            <h2 class="login-title">{{ __('Register') }}</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="login-group">
                    <label for="name" class="login-label">{{ __('Name') }}</label>
                    <input id="name" type="text" class="login-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="login-group">
                    <label for="email" class="login-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="login-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="login-group">
                    <label for="password" class="login-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="login-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="login-group">
                    <label for="password-confirm" class="login-label">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="login-input" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="login-actions">
                    <button type="submit" class="login-btn">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
