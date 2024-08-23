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
                            <h1 class="m-0 title"> Lịch sử mua h&#224;ng </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div style="overflow-x: auto;">
                    <table class="table cell-border table-striped table-bordered table-hover text-center nowrap bg-white">
                        <thead>
                            <tr>
                                <th>Thời gian</th>
                                <th>Mã đơn hàng</th>
                                <th>Số tiền</th>
                                <th>Thanh toán</th>
                                <th>Giao hàng</th>
                                <th class="text-right">Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center" colspan="6">
                                    Chưa có dữ liệu
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pagination-container">
                    <ul class="pagination"></ul>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>

</body>

</html>