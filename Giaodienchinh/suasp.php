<?php include "header.php"?>
<?php

// Kết nối với cơ sở dữ liệu
include "connect.php";

// Lấy dữ liệu từ form
$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];

// Cập nhật dữ liệu
$sql = "UPDATE products SET
  name='$name',
  price='$price',
  description='$description'
WHERE id='$id'";

$result = $conn->query($sql);

// Kiểm tra kết quả
if ($result) {
  echo "Cập nhật thành công";
} else {
  echo "Cập nhật thất bại";
}

// Đóng kết nối
$conn->close();

?>

<body>

  <h1>Chỉnh sửa chi tiết sản phẩm</h1>

  <form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="form-group">
      <label for="name">Tên sản phẩm</label>
      <input type="text" name="name" id="name" value="<?php echo $name; ?>" class="form-control">
    </div>

    <div class="form-group">
      <label for="price">Giá sản phẩm</label>
      <input type="number" name="price" id="price" value="<?php echo $price; ?>" class="form-control">
    </div>

    <div class="form-group">
      <label for="description">Mô tả sản phẩm</label>
      <textarea name="description" id="description" class="form-control"><?php echo $description; ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
  </form>

</body>

<?php include "footer.php"?>