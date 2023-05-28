<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include "head.html"; ?>
    <style>
        .section-title h2:after {
            position: absolute;
            left: 0;
            bottom: -15px;
            right: 0;
            height: 4px;
            width: 80px;
            background: #9F5A1B;
            content: "";
            margin: 0 auto;
        }

        .header__menu ul li.active a {
            color: #9F5A1B;
        }

        .header__menu ul li:hover>a {
            color: #9F5A1B;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> rosantfarma@gmail.com</li>
                                <li>Solusi Sakitmu</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo" style="margin-left: 25px;">
                        <a href="./index.php"><img src="img/rosant.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3s">
                    <nav class="header__menu" style="margin-left: 35px;">
                        <ul>
                            <li class="active">
                                <a href="./index.php">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="produk.php?Analgetik">
                                    Produk
                                </a>
                            </li>
                            <li>
                                <a href="./informasi.php">
                                    Informasi
                                </a>
                            </li>
                            <li>
                                <a href="./tentang.php">
                                    Tentang
                                </a>
                            </li>
                            <li>
                                <a href="./kontak.php">
                                    Kontak
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li style="margin-right: 25px;"><a href="#"><i class="fa fa-heart"></i> <span style="background-color: #9F5A1B;">1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span style="background-color: #9F5A1B;">3</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all" style="background-color: #9F5A1B;">
                            <i class="fa fa-bars"></i>
                            <span>Jenis Obat</span>
                        </div>
                        <ul>
                            <li style="padding: 25px;"><a href="produk.php?Analgetik">Analgetik</a></li>
                            <li style="padding: 25px;"><a href="produk.php?Antibiotik">Antibiotik</a></li>
                            <li style="padding: 25px;"><a href="produk.php?Inflamasi">Anti Inflamasi</a></li>
                            <li style="padding: 25px;"><a href="produk.php?Hemorrhagi">Anti Hemorrhagi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="Obat yang dicari">
                                <button type="submit" class="site-btn" style="background-color: #9F5A1B;">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone" style="color: #9F5A1B;"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+63 5392 4829</h5>
                                <span>Tersedia 24 jam</span>
                            </div>
                        </div>
                    </div>
                    <div id="header-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 350px;">
                                <img class="img-fluid" src="img/carousel/d1.png" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">Selamat Datang di</h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Rosant Farma</h3>
                                        <a href="" class="btn btn-light py-2 px-3">Lihat Produk</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 350px;">
                                <img class="img-fluid" src="img/carousel/d2.png" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-prev-icon mb-n2"></span>
                            </div>
                        </a>
                        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-next-icon mb-n2"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                        <h1 class="fa fa-check m-0 mr-3" style="color: #9F5A1B;"></h1>
                        <h5 class="font-weight-semi-bold m-0">Kualitas Produk</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                        <h1 class="fa fa-truck m-0 mr-2" style="color: #9F5A1B;"></h1>
                        <h5 class="font-weight-semi-bold m-0">Pengantaran Gratis</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                        <h1 class="fa fa-exchange m-0 mr-3" style="color: #9F5A1B;"></h1>
                        <h5 class="font-weight-semi-bold m-0">Pengembalian Barang</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                        <h1 class="fa fa-phone-square m-0 mr-3" style="color: #9F5A1B;"></h1>
                        <h5 class="font-weight-semi-bold m-0">Tersedia 24 Jam</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Produk Terlaris</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__text">
                            <?php
                            include "config.php";
                            $query = $conn->query("SELECT * FROM obat WHERE id_obat = 1");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                    <div class="featured__item__pic set-bg" data-setbg="img/terlaris/1.jpg" <?= $data["img"] ?>">
                                        <ul class="featured__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <h6><a href="#"><?= $data["nama_obat"] ?></a></h6>
                                    <h5>Rp. <?= number_format($data["harga"], 2, ',', '.') ?></h5>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__text">
                            <?php
                            include "config.php";
                            $query = $conn->query("SELECT * FROM obat WHERE id_obat = 5");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                    <div class="featured__item__pic set-bg" data-setbg="img/terlaris/5.jpg" <?= $data["img"] ?>">
                                        <ul class="featured__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <h6><a href="#"><?= $data["nama_obat"] ?></a></h6>
                                    <h5>Rp. <?= number_format($data["harga"], 2, ',', '.') ?></h5>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__text">
                            <?php
                            include "config.php";
                            $query = $conn->query("SELECT * FROM obat WHERE id_obat = 9");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                    <div class="featured__item__pic set-bg" data-setbg="img/terlaris/9.png" <?= $data["img"] ?>">
                                        <ul class="featured__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <h6><a href="#"><?= $data["nama_obat"] ?></a></h6>
                                    <h5>Rp. <?= number_format($data["harga"], 2, ',', '.') ?></h5>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__text">
                            <?php
                            include "config.php";
                            $query = $conn->query("SELECT * FROM obat WHERE id_obat = 16");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                    <div class="featured__item__pic set-bg" data-setbg="img/terlaris/16.jpg" <?= $data["img"] ?>">
                                        <ul class="featured__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <h6><a href="#"><?= $data["nama_obat"] ?></a></h6>
                                    <h5>Rp. <?= number_format($data["harga"], 2, ',', '.') ?></h5>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__text">
                            <?php
                            include "config.php";
                            $query = $conn->query("SELECT * FROM obat WHERE id_obat = 22");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                    <div class="featured__item__pic set-bg" data-setbg="img/terlaris/22.jpeg" <?= $data["img"] ?>">
                                        <ul class="featured__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <h6><a href="#"><?= $data["nama_obat"] ?></a></h6>
                                    <h5>Rp. <?= number_format($data["harga"], 2, ',', '.') ?></h5>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__text">
                            <?php
                            include "config.php";
                            $query = $conn->query("SELECT * FROM obat WHERE id_obat = 20");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                    <div class="featured__item__pic set-bg" data-setbg="img/terlaris/20.jpg" <?= $data["img"] ?>">
                                        <ul class="featured__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <h6><a href="#"><?= $data["nama_obat"] ?></a></h6>
                                    <h5>Rp. <?= number_format($data["harga"], 2, ',', '.') ?></h5>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__text">
                            <?php
                            include "config.php";
                            $query = $conn->query("SELECT * FROM obat WHERE id_obat = 14");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                    <div class="featured__item__pic set-bg" data-setbg="img/terlaris/14.jpeg" <?= $data["img"] ?>">
                                        <ul class="featured__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <h6><a href="#"><?= $data["nama_obat"] ?></a></h6>
                                    <h5>Rp. <?= number_format($data["harga"], 2, ',', '.') ?></h5>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__text">
                            <?php
                            include "config.php";
                            $query = $conn->query("SELECT * FROM obat WHERE id_obat = 24");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                    <div class="featured__item__pic set-bg" data-setbg="img/terlaris/24.jpg" <?= $data["img"] ?>">
                                        <ul class="featured__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <h6><a href="#"><?= $data["nama_obat"] ?></a></h6>
                                    <h5>Rp. <?= number_format($data["harga"], 2, ',', '.') ?></h5>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6" style="margin-bottom: 20px;">
                    <div class="banner__pic">
                        <img src="img/banner/bannerr1.png" alt="">
                    </div>
                </div>
                <div class="banner__pic">
                    <img src="img/banner/bannerr2.png" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Banner End -->

    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Informasi Obat</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/gigi.png" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> 04 Mei 2023</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="informasi.php">Obat Sakit Gigi Anak</a></h5>
                            <p>Obat sakit gigi anak tersedia dalam bentuk sirup dengan rasa yang pastinya disukai oleh anak loh.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/batuk.png" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> 13 Mei 2023</li>
                                <li><i class="fa fa-comment-o"></i> 7</li>
                            </ul>
                            <h5><a href="informasi.php">Obat Flu dan Batuk</a></h5>
                            <p>Berbagai macam obat flu dan batuk dapat Anda beli di apotik mulai dari jenis obat sirup dan juga tablet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/mataa.png" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> 21 Mei 2023</li>
                                <li><i class="fa fa-comment-o"></i> 2</li>
                            </ul>
                            <h5><a href="informasi.php">Obat Sakit Mata Merah</a></h5>
                            <p>Anda dapat mengatasinya menggunakan obat sakit mata merah yang tersedia di apotik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section Begin -->
    <?php include "footer.html"; ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>