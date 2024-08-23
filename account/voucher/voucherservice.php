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
                        <h1 class="m-0 title"> Voucher dịch vụ </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="card" style="overflow-x: auto;">
                <table class="table cell-border table-striped table-bordered table-hover text-center nowrap" id="dataTable" width="100%" cellspacing="0" style="margin: 0">
                    <thead>
                        <tr class="data-item data-head">
                            <th class="data-col">Thời gian</th>
                            <th class="data-col">Mã Voucher</th>
                            <th class="data-col text-right">Mệnh giá</th>
                            <th class="data-col">Đơn vị cung cấp</th>
                            <th class="data-col text-center">Sử dụng</th>
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
    </div>
    <?php include "../includes/footer.php"; ?>

</body>

</html>