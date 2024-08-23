<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i><span class="d-md-none"> MENU</span></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header pb-0">Xin chào, <?php echo isset($_SESSION['user_username']) ? htmlspecialchars($_SESSION['user_username']) : 'Guest'; ?></span>
                    <div class="text-center text-info mb-2">
                        <strong><b class="varBalance">--</b> <small>đ</small></strong>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/account/profile.php"><i class="fa fa-user mr-2"></i> Thông tin tài khoản</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="./auth/logout.php">
                        <i class="fa fa-sign-out mr-2"></i> Đăng xuất
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="/" class="brand-link p-2">
            <img src="https://uto.vn/content/images/logo.png?v=1" class="d-icon show-on-collapse">
            <img src="https://uto.vn/content/images/logo.png?v=1" class="d-logo hide-on-collapse">
        </a>
        <div id="menu-sidebar" class="sidebar" style="overflow-y: auto; ">
            <nav class="mt-2">
                <div class="user-panel pb-1 pt-2 d-flex border-bottom-0">
                    <div class="image">
                        <img src="https://uto.vn/content/images/ic_user.png" class="img-circle elevation-1">
                    </div>
                    <div class="info">
                        <a href="/account/profile" class="d-block"><?php echo isset($_SESSION['user_username']) ? htmlspecialchars($_SESSION['user_username']) : 'Guest'; ?></a>
                    </div>
                    <a class="btn-logout btn-link hide-on-collapse pos-right" href="../auth/logout.php">
                        <i class="fa fa-sign-out"></i>
                    </a>
                </div>
                <ul class="nav flex-column user-panel border-white mb-2 hide-on-collapse">
                    <li class="nav-item">
                        <a href="/account/profile.php" class="nav-link pb-0">
                            Loại TV: <span class="float-right badge bg-danger varUserType">--</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/account/wallet/0.php" class="nav-link">
                            Số dư: <span class="float-right badge bg-warning"><b class="varBalance">--</b> <small>đ</small></span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="/account/home.php" class="nav-link active">
                            <i class="nav-icon fa fa-home"></i>
                            <p>Trang chủ</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-dollar"></i>
                            <p>Ví <i class="fa fa-angle-down right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/account/wallet/0.php" class="nav-link ">
                                    <i class="fa fa-money"></i>
                                    <p>Tiền mặt</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/account/wallet/1.php" class="nav-link ">
                                    <i class="fa fa-money"></i>
                                    <p>Mua h&#224;ng</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="account/wallet/transactionhistory.php" class="nav-link ">
                                    <i class="fa fa-history"></i>
                                    <p>Lịch sử giao dịch</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-shopping-bag"></i>
                            <p>Quản lý gian hàng <i class="fa fa-angle-down right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="account/shop/category.php" class="nav-link ">
                                    <i class="fa fa-list"></i>
                                    <p>Quản lý danh mục</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="account/shop/productlist.php" class="nav-link ">
                                    <i class="fa fa-cart-plus"></i>
                                    <p>Sản phẩm kho tổng</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="account/shop/myproduct.php" class="nav-link ">
                                    <i class="fa fa-shopping-cart"></i>
                                    <p>Gian hàng của bạn</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="account/shop/setting.php" class="nav-link ">
                                    <i class="fa fa-cogs"></i>
                                    <p>Cài đặt gian hàng</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-globe"></i>
                            <p>Web phân quyền <i class="fa fa-angle-down right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="/wpq/domain" class="nav-link ">
                                    <i class="fa fa-link"></i>
                                    <p>Cài đặt tên miền</p>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-gift"></i>
                            <p>Voucher <i class="fa fa-angle-down right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="account/voucher/vouchershopping.php" class="nav-link ">
                                    <i class="fa fa-gift"></i>
                                    <p>Voucher mua hàng</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="account/voucher/voucherservice.php" class="nav-link ">
                                    <i class="fa fa-gift"></i>
                                    <p>Voucher dịch vụ</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/account/invoice.php" class="nav-link ">
                            <i class="nav-icon fa fa-history"></i>
                            <p>Lịch sử mua hàng</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-key"></i>
                            <p>Kích hoạt thành viên <i class="fa fa-angle-down right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="/account/activeusertype.php" class="nav-link ">
                                    <i class="fa fa-key"></i>
                                    <p>Kích hoạt thành viên</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="/product?isactive=true" class="nav-link">
                                    <i class="fa fa-key"></i>
                                    <p>Mua hàng kích hoạt</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-user"></i>
                            <p>Thông tin tài khoản <i class="fa fa-angle-down right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="/account/profile.php" class="nav-link ">
                                    <i class="fa fa-address-card-o"></i>
                                    <p>Hồ sơ</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="/account/security.php" class="nav-link ">
                                    <i class="fa fa-shield"></i>
                                    <p>Cài đặt bảo mật</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-link"></i>
                            <p>Dịch vụ mở rộng <i class="fa fa-angle-down right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="https://unilike.net/account/login?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImN0eSI6IkpXVCJ9.eyJuYW1laWQiOiJkMmVkOWVjYy02YjczLTQ0MjctYjE2ZS01YTc0Yjc0NmNkY2MiLCJ1bmlxdWVfbmFtZSI6InRydWN6aWExMjMiLCJmdWxsbmFtZSI6InRydWN6aWExMjMiLCJ0eXBlIjoibmV3YmllIiwidG9rZW4iOiJleUpoYkdjaU9pSklVekkxTmlJc0luUjVjQ0k2SWtwWFZDSXNJbU4wZVNJNklrcFhWQ0o5LmV5SnVZVzFsYVdRaU9pSmtNbVZrT1dWall5MDJZamN6TFRRME1qY3RZakUyWlMwMVlUYzBZamMwTm1Oa1kyTWlMQ0oxYm1seGRXVmZibUZ0WlNJNkluUnlkV042YVdFeE1qTWlMQ0ptZFd4c2JtRnRaU0k2SW5SeWRXTjZhV0V4TWpNaUxDSnVZbVlpT2pFM01qTTJNemsxT1RJc0ltVjRjQ0k2TVRjeU5qTXhOems1TVN3aWFXRjBJam94TnpJek5qTTVOVGt5ZlEuTS1KYm5GR1FiSVZYaUE5cWVXU1ZiZV9xbUl3ZEJmQmV5cHNtUjRfSzdocyIsIm5iZiI6MTcyMzYzOTU5MiwiZXhwIjoxNzI2MzE3OTkxLCJpYXQiOjE3MjM2Mzk1OTJ9.153w_JYEQN1PWhGUswWjnCjGVvzUbhUyOHrX1h7rQZM" class="nav-link" target="_blank">
                                    <i class="fa fa-link"></i>
                                    <p>Dịch vụ Marketing</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="https://unilucky.vn/account/login?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImN0eSI6IkpXVCJ9.eyJuYW1laWQiOiJkMmVkOWVjYy02YjczLTQ0MjctYjE2ZS01YTc0Yjc0NmNkY2MiLCJ1bmlxdWVfbmFtZSI6InRydWN6aWExMjMiLCJmdWxsbmFtZSI6InRydWN6aWExMjMiLCJ0eXBlIjoibmV3YmllIiwidG9rZW4iOiJleUpoYkdjaU9pSklVekkxTmlJc0luUjVjQ0k2SWtwWFZDSXNJbU4wZVNJNklrcFhWQ0o5LmV5SnVZVzFsYVdRaU9pSmtNbVZrT1dWall5MDJZamN6TFRRME1qY3RZakUyWlMwMVlUYzBZamMwTm1Oa1kyTWlMQ0oxYm1seGRXVmZibUZ0WlNJNkluUnlkV042YVdFeE1qTWlMQ0ptZFd4c2JtRnRaU0k2SW5SeWRXTjZhV0V4TWpNaUxDSnVZbVlpT2pFM01qTTJNemsxT1RJc0ltVjRjQ0k2TVRjeU5qTXhOems1TVN3aWFXRjBJam94TnpJek5qTTVOVGt5ZlEuTS1KYm5GR1FiSVZYaUE5cWVXU1ZiZV9xbUl3ZEJmQmV5cHNtUjRfSzdocyIsIm5iZiI6MTcyMzYzOTU5MiwiZXhwIjoxNzI2MzE3OTkxLCJpYXQiOjE3MjM2Mzk1OTJ9.153w_JYEQN1PWhGUswWjnCjGVvzUbhUyOHrX1h7rQZM" class="nav-link" target="_blank">
                                    <i class="fa fa-link"></i>
                                    <p>Mua hàng may mắn</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="https://union.uto.vn/account/login?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImN0eSI6IkpXVCJ9.eyJuYW1laWQiOiJkMmVkOWVjYy02YjczLTQ0MjctYjE2ZS01YTc0Yjc0NmNkY2MiLCJ1bmlxdWVfbmFtZSI6InRydWN6aWExMjMiLCJmdWxsbmFtZSI6InRydWN6aWExMjMiLCJ0eXBlIjoibmV3YmllIiwidG9rZW4iOiJleUpoYkdjaU9pSklVekkxTmlJc0luUjVjQ0k2SWtwWFZDSXNJbU4wZVNJNklrcFhWQ0o5LmV5SnVZVzFsYVdRaU9pSmtNbVZrT1dWall5MDJZamN6TFRRME1qY3RZakUyWlMwMVlUYzBZamMwTm1Oa1kyTWlMQ0oxYm1seGRXVmZibUZ0WlNJNkluUnlkV042YVdFeE1qTWlMQ0ptZFd4c2JtRnRaU0k2SW5SeWRXTjZhV0V4TWpNaUxDSnVZbVlpT2pFM01qTTJNemsxT1RJc0ltVjRjQ0k2TVRjeU5qTXhOems1TVN3aWFXRjBJam94TnpJek5qTTVOVGt5ZlEuTS1KYm5GR1FiSVZYaUE5cWVXU1ZiZV9xbUl3ZEJmQmV5cHNtUjRfSzdocyIsIm5iZiI6MTcyMzYzOTU5MiwiZXhwIjoxNzI2MzE3OTkxLCJpYXQiOjE3MjM2Mzk1OTJ9.153w_JYEQN1PWhGUswWjnCjGVvzUbhUyOHrX1h7rQZM" class="nav-link" target="_blank">
                                    <i class="fa fa-link"></i>
                                    <p>Kết nối giao thương</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/account/logoff" class="nav-link">
                            <i class="nav-icon fa fa-sign-out"></i>
                            <p>Đăng xuất</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>