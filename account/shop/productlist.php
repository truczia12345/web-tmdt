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
                        <h1 class="m-0 title"> Kho tổng </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content listProductKhoTong" style="font-size: 14px;">
            <div class="row" style="margin-bottom: 20px;">
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
                                    <option value="53b3d363-0560-44e5-a849-fd4f556dcbba" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">H&#224;ng Ti&#234;u D&#249;ng</option>
                                    <option value="36c3241b-9f0c-4222-9a4f-648da5b17a60" style="white-space: nowrap"> &nbsp; &nbsp; Đồ thờ c&#250;ng, đồ phong thuỷ (3 SP)</option>
                                    <option value="de9eff3e-1282-44a9-a95a-769767a92ccf" style="white-space: nowrap"> &nbsp; &nbsp; Đồ d&#249;ng ph&#242;ng bếp (46 SP)</option>
                                    <option value="92569aaa-bb5d-400b-972f-7b0dd5d26fe8" style="white-space: nowrap"> &nbsp; &nbsp; Bảo hộ gia đ&#236;nh (4 SP)</option>
                                    <option value="c3567788-3212-4f5c-9335-6609281d65e7" style="white-space: nowrap"> &nbsp; &nbsp; Đồ d&#249;ng ph&#242;ng kh&#225;ch (6 SP)</option>
                                    <option value="b86585a9-9b48-4908-b52a-eda5354ad578" style="white-space: nowrap"> &nbsp; &nbsp; Đồ d&#249;ng ph&#242;ng tắm (22 SP)</option>
                                    <option value="c6c78f44-c788-4aac-8049-6acf85cab2e8" style="white-space: nowrap"> &nbsp; &nbsp; Nội Thất (1 SP)</option>
                                    <option value="22b72d25-fde5-4623-9f03-b83c17928eb0" style="white-space: nowrap"> &nbsp; &nbsp; Đồ d&#249;ng mẹ &amp; b&#233; (2 SP)</option>
                                    <option value="aa53e424-af73-4e99-ba76-322160af7b85" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">Sắc đẹp</option>
                                    <option value="a0fcd2eb-b522-46f4-a6ac-a7018e224e9e" style="white-space: nowrap"> &nbsp; &nbsp; Tắm &amp; chăm s&#243;c cơ thể (17 SP)</option>
                                    <option value="63877b3c-3eac-4da6-95b2-57d503a824ad" style="white-space: nowrap"> &nbsp; &nbsp; Chăm s&#243;c t&#243;c (5 SP)</option>
                                    <option value="621ac088-50ee-4125-b4c4-a2f51f478073" style="white-space: nowrap"> &nbsp; &nbsp; Chăm s&#243;c da mặt (27 SP)</option>
                                    <option value="1a983899-c32a-4be8-80a3-b146081d462a" style="white-space: nowrap"> &nbsp; &nbsp; Nước hoa (54 SP)</option>
                                    <option value="e5882116-ef0e-4153-9e74-91ed293e0cb0" style="white-space: nowrap"> &nbsp; &nbsp; Trang điểm (3 SP)</option>
                                    <option value="309462c9-3e2f-4abd-a788-09bbd9f82284" style="white-space: nowrap"> &nbsp; &nbsp; Phụ khoa (5 SP)</option>
                                    <option value="f6ed70d9-2c73-4f04-b112-7064e371fe40" style="white-space: nowrap"> &nbsp; &nbsp; Chăm s&#243;c tay, ch&#226;n &amp; m&#243;ng (1 SP)</option>
                                    <option value="58218d35-e022-4277-b463-2aa22107d27a" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">Sức khỏe</option>
                                    <option value="b3e23af2-4883-4506-9ea9-4ddc3d0e54e7" style="white-space: nowrap"> &nbsp; &nbsp; Chăm s&#243;c c&#225; nh&#226;n (31 SP)</option>
                                    <option value="6c364778-24c9-498b-940a-849f4dc4e0a8" style="white-space: nowrap"> &nbsp; &nbsp; Hỗ trợ t&#236;nh dục (22 SP)</option>
                                    <option value="3725a995-7f24-494c-ad38-52668e197211" style="white-space: nowrap"> &nbsp; &nbsp; Thực phẩm chức năng (27 SP)</option>
                                    <option value="8c4bb895-18a5-4600-a0ed-bd52e5af52d8" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">Thực Phẩm &amp; Đồ Uống</option>
                                    <option value="30407821-60dc-4ddf-adad-6d5a703c68ce" style="white-space: nowrap"> &nbsp; &nbsp; Đồ uống c&#243; cồn (10 SP)</option>
                                    <option value="30ea81ea-c418-4e8e-9a21-c255e7adbfe2" style="white-space: nowrap"> &nbsp; &nbsp; Sữa - Trứng (5 SP)</option>
                                    <option value="f22cbb86-3f15-4dc1-a1bb-12ab1d0ed58b" style="white-space: nowrap"> &nbsp; &nbsp; Đồ uống (23 SP)</option>
                                    <option value="be58eb4f-cb6f-4f72-89cb-b90d7e7eac59" style="white-space: nowrap"> &nbsp; &nbsp; Ngũ cốc &amp; Mứt (3 SP)</option>
                                    <option value="c9b95ef4-b549-40a7-b7be-558209295d58" style="white-space: nowrap"> &nbsp; &nbsp; Nguy&#234;n liệu nấu ăn (21 SP)</option>
                                    <option value="de560c41-a1cc-4fb8-88ea-31958f8cc091" style="white-space: nowrap"> &nbsp; &nbsp; Đồ ăn vặt (20 SP)</option>
                                    <option value="9c3385f6-a370-473d-b7cd-6c73d0e495cf" style="white-space: nowrap"> &nbsp; &nbsp; Đồ chế biến sẵn (2 SP)</option>
                                    <option value="0f7c1e3a-f3c4-4610-b744-ab6b63a1b439" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">Mẹ v&#224; B&#233;</option>
                                    <option value="cd9a6c56-0296-4b52-a278-8fb7eb16661e" style="white-space: nowrap"> &nbsp; &nbsp; Đồ chơi (35 SP)</option>
                                    <option value="36d69ad6-123c-4ebf-9cea-b28964eddbd5" style="white-space: nowrap"> &nbsp; &nbsp; Sữa c&#244;ng thức &amp; Thực phẩm cho b&#233; (3 SP)</option>
                                    <option value="19840647-370d-40f0-8d8a-f7d151e18294" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">T&#250;i v&#237; nam</option>
                                    <option value="c0ca590d-9517-4df3-87d9-201fd94b8485" style="white-space: nowrap"> &nbsp; &nbsp; B&#243;p/V&#237; (4 SP)</option>
                                    <option value="2f8a4394-f10a-42ee-b367-392cb6743077" style="white-space: nowrap"> &nbsp; &nbsp; T&#250;i đeo ch&#233;o (1 SP)</option>
                                    <option value="a2e3d00f-c5dd-4f5f-80f3-03941da44c1b" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">T&#250;i V&#237; nữ</option>
                                    <option value="637dbbdb-8dee-4c17-9b32-3bdfd790e4d4" style="white-space: nowrap"> &nbsp; &nbsp; T&#250;i quai x&#225;ch (1 SP)</option>
                                    <option value="94a9474c-9bff-447d-800f-a469551dc1fe" style="white-space: nowrap"> &nbsp; &nbsp; V&#237; dự tiệc &amp; V&#237; cầm tay (6 SP)</option>
                                    <option value="cf3c9416-b596-474d-8bf3-5fb6c71027e3" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">Thời trang</option>
                                    <option value="06ea1926-ac13-414e-8e18-b4d3815a0f5b" style="white-space: nowrap"> &nbsp; &nbsp; Thời trang nam (1 SP)</option>
                                    <option value="3d4fd2c7-f661-47c9-ab87-ade8761e2ca5" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">Phụ kiện thời trang</option>
                                    <option value="7d4b3405-3cb6-45ef-88b9-04fb6c7399a0" style="white-space: nowrap"> &nbsp; &nbsp; Mắt k&#237;nh (26 SP)</option>
                                    <option value="a954d510-81df-4d8a-9e58-85050fcfd0e4" style="white-space: nowrap"> &nbsp; &nbsp; B&#244;ng tai (1 SP)</option>
                                    <option value="9769f826-3f66-4d2e-9ddd-2f19742976c8" style="white-space: nowrap"> &nbsp; &nbsp; Thắt lưng (3 SP)</option>
                                    <option value="5b3f94ff-306c-449a-bff4-137606891956" style="white-space: nowrap"> &nbsp; &nbsp; D&#226;y chuyền (1 SP)</option>
                                    <option value="f79e88a2-64fa-427d-8d54-7c0e47b9319c" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">Sở th&#237;ch v&#224; Sưu tầm</option>
                                    <option value="e233e89e-58ad-40bd-b1b6-2f1853e2333d" style="white-space: nowrap"> &nbsp; &nbsp; Đồ sưu tầm (2 SP)</option>
                                    <option value="d85a4ecd-b929-4164-962f-089353fd64b3" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">Thiết bị điện gia dụng</option>
                                    <option value="1630f1a1-336a-4f34-ad3d-290d6baec7e7" style="white-space: nowrap"> &nbsp; &nbsp; Thiết bị điện gia dụng nhỏ (1 SP)</option>
                                    <option value="7e8256dd-c211-49bd-9bef-f5829270b526" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">Thể thao, d&#227; ngoại, du lịch</option>
                                    <option value="ce20ce80-8f10-4e6e-a316-673bffe3c311" style="white-space: nowrap"> &nbsp; &nbsp; Dụng cụ thể thao, d&#227; ngoại (1 SP)</option>
                                    <option value="f1fa4e33-306f-498c-b30a-c4d75b9da3fa" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">Đồng hồ</option>
                                    <option value="498dc452-3546-4421-8e22-f8ca77430f8f" style="white-space: nowrap"> &nbsp; &nbsp; Đồng hồ trẻ em (5 SP)</option>
                                    <option value="dc7b3aea-adc8-4340-87d5-2737d6681a16" style="white-space: nowrap"> &nbsp; &nbsp; Đồng hồ nam (43 SP)</option>
                                    <option value="be754d62-5235-49e9-b14c-aa775a13fa73" style="white-space: nowrap"> &nbsp; &nbsp; Đồng hồ nữ (17 SP)</option>
                                    <option value="4474389a-e922-4ff1-a567-817a95904755" disabled style="background: #5bc0de; color: #fff;white-space:nowrap">Gi&#224;y, D&#233;p</option>
                                    <option value="00a84d37-2139-49b5-a783-05629cd2da4b" style="white-space: nowrap"> &nbsp; &nbsp; Gi&#224;y, D&#233;p Nữ (1 SP)</option>
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin: 10px 0;">
                    <form id="updateSellAllProduct" style="background: #fff; padding: 10px;">
                        <div class="row">
                            <div class="col-8 col-sm-4">
                                <select class="form-control" name="IsSellAllProduct">
                                    <option value="true" selected="selected">Bán tất cả sản phẩm trong kho tổng</option>
                                    <option value="false">Bán sản phẩm tùy chọn</option>
                                </select>
                            </div>
                            <div class="col-4 col-sm-4">
                                <button class="btn btn-info btnSellAll mb-1" type="submit"> Cập nhật</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/08c60f27f91784261eb2d1418d2099d1') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">GẠO LỨT ST25 - Đ&#211;NG G&#211;I 2 Kg</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    92,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">1 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/gao-lut-st25-dong-goi-2-kg" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="458591a9-e0c6-4881-837e-3440c4120a90"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/79a134383cb0c9cc60b5881fd5dc4183') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">GẠO ST25 - Đ&#211;NG G&#211;I 5 Kg</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    210,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/gao-st25-dong-goi-5-kg" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="cb674e0c-356b-4b04-82ac-e169155c198c"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/b2d2a80fc17f06112e1aa6002c04e4f1') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">GẠO ST21 - Đ&#211;NG G&#211;I 5 Kg</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    180,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">1 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/gao-st21-dong-goi-5-kg" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="52c55cde-1659-4e0f-817c-ffb6c4ef0c3a"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D56514571486A6341347042456E4A47685A4D7A4D3438455734337855364876396D475A44334C354250786954') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Dung dịch vệ sinh Dạ Hương 100ml</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    36,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/dung-dich-ve-sinh-da-huong-100ml" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="fa243708-7924-4dec-ad6a-2a193c96db59"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D594B566D4D6933454D6A56674D6D58524753424846426242577031516F6248646444704C556F4A684C67346E') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">S&#225;p thơm Ami Hương hoa 200g</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    40,500 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/sap-thom-ami-huong-hoa-200g" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="ae89a7d4-e56e-4b8b-8672-c432185ba578"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D57587364727534556D6D6A356F314D4D624E4E5278506E314E5933715557544E694B6644784E4E6239746B6A') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Dầu gội Sunsilk mềm mượt diệu kỳ 631ml</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    145,000 ₫ &nbsp;
                                </h4>
                                <div><s>153,000 ₫</s> 5%</div>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/dau-goi-sunsilk-mem-muot-dieu-ky-631ml" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="56d20075-3b9b-4de7-bcfe-a8e719eec320"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D5753566A4B3232634C36775379596D44376863416636417A4259573744616647374A64336A47487753656F4D') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Sữa tắm detox bảo vệ khỏi vi khuẩn Lifebuoy matcha v&#224; khổ qua 782ml</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    195,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/sua-tam-detox-bao-ve-khoi-vi-khuan-lifebuoy-matcha-va-kho-qua-782ml" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="2014c5fb-0266-4d04-8aa1-f9e37dad8065"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D52786A4E6F70743245535933436A4B5231434C4134587854625A765A3533596B4B3254464D62764256366F67') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Dầu gội Dove phục hồi hư tổn 621ml</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    136,000 ₫ &nbsp;
                                </h4>
                                <div><s>155,000 ₫</s> 12%</div>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/dau-goi-dove-phuc-hoi-hu-ton-621ml" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="18147f0d-d4bd-4121-9822-016d9cb91606"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D65505563545A3670766D7A45696339784271594A44586E6166337767397A7358663639587879547173446B67') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Dầu xả Sunsilk mềm mượt diệu kỳ 653ml</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    139,000 ₫ &nbsp;
                                </h4>
                                <div><s>153,000 ₫</s> 9%</div>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/dau-xa-sunsilk-mem-muot-dieu-ky-653ml" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="b1632916-9134-4a39-ac71-baf320bdda3f"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D557151417168635932775050626E7374504C3151424A777A4C5366536A4B5732623445704871356F63713743') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Dầu gội Clear Botanique 9 loại thảo dược 618ml</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    168,000 ₫ &nbsp;
                                </h4>
                                <div><s>198,000 ₫</s> 15%</div>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/dau-goi-clear-botanique-9-loai-thao-duoc-618ml" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="10e364d2-8b95-4eac-9a03-e6c677f37316"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D654B34566A4E6D46357135724D313261336767646E597477317A614E68506539374636794453556434327032') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Tắm gội 2 trong 1 X-Men Fire 12h thơm l&#226;u sạch s&#226;u 650g</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    193,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/tam-goi-2-trong-1-x-men-fire-12h-thom-lau-sach-sau-650g" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="7c9a04f3-3039-443f-a137-066fdb1d8daf"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D6248653467795951506E536E4735384C6A67317461537A556751515571356851614E4B706272565764733476') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Dầu gội Dove dưỡng t&#243;c su&#244;n mềm chiết xuất hoa sen nhật v&#224; nước gạo 621ml</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    190,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/dau-goi-dove-duong-toc-suon-mem-chiet-xuat-hoa-sen-nhat-va-nuoc-gao-621ml" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="9a1fc6ac-c32b-4396-bc9c-34ef2646c2c1"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D617634574D73744339556E50593232586A397455796B6A324675784D71764B594D426D69676F7450796B786A') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">X&#224; b&#244;ng cục Lifebuoy bảo vệ khỏi 99.9% vi khuẩn g&#226;y bệnh v&#224; chăm s&#243;c da tự nhi&#234;n 90g</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    13,500 ₫ &nbsp;
                                </h4>
                                <div><s>14,000 ₫</s> 4%</div>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/xa-bong-cuc-lifebuoy-bao-ve-khoi-99.9-vi-khuan-gay-benh-va-cham-soc-da-tu-nhien-90g" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="49a06a35-6deb-43a5-9c51-2dff955660ee"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D65427A5870734A48476767317A455A4D463571563737357458555165317832337A7862784177615144515353') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Kem đ&#225;nh răng Colgate MaxFresh hương bạc h&#224; 225g</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    50,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/kem-danh-rang-colgate-maxfresh-huong-bac-ha-225g" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="519e05de-77db-4225-b745-5c8de69b7e27"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D557555646D347477364548574A653855665755723448537331596E6743596B6B786147416A4B7662464E4D4B') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Sữa tắm nước hoa dưỡng da Enchanteur Deluxe Charming 900g</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    240,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/sua-tam-nuoc-hoa-duong-da-enchanteur-deluxe-charming-900g" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="625df46b-665a-4412-b578-9d8d2375d263"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D625655785863464A50717153415234334A426E57666D676F76693162355953715333506D3432344469733132') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Bộ b&#224;n chải đ&#225;nh răng v&#224; kem đ&#225;nh răng Colgate MaxFresh tinh chất than tre 225g</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    50,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/bo-ban-chai-danh-rang-va-kem-danh-rang-colgate-maxfresh-tinh-chat-than-tre-225g" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="98f958ed-9071-4b4e-895b-5374acd984dc"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D644E596146617059507467396E485648444A7133656F4C586E55315968416432755045726A57526732677352') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Nước rửa tay Lifebuoy bạc bảo vệ chai 444ml</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    78,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/nuoc-rua-tay-lifebuoy-bac-bao-ve-chai-444ml" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="b438f6e1-3749-4ea6-a76c-78664e1fbfa1"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D5658774434586A416F3135796E4B31557A77567A4D4738586863577A4C573757506232335252365969556E7A') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Kem đ&#225;nh răng P/S bảo vệ 123 than hoạt t&#237;nh trắng răng tự nhi&#234;n 180g</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    37,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/kem-danh-rang-p-s-bao-ve-123-than-hoat-tinh-trang-rang-tu-nhien-180g" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="da200799-cfe4-4e4e-b404-f22e1cdebc06"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D5731654D663733343371653567747759356E596B57636764636255675244467344577036676F706F4B34706F') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">S&#225;p khử m&#249;i trắng da Enchanteur White Romantic 40g</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    80,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/sap-khu-mui-trang-da-enchanteur-white-romantic-40g" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="ddc4a346-1df2-4d6e-b5b9-e4865d073e2c"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D616F543761557238475474396752366247374673584455655161344474756950624269567675663669344250') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Xịt ph&#242;ng Ami pink may thơ mộng 280ml</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    35,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/xit-phong-ami-pink-may-tho-mong-280ml" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="e5da0a4c-c56b-4f4b-97c7-3045adb2bfad"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D50527A4E71365435343550697765706977556A64724234554B594D647459576136666550395450524A6D5361') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Nước tẩy nh&#224; tắm Gift đậm đặc si&#234;u sạch chai 900ml</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    36,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/nuoc-tay-nha-tam-gift-dam-dac-sieu-sach-chai-900ml" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="52e3a3f2-4b76-4849-8b29-db7e9162166a"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D584B4437595045414E4D7A41454336594462734A4E346F47476E334C443756777A4238745943336A52576473') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Nước rửa tay khử khuẩn Aquala</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    33,500 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/nuoc-rua-tay-khu-khuan-aquala" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="7980fc6b-0a4b-42da-959f-342c2b746e4f"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/516D50384839686A51777265756750415132436A466F34765146384638454C7933707336776D746D713772763865') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">E100 Sữa rửa mặt Nghệ Ngừa MỤN 100g</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    42,500 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/e100-sua-rua-mat-nghe-ngua-mun-100g" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="bc4b8cef-ccfc-4612-bb47-08bbf08d316d"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div style="background: #fff;padding: 5px; margin-top: 10px;">
                        <div style="background: url('https://file.uto.vn/image/fdee9a5e575950c7ef1b40efc21cbdcb') no-repeat center; background-size: contain;height: 150px;position: relative;">
                        </div>
                        <div style="height: 135px;">
                            <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px; text-align: center;">Vi&#234;n bảo vệ sức khỏe Compound – P (Hộp 30 vi&#234;n)</div>
                            <div style="margin: 5px 0;" class="text-center">
                                <h4 style="margin: 0; font-size: 16px;">
                                    2,500,000 ₫ &nbsp;
                                </h4>
                                <b style="color: red">Lợi nhuận: 0 ₫</b>
                            </div>
                            <div class="text-center" style="margin-top: 5px; min-height: 40px; display: flex; justify-content: center;">
                                <div>
                                    <b title="Số lượng gian hàng đang bán">0 <i class="fa fa-home"></i></b>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row btnActionKhoTong">
                            <div class="col-6 col-sm-6" style="font-size: 12px;">
                                <a href="/product/detail/vien-bao-ve-suc-khoe-compound--p-hop-30-vien" target="_blank">
                                    <button class="btn btn-info width100 nowrap"><i class="fa fa-eye"></i> Xem</button>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6">
                                <button class="btn btn-warning width100 nowrap" productId="60d4bc38-a4b9-429b-96e1-d705b76d366d"><i class="fa fa-check"></i> Đang bán</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div>
                <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="active"><a href="https://uto.vn/shop/productlist?page=1&orderType=new&keyword=&cateId=">1</a></li>
                    <li class><a href="https://uto.vn/shop/productlist?page=2&orderType=new&keyword=&cateId=">2</a></li>
                    <li class><a href="https://uto.vn/shop/productlist?page=3&orderType=new&keyword=&cateId=">3</a></li>
                    <li class="disabled spacing-dot"><a href="#">...</a></li>
                    <li><a href="https://uto.vn/shop/productlist?page=23&orderType=new&keyword=&cateId=">23</a></li>
                    <li class="next"><a class="ui-bar-d" href="https://uto.vn/shop/productlist?page=2&orderType=new&keyword=&cateId=">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
    <form class="modal" id="formAddProductToShop" method="post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm vào danh mục</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="padding: 5px">
                    <label>
                        <input checked type="checkbox" id="autoSelectCate" onchange="$('.customCate').css('display', $(this).is(':checked') ? 'none':'block')" /> Tự động chọn danh mục
                    </label>
                    <select class="form-control select2 customCate" style="display: none" name="txtCategoryId">
                    </select>
                </div>
                <div class="modal-footer">
                    <input name="txtProductId" type="hidden" />
                    <input name="txtCategoryId" type="hidden" />
                    <button type="submit" class="btn btn-success">Thêm</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </form>
    </div>
    <?php include "../includes/footer.php"; ?>

</body>

</html>