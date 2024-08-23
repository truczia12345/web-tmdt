<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Kiểm tra vai trò người dùng
if ($_SESSION['user_role'] != 'admin') {
    header("Location: unauthorized.php"); // Hoặc thông báo lỗi
    exit();
}
?>
