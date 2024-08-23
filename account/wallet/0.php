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
                            <h1 class="m-0 title"> Tiền mặt </h1>
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
                                        <div class="title"><b style="text-transform: uppercase;">Tiền mặt</b></div>
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
                            <li>
                                <a href="#menu2" data-toggle="tab" class="deposit-tab"><i class="las la-download "></i> <span>Nạp tiền từ ngân hàng</span></a>
                            </li>
                            <li>
                                <a href="#menu5" data-toggle="tab" class="deposit-tab"><i class="las la-download "></i> <span>Nạp tiền từ UPAY</span></a>
                            </li>
                            <li>
                                <a href="#menu4" data-toggle="tab" class="deposit-tab"><i class="las la-exchange "></i> <span>Chuyển tiền</span></a>
                            </li>
                            <li>
                                <a href="#menu3" data-toggle="tab"><i class="las la-upload"></i> <span>Rút tiền</span></a>
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
                    <div class="tab-pane fade" id="menu2">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="info-deposit card card-block card-stretch card-height rtl-mode" style="padding: 20px; overflow-x: auto;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th colspan="2" class="text-center">
                                                    <h4 langKey="transfer_information">Thông tin nạp tiền</h4>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>Ngân hàng:</td>
                                                <td class="text-right copy" text="VPBank">VPBank &nbsp; <i class="fa fa-clone"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Chi nhánh:</td>
                                                <td class="text-right copy" text="HO CHI MINH">HO CHI MINH &nbsp; <i class="fa fa-clone"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Chủ tài khoản:</td>
                                                <td class="text-right copy" text="DAM TO UYEN">DAM TO UYEN &nbsp; <i class="fa fa-clone"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Số tài khoản:</td>
                                                <td class="text-right"><b class="copy" text="88888687968">88888687968 &nbsp; <i class="fa fa-clone"></i></b></td>
                                            </tr>
                                            <tr>
                                                <td>Ghi chú:</td>
                                                <td class="text-right"><b style="color: #f74e4e" class="copy" text="US25214601">US25214601 &nbsp; <i class="fa fa-clone"></i></b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <div class="info-deposit card card-block card-stretch card-height rtl-mode" style="text-align: center;padding-bottom: 20px;">
                                    <img src="https://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=00020101021238550010A000000727012500069704320111888886879680208QRIBFTTA53037045802VN62140810US252146016304458F" style="width: 185px; max-width: 100%; margin-bottom: 10px; margin: auto; margin-bottom: 0; margin-top: 0;" />
                                    <div><b style="border-bottom: unset;font-size:12px;" langKey="scan_qr_code_to_transfer_money">QUÉT MÃ QR ĐỂ CHUYỂN TIỀN</b></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="info-deposit card card-block card-stretch card-height rtl-mode" style="padding: 20px; overflow-x: auto;">
                                    <h3 class="title-name text-center"><i class="fa fa-exclamation-triangle" style="color:orange"></i> <b>Lưu ý</b></h3>
                                    <div class="gaps-1x"></div>
                                    <ul class="content-note" style="padding-left: 20px;">
                                        <li><span>Bạn có thể nạp bất kỳ số tiền bạn mong muốn</span></li>
                                        <li><span>Vui lòng ghi rõ nội dung (Phần ghi chú).</span></li>
                                        <li><span>Ghi chú chuyển chỉ được sử dụng một lần</span></li>
                                        <li><span>Số dư của bạn sẽ tự động cập nhật khi hệ thống ngân hàng xác nhận.</span></li>
                                        <li><span>Nếu bạn đang chuyển từ Ngân hàng khác, quá trình xác nhận có thể mất 24 giờ.</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu4">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <form method="post" id="formTransfer" style="padding: 20px; background: #fff;">
                                    <div class="form-group">
                                        <div class="form-field-name ng-tns-c377-2">
                                            <label class="ng-tns-c377-2 ng-star-inserted" langKey="receiver">Tên đăng nhập thành viên nhận</label>
                                            <input class="form-control" type="text" name="txtReceiver" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field-name ng-tns-c377-2">
                                            <label class="ng-tns-c377-2 ng-star-inserted" langKey="amount">Số tiền</label>
                                            <input class="form-control number" name="txtAmount" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="gaps-1x"></div>
                                    <div class="form-group">
                                        <input type="hidden" name="txtWallet" value="0" />
                                        <input type="hidden" name="wallettoken" value="d1c41a93-5d80-4d30-b784-b57fbdbf1b24" />
                                        <div style="background: #FFE082; border: 1px solid orangered; padding: 10px; border-radius: 5px; margin: 20px 0;">
                                            <a style="color: red" href="/account/security?r=transfer">
                                                <span style="color: red" langKey>Vui lòng cài đặt bảo mật để thực hiện chức năng này</span><br />
                                            </a>
                                        </div>
                                        <button class="btn btn-success" type="submit" style="width: 100%">Chuyển tiền</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <div class="info-deposit card card-block card-stretch card-height rtl-mode" style="padding: 20px; overflow-x: auto;">
                                    <h3 class="title-name"><i class="fa fa-exclamation-triangle" style="color:orange"></i> <b>CHÚ Ý</b></h3>
                                    <div class="gaps-1x"></div>
                                    <ul class="content-note" style="padding-left: 20px;">
                                        <li><span langKey>Số tiền chuyển tối thiểu là</span> <b>100,000</b>đ</li>
                                        <li><span langKey>Kiểm tra kỹ thông tin người nhận</span></li>
                                        <li><span langKey>Giao dịch đã chuyển không thể khôi phục hoặc hủy bỏ</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu3">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <form method="post" id="formWithdraw" style="padding: 20px; background: #fff;">
                                    <div class="form-group">
                                        <label class="form-field-name ng-tns-c377-2" style="width: 100%">
                                            <span langKey="choose_your_bank">Chọn ngân hàng</span>
                                            <a style="float: right;color: #3276f7" href="/account/mybank?r=withdraw" langKey="add_bank">Thêm ngân hàng</a>
                                        </label>
                                        <select class="form-control" name="txtBank">
                                            <option value langKey="choose_your_bank">Chọn ngân hàng</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field-name ng-tns-c377-2">
                                            <label class="ng-tns-c377-2 ng-star-inserted" langKey="bank_branch">Chi nhánh</label>
                                            <input class="form-control" type="text" name="txtBankBranch" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field-name ng-tns-c377-2">
                                            <label class="ng-tns-c377-2 ng-star-inserted" langKey="bank_account_holder">Chủ tài khoản</label>
                                            <input class="form-control" type="text" name="txtBankHolder" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field-name ng-tns-c377-2">
                                            <label class="ng-tns-c377-2 ng-star-inserted" langKey="bank_account_number">Số tài khoản</label>
                                            <input class="form-control" type="text" name="txtBankNumber" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field-name ng-tns-c377-2">
                                            <label class="ng-tns-c377-2 ng-star-inserted" langKey="amount">Số tiền</label>
                                            <input class="form-control number" name="txtAmount" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="gaps-1x"></div>
                                    <div class="form-group">
                                        <input type="hidden" name="txtWallet" value="0" />
                                        <input type="hidden" name="wallettoken" value="d1c41a93-5d80-4d30-b784-b57fbdbf1b24" />
                                        <div style="background: #FFE082; border: 1px solid orangered; padding: 10px; border-radius: 5px; margin: 20px 0;">
                                            <a style="color: red" href="/account/security?r=withdraw">
                                                <span style="color: red" langKey="please_set_the_security_to_perform_this_function">Vui lòng cài đặt bảo mật để sử dụng chức năng này</span><br />
                                            </a>
                                        </div>
                                        <button class="btn btn-success" type="submit" style="width: 100%" langKey="submit">Gửi yêu cầu rút</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <div class="info-deposit card card-block card-stretch card-height rtl-mode" style="padding: 20px; overflow-x: auto;">
                                    <h3 class="title-name"><i class="fa fa-exclamation-triangle" style="color:orange"></i> <b>Lưu ý</b></h3>
                                    <div class="gaps-1x"></div>
                                    <ul class="content-note" style="padding-left: 20px;">
                                        <li><span>Thêm tài khoản ngân hàng trước khi rút</span></li>
                                        <li><span>Số tiền rút tối thiểu</span> <b>100,000</b>đ</li>
                                        <li><span>Phí rút là </span> <b>1</b>%</li>
                                        <li><span>Thời gian duyệt rút tối đa 72 giờ</span></li>
                                        <li><span>Bạn chỉ rút được 1 lần trong ngày</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu5">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <form method="post" id="formTransferUPAY" style="padding: 20px; background: #fff;">
                                    <div class="form-group">
                                        <div class="form-field-name ng-tns-c377-2">
                                            <label class="ng-tns-c377-2 ng-star-inserted">Số dư UPAY</label>
                                            <input class="form-control balanceUPAY" type="text" value="--" autocomplete="off" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field-name ng-tns-c377-2">
                                            <label class="ng-tns-c377-2 ng-star-inserted" langKey="amount">Số tiền cần nạp</label>
                                            <input class="form-control number" name="txtAmount" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label langKey="Level_two_password">Mật khẩu cấp 2 UPAY</label>
                                        <a target="_blank" style="float: right;color: #3276f7" href="https://id.uto.vn/account/security">Cài đặt</a>
                                        <input class="form-control" name="txtPass2" type="password" />
                                    </div>
                                    <div class="gaps-1x"></div>
                                    <div class="form-group">
                                        <input type="hidden" name="txtWallet" value="0" />
                                        <input type="hidden" name="wallettoken" value="d1c41a93-5d80-4d30-b784-b57fbdbf1b24" />
                                        <button class="btn btn-success" type="submit" style="width: 100%">Nạp tiền</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <div class="info-deposit card card-block card-stretch card-height rtl-mode" style="padding: 20px; overflow-x: auto;">
                                    <h3 class="title-name"><i class="fa fa-exclamation-triangle" style="color:orange"></i> <b>CHÚ Ý</b></h3>
                                    <div class="gaps-1x"></div>
                                    <ul class="content-note" style="padding-left: 20px;">
                                        <li><span langKey>Số tiền chuyển tối thiểu là</span> <b>100,000</b>đ</li>
                                        <li><span langKey>Giao dịch đã chuyển không thể khôi phục hoặc hủy bỏ</span></li>
                                    </ul>
                                </div>
                            </div>
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