@extends('layouts.auth')
@section('title', 'Forgot Password')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="/"><strong>@yield('title')</strong></a>
    </div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            <span>{{ session('status') }}</span>
        </div>
    @endif
    <div class="card">
        <div class="card-body login-card-body">
            <form method="POST" action="{{ route('password.email') }}">
                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email" required="required">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                @error('email')
                    <div class="alert alert-danger">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
                <div class="d-none">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
            </form>
        </div>
    </div>
</div>
@endsection