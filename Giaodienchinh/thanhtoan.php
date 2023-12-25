<?php
session_start();

// Kết nối đến cơ sở dữ liệu
require_once('connect.php');

// Kiểm tra nếu người dùng nhấn nút thanh toán
if (isset($_POST['thanhtoan'])) {
    // Lấy thông tin giỏ hàng từ session
    $giohang = $_SESSION['giohang'];

    // Tạo hóa đơn mới
    $ngayHD = date("Y-m-d");
    $maKH = "KH01"; // Thay đổi thành mã khách hàng thích hợp
    $tongTien = 0;

    // Thêm hóa đơn vào bảng HOADON
    $sqlInsertHoaDon = "INSERT INTO HOADON (NGHD, MAKH, TRIGIA) VALUES ('$ngayHD', '$maKH', '$tongTien')";
    if ($conn->query($sqlInsertHoaDon) === TRUE) {
        // Lấy số hóa đơn vừa tạo
        $soHD = $conn->insert_id;

        // Duyệt qua từng sản phẩm trong giỏ hàng
        foreach ($giohang as $item) {
            $masp = $item['masp'];
            $soluong = $item['soluong'];

            // Lấy thông tin sản phẩm từ bảng SANPHAM
            $sqlSelectSanPham = "SELECT * FROM SANPHAM WHERE MASP = '$masp'";
            $result = $conn->query($sqlSelectSanPham);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $gia = $row['Gia'];
                $trigia = $gia * $soluong;

                // Thêm chi tiết hóa đơn vào bảng CTHD
                $sqlInsertCTHD = "INSERT INTO CTHD (SOHD, MASP, SL) VALUES ('$soHD', '$masp', '$soluong')";
                if ($conn->query($sqlInsertCTHD) === TRUE) {
                    // Cập nhật số lượng sản phẩm trong bảng SANPHAM
                    $sqlUpdateSanPham = "UPDATE SANPHAM SET Soluong = Soluong - $soluong WHERE MASP = '$masp'";
                    $conn->query($sqlUpdateSanPham);

                    // Cập nhật tổng tiền của hóa đơn
                    $tongTien += $trigia;
                } else {
                    echo "Lỗi: " . $sqlInsertCTHD . "<br>" . $conn->error;
                }
            }
        }

        // Cập nhật tổng tiền của hóa đơn trong bảng HOADON
        $sqlUpdateTongTien = "UPDATE HOADON SET TRIGIA = '$tongTien' WHERE SOHD = '$soHD'";
        $conn->query($sqlUpdateTongTien);
        // Lấy giá trị SOHD của hóa đơn vừa tạo
        $soHD = mysqli_insert_id($conn);
        // Xóa giỏ hàng sau khi thanh toán thành công
        unset($_SESSION['giohang']);

        echo "Thanh toán thành công. Hóa đơn của bạn là số: " . $soHD;
        echo "<br><br><a href='trangchu.php'>Trở về trang chủ</a>";
    } else {
        echo "Lỗi: " . $sqlInsertHoaDon . "<br>" . $conn->error;
    }
}

// Đóng kết nối
$conn->close();
?>
