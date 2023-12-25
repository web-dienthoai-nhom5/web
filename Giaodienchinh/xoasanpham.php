<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kiểm tra xem masp có được thiết lập trong yêu cầu hay không
    if(isset($_POST['masp'])) {
        $product_id = $_POST['masp'];
    
        // Debug: In ra giá trị mã sản phẩm
        var_dump($product_id);
    
        // Xóa sản phẩm khỏi session giỏ hàng
        unset($_SESSION['giohang'][$product_id]);
        
        // Chuyển hướng người dùng trở lại trang giohang.php
        header("location: giohang.php");
        exit();
    } else {
        echo "Mã sản phẩm không được thiết lập trong yêu cầu. Không thể xóa sản phẩm.";
    }
} else {
    // Đối với truy cập trực tiếp vào trang xoasanpham.php
    header("location: giohang.php");
    exit();
}
?>
