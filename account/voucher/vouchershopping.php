<?php
include '../../auth.php';
// Nội dung của trang admin
?>

<?php include "../includes/head.php"; ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper"></div>
    <?php include "../includes/nav.php"; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="m-0 title"> Voucher mua sắm </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div style="background: #fff;padding: 20px;margin-bottom: 20px;">
                <form class="filter row">
                    <div class="col-sm-3 col-xs-12">
                        Từ khóa
                        <input class="form-control" name="key" style="border-radius: 0;" placeholder="Mã Code" />
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        &nbsp;
                        <div>
                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Tìm kiếm</button>
                            <button type="button" class="btn btn-success btnAddVoucherShopping"><i class="fa fa-plus"></i> Tạo Voucher</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card" style="overflow-x: auto;">
                <table class="table cell-border table-striped table-bordered table-hover text-center nowrap" id="dataTable" width="100%" cellspacing="0" style="margin: 0">
                    <thead>
                        <tr class="data-item data-head">
                            <th class="data-col">Ngày tạo</th>
                            <th class="data-col">Mã Voucher</th>
                            <th class="data-col text-right">Mệnh giá</th>
                            <th class="data-col">Đơn hàng tối thiểu</th>
                            <th class="data-col text-center">Trạng thái</th>
                            <th class="data-col text-center">ID Sử dụng</th>
                            <th class="data-col text-center">Ngày sử dụng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="10" class="text-center">Chưa có dữ liệu để hiển thị</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pagination-container">
                <ul class="pagination"></ul>
            </div>
        </div>
    </div>
    <form class="modal" id="formAddVoucherShopping" method="post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tạo Voucher</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <b>Mệnh giá Voucher</b>
                        <input class="form-control number" name="Amount" placeholder="Nhập mệnh giá Voucher" />
                    </div>
                    <div class="form-group">
                        <b>Số lượng</b>
                        <input class="form-control number" name="Quantity" placeholder="Nhập số lượng Voucher" />
                    </div>
                    <div class="form-group">
                        <b>Áp dụng cho đơn hàng tối thiểu</b><br />
                        <i>(Nhập bằng 0 để áp dụng cho tất cả các đơn hàng)</i>
                        <input class="form-control number" name="MinInvoice" placeholder="Nhập giá trị tối thiểu của đơn hàng" />
                    </div>
                </div>
                <div class="modal-footer">
                    <input name="txtProductId" type="hidden" />
                    <input name="txtCategoryId" type="hidden" />
                    <button type="submit" class="btn btn-success">Tạo Voucher</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </form>
    </div>
    <?php include "../includes/footer.php"; ?>

</body>

</html>