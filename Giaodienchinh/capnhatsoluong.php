<?php
session_start();

if (isset($_POST['masp']) && isset($_POST['soluong'])) {
    $masp = $_POST['masp'];
    $soluong = $_POST['soluong'];

    // Kiểm tra giỏ hàng đã tồn tại chưa
    if (isset($_SESSION['giohang'])) {
        // Kiểm tra sản phẩm có trong giỏ hàng không
        foreach ($_SESSION['giohang'] as $key => $item) {
            if ($item['masp'] == $masp) {
                // Cập nhật số lượng
                $_SESSION['giohang'][$key]['soluong'] = $soluong;
                break;
            }
        }
    }
}

// Chuyển hướng về trang giohang.php
header("Location: giohang.php");
exit();
?>
