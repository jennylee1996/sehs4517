<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ config('app.url') }}img/favicon.png" rel="icon">
    <link href="{{ config('app.url') }}img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ config('app.url') }}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ config('app.url') }}vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ config('app.url') }}vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ config('app.url') }}vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ config('app.url') }}vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ config('app.url') }}vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ config('app.url') }}vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ config('app.url') }}css/admin.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ url('/admin') }}" class="logo d-flex align-items-center">
            <img src="{{ config('app.url') }}img/logo.png" alt="">
            <span class="d-none d-lg-block">HKYSA Admin</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <span class="d-none d-md-block dropdown-toggle ps-2">Admin </span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Admin </h6>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <!-- logout -->
                        <a class="dropdown-item d-flex align-items-center" href="/admin-logout">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
        </ul>
    </nav><!-- End Icons Navigation -->
</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="{{ url('/admin') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-heading">Admin</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/members') }}">
                <i class="bi bi-person"></i>
                <span>Member</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/activities') }}">
                <i class="bi bi-layout-text-window-reverse"></i>
                <span>Activities</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/enrolled-activities') }}">
                <i class="bi bi-journal-text"></i>
                <span>Enrolled Activity Histories</span>
            </a>
        </li><!-- End Contact Page Nav -->
    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">
    @yield('content')
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        Designed by SEHS4517 Group 1
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ config('app.url') }}vendor/apexcharts/apexcharts.min.js"></script>
<script src="{{ config('app.url') }}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ config('app.url') }}vendor/chart.js/chart.umd.js"></script>
<script src="{{ config('app.url') }}vendor/quill/quill.min.js"></script>
<script src="{{ config('app.url') }}vendor/simple-datatables/simple-datatables.js"></script>
<script src="{{ config('app.url') }}vendor/tinymce/tinymce.min.js"></script>
<script src="{{ config('app.url') }}vendor/php-email-form/validate.js"></script>
<script src="{{ config('app.url') }}vendor/php-email-form/validate.js"></script>
<script src="{{ config('app.url') }}vendor/sweer"></script>
<!-- Template Main JS File -->
<script src="{{ config('app.url') }}js/admin-main.js"></script>

</body>

</html>


