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
                            <h1 class="m-0 title"> Tổng quan t&#224;i khoản </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3  col-md-6 col-12">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3 class="affiliate-value">0 <small>đ</small></h3>
                                    <p class="mb-1">Tiền mặt</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-dollar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-6 col-12">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3 class="affiliate-value">0 <small>đ</small></h3>
                                    <p class="mb-1">Mua h&#224;ng</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-dollar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-6 col-12">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3 class="affiliate-value">0 <small>đ</small></h3>
                                    <p class="mb-1">Ví tạm tính</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-dollar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-6 col-12">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3 class="affiliate-value">0 <small>đ</small></h3>
                                    <p class="mb-1">Tổng hoa hồng</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-dollar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-3 mb-3">
                        <div class="input-group input-group-lg link-affiliate mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Link giới thiệu của bạn</span>
                            </div>
                            <input type="text" class="form-control bg-white copy" value="http://uto.vn/ref/truczia123" id="link-affiliate" text="http://uto.vn/ref/truczia123" readonly>
                            <div class="input-group-append">
                                <button class="btn btn-primary copy" type="button" text="http://uto.vn/ref/truczia123">copy</button>
                            </div>
                        </div>
                        <p class="mb-2">Giới thiệu khách hàng sử dụng dịch vụ của chúng tôi để nhận ngay hoa hồng khi khách mua hàng.</p>
                        <div style="overflow: hidden">
                            <div class="float-left">Tổng click: <b>0</b> &nbsp; &nbsp; &nbsp;</div>
                            <div class="float-left">Tổng đăng ký: <b>0</b> &nbsp; &nbsp; &nbsp;</div>
                            <div class="float-left">Tỉ lệ chuyển đổi: <b>0%</b> &nbsp; &nbsp; &nbsp;</div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <span class="pull-left">Danh sách giới thiệu</span>
                            <a href="/account/treeview"><button class="pull-right btn btn-primary btn-xs"><i class="fa fa-sitemap"></i> Xem toàn bộ hệ thống</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table cell-border table-striped table-bordered table-hover text-center nowrap" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="data-item data-head">
                                            <th class="data-col" langKey="time">Thời gian</th>
                                            <th class="data-col" langKey="username">ID thành viên</th>
                                            <th class="data-col" langKey="email">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="20" class="text-center p-5">Chưa có dữ liệu hiển thị</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <div class="pagination-container">
                                    <ul class="pagination"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>

</body>

</html>