<?php
include '../../auth.php';
// Nội dung của trang admin
?>

<?php include "../includes/head.php"; ?>


<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        <?php include "../includes/nav.php"; ?>
        <div class="content-wrapper">
            <div class="content pt-3">
                <form class="d-flex pull-right pb-3">
                    <input class="form-control" style="border-radius: 0;" name="key" placeholder="Tìm kiếm" /><button class="btn btn-info" style="border-radius: 0;" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <div class="clearfix"></div>
                <div class="card" style="overflow-x: auto;">
                    <table class="table cell-border table-striped table-bordered table-hover text-center nowrap" id="dataTable" width="100%" cellspacing="0" style="margin: 0">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col" langkey="time">Thời gian</th>
                                <th class="data-col" langkey="code">Mã GD</th>
                                <th class="data-col" langkey="sender_receiver">Người gửi / nhận</th>
                                <th class="data-col" langkey="ammount">Số tiền</th>
                                <th class="data-col" langkey="wallet">Ví</th>
                                <th class="data-col text-center" langkey="status">Trạng thái</th>
                                <th class="data-col" langkey="type">Loại</th>
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