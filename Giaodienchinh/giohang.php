
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td form {
            display: flex;
            align-items: center;
        }

        td form input[type="number"] {
            width: 50px;
            margin-right: 10px;
        }

        td form button {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
        }

        td form button:hover {
            background-color: #45a049;
        }

        td form input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
        }

        td form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Giỏ hàng</h1>

    <?php
    session_start();

    // Kiểm tra sự tồn tại của giỏ hàng trong session
    if (!isset($_SESSION['giohang'])) {
        echo "<p>Giỏ hàng trống.</p>";
    } else {
        // Hiển thị giỏ hàng
        echo "<table>";
        echo "<tr><th>Mã SP</th><th>Tên SP</th><th>Giá</th><th>Số Lượng</th><th>Tổng Tiền</th><th>Xóa</th></tr>";
        $tongTien = 0;
        foreach ($_SESSION['giohang'] as $key => $item) {
            // Kiểm tra xem khóa 'soluong' có tồn tại trong mỗi phần tử của giỏ hàng hay không
            $soluong = isset($item['soluong']) ? intval($item['soluong']) : 1;

            // Kiểm tra nếu $soluong là một số nguyên hợp lệ
            if (is_int($soluong) && $soluong > 0) {
                $tongTien += $item['gia'] * $soluong;

                echo "<tr>";
                echo "<td>{$item['masp']}</td>";
                echo "<td>{$item['tensp']}</td>";
                echo "<td>{$item['gia']}</td>";
                echo "<td><form method='post' action='capnhatsoluong.php'>
                        <input type='hidden' name='masp' value='{$item['masp']}'>
                        <input type='number' name='soluong' value='{$soluong}' min='1'>
                        <button type='submit'>Cập nhật</button>
                    </form></td>";
                    echo "<td>" . ($item['gia'] * $soluong) . "</td>";
                echo "<td><form method='post' action='xoasanpham.php'>
                        <input type='hidden' name='masp' value='{$item['masp']}'>
                        <button type='submit'>Xóa</button>
                    </form></td>";
                echo "</tr>";
            } else {
                // Xử lý trường hợp $soluong không hợp lệ
                echo "<tr><td colspan='6'>Số lượng không hợp lệ.</td></tr>";
            }
        }
        echo "<tr><td colspan='4'><b>Tổng Tiền</b></td><td><b>{$tongTien}</b></td><td></td></tr>";
        echo "</table>";
    }
    ?>

    <!-- Nút thanh toán -->
    <form method='post' action='thanhtoan.php'>
        <input type='submit' name='thanhtoan' value='Thanh toán'>
    </form>
</body>
</html>
