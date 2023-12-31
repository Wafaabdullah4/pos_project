<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pesan Online SMK PI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/pi.png') }}" rel="icon">
    {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-cons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>POS<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#menu">Pesan</a></li>
                    <li><a href="#events">Faq</a></li>
                    {{-- <li><a href="#chefs">Chefs</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li> --}}
                </ul>
            </nav><!-- .navbar -->

            <a class="btn-book-a-table" href="{{ route('login') }}">Login</a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Selamat Datang<br>Website POS</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Pesan Online Siswa </p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#book-a-table" class="btn-book-a-table">Ayoo Join</a>
                        {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="{{ asset('assets/img/beranda.png') }}" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Tentang Kami</h2>
                    <p>Cari Tau <span>Tentang Kami</span></p>
                </div>

                <div class="row gy-2">
                    <div class="col-lg-7 position-relative about-img"
                        style="background-image: url({{ asset('assets/img/tentang.png') }}) ; background-repeat:no-repeat;"
                        data-aos="fade-up" data-aos-delay="150">
                        <div class="call-us position-absolute">
                            <h4>Pelayanan Kami</h4>
                            <p>posprakarya@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Selamat datang di Pos - Pesan Online Siswa, tempat di mana pesanan makanan dan minuman
                                Siswa menjadi lebih mudah!
                                <br>
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Rasakan kemudahan dengan hanya beberapa klik untuk
                                    pesan makanan favoritmu.</li>
                                <li><i class="bi bi-check2-all"></i> Nikmati kepraktisan dengan layanan kami yang cepat
                                    dan efisien.</li>
                                <li><i class="bi bi-check2-all"></i> Temukan beragam pilihan lezat, dari hidangan klasik
                                    hingga inovatif!</li>
                            </ul>
                            <p>
                                Di Pos, kami tidak hanya menyederhanakan proses pesanan, tetapi juga memberikan
                                pengalaman yang lengkap. Jelajahi
                                daftar makanan/minuman kami, saksikan pengantar kami menyiapkan pesanan Anda, dan
                                ketahui bahwa admin kami selalu
                                siap membantu. Selamat menikmati layanan terbaik di Pesan Online Siswa!
                            </p>

                            {{-- <div class="position-relative mt-4">
                                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="why-box">
                            <h3>Kenapa Harus Pilih Pos - Pesan Online Siswa?</h3>
                            <p>
                                Pos - Pesan Online Siswa bukan hanya sekadar tempat pesan makanan biasa. Kami hadir
                                untuk membuat pengalaman
                                pesan makananmu jadi lebih seru dan mudah. Kenapa harus pilih Pos? Ini dia
                                keuntungan-keuntungannya:
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">Lebih Lanjut <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-center">
                        <div class="row gy-4">

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h4>Pesanan Tersimpan dengan Aman</h4>
                                    <p>Informasi pesananmu aman di sini. Kami mengutamakan keamanan data dan privasi
                                        pengguna.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-gem"></i>
                                    <h4>Pilihan Makanan Luar Biasa</h4>
                                    <p>Dengan beragam pilihan makanan dan minuman, setiap pesananmu menjadi pengalaman
                                        kuliner yang luar
                                        biasa.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>Proses Pesanan Cepat dan Mudah</h4>
                                    <p>Proses pesanan yang cepat dan mudah, membuatmu bisa menikmati makanan favoritmu
                                        tanpa repot.</p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>
                </div>

            </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="zoom-out">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Workers</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>
        </section><!-- End Stats Counter Section -->

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Menu</h2>
                    <p>Check Our <span>Yummy Menu</span></p>
                </div>

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                            <h4>Starters</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                            <h4>Breakfast</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                            <h4>Lunch</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                            <h4>Dinner</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Starters</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Starter Menu Content -->

                    <div class="tab-pane fade" id="menu-breakfast">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Breakfast</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Breakfast Menu Content -->

                    <div class="tab-pane fade" id="menu-lunch">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Lunch</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Lunch Menu Content -->

                    <div class="tab-pane fade" id="menu-dinner">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Dinner</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Dinner Menu Content -->

                </div>

            </div>
        </section><!-- End Menu Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>Apa yang mereka <span>Katakan tentang POS</span></p>
                </div>

                <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                                suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh
                                                et. Maecen aliquam, risus at semper.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Saul Goodman</h3>
                                            <h4>Ceo &amp; Founder</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg"
                                            class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Sara Wilsson</h3>
                                            <h4>Designer</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="assets/img/testimonials/testimonials-2.jpg"
                                            class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Enim nisi quem export duis labore cillum quae magna enim sint quorum
                                                nulla quem veniam duis minim tempor labore quem eram duis noster aute
                                                amet eram fore quis sint minim.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Jena Karlis</h3>
                                            <h4>Store Owner</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="assets/img/testimonials/testimonials-3.jpg"
                                            class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam
                                                tempor noster veniam enim culpa labore duis sunt culpa nulla illum
                                                cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>John Larson</h3>
                                            <h4>Entrepreneur</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="assets/img/testimonials/testimonials-4.jpg"
                                            class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                    </div>
                </div>


            </div>
            <div class="swiper-pagination"></div>
            </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container-fluid" data-aos="fade-up">

                <div class="section-header">
                    <h2>Events</h2>
                    <p>Share <span>Your Moments</span> In Our Restaurant</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url(assets/img/events-1.jpg)">
                            <h3>Custom Parties</h3>
                            <div class="price align-self-start">$99</div>
                            <p class="description">
                                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis
                                facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url(assets/img/events-2.jpg)">
                            <h3>Private Parties</h3>
                            <div class="price align-self-start">$289</div>
                            <p class="description">
                                In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo
                                vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url(assets/img/events-3.jpg)">
                            <h3>Birthday Parties</h3>
                            <div class="price align-self-start">$499</div>
                            <p class="description">
                                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam.
                                Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
                            </p>
                        </div><!-- End Event item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section -->


        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Buat Pesanan Baru</h2>
                    <p>Buat <span>Pesanan Anda</span> Bersama Kami</p>
                </div>

                <div class="row g-0">
                    <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);"
                        data-aos="zoom-out" data-aos-delay="200"></div>

                    <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                        <form method="POST" action="{{ route('pesanans.store') }}" role="form"
                            class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-lg-4 col-md-6">
                                    <input type="number" name="jumlah_pesanan" class="form-control"
                                        id="jumlah_pesanan" placeholder="Jumlah Pesanan" required>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" name="barang" class="form-control" id="barang"
                                        placeholder="Nama Barang" required>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="number" name="harga" class="form-control" id="harga"
                                        placeholder="Harga" required>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <textarea class="form-control" name="keterangan" rows="5" placeholder="Keterangan" required></textarea>
                                </div>

                                @php
                                    use App\Models\User;
                                    $kurirs = User::where('type', 2)->get();
                                @endphp


                                <div class="form-group">
                                    <label for="kurir">Kurir</label>
                                    <select name="kurir" id="kurir" class="form-control" required>
                                        @foreach ($kurirs as $kurir)
                                            <option value="{{ $kurir->id }}">{{ $kurir->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <div class="mb-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Pesanan Anda telah dibuat. Terima kasih!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Buat Pesanan</button></div>
                                </div>
                        </form>
                    </div><!-- End Reservation Form -->
                </div>
            </div>
        </section>
        <!-- End Book A Table Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Alamat</h2>
                    <p>Alamat  <span>Kami</span></p>
                </div>

                <div class="mb-3">

                        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5824162535546!2d107.60043487379109!3d-6.940406167938559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e896b761be29%3A0xfbb02c57fdf67d1f!2sSMK%20Prakarya%20Internasional!5e0!3m2!1sid!2sid!4v1703315846860!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-map flex-shrink-0"></i>
                            <div>
                                <h3>Alamat Kami</h3>
                                <p>
                                    SMK Prakarya Internasional
                                    Jl. Inhoftank No.46-146, Pelindung Hewan, Kec. Astanaanyar, Kota Bandung, Jawa Barat 40243</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>posprakarya@gmail.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>No Telepons</h3>
                                <p>+62 851 6184 5683</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-share flex-shrink-0"></i>
                            <div>
                                <h3>Jam Buka</h3>
                                <div><strong>Istirahat 1 dan Istirahat 2</strong>: Buka <br>
                                    <strong>Sabtu, Minggu:</strong> TUTUP
                                </div>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                </div>



            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Address</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022 - US<br>
                        </p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservations</h4>
                        <p>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Sat: 11AM</strong> - 23PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->


    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
