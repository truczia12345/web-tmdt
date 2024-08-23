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
                            <h1 class="m-0 title"> Mua h&#224;ng </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="card card-block card-stretch card-height rtl-mode">
                            <div class="card-body bg_wallet_box">
                                <div class="top-block d-flex align-items-center justify-content-between">
                                    <div>
                                        <div class="title"><b style="text-transform: uppercase;">Mua h&#224;ng</b></div>
                                        <h4><b class="amount">0 VNĐ</b></h4>
                                    </div>
                                    <div class="icon iq-icon-box-2 mr-2 rounded rtl-mr-0  rtl-ml-2">
                                        <i class="las la-money-bill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="reverse-cc block-control display-flex justify-space-between mt-4" style="padding: 0; list-style: none; margin: 0;">
                    <li class="history-mobi">
                        <ul class="tab-wallet nav nav-tabs tab-control" style="border: 2px solid var(--color1); border-radius: 5px 5px 0 0;border-bottom: 0; background: #fff">
                            <li class="active">
                                <a href="#menu1" data-toggle="tab" class="active"><i class="las la-history"></i> <span>Lịch sử giao dịch</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="box-search-table-transaction">
                        <form style="display: flex">
                            <input class="form-control" name="key" placeholder="Tìm kiếm" autocomplete="off" />
                            <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                </ul>
                <div class="tab-content" style="border: 2px solid var(--color1); border-radius: 0 0 5px 5px;">
                    <div class="tab-pane fade active show" id="menu1">
                        <div class="card" style="overflow-x: auto;">
                            <table class="table history-table">
                                <thead>
                                    <tr class="data-item data-head">
                                        <th class="data-col" langKey="time">Thời gian</th>
                                        <th class="data-col" langKey="code">Mã giao dịch</th>
                                        <th class="data-col" langKey="sender_receiver">Người gửi / Người nhận</th>
                                        <th class="data-col text-right"><span langKey="amount">Số tiền</span> &nbsp; </th>
                                        <th class="data-col" langKey="wallet">Ví</th>
                                        <th class="data-col text-center" langKey="status">Trạng thái</th>
                                        <th class="data-col" langKey="type">Loại</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="10" class="text-center">Chưa có dữ liệu</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $().ready(function() {
                $('.tab-control li').on('click', function() {
                    $('.tab-control li').removeClass('active');
                    $(this).addClass('active');
                });
                setTimeout(function() {
                    $('#formWithdraw [name="txtBank"]').change();
                }, 1000);
                if ($('.balanceUPAY').length) {
                    $.ajax({
                        url: '/wallet/GetUPayBalance',
                        type: 'POST',
                        success: function(data) {
                            if (data.check) {
                                $('.balanceUPAY').val(formatMoney(data.result, 0));
                            } else {
                                $('.balanceUPAY').val(0);
                            }
                        }
                    });
                }
            });
        </script>
        <style>
            .tab-control {
                border-radius: 5px 5px 0 0 !important;
                overflow: hidden;
                border: 2px solid #007dc4 !important;
                border-bottom: 0 !important;
            }

            .tab-control span {
                color: #007dc4;
            }

            .tab-control li.active {
                background-color: #007dc4;
            }

            .tab-control li {
                display: flex;
            }

            .tab-control li a {
                padding: 15px;
            }

            .tab-control li.active span {
                color: #fff;
            }

            .block-control {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            #menu2,
            #menu3,
            #menu5,
            #menu4 {
                padding: 10px;
            }

            #menu2,
            #menu3,
            #menu4,
            #menu5,
            .card {
                border-radius: 0;
                border: 2px solid #007dc4;
                border-radius: 0 5px 5px 5px;
            }

            .info-deposit.card {
                border-width: 1px;
                border-color: #ddd;
            }

            .history-table>thead {
                border-bottom: 2px solid #007dc4;
            }

            .box-search-table-transaction input {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }

            .box-search-table-transaction button {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }

            .data-item.data-head>th,
            .data-item>td {
                text-align: center;
            }

            .bank-control {
                padding: 10px 0;
            }

            .bank-control li {
                margin-right: 10px;
            }

            .bank-control li a {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .bank-control li a:hover {
                color: #007dc4 !important;
                font-weight: 700;
            }

            .bank-control li a img {
                margin-right: 4px;
            }

            .btn:hover {
                color: #212529 !important;
            }

            th {
                white-space: nowrap;
            }

            @media (max-width: 640px) {
                .block-control {
                    display: unset;
                }
            }
        </style>
    </div>
    <?php include "../includes/footer.php"; ?>

</body>

</html>