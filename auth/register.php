<?php include "../includes/head.php"; ?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Kết nối đến cơ sở dữ liệu
include '../config.php';

$notification = [];
$notification_type = 'error';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);
    $password_confirm = trim($_POST['password_confirm']);

    $errors = [];

    if (empty($username)) {
        $errors[] = "Vui lòng nhập tên đăng nhập.";
    }
    
    if (empty($fullname)) {
        $errors[] = "Vui lòng nhập họ tên.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Vui lòng nhập email hợp lệ.";
    }

    if (empty($phone) || !preg_match('/^[0-9]{10}$/', $phone)) {
        $errors[] = "Vui lòng nhập số điện thoại hợp lệ.";
    }

    if (empty($password)) {
        $errors[] = "Vui lòng nhập mật khẩu.";
    }

    if ($password !== $password_confirm) {
        $errors[] = "Mật khẩu và xác nhận mật khẩu không khớp.";
    }

    if (empty($errors)) {
        // Mã hóa mật khẩu
        $hashed_password = md5($password);

        // Kiểm tra trùng lặp thông tin
        $check_sql = "SELECT email, phone, username FROM users WHERE email = ? OR phone = ? OR username = ?";
        if ($check_stmt = $conn->prepare($check_sql)) {
            $check_stmt->bind_param("sss", $email, $phone, $username);
            $check_stmt->execute();
            $check_stmt->store_result();

            $email_exists = false;
            $phone_exists = false;
            $username_exists = false;

            // Kiểm tra các giá trị trả về
            if ($check_stmt->num_rows > 0) {
                $check_stmt->bind_result($existing_email, $existing_phone, $existing_username);

                while ($check_stmt->fetch()) {
                    if ($existing_email == $email) {
                        $email_exists = true;
                    }
                    if ($existing_phone == $phone) {
                        $phone_exists = true;
                    }
                    if ($existing_username == $username) {
                        $username_exists = true;
                    }
                }

                if ($email_exists) {
                    $notification[] = "Email đã tồn tại.";
                }
                if ($phone_exists) {
                    $notification[] = "Số điện thoại đã tồn tại.";
                }
                if ($username_exists) {
                    $notification[] = "Tên đăng nhập đã tồn tại.";
                }
            }

            if (empty($notification)) {
                // Chuẩn bị câu lệnh SQL để chèn dữ liệu
                $sql = "INSERT INTO users (fullname, username, password, email, phone, created_at)
                        VALUES (?, ?, ?, ?, ?, NOW())";

                if ($stmt = $conn->prepare($sql)) {
                    $stmt->bind_param("sssss", $fullname, $username, $hashed_password, $email, $phone);

                    if ($stmt->execute()) {
                        $notification[] = "Đăng ký thành công! Bạn có thể đăng nhập ngay bây giờ.";
                        $notification_type = 'success';
                        header("refresh:3;url=login.php");
                        exit();
                    } else {
                        $notification[] = "Có lỗi xảy ra. Vui lòng thử lại sau.";
                    }

                    $stmt->close();
                } else {
                    $notification[] = "Lỗi chuẩn bị câu lệnh: " . $conn->error;
                }
            }

            $check_stmt->close();
        } else {
            $notification[] = "Lỗi chuẩn bị câu lệnh kiểm tra trùng lặp: " . $conn->error;
        }
    } else {
        $notification = array_merge($notification, $errors);
    }

    $conn->close();
}
?>

<!-- HTML hiển thị thông báo -->
<?php if (!empty($notification)) : ?>
    <div class="alert-<?php echo $notification_type; ?>">
        <?php foreach ($notification as $msg) : ?>
            <p><?php echo $msg; ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>




    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section End -->

    <section class="register">
        <div class="container">
            <div class="width-login">
                <form class="form__register" action="/auth/register.php" method="POST">
                    <div class="container">
                        <div class="contact__form__title">
                            <h2>ĐĂNG KÍ TÀI KHOẢN</h2>
                        </div>
                        <div class="row d-flex align-items-center justify-content-center mb-4">
                            <div class="col-lg-3 text-right">
                                <h5 class="font-weight-bold">Tên Đăng Nhập*</h5>
                            </div>
                            <div class="col-lg-9">
                                <input class="input__form" type="text" name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center justify-content-center mb-4">
                            <div class="col-lg-3 text-right">
                                <h5 class="font-weight-bold">Họ Tên*</h5>
                            </div>
                            <div class="col-lg-9">
                                <input class="input__form" type="text" name="fullname" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center justify-content-center mb-4">
                            <div class="col-lg-3 text-right">
                                <h5 class="font-weight-bold">E-Mail*</h5>
                            </div>
                            <div class="col-lg-9">
                                <input class="input__form" type="email" name="email" placeholder="E-Mail">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center justify-content-center mb-4">
                            <div class="col-lg-3 text-right">
                                <h5 class="font-weight-bold">Số điện thoại*</h5>
                            </div>
                            <div class="col-lg-9">
                                <input class="input__form" type="number" name="phone" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center justify-content-center mb-4">
                            <div class="col-lg-3 text-right">
                                <h5 class="font-weight-bold">Mật Khẩu*</h5>
                            </div>
                            <div class="col-lg-9">
                                <input class="input__form" type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center justify-content-center mb-4">
                            <div class="col-lg-3 text-right">
                                <h5 class="font-weight-bold">Xác Nhận Mật Khẩu*</h5>
                            </div>
                            <div class="col-lg-9">
                                <input class="input__form" type="password" name="password_confirm" placeholder="Password Confirm*">
                            </div>
                        </div>
                        <!-- <div class="row d-flex align-items-center justify-content-center mb-4">
                            <div class="col-lg-3 text-right">
                                <h5 class="font-weight-bold">Người giới thiệu</h5>
                            </div>
                            <div class="col-lg-9">
                                <input class="input__form" type="text" name="sponsor" placeholder="Sponsor">
                            </div>
                        </div> -->

                        <div class="row d-flex justify-content-center">
                            <!-- <div class="col-lg-6 d-flex align-items-center justify-content-end">
                                <input type="checkbox" id="regis">
                                <label class="mb-0 ml-3 text-nowrap" for="regis">Tôi đã đọc và đồng ý với <a class="signup__register"
                                        href="#">Các điều khoản</a></label>
                            </div> -->
                            <div class="col-lg-6">
                                <button type="submit" class="site-btn">Đăng Kí</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
