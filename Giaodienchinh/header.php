<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiTan shop</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>
        /* Reset some default styles */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

/* Set the base font size and family */
body {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    line-height: 1.6;
    background-color: #f4f4f4; /* Add a background color for the body */
}

/* Style the main-top container */
.main-top {
    margin-top: 20px; /* Adjust as needed */
}

/* Style the header */
header {
    background-color: #333;
    color: #fff;
    padding: 10px;
}

.header .img {
    display: flex;
    align-items: center;
}

header h1 a {
    color: #fff;
    text-decoration: none;
}

.logo {
    max-width: 100px;
    max-height: 100px;
    margin-left: 10px; /* Adjust as needed */
}

/* Style the navigation bar */
.bar {
    background-color: #eee;
    padding: 10px;
}

nav {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

nav a {
    color: #333;
    text-decoration: none;
    padding: 10px;
    border-radius: 5px;
}

nav a:hover {
    background-color: #ddd;
    color: #333;
}

.search input {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Style the login and signup buttons */
.login-btn, .signup-btn {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px;
    margin-left: 10px;
    border-radius: 5px;
    cursor: pointer;
}

.login-btn a, .signup-btn a {
    color: #fff;
    text-decoration: none;
}

.account {
    color: black;
}

    </style>
</head>

<?php
session_start();

?>

<body>
<div class="main-top" id="home">
    <header>
        <div class="img">
            <h1><a>TiTan shop</a></h1>
            <!-- <img src="https://img5.thuthuatphanmem.vn/uploads/2021/11/22/hinh-nen-xanh-ngoc-bich_100607046.jpg" alt="Logo" class="logo"> -->
        </div>
        <div class="bar">
            <nav>
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm...">
                </div>
                <a href="index.php"><i class="fas fa-home"></i> Trang chủ</a>
                <a href="Samsung.php"><i class="fas fa-mobile"></i> Samsung</a>
                <a href="phukien.php"><i class="fas fa-mobile-alt"></i> Phụ kiện</a>
                <a href="giohang.php"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a>
                <?php
    // Kiểm tra nếu người dùng đã đăng nhập
    if (isset($_SESSION['tendangky'])) {
        echo '<div id="account" color: #fff>Tài khoản</div>';
        echo '<button class="logout-btn"><a href="dangxuat.php">Đăng xuất</a></button>';
    } else {
        // Nếu chưa đăng nhập, hiển thị nút Đăng nhập và Đăng ký
        echo '<button class="login-btn"><a href="dangnhap.php">Đăng nhập</a></button>';
        echo '<button class="signup-btn"><a href="dangky.php">Đăng ký</a></button>';
    }
    ?>
            </nav>
        </div>
    </header>
