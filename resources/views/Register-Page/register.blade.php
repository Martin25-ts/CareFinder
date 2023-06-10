@extends('Header')

@section('title', 'CareFinder - Register')

{{-- ini buat ngisi font href --}}
@push('font-conten')

@endpush

{{-- ini buat ngisi href style css --}}
@push('style-conten')
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-regis-button-main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/register-css/register-page-main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/register-css/register-page1.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/register-css/responsive-register.css') }}"> --}}
    <link rel="shortcut icon" href="{{ asset('resource/image/logo/Logo Bulet.png') }}">
    @endpush

@push('script-conten')
    <script type="text/javascript" src="{{ asset('resource/js/register-js/Register-Validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resource/js/register-js/css.js') }}"></script>

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
    <div class="register-table">
        <div class="register-table-left">
            <div class="image-signup">
                <img src="{{ asset('resource/image/Regis/CareFinder-Register-Title-Logo.svg') }}" alt="logo-auth-login">
                <h1 class="sign-up-text">Sign Up</h1>
                <h4 class="sign-up-deskripsi">Daftarkan Akunmu</h4>
            </div>
            <div class="form-input">
                <form method="POST" action="/register-page1-user-confirm">
                    @csrf
                    <div class="form-input-nama-depan" >
                        <img width="31" height="31" style="opacity: 50%" src="https://img.icons8.com/material-rounded/48/000000/user.png" alt="user-logo"/>
                        <input type="text" name="namadepan" id="namadepan" placeholder="Nama Depan" autocomplete="off">

                        <small id="error-message-namadepan">error-message</small>
                    </div>

                    <div class="form-input-nama-belakang" >
                        <img width="31" height="31" style="opacity: 50%" src="https://img.icons8.com/material-rounded/48/000000/user.png" alt="user-logo"/>
                        <input type="text" name="namabelakang" id="namabelakang" placeholder="Nama Belakang" autocomplete="off">
                        <small id="error-message-namabelekang">error-message</small>
                    </div>

                    <div class="form-input-email" >
                        <img width="24" height="24" style="opacity: 50%" src="https://img.icons8.com/external-flat-icons-inmotus-design/67/external-Email-antivirus-flat-icons-inmotus-design.png" alt="user-email"/>
                        <input type="text" name="email" id="email" placeholder="Email" autocomplete="off" >
                        <small id="error-message-email">error-message</small>
                    </div>

                    <div class="form-input-phone-number" >
                        <img width="24" height="24" style="opacity: 50%" src="https://img.icons8.com/ios-filled/50/phone.png" alt="user-phone"/>
                        <input type="text" name="phone_number" id="phone-number" placeholder="No Telepon" autocomplete="off">
                        <small id="error-message-phone-number">error-message</small>
                    </div>

                    <div class="form-input-dob">
                        <img width="24" height="24" style="opacity: 50%" src="https://img.icons8.com/ios-filled/50/calendar--v1.png" alt="user-dob"/>
                        <input type="date" name="userDOB" id="DOB">
                        <small id="error-message-dob">error-message</small>
                    </div>

                    <div class="form-input-kata-sandi" >
                        <img width="20" height="20" style="opacity: 50%" src="https://img.icons8.com/metro/26/password.png" alt="user-password"/>
                        <input type="password" name="password" id="password" placeholder="Kata Sandi" autocomplete="off">
                        <small id="error-message-password">error-message</small>
                    </div>

                    <div class="form-input-confirm-kata-sandi" >
                        <img width="20" height="20" style="opacity: 50%" src="https://img.icons8.com/metro/26/password.png" alt="user-password"/>
                        <input type="password" name="password_confirm" id="password-confirm" placeholder="Konfirmasi Kata Sandi" autocomplete="off">
                        <small id="error-message-password-confirm">error-message</small>
                    </div>
                    <button type="submit" class="my-button" id="my-button">Next</button>
                </form>
            </div>
        </div>

        <div class="register-table-right" style="display: block">
            <img src="{{ asset('resource/image/logo/Logo (Kosongan).svg') }}" alt="logo-CareFinder">

        </div>
    </div>


@endsection
