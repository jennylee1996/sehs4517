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
        <h1 class="logo me-auto"><a href="{{ url('/') }}">SEHS4517 {{ $locale }}<span>.</span></a></h1>
        <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ config('app.url') }}img/logo.png" alt=""></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                @foreach ($menus as $menu)
                    @if (count($menu->children) > 0 )
                        <li class="dropdown" {{ Request::url() === url($menu->url) ? 'active' : '' }}><a href="{{ url($menu->url) }}"><span>{{ $menu->{'title_' . $locale} }}</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                @foreach ($menu->children as $child)
                                    <li><a href="{{ url($child->url) }}">{{ $child->title_en }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        @if($menu->parent_id == null)
                            <li><a class="nav-link scrollto {{ Request::url() === url($menu->url) ? 'active' : '' }}" href="{{ url($menu->url) }}">{{ $menu->{'title_' . $locale} }}</a></li>
                        @endif
                    @endif
                @endforeach
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

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>SEHS4517<span>.</span></h3>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>SHES4517</span></strong>. All Rights Reserved
            </div>
            <div class="credits"> Designed by SHES4517 Group 3</div>
        </div>
        <div class="social-links text-center text-md-end pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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

