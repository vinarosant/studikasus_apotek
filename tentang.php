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
                            <li class="active">
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
    <section class="breadcrumb-section set-bg" data-setbg="img/bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Rosant Farma</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Tentang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <img src="img/carousel/d1.png" alt="" style="width: 800px; margin-top:-150px; margin-left:160px">
                                    <h2 style="margin-top: 20px; text-align:center; margin-bottom:10px">Rosant Farma</h2>
                                    <p style="text-align: center; font-size:18px">Rosant Farma merupakan aplikasi beli obat obat online pertama, terlengkap di Indonesia yang aman terpercaya. Tidak perlu khawatir akan keamanan obat dan metode pembayaran yang ditawarkan. Obat dan kebutuhan kesehatan yang dijual di Rosant Farma dijamin ASLI dan AMAN 100%. Produk yang dijual di Rosant Farma PASTI aman dan telah mendapat ijin dari Badan POM Indonesia dan terjaga kualitasnya. Proses pembayaran di Rosant Farma juga dijamin amin dan bersertifikasi. Ketika kamu menemukan kendala dalam pembelian obat di Rosant Farma, kamu bisa hubungi melalui Customer Care (telepon, email, dan live chat) yang online 24 jam untuk membantu kamu. <br> <br>Dengan berbelanja di Rosant Farma, kamu tidak perlu repot - repot mengantri atau harus keluar mencari apotek lagi. Rosant Farma menyediakan metode pengiriman yang bisa kamu sesuaikan dengan kebutuhanmu. Kamu bisa memilih metode “Kirim ke Alamat” untuk pesananmu, dan bisa memilih apakah pesananmu akan diantar dengan One Hour Delivery, One Day Delivery, atau lewat Paket Reguler. Tidak perlu ragu, karena Rosant Farma sudah bekerjasama dengan berbagai ekspedisi terpercaya di Indonesia. Kamu mau ambil pesananmu langsung di apotek? Kamu tinggal klik metode Ambil di Apotek saja, mudah bukan? Tidak perlu lagi mengantri obat karena kamu bisa langsung ambil pesananmu yang telah disiapkan.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                        elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                        porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                        nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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