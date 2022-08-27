<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Sistem Informasi Desa BalikTerus </title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="tel:+6285608783675"><span class="mai-call text-primary"></span>+62 85608783675</a>
                            <span class="divider">|</span>
                            <a href="mailto:dawamuciil@gmail.com"><span class="mai-mail text-primary"></span> dawamuciil@gmail.com </a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="https://www.facebook.com/dava.ggbet.7/"><span class="mai-logo-facebook-f"></span></a>
                            <a href="https://twitter.com/slowajawam"><span class="mai-logo-twitter"></span></a>
                            <a href="https://github.com/dawamuciil"><span class="mai-logo-github"></span></a>
                            <a href="https://www.instagram.com/kkn_desabalikterus2022/?hl=id"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/"><span class="text-primary">Sistem Informasi </span>- Desa Balikterus</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{!! url('/html/about.html'); !!}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{!! url('/html/doctors.html'); !!}">Wisata</a>
                        </li>
                        
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    <div class="page-hero bg-image overlay-light" style="background-image: url(../assets/img/background.jpg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Selamat Datang Di Desa Balikterus</span>
                <h1 class="display-4">Tempat Menarik Untuk Dikunjungi</h1>
                
            </div>
        </div>
    </div>


    <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <p><span>Masyarakat </span> yang Ramah, santun</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p><span>Desa BalikTerus</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-basket"></span>
                            </div>
                            <p><span>Pengerajin</span> - Gula Aren</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section -->

        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1>Selamat Datang Di Sistem Informasi Desa Balikterus Kecamatan Sangkapura Bawean <br> Gresik</h1>
                        <p class="text-grey mb-4">Desa Balikterus adalah salah satu desa dari 17 Desa yang berada di Kecamatan Sangkapura. Desa Balikterus adalah sebuah desa di arah utara Kecamatan sangkapura yang berbatasan langsung dengan Kecamatan Tambak, dan salah satu desa yang terbentuk sejak zaman penjajahan Belanda.</p>
                        <a href="{!! url('/html/about.html'); !!}" class="btn btn-primary">Learn More</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="../assets/img/buaya.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->

    @include('user.wisata')

    @include('user.latest')


    <!-- .page-section Appoinmnet -->

    <!-- .banner-home -->

    <footer class="page-footer justify-center items-center">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm col-lg py">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">Balikterus adalah sebuah desa di Kecamatan Sangkapura, Kabupaten Gresik, provinsi Jawa Timur. Desa ini mempunyai kode bernomor 352517014.</p>
                    <a href="tel:+628994154085" class="footer-link">+62 85608783675</a>
                    <a href="mailto:dawamuciil@gmail.com" class="footer-link">dawamuciil@gmail.com</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="https://www.facebook.com/dava.ggbet.7/" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="https://twitter.com/slowajawam" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="https://github.com/dawamuciil" target="_blank"><span class="mai-logo-github"></span></a>
                        <a href="https://www.instagram.com/kkn_desabalikterus2022/?hl=id" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="https://www.linkedin.com/in/muhammad-dawamul-mughni-9aa910217/" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <p id="copyright">Copyright &copy; 2022 <a href="https://github.com/dawamuciil" target="_blank">Dawamuciil ID</a>. All right reserved</p>
        </div>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>