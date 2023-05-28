<?php
include "config.php";
?>

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

    <!-- Humberger Begin -->
    <!-- <?php include "navbar.html"; ?> -->
    <!-- Humberger End -->

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
                            <li>
                                <a href="./index.php">
                                    Home
                                </a>
                            </li>
                            <li class="active">
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
    <section class="breadcrumb-section set-bg" data-setbg="img/bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Rosant Farma</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Produk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Jenis Obat</h4>
                            <ul>
                                <!-- Kalau bisa aktifin gitu, kalau gabisa ya gausah -->
                                <li class="active"><a href="produk.php?Analgetik">Analgetik</a></li>
                                <li><a href="produk.php?Antibiotik">Antibiotik</a></li>
                                <li><a href="produk.php?Inflamasi">Anti Inflamasi</a></li>
                                <li><a href="produk.php?Hemorrhagi">Anti Hemorrhagi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Produk</h2>
                        </div>
                    </div>
                    <div class="row" style="margin-top: -50px;">
                    <div></div>
                                <?php
                                error_reporting(0);
                                 include "config.php";
                                if(isset($_GET['Analgetik'])){
                                $query = $conn->query("SELECT * FROM obat JOIN jenis ON obat.id_jenis = jenis.id_jenis WHERE jenis.jenis_obat = 'Analgetik' LIMIT 50");
                                }else if(isset($_GET['Antibiotik'])){
                                    $query = $conn->query("SELECT * FROM obat JOIN jenis ON obat.id_jenis = jenis.id_jenis WHERE jenis.jenis_obat = 'Antibiotik' LIMIT 50");
                                }else if(isset($_GET['Inflamasi'])){
                                    $query = $conn->query("SELECT * FROM obat JOIN jenis ON obat.id_jenis = jenis.id_jenis WHERE jenis.jenis_obat = 'Anti Inflamasi' LIMIT 50");
                                }else if(isset($_GET['Hemorrhagi'])){
                                    $query = $conn->query("SELECT * FROM obat JOIN jenis ON obat.id_jenis = jenis.id_jenis WHERE jenis.jenis_obat = 'Anti Hemorrhagi' LIMIT 50");
                                }
                                   
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-6" id="page1">
                            <div class="product__item">
                                <div class="product__item__text">
                                    
                                            <div class="featured__item__pic set-bg" data-setbg="admin/obat/<?= $data["img"]; ?>">
                                                <ul class="featured__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="#"><?= $data["nama_obat"] ?></a></h6>
                                            <h5>Rp. <?= number_format($data["harga"], 2, ',', '.') ?></h5>
                                   
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                            }
                        ?>
                      
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