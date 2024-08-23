<?php
include '../../auth.php';
// Nội dung của trang admin
?>

<?php include "../includes/head.php"; ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        <?php include "../includes/nav.php"; ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="m-0 title"> Sản phẩm của bạn </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content listProductKhoTong" style="font-size: 14px;">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 20px;">
                        <div style="background: #fff;padding: 20px;">
                            <form class="filter row">
                                <div class="col-sm-3 col-xs-12">
                                    Từ khóa
                                    <input class="form-control" name="keyword" value style="border-radius: 0;" placeholder="Tên sản phẩm" />
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    Danh mục
                                    <select class="form-control select2" name="cateId" style="border-radius: 0;">
                                        <option value>Tất cả danh mục</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 col-xs-12">
                                    Sắp xếp
                                    <select class="form-control" name="orderType" style="border-radius: 0;">
                                        <option value="new" selected>Sản phẩm mới</option>
                                        <option value="cheap">Sản phẩm giá rẻ</option>
                                        <option value="sale">Sản phẩm khuyến mãi</option>
                                    </select>
                                </div>
                                <div class="col-sm-2 col-xs-12">
                                    &nbsp;<br />
                                    <button type="submit" class="btn btn-info">Tìm kiếm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin: 10px 0;">
                        <div style="background: #fff; padding: 10px;">
                            <button class="btn btn-success mb-1 btnSelectAllMyProduct"><i class="fa fa-check-circle"></i> Chọn tất cả <input type="checkbox" style="display:none;" /></button> &nbsp;
                            <button class="btn btn-danger mb-1 btnRemoveProductSelected"><i class="fa fa-trash"></i> Xóa sản phẩm đã chọn</button> &nbsp;
                            <a href="/s/truczia123"><button class="btn btn-info mb-1"><i class="fa fa-globe"></i> Xem gian hàng của bạn</button></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="pagination-container">
                        <ul class="pagination"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../includes/footer.php"; ?>

</body>

</html>