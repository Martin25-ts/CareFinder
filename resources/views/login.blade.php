
@if (Auth::check())
    @php
        header("Location: /dashboard");
        exit();
    @endphp
@endif

@extends('Header')

@section('title', 'CareFinder - Login')

@push('style-conten')
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-regis-button-main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-css/login.css') }}">
    <link rel="shortcut icon" href="{{ asset('resource/image/logo/Logo Bulet.png') }}">
@endpush

@push('script-conten')
    {{-- <script type="text/javascript" src="{{ asset('resource/js/login-js/ValidateInput.js') }}"></script> --}}
@endpush

@push('style-font-family')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium&display=swap" rel="stylesheet">
@endpush

@section('navbar')
    <section  class="login-sign-up">
        <div class="login-sign-up-button">
            <a href="/login" class="login-navbar">
                <button>Login</button>
            </a>
            <a href="/register" class="register-navbar">
                <button>Sign Up</button>
            </a>
        </div>
    </section>
@endsection()

@section('conten')
    <div class="container">
        <div class="login">
            <form method="POST" action="/login">
                @csrf
                <img src="{{{ asset('resource/image/Regis/CareFinder-Login-Title-Logo.svg') }}}" alt="">
                <h1>Login</h1>
                <p>Masuk Ke CareFinder</p>

                <div class="email">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320
                        371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z"/>
                    </svg>
                    <input type="text" name="email" id="email" placeholder="Email atau No Telepon" value={{Cookie::get('mycookie') !== null ? Cookie::get('mycookie') : ""}}>
                    <small id="error-message-email" style="position: absolute; display: none;">error</small>
                </div>
                <div class="sandi">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80
                        64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/>
                    </svg>
                    <input type="password" name="password" id="password" placeholder="Kata Sandi" value={{Cookie::get('mypassword') !== null ? Cookie::get('mypassword') : ""}} >
                    <small id="error-message-password" style="position: absolute; display: none;">error</small>
                </div>
                <div class="rememberme-container">
                    <input type="checkbox" name="rememberme" id="rememberme" checked={{Cookie::get('mycookie') !== null}}> Remember Me
                </div>

                <button type="submit" id="submit-button">Login</button>
            </form>
            <div class="Signup">
                <p>
                    Lupa Kata Sandi Anda?
                    <a href="/backup-input-email">Reset disini</a>
                </p>
                <a href="/register">
                    <button type="submit">Sign Up</button>
                </a>
            </div>
        </div>
        <div class="right">
            <img style="width: 294px; height: 255px;" src="{{{ asset('resource/image/logo/Logo (Kosongan).svg') }}}" alt="error">
        </div>
    </div>
@endsection
