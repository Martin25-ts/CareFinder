@extends('Header')

@section('title', 'CareFinder - Backup')

@push('style-conten')
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-regis-button-main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/backup-css/backup-page-1.css') }}">
    <link rel="shortcut icon" href="{{ asset('resource/image/logo/Logo Bulet.png') }}">
@endpush

@push('script-conten')
    <script type="text/javascript" src="{{ asset('resource/js/bacup-js/backup-page-1.js') }}"></script>
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
            <form>
                <img src="{{ asset('resource/image/Regis/CareFinder-Register-Password-Logo.svg') }}" alt="nama-depan-logo">
                <h1>Pulihkan Akun Anda</h1>
                <p>Masukkan Email atau Nomor Telepon Anda</p>
                <div class="email">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320
                        371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z"/>
                    </svg>
                    <input type="text" id="email-telephone" name="email-telephone" placeholder="Email atau No Telepon" autocomplete="off">
                    <small id="error-message-input" style="position: absolute; display: flex;">error</small>
                </div>
                <button type="submit">
                    Selanjutnya
                </button>
            </form>
        </div>
        <div class="right">
            <img src="{{ asset('resource/image/logo/Logo (Kosongan).svg')}}" alt="error">
        </div>
    </div>
@endsection()
