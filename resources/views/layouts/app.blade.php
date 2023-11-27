<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SEHS4517 Assignment</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ config('app.url') }}img/favicon.png" rel="icon">
    <link href="{{ config('app.url') }}img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ config('app.url') }}vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ config('app.url') }}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ config('app.url') }}vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ config('app.url') }}vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ config('app.url') }}vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ config('app.url') }}vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ config('app.url') }}vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ config('app.url') }}css/style.css" rel="stylesheet">

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="{{ url('/') }}">HKYSA<span>.</span></a></h1>
        <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ config('app.url') }}img/logo.png" alt=""></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <!-- retrieve memnu list details from database -->
                @foreach ($menus as $menu)
                    @if (count($menu->children) > 0 )
                        <li class="dropdown" {{ Request::url() === url($menu->url) ? 'active' : '' }}><a href="{{ url($menu->url) }}"><span>{{ $menu->{'title_' . $locale} }}</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                @foreach ($menu->children as $child)
                                    <li><a href="{{ url($child->url) }}">{{ $child->{'title_' . $locale} }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        @if($menu->parent_id == null)
                            <li><a class="nav-link scrollto {{ Request::url() === url($menu->url) ? 'active' : '' }}" href="{{ url($menu->url) }}">{{ $menu->{'title_' . $locale} }}</a></li>
                        @endif
                    @endif
                @endforeach
                <!-- allow guest to register/login and allow authenticated user to access member account -->
                @if($locale == 'en')
                    <ul>
                        @guest
                            <li><a class="nav-link scrollto" href="/login">Login</a></li>
                        @endguest
                        @auth
                            <li class="dropdown"><a class="nav-link scrollto" href="/member-profile">Account<i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a class="nav-link scrollto" href="/member-profile">Profile</a></li>
                                    <li><a class="nav-link scrollto" href="/member-enrolled-activities">Enrolled Activities</a></li>
                                    <li><a class="nav-link scrollto" href="/logout">Logout</a></li>
                                </ul>
                            </li>
                        @endauth
                    </ul>
                @else
                    <ul>
                        @guest
                            <li><a class="nav-link scrollto" href="/login">登入</a></li>
                        @endguest
                        @auth
                        <li class="dropdown"><a class="nav-link scrollto" href="/member-profile">帳號<i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a class="nav-link scrollto" href="/member-profile">個人資料</a></li>
                                    <li><a class="nav-link scrollto" href="/member-enrolled-activities">已報名活動</a></li>
                                    <li><a class="nav-link scrollto" href="/logout">登出</a></li>
                                </ul>
                            </li>
                        @endauth
                    </ul>
                @endif
                <!-- select display language -->
                @if($locale == 'en')
                    <li><a class="nav-link scrollto" href="{{ route('change-language', ['locale' => 'tc']) }}">中文</a></li>
                @else
                    <li><a class="nav-link scrollto" href="{{ route('change-language', ['locale' => 'en']) }}">English</a></li>
                @endif


{{--                @auth--}}
{{--                    @if (auth()->user()->is_super_admin)--}}
{{--                        <li onclick="check_active('admin-area')"><a id="admin-area" data-scroll href="{{ route('admin_settings') }}">Admin</a></li>--}}
{{--                    @endif--}}
{{--                @endauth--}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main id="main">
    @yield('content')
</main>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
            <h5>Hong Kong Youth Support Association<span>.</span></h5>
            <p>
                <strong>Phone:</strong> +852 2345 6789<br>
                <strong>Email:</strong> info@example.com<br>
            </p>
        </div>
        <div class="social-links text-center text-md-end pt-3 pt-md-0">
            <div class="copyright">
                <br><br>
                &copy; Copyright <strong><span>Hong Kong Youth Support Association</span></strong>. All Rights Reserved
            </div>
            <div class="credits"> Designed by SEHS4517 Group 1</div>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ config('app.url') }}vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{ config('app.url') }}vendor/aos/aos.js"></script>
<script src="{{ config('app.url') }}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ config('app.url') }}vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ config('app.url') }}vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ config('app.url') }}vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{ config('app.url') }}vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{ config('app.url') }}js/main.js"></script>

</body>

</html>

