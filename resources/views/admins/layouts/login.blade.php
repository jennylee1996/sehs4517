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

<main>
    @yield('content')
</main><!-- End #main -->

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
<!-- Template Main JS File -->
<script src="{{ config('app.url') }}js/admin-main.js"></script>

</body>

</html>


