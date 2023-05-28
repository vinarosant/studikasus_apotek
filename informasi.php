<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include "head.html"; ?>
    <style>
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

    <!-- Humberger Begin -->
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
                            <li>
                                <a href="./index.php">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="produk.php?Analgetik">
                                    Produk
                                </a>
                            </li>
                            <li class="active">
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

    <section class="breadcrumb-section set-bg" data-setbg="img/bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Rosant Farma</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Informasi Obat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad" style="margin-left: 10px; margin-bottom:-100px; margin-top:-50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
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
                                    <h5><a href="#">Obat Sakit Gigi Anak</a></h5>
                                    <p>Obat sakit gigi anak tersedia dalam bentuk sirup dengan rasa yang pastinya disukai oleh anak loh. </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
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
                                    <h5><a href="#">Obat Flu dan Batuk</a></h5>
                                    <p>Berbagai macam obat flu dan batuk dapat Anda beli di apotik mulai dari jenis obat sirup dan juga tablet. </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
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
                                    <h5><a href="#">Obat Sakit Mata Merah</a></h5>
                                    <p>Anda dapat mengatasinya menggunakan obat sakit mata merah yang tersedia di apotik. </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/kolestrol.jpeg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 23 Mei 2023</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Obat Kolestrol</a></h5>
                                    <p>Obat kolesterol membantu Anda untuk menurunkan kolesterol dan meningkatkan HDL dalam tubuh. </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/sendi.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 24 Mei 2023</li>
                                        <li><i class="fa fa-comment-o"></i> 2</li>
                                    </ul>
                                    <h5><a href="#">Obat Radang Sendi</a></h5>
                                    <p>Obat radang sendi dapat menjadi solusi efektif untuk mengatasi nyeri atau rasa sakit.</p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/bakar.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 25 Mei 2023</li>
                                        <li><i class="fa fa-comment-o"></i> 7</li>
                                    </ul>
                                    <h5><a href="#">Obat Luka Bakar</a></h5>
                                    <p> Tenang, saat ini sudah tersedia banyak obat luka bakar di apotik yang bagus untuk Anda gunakan. </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
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