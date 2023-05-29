@extends('Header')

@section('title', 'CareFinder - Verification')

@push('style-conten')
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-css/login-regis-button-main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-css/backup-page-3.css') }}">
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
            <div class="sandi">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7
                    24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"/>
                </svg>
                <input type="text"
                placeholder="Kata Sandi Baru">
                <!-- <small id="">error</small>    -->
            </div>
            <div class="verifikasi">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7
                    24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"/>
                </svg>
                <input type="text"
                placeholder="Konfirmasi Kata Sandi Baru">
                <!-- <small id="">error</small>    -->
            </div>
            <button>Selanjutnya</button>
        </form>
    </div>
    <div class="right">
        <img src="{{ asset('resource/image/logo/Logo (Kosongan).svg')}}" alt="error">
    </div>
</div>
@endsection()
