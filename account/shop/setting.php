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
                        <h1 class="m-0 title"> C&#224;i đặt </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-12 col-sm-6 mb-2">
                    <b>Cài đặt tên gian hàng</b>
                    <form method="post" id="formUpdateShopName" class="mb-4">
                        <div class="bg-white p-3">
                            <div class="form-group">
                                <input class="form-control" style="border-radius: 0" name="shopName" placeholder="Tên gian hàng" />
                            </div>
                            <div class="form-group">
                                <input class="form-control" value="0964758700" style="border-radius: 0" name="phoneNumber" placeholder="Số điện thoại" />
                            </div>
                            <button class="btn btn-primary mt-2" style="border-radius: 0" type="submit">Cập nhật</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-6 mb-2">
                    <b>Cài đặt ảnh đại diện</b>
                    <form method="post" id="formUpdateShopAvatar" class="mb-4">
                        <div class="bg-white p-3">
                            <div class="form-group">
                                <img src="https://uto.vn/content/images/no-avatar.jpg" style="height: 100px;" />
                                <div>Chọn ảnh đại diện</div>
                                <small>(Kích thước: rộng 500px x cao 500px)</small>
                                <input class="form-control" style="border-radius: 0" name="avatar" type="file" />
                            </div>
                            <div class="form-group">
                                <img src="https://file.uto.vn/image/516D61706337334B4333314E5763326E50583659637A4838377A533833616A433747326354465570417475336A4D" style="width: 100%;" />
                                <div>Chọn ảnh tường</div>
                                <small>(Kích thước: rộng 1280px x cao 350px)</small>
                                <input class="form-control" style="border-radius: 0" name="cover" type="file" />
                            </div>
                            <button class="btn btn-primary mt-2" style="border-radius: 0" type="submit">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include "../includes/footer.php"; ?>

</body>

</html>