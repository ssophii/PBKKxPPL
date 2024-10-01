<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>P A P</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="{{ asset('assets/img/unib.png') }}" rel="icon">
    <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .header {
            flex-shrink: 0;
        }
        .main {
            flex-grow: 1;
            overflow: auto;
        }
        .hero {
            height: calc(100vh - 60px - 60px); /* Adjust based on header and footer height */
            display: flex;
            align-items: center;
        }
        .footer {
            flex-shrink: 0;
            height: 60px; /* Adjust as needed */
        }
    </style>
</head>
<body class="index-page">
    <!-- Header -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="{{ url('/dashboard') }}" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset('assets/img/unib.png') }}" alt="">
                <h1 style="color: #dda04d;"> W A P </h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero">Masuk</a></li>
                    <li><a href="#about">|</a></li>
                    <li><a href="#contact">Daftar</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                        <h1>Jadi Asisten Dosen Praktikum? Yuk, Daftar Sekarang!</h1>
                        <p>Banyak manfaatnya loh!</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Daftar Sekarang</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('assets/img/hero.png') }}" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section style="padding-top: 0cm; padding-bottom: 0cm; position: fixed; bottom: 0; width: 100%; align-items: center" >
            <footer id="footer" class="footer" >
                <div class="container copyright text-center">
                    <p><strong class="px-1">INFORMATIKA</strong> <span>2024</span></p>
                </div>
            </footer>
        </section>
    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>