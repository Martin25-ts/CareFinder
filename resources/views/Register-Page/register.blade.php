@extends('Header')

@section('title', 'CareFinder - Register')

{{-- ini buat ngisi font href --}}
@push('font-conten')

@endpush

{{-- ini buat ngisi href style css --}}
@push('style-conten')
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-regis-button-main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/register-css/register-tab1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/register-css/responsive-register.css') }}">
    <link rel="shortcut icon" href="{{ asset('resource/image/logo/Logo Bulet.png') }}">
    @endpush

@push('script-conten')
    <script type="text/javascript" src="{{ asset('resource/js/register-js/Register-Validate.js') }}"></script>
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
    <div style="font-family: 'Oxanium', cursive; " class="register-table1">
        <div class="register-table-left">
            <div class="image-signup">
                <img src="{{ asset('resource/image/Regis/CareFinder-Register-Title-Logo.svg') }}" alt="logo-auth-login">
                <h1 class="sign-up-text" style="font-size: 40px;">Sign Up</h1>
                <h4 class="sign-up-deskripsi" style="font-size: 40px;  font-weight: 600;color: #615D5D;font-size: 20px;line-height: 25px;">Daftarkan Akunmu</h4>
            </div>

            <form action="" method="POST" >

                <div class="form-input-nama-depan" >
                    <img src="{{ asset('resource/image/Regis/CareFinder-Register-UserName-Logo.svg')}}" alt="nama-depan-logo">
                    <input type="text" name="namadepan" id="namadepan" placeholder="Nama Depan" autocomplete="off">
                    <br>
                    <small id="error-message-namadepan" style="position: absolute; display: flex; padding-left: 44px; font-family: 'Oxanium', cursive;">error-message</small>
                </div>

                <div class="form-input-nama-belakang" >
                    <img src="{{ asset('resource/image/Regis/CareFinder-Register-UserName-Logo.svg') }}" alt="nama-belakang-logo">
                    <input type="text" name="namabelakang" id="namabelakang" placeholder="Nama Belakang" autocomplete="off">
                    <small id="error-message-namabelekang" style="position: absolute; display: flex; padding-left: 44px; font-family: 'Oxanium', cursive;">error-message</small>
                </div>

                <div class="form-input-email" >
                    <img src="{{ asset('resource/image/Regis/CareFinder-Register-Email-Logo.svg') }}" alt="email-logo">
                    <input type="text" name="email" id="email" placeholder="Email" autocomplete="off" >
                    <small id="error-message-email" style="position: absolute; display: flex; padding-left: 44px; font-family: 'Oxanium', cursive;">error-message</small>
                </div>

                <div class="form-input-phone-number" >
                    <img src="{{ asset('resource/image/Regis/CareFinder-Register-Phone-Logo.svg') }}" alt="phone-number-logo">
                    <input type="" name="phone-number" id="phone-number" placeholder="No Telepon" autocomplete="off">
                    <small id="error-message-phone-number" style="position: absolute; display: flex; padding-left: 44px; font-family: 'Oxanium', cursive;">error-message</small>
                </div>

                <div class="form-input-kata-sandi" >
                    <img src="{{ asset('resource/image/Regis/CareFinder-Register-Password-Logo.svg') }}" alt="nama-depan-logo">
                    <input type="password" name="password" id="password" placeholder="Kata Sandi" autocomplete="off">
                    <small id="error-message-password" style="position: absolute; display: flex; padding-left: 44px; font-family: 'Oxanium', cursive;">error-message</small>
                </div>

                <div class="form-input-confirm-kata-sandi" >
                    <img src="{{ asset('resource/image/Regis/CareFinder-Register-Password-Logo.svg') }}" alt="nama-depan-logo">
                    <input type="password" name="password-confirm" id="password-confirm" placeholder="Konfirmasi Kata Sandi" autocomplete="off">
                    <small id="error-message-password-confirm" style="position: absolute; display: flex; padding-left: 44px; font-family: 'Oxanium', cursive;">error-message</small>
                </div>
                <button type="submit" class="my-button" id="my-button">Selanjutnya</button>
            </form>

        </div>

        <div class="register-table-right" style="display: block;"  >
            <img src="{{ asset('resource/image/logo/Logo (Kosongan).svg') }}" alt="logo-CareFinder" style="width: ">
        </div>
    </div>


@endsection
