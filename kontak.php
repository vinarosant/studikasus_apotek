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
<!-- Header Section Begin -->

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
                            <li class="active">
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
    <section class="breadcrumb-section set-bg" data-setbg="img/bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Rosant Farma</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Kontak</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone" style="color: #9F5A1B;"></span>
                        <h4>Telepon</h4>
                        <p>+63 5392 4829</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt" style="color: #9F5A1B;"></span>
                        <h4>Alamat</h4>
                        <p>Jl. Binangun Malang</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt" style="color: #9F5A1B;"></span>
                        <h4>Tesedia</h4>
                        <p>24 Jam</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt" style="color: #9F5A1B;"></span>
                        <h4>Email</h4>
                        <p>rosantfarma@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Kritik dan Saran</h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Nama Anda">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Email Anda">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Kritik dan Saran"></textarea>
                        <button type="submit" class="site-btn" style="background-color: #9F5A1B;">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

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