@extends('Header')

@section('title', 'CareFinder - Register2')

{{-- ini buat ngisi font href --}}
@push('font-conten')

@endpush

{{-- ini buat ngisi href style css --}}
@push('style-conten')

    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/register-css/register-page1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/register-css/register-page-main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/login-regis-button-main.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/register-css/responsive-register.css') }}"> --}}
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
    <div style="font-family: 'Oxanium', cursive; " class="register-table">
        <div class="register-table-left">
            <div class="image-signup">
                <img src="{{ asset('resource/image/Regis/CareFinder-Register-Title-Logo.svg') }}" alt="logo-auth-login">
                <h1 class="sign-up-text" style="font-size: 40px;">Sign Up</h1>
                <h4 class="sign-up-deskripsi" style="font-size: 40px;  font-weight: 600;color: #615D5D;font-size: 20px;line-height: 25px;">Daftarkan Akunmu</h4>
            </div>
            <div class="form-input">
                <form  action="/login" method="GET">

                    <div class="form-input-jalan" >
                        {{-- <img src="{{ asset('resource/image/Regis/CareFinder-Register-Jalan-Logo.svg')}}" alt="jalan-logo"> --}}
                        <img width="31" height="31" style="opacity: 50%;" src="https://img.icons8.com/sf-black-filled/64/road.png" alt="road"/>
                        <input type="text" name="Jalan" id="Jalan" placeholder="Jalan / Street" autocomplete="off">
                        <small id="error-message" >error-message</small>
                    </div>

                    <div class="form-input-kelurahan" >
                        {{-- <img src="{{ asset('resource/image/Regis/CareFinder-Register-Kelurahan-Logo.svg') }}" alt="kelurahan-logo"> --}}
                        <img width="29" height="29" style="opacity: 50%;" src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/external-garage-automobile-kiranshastry-solid-kiranshastry-1.png" alt="external-garage-automobile-kiranshastry-solid-kiranshastry-1"/>
                        <input type="text" name="kelurahan" id="kelurahan" placeholder="kelurahan / Urban Village" autocomplete="off">
                        <small id="error-message" >error-message</small>
                    </div>

                    <div class="form-input-kecamatan" >
                        {{-- <img src="{{ asset('resource/image/Regis/CareFinder-Register-Kelurahan-Logo.svg') }}" alt="kecamatan-logo"> --}}
                        <img width="29" height="29" style="opacity: 50%;" src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/external-garage-automobile-kiranshastry-solid-kiranshastry-1.png" alt="external-garage-automobile-kiranshastry-solid-kiranshastry-1"/>
                        <input type="text" name="kecamatan" id="kecamatan" placeholder="kecamatan / District" autocomplete="off">
                        <small id="error-message" >error-message</small>
                    </div>

                    <div class="form-input-kabupatenr" >
                        {{-- <img src="{{ asset('resource/image/Regis/CareFinder-Register-Kabupaten-Logo.svg') }}" alt="kabupaten-logo"> --}}
                        <img width="31" height="31" style="opacity: 50%;" src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/external-map-camping-kiranshastry-solid-kiranshastry.png" alt="external-map-camping-kiranshastry-solid-kiranshastry"/>
                        <input type="text" name="kabupaten" id="kabupaten" placeholder="kabupaten / Regency" autocomplete="off">
                        <small id="error-message" >error-message</small>
                    </div>

                    <div class="form-input-kode-pos" >
                        {{-- <img src="{{ asset('resource/image/Regis/CareFinder-Register-KodePos-Logo.svg') }}" alt="kode-pos-logo"> --}}
                        <img width="28" height="28"  style="opacity: 50%;" src="https://img.icons8.com/ios/50/paper-plane--v1.png" alt="paper-plane--v1"/>
                        <input type="text" name="kode-pos" id="kode-pos" placeholder="Kode Pos / Postal Code" autocomplete="off">
                        <small id="error-message">error-message</small>
                    </div>

                    {{-- <div class="form-input-agreement">

                        <input type="checkbox" name="agreement" id="egreement" >

                        <span>
                            Dengan mendaftar anda telah setuju dengan
                            <a href="">
                                Syarat dan ketentuan kami
                            </a>
                        </span>
                    </div> --}}
                    <button type="submit" class="my-button" id="my-button" style="margin-right: -184px">Sign Up</button>
                </form>
            </div>



        </div>

        <div class="register-table-right" >
            <img src="{{ asset('resource/image/logo/Logo (Kosongan).svg') }}" alt="logo-CareFinder" style="padding: 0 20px 0 20px">
        </div>
    </div>


@endsection
