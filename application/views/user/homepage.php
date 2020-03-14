<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SungTuladha | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/frontend/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +62 895 1856 6600</a>
                <a href="#"><span>Email:</span> info@sungtuladha.id</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Ikuti kami</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="#"><img src="<?= base_url() ?>assets/frontend/img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="#" class="active">Home</a></li>
                                <li><a href="#">Kelas</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Programming</a></li>
                                        <li><a href="#">Belajar</a></li>
                                        <li><a href="#">Inspirasi</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Kontak Kami</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Cari Kelas">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="register-login-area">
                                <a href="<?= base_url('register') ?>" class="btn">Daftar</a>
                                <a href="<?= base_url('login') ?>" class="btn btn-primary text-white">Masuk</a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5 bg-dark" style="height: 500px; background-image: url(<?= base_url() ?>assets/frontend/img/bg-img/bg-hero-area.jpg) !important;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>Bangun ruang belajar yang menyenangkan</h2>
                        <a href="#" class="btn clever-btn">Mulai sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Cool Facts Area Start ##### -->
    <section class="cool-facts-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <div class="icon">
                            <img src="<?= base_url() ?>assets/frontend/img/core-img/docs.png" alt="">
                        </div>
                        <h2><span class="counter">1986</span></h2>
                        <h5>Anggota</h5>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon">
                            <img src="<?= base_url() ?>assets/frontend/img/core-img/star.png" alt="">
                        </div>
                        <h2><span class="counter">99</span></h2>
                        <h5>Instruktur Handal</h5>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <div class="icon">
                            <img src="<?= base_url() ?>assets/frontend/img/core-img/events.png" alt="">
                        </div>
                        <h2><span class="counter">13</span></h2>
                        <h5>Mitra Bersertifikasi</h5>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
                        <div class="icon">
                            <img src="<?= base_url() ?>assets/frontend/img/core-img/earth.png" alt="">
                        </div>
                        <h2><span class="counter">256</span></h2>
                        <h5>Kelas Unggulan</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Cool Facts Area End ##### -->

    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(<?= base_url() ?>assets/frontend/img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Kelas Populer</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="<?= base_url() ?>assets/frontend/img/bg-img/c1.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Belajar Dasar HTML5</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Yudhistira</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Web Development</a>
                            </div>
                            <p>Belajar membuat website statis menggunakan komponen HTML5 dan membangun navigasi.</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 99
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.8
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#" class="free">Gratis</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="<?= base_url() ?>assets/frontend/img/bg-img/c2.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Belajar Dasar CSS3</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Bima</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Web Development</a>
                            </div>
                            <p>Belajar mengembangkan website statis dengan memberikan desain untuk mempercantik website.</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 110
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.6
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#">Premium</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <img src="<?= base_url() ?>assets/frontend/img/bg-img/c3.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Belajar Dasar Javascript</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Arjuna</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Web Development</a>
                            </div>
                            <p>Belajar membangun website dengan membuat tampilan interaktif.</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 270
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#">Premium</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Popular Courses End ##### -->

    <!-- ##### Best Tutors Start ##### -->
    <section class="best-tutors-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Instruktur Handal Bersertifikasi Internasional</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">

                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="<?= base_url() ?>assets/frontend/img/bg-img/t1.png" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Yudhistira</h5>
                                <span>Dosen</span>
                                <p>Lulusan S2 Teknik Informatika Universitas Indonesia</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="<?= base_url() ?>assets/frontend/img/bg-img/t2.png" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Bima</h5>
                                <span>Front End Developer</span>
                                <p>Frontend developer GoJek</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="<?= base_url() ?>assets/frontend/img/bg-img/t3.png" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Arjuna</h5>
                                <span>Front End Developer</span>
                                <p>Kontributor ReactJs</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="<?= base_url() ?>assets/frontend/img/bg-img/t4.png" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Nakula</h5>
                                <span>Dosen ITB</span>
                                <p>Dosen Ilmu Komunikasi ITB</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="<?= base_url() ?>assets/frontend/img/bg-img/t4.png" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Sadewa</h5>
                                <span>CTO Lexar.id</span>
                                <p>Berpengalaman menjadi mentor program sertifikasi Cloud Computing Google</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Best Tutors End ##### -->

    <!-- ##### Register Now Start ##### -->
    <section class="register-now section-padding-100-0 d-flex justify-content-between align-items-center" style="background-image: url(<?= base_url() ?>assets/frontend/img/bg-img/bg3.jpg);">
        <!-- Register Contact Form -->
        <div class="register-contact-form mb-100 wow fadeInUp" data-wow-delay="250ms">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="forms">
                            <h4>Belajar secara Gratis</h4>
                            <p>Tanya jawab dengan admin mengenai SungTuladha</p>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="text" placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" placeholder="Nomor Telepon">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn clever-btn w-100">Kirim Pesan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Register Now Countdown -->
        <div class="register-now-countdown mb-100 wow fadeInUp" data-wow-delay="500ms">
            <h3>Daftar Sekarang</h3>
            <p>Nikmati pengalaman belajar secara menyenangkan, dipandu oleh instruktur handal, dan dapatkan sertifikasi tingkat internasional oleh mitra beasiswa.</p>
            <!-- Register Countdown -->
            <div class="register-countdown">
                <div class="events-cd d-flex flex-wrap" data-countdown="2020/03/01"></div>
            </div>
        </div>
    </section>
    <!-- ##### Register Now End ##### -->

    <!-- ##### Upcoming Events Start ##### -->
    <section class="upcoming-events section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Event yang akan datang</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="<?= base_url() ?>assets/frontend/img/bg-img/e1.jpg" alt="">
                            <h6 class="event-date">22 Februari 2020</h6>
                            <h4 class="event-title">Seminar Ethical Hacking</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i>Jakarta</p>
                            </div>
                            <div class="events-fee">
                                <a href="#">Premium</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="<?= base_url() ?>assets/frontend/img/bg-img/e2.jpg" alt="">
                            <h6 class="event-date">24 Februari 2020</h6>
                            <h4 class="event-title">Seminar UX</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i>Surabaya</p>
                            </div>
                            <div class="events-fee">
                                <a href="#" class="free">Gratis</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="750ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="<?= base_url() ?>assets/frontend/img/bg-img/e3.jpg" alt="">
                            <h6 class="event-date">28 Februari 2020</h6>
                            <h4 class="event-title">Workshop AR</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i>Malang</p>
                            </div>
                            <div class="events-fee">
                                <a href="#">Gratis</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Upcoming Events End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Blog Kami</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Area -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="<?= base_url() ?>assets/frontend/img/blog-img/1.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>Manajemen Waktu Belajar</h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Maulana</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Learning</a>
                            </div>
                            <p>Pelajari cara manajemen waktu belajar agar lebih produktif.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="<?= base_url() ?>assets/frontend/img/blog-img/2.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>Apa itu Docker?</h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sadewa</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Web Development</a>
                            </div>
                            <p>Manajemen proyek skala besar dengan Docker</p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="<?= base_url() ?>assets/frontend/img/blog-img/2.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>Pentingnya Algoritma</h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Arjuna</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Programming</a>
                            </div>
                            <p>Algoritma adalah pondasi untuk menjadi programmer yang berkualitas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="#"><img src="<?= base_url() ?>assets/frontend/img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +62 895 1856 6600</a>
                <a href="#"><span>Email:</span> info@sungtuladha.id</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Ikuti Kami</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?= base_url() ?>assets/frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= base_url() ?>assets/frontend/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url() ?>assets/frontend/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?= base_url() ?>assets/frontend/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= base_url() ?>assets/frontend/js/active.js"></script>
</body>

</html>