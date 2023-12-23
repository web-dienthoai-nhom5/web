<?php include "header.php"?>
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
    include('../admincp/config/connect.php');
// Function to securely hash the password
function hashPassword($matkhau) {
    return password_hash($matkhau, PASSWORD_BCRYPT);
}

if(isset($_POST['dangky'])) {
    // Retrieve form data
    $hoten = $_POST["hoten"];
    $email = $_POST["email"];
    $dchi = $_POST["dchi"];
    $sodt =  $_POST["sodt"];
    $matkhau = $_POST["matkhau"];
    $hashed_matkhau = hashPassword($matkhau);

    // Insert data into the 'members' table
    $sql = "INSERT INTO dangky (HOTEN, SODT, DCHI , EMAIL, MATKHAU) VALUES ('$hoten', '$sodt', '$dchi', '$email', '$hashed_matkhau')";
    if ($sql) {
        echo '<script type="text/javascript">alert("Bạn đã đăng ký thành công!");</script>';
    } 
}
    #$connect->close();
?>
<body>
    <h2>ĐĂNG KÝ THÀNH VIÊN</h2>
    <form action=" " method="post">
        <table border='1' width='50%'>
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


