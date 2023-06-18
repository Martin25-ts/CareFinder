

@extends('Header')

@section('title', 'CareFinder - Dashboard')

@push('font-conten')
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
@endpush

{{-- ini buat ngisi href style css --}}
@push('style-conten')
    <link rel="shortcut icon" href="{{ asset('resource/image/logo/Logo Bulet.png') }}">
    <link rel="stylesheet" href="{{ asset('resource/css/dashboard-css/login-confirm.css') }}">
    <link href="{{ asset('resource/css/dashboard-css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('resource/css/dashboard-css/custom.css') }}" rel="stylesheet" />
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
                            <a class="nav-link px-lg-3 py-2 pt-lg-3 active" href="/dashboard" style="color: #f1f1e8">Home</a>
                        @else
                            <a class="nav-link px-lg-3 py-2 pt-lg-3 active" href="/" style="color: #f1f1e8">Home</a>

                        @endauth

                    </li>

                            @auth
                                {{--
                                    ini kalo user belum login trus mau akses favorite page
                                    bakal kedirect ke login page jadi harus login dulu
                                --}}
                                <li class="nav-item">
                                    <a class="nav-link px-lg-3 py-2 py-lg-3"
                                        href="/{{ explode(' ', trim( Auth::user()->userfname ) )[0] }}-favorite"
                                        style="color: #f1f1e8">Favorite</a>
                                </li>

                            @else

                                <li class="nav-item">
                                    <a class="nav-link px-lg-3 py-2 py-lg-3" href="/login" style="color: #f1f1e8">Favorite</a>
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


    <header class="w100 header-bg">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row">
                <div class="col-8">
                    <div class="site-heading">
                        <h3 style="font-weight: bold; font-size: 42px">
                            Discover Quality Care
                        </h3>
                        <h3 style="font-weight: bold; font-size: 42px">With Ease</h3>
                        <p class="subtitle-heading">
                            Easily search for hospital availability
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center info-search">
                <div class="col-6 text-center">
                    <div class="card shadow border-radius-30">
                        <div class="card-body">
                            <h5 class="m-0 text-dark">Mau Cari Rumah Sakit Dimana?</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5 content-search">
                <div class="col-12">
                    <div class="card shadow border-radius-10">
                        <div class="card-body text-dark card-search">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="kecamatan" class="font-weight-bold">Kecamatan</label>
                                        <input type="text" class="form-control w-100" id="kecamatan" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="kabupaten-kota" class="font-weight-bold">Kabupaten/Kota</label>
                                        <input type="text" class="form-control w-100" id="kabupaten-kota" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="provinsi" class="font-weight-bold">Provinsi</label>
                                        <input type="text" class="form-control w-100" id="provinsi" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-success btn-search mt-5">
                                    Cari Rumah Sakit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>

@endsection







@section('conten')
    <hr class="m-0 separator" />
    <section id="content">
        <div class="container px-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="mb-0">Recomendation By Us</h1>
                    <p class="m-0">Kami punya beberapa rekomendasi rumah sakit nih</p>
                </div>
            </div>
            <div class="row">
                <div class="row my-4">
                    <div class="col-2">
                        <button class="btn btn-lg btn-location-active">Jakarta</button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-lg btn-location">Malang</button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-lg btn-location">Semarang</button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-lg btn-location">Yogya</button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-lg btn-location">Solo</button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-lg btn-location">Medan</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <a href="/rspage">
                        <div class="card hospital-card">
                            <img src="https://source.unsplash.com/500x500?hospital-building-1" class="card-img-top"
                                alt="img" />
                            <div class="card-body py-4">
                                <span class="badge-available">Tersedia</span>
                                <h2 class="card-title hospital-name mb-0">RS Ibu Bapak</h2>
                                <p class="card-text mt-2">Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/rspage">
                        <div class="card hospital-card">
                            <img src="https://source.unsplash.com/500x500?hospital-building-2" class="card-img-top"
                                alt="img" />
                            <div class="card-body py-4">
                                <span class="badge-full">Penuh</span>
                                <h2 class="card-title hospital-name mb-0">RS Ibu Bapak</h2>
                                <p class="card-text mt-2">Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/rspage">
                        <div class="card hospital-card">
                            <img src="https://source.unsplash.com/500x500?hospital-building-3" class="card-img-top"
                                alt="img" />
                            <div class="card-body py-4">
                                <span class="badge-available">Tersedia</span>
                                <h2 class="card-title hospital-name mb-0">RS Ibu Bapak</h2>
                                <p class="card-text mt-2">Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">

                    <a href="/rspage">
                        <div class="card hospital-card">
                            <img src="https://source.unsplash.com/500x500?hospital-building-4" class="card-img-top"
                                alt="img" />
                            <div class="card-body py-4">
                                <span class="badge-available">Tersedia</span>
                                <h2 class="card-title hospital-name mb-0">RS Ibu Bapak</h2>
                                <p class="card-text mt-2">Alamat, Kabupaten</p>
                            </div>
                        </div>

                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-3">

                    <a href="/rspage">
                        <div class="card hospital-card">
                            <img src="https://source.unsplash.com/500x500?hospital-building-5" class="card-img-top"
                                alt="img" />
                            <div class="card-body py-4">
                                <span class="badge-full">Penuh</span>
                                <h2 class="card-title hospital-name mb-0">RS Ibu Bapak</h2>
                                <p class="card-text mt-2">Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/rspage">
                        <div class="card hospital-card">
                            <img src="https://source.unsplash.com/500x500?hospital-building-6" class="card-img-top"
                                alt="img" />
                            <div class="card-body py-4">
                                <span class="badge-available">Tersedia</span>
                                <h2 class="card-title hospital-name mb-0">RS Ibu Bapak</h2>
                                <p class="card-text mt-2">Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/rspage">
                        <div class="card hospital-card">
                            <img src="https://source.unsplash.com/500x500?hospital-building-7" class="card-img-top"
                                alt="img" />
                            <div class="card-body py-4">
                                <span class="badge-full">Penuh</span>
                                <h2 class="card-title hospital-name mb-0">RS Ibu Bapak</h2>
                                <p class="card-text mt-2">Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/rspage">
                        <div class="card hospital-card">
                            <img src="https://source.unsplash.com/500x500?hospital-building-8" class="card-img-top"
                                alt="img" />
                            <div class="card-body py-4">
                                <span class="badge-full">Penuh</span>
                                <h2 class="card-title hospital-name mb-0">RS Ibu Bapak</h2>
                                <p class="card-text mt-2">Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>
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
