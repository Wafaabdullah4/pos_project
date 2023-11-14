@extends('layouts.app')

@section('content')
    <style>
        .login-page {
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: #7C53AF;

        }

        .parent-login {
            width: 70%;
            height: 80%;
            margin: 80px auto;
            background-color: #fff;
            overflow: auto;
            box-sizing: border-box;
            border-radius: 30px;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
        }

        .image-child-login {
            width: 50%;
            height: 100%;
            float: left;

        }

        .image-login {
            width: 400px;
            height: 400px;
            margin: 50px auto;
        }

        .pos-login {
            display: flex;
            align-items: center;
            margin-left: 15%;
            margin-top: 50px;
        }

        .pos-login h2 {
            margin-left: 10px;
            font-size: 40px;
        }

        .pos-login a {
            text-decoration: none;
        }

        .content-child-login {
            width: 50%;
            height: 100%;
            float: right;

        }

        .login-form {

            width: 95%;
            height: 60%;
            margin-top: 25%;
            margin-left: 20px;
        }

        .content-child-login p {

            margin-top: 46px;
            font-size: 40px;
            color: #7C53AF;
            text-align: left;
            margin-bottom: 20px;
        }

        /* .input-login {
                                            display: flex;
                                            flex-direction: column;
                                            align-items: center;
                                            }
                                            */
        .input-login input {
            width: 80%;
            height: 75px;
            border-radius: 5px;
            font-size: 20px;
            padding-left: 20px;

            margin-bottom: 20px;
            border: 1px solid rgba(0, 0, 0, 0.50);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
        }

        .content-child-login button {
            margin-top: 30px;
            width: 80%;
            height: 50px;
            color: white;
            background-color: #593FA2;
            font-size: 20px;
            text-decoration: none;
            cursor: pointer;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
            /*box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
                                            */
        }
    </style>

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <main>
        <section class="login-page">
            <div class="parent-login">
                <div class="image-child-login">
                    <div class="pos-login">
                        <img src="assets/image/logo_pos.png" alt="">
                        <h2 style="color: #593FA2"> <a href="">POS</a></h2>
                    </div>
                    <div class="image-login">
                        <img src="{{ asset('assets/img/login.png') }}"alt="" width="100% " height="100%">
                    </div>
                </div>
                <div class="content-child-login">
                    <div class="login-form">

                        <p>Selamat Datang</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-login">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror input-two" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-login">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror input-two" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    style="right: 8%; position: relative; top: 12px; transform: translateY(-50%);">
                                    <!-- Your SVG path here -->
                                </svg>
                            </div>

                            <button type="submit" class="btn-login">{{ __('Login') }}</button>
                        </form>

                    </div>
                </div>
            </div>
            {{-- <footer>
                <h2 class="title-sponsor" style="color: white;">Dibawah naungan:</h2>
                <div class="sponsor" style="margin-top: 10px;">
                    <img src="assets/image/Ellipse_32-removebg-preview.png" alt="">
                    <h2 style="color: white; margin-left: 5px;  ">SMK Prakarya Internasional</h2>
                </div>
            </footer> --}}
        </section>
    </main>
@endsection
