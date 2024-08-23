<?php
session_start();
include "../config.php"; // File này chứa thông tin kết nối cơ sở dữ liệu của bạn
include "../includes/head.php";
$isLoggedIn = isset($_SESSION['user_id']); // Kiểm tra người dùng đã đăng nhập chưa
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mã hóa mật khẩu bằng MD5
    $hashed_password = md5($password);

    // Câu truy vấn kiểm tra thông tin đăng nhập
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$hashed_password' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Nếu đăng nhập thành công
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_fullname'] = $user['fullname'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_username'] = $user['username'];
        $_SESSION['user_role'] = $user['role'];
        $_SESSION['user_created_at'] = $user['created_at'];


        if (isset($_POST['RememberMe'])) {
            // Thiết lập cookie nếu chọn "Lưu mật khẩu"
            setcookie('user_username', $username, time() + (86400 * 30), "/"); // Cookie tồn tại trong 30 ngày
            setcookie('user_password', $password, time() + (86400 * 30), "/");
        }

        // Thiết lập thông báo thành công
        $_SESSION['login_success'] = "Đăng nhập thành công!";
        
        // Chuyển hướng về trang chủ sau khi đăng nhập thành công
        header('Location: ../index.php');
        exit();
    } else {
        // Nếu thông tin đăng nhập không đúng
        $error_message = "Tài khoản hoặc mật khẩu không đúng!";
    }
}
?>


<section class="login">
    <div class="container">
        <div class="width-login">
            <div class="header__login">
                <h2>Chào mừng bạn đã đến với</h2>
                <a href="index.php"><img src="./img/utostartup/logo.png" class="img-fluid mt-3" alt=""></a>
            </div>

            <?php if (isset($error_message)): ?>
                <div class="alert alert-danger">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>

            <form class="form__login" method="post" action="auth/login.php">
                <input type="username" name="username" placeholder="Tên đăng nhập" required value="<?php echo isset($_COOKIE['user_username']) ? $_COOKIE['user_username'] : ''; ?>">
                <input type="password" name="password" placeholder="Mật khẩu" required value="<?php echo isset($_COOKIE['user_password']) ? $_COOKIE['user_password'] : ''; ?>">
                <div class="text-center">
                    <div class="mb-1 d-flex align-items-center justify-content-center">
                        <input class="check" type="checkbox" id="group1" name="RememberMe" value="true" <?php echo isset($_COOKIE['user_username']) ? 'checked' : ''; ?>>
                        <label class="mb-0 ml-3" for="group1">Lưu mật khẩu</label>
                    </div>
                </div>
                <div>
                    <button type="submit" class="site-btn" onclick="changeButtonText(this)">ĐĂNG NHẬP</button>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-6 col-6 mt-3 d-flex align-items-center justify-content-center">
                        <a class="signup__register" href="auth/register.php">Đăng ký</a>
                    </div>
                    <div class="col-lg-6 col-xs-6 col-6 mt-3">
                        <a class="signup__login" href="auth/forgotpass.php">Quên mật khẩu</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script>
        function changeButtonText(button) {
            button.disabled = true; // Vô hiệu hóa nút để ngăn người dùng nhấn nhiều lần
            button.innerHTML = "ĐANG ĐĂNG NHẬP"; // Thay đổi văn bản của nút

            // Gửi form
            button.form.submit();

            // Chờ phản hồi từ server, nếu thất bại sẽ trả về trạng thái ban đầu
            setTimeout(function() {
                button.disabled = false; // Kích hoạt lại nút
                button.innerHTML = "ĐĂNG NHẬP"; // Trả về văn bản ban đầu nếu đăng nhập không thành công
            }, 3000); // Thời gian này có thể điều chỉnh tùy vào thời gian xử lý của server
        }
    </script>
