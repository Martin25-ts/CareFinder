@extends('Header')

@section('title', 'CareFinder - Verification')

@push('style-conten')
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-css/login-regis-button-main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-css/backup-page-2.css') }}">
    <link rel="shortcut icon" href="{{ asset('resource/image/logo/Logo Bulet.png') }}">
@endpush

@push('script-conten')
    {{-- <script type="text/javascript" src="{{ asset('resource/Register/ValidateInput.js') }}"></script> --}}
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
            <form action="POST">
                <img src="{{ asset('resource/image/Regis/CareFinder-Register-Password-Logo.svg') }}" alt="nama-depan-logo">
                <h1>Pulihkan Akun Anda</h1>
                <p>Dapatkan Kode Verifikasi Anda</p>
                <div class="email">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3
                        280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z"/>
                    </svg>
                    <input type="text"
                    placeholder="Email atau No Telepon">
                    <!-- <small id="">error</small>    -->
                </div>
                <button>
                    <a href="/backup-confirm">Selanjutnya</a>
                </button>
            </form>
        </div>
        <div class="right">
            <img src="{{ asset('resource/image/logo/Logo (Kosongan).svg')}}" alt="error">
        </div>
    </div>
@endsection()
