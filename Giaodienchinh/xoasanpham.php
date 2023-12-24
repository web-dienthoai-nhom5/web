<?php
session_start();

if (isset($_POST['Masp'])) {
    $masp = $_POST['Masp'];

    // Kiểm tra giỏ hàng đã tồn tại chưa
    if (isset($_SESSION['giohang'])) {
        // Kiểm tra sản phẩm có trong giỏ hàng không
        foreach ($_SESSION['giohang'] as $key => $item) {
            if ($item['Masp'] == $masp) {
                // Xóa sản phẩm
                unset($_SESSION['giohang'][$key]);
                break;
            }
        }
    }
}

// Chuyển hướng về trang giohang.php
header("Location: giohang.php");
exit();
?>
