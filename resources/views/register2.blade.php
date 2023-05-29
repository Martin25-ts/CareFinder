@extends('Header')

@section('title', 'CareFinder - Register2')

{{-- ini buat ngisi font href --}}
@push('font-conten')

@endpush

{{-- ini buat ngisi href style css --}}
@push('style-conten')

    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-css/register-tab1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-css/register-tab2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-css/login-regis-button-main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-css/responsive-register.css') }}">
    <link rel="shortcut icon" href="{{ asset('resource/image/logo/Logo Bulet.png') }}">

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

            <form  action="sumbit" method="post">

                <div class="form-input-jalan" >
                    <img src="{{ asset('resource/image/Regis/CareFinder-Register-Jalan-Logo.svg')}}" alt="jalan-logo">
                    <input type="text" name="Jalan" id="Jalan" placeholder="Jalan" autocomplete="off">
                    <br>
                    <small id="error-message" style="position: absolute; display: flex; padding-left: 44px; font-family: 'Oxanium', cursive;">error-message</small>
                </div>

                <div class="form-input-kelurahan" >
                    <img src="{{ asset('resource/image/Regis/CareFinder-Register-Kelurahan-Logo.svg') }}" alt="kelurahan-logo">
                    <input type="text" name="kelurahan" id="kelurahan" placeholder="kelurahan" autocomplete="off">
                    <small id="error-message" style="position: absolute; display: flex; padding-left: 44px; font-family: 'Oxanium', cursive;">error-message</small>
                </div>

                <div class="form-input-kecamatan" >
                    <img src="{{ asset('resource/image/Regis/CareFinder-Register-Kelurahan-Logo.svg') }}" alt="kecamatan-logo">
                    <input type="text" name="kecamatan" id="kecamatan" placeholder="kecamatan" autocomplete="off">
                    <small id="error-message" style="position: absolute; display: flex; padding-left: 44px; font-family: 'Oxanium', cursive;">error-message</small>
                </div>

                <div class="form-input-kabupatenr" >
                    <img src="{{ asset('resource/image/Regis/CareFinder-Register-Kabupaten-Logo.svg') }}" alt="kabupaten-logo">
                    <input type="text" name="kabupaten" id="kabupaten" placeholder="kabupaten" autocomplete="off">
                    <small id="error-message" style="position: absolute; display: flex; padding-left: 44px; font-family: 'Oxanium', cursive;">error-message</small>
                </div>

                <div class="form-input-kode-pos" >
                    <img src="{{ asset('resource/image/Regis/CareFinder-Register-KodePos-Logo.svg') }}" alt="kode-pos-logo">
                    <input type="text" name="kode-pos" id="kode-pos" placeholder="kode-pos" autocomplete="off">
                    <small id="error-message" style="position: absolute; display: flex; padding-left: 44px; font-family: 'Oxanium', cursive;">error-message</small>
                </div>

                <div class="form-input-agreement">

                    <input type="checkbox" name="agreement" id="egreement" >

                    <span>
                        Dengan mendaftar anda telah setuju dengan
                        <a href="">
                            Syarat dan ketentuan kami
                        </a>
                    </span>
                </div>

            </form>
            <a href="/dashboard" id="sign-up" class="sign-up">
                <button type="submit" >Sign Up</button>
            </a>

        </div>

        <div class="register-table-right" style="display: block;">
            <img src="{{ asset('resource/image/logo/Logo (Kosongan).svg') }}" alt="logo-CareFinder" style="width: ">
        </div>
    </div>


@endsection
