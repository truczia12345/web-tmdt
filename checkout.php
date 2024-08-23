<?php include "./includes/head.php"; ?>
<?php include "./includes/header.php"; ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" style="background-color:  var(--black); margin-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>UTOStartup</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Trang chủ</a>
                        <span>Thanh toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<div class="shop-content">
    <div class="container">
        <div class="row content-wrapper sidebar-right">
            <div class="col-12 col-md-12 col-lg-12 content-primary">
                <div>
                    <form class="cart-wrapper" id="formCheckout" method="post">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="woocommerce-cart-form">
                                    <hr style="margin: 20px 0;" />
                                    <h4 style="border-bottom: 0;">Đơn vị vận chuyển</h4>
                                    <div class="form-group">
                                        <select class="form-control" name="Logistic" onchange="window.location.href = '/cart/checkout?logistic=' + $(this).val()">
                                            <option value="best_express" selected>BEST Express</option>
                                        </select>
                                    </div>
                                    <hr style="margin: 20px 0;" />
                                    <h4 style="border-bottom: 0;">Thông tin người nhận</h4>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Họ tên" name="FullName" autocomplete="off" value="Nguyễn Tam Trực" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Số điện thoại" name="PhoneNumber" autocomplete="off" value="0964758700" />
                                    </div>
                                    <hr style="margin: 20px 0;" />
                                    <h4 style="border-bottom: 0;">Địa chỉ nhận hàng</h4>
                                    <div class="listReceiveAddress">
                                        <ul>
                                            <li>
                                                <div class="text-center padding10" colspan="5">
                                                    <button class="button tinvwl-break-input tinvwl-break-checkbox" type="button" data-toggle="modal" data-target="#formAddAddress" style="margin-bottom: 20px;">Thêm địa chỉ nhận hàng</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Ghi chú" name="Note"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="cart-collaterals">
                                    <div class="cart_totals ">
                                        <h4 style="border-bottom: 0;">Tổng tiền</h4>
                                        <table cellspacing="0" class="shop_table shop_table_responsive">
                                            <tbody>
                                                <tr>
                                                    <th>Tạm tính</th>
                                                    <td data-title="Subtotal">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi><span class="subTotal">1,022,000</span> <span class="woocommerce-Price-currencySymbol">₫</span></bdi>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Phí vận chuyển</th>
                                                    <td data-title="Shipping">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi><span class="feeShip">28,000</span> <span class="woocommerce-Price-currencySymbol">₫</span></bdi>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr style="color: #ed174a;">
                                                    <th>TỔNG THANH TOÁN</th>
                                                    <td data-title="Total">
                                                        <strong>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="total">1,050,000</span> <span class="woocommerce-Price-currencySymbol">₫</span></bdi>
                                                            </span>
                                                        </strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="d-flex" style="margin-top: 10px;">
                                            <input class="form-control voucherCode" placeholder="Mã Voucher" style=" border-radius: 0; height: 33px; position: relative; top: 1px; " />
                                            <button type="button" class="site-btn btnApplyVoucher" style="white-space: nowrap; padding: 6px; border-radius: 0;">Áp dụng</button>
                                        </div>
                                        <hr style="margin: 20px 0;" />
                                        <h4 style="border-bottom: 0;">Hình thức nhận hàng</h4>
                                        <div class="form-group">
                                            <select name="txtDeliveryMethod" class="form-control" onchange="changeDeliveryMethod($(this).val())">
                                                <option value="0" selected="selected">Giao h&#224;ng tận nơi</option>
                                                <option value="1">Nhận h&#224;ng tại c&#244;ng ty</option>
                                            </select>
                                        </div>
                                        <hr style="margin: 20px 0;" />
                                        <h4 style="border-bottom: 0;">Thông tin thanh toán</h4>
                                        <div>
                                            <div class="form-group">
                                                Phương thức thanh toán
                                                <select name="txtPaymentMethod" class="form-control">
                                                    <option value="0">Thanh to&#225;n qua v&#237;</option>
                                                    <option value="1">Thanh to&#225;n khi nhận h&#224;ng</option>
                                                </select>
                                            </div>
                                            <div class="PayRequired">
                                                <div class="form-group" style="display: none;">
                                                    Chọn đối tác thanh toán
                                                    <select name="txtWalletService" class="form-control">
                                                        <option value>Chọn phương thức thanh toán</option>
                                                        <option value="0" selected>V&#237; nội bộ</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    Chọn ví
                                                    <select name="txtWallet" class="form-control">
                                                        <option value="0" selected>Tiền mặt - 0</option>
                                                        <option value="1" selected>Mua h&#224;ng - 0</option>
                                                    </select>
                                                </div>
                                                <div class="text-right mb-2">
                                                    <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalDeposit" type="button"><i class="fa fa-plus"></i> Nạp tiền</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wc-proceed-to-checkout text-center">
                                            <button class="site-btn checkout-button" type="submit" style="background: #ed174a; width: 100%; text-align: center;">
                                                ĐẶT HÀNG
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="changeAddress" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Thay đổi địa chỉ nhận hàng</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center padding10" colspan="5">
                                            <button class="button tinvwl-break-input tinvwl-break-checkbox" data-toggle="modal" data-target="#formAddAddress" style="margin-bottom: 20px;cursor:pointer;">Thêm địa chỉ nhận hàng</button>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="modalDeposit" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Thông tin nạp tiền</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div style="text-align:center;">
                                        <img src="https://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=00020101021238550010A000000727012500069704320111888886879680208QRIBFTTA5303704540710500005802VN62140810US252146016304C3BC" />
                                        <h4 style="border-bottom: unset;">QUÉT MÃ QR ĐỂ CHUYỂN TIỀN</h4>
                                    </div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td langKey="bank_name">NGÂN HÀNG</td>
                                                <td class="text-right copy" text="VPBank">VPBank ⓒ</td>
                                            </tr>
                                            <tr>
                                                <td langKey="bank_branch">CHI NHÁNH</td>
                                                <td class="text-right copy" text="HO CHI MINH">HO CHI MINH ⓒ</td>
                                            </tr>
                                            <tr>
                                                <td langKey="bank_account_holder">CHỦ TÀI KHOẢN</td>
                                                <td class="text-right copy" text="DAM TO UYEN">DAM TO UYEN ⓒ</td>
                                            </tr>
                                            <tr>
                                                <td langKey="bank_account_number">SỐ TÀI KHOẢN</td>
                                                <td class="text-right"><b class="copy" text="88888687968">88888687968</b> ⓒ</td>
                                            </tr>
                                            <tr>
                                                <td langKey="memo">GHI CHÚ</td>
                                                <td class="text-right"><b style="color: #f74e4e" class="copy" text="US25214601">US25214601</b> ⓒ</td>
                                            </tr>
                                            <tr>
                                                <td langKey="amount">SỐ TIỀN</td>
                                                <td class="text-right"><b style="color: #f74e4e" class="copy" text="1050000">1,050,000 ₫</b> ⓒ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="info-deposit card card-block card-stretch card-height rtl-mode" style="padding: 20px; overflow-x: auto;margin-top: 20px;">
                                        <h3 class="title-name"><b langKey="caution">LƯU Ý</b></h3>
                                        <div class="gaps-1x"></div>
                                        <ul class="content-note" style="list-style: disc; padding-left: 15px;">
                                            <li><span langKey>Vui lòng chuyển đúng số tiền <b style="color: red;">1,050,000 <span class="woocommerce-Price-currencySymbol">₫</span></b></span></li>
                                            <li><span langKey>Ghi rõ nội dung chuyển tiền <b style="color: red;">US25214601</b></span></li>
                                            <li><span langKey>Mã ghi chú chuyển tiền chỉ được sử dụng một lần.</span></li>
                                            <li><span langKey>Số dư của bạn sẽ tự động cập nhật khi hệ thống ngân hàng xác nhận.</span></li>
                                            <li><span langKey>Nếu bạn chuyển từ Ngân hàng khác, quá trình xác nhận có thể mất 24 giờ.</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id="formAddAddress" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Thêm địa chỉ</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="woocommerce-EditAccountForm edit-account">
                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="account_display_name">
                                                Tỉnh / Thành phố <span class="required">*</span>
                                            </label>
                                            <select class="form-control selectLocation" name="txtCity" type="district">
                                                <option>Chọn Tỉnh / Thành phố</option>
                                                <option value="1">Th&#224;nh phố H&#224; Nội</option>
                                                <option value="2">Tỉnh H&#224; Giang</option>
                                                <option value="4">Tỉnh Cao Bằng</option>
                                                <option value="6">Tỉnh Bắc Kạn</option>
                                                <option value="8">Tỉnh Tuy&#234;n Quang</option>
                                                <option value="10">Tỉnh L&#224;o Cai</option>
                                                <option value="11">Tỉnh Điện Bi&#234;n</option>
                                                <option value="12">Tỉnh Lai Ch&#226;u</option>
                                                <option value="14">Tỉnh Sơn La</option>
                                                <option value="15">Tỉnh Y&#234;n B&#225;i</option>
                                                <option value="17">Tỉnh Ho&#224; B&#236;nh</option>
                                                <option value="19">Tỉnh Th&#225;i Nguy&#234;n</option>
                                                <option value="20">Tỉnh Lạng Sơn</option>
                                                <option value="22">Tỉnh Quảng Ninh</option>
                                                <option value="24">Tỉnh Bắc Giang</option>
                                                <option value="25">Tỉnh Ph&#250; Thọ</option>
                                                <option value="26">Tỉnh Vĩnh Ph&#250;c</option>
                                                <option value="27">Tỉnh Bắc Ninh</option>
                                                <option value="30">Tỉnh Hải Dương</option>
                                                <option value="31">Th&#224;nh phố Hải Ph&#242;ng</option>
                                                <option value="33">Tỉnh Hưng Y&#234;n</option>
                                                <option value="34">Tỉnh Th&#225;i B&#236;nh</option>
                                                <option value="35">Tỉnh H&#224; Nam</option>
                                                <option value="36">Tỉnh Nam Định</option>
                                                <option value="37">Tỉnh Ninh B&#236;nh</option>
                                                <option value="38">Tỉnh Thanh H&#243;a</option>
                                                <option value="40">Tỉnh Nghệ An</option>
                                                <option value="42">Tỉnh H&#224; Tĩnh</option>
                                                <option value="44">Tỉnh Quảng B&#236;nh</option>
                                                <option value="45">Tỉnh Quảng Trị</option>
                                                <option value="46">Tỉnh Thừa Thi&#234;n Huế</option>
                                                <option value="48">Th&#224;nh phố Đ&#224; Nẵng</option>
                                                <option value="49">Tỉnh Quảng Nam</option>
                                                <option value="51">Tỉnh Quảng Ng&#227;i</option>
                                                <option value="52">Tỉnh B&#236;nh Định</option>
                                                <option value="54">Tỉnh Ph&#250; Y&#234;n</option>
                                                <option value="56">Tỉnh Kh&#225;nh H&#242;a</option>
                                                <option value="58">Tỉnh Ninh Thuận</option>
                                                <option value="60">Tỉnh B&#236;nh Thuận</option>
                                                <option value="62">Tỉnh Kon Tum</option>
                                                <option value="64">Tỉnh Gia Lai</option>
                                                <option value="66">Tỉnh Đắk Lắk</option>
                                                <option value="67">Tỉnh Đắk N&#244;ng</option>
                                                <option value="68">Tỉnh L&#226;m Đồng</option>
                                                <option value="70">Tỉnh B&#236;nh Phước</option>
                                                <option value="72">Tỉnh T&#226;y Ninh</option>
                                                <option value="74">Tỉnh B&#236;nh Dương</option>
                                                <option value="75">Tỉnh Đồng Nai</option>
                                                <option value="77">Tỉnh B&#224; Rịa - Vũng T&#224;u</option>
                                                <option value="79">Th&#224;nh phố Hồ Ch&#237; Minh</option>
                                                <option value="80">Tỉnh Long An</option>
                                                <option value="82">Tỉnh Tiền Giang</option>
                                                <option value="83">Tỉnh Bến Tre</option>
                                                <option value="84">Tỉnh Tr&#224; Vinh</option>
                                                <option value="86">Tỉnh Vĩnh Long</option>
                                                <option value="87">Tỉnh Đồng Th&#225;p</option>
                                                <option value="89">Tỉnh An Giang</option>
                                                <option value="91">Tỉnh Ki&#234;n Giang</option>
                                                <option value="92">Th&#224;nh phố Cần Thơ</option>
                                                <option value="93">Tỉnh Hậu Giang</option>
                                                <option value="94">Tỉnh S&#243;c Trăng</option>
                                                <option value="95">Tỉnh Bạc Li&#234;u</option>
                                                <option value="96">Tỉnh C&#224; Mau</option>
                                            </select>
                                        </p>
                                        <div class="clear"></div>
                                        <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                            <label for="account_last_name">
                                                Quận / Huyện <span class="required">*</span>
                                            </label>
                                            <select class="form-control selectLocation" name="txtDistrict" type="commune">
                                                <option>Vui lòng chọn Tỉnh / Thành phố để hiển thị</option>
                                            </select>
                                        </p>
                                        <div class="clear"></div>
                                        <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                            <label for="account_last_name">
                                                Phường / Xã <span class="required">*</span>
                                            </label>
                                            <select class="form-control" name="txtCommune">
                                                <option>Vui lòng chọn Quận / Huyện để hiển thị</option>
                                            </select>
                                        </p>
                                        <div class="clear"></div>
                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="account_email">
                                                Số nhà, Tên đường <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="txtStreet" autocomplete="off">
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Cập nhật</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <script>
                        setInterval(function() {
                            if ($('#modalDeposit').is(':visible')) {
                                reload();
                            }
                        }, 60000);
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="partner">
    <div class="container">
        <div class="row">
            <div class="partner__slider owl-carousel">
            </div>
        </div>
    </div>
</section>
<script>
    $().ready(function() {
        $.ajax({
            url: '/home/GetBanner',
            data: {
                type: 'partner'
            },
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    var item = data[i];
                    html += '<div class="col-lg-12">' +
                        '<div class="partner__item">' +
                        '<div class="partner__item__pic">' +
                        '<img src="' + item.Image + '" alt="' + item.Name + '">' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                }
                $('.partner__slider').html(html);

                $(".partner__slider").owlCarousel({
                    loop: true,
                    margin: 0,
                    items: 5,
                    dots: false,
                    nav: true,
                    navText: ["<span class='fa fa-angle-left'><span/>", "<span class='fa fa-angle-right'><span/>"],
                    smartSpeed: 1200,
                    autoHeight: false,
                    autoplay: true,
                    responsive: {

                        0: {
                            items: 2,
                        },

                        480: {
                            items: 2,
                        },

                        768: {
                            items: 3,
                        },

                        992: {
                            items: 5,
                        }
                    }
                });
            }
        });
    });
</script>
<?php include "./includes/footer.php"; ?>