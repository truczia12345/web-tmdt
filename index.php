<?php
session_start();

// Hiển thị thông báo nếu đăng nhập thành công
if (isset($_SESSION['login_success'])) {
    echo '<div class="alert alert-success">' . $_SESSION['login_success'] . '</div>';
    unset($_SESSION['login_success']); // Xóa thông báo sau khi hiển thị
}

include "./includes/head.php";
include "./includes/header.php";
include "./includes/home.php";
include "./includes/footer.php";