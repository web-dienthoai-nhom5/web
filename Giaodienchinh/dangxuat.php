<?php
// Bắt đầu phiên
session_start();

// Hủy bỏ phiên đăng nhập
session_unset();
session_destroy();

// Chuyển hướng về trang chủ hoặc trang đăng nhập (tùy thuộc vào yêu cầu của bạn)
header("Location: trangchu.php");
exit();
?>
