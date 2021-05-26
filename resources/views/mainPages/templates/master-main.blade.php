<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-4/bootstrap.min.css') }}">
    
    <!-- custome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custome-CSS/css-custome.css') }}">

    <!-- Title Page -->
    <title>@yield('title-page', 'Halaman Beranda')</title>

</head>

<body>


    <!-- Navbar -->
    @include('mainPages.templates.header-main')
    <!-- /.Navbar -->
    
    <div class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </div>


    <!-- Footer -->
    @include('mainPages.templates.footer-main')
    <!-- /.Footer -->

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap-js/bootstrap.min.js') }}"></script>
</body>

</html>