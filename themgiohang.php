<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm vào giỏ hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #4caf50;
            font-size: 18px;
        }

        a {
            color: #4caf50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Thêm vào giỏ hàng</h1>

    <?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['masp'])) {
        $masp = $_POST['masp'];
        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];

        // Kiểm tra giỏ hàng đã tồn tại chưa
        if (!isset($_SESSION['giohang'])) {
            $_SESSION['giohang'] = array();
        }

        // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
        $found = false;
        foreach ($_SESSION['giohang'] as &$item) {
            if ($item['masp'] == $masp) {
                // Tăng số lượng nếu sản phẩm đã có trong giỏ hàng
                $item['soluong']++;
                $found = true;
                break;
            }
        }

        // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới với số lượng là 1
        if (!$found) {
            $giohang_item = array(
                'masp' => $masp,
                'tensp' => $tensp,
                'gia' => $gia,
                'soluong' => 1
            );
            $_SESSION['giohang'][] = $giohang_item;
        }

        // Hiển thị thông báo và chuyển hướng đến trang giỏ hàng sau 2 giây
        echo "<p>Sản phẩm đã được thêm vào giỏ hàng.</p>";
        echo "<p>Đang chuyển đến <a href='giohang.php'>Giỏ hàng</a>...</p>";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'giohang.php';
                }, 2000);
              </script>";
    } else {
        echo "<p>Yêu cầu không hợp lệ.</p>";
    }
    ?>
</body>
</html>
