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
                            <h1 class="m-0 title"> C&#224;i đặt bảo mật </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="card">
                    <div class="stake controls ng-tns-c189-6 ng-star-inserted">
                        <div class="status-container ng-tns-c189-6 ng-star-inserted" style="border-radius: 5px;">
                            <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#password-opt-2" langKey="Level_two_password">Mật khẩu cấp 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#security-opt">2FA (Google Authenticator)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#password-opt" langKey="change_password">Đổi mật khẩu</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="user-panel" style="padding:30px;white-space: normal;">
                            <div class="tab-content" id="security-opt-tab">
                                <div class="tab-pane fade active show" id="password-opt-2">
                                    <form id="formCreatePasswordTwoLevel" method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-item input-with-label form-group">
                                                    <label for="swalllet" class="input-item-label" langKey="login_password">Mật khẩu đăng nhập</label>
                                                    <input class="input-bordered form-control" type="password" name="txtPassword" value>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-item input-with-label form-group">
                                                    <label for="date-of-birth" class="input-item-label" langKey="new_level_two_password">Mật khẩu cấp 2</label>
                                                    <input class="input-bordered form-control" type="password" name="txtNewPassword">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-item input-with-label form-group">
                                                    <label for="date-of-birth" class="input-item-label" langKey="confirm_password">Xác nhận mật khẩu</label>
                                                    <input class="input-bordered form-control" type="password" name="txtConfirmNewPassword">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-sm-flex justify-content-between align-items-center mt-2" style="margin-top: 10px;">
                                            <button class="btn btn-primary" type="submit">Tạo mật khẩu cấp 2</button>
                                            <div class="gaps-2x d-sm-none"></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="security-opt">
                                    <h5 class="user-panel-subtitle" langKey="two_factor_security_option">Bảo mật 2 lớp</h5>
                                    <p langKey>Xác thực hai yếu tố là một phương pháp để bảo vệ tài khoản web của bạn. Khi nó được kích hoạt, bạn không chỉ cần nhập mật khẩu mà còn phải nhập một mã đặc biệt. Bạn có thể nhận mã này trong ứng dụng dành cho thiết bị di động. Ngay cả khi người thứ ba tìm thấy mật khẩu của bạn, họ cũng không thể truy cập bằng mã đó.</p>
                                    <div class="gaps-2x"></div>
                                    <div class="d-flex guttar-20px">
                                        <div><span langKey="current_status">Tình trạng hiện tại</span>:</div>
                                        <div><span class="alert btn-xs btn-danger " style="margin: 0; margin-left: 10px;" langKey="disabled">Tắt</span></div>
                                    </div>
                                    <div class="gaps-4x"></div>
                                    <div class="ath-content" style="display: block;">
                                        <div class="gaps-2x"></div>
                                        <h5 langKey>Cài đặt ứng dụng xác thực trên thiết bị của bạn. Bất kỳ ứng dụng nào hỗ trợ giao thức Mật khẩu một lần dựa trên thời gian (TOTP) sẽ hoạt động, bao gồm:</h5>
                                        <ul class="ath-content-sublist">
                                            <li><a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=vi&gl=US">Google Authenticator</a> Android</li>
                                            <li><a href="https://apps.apple.com/vn/app/google-authenticator/id388497605">Google Authenticator</a> iOS</li>
                                        </ul>
                                        <h5>1) <span langKey>Sử dụng ứng dụng xác thực để quét mã vạch bên dưới</span>.</h5>
                                        <img style="max-width: 200px; max-height: 200px;" class="ath-content-qrimg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJMAAACTAQAAAACinha4AAACCklEQVR4nN2Wu63jMBBFR2CgzGqAANtgxpaoBvRpwGqJGdsgwAaojAGh2ctnvw+wiWaDxWIJQ7COgJHnd6+JfzuJ/mtWiNaQOaY5mCPQIGEnt7nmveqZaY24lbCgvePN8mX1FGkWssXRWtWTFP8Bs4jX1sCHlHFbLD0cF5em79xuMdRvjvr9+a7pLdZPUJfTQ0jDj17eYRelxaUh8s6ZuU0SVkZVxnxWPKGHpVXEKHnKxaIGuKpDxFD4MZFV19hWNiLGleagCmlPaq9plbDiTHGKWR1VHTENEobs12A2VHHM+FEyhqZh0KI5qp6qYglD6gMrrgm7tbhXDe6yEzGqOhmVMNgwEcNoe8J0q4tMsYZFbFQI+XS4oyG0WcIuBy1pfuwb6Uc9SRjq9yRE4qfLezS7hF0OHetRyaEDaZKwMhqI3xTagyBImSXssmkK5F3DnJ71pQd32Rkwp8ggv8AqYowRg+LqlfmAeEvYZc3T6Qf1UWXOh4iRJktTSI/+UJ0SxhHvN6VLQvNYFAk7AzqWcfUWIyNjHLp07d0laOguJ2AXtSnormHUiGQMp1CbQ1s6+PKKW6z7eTfzBps646dm32PwN2/zRmqz5nzr7m0W9Fr1MhJW05M5hQxfoZozrObtMwI2R7M57eEVn7N7lyEP+nDULkLqkLCP+mlyaoMk2Lce3GR/4//fv8N+AcMlJM9fPIvAAAAAAElFTkSuQmCC" alt="qr">
                                        <br />
                                        <b><span langKey>Đặt mã thủ công</span>: IZKFKQ2CJU3TSVCXGQ4Q</b>
                                        <div class="gaps-2x"></div>
                                        <h5>2) <span langKey>Nhập mã được tạo bởi ứng dụng xác thực</span>.</h5>
                                        <form action="#" id="changeSecurityPin">
                                            <input type="hidden" name="status" value="true" />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-item input-with-label form-group">
                                                        <label langKey="login_password">Mật khẩu đăng nhập </label>
                                                        <input class="input-bordered form-control" type="password" id="security-code" name="password">
                                                    </div>
                                                    <div class="input-item input-with-label form-group">
                                                        <label langKey="2fa_code">Mã 2FA</label>
                                                        <input class="input-bordered form-control" type="password" id="security-code" name="2faPasscode">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <button class="btn btn-primary" type="submit" langKey="enable">Bật xác thực 2FA</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="password-opt">
                                    <form id="formChangePassword" method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-item input-with-label form-group">
                                                    <label for="swalllet" class="input-item-label" langKey="old_password">Mật khẩu hiện tại</label>
                                                    <input class="input-bordered form-control" type="password" name="txtPassword" value>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-item input-with-label form-group">
                                                    <label for="date-of-birth" class="input-item-label" langKey="new_password">Mật khẩu mới</label>
                                                    <input class="input-bordered form-control" type="password" name="txtNewPassword">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-item input-with-label form-group">
                                                    <label for="date-of-birth" class="input-item-label" langKey="confirm_password">Xác nhận mật khẩu mới</label>
                                                    <input class="input-bordered form-control" type="password" name="txtConfirmNewPassword">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gaps-3x"></div>
                                        <div class="gaps-1x"></div>
                                        <div class="d-sm-flex justify-content-between align-items-center mt-2">
                                            <button class="btn btn-primary" type="submit" langKey="update">Cập nhật</button>
                                            <div class="gaps-2x d-sm-none"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>

</body>

</html>