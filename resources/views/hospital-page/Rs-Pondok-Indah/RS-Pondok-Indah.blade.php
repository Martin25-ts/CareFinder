@extends('Header')


@section('title', 'CareFinder - RS Page')


@push('style-conten')
    <link rel="shortcut icon" href="{{ asset('resource/image/logo/Logo Bulet.png') }}">
    <link href="{{ asset('resource/css/dashboard-css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('resource/css/dashboard-css/custom.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('resource/css/dashboard-css/login-confirm.css') }}">
    <link rel="stylesheet" href="{{ asset('resource/css/rs-css/rs-main-css.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@push('style-font-family')
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Rajdhani:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap"
        rel="stylesheet" />
@endpush


@push('script-conten')
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
                            <a class="nav-link px-lg-3 py-2 py-lg-3"
                                href="/{{ explode(' ', trim(Auth::user()->userfname))[0] }}-favorite"
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

    <section id="imageGroup" class="bg-linear-main pt-5">
        <div class="container">
            <div class="row mb-4">
                @auth
                    <a href="/dashboard">
                    @else
                        ` <a href="/">
                        @endauth
                        <div class="col-lg-12">
                            <h3 class="text-white"><i class="fa fa-arrow-left"></i> Back</h3>
                        </div>
                    </a>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="https://source.unsplash.com/1600x1000?hospital" alt="img" class="w-100 h-100" />
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="https://source.unsplash.com/800x500?hospital-2" alt="img" class="w-100" />
                        </div>
                        <div class="col-lg-6">
                            <img src="https://source.unsplash.com/800x500?hospital-3" alt="img" class="w-100" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <img src="https://source.unsplash.com/800x500?hospital-4" alt="img" class="w-100" />
                        </div>
                        <div class="col-lg-6">
                            <img src="https://source.unsplash.com/800x500?hospital-5" alt="img" class="w-100" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


@section('conten')
    <section class="info mt-4 bg-custom-template py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h6 class="mb-2 fw-400">
                        <i class="fa fa-star"></i> Heart Specialist
                    </h6>
                    <h1 class="mb-2">Rumah Sakit Sakitan</h1>
                    <h6 class="fw-400">
                        1.4 Km from your area
                        <i class="fa fa-chevron-right ml-5"></i> Alamat Rumah sakit,
                        Kelurahan, Kota, Planet
                    </h6>
                </div>
                <div class="col-lg-4 my-auto text-center">
                    <a href="javascript:void(0)" id="bookmark-link">
                        <img src="https://i.ibb.co/wg59Z2k/bookmark.png" bookmark" id="bookmark-logo" />
                    </a>
                    <button class="btn btn-available">Available</button>
                </div>
            </div>
            <hr class="my-3 hr-green" />
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-3">About Hospital</h2>
                    <p class="fw-200 mb-0">
                        Rumah Sakit Sakitan adalah sebuah lembaga kesehatan yang terkemuka dan terpercaya di Indonesia.
                        Rumah sakit ini menawarkan berbagai layanan medis dan perawatan kesehatan yang komprehensif untuk
                        pasien dari segala usia dan latar belakang.
                        Fasilitas pelayanan rumah sakit ini meliputi Infrastruktur Modern, Tim Medis Profesional, Layanan
                        Medis yang Komprehensif, Pusat Spesialisasi, Perawatan Pasien yang Holistik, Sistem Informasi
                        Kesehatan, Lingkungan yang Nyaman.
                        Rumah Sakit Sakitan telah berdedikasi untuk memberikan layanan kesehatan berkualitas tinggi kepada
                        masyarakat Indonesia. Melalui pendekatan yang holistik, fasilitas modern, dan tim medis yang
                        berkualitas, mereka berupaya menjaga dan meningkatkan kesehatan dan kesejahteraan setiap pasien yang
                        datang ke rumah sakit ini.
                    </p>
                </div>
            </div>
            <hr class="my-3 hr-green" />
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-3">Fasility</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 text-center">
                    <img src="https://source.unsplash.com/500x500?hospital-6" alt="ugd"
                        class="rounded-circle w-100 mb-3" />
                    <h4>UGD</h4>
                </div>
                <div class="col-lg-2 text-center">
                    <img src="https://source.unsplash.com/500x500?ambulance" alt="ugd"
                        class="rounded-circle w-100 mb-3" />
                    <h4>Ambulans</h4>
                </div>
                <div class="col-lg-2 text-center">
                    <img src="https://source.unsplash.com/500x500?hospital-7" alt="ugd"
                        class="rounded-circle w-100 mb-3" />
                    <h4>IGD</h4>
                </div>
                <div class="col-lg-2 text-center">
                    <img src="https://source.unsplash.com/500x500?icu" alt="ugd"
                        class="rounded-circle w-100 mb-3" />
                    <h4>ICU</h4>
                </div>
                <div class="col-lg-2 text-center">
                    <img src="https://source.unsplash.com/500x500?hospital-8" alt="ugd"
                        class="rounded-circle w-100 mb-3" />
                    <h4>CT Scan</h4>
                </div>
                <div class="col-lg-2 text-center">
                    <img src="https://source.unsplash.com/500x500?hospital-lab" alt="ugd"
                        class="rounded-circle w-100 mb-3" />
                    <h4>Laboratory</h4>
                </div>
            </div>
            <hr class="my-3 hr-green" />
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-3">Usable Insurance</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 text-center my-auto">
                    <img src="{{ asset('resource/insurance/AIA.png') }}" alt="img" class="mw-100 py-4" />
                </div>
                <div class="col-lg-3 text-center my-auto">
                    <img src="{{ asset('resource/insurance/Allianz.png') }}" alt="img" class="mw-100 py-4" />
                </div>
                <div class="col-lg-3 text-center my-auto">
                    <img src="{{ asset('resource/insurance/Pertamina.png') }}" alt="img" class="mw-100 py-4" />
                </div>
                <div class="col-lg-3 text-center my-auto">
                    <img src="{{ asset('resource/insurance/Prudential.png') }}" alt="img" class="mw-100 py-4" />
                </div>
            </div>
            <hr class="my-3 hr-green" />
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-3">Hospital Class</h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12 mb-3">
                    <div class="card border-0">
                        <div class="card-body bg-blue-sea">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="mb-3">First Class Room</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <img src="https://source.unsplash.com/400x500?hospital-room-1" alt="..."
                                        class="w-100 h-100 border-radius-img" />
                                </div>
                                <div class="col-lg-10">
                                    <div class="card mb-0">
                                        <div class="card-body p-0">
                                            <div class="row">
                                                <div class="col-lg-7 border-right-custom">
                                                    <div class="row m-4">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/ios-filled/50/occupied-bed.png"
                                                                        alt="logo" width="20%" />
                                                                    1 Patient / room
                                                                </div>
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/ios/50/three-seater-sofa.png"
                                                                        alt="logo" width="20%" />
                                                                    Sofa
                                                                </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/ios-filled/50/wifi--v1.png"
                                                                        alt="logo" width="20%" />
                                                                    Free Wifi


                                                                </div>
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/ios/50/tv.png"
                                                                        alt="logo" width="20%" />
                                                                    TV
                                                                </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/pastel-glyph/64/air-conditioner--v2.png"
                                                                        alt="logo" width="20%" />
                                                                    AC
                                                                </div>
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/fluency-systems-regular/48/bureau.png"
                                                                        alt="logo" width="20%" />
                                                                    Drawer
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 text-center my-auto">
                                                    <h4 class="font-weight-bold">
                                                        Rp 700.000 <sub>/night</sub>
                                                    </h4>
                                                    <a href="javascript:void(0)"
                                                        class="btn btn-available px-3">Available</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="card border-0">
                        <div class="card-body bg-blue-sea">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="mb-3">Second Class Room</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <img src="https://source.unsplash.com/400x500?hospital-room-2" alt="..."
                                        class="w-100 h-100 border-radius-img" />
                                </div>
                                <div class="col-lg-10">
                                    <div class="card mb-0">
                                        <div class="card-body p-0">
                                            <div class="row">
                                                <div class="col-lg-7 border-right-custom">
                                                    <div class="row m-4">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/ios-filled/50/occupied-bed.png"
                                                                        alt="logo" width="20%" />
                                                                    1 Patient / room
                                                                </div>
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/ios/50/three-seater-sofa.png"
                                                                        alt="logo" width="20%" />
                                                                    Chair
                                                                </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/ios-filled/50/wifi--v1.png"
                                                                        alt="logo" width="20%" />
                                                                    Free Wifi
                                                                </div>
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/ios/50/tv.png"
                                                                        alt="logo" width="20%" />
                                                                    TV
                                                                </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/pastel-glyph/64/air-conditioner--v2.png"
                                                                        alt="logo" width="20%" />
                                                                    AC
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 text-center my-auto">
                                                    <h4 class="font-weight-bold">
                                                        Rp 700.000 <sub>/night</sub>
                                                    </h4>
                                                    <a href="javascript:void(0)"
                                                        class="btn btn-available px-3">Available</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="card border-0">
                        <div class="card-body bg-blue-sea">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="mb-3">Third Class Room</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <img src="https://source.unsplash.com/400x500?hospital-room-3" alt="..."
                                        class="w-100 h-100 border-radius-img" />
                                </div>
                                <div class="col-lg-10">
                                    <div class="card mb-0">
                                        <div class="card-body p-0">
                                            <div class="row">
                                                <div class="col-lg-7 border-right-custom">
                                                    <div class="row m-4">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <<img
                                                                        src="https://img.icons8.com/ios-filled/50/occupied-bed.png"
                                                                        alt="logo" width="20%" />
                                                                    1 Patient / room
                                                                </div>
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/ios/50/three-seater-sofa.png"
                                                                        alt="logo" width="20%" />
                                                                    Chair
                                                                </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/ios-filled/50/wifi--v1.png"
                                                                        alt="logo" width="20%" />
                                                                    Free Wifi
                                                                </div>
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/ios/50/tv.png"
                                                                        alt="logo" width="20%" />
                                                                    TV
                                                                </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-6">
                                                                    <img src="https://img.icons8.com/pastel-glyph/64/air-conditioner--v2.png"
                                                                        alt="logo" width="20%" />
                                                                    AC
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 text-center my-auto">
                                                    <h4 class="font-weight-bold">
                                                        Rp 500.000 <sub>/night</sub>
                                                    </h4>
                                                    <a href="javascript:void(0)"
                                                        class="btn btn-available px-3">Available</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <script>
        const bookmarkLink = document.getElementById("bookmark-link");
        const bookmarkImg = document.getElementById("bookmark-logo");

        bookmarkLink.addEventListener("click", function() {
            const isBookmarked = sessionStorage.getItem("isBookmarked");

            if (isBookmarked === "true") {
                sessionStorage.setItem("isBookmarked", "false");
                bookmarkImg.src = "https://i.ibb.co/wg59Z2k/bookmark.png";
                console.log("Bookmark removed");
            } else {
                sessionStorage.setItem("isBookmarked", "true");
                bookmarkImg.src = "https://i.ibb.co/68fdV1K/bookmark-saved.png";
                console.log("Bookmark saved");
            }
        });
    </script>

@endsection
