<?php
include '../auth.php';
// Nội dung của trang admin
?>

<?php include 'includes/head.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        <?php include 'includes/nav.php'; ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="m-0 title"> Th&#244;ng tin t&#224;i khoản </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="row justify-content-center align-items-center mx-1">
                    <div class="col-lg-12 bg-light p-4 mt-2 mb-2 rounded bordered shadow">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-calendar pe-1 pb-0 mb-0"></i> &nbsp;
                                <p class="p-0 m-0">Ngày tạo tài khoản:</p>
                            </div>
                            <p class="m-0">
                                <?php
                                // Giả sử bạn đã lưu created_at vào session khi người dùng đăng nhập
                                echo date('d-m-Y', strtotime($_SESSION['user_created_at']));
                                ?>
                            </p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-user pe-1 pb-0 mb-0"></i> &nbsp;
                                <p class="p-0 m-0">Tên đăng nhập:</p>
                            </div>
                            <p class="m-0">truczia123</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-user pe-1 pb-0 mb-0"></i> &nbsp;
                                <p class="p-0 m-0">Họ tên:</p>
                            </div>
                            <p class="m-0">truczia123</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-phone pe-1 pb-0 mb-0"></i> &nbsp;
                                <p class="p-0 m-0">Số điện thoại:</p>
                            </div>
                            <p class="m-0">0964758700</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-envelope pe-1 pb-0 mb-0"></i> &nbsp;
                                <p class="p-0 m-0">Email:</p>
                            </div>
                            <p class="m-0"><a href="https://uto.vn/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="16626463757871636f737825212f6256717b777f7a3875797b">[email&#160;protected]</a></p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-map-marker pe-1 pb-0 mb-0"></i> &nbsp;
                                <p class="p-0 m-0 text-nowrap">Địa Chỉ:</p>
                            </div>
                            <p class="m-0" style="text-align: right;"></p>
                        </div>
                        <button class="update-info btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Cập Nhật Thông Tin</button>
                        <a href="/account/kyc">
                            <div class="update-info btn btn-info" type="button" style="color: #fff">Xác minh thông tin</div>
                        </a>
                    </div>
                    <div class="col-lg-12 bg-light p-4 mt-2 mb-2 rounded bordered shadow">
                        <div class="d-flex align-items-start justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <p class="p-0 m-0">Mật khẩu</p>
                            </div>
                            <a href="/account/security#password-opt"><ins class="m-0 text-primary text-nowrap">Thay đổi</ins></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <p class="p-0 m-0 ">Mật khẩu cấp 2</p>
                            </div>
                            <a href="/account/security#password-opt-2"><ins class="m-0 text-primary text-nowrap">Thay đổi</ins></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form id="editUserProfile" method="post" class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cập nhật thông tin</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mx-1 mx-md-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <label>Ảnh đại diện</label>
                                <img style="height: 100px !important;width: 100px;object-fit: contain;" src="/content/images/ic_user.png" />
                            </div>
                            <div class="d-flex flex-row align-items-center mb-3 mt-3">
                                <div class="form-outline flex-fill mb-0">
                                    <input type="file" id="form3Example1c" class="form-control" placeholder="Họ Tên (*)" value name="Avatar" />
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center mb-3">
                                <div class="form-outline flex-fill mb-0">
                                    <label>Họ và tên</label>
                                    <input type="text" id="form3Example1c" class="form-control" placeholder="Họ Tên (*)" value="truczia123" name="FullName" />
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center mb-3">
                                <div class="form-outline flex-fill mb-0 me-2">
                                    <label>Email</label>
                                    <input type="email" id="form3Example4c" class="form-control" placeholder="Email (*)" name="Email" value="trucnguyen379t@gmail.com" />
                                </div>
                                <div class="form-outline flex-fill mb-0">
                                    <label>Số điện thoại</label>
                                    <input type="text" id="form3Example4c" class="form-control" placeholder="Số điện thoại (*)" name="PhoneNumber" value="0964758700" />
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center mb-3">
                                <div class="form-outline flex-fill mb-0">
                                    <label>Địa chỉ</label>
                                    <input type="text" id="form3Example1c" class="form-control" placeholder="Địa chỉ" name="Address" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">XÁC NHẬN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>

</body>