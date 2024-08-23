<?php
$servername = "localhost"; // Tên server
$username = "root"; // Tên đăng nhập của bạn
$password = ""; // Mật khẩu của bạn
$dbname = "uto"; // Tên database

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
