<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Đăng nhập</title>
</head>
<body>

  <h1>Đăng nhập</h1>

  <form action="dangnhap.php" method="post">

    <div class="form-group">
      <label for="username">Tên đăng nhập</label>
      <input type="text" name="username" id="username" class="form-control">
    </div>

    <div class="form-group">
      <label for="password">Mật khẩu</label>
      <input type="password" name="password" id="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Đăng nhập</button>

  </form>

</body>
</html>

<?php

// Kiểm tra quyền đăng nhập
if (isset($_POST["username"]) && isset($_POST["password"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Kiểm tra trong bảng admin
  $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

  $result = $conn->query($sql);

  // Nếu người dùng là admin
  if ($result->num_rows > 0) {
    // Chuyển hướng đến trang của admin
    header("Location: admin.php");
  } else {
    // Kiểm tra trong bảng users
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = $conn->query($sql);

    // Nếu người dùng tồn tại
    if ($result->num_rows > 0) {
      // Đăng nhập bình thường
      $row = $result->fetch_assoc();

      // Đặt thông tin người dùng vào session
      $_SESSION["username"] = $row["username"];
      $_SESSION["is_admin"] = $row["is_admin"];

      // Chuyển hướng đến trang chủ
      header("Location: index.php");
    } else {
      // Người dùng không tồn tại
      echo "Tài khoản hoặc mật khẩu không chính xác";
    }
  }

  // Đóng kết nối
  $conn->close();
}

?>
