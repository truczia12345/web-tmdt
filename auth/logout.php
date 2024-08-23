<?php
session_start();
session_destroy(); // Hủy bỏ tất cả các session hiện tại
header('Location: ../index.php'); // Chuyển hướng về trang chủ
exit();
?>
