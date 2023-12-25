<?php 
include "header.php"

?>

<style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    text-align: center;
    padding: 20px;
        }
        h2 {
            color: #333;
        }

        form {
            width: 50%;
            margin: 20px auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        td {
            padding: 10px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2c3e50;
        }
</style>
<?php
// Kết nối đến cơ sở dữ liệu (thay đổi thông tin kết nối theo cấu hình của bạn)
include "connect.php";

// Xử lý đăng ký khi nhấn nút "Đăng ký"
if(isset($_POST['dangky'])) {
    $tendangky = $_POST["tendangky"];
    $hoten = $_POST["hoten"];
    $sodt = $_POST["sodt"];
    $dchi = $_POST["dchi"];
    $matkhau = $_POST["matkhau"];
    $email = $_POST["email"];

    // Kiểm tra xem tên người dùng đã tồn tại chưa
    $checkUserQuery = "SELECT * FROM users WHERE tendangky = '$tendangky'";
    $result = $connect->query($checkUserQuery);

    if ($result->num_rows > 0) {
        echo "Tên người dùng đã tồn tại. Vui lòng chọn tên khác.";
    } else {
        // Thêm người dùng mới vào cơ sở dữ liệu
        $insertUserQuery = "INSERT INTO users (tendangky, hoten, sodt, dchi, matkhau, email) VALUES ('$tendangky', '$hoten', '$sodt', '$dchi', '$matkhau', '$email')";

        if ($connect->query($insertUserQuery) === TRUE) {
            echo "Đăng ký thành công!";
            // Chuyển hướng đến trang chủ
            header("Location: trangchu.php"); // Đổi 'trangchu.php' thành đường dẫn thực tế của trang chủ
            $_SESSION['tendangky'] = $tendangky;
            exit(); // Đảm bảo không có mã PHP nào thực hiện sau khi chuyển hướng

        } else {
            echo "Lỗi: " . $insertUserQuery . "<br>" . $connect->error;
        }
    }
}
$connect->close();

?>

<body>
    <h2>ĐĂNG KÝ THÀNH VIÊN</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <table border='1' width='50%'>
            <tr>
                <td><label for="tendangky">Tên đăng ký:</label></td>
                 <td> <input type="text" name="tendangky" required><br></td>
             </tr>
            <tr>
                <td><label for="hoten">Họ và Tên:</label></td>
                <td> <input type="text" name="hoten" required><br></td>
            </tr>
            <tr>
                <td><label for="sodt">Số điện thoại:</label></td>
                <td><input type="tel" name="sodt"><br></td>
            </tr>
            <tr>
                <td><label for="dchi">Địa chỉ:</label></td>
                <td><input type="text" name="dchi"><br></td>
            </tr>
            <tr>
                <td><label for="email" >Email:</label></td>
                <td><input type="email" size='50' name="email" required><br></td>
            </tr>
            <tr>
                <td><label for="matkhau">Mật khẩu:</label></td>
                <td><input type="password" name="matkhau" required><br></td>
            </tr>
            <tr>
                <td colspan='2'><input type="submit" name='dangky' value="Đăng ký"></td>
            </tr>
        </table>
    </form>
    <?php include "footer.php"?>

