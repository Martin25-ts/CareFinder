@extends('Header')


@section('title', 'CareFinder - Favorite')


@push('font-conten')
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
@endpush

@push('style-conten')
    <link rel="shortcut icon" href="{{ asset('resource/image/logo/Logo Bulet.png') }}">
    <link rel="stylesheet" href="{{ asset('resource/css/dashboard-css/login-confirm.css') }}">
    <link href="{{ asset('resource/css/dashboard-css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('resource/css/dashboard-css/custom.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('resource/css/user-css/favorite.css') }}" rel="stylesheet">
@endpush


@push('script-conten')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            var button = $("#login-button-confirm");
            var buttonWidth = button.outerWidth() - 12;
            console.log(buttonWidth * -1);
            button.css("box-shadow", "inset -" + buttonWidth + "px 0px 0px 0px #81B214");
        });
    </script>
@endpush


@push('style-font-family')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium&display=swap" rel="stylesheet">
@endpush

@section('navbar')

    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">

        <div class="container px-3">
            @auth
                <a class="navbar-brand text-dark" href="/dashboard">
                    <img src="{{ asset('resource/image/logo/logo.png') }}" alt="" width="78%" />
                </a>
            @else
                <a class="navbar-brand text-dark" href="/">
                    <img src="{{ asset('resource/image/logo/logo.png') }}" alt="" width="78%" />
                </a>
            @endauth
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item">
                    @auth
                        <a class="nav-link px-lg-3 py-2 pt-lg-3" href="/dashboard" style="color: #f1f1e8">Home</a>
                    @else
                        <a class="nav-link px-lg-3 py-2 pt-lg-3" href="/" style="color: #f1f1e8">Home</a>
                    @endauth

                    @auth
                        {{--
                                    ini kalo user belum login trus mau akses favorite page
                                    bakal kedirect ke login page jadi harus login dulu
                                --}}
                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-2 py-lg-3 active"
                                href="/{{ explode(' ', trim(Auth::user()->userfname))[0] }}-favorite"
                                style="color: #f1f1e8">Favorite</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-2 py-lg-3 active" href="/login" style="color: #f1f1e8">Favorite</a>
                        </li>

                    @endauth

                    <li class="nav-item">
                        <a class="nav-link px-lg-3 py-2 py-lg-3"href="#content"style="color: #f1f1e8">About Me</a>
                    </li>

                    @auth
                        {{--
                                ini kalo user belum login yang keluar bakal login dan register
                                tapi kalo sudah login nanti yang keluar button dengan nama user
                            --}}
                        <div class="login-confirm">
                            <a href="/{{ explode(' ', trim(Auth::user()->userfname))[0] }}-profile">
                                @if (Auth::user()->userprofile === 'required')
                                    @if (Auth::user()->genderId === 'GN002')
                                        <img src="{{ asset('resource/profileuser/woman-default.png') }}"
                                            style="max-width: 59px; max-height: 59px;" alt="error">
                                    @elseif (Auth::user()->genderId === 'GN001')
                                        <img src="{{ asset('resource/profileuser/male-default.png') }}"
                                            style="max-width: 59px; max-height: 59px" alt="error">
                                    @elseif (Auth::user()->genderId === 'GN003' || Auth::user()->genderId === 'GN000')
                                        <img src="{{ asset('resource/profileuser/prefer-not-to-say-default.png') }}"
                                            style="max-width: 59px; max-height: 59px" alt="error">
                                    @endif
                                @else
                                    <img src="{{ asset(Auth::user()->userprofile) }}"
                                        style="width: 60px; height: 59px;  border-radius: 360px" alt="error">
                                @endif

                                <button class="login-button-confirm" id="login-button-confirm"> <span
                                        style="padding :  0 10px 0 10px; font-size: 20px; color: #f1f1e8">Hi,
                                        {{ explode(' ', trim(Auth::user()->userfname))[0] }}</span> </button>
                            </a>
                        </div>
                    @else
                        <li class="nav-item">
                            <a class="nav-link px-lg-4 py-2 py-lg-3 nav-auth border-radius-left" href="/login">Login</a>
                        </li>
                        <li class="nav-item border-left-auth">
                            <a class="nav-link px-lg-4 py-2 py-lg-3 nav-auth border-radius-right" href="/register">Sign
                                Up</a>
                        </li>

                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div class="SearchBar">
        <input type="text" placeholder="Search">
    </div>

@endsection



@section('conten')

    <section class="body-content">
        <div class="right">
            <div class="wrapper">
                <div class="row1">
                    <div class="menu">
                        <img src="https://source.unsplash.com/1600x1000?hospital" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                    <div class="menu">
                        <img src="https://source.unsplash.com/800x500?hospital-2" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                    <div class="menu">
                        <img src="https://source.unsplash.com/800x500?hospital-3" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                    <div class="menu">
                        <img src="https://source.unsplash.com/800x500?hospital-4" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                </div>
                <div class="row2">
                    <div class="menu">
                        <img src="https://source.unsplash.com/800x500?hospital-5" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                    <div class="menu">
                        <img src="https://source.unsplash.com/1600x1000?hospital-6" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                    <div class="menu">
                        <img src="https://source.unsplash.com/800x500?hospital-7" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                    <div class="menu">
                        <img src="https://source.unsplash.com/800x500?hospital-8" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                </div>
                <div class="row3">
                    <div class="menu">
                        <img src="https://source.unsplash.com/1600x1000?hospital-9" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                    <div class="menu">
                        <img src="https://source.unsplash.com/1600x1000?hospital-10" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                    <div class="menu">
                        <img src="https://source.unsplash.com/800x500?hospital-11" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                    <div class="menu">
                        <img src="https://source.unsplash.com/800x500?hospital-12" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                </div>
                <div class="row4">
                    <div class="menu">
                        <img src="https://source.unsplash.com/1600x1000?hospital-13" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                    <div class="menu">
                        <img src="https://source.unsplash.com/1600x1000?hospital-14" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                    <div class="menu">
                        <img src="https://source.unsplash.com/800x500?hospital-15" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                    <div class="menu">
                        <img src="https://source.unsplash.com/800x500?hospital-16" alt="">
                        <div class="Hstatus">
                            <p>Tersedia</p>
                        </div>
                        <div class="Hname">
                            <a href="#">RS Ibu Bapak</a>
                            <p>Alamat, Kabupaten</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('footer')
    <footer class="#content">
        <div class="container px-4 px-lg-5">
            <div class="row">
                <div class="row">
                    <div class="col-2 my-auto">
                        <img src="{{ asset('resource/image/logo/logo.png') }}" alt="logo" />
                    </div>
                    <div class="col-10 text-center my-auto footer-text">
                        <span style="width: 639px; max-width: 639px; ">Jl. Raya Kb. Jeruk No.27, RT.1/RW.9, Kb. Jeruk, Kec.
                            Kb. Jeruk,
                            <br>
                            Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</span>
                        <br>
                        <br>
                        &copy; PT. Carefinder Makmur Jaya
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection
