@extends('layouts.app')

@push('styles_top')
    <style>
        .login-container {
            background-image: url('{{asset('assets/sl-login-bg.jpg')}}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .login-header {
            filter: drop-shadow(1px 1px 120px yellow);
        }

        .form-check-input[type=checkbox] {
            background-color: var(--old-white);
        }

        .form-check-input:checked {
            background-color: var(--brown);
        }

        .card-blur {
            position: relative;
            overflow: hidden;
        }

        .card-blur::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: inherit;
            backdrop-filter: blur(5px);
            z-index: 0;
        }

        .card-body {
            position: relative;
            z-index: 1;
        }

        @media (min-width: 1200px) {
            .card-body {
                padding: 1rem 2rem !important;
            }
        }
    </style>
@endpush

@section('content')
<section class="vh-100 login-container">
    <div class="vh-100 container">
        <div class="vh-100 row justify-content-center align-items-center">
            <div class="col-md-6 mb-3">
                <div class="d-block login-header">
                    <h3 class="d-flex justify-content-center mb-0 fs-5">Selamat datang di,</h3>
                    <h1 class="d-flex justify-content-center heading-sk">Selera Kita!</h1>
                </div>
                <div class="card bg-warning bg-opacity-25 shadow-lg card-blur">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="col-form-label text-md-end">{{ __('Email') }}</label>
                                <input id="email" type="email"
                                    class="border-dark-subtle bg-old-white form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="example: email@email.com" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="border-dark-subtle bg-old-white form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password"
                                    placeholder="example: 123456Abc">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link px-0 font-14px" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <div class="form-check">
                                    <input class="form-check-input border-dark-subtle" type="checkbox" name="remember"
                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me!') }}
                                    </label>
                                </div>
                            </div>

                            <div class="form-group my-3">
                                <button type="submit" class="btn btn-watermelon w-100 border-0">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <hr class="mt-4">
                            <div class="form-group d-flex justify-content-center">
                                <span class="d-flex gap-2">or
                                    @if (Route::has('register'))
                                        <a class="btn btn-link fw-bold p-0" href="{{ route('register') }}">
                                            {{ __('Register Your Own Account') }}
                                        </a>
                                    @endif
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection