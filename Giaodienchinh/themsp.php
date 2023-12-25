<?php include "header.php"?>
<?php
// Kết nối đến cơ sở dữ liệu (thay đổi thông tin kết nối theo cấu hình của bạn)
include "connect.php";



// Lấy dữ liệu từ form
$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];

// Thêm dữ liệu
$sql = "INSERT INTO products (name, price, description) VALUES ('$name', '$price', '$description')";

$result = $conn->query($sql);

// Kiểm tra kết quả
if ($result) {
  echo "Thêm sản phẩm thành công";
} else {
  echo "Thêm sản phẩm thất bại";
}

// Đóng kết nối
$conn->close();

?>
<body>
<h2>Thêm sản phẩm</h2>
        <form action="add.php" method="post">
            <input type="text" name="name" placeholder="Tên sản phẩm">
            <input type="number" name="quantity" placeholder="Số lượng sản phẩm">
            <input type="number" name="price" placeholder="Giá sản phẩm">
            <textarea name="description" placeholder="Mô tả sản phẩm"></textarea>
            <button type="submit">Thêm</button>
        </form>
</body>

<?php include "footer.php"?>