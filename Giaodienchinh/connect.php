<?php
$servername = '127.0.0.1:3307';
$username = 'root';
$password = '';  // Thay thế bằng mật khẩu thực tế
$database = 'bandienthoai_web';

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_errno) {
    echo "Kết nối thất bại!" . $conn->connect_error;
    exit();
}
?>
