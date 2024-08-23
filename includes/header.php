<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!-- Page Preloder -->
<!-- <div id="preloder">
    <div class="loader"></div>
</div> -->

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="./index.php"><img src="./img/utostartup/logo.png" width="170px" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-shopping-cart"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">Tổng: <span>0VNĐ</span></div>
    </div>
    <div class="humberger__menu__widget">
        <?php if (!$isLoggedIn): ?>
            <div class="header__top__right__auth">
                <a href="./auth/login.php"><i class="fa fa-user"></i> Đăng Nhập</a>
            </div>
        <?php endif; ?>

        <?php if (!$isLoggedIn): ?>
            <div class="header__top__right__auth">
                <a href="./auth/register.php"><i class="fa fa-key"></i> Đăng Kí</a>
            </div>
        <?php endif; ?>

        <?php if ($isLoggedIn && $current_page != 'task.php'): ?>
            <div class="header__top__right__auth" style="margin-bottom: 10px;">
                <a href="./task.php"><i class="fa fa-list"></i> Nhiệm vụ</a>
            </div>
        <?php endif; ?>

        <?php if ($isLoggedIn): ?>
            <div class="header__top__right__auth" style="margin-bottom: 10px;">
                <a href="../account/home.php"><i class="fa fa-user"></i> Quản lý tài khoản</a>
            </div>
            <div class="header__top__right__auth">
                <a href="./auth/logout.php"><i class="fa fa-sign-out"></i> Đăng xuất</a>
            </div>
        <?php endif; ?>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="./index.php">Trang Chủ</a></li>
            <li><a href="./product.php">Sản phẩm</a></li>
            <li><a href="./contact.php">Đào Tạo</a></li>
            <li><a href="./blog.php">Tin Tức</a></li>
            <li><a href="./cart.php">Giỏ hàng</a></li>
            <li><a href="./uto-review.php">UTO Review</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i>Uniontek@gmail.com</li>
            <li>Hotline: 1900.88.66.33</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header header-custom">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> uniontek@gmail.com</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> Hotline: 1900.88.66.33</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <div>Tiếng Việt</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Tiếng Việt</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>

                        <?php if (!$isLoggedIn): ?>
                            <div class="header__top__right__auth">
                                <a href="./auth/login.php"><i class="fa fa-user"></i> Đăng Nhập</a>
                            </div>
                        <?php endif; ?>

                        <?php if (!$isLoggedIn): ?>
                            <div class="header__top__right__auth">
                                <a href="./auth/register.php"><i class="fa fa-key"></i> Đăng Kí</a>
                            </div>
                        <?php endif; ?>

                        <?php if ($isLoggedIn && $current_page != 'task.php'): ?>
                            <!-- <div class="dropdown">
                                <button class="dropbtn" for="btnControl"><i class="fa fa-list"></i>&nbsp; Nhiệm vụ</button>
                                <div class="dropdown-content">
                                    <a href="./nhiemvu.php">Các nhiệm vụ hàng ngày</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                            </div> -->
                            <div class="header__top__right__auth" style="margin-bottom: 10px;">
                                <a href="./task.php"><i class="fa fa-list"></i> Nhiệm vụ</a>
                            </div>
                        <?php endif; ?>

                        <?php if ($isLoggedIn): ?>
                            <div class="header__top__right__auth">
                                <a href="../account/home.php"><i class="fa fa-user"></i> Quản lý tài khoản</a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="./auth/logout.php"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- menu pc -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./index.php"><img src="./img/utostartup/logo.png" width="100px" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">

                <div class="hero__search__form">
                    <form action="#">
                        <input type="text" placeholder="Nhập sản phẩm cần tìm ....">
                        <button type="submit" class="site-btn">Tìm Kiếm</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-shopping-cart" data-toggle="modal"
                                    data-target="#cartModal"></i> <span>0</span></a></li>
                    </ul>
                    <div class="header__cart__price">Tổng: <span>0 VNĐ</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
    <section class="bg-header">
        <div class="container">
            <div class="row bg-header">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh Mục Sản Phẩm</span>
                        </div>
                        <ul>
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_baohiem.png" alt="">
                                <a href="./shop-grid.html">Bảo Hiểm</a>
                            </li> -->
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_camera.png" alt="">
                                <a href="./shop-grid.html">Camera</a>
                            </li>
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_chamsocthucung.png" alt="">
                                <a href="./shop-grid.html">Chăm sóc thú cưng</a>
                            </li> -->
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_congcumarketing.png" alt="">
                                <a href="./shop-grid.html">Công Cụ Marketing</a>
                            </li>
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_dichvu.png" alt="">
                                <a href="./shop-grid.html">Dịch Vụ</a>
                            </li> -->
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_dongho.png" alt="">
                                <a href="./shop-grid.html">Đồng Hồ</a>
                            </li> -->
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_dulich&hanhly.png" alt="">
                                <a href="./shop-grid.html">Du lịch & Hành Lý</a>
                            </li>
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_gaming&console.png" alt="">
                                <a href="./shop-grid.html">Gaming & console</a>
                            </li>
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_ghemassage.png" alt="">
                                <a href="./shop-grid.html">Ghế Massage</a>
                            </li> -->
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_giaydepnam.png" alt="">
                                <a href="./shop-grid.html">Giày Dép</a>
                            </li>
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_khoahoconline.png" alt="">
                                <a href="./shop-grid.html">Khọc Học Online</a>
                            </li> -->
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_mevabe.png" alt="">
                                <a href="./shop-grid.html">Mẹ & Bé</a>
                            </li>
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_thietbidientu.png" alt="">
                                <a href="./shop-grid.html">Thiết Bị Điện Tử</a>
                            </li>
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_thoitrangnam.png" alt="">
                                <a href="./shop-grid.html">Thời Trang Nam</a>
                            </li>
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_thoitrangnu.png" alt="">
                                <a href="./shop-grid.html">Thời Trang Nữ</a>
                            </li>
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_thoitrangtreem.png" alt="">
                                <a href="./shop-grid.html">Thời Trang Trẻ Em</a>
                            </li>
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_moto.png" alt="">
                                <a href="./shop-grid.html">Moto</a>
                            </li> -->
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_nhacua&dốing.png" alt="">
                                <a href="./shop-grid.html">Nhạc Cụ</a>
                            </li>
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_oto.png" alt="">
                                <a href="./shop-grid.html">Ô Tô</a>
                            </li> -->
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_phukienthoitrang.png" alt="">
                                <a href="./shop-grid.html">Phụ Kiện Thời Trang</a>
                            </li> -->
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_sacdep.png" alt="">
                                <a href="./shop-grid.html">Sắc Đẹp</a>
                            </li>
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_sach&tapchi.png" alt="">
                                <a href="./shop-grid.html">Sách & Tạp Chí</a>
                            </li> -->
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_sanphamtet.png" alt="">
                                <a href="./shop-grid.html">Sản Phẩm Tết</a>
                            </li> -->
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_simsodep.png" alt="">
                                <a href="./shop-grid.html">Sim Số Đẹp</a>
                            </li> -->
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_suckhoe.png" alt="">
                                <a href="./shop-grid.html">Sức Khỏe</a>
                            </li>
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_thethaodangoaidulich.png" alt="">
                                <a href="./shop-grid.html">Thể Thao Dã Ngoại & Du Lịch</a>
                            </li> -->
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_thietbidiendadung.png" alt="">
                                <a href="./shop-grid.html">Thiết Bị Điện Gia Dụng</a>
                            </li>
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_thucpham&douong.png" alt="">
                                <a href="./shop-grid.html">Thực Phẩm & Đồ Uống</a>
                            </li> -->
                            <!-- <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_tuivinam.png" alt="">
                                <a href="./shop-grid.html">Túi & Ví Nam</a>
                            </li>
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_tuivinu.png" alt="">
                                <a href="./shop-grid.html">Túi & Ví Nữ</a>
                            </li> -->
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_vanphongpham.png" alt="">
                                <a href="./shop-grid.html">Văn Phòng Phẩm</a>
                            </li>
                            <li class="active-hover">
                                <img src="./img/utostartup/icon/ic_voucher&dichvu.png" alt="">
                                <a href="./shop-grid.html">Voucher & Dịch Vụ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="/">Trang Chủ</a></li>
                            <li><a href="./product.php">Sản phẩm</a></li>
                            <li><a href="./contact.php">Đào Tạo</a></li>
                            <li><a href="./blog.php">Tin Tức</a></li>
                            <li><a href="./uto-review.php">UTO Review</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</header>
<!-- Header Section End -->
</body>