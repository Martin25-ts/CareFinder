@extends('Header')

@section('title', 'CareFinder - Profile')
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
    <link rel="stylesheet" href="{{ asset('resource/css/user-css/pop-up.css') }}">
    <link rel="stylesheet" href="{{ asset('resource/css/user-css/profile.css') }}">

    @if (Auth::user()->statusId === 'ST001')
        <link rel="stylesheet" href="{{ asset('resource/css/user-css/otp.css') }}">
    @endif
@endpush
@push('script-conten')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>



    {{-- Logic pop-up logout --}}
    <script>
        $(document).ready(function() {
            // $('.pop-up-content').hide();
            $('#logout-button').click(function() {
                $('.pop-up-content').fadeIn();
                // $('body').addClass('blur-page');
            });

            $('#cancel-button').click(function() {
                $('.pop-up-content').fadeOut();
                // $('body').removeClass('blur-page');
            });
        });

        $(document).ready(function() {
            $('.pop-up-update').hide();
            $('#pop-up-update-button').click(function() {
                $('.pop-up-update').fadeIn();
                // $('body').addClass('blur-page');
            });

            $('#update-close').click(function() {
                $('.pop-up-update').fadeOut();
                // $('body').removeClass('blur-page');
            });
        });
    </script>
    <script>
        function sendOTP() {
            $.ajax({
                url: "{{ route('send.otp') }}", // Route to send the OTP email
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function() {
                    // Show the OTP form container
                    $('#otp-form-container').show();
                }
            });
        }
    </script>
@endpush

@push('style-font-family')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium&display=swap" rel="stylesheet">
@endpush

@section('navbar')
    <section class="gradien">


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
                <h1 style="position: absolute; font-weight: 650; color: white; padding: 0 0 0 140px">Profile</h1>
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
                            <a class="nav-link px-lg-3 py-2 py-lg-3" href="#direct" style="color: #f1f1e8">About Me</a>
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
            <script>
                $(document).ready(function() {
                    var button = $("#login-button-confirm");
                    var buttonWidth = button.outerWidth() - 12;
                    console.log(buttonWidth * -1);
                    button.css("box-shadow", "inset -" + buttonWidth + "px 0px 0px 0px #81B214");
                });

                $(document).ready(function() {
                    var navbar = $("#mainNav");
                    var profile = $("#profile-container");
                    var navbarHeight = navbar.height() + 20;
                    console.log(navbarHeight);

                    profile.css("padding-top", navbarHeight + "px");
                });
            </script>
        </nav>

        <section class="profile-container" id="profile-container">
            <div class="image-profile-container">
                <form action="">
                    @if (Auth::user()->userprofile === 'required')

                        @if (Auth::user()->genderId === 'GN002')
                            <input type="image" src="{{ asset('resource/profileuser/woman-default.png') }}"
                                width="340px" height="340px" style="border-radius: 180px">
                        @elseif (Auth::user()->genderId === 'GN001')
                            <input type="image" src="{{ asset('resource/profileuser/male-default.png') }}"
                                width="340px" height="340px" style="border-radius: 180px">
                        @elseif (Auth::user()->genderId === 'GN003' || Auth::user()->genderId === 'GN000')
                            <input type="image" src="{{ asset('resource/profileuser/prefer-not-to-say-default.png') }}"
                                width="340px" height="340px" style="border-radius: 180px">
                        @endif
                    @else
                        <input type="image" src="{{ asset(Auth::user()->userprofile) }}" width="285px"
                            height="285px" style="border-radius: 180px">
                    @endif
                </form>

            </div>
            <div class="user-profile">
                <div class="user-main-account">

                    <span> {{ Auth::user()->userfname }} {{ Auth::user()->userlname }}</span>
                    <br>
                    <span>{{ Auth::user()->userphone }}</span>
                    <br>
                    <span>{{ Auth::user()->useremail }}</span>
                    <br>
                    @if (Auth::user()->statusId === 'ST001')
                        <button id="show-otp-form" style="background: red; color: white; margin-top: 20px;">Profile has
                            not been
                            verified</button>
                    @elseif (Auth::user()->statusId === 'ST002')
                        <button style="background: white; color: green; margin-top: 20px;">Profile has been
                            verified</button>
                    @elseif (Auth::user()->statusId === 'ST003')
                        <button style="background: black; color: red; margin-top: 20px;">Your account has been
                            suspend</button>
                    @endif
                </div>
                <div class="userDOB-container">
                    <div class="user-year">
                        <span>{{ \Carbon\Carbon::parse(Auth::user()->userDOB)->format('Y') }}</span>
                    </div>
                    <div class="back">
                        <div class="user-month">
                            <span>{{ \Carbon\Carbon::parse(Auth::user()->userDOB)->format('F') }}</span>
                        </div>
                        <div class="user-day">
                            <span>{{ \Carbon\Carbon::parse(Auth::user()->userDOB)->format('j') }}</span>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </section>

    <section class="user-body-info">
        <div>
            <img width="64" height="64" src="https://img.icons8.com/wired/64/ruler.png" alt="ruler" />
            <h4>{{ Auth::user()->userheight }} cms</h4>
        </div>

        <div>
            <img width="64" height="64" src="https://img.icons8.com/pastel-glyph/64/body-weight-scales.png"
                alt="body-weight-scales" />
            <h4>{{ Auth::user()->userweight }} kgs</h4>
        </div>

        <div>
            <img width="64" height="64"
                src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/external-user-interface-kiranshastry-solid-kiranshastry-1.png"
                alt="external-user-interface-kiranshastry-solid-kiranshastry-1" />
            @php
                $dob = Auth::user()->userDOB;
                $dobDate = new DateTime($dob);
                $today = new DateTime();
                $age = $today->diff($dobDate)->y;
            @endphp
            <h4>
                {{ $age }} y/o
            </h4>
        </div>
    </section>
@endsection

@section('conten')
    <section class="user-profile-info">
        <div class="profile-container">
            <div class="profile-container-left">
                <div class="user-profile-gender" style="padding-top: 20px">
                    <label for="gender">Gender</label>

                </div>
                <div class="user-profile-disease">
                    <label for="disease">Disease History</label>

                </div>
                <div class="user-profile-blood" style="gap: 16%">
                    <label for="blood">Blood Type</label>

                </div>
                <div class="user-profile-relationship-status">
                    <label for="relationship">Relationship Status</label>

                </div>
            </div>
            <div class="profile-container-right">
                <div class="user-gender-value">
                    @if (Auth::user()->genderId === 'GN000')
                        <span>Male / Female / Prefer not to say</span>
                    @else
                        <span>: {{ Auth::user()->gender->gendername }}</span>
                    @endif
                </div>
                <div class="user-disease-value">
                    @if (Auth::user()->userdisesase === 'required')
                        <span>-</span>
                    @else
                        <span style="max-width: 888px; width: fit-content">: {{ Auth::user()->userdisesase }}</span>
                    @endif
                </div>
                <div class="user-bloodtype-value">
                    @if (Auth::user()->bloodId === 'BL000')
                        <span>-</span>
                    @else
                        <span>: {{ Auth::user()->blood->bloodName }}</span>
                    @endif
                </div>

                <div class="user-relationship-value">
                    @if (Auth::user()->relationshipId === 'RL000')
                        <span>-</span>
                    @else
                        <span>: {{ Auth::user()->relationship->relationshipname }}</span>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="update-profile" style="padding-top: 2%; width: 100%; display: flex; justify-content: center">
        <div class="change-button-container" style="width: 80%; display: flex; justify-content: right;">
            <button id="pop-up-update-button"
                style="background: none; border: none; text-decoration: underline; color: #B50606;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-family: 'Poppins';">Change</button>
        </div>

    </section>
@endsection

@section('footer')
    <Section class="user-insurance">
        <div class="user-container">
            <H1 style="padding-bottom: 2%">Insurance</H1>
            @if (Auth::user()->userinsurance != 'required')
                <div class="insurance-container">

                    <img width="8%"
                        src="{{ asset('resource/insurance/' . Auth::user()->userinsurance . '.png') }}"alt="">

                    <div class="insurance-detail">
                        <h1 class="insurance-title">
                            {{ Auth::user()->userinsurance }}
                        </h1>
                        <span class="insurance-detail" id="insurance-detail">

                        </span>
                        <Script>
                            $(document).ready(function() {
                                var fileName = '{{ Auth::user()->userinsurance }}.txt';
                                $.get('/resource/insurance/' + fileName, function(text) {
                                    $('#insurance-detail').text(text);
                                });
                            });
                        </Script>
                    </div>
                </div>
            @endif
        </div>

    </Section>
    <footer id="direct">
        <div class="footer-container">
            <div class="footer-img">
                <img src="{{ asset('resource/image/logo/Logo (Kosongan).png') }}" alt="" width="25%">
            </div>


            <div class="logout" style="z-index: 999999999">
                <button id="logout-button">Logout</button>
            </div>
        </div>

    </footer>

    <div class="pop-up-content" style="display: none">
        <h1>Are you sure want to logout?</h1>
        <div class="button-logout">
            <form action="/logout" method="GET">
                <input type="submit" value="Logout">
            </form>
        </div>
        <div class="button-exit">
            <button id="cancel-button">Cancel</button>
        </div>
    </div>

    <div class="pop-up-update" style="background: #F1F1E8;display: none">
        <div style="text-align: right">
            <button style="background: none; border: none" id="update-close">X</button>
        </div>

        <form action="/update-profile" method="POST">
            @csrf
            <div class="up-row">
                <div class="left-row">
                    <div class="input-height-container">
                        <label for="height">Height</label>

                        <input type="number" name="height" id="height">
                    </div>
                    <div class="input-gender-container">
                        <label for="gender">Gender</label>

                        <select id="gender" name="gender">
                            <option value="option1">-</option>
                            <option value="option2">Male</option>
                            <option value="option3">Female</option>
                            <option value="option4">Prefer Not To Say</option>
                        </select>
                    </div>
                    <div class="input-relStatus-container">
                        <label for="relStatus">RelaionShip Status</label>

                        <select name="relStatus" id="relStatus">
                            <option value="option1">-</option>
                            <option value="option2">Single</option>
                            <option value="option3">Married</option>
                            <option value="option4">Divorced</option>
                        </select>
                    </div>
                </div>

                <div class="right-row">
                    <div class="input-weight-container">
                        <label for="weight">Weight</label>

                        <input type="number" name="weight" id="weight">
                    </div>
                    <div class="input-blood-type-container">
                        <label for="bloodType">Blood Type</label>

                        <select name="bloodType" id="bloodType">
                            <option value="option1">-</option>
                            <option value="option2">A</option>
                            <option value="option3">AB</option>
                            <option value="option4">O</option>
                            <option value="option5">B</option>
                        </select>
                    </div>
                    <div class="input-insurance-container">
                        <label for="insurance">Insurance</label>

                        <select name="insurance" id="insurance">
                            <option value="required">-</option>
                            <option value="AIA">AIA</option>
                            <option value="Allianz">Allianz</option>
                            <option value="BPJS">BPJS Kesehatan</option>
                            <option value="Pertamina">Pertamina</option>
                            <option value="Prudential">Prudential</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="center-row">
                <div class="input-disease-container">
                    <label for="disease">Disease History</label>
                    @if (Auth::user()->userdisesase === 'required')
                        <input type="text" name="disease" id="disease">
                    @else
                        <input type="text" name="disease" id="disease" value="{{ Auth::user()->userdisesase }}">
                    @endif
                </div>

            </div>



            <button style="background: none; border: none; padding-top: 10px; text-decoration: underline; color: #206A5D"
                type="submit">Submit</button>

        </form>

    </div>

    @if (Auth::user()->statusId === 'ST003')
        <div id="otp-form-container" style="display: none">
            <div class="container-title">
                <h1>Verification code has been sent</h1>
            </div>
            <div class="container-otp">
                <input type="text" class="otp-input" maxlength="1" />
                <input type="text" class="otp-input" maxlength="1" />
                <input type="text" class="otp-input" maxlength="1" />
                <input type="text" class="otp-input" maxlength="1" />
            </div>
        </div>
    @endif

@endsection
