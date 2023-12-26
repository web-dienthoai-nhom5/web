<form action="login.php" method="post">
  <input type="text" name="username" placeholder="Tên đăng nhập">
  <input type="password" name="password" placeholder="Mật khẩu">
  <input type="submit" value="Đăng nhập">
</form>


<?php

// Lấy thông tin tên đăng nhập và mật khẩu từ form
$username = $_POST['username'];
$password = $_POST['password'];

// Kiểm tra xem thông tin đăng nhập có hợp lệ hay không
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
  // Thông tin đăng nhập hợp lệ

  // Tạo session cho người dùng
  session_start();
  $_SESSION['username'] = $username;

  // Chuyển hướng người dùng đến trang chủ
  header("Location: index.php");
} else {
  // Thông tin đăng nhập không hợp lệ

  echo "Thông tin đăng nhập không hợp lệ";
}

?>
